@extends('backend.students.include.app')

@section('content')

<div class="row">

    <div class="col-md-12">
        <h3 class="text-center mb-3">All Request From the Institute </h3>
    </div>
</div>

<div class="row py-3">
    <div class="col-md-6">
        <div class="card">
           <div class="card-body">
              <h4 class="card-title text-center">SIWES LETTER</h4>
              <p class="card-text text-center">You can only print this once. </p><br/>
              <a href="{{ route('studentletter') }}" class="btn btn-primary btn-block">Print</a>
           </div>
        </div>
     </div>
     <div class="col-md-6">
        <div class="card">
           <div class="card-body">
              <h4 class="card-title text-center">Company Due Diligence</h4>
              <p class="card-text text-center">All required details of the company should be provided here. </p>
              <a href="{{ route('studentpending') }}" class="btn btn-primary btn-block">Start</a>
           </div>
        </div>
     </div>
</div>
@endsection

@section('title')
    REQUESTS
@endsection

@section('style')
<style rel="stylesheet" type="text/css">

</style>

@endsection

@section('script')

@endsection
