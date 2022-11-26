
@php

    $input = @file_get_contents("php://input");
    $event = json_decode($input);

    $my_event = $event->event;
    $status = $event->data->status;
    $webhook_source = $event->data->metadata->webhook_source;
    $id = $event->data->metadata->id;

    if ($my_event =="charge.success" && $status =="success" && $webhook_source=="siwes_fee") {
      // Update the table here

               // <!--if($result->data->status == 'success' || Auth::user()->portalFee == 0){-->

                     $student = AuthHelper::student();
                $data = [
                    'transactionReference'=> GenerateNumber::transactionRef(),
                    'invoiceReference'=> GenerateNumber::invoiceNumber(),
                    'invoiceStatus'=> 'PAID',
                    "description" => 'SIWES Registration Fee',
                    "customerEmail" => $student->email,
                    "customerName" => $student->full_name,
                    "expiryDate" => now()->addMonths(1),
                    "accountNumber" => GenerateNumber::accountNumber(),
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


//

               //    <!--if(Auth::user()->portalFee == 1){-->
               //    <!--       dd('success status ');-->
               //    <!--}else{-->
               //    <!--    dd('Failed to change');-->
               //    <!--}-->
               // }



    }


@endphp
