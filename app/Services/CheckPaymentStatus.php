<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

Class CheckPaymentStatus {

	public static function get($code,$session) {
		// 76452375691473252972027
		// 2015/2016
		// $re = file_get_contents('http://myunical.edu.ng/verifyfee/GetFeeValue.ashx?conf_no='.$code.'&session='.$session.'');
//        $re = 'OJONG~AUGUSTA~ETIM~CES/2015/202012~08062842548~2015/2016~SANDWICH~EDUCATION ADMINISTRATION AND PLANNING~200~25200.00~Female';
//
//		if ($re && strlen($re)>15){
//			$ree = $re;
//			$breakDown = explode("~",$ree);
//            // dd($breakDown);
//			$name = ''.$breakDown[0].' '.$breakDown[1].' '.$breakDown[2].' ';
//            $regNumber = $breakDown[3];
//			$faculty = $breakDown[7];
//			$level = $breakDown[8];
//			$data = [
//				'name' => $name,
//				'registeration_number' => $regNumber,
//				'session' => $session,
//				'payment_code' => $code,
//				'faculty' => $faculty,
//				'level' => $level,
//			];
//		}else {
//			$data = null;
//		}
//
//
//		return $data;




        $re = file_get_contents('https://myunical.edu.ng/verifyfee/GetSchoolFee.ashx?pin=' . $code.'');

        $res = json_decode($re, true);


        if (isset($res['status']) && $res['status'] == 'success') {
            $name = $res['data']['fullname'];
            $registeration_number = $res['data']['mat_no'];
            $faculty = $res['data']['faculty'];
            $department = $res['data']['department'];
            $level = $res['data']['level'];
            $session = $res['data']['session'];

            $data = [
                'name' => $name,
                'registeration_number' => $registeration_number,
                'session' => $session,
                'payment_code' => $code,
                'faculty' => $faculty,
                'department' => $department,
                'level' => $level,
            ];
        } else {
            $data = null;
        }



        return $data;

	}
}
