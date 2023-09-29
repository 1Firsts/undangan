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
@yield('content')
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
        <header id="header" class="header-v4 header-top-absolute">
            <div class="container">
                <div class="row">
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
                                <a href="#" class="cart-mobile open-cart"><img src="{{ asset('theme/theme12/img/icon-cart.png')}}" alt="" class=""><span class="count cart-count mobile v2">2</span></a>
                            </div>
                            <div class="element-mobile">
                                <a href="#"><i class="ion-ios-heart-outline f-24"></i></a>
                            </div>
                            <div class="element-mobile">
                                <a href="#"><i class="icon-user f-16 f-style"></i></a>
                            </div>
                        </div>
                        <div class="topbar-left v4 hidden-xs hidden-sm">
                            <div class="vow-icon-menu v4 js-menu hidden-xs hidden-sm">
                                <span class="vow-iconbar"></span>
                                <span class="vow-iconbar"></span>
                                <span class="vow-iconbar"></span>
                            </div>
                            <ul class="navbar-topbar-left">
                                <li><a href="#" class="open-cart">My cart <span>( 0 )</span></a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                            </ul>
                        </div>
                        <div class="topbar-right">
                            <div class="logo v4"><a href="#"><img src="{{ asset('theme/theme12/img/vow-text-logo.png')}}" alt="logo"></a></div>
                            <button type="button" class="navbar-toggle vow-icon-menu v4 js-menu icon-mobile hidden-lg hidden-md" data-toggle="collapse" data-target="#myNavbar">
                                <span class="vow-iconbar"></span>
                                <span class="vow-iconbar"></span>
                                <span class="vow-iconbar"></span>
                            </button>
                        </div>
                    </div>
                    <div class="vow-bottom">
                            
                            <nav class="main-menu v2 js-open-menu">
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
                                                            <li class="level3"><a href="shop_detail.html" title="Shop Detail">Shop Detail</a></li>
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
        <div class="wrapper-slider">
            <div class="slider-home4 js-slider-home4">
                <div class="slider-img">
                    <img src="{{ asset('theme/theme12/img/slider/h4_slide_1.jpg')}}" alt="" class="img-responsive">
                    <div class="slider-content">
                        <div class="container">
                            <h3>New arrivals</h3>
                        </div>
                    </div>
                </div>
                <div class="slider-img">
                    <img src="{{ asset('theme/theme12/img/slider/h4_slide_2.jpg')}}" alt="" class="img-responsive">
                    <div class="slider-content">
                        <div class="container">
                            <h3>New arrivals</h3>
                        </div>
                    </div>
                </div>
                <div class="slider-img">
                    <img src="{{ asset('theme/theme12/img/slider/h4_slide_3.jpg')}}" alt="" class="img-responsive">
                    <div class="slider-content">
                        <div class="container">
                            <h3>New arrivals</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="rotate">
                <div class="container container-rotate">
                    <div class="custom v2">
                        <div class="pagingInfo"></div>
                         <div class="post-fade">
                         </div>
                         
                     </div>
                </div> 
            </div>
        </div>
        <div class="collection-ver3">
            <div class="flex-group">
                <div class="flex-row">
                    <a href="#" class="effect_img img-colect">
                        <img src="{{ asset('theme/theme12/img/collection/h4_colect1.jpg')}}" alt="" class="img-responsive">
                        <div class="colect-content v3">
                            <h3>PARADISE FOUND</h3>
                            <p>first the packing, then the <i>bliss</i></p>
                        </div>
                    </a>
                    <a href="#" class="hover-images flex-items">
                        <img src="{{ asset('theme/theme12/img/collection/h4_colect2.jpg')}}" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="flex-row">
                    <a href="#" class="hover-images img-colect">
                        <img src="{{ asset('theme/theme12/img/collection/h4_colect3.jpg')}}" alt="" class="img-responsive">
                        <div class="colect-content vertical-text">
                            <h3>accessories</h3>
                        </div>
                    </a>
                    <a href="#" class="effect_img img-colect">
                        <img src="{{ asset('theme/theme12/img/collection/h4_colect4.jpg')}}" alt="" class="img-responsive">
                        <div class="colect-content v4">
                            <h3>Day dresses</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="essential">
                <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/collection/c_1.jpg')}}" alt=""></a>
                <div class="content">
                    <h3 class="title">HONEYMOON ESSENTIALS</h3>
                    <p class="desc">Tuck a flower by your ear and drink in the lazy</p>
                </div>
            </div>
        </div>
        <div class="container essential-ver2">
            <div class="essential-img h4-colect-ovl">
                <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/collection/h4_colect5.jpg')}}" alt=""></a>
                <a href="#" class="hover-images"><img src="{{ asset('theme/theme12/img/collection/h4_colect6.jpg')}}" alt=""></a>
            </div>
            <div class="content">
                <h3 class="title">Limited autumn collection</h3>
                <p class="desc">Urban collection for women compose contemporary inspiration and elegant sophisticated shapes.</p>
                <a href="#" class="btn-colect">Show collection <span></span></a>
            </div>
        </div>
        <footer class="footer-v4 bg-v4">
        <div class="container">
            <div class="row">
                <span>Copyright © 2018 EngoTheme. All Rights Reserved</span>
                <div class="footer-left">
                    <ul class="footer-menu">
                        <li><a href="#">Newsletter</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="#">Press</a></li>
                    </ul>
                    <div class="f-social-menu">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
    <script src="{{ asset('theme/theme12/js/jquery.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/bootstrap.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/slick.min.js') }}"></script>
    <script src="{{ asset('theme/theme12/js/main.js') }}"></script>
</body>

</html>