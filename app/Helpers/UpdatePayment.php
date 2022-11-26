<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use App\Services\Payment;
use Illuminate\Support\Facades\DB;

Class UpdatePayment {

	public static function all() {

        $invoices = Payment::all_invoices();

        if (isset($invoices['content'])) {

            foreach ($invoices['content'] as $key => $data) {


                $payment = DB::select('select * from payments where invoiceReference = ?', [$data['invoiceReference']]);

                if (count($payment)>0) {

                    $save = DB::update('update payments set invoiceStatus = ? where invoiceReference = ?', [$data['invoiceStatus'], $data['invoiceReference']]);

                }

            }
        }

	}


}
