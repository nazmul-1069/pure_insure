@extends('front.master')
@section('content')
		<!-- Start Offer Area -->
        <section class="courses-categories-area bg-F7F9FB" style="padding-top: 50px;">
            <div class="container">
                <section class="courses-categories-area bg-image">
                    <div class="container">
                        <div class="section-title" style="margin-bottom:15px;text-align:center;">
                            <h2 style="color: #1689FE;text-shadow: 1px 1px 1px #484848;">WHAT WE OFFER</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-md-4">
                                <div class="single-categories-courses-box" style="padding-top:5px;">
                                    <div class="icon" style="margin-bottom: 10px;">
                                        <img src="{{asset('laravel_project/public/uploads/icon/affordable.png')}}" alt="image">
                                    </div>
                                    <h6 class="what-we-offer">Affordable & Inclusive</h6>
                                    <p>Designed for low-income individuals and small businesses.</p>

                                    <a href="#" class="link-btn"></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-md-4">
                                <div class="single-categories-courses-box" style="padding-top:5px;">
                                    <div class="icon" style="margin-bottom: 10px;">
                                        <img src="{{asset('laravel_project/public/uploads/icon/easy_claims.png')}}" alt="image">
                                    </div>
                                    <h6 class="what-we-offer">Easy Access </h6>
                                    <p>Simple policies with minimal paperwork.</p>

                                    <a href="#" class="link-btn"></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-md-4">
                                <div class="single-categories-courses-box" style="padding-top:5px;">
                                    <div class="icon" style="margin-bottom: 10px;">
                                        <img src="{{asset('laravel_project/public/uploads/icon/end-to-end.png')}}" alt="image">
                                    </div>
                                    <h6 class="what-we-offer">Fast Claims Processing</h6>
                                    <p>Hassle-free claims to support you when you need it most.</p>

                                    <a href="#" class="link-btn"></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-md-4 offset-lg-0 offset-md-4">
                                <div class="single-categories-courses-box" style="padding-top:5px;">
                                    <div class="icon" style="margin-bottom: 10px;">
                                        <img src="{{asset('laravel_project/public/uploads/icon/simple_registration.png')}}" alt="image">
                                    </div>
                                    <h6 class="what-we-offer">Tech-Driven Solutions</h6>
                                    <p>Digital platforms for seamless policy management.</p>

                                    <a href="#" class="link-btn"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="particles-js-circle-bubble-2"></div>
                </section>
            </div>

            <div id="particles-js-circle-bubble-2"></div>
        </section>
        <!-- End Offer Area -->



		<!-- Start Services Area -->
        <section class="blog-area" style="padding-top: 20px;" id="service">
            <div class="container">
                <div class="section-title" style="margin-bottom: 30px;">
                    <h2 style="color:#1689FE;text-shadow: 1px 1px 1px #484848;">OUR SERVICES</h2>
                </div>
                <div class="row">
                    
                    @foreach($services as $service)
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="{{route('packageslist',$service->id)}}" class="d-block">
                                    <img src="{{asset('laravel_project/public/uploads/service/'.$service->image)}}" alt="image">
                                </a>

                                <div class="tag">
                                    <a href="{{route('packageslist',$service->id)}}">{{$service->service_name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <!-- End Services Area -->




        <!-- Start About Area -->
        <section class="about-area" style="margin-bottom:55px;" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="{{asset('laravel_project/public/front/assets/img/about/about.jpg')}}" class="shadow" alt="image">
                            
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
                            <span class="sub-title"><h2 style="color:#1689FE;text-shadow: 1px 1px 1px #484848;">About Us</h2></span>

                            <p style="text-align:justify;">
                                <b>Pure Insure</b>, an innovative Insurtech platform developed and owned by <b>UGI Ltd.</b>, is dedicated to reshaping the insurance landscape in Bangladesh.<br><br>
                                At <b>Pure Insure,</b> we believe that financial security should be accessible to everyone, regardless of income level. As a dedicated microinsurance company in Bangladesh, our mission is to provide affordable, transparent, and reliable insurance solutions that protect individuals, families, and small businesses from unexpected financial hardships.<br>
                                </br> With a deep understanding of the unique challenges faced by underserved communities, we offer tailored microinsurance products covering health, life, agriculture, and business risks. Our goal is to ensure that even the most vulnerable populations have access to essential coverage that brings peace of mind and financial stability.
                            </p>



                        </div>
                    </div>
                </div>
            </div>

            <div id="particles-js-circle-bubble-4"></div>
        </section>
        <!-- End About Area -->

        <!-- Start Courses Categories Area -->
        {{-- <section class="courses-categories-area bg-image pt-100 pb-70">
            <div class="container">
                <div class="section-title text-left">

                    <h2>HOW IT WORKS</h2>

                </div>

                <div class="courses-categories-slides owl-carousel owl-theme">
                    <div class="single-categories-courses-box mb-30">

						<div class="icon">
                            <i class='bx bx-code-alt'></i>
                        </div>


                        <span>Select your preferred Chhaya plan</span>

                        <a href="#" class="link-btn"></a>
                    </div>

                    <div class="single-categories-courses-box mb-30">
                        <div class="icon">
                            <i class='bx bx-camera'></i>
                        </div>
                        <h3>Photography </h3>
                        <span>21 Courses</span>

                        <a href="#" class="link-btn"></a>
                    </div>

                    <div class="single-categories-courses-box mb-30">
                        <div class="icon">
                            <i class='bx bx-layer'></i>
                        </div>
                        <h3>Graphics Design</h3>
                        <span>58 Courses</span>

                        <a href="#" class="link-btn"></a>
                    </div>

                    <div class="single-categories-courses-box mb-30">
                        <div class="icon">
                            <i class='bx bxs-flag-checkered'></i>
                        </div>
                        <h3>Web Language</h3>
                        <span>99 Courses</span>

                        <a href="#" class="link-btn"></a>
                    </div>

                    <div class="single-categories-courses-box mb-30">
                        <div class="icon">
                            <i class='bx bx-health'></i>
                        </div>
                        <h3>Health & Fitness</h3>
                        <span>21 Courses</span>

                        <a href="#" class="link-btn"></a>
                    </div>

                    <div class="single-categories-courses-box mb-30">
                        <div class="icon">
                            <i class='bx bx-line-chart'></i>
                        </div>
                        <h3>Business Studies</h3>
                        <span>49 Courses</span>

                        <a href="#" class="link-btn"></a>
                    </div>
                </div>
            </div>

            <div id="particles-js-circle-bubble-2"></div>
        </section> --}}
        <!-- End Courses Categories Area -->



        <!-- Start Partner Area -->
        <section class="partner-area bg-color ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2 style="color:#1689FE;text-shadow: 1px 1px 1px #484848;">Our Company & Partners</h2>
                </div>

                <div class="partner-slides owl-carousel owl-theme">
                    <div class="single-partner-item">
                        <a href="#" class="d-block">
                            <img src="{{asset('laravel_project/public/uploads/partner/pragati-Life-Ins-Logo-Eng.png')}}" alt="image">
                        </a>
                    </div>

                    <!--<div class="single-partner-item">-->
                    <!--    <a href="#" class="d-block">-->
                    <!--        <img src="{{asset('laravel_project/public/uploads/partner/Logo-color-1.webp')}}" alt="image">-->
                    <!--    </a>-->
                    <!--</div>-->


                </div>
            </div>
        </section>
        <!-- End Partner Area -->


        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>
@endsection




