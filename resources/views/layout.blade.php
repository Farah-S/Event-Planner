<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <link rel="stylesheet" href="{{url('css/slicknav.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">

    
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!-- header-start -->
    <header>
        <div class="header-area"  style="background-color: rgb(0,0,0,0.1);">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="/">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <!--<li><a class="active" href="/">Home</a></li>-->
                                        <li><a href="/events">Events<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li class='test-li'><a href="/corporate">Corporate Events</a></li>
                                                <li class='test-li'><a href="/student">Student Events</a></li>
                                                <li class='test-li'><a href="/conferences">Conferences</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/productionhouse">Production House</a></li>
                                        <li><a href="{{route('home.about')}}">About us</a></li>
                                        <li><a href="{{route('home.contact')}}">Contact us</a></li>
                                        <li><a href="{{route('home.cancelpolicy')}}">Cancel Policy</a></li>
                                        <!-- if logged in
                                        <li><a href="/profile"><span class="fa-solid fa-circle-user"></span> Profile</a></li>
                                        <li><a href="/myorders"><span class="fa-solid fa-cart-shopping"></span> Orders</a></li>
                                         -->
                                        <!-- if not logged in-->
                                        <li><a href="/login">Login</a></li>
                                        <li><a href="/signup">SignUp</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    @yield('content')
    @yield('scripts')
    <!-- footer_start -->
    <footer class="footer footer_bg_1">
        
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 col-lg-4">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                        Follow Us
                                </h3>
                                <ul>
                                    <li><a target="_blank" href="#">Facebook</a></li>
                                    <li><a target="_blank" href="#">Twitter</a></li>
                                    <li><a target="_blank" href="#">Instagram</a></li>
                                    <li><a target="_blank" href="#">Youtube</a></li>
                                </ul>
    
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-lg-4">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                        Links
                                </h3>
                                <ul>
                                    <li><a target="_blank" href="schedule.html">Schedule</a></li>
                                    <li><a target="_blank" href="speakers.html">Speakers</a></li>
                                    <li><a target="_blank" href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-lg-4">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                        Contact us
                                </h3>
                                <p>
                                    Placeholder
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- footer_end -->






    <!-- JS here -->
    <script src="https://kit.fontawesome.com/fa3e67e35b.js" crossorigin="anonymous"></script>
    <script src="{{url('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{url('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('js/ajax-form.js')}}"></script>
    <script src="{{url('js/waypoints.min.js')}}"></script>
    <script src="{{url('js/jquery.counterup.min.js')}}"></script>
    <script src="{{url('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('js/scrollIt.js')}}"></script>
    <script src="{{url('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{url('js/wow.min.js')}}"></script>
    <script src="{{url('js/nice-select.min.js')}}"></script>
    <script src="{{url('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('js/jquery.countdown.js')}}"></script>
    <script src="{{url('js/plugins.js')}}"></script>
    <script src="{{url('js/passworTest.js')}}"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>