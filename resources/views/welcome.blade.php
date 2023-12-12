<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Online Martket Task </title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="meta description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="assets/img/icon.png" type="png">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- remixcon icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
    <!-- menu navbar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <!-- all css -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        .banner {
            width: 100%;
            max-height: 300px;
            overflow: hidden;
            position: relative;
        }

        .banner img {
            width: 100%;
            height: auto;
            display: block;
        }

        .banner-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }
    </style>

    <style>
        /* Preloader styles */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loader {
            width: 100px;
            height: 100px;
            border: 8px solid transparent;
            border-top: 8px solid #e91e63;
            border-radius: 50%;
            animation: spin 1s linear infinite, changeBorderColor 2s linear infinite;
        }

        /* Animation for spinning */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Animation for changing border color */
        @keyframes changeBorderColor {
            0% {
                border-top: 8px solid #e91e63;
            }

            25% {
                border-top: 8px solid #e91e63;
            }

            50% {
                border-top: 8px solid black;
            }

            75% {
                border-top: 8px solid #ff8421;
            }

            100% {
                border-top: 8px solid #ff8421;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ URL::asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

</head>

<body class="antialiased">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <main class=" body-wrapper content py-4">
        <!-- announcement bar start -->
        <div class="announcement-bar bg-2 py-1 py-lg-2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-3 d-none">
                        <div class="announcement-call-wrapper">
                            <div class="announcement-call">
                                <a class="announcement-text text-white" href="#">Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="announcement-text-wrapper d-flex align-items-center justify-content-center">
                            <p class="announcement-text text-white">Delivery in 2-3 Days!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none">
                        <div class="announcement-meta-wrapper d-flex align-items-center justify-content-end">
                            <div class="announcement-meta d-flex align-items-center">
                                <a class="announcement-login announcement-text text-white" href="login.html">
                                    <svg class="icon icon-user" width="10" height="11" viewBox="0 0 10 11"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5 0C3.07227 0 1.5 1.57227 1.5 3.5C1.5 4.70508 2.11523 5.77539 3.04688 6.40625C1.26367 7.17188 0 8.94141 0 11H1C1 8.78516 2.78516 7 5 7C7.21484 7 9 8.78516 9 11H10C10 8.94141 8.73633 7.17188 6.95312 6.40625C7.88477 5.77539 8.5 4.70508 8.5 3.5C8.5 1.57227 6.92773 0 5 0ZM5 1C6.38672 1 7.5 2.11328 7.5 3.5C7.5 4.88672 6.38672 6 5 6C3.61328 6 2.5 4.88672 2.5 3.5C2.5 2.11328 3.61328 1 5 1Z"
                                            fill="#fff" />
                                    </svg>
                                    <span>Login</span>
                                </a>
                                <span class="separator-login d-flex px-3">
                                    <svg width="2" height="9" viewBox="0 0 2 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M1 0.5V8.5" stroke="#FEFEFE" stroke-linecap="round" />
                                    </svg>
                                </span>
                                <div class="currency-wrapper">
                                    <button type="button" class="currency-btn btn-reset text-white"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="flag" src="assets/img/flag/usd.jpg" alt="img">
                                        <span>USD</span>
                                        <span>
                                            <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="#fff" stroke-width="1" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </button>

                                    <ul class="currency-list dropdown-menu dropdown-menu-end px-2">
                                        <li class="currency-list-item ">
                                            <a class="currency-list-option" href="#" data-value="USD">
                                                <img class="flag" src="assets/img/flag/usd.jpg" alt="img">
                                                <span>USD</span>
                                            </a>
                                        </li>
                                        <li class="currency-list-item ">
                                            <a class="currency-list-option" href="#" data-value="CAD">
                                                <img class="flag" src="assets/img/flag/cad.jpg" alt="img">
                                                <span>CAD</span>
                                            </a>
                                        </li>
                                        <li class="currency-list-item ">
                                            <a class="currency-list-option" href="#" data-value="EUR">
                                                <img class="flag" src="assets/img/flag/eur.jpg" alt="img">
                                                <span>EUR</span>
                                            </a>
                                        </li>
                                        <li class="currency-list-item ">
                                            <a class="currency-list-option" href="#" data-value="JPY">
                                                <img class="flag" src="assets/img/flag/jpy.jpg" alt="img">
                                                <span>JPY</span>
                                            </a>
                                        </li>
                                        <li class="currency-list-item ">
                                            <a class="currency-list-option" href="#" data-value="GBP">
                                                <img class="flag" src="assets/img/flag/gbp.jpg" alt="img">
                                                <span>GBP</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- announcement bar end -->

        <!-- header start -->
        <header class="sticky-header border-btm-black header-1">
            <div class="header-bottom">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-lg-5 d-lg-block d-none">
                            <nav class="site-navigation">
                                <ul class="main-menu list-unstyled justify-content-start" id="navbar-nav">
                                    <li class="menu-list-item nav-item">
                                        <div class="mega-menu-header">
                                            <a class="nav-link underline active" data-category="women"
                                                href="#">Women</a>
                                        </div>
                                    </li>
                                    <li class="menu-list-item nav-item has-megamenu">
                                        <div class="mega-menu-header">
                                            <a class="nav-link underline" data-category="plus" href="#">Plus
                                                Size</a>
                                        </div>
                                    </li>
                                    <li class="menu-list-item nav-item">
                                        <div class="mega-menu-header">
                                            <a class="nav-link underline" data-category="accessories"
                                                href="#">Accessories</a>
                                        </div>
                                    </li>
                                    <li class="menu-list-item nav-item">
                                        <div class="mega-menu-header">
                                            <a class="nav-link underline" data-category="kids"
                                                href="#">Kids</a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="header-logo">
                                <a href="index.html" class="logo-main">
                                    <img src="assets/img/logo.avif" loading="lazy" alt="logo">
                                </a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-8 col-8">
                            <div class="header-action d-flex align-items-center justify-content-end">
                                <a class="header-action-item header-search" href="javascript:void(0)">
                                    <svg class="icon icon-search" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.75 0.250183C11.8838 0.250183 15.25 3.61639 15.25 7.75018C15.25 9.54608 14.6201 11.1926 13.5625 12.4846L19.5391 18.4611L18.4609 19.5392L12.4844 13.5627C11.1924 14.6203 9.5459 15.2502 7.75 15.2502C3.61621 15.2502 0.25 11.884 0.25 7.75018C0.25 3.61639 3.61621 0.250183 7.75 0.250183ZM7.75 1.75018C4.42773 1.75018 1.75 4.42792 1.75 7.75018C1.75 11.0724 4.42773 13.7502 7.75 13.7502C11.0723 13.7502 13.75 11.0724 13.75 7.75018C13.75 4.42792 11.0723 1.75018 7.75 1.75018Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a class="header-action-item header-person ms-4 d-none d-lg-block" href="{{route('profile')}}">
                                    <svg class="icon icon-person" width="26" height="26" viewBox="0 0 26 26"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13 0C6.04484 0 0.875 5.16984 0.875 12.125C0.875 19.0802 6.04484 24.25 13 24.25C19.9552 24.25 25.125 19.0802 25.125 12.125C25.125 5.16984 19.9552 0 13 0ZM13 2.16667C18.4848 2.16667 22.9583 6.64016 22.9583 12.125C22.9583 17.6098 18.4848 22.0833 13 22.0833C7.51516 22.0833 3.04167 17.6098 3.04167 12.125C3.04167 6.64016 7.51516 2.16667 13 2.16667ZM13 4.33334C10.0293 4.33334 7.58334 6.77931 7.58334 9.75C7.58334 12.7207 10.0293 15.1667 13 15.1667C15.9707 15.1667 18.4167 12.7207 18.4167 9.75C18.4167 6.77931 15.9707 4.33334 13 4.33334ZM13 16.4375C9.76384 16.4375 7.0625 19.1389 7.0625 22.375H18.9375C18.9375 19.1389 16.2362 16.4375 13 16.4375Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a class="header-action-item header-wishlist ms-4 d-none d-lg-block"
                                    href="wishlist.html">
                                    <svg class="icon icon-wishlist" width="26" height="22"
                                        viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a class="header-action-item header-cart ms-4" href="#drawer-cart"
                                    data-bs-toggle="offcanvas">
                                    <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a class="header-action-item header-hamburger ms-4 d-lg-none" href="#drawer-menu"
                                    data-bs-toggle="offcanvas">
                                    <svg class="icon icon-hamburger" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="#000" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <line x1="3" y1="12" x2="21" y2="12"></line>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <line x1="3" y1="18" x2="21" y2="18"></line>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-wrapper">
                    <div class="container">
                        <form action="collection-left-sidebar.html" class="search-form d-flex align-items-center">
                            <button type="submit" class="search-submit bg-transparent pl-0 text-start">
                                <svg class="icon icon-search" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.75 0.250183C11.8838 0.250183 15.25 3.61639 15.25 7.75018C15.25 9.54608 14.6201 11.1926 13.5625 12.4846L19.5391 18.4611L18.4609 19.5392L12.4844 13.5627C11.1924 14.6203 9.5459 15.2502 7.75 15.2502C3.61621 15.2502 0.25 11.884 0.25 7.75018C0.25 3.61639 3.61621 0.250183 7.75 0.250183ZM7.75 1.75018C4.42773 1.75018 1.75 4.42792 1.75 7.75018C1.75 11.0724 4.42773 13.7502 7.75 13.7502C11.0723 13.7502 13.75 11.0724 13.75 7.75018C13.75 4.42792 11.0723 1.75018 7.75 1.75018Z"
                                        fill="black" />
                                </svg>
                            </button>
                            <div class="search-input mr-4">
                                <input type="text" placeholder="Search your products..." autocomplete="off">
                            </div>
                            <div class="search-close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="icon icon-close">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <!-- categories  -->
        <div class="container-fluid top-cat">
            <div class="row align-items-center">
                <div class="col-12 d-none d-lg-block">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container">
                            <ul class="navbar-nav mx-auto fs-6 flex-wrap">
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Dresses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Tops</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Bottoms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Outerwear</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Swimwear</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Activewear</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Intimates</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Shoes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="plus" href="#">Plus Size</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="accessories" href="#">Accessories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Jeans</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Sweaters</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Jackets</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Skirts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Lingerie</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Hats</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Bags</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Watches</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Scarves</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-category="women" href="#">Sunglasses</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        @yield('content')
        <!-- footer start -->
        <footer class="mt-100 overflow-hidden footer-style-2">
            <div class="footer-top bg-2">
                <div class="container">
                    <div class="footer-widget-wrapper">
                        <div class="row justify-content-between">
                            <div class="col-xl-2 col-lg-2 col-md-6 col-12 footer-widget">
                                <div class="footer-widget-inner">
                                    <h4 class="footer-heading d-flex align-items-center justify-content-between">
                                        <span>About</span>
                                        <span class="d-md-none">
                                            <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="#ffffff" stroke-width="1" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </h4>
                                    <ul class="footer-menu list-unstyled mb-0 d-md-block">
                                        <li class="footer-menu-item"><a href="#">About us</a></li>
                                        <li class="footer-menu-item"><a href="#">Press center</a></li>
                                        <li class="footer-menu-item"><a href="#">Our magazine</a></li>
                                        <li class="footer-menu-item"><a href="#">Our group</a></li>
                                        <li class="footer-menu-item"><a href="#">Work with us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-12 footer-widget">
                                <div class="footer-widget-inner">
                                    <h4 class="footer-heading d-flex align-items-center justify-content-between">
                                        <span>Shopping</span>
                                        <span class="d-md-none">
                                            <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="#ffffff" stroke-width="1" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </h4>
                                    <ul class="footer-menu list-unstyled mb-0 d-md-block">
                                        <li class="footer-menu-item"><a href="#">Brand catalog</a></li>
                                        <li class="footer-menu-item"><a href="#">Discount codes</a></li>
                                        <li class="footer-menu-item"><a href="#">Furniture</a></li>
                                        <li class="footer-menu-item"><a href="#">Sofa</a>
                                        </li>
                                        <li class="footer-menu-item"><a href="#">Chair</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-12 footer-widget">
                                <div class="footer-widget-inner">
                                    <h4 class="footer-heading d-flex align-items-center justify-content-between">
                                        <span>Help</span>
                                        <span class="d-md-none">
                                            <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="#ffffff" stroke-width="1" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </h4>
                                    <ul class="footer-menu list-unstyled mb-0 d-md-block">
                                        <li class="footer-menu-item"><a href="#">FAQ</a></li>
                                        <li class="footer-menu-item"><a href="#">Privacy policy</a></li>
                                        <li class="footer-menu-item"><a href="#">Support</a></li>
                                        <li class="footer-menu-item"><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-6 col-12 footer-widget">
                                <div class="footer-widget-inner">
                                    <h4 class="footer-heading d-flex align-items-center justify-content-between">
                                        <span>NEGATIVE APPAREL</span>
                                    </h4>
                                    <div class="footer-newsletter">
                                        <p class="footer-text mb-3">Join Our VIP Member List</p>
                                        <div class="newsletter-wrapper">
                                            <form action="#"
                                                class="footer-newsletter-form d-flex align-items-center">
                                                <input class="footer-newsletter-input bg-transparent" type="email"
                                                    placeholder="Your e-mail" autocomplete="off">
                                                <button class="footer-newsletter-btn" type="submit">SIGN
                                                    UP</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

        <!-- info -->
        <div class="container info text-center mt-4 my-5">
            <div class="logo">
                <img src="assets/img/logo.avif" alt="logo" class="img-fluid">
            </div>
            <div class="socials my-3 d-flex justify-content-center">
                <a href=""><i class="ri-twitter-line"></i></a>
                <a href=""><i class="ri-facebook-line"></i></a>
                <a href=""><i class="ri-instagram-line"></i></a>
                <a href=""><i class="ri-linkedin-line"></i></a>
                <a href=""><i class="ri-youtube-line"></i></a>
            </div>
            <div class="text-secondary">Copyright 2023 @ .Vibmart. All right reserved</div>
        </div>

        <!-- scrollup start -->
        <button id="scrollup">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="18 15 12 9 6 15"></polyline>
            </svg>
        </button>
        <!-- scrollup end -->

        <!-- drawer menu start -->
        <div class="offcanvas offcanvas-start d-flex d-lg-none" tabindex="-1" id="drawer-menu">
            <div class="offcanvas-wrapper">
                <div class="offcanvas-header border-btm-black">
                    <h5 class="drawer-heading">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0 d-flex flex-column justify-content-between">
                    <nav class="site-navigation">
                        <ul class="main-menu list-unstyled">
                            <li class="menu-list-item nav-item has-dropdown active">
                                <div class="mega-menu-header">
                                    <a class="nav-link active" href="index.html">
                                        Home
                                    </a>
                                    <span class="open-submenu">
                                        <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div class="submenu-transform submenu-transform-desktop">
                                    <div class="offcanvas-header border-btm-black">
                                        <h5 class="drawer-heading btn-menu-back d-flex align-items-center">
                                            <svg class="icon icon-menu-back" xmlns="http://www.w3.org/2000/svg"
                                                width="40" height="40" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polyline points="15 18 9 12 15 6"></polyline>
                                            </svg>
                                            <span class="menu-back-text">Home</span>
                                        </h5>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-list-item nav-item has-megamenu">
                                <div class="mega-menu-header">
                                    <a class="nav-link" href="#">
                                        Shop
                                    </a>
                                    <span class="open-submenu">
                                        <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div class="submenu-transform submenu-transform-desktop">
                                    <div class="container">
                                        <div class="offcanvas-header border-btm-black">
                                            <h5 class="drawer-heading btn-menu-back d-flex align-items-center">
                                                <svg class="icon icon-menu-back" xmlns="http://www.w3.org/2000/svg"
                                                    width="40" height="40" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <polyline points="15 18 9 12 15 6"></polyline>
                                                </svg>
                                                <span class="menu-back-text">Shop</span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-list-item nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="menu-list-item nav-item">
                                <div class="mega-menu-header">
                                    <a class="nav-link active" href="#">
                                        Pages
                                    </a>
                                    <span class="open-submenu">
                                        <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div class="submenu-transform submenu-transform-desktop">
                                    <div class="offcanvas-header border-btm-black">
                                        <h5 class="drawer-heading btn-menu-back d-flex align-items-center">
                                            <svg class="icon icon-menu-back" xmlns="http://www.w3.org/2000/svg"
                                                width="40" height="40" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polyline points="15 18 9 12 15 6"></polyline>
                                            </svg>
                                            <span class="menu-back-text">Pages</span>
                                        </h5>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-list-item nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <ul class="utility-menu list-unstyled">
                        <li class="utilty-menu-item">
                            <a class="announcement-login announcement-text" href="#">
                                <span class="utilty-icon-wrapper">
                                    <svg class="icon icon-user" width="24" height="24" viewBox="0 0 10 11"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5 0C3.07227 0 1.5 1.57227 1.5 3.5C1.5 4.70508 2.11523 5.77539 3.04688 6.40625C1.26367 7.17188 0 8.94141 0 11H1C1 8.78516 2.78516 7 5 7C7.21484 7 9 8.78516 9 11H10C10 8.94141 8.73633 7.17188 6.95312 6.40625C7.88477 5.77539 8.5 4.70508 8.5 3.5C8.5 1.57227 6.92773 0 5 0ZM5 1C6.38672 1 7.5 2.11328 7.5 3.5C7.5 4.88672 6.38672 6 5 6C3.61328 6 2.5 4.88672 2.5 3.5C2.5 2.11328 3.61328 1 5 1Z"
                                            fill="#000" />
                                    </svg>
                                </span>
                                <span>Login</span>
                            </a>
                        </li>
                        <li class="utilty-menu-item">
                            <a class="header-action-item header-wishlist" href="wishlist.html">
                                <span class="utilty-icon-wrapper">
                                    <svg class="icon icon-wishlist" width="26" height="22"
                                        viewBox="0 0 26 22" fill="#000" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                            fill="#000" />
                                    </svg>
                                </span>
                                <span>My wishlist</span>
                            </a>
                        </li>
                        <li class="utilty-menu-item">
                            <button type="button" class="currency-btn btn-reset" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="flag" src="assets/img/flag/usd.jpg" alt="img">
                                <span>USD</span>
                                <span class="utilty-icon-wrapper">
                                    <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="#000"
                                        stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </button>

                            <ul class="currency-list dropdown-menu dropdown-menu-end px-2">
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="USD">
                                        <img class="flag" src="assets/img/flag/usd.jpg" alt="img">
                                        <span>USD</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="CAD">
                                        <img class="flag" src="assets/img/flag/cad.jpg" alt="img">
                                        <span>CAD</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="EUR">
                                        <img class="flag" src="assets/img/flag/eur.jpg" alt="img">
                                        <span>EUR</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="JPY">
                                        <img class="flag" src="assets/img/flag/jpy.jpg" alt="img">
                                        <span>JPY</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="GBP">
                                        <img class="flag" src="assets/img/flag/gbp.jpg" alt="img">
                                        <span>GBP</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- drawer menu end -->

        <!-- drawer cart start -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="drawer-cart">
            <div class="offcanvas-header border-btm-black">
                <h5 class="cart-drawer-heading text_16">Your Cart (04)</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <div class="cart-content-area d-flex justify-content-between flex-column">
                    <div class="minicart-loop custom-scrollbar">
                        <!-- minicart item -->
                        <div class="minicart-item d-flex">
                            <div class="mini-img-wrapper">
                                <img class="mini-img" src="assets/img/products/shirts/shirt0.jpg" alt="img">
                            </div>
                            <div class="product-info">
                                <h2 class="product-title"><a href="#">Shirt</a></h2>
                                <p class="product-vendor">XS / Dove Gray</p>
                                <div class="misc d-flex align-items-end justify-content-between">
                                    <div class="quantity d-flex align-items-center justify-content-between">
                                        <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                                alt="minus"></button>
                                        <input class="qty-input" type="number" name="qty" value="1"
                                            min="0">
                                        <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                                alt="plus"></button>
                                    </div>
                                    <div class="product-remove-area d-flex flex-column align-items-end">
                                        <div class="product-price">$580.00</div>
                                        <a href="#" class="product-remove">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- minicart item -->
                        <div class="minicart-item d-flex">
                            <div class="mini-img-wrapper">
                                <img class="mini-img" src="assets/img/products/shirts/shirt1.jpg" alt="img">
                            </div>
                            <div class="product-info">
                                <h2 class="product-title"><a href="#">Shirt</a></h2>
                                <p class="product-vendor">XS / Pink</p>
                                <div class="misc d-flex align-items-end justify-content-between">
                                    <div class="quantity d-flex align-items-center justify-content-between">
                                        <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                                alt="minus"></button>
                                        <input class="qty-input" type="number" name="qty" value="1"
                                            min="0">
                                        <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                                alt="plus"></button>
                                    </div>
                                    <div class="product-remove-area d-flex flex-column align-items-end">
                                        <div class="product-price">$580.00</div>
                                        <a href="#" class="product-remove">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- minicart item -->
                        <div class="minicart-item d-flex">
                            <div class="mini-img-wrapper">
                                <img class="mini-img" src="assets/img/products/shirts/shirt5.jpg" alt="img">
                            </div>
                            <div class="product-info">
                                <h2 class="product-title"><a href="#">Shirt</a></h2>
                                <p class="product-vendor">XS / Dove Gray</p>
                                <div class="misc d-flex align-items-end justify-content-between">
                                    <div class="quantity d-flex align-items-center justify-content-between">
                                        <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                                alt="minus"></button>
                                        <input class="qty-input" type="number" name="qty" value="1"
                                            min="0">
                                        <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                                alt="plus"></button>
                                    </div>
                                    <div class="product-remove-area d-flex flex-column align-items-end">
                                        <div class="product-price">$580.00</div>
                                        <a href="#" class="product-remove">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- minicart item -->
                        <div class="minicart-item d-flex">
                            <div class="mini-img-wrapper">
                                <img class="mini-img" src="assets/img/products/shirts/shirt0.jpg" alt="img">
                            </div>
                            <div class="product-info">
                                <h2 class="product-title"><a href="#">Shirt</a></h2>
                                <p class="product-vendor">XS / Dove Gray</p>
                                <div class="misc d-flex align-items-end justify-content-between">
                                    <div class="quantity d-flex align-items-center justify-content-between">
                                        <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                                alt="minus"></button>
                                        <input class="qty-input" type="number" name="qty" value="1"
                                            min="0">
                                        <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                                alt="plus"></button>
                                    </div>
                                    <div class="product-remove-area d-flex flex-column align-items-end">
                                        <div class="product-price">$580.00</div>
                                        <a href="#" class="product-remove">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="minicart-footer">
                        <div class="minicart-calc-area">
                            <div class="minicart-calc d-flex align-items-center justify-content-between">
                                <span class="cart-subtotal mb-0">Subtotal</span>
                                <span class="cart-subprice">$1548.00</span>
                            </div>
                            <p class="cart-taxes text-center my-4">Taxes and shipping will be calculated at checkout.
                            </p>
                        </div>
                        <div class="minicart-btn-area d-flex align-items-center justify-content-between">
                            <a href="cart.html" class="minicart-btn btn-secondary">View Cart</a>
                            <a href="checkout.html" class="minicart-btn btn-primary">Checkout</a>
                        </div>
                    </div>
                </div>
                <div class="cart-empty-area text-center py-5 d-none">
                    <div class="cart-empty-icon pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M16 16s-1.5-2-4-2-4 2-4 2"></path>
                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                        </svg>
                    </div>
                    <p class="cart-empty">You have no items in your cart</p>
                </div>
            </div>
        </div>
        <!-- drawer cart end -->
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>

    <!-- custom script -->
    <script src="{{ URL::asset('js/home.js') }}"></script>
    <!-- all js -->
    <script src="{{ URL::asset('js/vendor.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>

    <script>
        // Function to hide the preloader and show the content
        function showContent() {
            document.querySelector('.preloader').style.display = 'none';
            document.querySelector('.content').style.display = 'block';
        }

        // Simulate page loading (you can replace this with actual loading events)
        window.addEventListener('load', function() {
            // Simulate a delay (e.g., 2 seconds) for demonstration purposes
            setTimeout(function() {
                showContent(); // Show content after the delay
            }, 2000); // 2000 milliseconds = 2 seconds (adjust as needed)
        });
    </script>

</body>

</html>
