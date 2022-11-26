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
                         <h4 class="card-title">List Of all Student's Registered Companies</h4>
                      </div>
                   </div>
                   <div class="card-body">
                      <div class="table-responsive">
                         <table class="table">
                            <thead>
                               <tr>
                                  <th scope="col">S/N</th>
                                  <th scope="col">Company Name</th>
                                  <th scope="col">Trainer</th>
                                  <th scope="col">Address</th>
                                  <th scope="col">Number</th>
                                  <th scope="col">Action</th>
                               </tr>
                            </thead>
                            <tbody>
                            @foreach($companies as $company)
                                <tr>
                                  <th scope="row"></th>
                                  <td>{{ $company->name }}</td>
                                  <td>{{ $company->trainer }}</td>
                                  <td>{{ $company->address }}</td>
                                  <td>{{ $company->number }}</td>
                                  <td>
                                      <a href="#" class="btn btn-sm btn-primary">View</a>
                                  </td>
                               </tr>
                            @endforeach
                               {{ $companies->links() }}
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
    COMPANY LIST
@endsection

@section('style')

@endsection

@section('script')

@endsection
