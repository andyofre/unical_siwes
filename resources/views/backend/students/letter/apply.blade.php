@extends('backend.students.include.app')

@section('content')

    <div class="row">
        <div class="col-lg-4 col-sm-6">

        </div>
        <div class="col-lg-4 col-sm-6">



            <div class="card card-block card-stretch card-height blog pricing-details">
                <div class="card-body border text-center rounded">
                    <div class="pricing-header bg-primary text-white">
                        <div class="icon-data"><i class="ri-file"></i>
                        </div>
                        <h2 class="mb-4 display-5 font-weight-bolder text-white">3,000
                            <small
                                class="font-size-14">NGN</small></h2>
                    </div>
                    <h3 class="mb-3">SIWES LETTER</h3>
                    <ul class="list-unstyled mb-0">
                        <li>
                            A total of NGN3,000 will be required to continue the SIWES registration process
                        </li>
                    </ul>

                    <form action="{{route('studentpaying')}}" method="post">

                        @csrf
                        <input type="hidden" id="" name="email" value="{{Auth::user()->student->email}}">
                        <input type="hidden" id="" name="amount" value="3000" >

                        <button type="submit" class="btn btn-primary mt-5">Pay Now</button>

                    </form>

                </div>

            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
        </div>
    </div>
@endsection

@section('title')
    LETTER APPLY
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
