<?php

namespace App\Http\Controllers;

use App\Helpers\AuthHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadPassportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $student = AuthHelper::student();

        if ($student->isPassport() || !$student->madePayment()) {
            return redirect(route('studentdashboard'));
        }

        if (!$student->approvedPayment()->approved) {
            return redirect()->route('studentpendingswiesfee');
        }

        return view('backend.students.upload', compact('student'));
    }


    public function upload(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|file|image|max:5000'
        ]);
        $name = AuthHelper::student()->getFirstName();
        $id = AuthHelper::student()->id;
        $extension = request()->file('image')->getClientOriginalExtension();
        $image_name = Str::lower($name.'-'.$id.'.'.$extension);
        $update['passport'] = request()->file('image')->storeAs('passports', $image_name,['disk' => 'public']);
        $save = AuthHelper::student()->update($update);

        if ($save) {
            return redirect()->route('studentdashboard');
        }else {
            return back()->withErrors($data);
        }


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
