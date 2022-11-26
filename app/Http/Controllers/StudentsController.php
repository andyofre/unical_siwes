<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Helpers\AuthHelper;
use App\Helpers\UpdatePayment;
use App\Models\It;
use App\Models\Supervisor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $student = AuthHelper::student();


        if (!$student->madePayment()) {

            return redirect(route('studentgetletter'));
        }

        if (!$student->approvedPayment()->approved) {
            return redirect(route('studentpendingswiesfee'));
        }


        if ($student->approvedPayment()->approved && !$student->acceptance_letter) {
           return redirect(route('studentletter'));
       }

        if (!$student->startedIT()) {
            return redirect(route('studentpending'));
        }


        return view('backend.students.dashboard', compact('student'));
    }


    public function log()
    {
        $student_id = 23;
        $events = [
            [
                "id" => 1 ,
                "number" => 'Week One',
                "status" => 'done',
                "start" => carbon::now()->subWeeks(7),
                "end" => carbon::now()->subWeeks(6),
            ],
            [
                "id" => 2 ,
                "number" => 'Week Two',
                "status" => 'done',
                "start" => carbon::now()->subWeeks(6),
                "end" => carbon::now()->subWeeks(5),
            ],
            [
                "id" => 3 ,
                "number" => 'Week Three',
                "status" => 'done',
                "start" => carbon::now()->subWeeks(5),
                "end" => carbon::now()->subWeeks(4),
            ],
            [
                "id" => 4 ,
                "number" => 'Week Four',
                "status" => 'done',
                "start" => carbon::now()->subWeeks(4),
                "end" => carbon::now()->subWeeks(3),
            ],
            [
                "id" => 5 ,
                "number" => 'Week Five',
                "status" => 'done',
                "start" => carbon::now()->subWeeks(3),
                "end" => carbon::now()->subWeeks(2),
            ],
            [
                "id" => 6 ,
                "number" => 'Week Six',
                "status" => 'done',
                "start" => carbon::now()->subWeeks(2),
                "end" => carbon::now()->subWeeks(1),
            ],
            [
                "id" => 7 ,
                "number" => 'Week Seven',
                "status" => 'undone',
                "start" => carbon::now()->subWeeks(1),
                "end" => carbon::now(),
            ],
            [
                "id" => 8 ,
                "number" => 'Week Eight',
                "status" => 'undone',
                "start" => carbon::now(),
                "end" => carbon::now()->addWeeks(1),
            ],
            [
                "id" => 9 ,
                "number" => 'Week Nine',
                "status" => 'undone',
                "start" => carbon::now()->addWeeks(1),
                "end" => carbon::now()->addWeeks(2),
            ],
            [
                "id" => 10 ,
                "number" => 'Week Ten',
                "status" => 'undone',
                "start" => carbon::now()->addWeeks(2),
                "end" => carbon::now()->addWeeks(3),
            ],
            [
                "id" => 11 ,
                "number" => 'Week Eleven',
                "status" => 'undone',
                "start" => carbon::now()->addWeeks(3),
                "end" => carbon::now()->addWeeks(4),
            ],
            [
                "id" => 12 ,
                "number" => 'Week Twelve',
                "status" => 'undone',
                "start" => carbon::now()->addWeeks(4),
                "end" => carbon::now()->addWeeks(5),
            ],
                ];
        return view('backend.students.log', compact('events', 'student_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function profile()
    {
        $student = AuthHelper::student();
        return view('backend.students.profile', compact('student'));
    }

    public function pending()
    {
        $student = AuthHelper::student();

        if ($student->getPassport() == null) {
            return redirect(route('studentpassport'));
        }
        $student = AuthHelper::student();
        $payment = $student->payment()->first();
        return view('backend.students.main', compact('student', 'payment'));
    }

    public function startit(Request $request)
    {
        $student = AuthHelper::student();

        $data = request()->validate([
            'date' => 'required',
            'supervisor_name' => 'required',
            'supervisor_title' => 'required',
            'supervisor_email' => 'required',
            'supervisor_number' => 'required',
            'company_name' => 'required',
            'company_email' => 'required',
            'trainer' => 'required',
            'trainer_title' => 'required',
            'company_number' => 'required',
            'company_address' => 'required',
            'file' => 'required',
        ]);

        //
        if ($student->supervisor()->exists()) {
            $supervisor = $student->supervisor;
        }else {
            $supervisor = $student->supervisor()->Create([
                'name' =>  $data['supervisor_name'],
                'title' =>  $data['supervisor_title'],
                'number' =>  $data['supervisor_number'],
                'email' =>  $data['supervisor_email'],
                'faculty' => $student->faculty,
                'department' =>  $student->faculty,
                'user_id' =>  Auth::user()->id,
                'password' => Hash::make($data['supervisor_number']),
            ]);
        }

        if ($student->company()->exists()) {
            $company =  $student->company;
        }else {
            $company =  $student->company()->Create([
                'name' =>  $data['company_name'],
                'title' =>  $data['trainer_title'],
                'number' =>  $data['company_number'],
                'email' =>  $data['company_email'],
                'address' =>  $data['company_address'],
                'trainer' =>  $data['trainer'],
                'user_id' =>  Auth::user()->id,
                'password' => Hash::make($data['company_number']),
            ]);
        }

        $name = $student->getFirstName();
        $id = $student->id;
        $extension = request()->file('file')->getClientOriginalExtension();
        $image_name = Str::lower($name.'-'.$id.'.'.$extension);
        $data['acceptance_letter'] = request()->file('file')->storeAs('acceptance_letter', $image_name,['disk' => 'public']);


        $student->update([
            'company_id' => $company->id,
            'supervisor_id' => $supervisor->id,
            'acceptance_letter' => $data['acceptance_letter']
        ]);

        $start_it = It::create([
            'status' => true ,
            'approved' => true,
            'student_id' => $student->id,
            'company_id' => $company->id,
            'supervisor_id' => $supervisor->id,
            'start' => Carbon::create($data['date']),
        ]);

        return redirect(route('studentdashboard'));
    }

    public function request()
    {
        $student = AuthHelper::student();

        return view('backend.students.request', compact('student'));
    }

    public function readForm(){
        $student = AuthHelper::student();

        $upload = DB::table('uploads')->get();

        return view('backend.students.forms.index',  compact('student', 'upload'));
    }

    public function create()
    {
        //
    }


    public function preview($id)
    {
        //
        $student = AuthHelper::student();
        $pdf = Upload::find($id);

        return view('backend.students.forms.preview', compact('pdf', 'student'));
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
