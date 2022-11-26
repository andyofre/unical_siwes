@extends('backend.admin.include.app')

@section('content')
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
{{--                            <h5 class="card-title" style="color: #ff1818">You are required to download fill, scan and upload all forms as pdf format, within two weeks of registration </h5>--}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Form Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($upload as $pdf)

                                    <tr>
                                        <td>{{$pdf->id}}</td>
                                        <td>{{$pdf->file_name}}</td>
                                        <td>{{$pdf->description}}</td>


                                        <td>
                                            <a href="" class="btn" style="text-decoration: underline; color:#0b4980" target="_blank">Preview</a>
                                            <a href="" class="btn" style="text-decoration: underline; color:#0b4980">Download</a>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                                {{--                                {{ $students->links() }}--}}
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h4>Upload All Forms here</h4>
                        </div>
                        @if(Session::has('success_message'))
                            <div class="alert alert-success solid  fade show" role="alert" style="margin-top:3px; font-family:Bahnschrift; font-size:19px;">

                                <h5 class="font-20 text-center">{{Session::get('success_message')}}</h5>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span>&times;</span>
                                </button>

                            </div>

                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{route('adminuploadform')}}" method="POST">
                            @csrf

                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="">File name</label>
                                    <input type="text" class="form-control @error('file_name') is-invalid @enderror"  name="file_name" placeholder="file name">
                                    @error('file_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="">Form Description</label>
                                    <textarea name="description" id="" cols="10" rows="1"  class="form-control" style="resize: none;"></textarea>

                                </div>
                            </div>
                            <br/><br/>

                            <div class="col-md-10">
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input @error('pdf_file') is-invalid @enderror mt-3 " id="customFile" name="pdf_file">
                                    @error('pdf_file')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <label class="custom-file-label" for="customFile">Choose file</label>

                                </div>
                            </div>



                            <div class="mx-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>


        </div>
        <!-- Page end  -->
    </div>
@endsection
@endsection

@section('title')
    HOME
@endsection

@section('style')

@endsection

@section('script')

@endsection
