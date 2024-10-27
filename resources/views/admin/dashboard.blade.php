<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>OLINO Dashboard -</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dash.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>

                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">


                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                         {{ auth()->user()->name }} 
                                    </div>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading"> <a href="homeDashboard">

                                 <i class="fa-solid fa-chart-line pe-7s-diamond metismenu-icon"></i>   Dashboard

                                </a></li>
                            <li class="app-sidebar__heading">Orders</li>
                            <li>
                                <a href="allorders">
                                   <i class="fa-solid fa-dolly pe-7s-diamond metismenu-icon"></i> 
                                    All Orders
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Products</li>
                            <li>
                                <a href="allProducts">
                                    <i class="fa-brands fa-product-hunt pe-7s-diamond metismenu-icon" ></i>
                                    
                                    All Prodects
                                </a>
                            </li>
                            <li>
                                <a href="addProduct">
                                    
                                    <i class="fa-solid fa-plus metismenu-icon pe-7s-diamond""></i>
                                    Add Prodect
                                    
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Clients</li>
                            <li><a href="getclients">
                                <i class="fa-solid fa-users metismenu-icon pe-7s-diamond"></i>
                                    All Clients
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="app-main__outer">
                <div class="app-main__inner" id="main-content">
                    @if (session()->has('success'))
                        <x-alert type="success">

                            {{ session('success') }}
                        </x-alert>
                    @endif
                    @if (session()->has('error'))
                        <x-alert type="danger">

                            {{ session('error') }}
                        </x-alert>
                    @endif
                    <x-homeDashboard />

                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.vertical-nav-menu a').click(function(e) {
                e.preventDefault();
                var page = $(this).attr('href');


                // Make an AJAX request to get component HTML with data
                $.ajax({
                    url: `/dashboard/${page}`, // Adjust the URL as needed
                    method: 'GET',
                    success: function(data) {
                    console.log(data);
                    $('#main-content').html(data['dataC']);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js">
    </script>
</body>

</html>
