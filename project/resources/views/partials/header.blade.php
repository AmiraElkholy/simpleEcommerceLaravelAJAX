<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>eCommerce - Contact Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="wrapper">
            <header>
                <section id="top-area">
                    <p>Phone orders: 1-800-0000 | Email us: <a href="mailto:office@shop.com">office@shop.com</a></p>
                </section><!-- end top-area -->
                <section id="action-bar">
                    <div id="logo">
                        <a href="#"><span id="logo-accent">e</span>Commerce</a>
                    </div><!-- end logo -->

                    <nav class="dropdown">
                        <ul>
                            <li>
                                <a href="#">Shop by Category <img src="/img/down-arrow.gif" alt="Shop by Category" /></a>
                                <ul>
                                    @foreach ($headerCategories as $category)
                                        <li><a href="categories/{{$category->id}}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </nav>

                    <div id="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" placeholder="Search by keyword" class="search">
                            <input type="submit" value="Search" class="search submit">
                        </form>
                    </div><!-- end search-form -->

                    <div id="user-menu">

                    @if($user = Auth::user())
                        <nav id="signin" class="dropdown">
                            <ul>
                                <li>
                                    <a href="#"><img src="/img/user-icon.gif" alt="Sign In" />{{$user->name}}<img src="/img/down-arrow.gif" alt="Sign In" /></a>
                                    <ul>
                                        <form action="/logout" method="post">
                                            {{ csrf_field() }}
                                            <li><input type="submit" value="Sign out"></li>
                                        </form>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    @else
                        <nav id="signin" class="dropdown">
                            <ul>
                                <li>
                                    <a href="/login"><img src="/img/user-icon.gif" alt="Sign In" /> Sign In <img src="/img/down-arrow.gif" alt="Sign In" /></a>
                                    <ul>
                                        <li><a href="/login">Sign In</a></li>
                                        <li><a href="/register">Sign Up</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    @endif

                        <!--
                        <nav class="dropdown">
                            <ul>
                                <li>
                                    <a href="#"><img src="/img/user-icon.gif" alt="Andrew Perkins" /> Andrew Perkins <img src="/img/down-arrow.gif" alt="Andrew Perkins" /></a>
                                    <ul>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="#">Wishlist</a></li>
                                        <li><a href="#">Sign Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>-->
                    </div><!-- end user-menu -->

                    {{-- <div id="view-cart">
                        <a href="#"><img src="/img/blue-cart.gif" alt="View Cart"> View Cart</a>
                    </div><!-- end view-cart --> --}}
                </section><!-- end action-bar -->
            </header>
