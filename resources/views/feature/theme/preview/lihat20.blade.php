<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>The Vow - Wedding Shop Responsive HTML Template</title>
    <link rel="stylesheet" href="{{ asset('theme/theme12/css/owl.carousel.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('theme/theme12/img/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('theme/theme12/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/theme12/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/theme12/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/theme12/css/style.css') }}">
</head>

<body>
    <!--push menu cart -->
    <div class="pushmenu pushmenu-left cart-box-container">
        <div class="cart-list">
            <span class="close-left js-close"><i class="ion-ios-close-outline f-24"></i></span>
            <h3 class="cart-title">Your Cart</h3>
            <ul class="list">
                <li>
                    <a href="#" title="" class="cart-product-image"><img src="{{ asset('theme/theme12/img/cart_1.jpg')}}" alt="Product"></a>
                    <div class="text">
                        <p class="product-name">Beaded Flower Headband</p>
                        <p class="product-price">$145.00</p>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li>
                    <a href="#" title="" class="cart-product-image"><img src="{{ asset('theme/theme12/img/cart_2.jpg')}}" alt="Product"></a>
                    <div class="text">
                        <p class="product-name">Brid in the Cage 299pln</p>
                        <p class="product-price">$145.00</p>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li>
                    <a href="#" title="" class="cart-product-image"><img src="{{ asset('theme/theme12/img/cart_1.jpg')}}" alt="Product"></a>
                    <div class="text">
                        <p class="product-name">Brid in the Cage 299pln</p>
                        <p class="product-price">$85.00</p>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li>
                    <a href="#" title="" class="cart-product-image"><img src="{{ asset('theme/theme12/img/cart_2.jpg')}}" alt="Product"></a>
                    <div class="text">
                        <p class="product-name">Brid in the Cage 299pln</p>
                        <p class="product-price">$85.00</p>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li>
                    <a href="#" title="" class="cart-product-image"><img src="{{ asset('theme/theme12/img/cart_1.jpg')}}" alt="Product"></a>
                    <div class="text">
                        <p class="product-name">Brid in the Cage 299pln</p>
                        <p class="product-price">$85.00</p>
                        <div class="clearfix"></div>
                    </div>
                </li>
            </ul>
            <div class="cart-bottom">
                <p class="total"><span>Subtotal</span> $560.00</p>
                <div class="cart-button">
                    <a class="checkout" href="#" title="">Check out</a>
                    <a class="edit-cart" href="#" title="edit cart">Edit cart</a>
                </div>
                <a href="#" class="text">Our Shipping & Return Policy</a>
            </div>
            <!-- End cart bottom -->
        </div>
    </div>
    <!-- End cart -->
    <!--search popup-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close close-popup" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">SEARCH HERE</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <form method="get" class="searchform" action="/search" role="search">
                            <input type="hidden" name="type" value="product">
                            <input type="text" name="q" class="form-control control-search">
                            <span class="input-group-btn">
                                  <button class="btn btn-default button_search" type="button"><i data-toggle="dropdown" class="icon-icon-search"></i></button>
                                </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END  Modal content-->
    <div class="wrappage">
        <header id="header" class="header-v1">
            
            <div class="container container-75">
                <div class="vow-topbar">
                    <div class="topbar-mobile-l hidden-lg hidden-md">
                        <div class="element-mobile hidden-xs">
                            <div class="has-element">
                                <div class="element-language dropdown">
                                    <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            
                              <span>EN</span>
                              <span class="fa fa-caret-down f-10"></span>
                            </a>
                                    <ul class="dropdown-menu" aria-labelledby="label2">
                                        <li><a href="#">EN</a></li>
                                        <li><a href="#">DE</a></li>
                                        <li><a href="#">FR</a></li>
                                    </ul>
                                </div>
                                <div class="element-currency dropdown">
                                    <a id="label3" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            
                              <span>USD</span>
                              <span class="fa fa-caret-down f-10"></span>
                            </a>
                                    <ul class="dropdown-menu" aria-labelledby="label3">
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">AUD</a></li>
                                        <li><a href="#">EUR</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="element-mobile">
                            <a href="#" data-toggle="modal" data-target="#myModal"><i class="ion-ios-search icon-rotate-90 f-24"></i></a>
                    </div>
                    <div class="element-mobile">
                        <a href="#" class="cart-mobile open-cart"><img src="img/icon-cart.png" alt=""><span class="count cart-count mobile v1">2</span></a>
                    </div>
                    <div class="element-mobile">
                        <a href="#"><i class="ion-ios-heart-outline f-24"></i></a>
                    </div>
                    <div class="element-mobile">
                        <a href="#"><i class="icon-user f-16 f-style"></i></a>
                    </div>
                    
                </div>
                    <div class="topbar-left v1 hidden-xs hidden-sm">
                        <div class="has-element">
                            <div class="element-language dropdown">
                                <a id="label4" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            
                              <span>EN</span>
                              <span class="fa fa-caret-down f-10"></span>
                            </a>
                                <ul class="dropdown-menu" aria-labelledby="label4">
                                    <li><a href="#">EN</a></li>
                                    <li><a href="#">DE</a></li>
                                    <li><a href="#">FR</a></li>
                                </ul>
                            </div>
                            <div class="element-currency dropdown">
                                <a id="label5" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            
                              <span>USD</span>
                              <span class="fa fa-caret-down f-10"></span>
                            </a>
                                <ul class="dropdown-menu" aria-labelledby="label5">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">AUD</a></li>
                                    <li><a href="#">EUR</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="has-element l-center">
                            <a href="#">Wishlist</a>
                        </div>
                        <div class="has-element l-center">
                            <a href="#" class="hover-dropdown">My Account <b class="caret"></b></a>
                            <ul class="dropdown-menu dropdown-hover">
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                            </ul>            
                        </div>
                        
                        <div class="has-element popup-element">
                            <a href="#" class="cart open-cart"><img src="{{ asset('theme/theme12/img/icon-cart.png')}}" alt=""><span class="count cart-count v1">2</span></a>
                            <a href="#" class="search-popup dropdown " data-toggle="modal" data-target="#myModal"><img src="{{ asset('theme/theme12/img/icon-search.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="topbar-right">
                        <div class="logo v1"><img src="{{ asset('theme/theme12/img/vow-pink-logo.png')}}" alt="logo"></div>
                        <button type="button" class="navbar-toggle vow-icon-menu v4 c-v3 js-menu icon-mobile hidden-lg hidden-md" data-toggle="collapse" data-target="#myNavbar">
                            <span class="vow-iconbar"></span>
                            <span class="vow-iconbar"></span>
                            <span class="vow-iconbar"></span>
                        </button>
                        <nav class="main-menu">
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav js-menubar">
                                    <li class="level1 active dropdown"><a href="#">Home</a>
                                        <span class="plus js-plus-icon"></span>
                                        <ul class="dropdown-menu menu-level-1 ">
                                            <li class="level2"><a href="home-1.html" title="Homepage">Home 1</a></li>
                                            <li class="level2"><a href="home-2.html" title="Homepage">Home 2</a></li>
                                            <li class="level2"><a href="home-3.html" title="Homepage">Home 3</a></li>
                                            <li class="level2"><a href="home-4.html" title="Homepage">Home 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 active dropdown">
                                        <a href="about.html">About</a>
                                    </li>
                                    <li class="level1 dropdown hassub"><a href="#">Shop</a>
                                        <span class="plus js-plus-icon"></span>
                                        <div class="menu-level-1 dropdown-menu">
                                            <ul class="level1">
                                                <li class="level2 col-4">
                                                    <a href="#">Shop pages</a>
                                                    <ul class="menu-level-2 col-6">
                                                        <li class="level3"><a href="shop_full.html" title="">Shop — Full</a></li>
                                                        <li class="level3"><a href="shop_grid.html" title="">Shop — Grid</a></li>
                                                        <li class="level3"><a href="shop_list.html" title="">Shop — List</a></li>
                                                        <li class="level3"><a href="shopping_cart.html" title="Shopping Cart ">Shopping Cart</a></li>
                                                        <li class="level3"><a href="wishlist.html" title="Wishlist ">Wishlist</a></li>
                                                        <li class="level3"><a href="checkout.html" title="Checkout ">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li class="level2 col-4">
                                                    <a href="# ">Collection</a>
                                                    <ul class="menu-level-2 col-6">
                                                        <li class="level3"><a href="collection_detail.html" title="Shop Collection">Collection Detail</a></li>
                                                        <li class="level3"><a href="collection_detail2.html" title="Shop Collection">Collection Detail 2</a></li>
                                                        <li class="level3"><a href="collection_detail3.html" title="Shop Collection">Collection Detail 3</a></li>
                                                        <li class="level3"><a href="collection-full.html" title="Shop Collection">Collection Full</a></li>
                                                    </ul>
                                                </li>
                                                <li class="level2 col-4">
                                                    <a href="#">Detail</a>
                                                    <ul class="menu-level-2 col-6">
                                                        <li class="level3"><a href="#" title="">Groom</a></li>
                                                        <li class="level3"><a href="#" title="">Bride</a></li>
                                                        <li class="level3"><a href="#" title="">Bridesmaids</a></li>
                                                        <li class="level3"><a href="#" title="">Wedding</a></li>
                                                        <li class="level3"><a href="#" title="">Secret garden</a></li>
                                                        <li class="level3"><a href="shop_detail.html" title="Product Detail">Shop Detail</a></li>
                                                    </ul>
                                                </li>
                                                <li class="level2 col-4">
                                                    <a href="#">Banner 1</a>
                                                    <div class="mega-banner">
                                                        <a href="#"><img src="img/Untitled-1.jpg" alt="" class="img-reponsive"></a>
                                                    </div>
                                                    <a href="#">Banner 2</a>
                                                    <div class="mega-banner ">
                                                        <a href="#"><img src="img/Untitled-2.jpg" alt="" class="img-reponsive"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                    <li class="level1 active dropdown">
                                        <a href="#">Blog</a>
                                        <span class="plus js-plus-icon"></span>
                                        <ul class="dropdown-menu menu-level-1">
                                            <li class="level2"><a href="news.html" title="Blog Grid 3 Column">Blog Grid 3 Column</a></li>
                                            <li class="level2"><a href="news2.html" title="Blog Grid 4 Column">Blog Grid 4 Column</a></li>
                                            <li class="level2"><a href="news-sidebar.html" title="Blog Sidebar Left">Blog Sidebar Left</a></li>
                                            <li class="level2"><a href="news_detail.html" title="Blog Detail">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 active dropdown">
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            
        </header>
        <div class="slider-home3">
            <div class="js-slider-home3">
                <div class="items">
                    <img src="{{ asset('theme/theme12/img/slider/h3_slide_1.jpg')}}" alt="images">
                    <div class="container">
                        <div class="box-content-right text-ver2 white">
                            <p class="h3-slide-desc">Start &nbsp; planning</p>
                            <h3 class="h3-slide-title">Your perfect wedding</h3>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <img src="{{ asset('theme/theme12/img/slider/h3_slide_2.jpg')}}" alt="images">
                    <div class="container">
                        <div class="box-content-left text-ver2 pink">
                            <p class="h3-slide-desc v2">Spring 2018</p>
                            <h3 class="h3-slide-title v2">Wedding dress trends</h3>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn-next">NEXT</a>
        </div>
        <div class="collection-ver2">
            <div class="container">
                    <div class="single-colect">
                        <a href="#" class="hover-images img-colect">
                            <img src="{{ asset('theme/theme12/img/collection/h3_c4.jpg')}}" alt="" class="img-responsive">
                            <div class="colect-content">
                                <h3>PARADISE FOUND</h3>
                                <p>first the packing, then the bliss</p>
                            </div>
                        </a>

                    </div>
                    <div class="flex-colect">
                        <div class="flex-two">
                            <a href="#" class="hover-images img-colect">
                                <img src="{{ asset('theme/theme12/img/collection/h3_c3.jpg')}}" alt="" class="img-responsive">
                                <div class="colect-content v2">
                                    <h3>SHOES & ACCESSORIES</h3>
                                </div>
                            </a>
                        </div>
                        <div class="flex-one">
                            <div class="colect-img">
                                <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/collection/h3_c1.jpg')}}" alt="" class="img-responsive"></a>
                                <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/collection/h3_c2.jpg')}}" alt="" class="img-responsive"></a>
                            </div>
                            <div class="colect-newsletter">
                                <span>Register for latest news & discounts</span>
                                <form action="#" class="f-newsletter h3-newsletter">
                                    <input type="text" name="s" placeholder="Your e-mail" class="form-control">
                                    <button type="submit" class="btn f-btn-submit">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 feature-inner">
                            <div class="feature-img">
                                <img src="{{ asset('theme/theme12/img/icon/gift_h3.png')}}" alt="" class="img-reponsive">
                            </div>
                            <div class="feature-info">
                                <h3>Packing</h3>
                                <p>Lorem Ipsum is simply dummy text of the</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 feature-inner">
                            <div class="feature-img">
                                <img src="{{ asset('theme/theme12/img/icon/policy_h3.png')}}" alt="" class="img-reponsive">
                            </div>
                            <div class="feature-info">
                                <h3>Return policy</h3>
                                <p>Lorem Ipsum is simply dummy text of the</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 feature-inner">
                            <div class="feature-img">
                                <img src="{{ asset('theme/theme12/img/icon/shipping_h3.png')}}" alt="" class="img-reponsive">
                            </div>
                            <div class="feature-info">
                                <h3>Shipping & taxes</h3>
                                <p>Lorem Ipsum is simply dummy text of the</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 feature-inner">
                            <div class="feature-img">
                                <img src="{{ asset('theme/theme12/img/icon/telephone_h3.png')}}" alt="" class="img-reponsive">
                            </div>
                            <div class="feature-info">
                                <h3>Contact</h3>
                                <p>Lorem Ipsum is simply dummy text of the</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="new-collection v3">
                <div class="container">
                    <h3 class="vow-title v3">New collections</h3>
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 col-md-3 c-item">
                            <a href="#" class="hover-images">
                                <img src="{{ asset('theme/theme12/img/collection/h3_colect1.jpg')}}" alt="" class="img-reponsive">
                            </a>
                            <h3 class="h-colect-title v4">wedding</h3>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 c-item">
                            <a href="#" class="hover-images">
                                <img src="{{ asset('theme/theme12/img/collection/h3_colect2.jpg')}}" alt="" class="img-reponsive">
                            </a>
                            <h3 class="h-colect-title v4">Groom</h3>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 c-item">
                            <a href="#" class="hover-images">
                                <img src="{{ asset('theme/theme12/img/collection/h3_colect3.jpg')}}" alt="" class="img-reponsive">
                            </a>
                            <h3 class="h-colect-title v4">Bride</h3>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 c-item">
                            <a href="#" class="hover-images">
                                <img src="{{ asset('theme/theme12/img/collection/h3_colect4.jpg')}}" alt="" class="img-reponsive">
                            </a>
                            <h3 class="h-colect-title v4">Secret garden</h3>
                        </div>
                    </div>
                </div>
        </div>
        <div class="product-countdown">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 flex-img">
                        <div class="product-img">
                            <img src="{{ asset('theme/theme12/img/h3_bride.jpg')}}" alt="" class="img-responsive">
                            <div class="ribbon">HOT
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="product-info v4">
                            <p class="sku">// Sku: 8129005</p>
                            <h3 class="product-name"><a href="#">Bernadette bride dresses</a></h3>
                            <p class="product-desc-ver2">Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text of the printing and typesetting industry into stiff sections.</p>
                            <p class="product-price">$1,950.00</p>
                            <a href="#" class="btn-addcart">Add to cart</a>
                            <div class="countdown countdown-time" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured-product v3">
            <div class="container">
                <h3 class="vow-title v3">Featured Products</h3>
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item v3">
                        <div class="product-img v3">
                            <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_1.jpg')}}" alt="" class="img-reponsive"></a>
                        </div>

                        <div class="product-info v3">
                            <h3 class="product-title"><a href="#">Brid in the Cage 299pln</a></h3>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item v3">
                        <div class="product-img v3">
                            <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_2.jpg')}}" alt="" class="img-reponsive"></a>
                        </div>

                        <div class="product-info v3">
                            <h3 class="product-title"><a href="#">Madeline bride</a></h3>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item v3">
                        <div class="product-img v3">
                            <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_3.jpg')}}" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info v3">
                            <h3 class="product-title"><a href="#">Beaded Flower Headband</a></h3>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item v3">
                        <div class="product-img v3">
                            <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_4.jpg')}}" alt="" class="img-reponsive"></a>
                        </div>

                        <div class="product-info v3">
                            <h3 class="product-title"><a href="#">Bridal Maxi Skirt in Tulle</a></h3>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item v3">
                        <div class="product-img v3">
                            <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_5.jpg')}}" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info v3">
                            <h3 class="product-title"><a href="#">Jewelled Box Clutch Bag</a></h3>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item v3">
                        <div class="product-img v3">
                            <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_6.jpg')}}" alt="" class="img-reponsive"></a>
                        </div>
                        
                        <div class="product-info v3">
                            <h3 class="product-title"><a href="#">Becca Lace Strappy Underwire Bra</a></h3>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item v3">
                        <div class="product-img v3">
                            <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_7.jpg')}}" alt="" class="img-reponsive"></a>
                        </div>
                        
                        <div class="product-info v3">
                            <h3 class="product-title"><a href="#">Becca Lace Thong</a></h3>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item v3">
                        <div class="product-img v3">
                            <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_8.jpg')}}" alt="" class="img-reponsive"></a>
                        </div>
                        
                        <div class="product-info v3">
                            <h3 class="product-title"><a href="#">Olivia The Wolf Lace Hair Comb</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
                
        <div class="vow-connect v2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="testimonial">
                            <h3 class="vow-title v4">Testimonial</h3>
                            <div class="owl-carousel owl-theme js-owl-test">
                                <div class="test-item-list">
                                    <div class="test-item">
                                        <div class="test-img">
                                            <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/h3_test1.jpg')}}" alt="" class="img-responsive"></a>
                                            <h3 class="test-name">Mekirin</h3>
                                        </div>
                                        <div class="test-text">
                                            <p>“I invited these event planner to arrange a bachelor party for my best friend!”</p>
                                        </div>
                                    </div>
                                    <div class="test-item">
                                        <div class="test-img">
                                            <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/h3_test2.jpg')}}" alt="" class="img-responsive"></a>
                                            <h3 class="test-name">Shival-k</h3>
                                        </div>
                                        <div class="test-text">
                                            <p>“Perfect decoration and perfect buffet for my little sister’s birthday party!”</p>
                                        </div>
                                    </div>
                                    <div class="test-item">
                                        <div class="test-img">
                                            <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/h3_test3.jpg')}}" alt="" class="img-responsive"></a>
                                            <h3 class="test-name">jin simple</h3>
                                        </div>
                                        <div class="test-text">
                                            <p>“My family and i are beyond happy to have them plan our wedding day”</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="test-item-list">
                                    <div class="test-item">
                                        <div class="test-img">
                                            <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/h3_test1.jpg')}}" alt="" class="img-responsive"></a>
                                            <h3 class="test-name">Mekirin</h3>
                                        </div>
                                        <div class="test-text">
                                            <p>“I invited these event planner to arrange a bachelor party for my best friend!”</p>
                                        </div>
                                    </div>
                                    <div class="test-item">
                                        <div class="test-img">
                                            <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/h3_test2.jpg')}}" alt="" class="img-responsive"></a>
                                            <h3 class="test-name">Shival-k</h3>
                                        </div>
                                        <div class="test-text">
                                            <p>“Perfect decoration and perfect buffet for my little sister’s birthday party!”</p>
                                        </div>
                                    </div>
                                    <div class="test-item">
                                        <div class="test-img">
                                            <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/h3_test3.jpg')}}" alt="" class="img-responsive"></a>
                                            <h3 class="test-name">jin simple</h3>
                                        </div>
                                        <div class="test-text">
                                            <p>“My family and i are beyond happy to have them plan our wedding day”</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="test-item-list">
                                    <div class="test-item">
                                        <div class="test-img">
                                            <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/h3_test1.jpg')}}" alt="" class="img-responsive"></a>
                                            <h3 class="test-name">Mekirin</h3>
                                        </div>
                                        <div class="test-text">
                                            <p>“I invited these event planner to arrange a bachelor party for my best friend!”</p>
                                        </div>
                                    </div>
                                    <div class="test-item">
                                        <div class="test-img">
                                            <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/h3_test2.jpg')}}" alt="" class="img-responsive"></a>
                                            <h3 class="test-name">Shival-k</h3>
                                        </div>
                                        <div class="test-text">
                                            <p>“Perfect decoration and perfect buffet for my little sister’s birthday party!”</p>
                                        </div>
                                    </div>
                                    <div class="test-item">
                                        <div class="test-img">
                                            <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/h3_test3.jpg')}}" alt="" class="img-responsive"></a>
                                            <h3 class="test-name">jin simple</h3>
                                        </div>
                                        <div class="test-text">
                                            <p>“My family and i are beyond happy to have them plan our wedding day”</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 border-center">
                        <div class="blog v3">
                            <h3 class="vow-title v4">Lastest Blog post</h3>
                            <div class="blog-item">
                                <div class="post-img">
                                    <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/h3_blog1.jpg')}}" alt="" class="img-responsive"></a>
                                </div>
                                <div class="post-info v2">
                                    <div class="post-date v2 f-14">18 August 2018</div>
                                    <h3 class="post-title v2"><a href="#">Paris, jet’aime: jeremy’s adventures at maison &amp; objet</a></h3>
                                    <a href="#" class="btn-find v3">FIND OUT MORE »</a>
                                </div>
                            </div>

                            <div class="blog-item">
                                <div class="post-img">
                                    <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/h3_blog2.jpg')}}" alt="" class="img-responsive"></a>
                                </div>
                                <div class="post-info v2">
                                    <div class="post-date v2 f-14">18 August 2018</div>
                                    <h3 class="post-title v2"><a href="#">When candles aren’t enough - on the sub-<br>ject of professional lighting</a></h3>
                                    <a href="#" class="btn-find v3">FIND OUT MORE »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-v1">
        <a href="#" class="scroll-top v1"><i class="ion-ios-arrow-up"></i></a>
        <div class="top-footer v1 bg-v1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <h3 class="f-title mb-24">Register to the list</h3>
                        <form action="#" class="f-newsletter">
                            <input type="text" name="s" placeholder="Your e-mail" class="form-control">
                            <button type="submit" class="btn f-btn-submit">
                                <i class="ion-ios-plus-outline"></i>
                            </button>
                        </form>
                        <h3 class="f-title mb-24">Follow us</h3>
                        <div class="f-social-menu v1">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-3">
                        <h3 class="f-title">collection</h3>
                        <ul class="f-menu">
                            <li><a href="#">Princess white</a></li>
                            <li><a href="#">Lady Love</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Lady Bloosom</a></li>
                            <li><a href="#">Secret Garden</a></li>
                            <li><a href="#">Starduct</a></li>
                            <li><a href="#">La Parisienne</a></li>
                            <li><a href="#">Cruel Beaty</a></li>
                            <li><a href="#">Cruel Beauty</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-3">
                        <h3 class="f-title">info</h3>
                        <ul class="f-menu">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Delivery & Returns</a></li>
                            <li><a href="#">Shipping & taxes</a></li>
                            <li><a href="#">Payment</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-3">
                        <h3 class="f-title">about</h3>
                        <ul class="f-menu">
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-3">
                        <h3 class="f-title">site map</h3>
                        <ul class="f-menu">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Our team</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Coporate</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright v1 bg-copy-v1">
            <div class="container">
                <div class="row">
                    <span>Copyright © 2018 EngoTheme. All Rights Reserved</span>
                    <ul class="footer-menu">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Contact information</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </footer>   
</div>
    <script src="{{ asset('theme/theme12/js/jquery.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/bootstrap.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/headroom.min.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/slick.min.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/countdown.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/main.js') }}"></script>
</body>

</html>