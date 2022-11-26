@extends('backend.company.include.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="d-flex align-items-center justify-content-between welcome-content">
                    <div class="navbar-breadcrumb">
                        <h4 class="mb-0">Welcome Daniel</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-block card-stretch card-height rtl-mode ">
                            <div class="card-body">
                                <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                    <h3 class="text-danger">50</h3>
                                    <div class="bg-danger icon iq-icon-box-2 mr-2 rounded rtl-ml-2  rtl-mr-0">
                                        <i class="lar la-hand-pointer"></i>
                                    </div>
                                </div>
                                <h4>Students</h4>
                                <div class="mt-1">
                                    <p class="mb-0"> </p>
                                </div>
                                <div class="iq-progress-bar mt-3">
                                    <span class="bg-danger" data-percent="50"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Page end  -->
    </div>
@endsection

@section('title')
    HOME
@endsection

@section('style')

@endsection

@section('script')

@endsection
