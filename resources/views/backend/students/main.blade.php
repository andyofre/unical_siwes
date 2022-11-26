@extends('backend.students.include.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="d-flex align-items-center justify-content-between welcome-content">
                    <div class="navbar-breadcrumb">
                        <h4 class="mb-0 text-uppercase">Welcome {{ ucfirst($student->full_name) }}</h4>
                    </div>

                </div>
            </div>
            <div class="col-lg-1 col-sm-6">

            </div>
            @if($student->madePayment())
                @if($student->approvedPayment()->approved == 0)


                    <div class="col-lg-5 col-sm-6">
                        <div class="card card-block card-stretch card-height blog pricing-details">
                        <div class="card-body border text-center rounded">
                            <div class="pricing-header bg-danger text-white">

                                <h2 class="mb-4 display-5 font-weight-bolder text-white">Oops</h2>
                            </div>
                            <ul class="list-unstyled mb-3">
                                <li class="text-uppercase">
                                    Your Payment is yet to be Verified
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>

                @else

                    <div class="col-lg-10 col-sm-6">
                        <div class="card card-block card-stretch card-height blog pricing-details">
                            <div class="card-body border text-left rounded">
                                <div class="pricing-header bg-danger text-white text-center">

                                    <h2 class="mb-4 display-5 font-weight-bolder text-white">Verified</h2>
                                </div>
                                <form action="{{ route('studentstartIT') }}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputdatetime" class="text-uppercase">Select Date of commencement</label>
                                        <input type="datetime-local" class="form-control" id="exampleInputdatetime" name="date" min="{{ $student->approvedPayment()->created_at->format('Y-m-d\TH:i') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="file" class="text-uppercase">Letter of acceptance</label>
                                        <input type="file" class="form-control" id="file" name="file" accept="image/*">
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="supervisor_name" class="text-uppercase">Supervisor's Name</label>
                                                <input type="text" class="form-control" id="supervisor_name" name="supervisor_name"  placeholder="Supervisor Name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="supervisor_title" class="text-uppercase">Supervisor's Title</label>
                                                <input type="text" class="form-control" id="supervisor_title" name="supervisor_title"  placeholder="Supervisor Title">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="supervisor_email" class="text-uppercase">Supervisor's Email</label>
                                                <input type="text" class="form-control" id="supervisor_email" name="supervisor_email"  placeholder="Supervisor Email">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="supervisor_number" class="text-uppercase">Supervisor's Number</label>
                                                <input type="text" class="form-control" id="supervisor_number" name="supervisor_number"  placeholder="Supervisor Number">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="company_name" class="text-uppercase">Company Name</label>
                                                <input type="text" class="form-control" id="company_name" name="company_name"  placeholder="Company Name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="company_email" class="text-uppercase">Company Email</label>
                                                <input type="text" class="form-control" id="company_email" name="company_email"  placeholder="Company Email">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="trainer" class="text-uppercase">Trainer's Name</label>
                                                <input type="text" class="form-control" id="trainer" name="trainer"  placeholder="Trainer Name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="trainer_title" class="text-uppercase">Trainer's title</label>
                                                <input type="text" class="form-control" id="trainer_title" name="trainer_title"  placeholder="Trainer Title">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="company_number" class="text-uppercase">Company's Number</label>
                                                <input type="text" class="form-control" id="company_number" name="company_number"  placeholder="Company Number">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="company_address" class="text-uppercase">Company's Address</label>
                                                <input type="text" class="form-control" id="company_address" name="company_address"  placeholder="Company Address">
                                            </div>
                                        </div>

                                    </div>


                                    <input type="submit" value="Start IT" class="btn btn-success mt-3 float-right">
                                </form>
                            </div>
                        </div>
                    </div>

                @endif

            @endif

            <div class="col-lg-1 col-sm-6">
            </div>
        </div>
        <!-- Page end  -->
    </div>
@endsection

@section('title')
    NOT STARTED
@endsection

@section('style')

@endsection

@section('script')

@endsection
