@extends('backend.students.include.app')

@section('content')

    <div class="row">

        <div class="col-12">
            <div class="card p-3 border-5">
                <div class="card-header  d-print-none">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h4 class="text-uppercase text-default">Payment received Click dashboard or login again to
                                    continue within 24hours</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card p-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{ asset('assets/img/favicon.png') }}" width="100" height="100" alt=""
                                    sizes="20" srcset="">
                            </div>
                            <div class="col-md-8">
                                <div class="text-center">
                                    <h1 class="text-uppercase text-primary ">university of calabar</h1>
                                    <h6 class="text-uppercase text-danger">p.m.b 1115, calabar, cross river state, nigeria
                                    </h6>
                                    <h6 class="text-uppercase text-default">directorate of student's industrial work
                                        experience scheme (siwes)</h6>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <img src="{{ asset('assets/img/favicon.png') }}" width="100" height="100" alt=""
                                    sizes="20" srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="row pl-5 pr-5">

                            <div class="col-md-6">
                                @if ($payment->invoiceStatus == 'PAID')
                                    <span class="badge badge-success text-uppercase">Paid</span>
                                    <small>AWAITING APPROVAL</small>
                                @else
                                    <span class="badge badge-danger text-uppercase">Not Paid</span>
                                @endif

                            </div>

                            <div class="col-md-6 text-right">
                                <p class="ml-2">Reg No.:{{ $student->registration_number }}</p>
                                <p class="ml-2">{{ $payment->created_at->format('jS \\of F Y') }}</p>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <h4 class="text-uppercase text-center">{{ $student->full_name }}</h4>
                            </div>

                        </div>

                        <div class="row pl-5 pr-5 pt-3">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Account Number</th>
                                                <th scope="col">Account Name</th>
                                                <th scope="col">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>{{ $payment->accountNumber }}</td>
                                                <td>{{ $payment->accountName }}</td>
                                                <td>{{ number_format($payment->amount) }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <a href="#" onclick="window.print('.card');" class="btn btn-success float-right d-print-none">Print</a>
            </div>
        </div>
    </div>
@endsection

@section('title')
    PENDING PAYMENT
@endsection

@section('style')
    <style rel="stylesheet" type="text/css">

    </style>

@endsection

@section('script')

@endsection
