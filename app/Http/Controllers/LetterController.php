<?php

namespace App\Http\Controllers;

use App\Helpers\AuthHelper;
use App\Models\Payment;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LetterController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = AuthHelper::student();


        if ($student->approvedPayment() && !$student->acceptance_letter) {
           return redirect(route('studentletter'));
       }

//       dd( Auth::user()->student->email);
        return view('backend.students.letter.apply', compact('student'));
    }

    public function letter()
    {
        $student = AuthHelper::student();


        if (!$student->madePayment()) {
            return redirect()->route('studentgetletter');
        }
        if (!$student->approvedPayment()->approved) {
            return redirect()->route('studentpendingswiesfee');
        }
        $payment = $student->payment()->first();
        return view('backend.students.letter.show', compact('student','payment'));
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
