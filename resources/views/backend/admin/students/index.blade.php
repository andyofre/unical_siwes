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
                         <h4 class="card-title">List Of all Registered Students</h4>
                      </div>
                   </div>
                   <div class="card-body">
                      <div class="table-responsive">
                         <table class="table">
                            <thead>
                               <tr>
                                  <th scope="col">S/N</th>
                                  <th scope="col">Full Name</th>
                                  <th scope="col">Faculty</th>
                                  <th scope="col">Department</th>
                                  <th scope="col">Registration Number</th>
                                  <th scope="col">Action</th>
                               </tr>
                            </thead>
                            <tbody>

                                @foreach($students as $student)
                                    <tr>
                                        <td></td>
                                        <td>{{ $student->full_name }}</td>
                                        <td>{{ $student->faculty }}</td>
                                        <td>{{ $student->department }}</td>
                                        <td>{{ $student->registration_number }}</td>
                                        <td>
                                            <a href="{{ route('adminstudents.show', $student->id) }}" class="btn btn-primary">View</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            {{ $students->links() }}
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
    STUDENTS LIST
@endsection

@section('style')

@endsection

@section('script')

@endsection
