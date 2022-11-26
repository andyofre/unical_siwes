@extends('backend.students.include.app')

@section('content')
        <div class="container-fluid">
           <div class="row">
              <div class="col-sm-12 col-lg-12">
                 <div class="card">
                    <div class="card-header d-flex justify-content-between">
                       <div class="header-title">
                          <h4 class="card-title">Daily Logs</h4>
                       </div>
                    </div>
                    <div class="card-body">
                       <p>Fill you activities for each day <small class="text-danger">*you can only submit once and cant edit</small></p>
                       <div class="row">
                          <div class="col-sm-3">
                             <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Monday</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Tuesday</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Wednesday</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Thursday</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Friday</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Saturday</a>
                             </div>
                          </div>
                          <div class="col-sm-9">
                             <div class="tab-content mt-0" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                   <form action="" method="post">
                                        <input type="hidden" name="day" value="monday">
                                        <input type="hidden" name="week" value="1">
                                        <textarea name="log" id="" cols="10" rows="6" class="form-control  border-5 border-dark"></textarea>
                                        <input type="button" value="Submit" class="btn btn-success float-right mt-3">
                                   </form>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                   <form action="" method="post">
                                        <input type="hidden" name="day" value="monday">
                                        <input type="hidden" name="week" value="1">
                                        <textarea name="log" id="" cols="10" rows="6" class="form-control border-5 border-dark"></textarea>
                                        <input type="button" value="Submit" class="btn btn-success float-right mt-3">
                                   </form>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                   <form action="" method="post">
                                        <input type="hidden" name="day" value="monday">
                                        <input type="hidden" name="week" value="1">
                                        <textarea name="log" id="" cols="10" rows="6" class="form-control border-5 border-dark"></textarea>
                                        <input type="button" value="Submit" class="btn btn-success float-right mt-3">
                                   </form>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                   <form action="" method="post">
                                        <input type="hidden" name="day" value="monday">
                                        <input type="hidden" name="week" value="1">
                                        <textarea name="log" id="" cols="10" rows="6" class="form-control border-5 border-dark"></textarea>
                                        <input type="button" value="Submit" class="btn btn-success float-right mt-3">
                                   </form>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                   <form action="" method="post">
                                        <input type="hidden" name="day" value="monday">
                                        <input type="hidden" name="week" value="1">
                                        <textarea name="log" id="" cols="10" rows="6" class="form-control border-5 border-dark border-2"></textarea>
                                        <input type="button" value="Submit" class="btn btn-success float-right mt-3">
                                   </form>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
@endsection

@section('title')
    LOG DAILY
@endsection

@section('style')

@endsection

@section('script')

@endsection
