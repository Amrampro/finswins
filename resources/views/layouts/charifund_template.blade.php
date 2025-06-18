<!DOCTYPE html>
<html lang="en">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/favicon_temp.png')}}" type="image/x-icon">
    <!-- #title -->
    <title>FINS-WINS</title>
    <!-- #keywords -->
    <meta name="keywords" content="charity, nonprofit, fundraising, donation, html, bootstrap, scss">
    <!-- #description -->
    <meta name="description" content="Nonprofit & Fundraising Charity Html5 Template">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet"> <!-- main css -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- color themes -->
    <link rel="stylesheet" href="{{asset('assets/css/default-theme.css')}}" id="switch-color">
    <!-- want sticky header -->
    <link rel="stylesheet" href="{{asset('assets/css/sticky-header.css')}}">
    <!-- box layout css -->
    <link rel="stylesheet" href="{{asset('assets/css/box-layout.css')}}">
    <!-- dark mode css -->
    <link rel="stylesheet" href="{{asset('assets/css/dark-mode.css')}}">
    <!-- rtl css -->
    <link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}">
</head>

<body>
<!--[if lt IE 9]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
</p>
<![endif]-->
<div class="page-wrapper">
    <!-- ==== preloader start ==== -->
    <div class="preloader">
        <i class="icon-donation"></i>
        <p>{{config('app.name')}}</p>
    </div>
    <!-- ==== / preloader end ==== -->
    <!-- ==== topbar start ==== -->
    @include('layouts.charifund_template.topbar')
    <!-- ==== / topbar end ==== -->
    <!-- ==== header start ==== -->
    @include('layouts.charifund_template.header')
    <!-- ==== / header end ==== -->
    <!-- ==== mobile menu start ==== -->
    @include('layouts.charifund_template.mobile_menu')
    <!-- ==== / mobile menu end ==== -->
    <!-- ==== search popup start ==== -->
    @include('layouts.charifund_template.search_popup')
    <!-- ==== / search popup end ==== -->
    <main>
        @yield('body')
    </main>
    <!-- ==== footer start ==== -->
    @include('layouts.charifund_template.footer')
    <!-- ==== / footer end ==== -->
    <!-- ==== custom cursor start ==== -->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"></div>
    <!-- ==== / custom cursor end ==== -->
    <!-- ==== scroll to top start ==== -->
    <button class="progress-wrap" aria-label="scroll indicator" title="back to top">
        <span></span>
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </button>
    <!-- ==== / scroll to top end ==== -->
</div>
<!-- ==== js dependencies start ==== -->
<!-- jquery -->
<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
<!-- bootstrap five js -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- nice select js -->
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<!-- magnific popup js -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- swiper slider js -->
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<!-- viewport js -->
<script src="{{asset('assets/js/viewport.jquery.js')}}"></script>
<!-- odometer js -->
<script src="{{asset('assets/js/odometer.min.js')}}"></script>
<!-- vanilla tilt js -->
<script src="{{asset('assets/js/vanilla-tilt.min.js')}}"></script>
<!-- aos js -->
<script src="{{asset('assets/js/aos.js')}}"></script>

<!-- splittext js -->
<script src="{{asset('assets/js/SplitText.min.js')}}"></script>
<!-- scrollto js -->
<script src="{{asset('assets/js/ScrollToPlugin.min.js')}}"></script>
<!-- scrolltrigger js -->
<script src="{{asset('assets/js/ScrollTrigger.min.js')}}"></script>
<!-- gsap js -->
<script src="{{asset('assets/js/gsap.min.js')}}"></script>
<!-- ==== / js dependencies end ==== -->
<!-- template settings js -->
<script src="{{asset('assets/js/template-settings.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>
