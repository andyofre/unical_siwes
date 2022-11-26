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
                         <h4 class="card-title py-2">Student Payment Record</h4>

                        @if($payment->invoiceStatus == 'PAID')

                            @if($payment->approved == 0)
                                <button class="btn btn-success" onclick="verify('wild')" id="stuff">Click to Approve Payment</button>
                            @endif

                        @else
                            <button class="btn btn-success">Verified</button>
                        @endif
                      </div>
                   </div>
                   <div class="card-body">

                   </div>
                </div>
             </div>
        </div>
        <!-- Page end  -->
    </div>
@endsection

@section('title')
    PAYMENT DATA
@endsection

@section('style')

@endsection

@section('script')
<script>
    function verify(){
        console.log('wilder');
        $.ajax({
              url: "{{ route('adminapprovepayment', $payment->student->id ) }}",
              type: 'GET',
              data: "{{ $payment->student->id }}",
              headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},

              success: function(data) {
                //   console.log(data);
                    // $("#stuff").html(data);
              },
              error: function(data) {
                //   console.log(data);
                    Swal.fire({
                        icon: 'success',
                        title: 'Student Verified',
                        showConfirmButton: false,
                    })
                   document.querySelector('#stuff').classList.add('d-none');
                   window.location.reload();
              }
        });
    }
</script>
@endsection
