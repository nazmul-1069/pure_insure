<!DOCTYPE html>
<html lang="zxx" class="theme-light">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Revolution Slider CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/revolution/css/settings.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/revolution/css/layers.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/revolution/css/navigation.css')}}">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/boxicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/nice-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/viewer.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/slick.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/custom_style.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/dark.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/responsive.css')}}">
         <link rel="stylesheet" href="{{asset('front/assets/css/adminlte.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Home | PURE INSURE</title>
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <body>

        <!-- Start Header Area -->
        @include('front.layout.header')
        <!-- End Header Area -->
        <?php
            if(empty(Request::segment(1)))
            {
        ?>
        <!-- Start Slider Area -->
        @include('front.layout.slider')
        <!-- End Slider Area -->
        <?php
            }
            else if(Request::segment(1) == 'package-list')
            {
        ?>
        @include('front.layout.fixedbg')
        <?php
            }
        ?>
        @yield('content')

        <!-- Start Footer Area -->
        @include('front.layout.footer')
        <!-- End Footer Area -->

        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

        <!-- Links of JS files -->
        <script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('front/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('front/assets/js/mixitup.min.js')}}"></script>
        <script src="{{asset('front/assets/js/parallax.min.js')}}"></script>
        <script src="{{asset('front/assets/js/jquery.appear.min.js')}}"></script>
        <script src="{{asset('front/assets/js/odometer.min.js')}}"></script>
        <script src="{{asset('front/assets/js/particles.min.js')}}"></script>
        <script src="{{asset('front/assets/js/meanmenu.min.js')}}"></script>
        <script src="{{asset('front/assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('front/assets/js/viewer.min.js')}}"></script>
        <script src="{{asset('front/assets/js/slick.min.js')}}"></script>
        <script src="{{asset('front/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('front/assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('front/assets/js/form-validator.min.js')}}"></script>
        <script src="{{asset('front/assets/js/contact-form-script.js')}}"></script>
        <script src="{{asset('front/assets/js/main.js')}}"></script>

        <!-- Slider Revolution core JavaScript files -->
        <script src="{{asset('front/assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('front/assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script src="{{asset('front/assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{asset('front/assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script src="{{asset('front/assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script src="{{asset('front/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{asset('front/assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script src="{{asset('front/assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script src="{{asset('front/assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script src="{{asset('front/assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{asset('front/assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script src="{{asset('front/assets/js/rev-slider-custom.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @stack('custom-scripts');
    </body>
</html>
