<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Satrany Ecommerce</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/images/logo/logo.png">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/icofont.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/nivo-slider.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/percircle.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">
    @stack('custom-css')
    @vite(['resources/js/frontend/app.js'])
</head>

<body>
    <!-- header start -->
    <header>
        <div class="header-top-area bb d-none d-lg-block pbg">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <div class="language-menu dropdown">

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <p class="h2-color text-center">
                            Wellcome to Oneclick store!
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <div class="header-top-right">
                            <div class="account-menu text-white">
                                <ul>
                                    <li>
                                        <a href="/" class="text-white">My Account</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('checkout') }}" class="text-white">Checkout</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('cart') }}" class="text-white">Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('wishlist') }}" class="text-white">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('login') }}" class="text-white">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-3 col-5">
                        <div class="logo m-0">
                            <a href="{{ route('home') }}" class="d-flex align-items-center">
                                <img src="{{ asset('frontend/assets') }}/images/logo/logo.png" alt=""
                                    class="rounded-circle img-fluid my-1" height="100" width="100" />
                                    <span class="logo-title">Satrany</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="home3-mainmenu mainmenu home3-hover dropdown m-0">
                            <nav>
                                <ul class="menu-list">
                                    <li class="active2">
                                        <a href="{{ route('home') }}">Home
                                            </a>

                                    </li>

                                    <li>
                                        <a class="menu-contact" href="{{ route('about-us') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a class="menu-contact" href="{{ route('terms-and-conditions') }}">Terms & Conditions</a>
                                    </li>
                                    <li>
                                        <a class="menu-contact" href="{{ route('return-and-refund') }}">Return & Refund</a>
                                    </li>
                                    <li>
                                        <a class="menu-contact" href="{{ route('contact-us') }}">Contact us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-7 d-lg-none">
                        <div class="header-actions">
                            <div class="top-cart home3-bg">
                                <div class="cart">
                                    <i class="icofont icofont-bag"></i>
                                    <a href="#">
                                        3 Items - <strong>$500.00 </strong>
                                        <i class="icofont icofont-rounded-down"></i>
                                    </a>
                                </div>
                                <ul>
                                    <li>
                                        <div class="cart-items">
                                            <div class="cart-item bb mt-10">
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend/assets') }}/images/cart/1.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <a href="#">Lorem nec augue</a>
                                                    <a href="#" class="pull-right cart-remove">
                                                        <i class="fa fa-times"></i></a>
                                                    <span>1 x $220.00</span>
                                                </div>
                                            </div>
                                            <div class="cart-item bb mt-10">
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend/assets') }}/images/cart/2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <a href="#">Lorem nec augue</a>
                                                    <a href="#" class="pull-right cart-remove">
                                                        <i class="fa fa-times"></i></a>
                                                    <span>1 x $220.00</span>
                                                </div>
                                            </div>
                                            <div class="cart-item bb mt-10">
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend/assets') }}/images/cart/3.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <a href="#">Lorem nec augue</a>
                                                    <a href="#" class="pull-right cart-remove">
                                                        <i class="fa fa-times"></i></a>
                                                    <span>1 x $220.00</span>
                                                </div>
                                            </div>
                                            <div class="total mt-10">
                                                <span class="pull-left">Subtotal:</span>
                                                <span class="pull-right">$200.00</span>
                                            </div>
                                            <div class="cart-btn mb-20">
                                                <a href="#">view cart</a>
                                                <a href="#">Checkout</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <button class="action-toggle d-lg-none" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom home3-bg">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-2 col-lg-3 d-none d-lg-block">
                        <div class="position-relative">
                            <div class="categories-menu text-uppercase home3-bg2 home3-categories-menu click">
                                <i class="fa fa-list-ul"></i>
                                <span>All Categories</span>
                            </div>
                            <div class="menu-container home3-menu-container home3-hover toggole {{ request()->segment(1) == '' ? 'd-block' : 'd-none' }}" >
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-laptop"></i>
                                            Electronics
                                            <i class="fa fa-angle-right pull-right"></i></a>
                                        <ul class="megamenu-2 home3-megamenu-2 box-shadow">
                                            <li>
                                                <a class="mega-title bb" href="shop-style-1.html">Men's</a>
                                                <a href="shop-style-1.html">hats</a>
                                                <a href="shop-style-1.html">music</a>
                                                <a href="shop-style-1.html">singles</a>
                                            </li>
                                            <li>
                                                <a class="mega-title bb" href="#">Sports & Outdoors</a>
                                                <a href="shop-style-1.html">Smartphone</a>
                                                <a href="shop-style-1.html">women's</a>
                                                <a href="shop-style-1.html">Health & Beauty</a>
                                            </li>
                                            <li>
                                                <a class="mega-title bb" href="#">Accessories</a>
                                                <a href="#">Hobbies</a>
                                                <a href="#">Networking</a>
                                                <a href="#">Accessories</a>
                                                <a href="#">Clothing</a>
                                            </li>
                                            <li>
                                                <a class="mega-title bb" href="#">Laptops & Accessories</a>
                                                <a href="#">Hobbies</a>
                                                <a href="#">Clothing</a>
                                                <a href="#">Flashlights</a>
                                                <a href="shop-style-1.html">music</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-mobile"></i>
                                            Smartphone & Tablets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-medkit"></i> Health
                                            & Beauty</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-futbol-o"></i>
                                            Sports & Outdoors</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-compass"></i> Bags,
                                            Shoes & Accessories</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-shopping-bag"></i>
                                            Toys & Hobbies</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-desktop"></i>
                                            Computers & Networking</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-laptop"></i>
                                            Laptops & Accessories</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-clock-o"></i>
                                            Jewelry & Watches</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-chrome"></i>
                                            Flashlights & Lamps</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-star"></i>
                                            Headlight</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-plus-square-o"></i>
                                            More Categories</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4">
                        <div class="search-box home3-search-box">
                            <form action="#">

                                <input type="text" placeholder="Search Products…" />
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block">
                        <div class="top-cart home3-top-cart home3-bg bg-5">
                            <div class="cart">
                                <i class="icofont icofont-bag"></i>
                                <a href="#">
                                    3 Items - <strong>$500.00 </strong>
                                    <i class="icofont icofont-rounded-down"></i>
                                </a>
                            </div>
                            <ul>
                                <li>
                                    <div class="cart-items">
                                        <div class="cart-item bb mt-10">
                                            <div class="cart-img">
                                                <a href="#">
                                                    <img src="{{ asset('frontend/assets') }}/images/cart/1.jpg"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="cart-content">
                                                <a href="#">Lorem nec augue</a>
                                                <a href="#" class="pull-right cart-remove">
                                                    <i class="fa fa-times"></i></a>
                                                <span>1 x $220.00</span>
                                            </div>
                                        </div>
                                        <div class="cart-item bb mt-10">
                                            <div class="cart-img">
                                                <a href="#">
                                                    <img src="{{ asset('frontend/assets') }}/images/cart/2.jpg"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="cart-content">
                                                <a href="#">Lorem nec augue</a>
                                                <a href="#" class="pull-right cart-remove">
                                                    <i class="fa fa-times"></i></a>
                                                <span>1 x $220.00</span>
                                            </div>
                                        </div>
                                        <div class="cart-item bb mt-10">
                                            <div class="cart-img">
                                                <a href="#">
                                                    <img src="{{ asset('frontend/assets') }}/images/cart/3.jpg"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="cart-content">
                                                <a href="#">Lorem nec augue</a>
                                                <a href="#" class="pull-right cart-remove">
                                                    <i class="fa fa-times"></i></a>
                                                <span>1 x $220.00</span>
                                            </div>
                                        </div>
                                        <div class="total mt-10">
                                            <span class="pull-left">Subtotal:</span>
                                            <span class="pull-right">$200.00</span>
                                        </div>
                                        <div class="cart-btn mb-20">
                                            <a href="{{ route('cart') }}">view cart</a>
                                            <a href="{{ route('checkout') }}">Checkout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
