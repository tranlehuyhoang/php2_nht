<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>Suruchi - Fashion eCommerce HTML Template</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="./app/view/inc/assets/img/favicon.ico">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="./app/view/inc/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="./app/view/inc/assets/css/plugins/glightbox.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="./app/view/inc/assets/css/vendor/bootstrap.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="./app/view/inc/assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
    <!-- Start header area -->
    <header class="header__section">
        <a href="/sendmail">mail</a>
        <div class="main__header header__sticky">
            <div class="container-fluid">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512">
                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
                            </svg>
                            <span class="visually-hidden">Menu Open</span>
                        </a>
                    </div>
                    <div class="main__logo">
                        <h1 class="main__logo--title"><a class="main__logo--link" href="/"><img class="main__logo--img" src="./app/view/inc/assets/img/logo/nav-log.png" alt="logo-img"></a></h1>
                    </div>
                    <div class="header__search--widget header__sticky--none d-none d-lg-block">
                        <form class="d-flex header__search--form" action="./search" method="get">
                            <div class="header__search--box">
                                <label>
                                    <input class="header__search--input" placeholder="Search..." name="search" type="text">
                                </label>
                                <button class="header__search--button bg__secondary text-white" type="submit" aria-label="search button">
                                    <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="27.51" height="26.443" viewBox="0 0 512 512">
                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32">
                                        </path>
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="header__account header__sticky--none">
                        <ul class="d-flex">
                            <li class="header__account--items">
                                <a class="header__account--btn" href="/tai-khoan">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 512 512">
                                        <path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                        <path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                    </svg>
                                    <span class="header__account--btn__text">My Account</span>
                                </a>
                            </li>
                            <li class="header__account--items">
                                <a class="header__account--btn minicart__open--btn" href="/cart" data-offcanvas>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 14.706 13.534">
                                        <g transform="translate(0 0)">
                                            <g>
                                                <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor" />
                                                <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor" />
                                                <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="header__account--btn__text"> My cart</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__menu d-none header__sticky--block d-lg-block">
                        <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="/">Home
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="header__menu--items mega__menu--items style2">
                                    <a class="header__menu--link" href="/cua-hang">Shop
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link " href="contact.html">Contact </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__account header__account2 header__sticky--block">
                        <ul class="d-flex">
                            <li class="header__account--items header__account2--items  header__account--search__items d-none d-lg-block">
                                <a class="header__account--btn search__open--btn" href="javascript:void(0)" data-offcanvas>
                                    <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 512 512">
                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                    </svg>
                                    <span class="visually-hidden">Search</span>
                                </a>
                            </li>
                            <li class="header__account--items header__account2--items">
                                <a class="header__account--btn" href="/tai-khoan">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 512 512">
                                        <path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                        <path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                    </svg>
                                    <span class="visually-hidden">My Account</span>
                                </a>
                            </li>
                            <li class="header__account--items header__account2--items">
                                <a class="header__account--btn minicart__open--btn" href="/cart" data-offcanvas>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 14.706 13.534">
                                        <g transform="translate(0 0)">
                                            <g>
                                                <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor" />
                                                <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor" />
                                                <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container-fluid">
                <div class="header__bottom--inner position__relative d-none d-lg-flex justify-content-between align-items-center">
                    <div class="header__menu">
                        <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="/">Home
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="header__menu--items mega__menu--items">
                                    <a class="header__menu--link" href="/cua-hang">Shop
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="contact.html">Contact </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <p class="header__discount--text"><img class="header__discount--icon__img" src="./app/view/inc/assets/img/icon/lamp.png" alt="lamp-img"> Special up to 60% Off all item
                    </p>
                </div>
            </div>
        </div>

        <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo">
                    <a class="offcanvas__logo_link" href="/">
                        <img src="./app/view/inc/assets/img/logo/nav-log.png" alt="Grocee Logo" width="158" height="36">
                    </a>
                    <button class="offcanvas__close--btn" data-offcanvas>close</button>
                </div>
                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="/">Home</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="/cua-hang">Shop</a>
                        </li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Offcanvas header menu -->

        <!-- Start serch box area -->
        <div class="predictive__search--box ">
            <div class="predictive__search--box__inner">
                <h2 class="predictive__search--title">Search Products</h2>
                <form class="predictive__search--form" action="#">
                    <label>
                        <input class="predictive__search--input" placeholder="Search Here" type="text">
                    </label>
                    <button class="predictive__search--button" aria-label="search button" type="submit"><svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="30.51" height="25.443" viewBox="0 0 512 512">
                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                        </svg> </button>
                </form>
            </div>
            <button class="predictive__search--close__btn" aria-label="search close button" data-offcanvas>
                <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51" height="30.443" viewBox="0 0 512 512">
                    <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                </svg>
            </button>
        </div>
        <!-- End serch box area -->

    </header>
    <!-- End header area -->