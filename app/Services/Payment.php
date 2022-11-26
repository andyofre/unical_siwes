<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;

Class Payment {

    protected static $apiKey;
    protected static $apiClient;

    public function __construct() {
        $this->apiKey = config('monnify.api');
        $this->apiClient = config('monnify.client');
    }

	public static function authenticate() {

        $response = Http::withHeaders([
            'Authorization' => 'Basic '.base64_encode(config('monnify.api').':'.config('monnify.client')),
            'Content-Type' => 'application/json',
        ])->post('https://sandbox.monnify.com/api/v1/auth/login');

        $data = json_decode($response->body(), true);

        if ($response->successful()) {
            return $data['responseBody']['accessToken'];
        }else {
            return  redirect()->back()->with('error', $data['responseMessage']);
        }



	}

	public static function create_invoice($payment_code, $description, $email, $name) {

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.self::authenticate(),
            'Content-Type' => 'application/json',
        ])->post('https://sandbox.monnify.com/api/v1/invoice/create', [
            "amount" => "1100",
            "invoiceReference" => $payment_code,
            "description" => $description,
            "currencyCode" => "NGN",
            "contractCode" => "8676647251",
            "customerEmail" => $email,
            "customerName" => $name,
            "expiryDate" => now()->addMonths(3)->toDateTimeString(),
            "paymentMethods" => ["ACCOUNT_TRANSFER"],
            "incomeSplitConfig" => [
                [
                    "subAccountCode" => "MFY_SUB_761385136994",
                    "feePercentage" => 100,
                    "splitAmount" => 1100,
                    "feeBearer" => true
                ]
            ],
            "redirectUrl" => "http://app.monnify.com"
        ]);

        $data = json_decode($response->body(), true);

        if ($response->successful()) {
            return $data['responseBody'];
        }else {
            return $data;
        }


	}

	public static function all_invoices() {

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.self::authenticate(),
            'Content-Type' => 'application/json',
        ])->get('https://sandbox.monnify.com/api/v1/invoice/all');

        $data = json_decode($response->body(), true);

        if ($response->successful()) {
            return $data['responseBody'];
        }else {
            return $data;
        }



	}

	public static function get_invoice($invoiceReference) {

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.self::authenticate(),
            'Content-Type' => 'application/json',
        ])->get('https://sandbox.monnify.com/api/v1/invoice/'.$invoiceReference.'/details');

        $data = json_decode($response->body(), true);

        if ($response->successful()) {
            return $data['responseBody'];
        }else {
            return $data;
        }



	}

	public static function cancel_invoice($invoiceReference) {

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.self::authenticate(),
            'Content-Type' => 'application/json',
        ])->post('https://sandbox.monnify.com/api/v1/invoice'.$invoiceReference.'/cancel');


        $data = json_decode($response->body(), true);

        if ($response->successful()) {
            return $data['responseBody'];
        }else {
            return $data;
        }


	}

	public static function payment_notification(Request $request) {




	}
}
