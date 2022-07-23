<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from themebeyond.com/html/movflx/tv-show.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2022 14:51:12 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cursos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/code.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <img src="{{ asset('img/preloader.svg') }}" alt="">
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->
    <!-- header-area -->
    <header>
        <div id="sticky-header" class="menu-area transparent-header">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav show">
                                <div class="logo">
                                    <a href="#">
                                        <img style="height:50px" src="{{ asset('img/logo/code.png') }}" alt="Logo">
                                    </a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="active"><a href="#">Cursos</a></li>
                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <ul>
                                        <li class="header-search"><a href="#" data-toggle="modal"
                                                data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                        <li class="header-btn"><a class="btn" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <div class="close-btn"><i class="fas fa-times"></i></div>

                            <nav class="menu-box">
                                <div class="nav-logo"><a href="#"><img src="{{ asset('img/logo/code.png') }}"
                                            alt="" title=""></a>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->

                        <!-- Modal Search -->
                        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ route('stream.search') }}" method="POST">
                                        @csrf
                                        <input name="search" id="serach" type="text" placeholder="Buscar aqui...">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Search-end -->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->

    @yield('content')


    <!-- footer-area -->
    <footer>
        <div class="footer-top-wrap">
            <div class="container">
                <div class="footer-quick-link-wrap" style="padding-bottom: 30px !important;">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="quick-link-list">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="footer-social">
                                <ul>
                                    <li><a target="_blank" href="https://twitter.com/cristian2592027"><i class="fab fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.facebook.com/k7rantac"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a target="_blank" href="https://www.linkedin.com/in/cristian-antonio-valverde-134908232/"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->





    <!-- JS here -->
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('js/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/ajax-form.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

<!-- Mirrored from themebeyond.com/html/movflx/tv-show.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2022 14:51:12 GMT -->

</html>
