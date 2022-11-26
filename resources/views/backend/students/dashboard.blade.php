@extends('backend.students.include.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="d-flex align-items-center justify-content-between welcome-content">
                    <div class="navbar-breadcrumb">
                        <h4 class="mb-0 text-uppercase">Welcome {{ ucfirst($student->full_name) }}</h4>
                    </div>

                    <div class="">
                        <a class="button btn btn-primary button-icon" href="#">Fill Today's Log<i
                        class="ml-2 ri-add-line"></i></a>
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
                                <h4>Days</h4>
                                <div class="mt-1">
                                    <p class="mb-0">Completed </p>
                                </div>
                                <div class="iq-progress-bar mt-3">
                                    <span class="bg-danger" data-percent="50"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-block card-stretch card-height rtl-mode">
                            <div class="card-body">
                                <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                    <h3 class="text-primary">10</h3>
                                    <div class="bg-primary icon iq-icon-box-2 mr-2 rounded rtl-mr-0  rtl-ml-2">
                                        <i class="lar la-folder-open"></i>
                                    </div>
                                </div>
                                <h4>Weeks</h4>
                                <div class="mt-1">
                                    <p class="mb-0">Completed </p>
                                </div>
                                <div class="iq-progress-bar mt-3">
                                    <span class="bg-primary" data-percent="50"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-block card-stretch card-height rtl-mode ">
                            <div class="card-body">
                                <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                    <h3 class="text-orange">10</h3>
                                    <div class="bg-orange icon iq-icon-box-2 mr-2 rounded rtl-ml-2 rtl-mr-0">
                                        <i class="las la-desktop"></i>
                                    </div>
                                </div>
                                <h4>Months</h4>
                                <div class="mt-1">
                                    <p class="mb-0">Completed</p>
                                </div>
                                <div class="iq-progress-bar mt-3">
                                    <span class="bg-orange" data-percent="55" ></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-block card-stretch card-height rtl-mode">
                            <div class="card-body">
                                <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                    <h3 class="text-skyblue">33</h3>
                                    <div class="bg-skyblue icon iq-icon-box-2 mr-2 rounded rtl-ml-2 rtl-mr-0">
                                        <i class="las la-exclamation-triangle"></i>
                                    </div>
                                </div>
                                <h4>Days</h4>
                                <div class="mt-1">
                                    <p class="mb-0">Left</p>
                                </div>
                                <div class="iq-progress-bar mt-3">
                                    <span class="bg-skyblue" data-percent="33"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-block card-stretch card-height rtl-mode">
                            <div class="card-body">
                                <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                    <h3 class="text-success">85</h3>
                                    <div class="bg-success icon iq-icon-box-2 mr-2 rounded rtl-mr-0 rtl-ml-2">
                                        <i class="las la-circle-notch"></i>
                                    </div>
                                </div>
                                <h4>Weeks</h4>
                                <div class="mt-1">
                                    <p class="mb-0">Left</p>
                                </div>
                                <div class="iq-progress-bar mt-3">
                                    <span class="bg-success" data-percent="33"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-block card-stretch card-height rtl-mode">
                            <div class="card-body">
                                <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                    <h3 class="text-info">64</h3>
                                    <div class="bg-info icon iq-icon-box-2 mr-2 rounded rtl-ml-2 rtl-mr-0">
                                        <i class="lar la-envelope"></i>
                                    </div>
                                </div>
                                <h4>Months</h4>
                                <div class="mt-1">
                                    <p class="mb-0">Left</p>
                                </div>
                                <div class="iq-progress-bar mt-3">
                                    <span class="bg-info" data-percent="85"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header border-none">
                        <div class="header-title">
                            <h4 class="card-title">Log Level</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="layout-1-chart-01"></div>
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
