<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\StudentFile;
use App\Models\Upload;
use Illuminate\Http\Request;

class StudentFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


    }


    public function preview($id){


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
     * @param  \App\Models\StudentFile  $studentFile
     * @return \Illuminate\Http\Response
     */
    public function show(StudentFile $studentFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentFile  $studentFile
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentFile $studentFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentFile  $studentFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentFile $studentFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentFile  $studentFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentFile $studentFile)
    {
        //
    }
}
