@extends('backend.students.include.app')

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
                </div>
             </div>
             <div class="col-lg-7">
                <div class="card card-block mb-3">
                   <div class="card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title mb-0">About Me</h4>
                      </div>
                   </div>
                   <div class="card-body">
                      <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                      </p>
                      <h5 class="mb-2">About</h5>
                      <ul class="list-unstyled mb-0 rtl-list-unstyled">
                         <li class="mb-3"><i class="fa fa-check-circle text-primary fa-lg mr-2 rtl-ml-2 rtl-mr-0"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                      </ul>
                      <h5 class="mb-2 mt-4">Rates</h5>
                      <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                         <span>Log Level</span>
                         <span class="float-right">90%</span>
                         <div class="iq-progress-bar pro-skill">
                            <span data-percent="90"></span>
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
    PROFILE
@endsection

@section('style')
<style>

.department {
    z-index: 99999999;
    position: relative;
}

</style>
@endsection

@section('script')

@endsection
