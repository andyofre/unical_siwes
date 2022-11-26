@extends('backend.students.include.app')

@section('content')
    @if (!$student->isPassport())
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="d-flex align-items-center justify-content-between welcome-content">
                        <div class="navbar-breadcrumb">
                            <h4 class="mb-0 text-uppercase">Welcome {{ ucfirst($student->full_name) }}</h4>
                            <h6>Upload Passport</h6>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-4">
                            <form action="{{ route('studentupload') }}" method="post" id="image-form" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="image" id="file"  accept="image/*"  onchange="loadFile(event)" class="custom-file-input">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </form>

                        </div>
                        <div class="col-md-6">
                            <p><img id="output" style="width: auto; max-width: 500px;" /></p>
                            <a href="javascript:void()" class="btn btn-success d-none" id="button"  onclick="event.preventDefault();
                            document.getElementById('image-form').submit();">Upload</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page end  -->
        </div>
    @endif
@endsection

@section('title')
    UPLOAD PASSPORT
@endsection

@section('style')

@endsection

@section('script')
<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
        document.querySelector('#button').classList.remove('d-none');
    };
</script>
@endsection

