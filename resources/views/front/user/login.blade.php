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
                            <h2 class="account__title">Login here</h2>
                            <form id="frontUserLogin">
                                <div class="account__input-field">
                                    <label for="lemail">Email Address</label>
                                    <input id="userEmail" type="email" autocomplete="off" placeholder="Enter Email Address">
                                </div>
                                <div class="account__input-field">
                                    <label for="lpassword">Password</label>
                                    <input id="userPassword" type="password" autocomplete="off" placeholder="password">
                                </div>
                                <div class="account__input-field">
                                    <input class="form-check-input" id="lcheckbox" type="checkbox" checked>
                                    <label class="form-check-label" for="lcheckbox">Remember Me?</label>
                                </div>
                                <div class="account__btn">
                                    <a class="thm-btn thm-btn__2" >
                                        <button type="submit">
                                            <span class="btn-wrap">
                                            <span>Login here</span>
                                            <span>Login here</span>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                            </form>
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
                            if(response.page == 'checkout_page')
                            {
                                window.location.href = "{{ route('product.checkout')}}";
                            }
                            else
                            {
                                window.location.href = "{{ route('front.profile')}}";
                            }
                        }
                    }
                });
            });
        });
    </script>
@endpush
