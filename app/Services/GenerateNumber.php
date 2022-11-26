<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Student;

Class GenerateNumber {

	public static function applicationNumber() {
		$year = date('y');
		$id = count(Student::all());
		$id = str_pad($id, 3, '0', STR_PAD_LEFT);
        $number = $year.''.$id.'';
		$pin = 'PGACC|'.$number;
		return $number;
	}

	public static function invoiceNumber() {
		//generate payment number with expiry date
		$time = time();
		$num = substr($time,-6,6);
		$pin = 'SIWES|PAY|'.$num.'';
		return $pin;
	}


	public static function transactionRef() {
		//generate payment number with expiry date
		$time = time() * 9999;
		$num = substr($time,-6,6);
		$pin = 'TRANS|'.$num.'|'.self::applicationNumber();
		return $pin;
	}


	public static function accountNumber() {
		//generate payment number with expiry date
		$time = time() * 999999;
		$num = substr($time,-10,10);
		return $num;
	}

    //76452375691473252972027
}
