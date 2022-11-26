@extends('backend.students.include.app')

@section('content')

<div class="row">
    <div class="col-lg-3 col-sm-6">

    </div>
    <div class="col-lg-6 col-sm-6">
       <div class="card card-block card-stretch card-height blog pricing-details">
          <div class="card-body border text-center rounded">
             <div class="pricing-header bg-success text-white">
                <div class="icon-data"><i class="ri-star-fill"></i>
                </div>
                <h2 class="mb-4 display-5 font-weight-bolder text-white">1,100<small class="font-size-14">NGN</small></h2>
             </div>
             <h3 class="mb-3"> SIWES LETTER-PAID</h3>
             <ul class="list-unstyled mb-0">
                <li>
                    Payment successful now click on the continue to finish registration
                </li>
             </ul> <a href="{{ route('studentpassport') }}" class="btn btn-success mt-5">Continue</a>
          </div>
       </div>
    </div>
    <div class="col-lg-3 col-sm-6">
    </div>
 </div>
@endsection

@section('title')
    LETTER PAID
@endsection

@section('style')
<style rel="stylesheet" type="text/css">
.card .card-header {
    border-bottom: 2px solid #1d1b1b;
    padding-bottom: 10px;
}

</style>

@endsection

@section('script')

@endsection
