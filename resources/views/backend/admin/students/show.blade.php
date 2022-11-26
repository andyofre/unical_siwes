@extends('backend.admin.include.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <div class="card card-block p-card">
                    <div class="profile-box">
                        <div class="profile-card rounded">
                            <img src="{{ ($student->isPassport()) ? asset("storage/".$student->getPassport()) : asset('assets/images/user/07.jpg') }}" alt="profile-bg" class="avatar-100 rounded d-block mx-auto img-fluid mb-3">
                            <h4 class="font-600 text-white text-center mb-0">{{ $student->full_name }}</h4>
                            <p class="text-white text-center mb-5 department ">{{ $student->department }}</p>
                        </div>
                        <div class="pro-content rounded">
                            <div class="d-flex align-items-center mb-3">
                                <div class="p-icon mr-3 rtl-ml-3 rtl-mr-0">
                                <i class="las la-envelope-open-text"></i>
                                </div>
                                <p class="mb-0 eml">{{ $student->email }}</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="p-icon mr-3 rtl-ml-3 rtl-mr-0">
                                <i class="las la-phone"></i>
                                </div>
                                <p class="mb-0">{{ $student->phone }}</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="p-icon mr-3 rtl-ml-3 rtl-mr-0">
                                <i class="las la-map-marked"></i>
                                </div>
                                <p class="mb-0">{{ $student->year }} Level</p>
                            </div>
                        </div>
                    </div>

                    @if($student->isAcceptLetter())
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 grid-m">
                            <div class="g-box rounded">
                                <a class="image-popup-vertical-fit" href="{{ asset("storage/".$student->acceptance_letter) }}">
                                <img src="{{ asset("storage/".$student->acceptance_letter) }}" class="img-fluid b-radius-top" alt="" />
                                </a>
                                <div class="g-desc p-3">
                                    <h4>Letter Of Acceptance</h4>
                                </div>
                            </div>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 grid-m">
                            <div class="g-box rounded">
                                <a class="image-popup-vertical-fit" href="{{ asset('assets/images/user/i1.jpg') }}">
                                <img src="{{ asset('assets/images/user/i1.jpg') }}" class="img-fluid b-radius-top" alt=""  width="100" id="default"/>
                                </a>
                                <div class="g-desc p-3">
                                    <h4>No Letter Of Acceptance</h4>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
            <div class="col-lg-7">
                <div class="card card-block mb-3">
                <div class="card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title mb-0">About {{ $student->full_name }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="mb-2">Personal</h5>
                    <ul class="list-unstyled mb-0 rtl-list-unstyled">
                        <li class="mb-3"><i class="fa fa-circle text-primary fa-lg mr-2 rtl-ml-2 rtl-mr-0"></i>Department : {{ $student->department }}</li>
                        <li class="mb-3"><i class="fa fa-circle text-primary fa-lg mr-2 rtl-ml-2 rtl-mr-0"></i>Registration Number : {{ $student->registration_number }}</li>
                        <li class="mb-3"><i class="fa fa-circle text-primary fa-lg mr-2 rtl-ml-2 rtl-mr-0"></i>Unit : {{ $student->unit }}</li>
                        <li class="mb-3"><i class="fa fa-circle text-primary fa-lg mr-2 rtl-ml-2 rtl-mr-0"></i>Year Of Study : {{ $student->year }}</li>
                    </ul>
                    @if($student->company)
                        <h5 class="mb-2">Company Details</h5>
                        <ul class="list-unstyled mb-0 rtl-list-unstyled">
                            <li class="mb-3"><i class="fa fa-circle text-primary fa-lg mr-2 rtl-ml-2 rtl-mr-0"></i>Name : {{ $student->company->name }}</li>
                            <li class="mb-3"><i class="fa fa-circle text-primary fa-lg mr-2 rtl-ml-2 rtl-mr-0"></i>Email : {{ $student->company->email }}</li>
                            <li class="mb-3"><i class="fa fa-circle text-primary fa-lg mr-2 rtl-ml-2 rtl-mr-0"></i>Phone Number : {{ $student->company->number }}</li>
                            <li class="mb-3"><i class="fa fa-circle text-primary fa-lg mr-2 rtl-ml-2 rtl-mr-0"></i>Address : {{ $student->company->address }}</li>
                            <li class="mb-3"><i class="fa fa-circle text-primary fa-lg mr-2 rtl-ml-2 rtl-mr-0"></i>Trainer's Name : {{ $student->company->trainer }}</li>
                        </ul>
                    @endif
                    @if($student->supervisor)
                        <h5 class="mb-2">Department Details</h5>
                        <ul class="list-unstyled mb-0 rtl-list-unstyled">
                            <li class="mb-3"><i class="fa fa-circle text-primary fa-lg mr-2 rtl-ml-2 rtl-mr-0"></i>Coordinator Name : {{ $student->supervisor->name }}</li>
                            <li class="mb-3"><i class="fa fa-circle text-primary fa-lg mr-2 rtl-ml-2 rtl-mr-0"></i>Email : {{ $student->supervisor->email }}</li>
                            <li class="mb-3"><i class="fa fa-circle text-primary fa-lg mr-2 rtl-ml-2 rtl-mr-0"></i>Phone Number : {{ $student->supervisor->number }}</li>
                        </ul>
                    @endif

                    @if($student->madePayment())
                            <h5 class="mb-2">Payment Status</h5>
                            <ul class="list-unstyled mb-0 rtl-list-unstyled">
                                <li class="mb-3"><i class="fa {{ ($student->madePayment()) ? 'fa-check-circle text-success' : 'fa-times-circle text-danger'  }} fa-lg mr-2 rtl-ml-2 rtl-mr-0"></i>{{ ($student->madePayment()) ? 'Paid' : 'Unpaid'  }}</li>
                                <li class="mb-3"><i class="fa {{ ($student->approvedPayment()->approved) ? 'fa-check-circle text-success' : 'fa-times-circle text-danger'  }} fa-lg mr-2 rtl-ml-2 rtl-mr-0"></i>Payment {{ ($student->approvedPayment()->approved) ? 'Verified' : 'Not Verified'  }}</li>
                                <li class="mb-3">
                                    @if($student->approvedPayment()->approved == 0)
                                        <button class="btn btn-success" onclick="verify('wild')" id="stuff">Click to verify Payment</button>
                                    @endif
                                </li>
                            </ul>
                    @endif


                    <h5 class="mb-2 mt-4">Log Status</h5>
                    <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                        <span>Log Level</span>
                        <span class="float-right">0%</span>
                        <div class="iq-progress-bar pro-skill">
                            <span data-percent="0"></span>
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
    STUDENT DATA
@endsection

@section('style')
<style>
    .department {
        z-index: 9;
        position: relative;
    }

    #default {
        min-width: 300px;
    }
</style>
@endsection

@section('script')
<script>
    function verify(){
        console.log('wilder');
        $.ajax({
              url: "{{ route('adminapprovepayment', $student->id ) }}",
              type: 'GET',
              data: "{{ $student->id }}",
              headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},

              success: function(data) {
                //   console.log(data);
                    // $("#stuff").html(data);
              },
              error: function(data) {
                //   console.log(data);
                   document.querySelector('#stuff').classList.add('d-none');
                   window.location.reload();
              }
        });
    }
</script>
@endsection
