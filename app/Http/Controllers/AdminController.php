<?php

namespace App\Http\Controllers;

use App\Helpers\UpdatePayment;
use App\Models\Company;
use App\Models\Request as ModelsRequest;
use App\Models\Student;
use App\Models\Supervisor;
use App\Models\Upload;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalUser = User::where('role', '<', 4)->get()->count();

        $totalStudent = Student::all()->count();

        $totalCompany = Company::all()->count();

        $totalSupervisor = Supervisor::all()->count();

        $totalRequest = ModelsRequest::all()->count();

        // $update = UpdatePayment::all();

        $totalPayment = Payment::all()->count();

        $totalPaymentAmount = Payment::where('invoiceStatus', 'PAID')->sum('amount');

        return view('backend.admin.dashboard', compact('totalUser', 'totalStudent', 'totalCompany', 'totalSupervisor', 'totalRequest', 'totalPayment', 'totalPaymentAmount'));
    }

    public function approve(Student $student) {
        $payment = $student->payment->first();
        if ($payment->approved ) {
            $payment->update([
                'approved' => false
            ]);
            return $payment;
        }else {
            $payment->update([
                'approved' => true
            ]);
            return $payment;
        }


    }

    public  function siwes(){

        $upload = DB::table('uploads')->get();
        return view('backend.admin.forms.formupload', compact('upload'));
    }


    public function formUpload(Request  $request){

//        dd($request->all());
        $validate  = Validator::make($request->all(),[
            'file_name' => 'required',
            'pdf_file' => 'required'
        ])->validate();

        $data = new Upload();

        $pdf_file = $request->pdf_file;
        $filename =time(). '.' .$pdf_file->getClientOriginalExtension();

        $request->pdf_file->move('assets', $filename);

        $data->pdf_file = $filename;
        $data->file_name = $request->file_name;
        $data->description = $request->description;

        // dd($data);

        $data->save();

        return redirect()->back()->with('success_message', 'File uploaded successfully');
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
