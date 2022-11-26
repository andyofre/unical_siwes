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

            <div class="col-sm-12">
                <div class="card">
                   <div class="card-header d-flex justify-content-between">
                      <div class="header-title">
                         <h4 class="card-title">List Of Payment Invoices</h4>
                      </div>
                   </div>
                   <div class="card-body">
                      <div class="table-responsive">
                         <table class="table">
                            <thead>
                               <tr>
                                  <th scope="col">S/N</th>
                                  <th scope="col">Full Name</th>
                                  <th scope="col">Account Number</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Department</th>
                                  <th scope="col">Amount</th>
                                  <th scope="col">Action</th>
                               </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                    <tr>
                                        <th scope="row"></th>
                                        <td>{{ $payment->customerName }}</td>
                                        <td>{{ $payment->accountNumber }}</td>
                                        <td>
                                            @if ($payment->invoiceStatus == 'PAID')
                                                <span class="badge badge-success ">{{ $payment->invoiceStatus }}</span>
                                            @else
                                                <span class="badge badge-danger ">{{ $payment->invoiceStatus }}</span>
                                            @endif

                                        </td>
                                        <td>{{ $payment->student->registration_number }}</td>
                                        <td>{{ number_format($payment->amount)  }}</td>
                                        <td><a href="{{ route('adminpayments.show', $payment->id) }}" class="btn btn-primary btn-sm mr-1">View</a>

                                    </tr>
                                @endforeach

                            </tbody>
                         </table>
                      </div>
                   </div>
                </div>
             </div>
        </div>
        <!-- Page end  -->
    </div>
@endsection

@section('title')
    PAYMENT LIST
@endsection

@section('style')

@endsection

@section('script')

@endsection
