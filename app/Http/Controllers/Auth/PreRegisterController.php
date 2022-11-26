<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use App\Services\CheckPaymentStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use function GuzzleHttp\Promise\all;


class PreRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  view('verify');
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


//        dd($request->all());
//

        $validate = Validator::make($request->all(), [
            'full_name' => 'required|unique:students,full_name,',
            'faculty' => 'required',
            'department' => 'required',
            'unit' => 'required',
            'registration_number'  =>'required',
            'year'   => 'required',
            'program'   => 'required',
            'phone' => 'required|numeric|max:11|min:11',
            'email' => 'required|string|email|max:255|unique:users,email,',
            'password' => 'required_with:confirm_password|same:password_confirmation|min:6',
            'password_confirmation' => '',


        ])->validate();

        $full_name = $request->full_name;

        $faculty = $request->faculty;
        $department = $request->department;
        $unit = $request->unit;
        $registration_number = $request->registration_number;
        $year = $request->year;
        $program = $request->program;
        $phone = $request->phone;
        $email = $request->email;
        $password = $request->password;

        $data = new Student();

        $data->full_name = $request->full_name;
        $data->faculty = $request->faculty;

        $data->department = $request->department;
        $data->unit = $request->unit;
        $data->registration_number = $request->registration_number;
        $data->year = $request->year;
//        $data->user_id = $request->user_id;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);


        $user = User::create([
            'name' => $data['full_name'],
            'email' => $data['email'],
            'password' => Hash::make($request->password),
            'role' => '1',
        ]);

//         dd($data);
        $data->user_id  = $user->id;
        $data->save();
        if ($data->save() == true){
            return redirect()->back()->with('success_message','Registration successful, login and continue 😊 !');

        }




        // Alert::success('success_message', 'Registration successful, login and continue !');


    }






    public function checkStudentFeeStatus(Request $request)
    {
        $request->validate([
            'payment_code' => 'string|required|unique:students',
            'session' => 'string|required',
        ]);
        $payment_code = request('payment_code');
        $session = request('session');

        $data = CheckPaymentStatus::get($payment_code, $session);


        if(collect($data)->isEmpty()) return back()->with('error_message', 'Student Pin invalid, not found in record! Try again. 😞');
        session(['data' => $data]);

        return redirect()->route('pass.verification');

    }

    public function  registration(){

        $data = session('data');

        return view('form', compact('data'));
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
