<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiwesPaymentController extends Controller
{
    //

  public  function  makePayment(){
      return view('backend.students.letter.apply');
    }
}
