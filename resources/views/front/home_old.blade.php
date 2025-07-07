@extends('front.master')
@section('content')
		<!-- Start Offer Area -->
        <section class="courses-categories-area bg-F7F9FB" style="padding-top: 50px;">
            <div class="container">
                <section class="courses-categories-area bg-image">
                    <div class="container">
                        <div class="section-title" style="margin-bottom:15px;text-align:center;">
                            <h2 style="color: #1689FE;">WHAT WE OFFER</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-md-4">
                                <div class="single-categories-courses-box mb-30">
                                    <div class="icon" style="margin-bottom: 10px;">
                                        <img src="{{asset('uploads/icon/affordable.png')}}" alt="image">
                                    </div>
                                    <h6>Affordable & Inclusive</h6>
                                    <span style="font-size: 12px;color:#000;">Designed for low-income individuals and small businesses.</span>

                                    <a href="#" class="link-btn"></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-md-4">
                                <div class="single-categories-courses-box mb-30">
                                    <div class="icon" style="margin-bottom: 10px;">
                                        <img src="{{asset('uploads/icon/easy_claims.png')}}" alt="image">
                                    </div>
                                    <h6>Easy Access </h6>
                                    <span style="font-size: 11px;">Simple policies with minimal paperwork.</span>

                                    <a href="#" class="link-btn"></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-md-4">
                                <div class="single-categories-courses-box mb-30">
                                    <div class="icon" style="margin-bottom: 10px;">
                                        <img src="{{asset('uploads/icon/end-to-end.png')}}" alt="image">
                                    </div>
                                    <h6>Fast Claims Processing</h6>
                                    <span style="font-size: 11px;">Hassle-free claims to support you when you need it most.</span>

                                    <a href="#" class="link-btn"></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-md-4 offset-lg-0 offset-md-4">
                                <div class="single-categories-courses-box mb-30">
                                    <div class="icon" style="margin-bottom: 10px;">
                                        <img src="{{asset('uploads/icon/simple_registration.png')}}" alt="image">
                                    </div>
                                    <h6>Tech-Driven Solutions</h6>
                                    <span style="font-size: 11px;">Digital platforms for seamless policy management.</span>

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
        <section class="blog-area" style="padding-top: 20px;">
            <div class="container">
                <div class="section-title" style="margin-bottom: 30px;">
                    <h2 style="color:#1689FE">Our Services</h2>
                </div>
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="{{route('packageslist',$service->id)}}" class="d-block">
                                    <img src="{{asset('uploads/service/'.$service->image)}}" alt="image">
                                </a>

                                <div class="tag">
                                    <a href="#">{{$service->service_name}}</a>
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
        <section class="about-area" style="margin-bottom:55px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="{{asset('front/assets/img/about/1.jpg')}}" class="shadow" alt="image">
                            <img src="{{asset('front/assets/img/about/2.jpg')}}" class="shadow" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
                            <span class="sub-title">About Us</span>

                            <p>
                                At <b>Pure Insurer,</b> we believe that financial security should be accessible to everyone, regardless of income level. As a dedicated microinsurance company in Bangladesh, our mission is to provide affordable, transparent, and reliable insurance solutions that protect individuals, families, and small businesses from unexpected financial hardships.
                                With a deep understanding of the unique challenges faced by underserved communities, we offer tailored microinsurance products covering health, life, agriculture, and business risks. Our goal is to ensure that even the most vulnerable populations have access to essential coverage that brings peace of mind and financial stability.
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
                    <h2>Our Company & Partners</h2>
                </div>

                <div class="partner-slides owl-carousel owl-theme">
                    <div class="single-partner-item">
                        <a href="#" class="d-block">
                            <img src="{{asset('uploads/partner/pragati-Life-Ins-Logo-Eng.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-partner-item">
                        <a href="#" class="d-block">
                            <img src="{{asset('uploads/partner/Logo-color-1.webp')}}" alt="image">
                        </a>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Partner Area -->

        <!-- Start Feedback Area -->
        <section class="feedback-area ptb-100">
            <div class="container">
                <div class="feedback-slides owl-carousel owl-theme">
                    <div class="single-feedback-item">
                        <p>“Keep away from people who try to belittle your ambitions. Small people always do that, but the really great make you feel that you, too, can become great.”</p>

                        <div class="info">
                            <h3>James Anderson</h3>
                            <span>Switzerland</span>
                            <img src="{{asset('front/assets/img/user1.jpg')}}" class="shadow rounded-circle" alt="image">
                        </div>
                    </div>

                    <div class="single-feedback-item">
                        <p>“The difference between school and life? In school, you're taught a lesson and then given a test. In life, you're given a test that teaches you a lesson.”</p>

                        <div class="info">
                            <h3>Lina D'Souza</h3>
                            <span>Switzerland</span>
                            <img src="{{asset('front/assets/img/user2.jpg')}}" class="shadow rounded-circle" alt="image">
                        </div>
                    </div>

                    <div class="single-feedback-item">
                        <p>“If a man empties his purse into his head, no man can take it away from him. An investment in knowledge always pays the best interest.”</p>

                        <div class="info">
                            <h3>David Warner</h3>
                            <span>Switzerland</span>
                            <img src="{{asset('front/assets/img/user3.jpg')}}" class="shadow rounded-circle" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Feedback Area -->


        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>
@endsection




