<?php

namespace App\Http\Controllers;

use App\Helpers\AuthHelper;
use App\Services\GenerateNumber;
use App\Services\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{


    public function siwesFee()
    {
        $student = AuthHelper::student();

        // $getInvoice = Payment::get_invoice($student->payment_code);

        // $getInvoice = Payment::get_invoice('1838913182');

        // if (count($getInvoice) < 7 ) {
        //     $data = Payment::create_invoice($student->payment_code, 'SIWES FEE', $student->email, $student->full_name);
        // }else {
        //     $data = $getInvoice;
        // }

        $data = [
            'transactionReference'=> GenerateNumber::transactionRef(),
            'invoiceReference'=> GenerateNumber::invoiceNumber(),
            'invoiceStatus'=> 'PAID',
            "description" => 'SIWES Registration Fee',
            "customerEmail" => $student->email,
            "customerName" => $student->full_name,
            "expiryDate" => now()->addMonths(1),
            "accountNumber" => '0110451768',
            "accountName" => 'SIWES REGISTRATION',
            "bankName" => '',
            "bankCode" => '',
            'approved' => false

        ];

        $invoice = $student->payment()->updateOrCreate(['name' => 'SIWES FEE'], [
            'name' => 'SIWES FEE',
            'amount' => '3000',
            "transactionReference" => $data['transactionReference'],
            "invoiceReference" => $data['invoiceReference'],
            "invoiceStatus" => $data['invoiceStatus'],
            "description" => $data['description'],
            "customerEmail" => $data['customerEmail'],
            "customerName" => $data['customerName'],
            "expiryDate" => $data['expiryDate'],
            "accountNumber" => $data['accountNumber'],
            "accountName" => $data['accountName'],
            "bankName" => $data['bankName'],
            "bankCode" => $data['bankCode'],
            'approved' => false
       ]);
        return redirect()->route('studentpaidsiwesfee');
    }

    public function siwesFeePaid(){

        $student = AuthHelper::student();
        if (!$student->madePayment()) {
            return redirect(route('studentgetletter'));
        }
        if (!$student->approvedPayment()->approved) {
            return redirect(route('studentpendingswiesfee'));
        }
        return view('backend.students.letter.paid', compact('student'));

    }

    public function siwesFeePending(){


        $student = AuthHelper::student();
        if (!$student->madePayment()) {
            return redirect(route('studentgetletter'));
        }
        if ($student->approvedPayment()->approved) {
            return redirect(route('studentletter'));
        }
        $payment = $student->payment['0'];

        return view('backend.students.letter.pending', compact('student', 'payment'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public  function payFee(){
        $email = request('email');
        $amount = request('amount');

        $id = Auth::user()->student->id;


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.paystack.co/transaction/initialize',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
            "email": "'.$email.'",
            "amount": '.($amount*100).',
            "metadata": {
                "id": '.$id.',
                "webhook_source":"siwes_fee"
                },
            "split": {
              "type": "flat",
              "beare`r_type": "account",
              "subaccounts": [
                {
                  "subaccount": "ACCT_2hwidwz5y9atbvn",
                  "share": 2500000

                },
                  {
                  "subaccount": "ACCT_g2u50d34647qn29",
                  "share": 100000
                }
              ]

            }
          }',
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer sk_test_e30983b87207ea65cc44b84c317f8a78645898fb",
                "Cache-Control: no-cache",
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $error_message = "";

        if ($err) {
            $error_message = "cURL Error #:" . $err;
        } else {
            if ($response) {
                // This happens if the response was executed successfully
                $result = json_decode($response);
                $my_status = $result->status;
                $my_message = $result->message;
                // Now we check the response status whether it's true or false
                if ($my_status =='true') {
                    // code...
                    $my_url = $result->data->authorization_url;
                    return redirect($my_url);
                    // header('location: https://google.com');
                } else {
                    // code...
                    $error_message = $my_message;
                }

                // End of checking response status
            } else {
                //Network issue
                $error_message = "Oops! We think you have  poor network connection, please try reloading the page";
            }

            // echo $response;
            //   echo $my_url;
        }

    }



    public  function  handleCallBack(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$_GET['reference']."",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer sk_test_e30983b87207ea65cc44b84c317f8a78645898fb",
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // echo $response;
            $result = json_decode($response);
            if ($result->data->status=='success') {

                $student = AuthHelper::student();
                $data = [
                    'transactionReference'=> GenerateNumber::transactionRef(),
                    'invoiceReference'=> GenerateNumber::invoiceNumber(),
                    'invoiceStatus'=> 'PAID',
                    "description" => 'SIWES Registration Fee',
                    "customerEmail" => $student->email,
                    "customerName" => $student->full_name,
                    "expiryDate" => now()->addMonths(1),
                    "accountNumber" => '0110451768',
                    "accountName" => 'SIWES REGISTRATION',
                    "bankName" => '',
                    "bankCode" => '',
                    'approved' => false

                ];

                $invoice = $student->payment()->updateOrCreate(['name' => 'SIWES FEE'], [
                    'name' => 'SIWES FEE',
                    'amount' => '3000',
                    "transactionReference" => $data['transactionReference'],
                    "invoiceReference" => $data['invoiceReference'],
                    "invoiceStatus" => $data['invoiceStatus'],
                    "description" => $data['description'],
                    "customerEmail" => $data['customerEmail'],
                    "customerName" => $data['customerName'],
                    "expiryDate" => $data['expiryDate'],
                    "accountNumber" => $data['accountNumber'],
                    "accountName" => $data['accountName'],
                    "bankName" => $data['bankName'],
                    "bankCode" => $data['bankCode'],
                    'approved' => false
                ]);

//                if($result->data->status == 'success' || Auth::user()->portalFee == 0){
//

                return redirect()->route('studentpaidsiwesfee');
//                }else{
//                    dd('Go back to dashboard');
//                }

            }
        }
    }


    public  function webhook(){
        return view('backend.students.letter.webhook');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
