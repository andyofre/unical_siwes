@extends('backend.students.include.app')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="d-flex align-items-center justify-content-between welcome-content">
                    <div class="navbar-breadcrumb">
                        <h4 class="mb-0">Welcome {{ ucfirst($student->full_name) }}</h4>
                    </div>

                </div>
            </div>

            <div class="col-sm-12">
                <div class="card">
                        {{-- <iframe src="/assets/{{$data->pdf_file}}"> --}}

                            <iframe src="{{ asset('assets/'.$data->pdf_file) }}" frameborder="0" width="90%" height="700px"></iframe>
                </div>
            </div>

        </div>
        <!-- Page end  -->
    </div>

@endsection

@section('title')
    HOME
@endsection

@section('style')

@endsection

@section('script')

@endsection
