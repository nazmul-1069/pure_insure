<!doctype html>
<html lang="zxx">
<head>
    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Home</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="images/x-icon"/>

    <!-- css include -->
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .rowRemove{
            display:none;
        }
    </style>
</head>

<body>
    <div class="body_wrap">

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </div>
        <!-- back to top end -->
        <?php
            if(empty(Request::segment(1)))
            {
        ?>
        <!-- header start -->
        @include('front.layout.header')
        <!-- header end -->
        <?php
            }else{
        ?>
        @include('front.layout.header-other')
        <?php
            }
        ?>
        <!-- top men slide-bar start -->
        @include('front.layout.top-menu')
        <!-- slide-bar end -->

        @yield('content')
        {{-- main --}}
        {{-- end main --}}

        <!-- footer start -->
        @include('front.layout.footer')
        <!-- footer end -->

    </div>

    <!-- jquery include -->
    <script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/assets/js/slick.js')}}"></script>
    <script src="{{asset('front/assets/js/backToTop.js')}}"></script>
    <script src="{{asset('front/assets/js/uikit.min.js')}}"></script>
    <script src="{{asset('front/assets/js/resize-sensor.min.js')}}"></script>
    <script src="{{asset('front/assets/js/theia-sticky-sidebar.min.js')}}"></script>
    <script src="{{asset('front/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('front/assets/js/jqueryui.js')}}"></script>
    <script src="{{asset('front/assets/js/touchspin.js')}}"></script>
    <script src="{{asset('front/assets/js/countdown.js')}}"></script>
    <script src="{{asset('front/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('front/assets/js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@stack('custom-scripts');
</body>

</html>

