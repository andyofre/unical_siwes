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
                         <h4 class="card-title">List Of Student's Supervisor</h4>
                      </div>
                   </div>
                   <div class="card-body">
                      <div class="table-responsive">
                         <table class="table">
                            <thead>
                               <tr>
                                  <th scope="col">S/N</th>
                                  <th scope="col">Supervisor Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Department</th>
                                  <th scope="col">Total Students</th>
                                  <th scope="col">Action</th>
                               </tr>
                            </thead>
                            <tbody>
                               @foreach($supervisors as $supervisor)
                                    <tr>
                                        <th scope="row"></th>
                                        <td>{{ $supervisor->name }}</td>
                                        <td>{{ $supervisor->email }}</td>
                                        <td>{{ $supervisor->department }}</td>
                                        <td>{{ $supervisor->student->count().  __(' Students') }}</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                               {{ $supervisors->links() }}
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
    SUPERVISOR LIST
@endsection

@section('style')

@endsection

@section('script')

@endsection
