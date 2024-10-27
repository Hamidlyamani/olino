<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>
        OLINO Store
    </title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Custom styles for this template -->
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <!-- Stylesheet -->
    @if (request()->routeIs('detail'))
        <link rel="stylesheet" href="{{ asset('css/details.css') }}">
    @elseif (request()->routeIs('registe'))
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
    @else
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    @endif

    <!---Boxicons CDN Setup for icons-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-Q8SOH12ZZsBd6ktz9HI5Irn36vNj9stNHi/2U6pM/bsHNghxqR06S4sIahGIsSRo/lSQ6ntxUsP2Qj1uZxx/bQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custemresponive.css') }}" />


</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <nav class="navbar navbar-expand-lg custom_nav-container ">

                <div class="mobile_header">
                    <div>
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('images/olino.png') }}" width="100" alt="" srcset="">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand logo-pc" href="index.html">
                        <img src="{{ asset('images/olino.png') }}" width="100" alt="" srcset="">
                    </a>
                    <ul class="navbar-nav  ">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('shop') }}">
                                Shop
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">
                                About us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                    <div class="user_option">
                        @auth @else<a href="{{ route('login') }}">login</a> @endauth
                        <a href="{{ route('cart') }}">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        </a>
                        <form class="form-inline ">
                            <button class="btn nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                {{-- <i class="fa-solid fa-xmark"></i> --}}
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <main>


            @yield('main')


        </main>
        <section class="info_section  layout_padding2-top">
            <div class="social_container">
                <div class="social_box">
                    <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="info_container ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <h6>

                                <img src="{{ asset('images/1x/1.png') }}" alt="" srcset=""
                                    width="200">
                            </h6>
                            <p>
                                Through our dedication and passion, we craft unique experiences to fully satisfy you.
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="info_form ">
                                <h5>
                                    QUICK NAVIGATION
                                </h5>

                                <ul class="QUICK">
                                    <li class="NAVIGATION"> <a class="nav-link" href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="NAVIGATION"> <a class="nav-link" href="{{ route('shop') }}">
                                            Shop
                                        </a></li>
                                    <li class="NAVIGATION"> <a class="nav-link"
                                            href="{{ route('contact') }}">Contact Us</a></li>
                                    <li class="NAVIGATION"> <a class="nav-link" href="{{ route('contact') }}">About
                                            Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h6>
                                NEED HELP
                            </h6>
                            <p>
                                Have questions or concerns? Our support team is here to assist you, providing prompt and
                                friendly help whenever you need it.
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h6>
                                CONTACT US
                            </h6>
                            <div class="info_link-box">
                                <a href="">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>23 Tagaouaout Essaouira Ma </span>
                                </a>
                                <a href="">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>+01 12345678901</span>
                                </a>
                                <a href="">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>Olino@gmail.com</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer section -->
            <footer class=" footer_section">
                <div class="container">
                    <p>
                        &copy; <span id="displayYear"></span> All Rights Reserved By OLINO STORE
                        <a href="#"></a>
                    </p>
                </div>
            </footer>
            <!-- footer section -->

        </section>

        <!-- end info section -->


        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/details.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>
