@extends('front.master')
@section('content')
    <main>

        <!-- breadcrumb start -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="radios-breadcrumb breadcrumbs">
                    <ul class="list-unstyled d-flex align-items-center">
                        <li class="radiosbcrumb-item radiosbcrumb-begin">
                            <a href="index.html"><span>Home</span></a>
                        </li>
                        <li class="radiosbcrumb-item radiosbcrumb-end">
                            <span>Account</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->

        <!-- account start -->
        <section class="account pb-90">
            <div class="container">
                <div class="row mt-none-30">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 mt-30">
                        <div class="account__wrap pl-60">
                            <h2 class="account__title">user profile details</h2>

                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </section>
        <!-- account end -->

    </main>
@endsection

@push('custom-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#frontUserLogin").submit(function(e){
                e.preventDefault();
                var email = $("#userEmail").val();
                var password = $("#userPassword").val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url:"{{route('user.userLogin')}}",
                    method:"post",
                    data:{email:email,password:password,_token: "{{ csrf_token() }}"},
                    dataType:'json',
                    success:function(response)
                    {
                        if(response.status == false)
                        {
                            console.log(response.message);
                        }
                        if(response.status == true)
                        {
                            window.location.href = "{{ route('front.profile')}}";
                        }
                    }
                });
            });
        });
    </script>
@endpush
