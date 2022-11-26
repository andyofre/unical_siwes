@extends('backend.admin.include.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="d-flex align-items-center justify-content-between welcome-content">
                    <div class="navbar-breadcrumb">
                        <h4 class="mb-0">Welcome Admin</h4>
                    </div>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-block card-stretch card-height rtl-mode ">
                            <div class="card-body">
                                <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                    <h3 class="text-danger">{{ $totalStudent }}</h3>
                                    <div class="bg-danger icon iq-icon-box-2 mr-2 rounded rtl-mr-0  rtl-ml-2">
                                        <i class="lar la-folder-open"></i>
                                    </div>
                                </div>
                                <h4>Registration</h4>
                                <div class="mt-1">
                                    <p class="mb-0"> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-block card-stretch card-height rtl-mode">
                            <div class="card-body">
                                <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                    <h3 class="text-primary">{{ $totalCompany }}</h3>
                                    <div class="bg-primary icon iq-icon-box-2 mr-2 rounded rtl-mr-0  rtl-ml-2">
                                        <i class="lar la-folder-open"></i>
                                    </div>
                                </div>
                                <h4>Companies</h4>
                                <div class="mt-1">
                                    <p class="mb-0"> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-block card-stretch card-height rtl-mode">
                            <div class="card-body">
                                <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                    <h3 class="text-info">{{ $totalSupervisor }}</h3>
                                    <div class="bg-info icon iq-icon-box-2 mr-2 rounded rtl-mr-0  rtl-ml-2">
                                        <i class="lar la-folder-open"></i>
                                    </div>
                                </div>
                                <h4>Supervisor</h4>
                                <div class="mt-1">
                                    <p class="mb-0"> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-block card-stretch card-height rtl-mode ">
                            <div class="card-body">
                                <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                    <h3 class="text-success">{{ $totalRequest }}</h3>
                                    <div class="bg-success icon iq-icon-box-2 mr-2 rounded rtl-ml-2 rtl-mr-0">
                                        <i class="las la-desktop"></i>
                                    </div>
                                </div>
                                <h4>Requests</h4>
                                <div class="mt-1">
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-block card-stretch card-height rtl-mode ">
                            <div class="card-body">
                                <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                    <h3 class="text-danger">{{ $totalPayment }}</h3>
                                    <div class="bg-danger icon iq-icon-box-2 mr-2 rounded rtl-mr-0  rtl-ml-2">
                                        <i class="lar la-folder-open"></i>
                                    </div>
                                </div>
                                <h4>Total Payment</h4>
                                <div class="mt-1">
                                    <p class="mb-0"> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-block card-stretch card-height rtl-mode ">
                            <div class="card-body">
                                <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                    <h3 class="text-success">NGN {{ number_format($totalPaymentAmount) }}</h3>
                                    <div class="bg-success icon iq-icon-box-2 mr-2 rounded rtl-ml-2 rtl-mr-0">
                                        <i class="las la-desktop"></i>
                                    </div>
                                </div>
                                <h4>Paid Amount</h4>
                                <div class="mt-1">
                                    <p class="mb-0"></p>
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
