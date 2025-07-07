<header class="header-area p-relative">

            <div class="top-header top-header-style-four">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-8">
                            <ul class="top-header-contact-info">
                                <li>
                                    Call:
                                    <a href="#">+8801922110303</a>
                                </li>
                            </ul>

                            <!--<div class="top-header-social">-->
                            <!--    <span>Follow us:</span>-->
                            <!--    <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>-->
                            <!--    <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>-->
                            <!--    <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>-->
                            <!--    <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>-->
                            <!--</div>-->
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <ul class="top-header-login-register">
                                <li><a href="#"><i class='bx bx-log-in'></i> Login</a></li>
                                <li><a href="{{route('checkout')}}"><i class='bx bx-log-in-circle'></i> Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Navbar Area -->
            <div class="navbar-area navbar-style-three">
                <div class="raque-responsive-nav">
                    <div class="container">
                        <div class="raque-responsive-menu">
                            <div class="logo">
                                <a href="{{route('home-page')}}">
                                    <img src="{{asset('laravel_project/public/front/image/logo/BdEnsure.png')}}" class="black-logo" alt="logo">
                                    <img src="{{asset('laravel_project/public/front/image/logo/BdEnsure.png')}}" class="white-logo" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="raque-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="{{route('home-page')}}">
                                <img src="{{asset('laravel_project/public/front/image/logo/BdEnsure.png')}}" class="black-logo" alt="logo">
                                <img src="{{asset('laravel_project/public/front/image/logo/BdEnsure.png')}}" class="white-logo" alt="logo">
                            </a>

                            <div class="collapse navbar-collapse mean-menu">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="{{route('home-page')}}" class="nav-link active">Home</a></li>
                                    <li class="nav-item"><a href="<?php echo route('home-page').'/#service'?>" class="nav-link">Service</a></li>
                                    <li class="nav-item"><a href="<?php echo route('home-page').'/#about'?>" class="nav-link">About Us</a></li>

                                    <li class="nav-item"><a href="{{route('contact-us')}}" class="nav-link">Contact Us</a></li>
                                </ul>


                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->

            <!-- Start Sticky Navbar Area -->
            <div class="navbar-area navbar-style-three header-sticky">
                <div class="raque-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="{{route('home-page')}}">
                                <img src="{{asset('laravel_project/public/front/image/logo/BdEnsure.png')}}" class="black-logo" alt="logo">
                                <img src="{{asset('laravel_project/public/front/image/logo/BdEnsure.png')}}" class="white-logo" alt="logo">
                            </a>

                            <div class="collapse navbar-collapse">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="{{route('home-page')}}" class="nav-link active">Home <i class='bx bx-chevron-down'></i></a></li>
                                    <li class="nav-item">
                                        <a href="<?php echo route('home-page').'/#service'?>" class="nav-link">Service</a>
                                    </li>
                                    <li class="nav-item"><a href="<?php echo route('home-page').'/#about'?>" class="nav-link ">About Us</a></li>
                                    <li class="nav-item"><a href="{{route('contact-us')}}" class="nav-link">Contact Us</a></li>
                                </ul>


                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Sticky Navbar Area -->

        </header>
