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
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 mt-30">
                        <div class="account__wrap pr-60">
                            <h2 class="account__title">Sign Up</h2>
                            <form id="registrationForm">
                                <div class="account__input-field">
                                    <label for="name">Your Name</label>
                                    <input id="name" type="text" placeholder="Enter your name">
                                    <span id="nameValue" style="color: #FF0000;"></span>
                                </div>
                                <div class="account__input-field">
                                    <label for="email">Email Address</label>
                                    <input id="email" type="email" placeholder="Enter Email Address">
                                    <span id="emailValue" style="color: #FF0000;"></span>
                                </div>
                                <div class="account__input-field">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" placeholder="Create password">
                                    <span id="passwordValue" style="color: #FF0000;"></span>
                                </div>


                                <div class="account__input-field">
                                    <input class="form-check-input" id="checkbox" type="checkbox">
                                    <label class="form-check-label" for="checkbox">I agree to al <a href="#!">Terms</a> & <a href="#!">Condition</a> and Feeds</label>
                                </div>
                                <div class="account__btn">
                                    <a class="thm-btn thm-btn__2" href="#!">
                                        <button type="submit">
                                            <span class="btn-wrap">
                                                <span>Sign Up</span>
                                                <span>Sign Up</span>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </section>
        <!-- account end -->

    </main>
@endsection

@push('custom-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#registrationForm").submit(function(event){
                event.preventDefault();
                var name = $("#name").val();
                var email = $("#email").val();
                var password = $("#password").val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url:"{{route('user.userAdd')}}",
                    method:"post",
                    data:{name:name,email:email,password:password,_token: "{{ csrf_token() }}"},
                    dataType:'json',
                    success:function(response)
                    {
                        if(response.status == false)
                        {
                            if(response.errors.name)
                            {
                                $("#nameValue").html(response.errors.name[0]).show();
                            }
                            else
                            {
                                $("#nameValue").html('').show();
                            }
                            if(response.errors.email)
                            {
                                $("#emailValue").html(response.errors.email[0]).show();
                            }
                            else
                            {
                                $("#emailValue").html('').show();
                            }
                            if(response.errors.password)
                            {
                                $("#passwordValue").html(response.errors.password[0]).show();
                            }
                            else
                            {
                                $("#passwordValue").html('').show();
                            }
                        }
                        else
                        {
                            toastr.success(response.message);
                        }

                    },
                    error:function(jQXHR,exeception)
                    {

                    }
                });
            });

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
                    }
                });
            });
        });
    </script>
@endpush
