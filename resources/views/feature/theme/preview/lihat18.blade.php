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
    <link rel="stylesheet" href="{{ asset('theme/theme12/css/jquery.fancybox.min.css') }}">
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
            <header id="header" class="header-v2 v-sidebar">
                <div class="awemenu-nav headroom" data-responsive-width="1200">
                    <div class="container container-75 hidden-xs hidden-sm">
                        <div class="vow-topbar v2 v-remove">
                            <div class="topbar-left">
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
                                    <a href="#" class="cart open-cart"><img src="{{ asset('theme/theme12/img/icon-cart.png')}}" alt=""><span class="count cart-count v2">2</span></a>
                                    <a href="#" class="search-popup dropdown " data-toggle="modal" data-target="#myModal"><img src="{{ asset('theme/theme12/img/icon-search.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="topbar-right">
                                <div class="logo v3 hidden-md hidden-lg"><img src="{{ asset('theme/theme12/img/vow-logo.png')}}" alt="logo"></div>
                                <button type="button" class="navbar-toggle vow-icon-menu v4 js-menu icon-mobile hidden-lg hidden-md" data-toggle="collapse">
                                    <span class="vow-iconbar"></span>
                                    <span class="vow-iconbar"></span>
                                    <span class="vow-iconbar"></span>
                                </button>
                            </div>
                            
                        </div>
                        <div class="vow-topbar v2 sticky">
                            <div class="topbar-left">
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
                                    <a href="#" class="cart open-cart"><img src="{{ asset('theme/theme12/img/icon-cart.png')}}" alt=""><span class="count cart-count v2">2</span></a>
                                    <a href="#" class="search-popup dropdown " data-toggle="modal" data-target="#myModal"><img src="{{ asset('theme/theme12/img/icon-search.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="topbar-right">
                                <div class="logo v3"><img src="{{ asset('theme/theme12/img/vow-logo.png')}}" alt="logo"></div>
                                <button type="button" class="navbar-toggle vow-icon-menu v4 js-menu icon-mobile hidden-lg hidden-md" data-toggle="collapse">
                                    <span class="vow-iconbar"></span>
                                    <span class="vow-iconbar"></span>
                                    <span class="vow-iconbar"></span>
                                </button>
                            </div>
                            <nav class="main-menu js-open-menu">
                                <div class="collapse navbar-collapse">
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
                                                            <a href="#"><img src="{{ asset('theme/theme12/img/Untitled-1.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <a href="#">Banner 2</a>
                                                        <div class="mega-banner ">
                                                            <a href="#"><img src="{{ asset('theme/theme12/img/Untitled-2.jpg')}}" alt="" class="img-reponsive"></a>
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
                    <div class="container container-75 hidden-md hidden-lg">
                        <div class="vow-topbar v2">
                            <div class="topbar-mobile-l">
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
                                    <a href="#" class="cart-mobile open-cart"><img src="{{ asset('theme/theme12/img/icon-cart.png')}}" alt=""><span class="count cart-count mobile v2">2</span></a>
                                </div>
                                <div class="element-mobile">
                                    <a href="#"><i class="ion-ios-heart-outline f-24"></i></a>
                                </div>
                                <div class="element-mobile">
                                    <a href="#"><i class="icon-user f-16 f-style"></i></a>
                                </div>
                            </div>
                            <div class="topbar-right">
                                <div class="logo v3"><img src="{{ asset('theme/theme12/img/vow-logo.png')}}" alt="logo"></div>
                                <button type="button" class="navbar-toggle vow-icon-menu v4 js-menu icon-mobile hidden-lg hidden-md" data-toggle="collapse" data-target="#myNavbar2">
                                    <span class="vow-iconbar"></span>
                                    <span class="vow-iconbar"></span>
                                    <span class="vow-iconbar"></span>
                                </button>
                            </div>
                            <nav class="main-menu js-open-menu">
                                <div class="collapse navbar-collapse" id="myNavbar2">
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
                                                            <a href="#"><img src="{{ asset('theme/theme12/img/Untitled-1.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <a href="#">Banner 2</a>
                                                        <div class="mega-banner ">
                                                            <a href="#"><img src="{{ asset('theme/theme12/img/Untitled-2.jpg')}}" alt="" class="img-reponsive"></a>
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
            <div class="page-left-sidebar">
                <div class="navbar-wrapper">
                    <div class="logo v3 hidden-xs hidden-sm"><img src="{{ asset('theme/theme12/img/vow-logo.png')}}" alt="logo"></div>
                    <nav class="main-menu v3 hidden-xs hidden-sm">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav v3">
                                <li class="level1 active dropdown"><a href="#">Home <span class="fa fa-caret-down f-10"></span></a>
                                    <ul class="dropdown-menu menu-level-1 v3 ">
                                        <li class="level2"><a href="home-1.html" title="Homepage">Home 1</a></li>
                                        <li class="level2"><a href="home-2.html" title="Homepage">Home 2</a></li>
                                        <li class="level2"><a href="home-3.html" title="Homepage">Home 3</a></li>
                                        <li class="level2"><a href="home-4.html" title="Homepage">Home 4</a></li>
                                    </ul>
                                </li>
                                <li class="level1 active dropdown">
                                    <a href="about.html">About</a>
                                </li>
                                <li class="level1 dropdown hassub"><a href="#">Shop <span class="fa fa-caret-down f-10"></span></a>
                                    <div class="menu-level-1 v3 dropdown-menu">
                                        <ul class="level1">
                                            <li class="level2 col-4">
                                                <a href="#">Shop pages</a>
                                                <ul class="menu-level-2 ">
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
                                                <ul class="menu-level-2 ">
                                                    <li class="level3"><a href="collection_detail.html" title="Shop Collection">Collection Detail</a></li>
                                                    <li class="level3"><a href="collection_detail2.html" title="Shop Collection">Collection Detail 2</a></li>
                                                    <li class="level3"><a href="collection_detail3.html" title="Shop Collection">Collection Detail 3</a></li>
                                                    <li class="level3"><a href="collection-full.html" title="Shop Collection">Collection Full</a></li>
                                                </ul>
                                            </li>
                                            <li class="level2 col-4">
                                                <a href="#">Detail</a>
                                                <ul class="menu-level-2 ">
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
                                    <a href="#">Blog <span class="fa fa-caret-down f-10"></span></a>
                                    <ul class="dropdown-menu menu-level-1 v3">
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
                    <div class="social-menu v3 hidden-xs hidden-sm">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="page-right-content">
                <div class="slider slider-home1">
                    <div class="js-slider-home1">
                        <img src="{{ asset('theme/theme12/img/slider_1_1.jpg')}}" alt="">
                        <img src="{{ asset('theme/theme12/img/slider_1_2.jpg')}}" alt="">
                        <img src="{{ asset('theme/theme12/img/slider_1_3.jpg')}}" alt="">
                    </div>
                    <div class="btn-slider">
                        <a href="#" class="btn-arrow top-arrow"></a>
                        <a href="#" class="btn-arrow bottom-arrow"></a>
                    </div>
                </div>
            </div>
            <div class="video">
                <a data-fancybox href="{{ url('https://vimeo.com/242347548')}}" class="hover-images image-video">
                    <img src="img/video.jpg" alt="" class="img-responsive">
                </a>
                <div class="video-title">
                    <h3>autumn 2018 <br> by Jang Choou</h3>
                </div>
            </div>
            <div class="new-collection">
                <div class="container">
                    <h3 class="vow-title">New collections</h3>
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 col-md-3 c-item">
                            <a href="#" class="hover-images">
                                <img src="{{ asset('theme/theme12/img/home1_c1.jpg')}}" alt="" class="img-reponsive">
                            </a>
                            <h3 class="h-colect-title">wedding</h3>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 c-item">
                            <a href="#" class="hover-images">
                                <img src="{{ asset('theme/theme12/img/home1_c2.jpg')}}" alt="" class="img-reponsive">
                            </a>
                            <h3 class="h-colect-title">Groom</h3>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 c-item">
                            <a href="#" class="hover-images">
                                <img src="{{ asset('theme/theme12/img/home1_c3.jpg')}}" alt="" class="img-reponsive">
                            </a>
                            <h3 class="h-colect-title">Bride</h3>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 c-item">
                            <a href="#" class="hover-images">
                                <img src="{{ asset('theme/theme12/img/home1_c4.jpg')}}" alt="" class="img-reponsive">
                            </a>
                            <h3 class="h-colect-title">Secret garden</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vow-info">
                <div class="quote text-center">
                    <p>We help you plan the best for your dreams, <span class="vow-color">Opportunities don't happen</span>. You create them!</p>
                </div>
                <div class="text-center" style="background:url({{ asset('theme/theme12/img/ribbon_bg.png')}}) no-repeat top center;background-size: contain">
                    <div class="vow-img">
                        <a href="#" class="hover-images">
                            <img src="{{ asset('theme/theme12/img/home1_vows.jpg')}}" alt="" class="img-reponsive">
                        </a>
                    </div>
                    <div class="vow-desc">
                        <h3 class="h-colect-title v2">Marriagevows</h3>
                        <p class="v-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
                        <p class="author">mv</p>
                    </div>
                </div>
            </div>
            <div class="featured-product">
                <div class="container">
                    <h3 class="vow-title">Featured Products</h3>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item">
                            <div class="product-img v2">
                                <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_1.jpg')}}" alt="" class="img-reponsive"></a>
                                <div class="overlay-img box-content-center hover-price">
                                    <div class="product-price inovl">
                                        <p class="price-n">$58.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action v2">
                                <a href="#" class="btn-cart" title="Add to cart"><i class="icon-bag"></i></a>
                                <a href="#" class="btn-wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                <a href="#" class="btn-switch" title="Compare"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="product-info v2">
                                <h3 class="product-title"><a href="#">Brid in the Cage 299pln</a></h3>
                                <div class="product-price hidden-md hidden-lg">
                                    <p class="price-n">$58.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item">
                            <div class="product-img v2">
                                <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_2.jpg')}}" alt="" class="img-reponsive"></a>
                                <div class="overlay-img box-content-center hover-price">
                                    <div class="product-price inovl">
                                        <p class="price-n">$58.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action v2">
                                <a href="#" class="btn-cart" title="Add to cart"><i class="icon-bag"></i></a>
                                <a href="#" class="btn-wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                <a href="#" class="btn-switch" title="Compare"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="product-info v2">
                                <h3 class="product-title"><a href="#">Madeline bride</a></h3>
                                <div class="product-price hidden-md hidden-lg">
                                    <p class="price-n">$58.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item">
                            <div class="product-img v2">
                                <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_3.jpg')}}" alt="" class="img-reponsive"></a>
                                <div class="overlay-img box-content-center hover-price">
                                    <div class="product-price inovl">
                                        <p class="price-n">$58.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action v2">
                                <a href="#" class="btn-cart" title="Add to cart"><i class="icon-bag"></i></a>
                                <a href="#" class="btn-wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                <a href="#" class="btn-switch" title="Compare"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="product-info v2">
                                <h3 class="product-title"><a href="#">Beaded Flower Headband</a></h3>
                                <div class="product-price hidden-md hidden-lg">
                                    <p class="price-n">$58.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item">
                            <div class="product-img v2">
                                <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_4.jpg')}}" alt="" class="img-reponsive"></a>
                                <div class="overlay-img box-content-center hover-price">
                                    <div class="product-price inovl">
                                        <p class="price-n">$58.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action v2">
                                <a href="#" class="btn-cart" title="Add to cart"><i class="icon-bag"></i></a>
                                <a href="#" class="btn-wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                <a href="#" class="btn-switch" title="Compare"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="product-info v2">
                                <h3 class="product-title"><a href="#">Bridal Maxi Skirt in Tulle</a></h3>
                                <div class="product-price hidden-md hidden-lg">
                                    <p class="price-n">$58.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item">
                            <div class="product-img v2">
                                <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_5.jpg')}}" alt="" class="img-reponsive"></a>
                                <div class="overlay-img box-content-center hover-price">
                                    <div class="product-price inovl">
                                        <p class="price-n">$58.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action v2">
                                <a href="#" class="btn-cart" title="Add to cart"><i class="icon-bag"></i></a>
                                <a href="#" class="btn-wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                <a href="#" class="btn-switch" title="Compare"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="product-info v2">
                                <h3 class="product-title"><a href="#">Jewelled Box Clutch Bag</a></h3>
                                <div class="product-price hidden-md hidden-lg">
                                    <p class="price-n">$58.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item">
                            <div class="product-img v2">
                                <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_6.jpg')}}" alt="" class="img-reponsive"></a>
                                <div class="overlay-img box-content-center hover-price">
                                    <div class="product-price inovl">
                                        <p class="price-n">$58.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action v2">
                                <a href="#" class="btn-cart" title="Add to cart"><i class="icon-bag"></i></a>
                                <a href="#" class="btn-wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                <a href="#" class="btn-switch" title="Compare"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="product-info v2">
                                <h3 class="product-title"><a href="#">Becca Lace Strappy Underwire Bra</a></h3>
                                <div class="product-price hidden-md hidden-lg">
                                    <p class="price-n">$58.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item">
                            <div class="product-img v2">
                                <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_7.jpg')}}" alt="" class="img-reponsive"></a>
                                <div class="overlay-img box-content-center hover-price">
                                    <div class="product-price inovl">
                                        <p class="price-n">$58.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action v2">
                                <a href="#" class="btn-cart" title="Add to cart"><i class="icon-bag"></i></a>
                                <a href="#" class="btn-wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                <a href="#" class="btn-switch" title="Compare"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="product-info v2">
                                <h3 class="product-title"><a href="#">Becca Lace Thong</a></h3>
                                <div class="product-price hidden-md hidden-lg">
                                    <p class="price-n">$58.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-item">
                            <div class="product-img v2">
                                <a class="hover-images" href="#"><img src="{{ asset('theme/theme12/img/products/pd_8.jpg')}}" alt="" class="img-reponsive"></a>
                                <div class="overlay-img box-content-center hover-price">
                                    <div class="product-price inovl">
                                        <p class="price-n">$58.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action v2">
                                <a href="#" class="btn-cart" title="Add to cart"><i class="icon-bag"></i></a>
                                <a href="#" class="btn-wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                <a href="#" class="btn-switch" title="Compare"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="product-info v2">
                                <h3 class="product-title"><a href="#">Olivia The Wolf Lace Hair Comb</a></h3>
                                <div class="product-price hidden-md hidden-lg">
                                    <p class="price-n">$58.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fea-button text-center">
                    <a href="#" class="btn-viewshop">View shop</a>
                </div>
            </div>
            <div class="banner v2">
                <div class="container">
                    <a href="#" class="effect_img2"><img src="{{ asset('theme/theme12/img/home1_banner.jpg')}}" alt="" class="img-responsive"></a>
                </div>
            </div>
            
            <div class="vow-connect">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3">
                            <div class="connect-img">
                                <a href="#"><img src="{{ asset('theme/theme12/img/home1_bt_1.jpg')}}" alt="" class="img-reponsive">
                                    <div class="box-content-left">
                                    <h3 class="connect-title v2">individual orders</h3>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-3">
                            <div class="connect-img">
                                <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/home1_bt_2.jpg')}}" alt="" class="img-reponsive">
                                    <div class="box-content-left">
                                    <h3 class="connect-title">KIDS</h3>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-3">
                            <div class="connect-img">
                                <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/home1_bt_3.jpg')}}" alt="" class="img-reponsive">
                                    <div class="box-content-left">
                                    <h3 class="connect-title">INSTAGRAM</h3>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3">
                            <div class="newsletter text-center">
                                <h3>NEWSLETTER</h3>
                                <p>Register to our newletter to receive exclusive special offers & promotions.</p>
                                <form action="#" class="f-newsletter v2 h-newsletter">
                                    <input type="text" name="s" placeholder="Your e-mail" class="form-control bd-bottom">
                                    <span class="f-btn-submit v2">
                                        <i class="ion-ios-plus-outline"></i>
                                    </span>
                                    <button type="submit" class="btn btn-send">Send
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer-v1">
                <a href="#" class="scroll-top v2"><i class="ion-ios-arrow-up"></i></a>
                <div class="top-footer v2 bg-v2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <h3 class="f-title mb-24">Register to the list</h3>
                                <form action="#" class="f-newsletter v2">
                                    <input type="text" name="s" placeholder="Your e-mail" class="form-control">
                                    <button type="submit" class="btn f-btn-submit">
                                        <i class="ion-ios-plus-outline"></i>
                                    </button>
                                </form>
                                <h3 class="f-title mb-24">Follow us</h3>
                                <div class="f-social-menu v2">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 col-xs-3">
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
                            <div class="col-md-2 col-sm-3 col-xs-3 col-xs-3">
                                <h3 class="f-title">info</h3>
                                <ul class="f-menu">
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Delivery & Returns</a></li>
                                    <li><a href="#">Shipping & taxes</a></li>
                                    <li><a href="#">Payment</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 col-xs-3">
                                <h3 class="f-title">about</h3>
                                <ul class="f-menu">
                                    <li><a href="#">Our Story</a></li>
                                    <li><a href="#">Press</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 col-xs-3">
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
                <div class="copyright v2 bg-copy-v2">
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
    <a href="#" class="scroll_top"><i class="ion-ios-arrow-up"></i></a>
    <script src="{{ asset('theme/theme12/js/jquery.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/bootstrap.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/headroom.min.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/slick.min.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/main.js') }}"></script>
    <script>
        $(".awemenu-nav").headroom();   
    </script>
</body>

</html>