<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Joolie - Wedding Store HTML Template</title>
      <meta name="format-detection" content="telephone=no">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/x-icon" href="{{ asset('theme/theme5/img/icons/favicon.png') }}">
      <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}">
      <link href="{{ url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Sulphur+Point:wght@300;400;700&display=swap') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('theme/theme5/css/style.css') }}">
   </head>
   <body>
      <!-- == WRAPPER ================== -->
      <div class="wrapper home">
         <!-- == HEADER ================== -->
         <header class="header">
            <div class="header__body">
               <div class="header__top">
                  <div class="header__top-column" data-da="header__menu,last,600">
                     <strong>30%</strong> <strong>off</strong> on all products enter code: joolie2020
                  </div>
                  <div class="header__top-column">
                     Call us: <a href="tel:18004527887">+1 800 452 78 87</a>
                  </div>
               </div>
               <div class="header__main">
                  <div class="header__burger">
                     <div class="burger-wrap">
                        <div class="burger" data-activEl="header__menu">
                           <span></span>
                           <span></span>
                           <span></span>
                           <span></span>
                        </div>
                     </div>
                  </div>
                  <nav class="header__menu">
                     <ul class="header__menu-list">
                        <li>
                           <a href="collections.html" class="header__menu-link">
                           Categories
                           </a>
                           <ul class="header__menu-sublist">
                              <li>
                              	<a href="#" class="header__menu-sublink">Link 1</a>
                              </li>
                              <li>
                              	<a href="#" class="header__menu-sublink">Link 2</a>
                              </li>
                              <li>
                              	<a href="#" class="header__menu-sublink">Link 3</a>
                              </li>
                              </ul>
                        </li>
                        <li>
                           <a href="#" class="header__menu-link">
                           Pages
                           </a>
                           <ul class="header__menu-sublist">
                              <li>
                                 <a href="about.html" class="header__menu-sublink">About Us</a>
                              </li>
                              <li>
                                 <a href="collections.html" class="header__menu-sublink">Collections</a>
                              </li>
                              <li>
                                 <a href="contact.html" class="header__menu-sublink">Contact</a>
                              </li>
                              <li>
                                 <a href="FAQ.html" class="header__menu-sublink">FAQ</a>
                              </li>
                              <li>
                                 <a href="profile.html" class="header__menu-sublink">My Profile</a>
                              </li>
                              <li>
                                 <a href="log-in.html" class="header__menu-sublink">Log In</a>
                              </li>
                              <li>
                                 <a href="registr.html" class="header__menu-sublink">Registration</a>
                              </li>
                              <li>
                                 <a href="page404.html" class="header__menu-sublink">Page 404</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="shop.html" class="header__menu-link">
                           Shop
                           </a>
                           <ul class="header__menu-sublist">
                              <li>
                                 <a href="cart.html" class="header__menu-sublink">Cart</a>
                              </li>
                              <li>
                                 <a href="checkout-1.html" class="header__menu-sublink">Checkout 1</a>
                              </li>
                              <li>
                                 <a href="checkout-2.html" class="header__menu-sublink">Checkout 2</a>
                              </li>
                              <li>
                                 <a href="checkout-3.html" class="header__menu-sublink">Checkout 3</a>
                              </li>
                              <li>
                                 <a href="wishlist.html" class="header__menu-sublink">Wishlist</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="blog.html" class="header__menu-link">
                           Blog
                           </a>
                           <ul class="header__menu-sublist">
                              <li>
                                 <a href="blog-detail.html" class="header__menu-sublink">Blog Detail</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </nav>
                  <div class="header__logo logo">
                     <a href="index.html">
                     <img class="img-svg" src="{{ asset('theme/theme5/img/logo/logo.svg')}}" alt="logo">
                     </a>
                  </div>
                  <div class="header__action">
                     <ul class="header__action-list">
                        <li>
                           <form action="/" class="form-search " data-da="header__menu,last,600">
                              <input id="search" type="text" class="form-search__input" placeholder="">
                              <label for="search" class="form-search__label">
                              <span>
                              <img src="{{ asset('theme/theme5/img/icons/search.svg')}}" alt="search">
                              </span>
                              </label>
                              <button type="submit" class="form-search__submit">
                              <span>
                              <img src="{{ asset('theme/theme5/img/icons/search.svg')}}" alt="submit">
                              </span>
                              </button>
                           </form>
                        </li>
                        <li>
                           <a href="profile.html" class="header__action-link">
                           <span class="header__action-icon-wrap"><img src="{{ url('img/icons/user.svg')}}" alt="user"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="header__action-link">
                           <span class="header__action-icon-wrap"><img src="{{ url('img/icons/heart.svg')}}" alt="user"></span>
                           <span class="header__action-count">0</span>
                           </a>
                        </li>
                        <li>
                           <a href="cart.html" class="header__action-link">
                           <span class="header__action-icon-wrap"><img src="{{ url('img/icons/shopping-bag.svg')}}" alt="user"></span>
                           <span class="header__action-count">0</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </header>
         <!-- == // HEADER ================== -->
         <!-- == PAGE CONTENT ================== -->
         <main class="page">
            <!-- == PROMO SLIDER ================== -->
            <section class="promo-slider _parallax">
               <div class="promo-slider__decor_1 layer" data-depth="0.30">
                  <img src="{{ asset('theme/theme5/img/promo-slider/flowers1.jpg')}}" alt="flowers">
               </div>
               <div class="promo-slider__decor_2 layer" data-depth="0.15">
                  <img src="{{ asset('theme/theme5/img/promo-slider/flowers2.jpg')}}" alt="flowers">
               </div>
               <div class="promo-slider__bg swiper-container">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide ibg">
                        <img data-src="{{ asset('theme/theme5/img/placeholder/1920x970.jpg')}}" src="{{ asset('theme/theme5/img/promo-slider/1x1.png')}}" class="swiper-lazy" alt="bg">
                     </div>
                     <div class="swiper-slide ibg">
                        <img data-src="{{ asset('theme/theme5/img/placeholder/1920x970.jpg')}}" src="{{ asset('theme/theme5/img/promo-slider/1x1.png')}}" class="swiper-lazy" alt="bg">
                     </div>
                     <div class="swiper-slide ibg">
                        <img data-src="{{ asset('theme/theme5/img/placeholder/1920x970.jpg')}}" src="{{ asset('theme/theme5/img/promo-slider/1x1.png')}}" class="swiper-lazy" alt="bg">
                     </div>
                  </div>
               </div>
               <div class="promo-slider__content">
                  <div class="swiper-container">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="promo-slider__inner">
                              <div class="promo-slider__suptitle suptitle">
                                 <span><img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="circles"></span>
                                 get your chance
                              </div>
                              <h1 class="promo-slider__title title-1">
                                 be charming <br>
                                 more than ever
                              </h1>
                              <div class="promo-slider__subtitle">
                                 <strong>50% off</strong>  on every product here.
                              </div>
                              <a href="shop.html" class="btn-default">
                              Shop now
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="promo-slider__inner">
                              <div class="promo-slider__suptitle suptitle">
                                 <span><img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="circles"></span>
                                 get your chance
                              </div>
                              <h1 class="promo-slider__title title-1">
                                 be charming <br>
                                 more than ever
                              </h1>
                              <div class="promo-slider__subtitle">
                                 <strong>50% off</strong>  on every product here.
                              </div>
                              <a href="#" class="btn-default">
                              Shop now
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="promo-slider__inner">
                              <div class="promo-slider__suptitle suptitle">
                                 <span><img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="circles"></span>
                                 get your chance
                              </div>
                              <h1 class="promo-slider__title title-1">
                                 be charming <br>
                                 more than ever
                              </h1>
                              <div class="promo-slider__subtitle">
                                 <strong>50% off</strong>  on every product here.
                              </div>
                              <a href="#" class="btn-default">
                              Shop now
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="promo-slider__control">
                     <div class="promo-slider__pagination slider-pagination"></div>
                     <div class="promo-slider__btn-wrap">
                        <div class="promo-slider__btn-prev btn-prev">
                           <span><img src="{{ asset('theme/theme5/img/icons/Arrow-left.svg')}}" alt="arrow"></span>
                           prev
                           <span><img src="{{ asset('theme/theme5/img/icons/Arrow-right.svg')}}" alt="arrow"></span>
                        </div>
                        <div class="promo-slider__btn-next btn-next">
                           next <span><img src="{{ asset('theme/theme5/img/icons/Arrow-right.svg')}}" alt="arrow"></span>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- == // PROMO SLIDER ================== -->
            <!-- == LOGOS BLOCK ================== -->
            <div class="logos-block">
               <div class="container">
                  <ul class="logos-block__list">
                     <li>
                        <a class="logos-block__item" href="#">
                        <img src="{{ asset('theme/theme5/img/logo/logo1.svg')}}" alt="logo">
                        </a>
                     </li>
                     <li>
                        <a class="logos-block__item" href="#">
                        <img src="{{ asset('theme/theme5/img/logo/logo2.svg')}}" alt="logo"> 
                        </a>
                     </li>
                     <li>
                        <a class="logos-block__item" href="#">
                        <img src="{{ asset('theme/theme5/img/logo/logo3.svg')}}" alt="logo">
                        </a>
                     </li>
                     <li>
                        <a class="logos-block__item" href="#">
                        <img src="{{ asset('theme/theme5/img/logo/logo4.svg')}}" alt="logo">
                        </a>
                     </li>
                     <li>
                        <a class="logos-block__item" href="#">
                        <img src="{{ asset('theme/theme5/img/logo/logo5.svg')}}" alt="logo">
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- == // LOGOS BLOCK ================== -->
            <!-- == PRODUCTS CATEGORY ================== -->
            <section class="products-category">
               <div class="container">
                  <div class="products-category__head head">
                     <div class="head__suptitle suptitle">
                        get your
                        <span><img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon"></span>
                        chance
                     </div>
                     <h3 class="head__title title-3"> 
                        Explore our collections
                     </h3>
                     <div class="head__text text">Cupidatat ad in qui est aliqua consectetur incididunt irure. Nostrud magna anim officia ad labore.</div>
                  </div>
               </div>
               <div class="products-category__list swiper-container" data-mobile="false">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <a href="shop.html" class="products-category__item category-card">
                           <div class="category-card__front">
                              <div class="category-card__img ibg">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/478x700.jpg')}}" src="{{ asset('theme/theme5/img/products-category/placeholder.jpg')}}" alt="img">
                              </div>
                              <div class="category-card__content">
                                 <div class="category-card__icon">
                                    <img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon">
                                 </div>
                                 <h5 class="category-card__title">accessories</h5>
                              </div>
                           </div>
                           <div class="category-card__back">
                              <div class="category-card__img ibg">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/478x700.jpg')}}" src="{{ asset('theme/theme5/img/products-category/placeholder.jpg')}}" alt="img">
                              </div>
                              <div class="category-card__content">
                                 <div class="category-card__icon">
                                    <img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon">
                                 </div>
                                 <h5 class="category-card__title">accessories</h5>
                                 <span class="btn-default">View Products</span>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="shop.html" class="products-category__item category-card">
                           <div class="category-card__front">
                              <div class="category-card__img ibg">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/478x700.jpg')}}" src="{{ asset('theme/theme5/img/products-category/placeholder.jpg')}}" alt="img">
                              </div>
                              <div class="category-card__content">
                                 <div class="category-card__icon">
                                    <img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon">
                                 </div>
                                 <h5 class="category-card__title">wedding dresses</h5>
                              </div>
                           </div>
                           <div class="category-card__back">
                              <div class="category-card__img ibg">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/478x700.jpg')}}" src="{{ asset('theme/theme5/img/products-category/placeholder.jpg')}}" alt="img">
                              </div>
                              <div class="category-card__content">
                                 <div class="category-card__icon">
                                    <img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon">
                                 </div>
                                 <h5 class="category-card__title">wedding dresses</h5>
                                 <span class="btn-default">View Products</span>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="shop.html" class="products-category__item category-card">
                           <div class="category-card__front">
                              <div class="category-card__img ibg">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/478x700.jpg')}}" src="{{ asset('theme/theme5/img/products-category/placeholder.jpg')}}" alt="img">
                              </div>
                              <div class="category-card__content">
                                 <div class="category-card__icon">
                                    <img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon">
                                 </div>
                                 <h5 class="category-card__title">decorations</h5>
                              </div>
                           </div>
                           <div class="category-card__back">
                              <div class="category-card__img ibg">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/478x700.jpg')}}" src="{{ asset('theme/theme5/img/products-category/placeholder.jpg')}}" alt="img">
                              </div>
                              <div class="category-card__content">
                                 <div class="category-card__icon">
                                    <img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon">
                                 </div>
                                 <h5 class="category-card__title">decorations</h5>
                                 <span class="btn-default">View Products</span>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="shop.html" class="products-category__item category-card">
                           <div class="category-card__front">
                              <div class="category-card__img ibg">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/478x700.jpg')}}" src="{{ asset('theme/theme5/img/products-category/placeholder.jpg')}}" alt="img">
                              </div>
                              <div class="category-card__content">
                                 <div class="category-card__icon">
                                    <img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon">
                                 </div>
                                 <h5 class="category-card__title">wedding suits</h5>
                              </div>
                           </div>
                           <div class="category-card__back">
                              <div class="category-card__img ibg">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/478x700.jpg')}}" src="{{ asset('theme/theme5/img/products-category/placeholder.jpg')}}" alt="img">
                              </div>
                              <div class="category-card__content">
                                 <div class="category-card__icon">
                                    <img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon">
                                 </div>
                                 <h5 class="category-card__title">wedding suits</h5>
                                 <span class="btn-default">View Products</span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="slider-pagination"></div>
               </div>
            </section>
            <!-- == // PRODUCTS CATEGORY ================== -->
            <!-- == POPULARS PRODUCTS ================== -->
            <section class="popular-products _parallax">
               <div class="popular-products__decor_1 layer" data-depth="0.30">
                  <img src="{{ asset('theme/theme5/img/populsr-products/decor1.jpg')}}" alt="flowers">
               </div>
               <div class="popular-products__decor_2 layer" data-depth="0.30">
                  <img src="{{ asset('theme/theme5/img/populsr-products/decor2.jpg')}}" alt="flowers">
               </div>
               <div class="container">
                  <div class="popular-products__head head">
                     <div class="head__suptitle suptitle">
                        look
                        <span><img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon"></span>
                        here
                     </div>
                     <h3 class="head__title title-3"> 
                        Popular products
                     </h3>
                  </div>
                  <ul class="popular-products__nav">
                     <li>
                        <a href="#tab-1" class="popular-products__link popular-products__triggers active">all</a>
                     </li>
                     <li>
                        <a href="#tab-2" class="popular-products__link popular-products__triggers">Wedding dresses</a>
                     </li>
                     <li>
                        <a href="#tab-3" class="popular-products__link popular-products__triggers">Wedding Suits</a>
                     </li>
                     <li>
                        <a href="#tab-4" class="popular-products__link popular-products__triggers">Wedding shoes</a>
                     </li>
                     <li>
                        <a href="#tab-5" class="popular-products__link popular-products__triggers">accessories</a>
                     </li>
                     <li>
                        <a href="#tab-6" class="popular-products__link popular-products__triggers">Decorations</a>
                     </li>
                     <li>
                        <a href="#tab-7" class="popular-products__link popular-products__triggers">Jewelry</a>
                     </li>
                  </ul>
                  <div id="tab-1" class="popular-products__tabs-content active">
                     <ul class="popular-products__list">
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 <a href="product-page.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x500.jpg')}}" src="{{ asset('theme/theme5/img/card/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card__bottom">
                                 <div class="card__title text">White Long Dress With Train</div>
                                 <span class="card__price">$2.285</span>
                                 <a href="#" class="card__like">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/heart.svg')}}" alt="icon">
                                 </a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 <a href="product-page.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x500.jpg')}}" src="{{ asset('theme/theme5/img/card/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card__bottom">
                                 <div class="card__title text">Black Classic Suit</div>
                                 <span class="card__price">$1.855</span>
                                 <span class="card__old-price">$2169</span>
                                 <a href="#" class="card__like">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/heart.svg')}}" alt="icon">
                                 </a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 <a href="product-page.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x500.jpg')}}" src="{{ asset('theme/theme5/img/card/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card__bottom">
                                 <div class="card__title text">Beautiful Glasses For Newlyweds</div>
                                 <span class="card__price">$168</span>
                                 <span class="card__old-price">$239</span>
                                 <a href="#" class="card__like">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/heart.svg')}}" alt="icon">
                                 </a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 <a href="product-page.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x500.jpg')}}" src="{{ asset('theme/theme5/img/card/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card__bottom">
                                 <div class="card__title text">Candles For The Ceremony</div>
                                 <span class="card__price">$69</span>
                                 <a href="#" class="card__like">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/heart.svg')}}" alt="icon">
                                 </a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 <a href="product-page.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x500.jpg')}}" src="{{ asset('theme/theme5/img/card/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card__bottom">
                                 <div class="card__title text">White Long Dress With Train</div>
                                 <span class="card__price">$2.795</span>
                                 <a href="#" class="card__like">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/heart.svg')}}" alt="icon">
                                 </a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 <a href="product-page.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x500.jpg')}}" src="{{ asset('theme/theme5/img/card/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card__bottom">
                                 <div class="card__title text">Navy Classic Suit</div>
                                 <span class="card__price">$1,318</span>
                                 <span class="card__old-price">$1.995</span>
                                 <a href="#" class="card__like">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/heart.svg')}}" alt="icon">
                                 </a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div id="tab-2" class="popular-products__tabs-content">
                     <ul class="popular-products__list">
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 <a href="product-page.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x500.jpg')}}" src="{{ asset('theme/theme5/img/card/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card__bottom">
                                 <div class="card__title text">White Long Dress With Train</div>
                                 <span class="card__price">$2.285</span>
                                 <a href="#" class="card__like">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/heart.svg')}}" alt="icon">
                                 </a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 <a href="product-page.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x500.jpg')}}" src="{{ asset('theme/theme5/img/card/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card__bottom">
                                 <div class="card__title text">Black Classic Suit</div>
                                 <span class="card__price">$1.855</span>
                                 <span class="card__old-price">$2169</span>
                                 <a href="#" class="card__like">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/heart.svg')}}" alt="icon">
                                 </a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div id="tab-3" class="popular-products__tabs-content">
                     <ul class="popular-products__list">
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 <a href="product-page.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x500.jpg')}}" src="{{ asset('theme/theme5/img/card/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card__bottom">
                                 <div class="card__title text">Black Classic Suit</div>
                                 <span class="card__price">$1.855</span>
                                 <span class="card__old-price">$2169</span>
                                 <a href="#" class="card__like">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/heart.svg')}}" alt="icon">
                                 </a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div id="tab-4" class="popular-products__tabs-content">
                     <ul class="popular-products__list">
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 <a href="product-page.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x500.jpg')}}" src="{{ asset('theme/theme5/img/card/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card__bottom">
                                 <div class="card__title text">Black Classic Suit</div>
                                 <span class="card__price">$1.855</span>
                                 <span class="card__old-price">$2169</span>
                                 <a href="#" class="card__like">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/heart.svg')}}" alt="icon">
                                 </a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div id="tab-5" class="popular-products__tabs-content">
                     <ul class="popular-products__list">
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 <a href="product-page.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x500.jpg')}}" src="{{ asset('theme/theme5/img/card/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card__bottom">
                                 <div class="card__title text">Black Classic Suit</div>
                                 <span class="card__price">$1.855</span>
                                 <span class="card__old-price">$2169</span>
                                 <a href="#" class="card__like">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/heart.svg')}}" alt="icon">
                                 </a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div id="tab-6" class="popular-products__tabs-content">
                     <ul class="popular-products__list">
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 <a href="product-page.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x500.jpg')}}" src="{{ asset('theme/theme5/img/card/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card__bottom">
                                 <div class="card__title text">Black Classic Suit</div>
                                 <span class="card__price">$1.855</span>
                                 <span class="card__old-price">$2169</span>
                                 <a href="#" class="card__like">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/heart.svg')}}" alt="icon">
                                 </a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div id="tab-7" class="popular-products__tabs-content">
                     <ul class="popular-products__list">
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 <a href="product-page.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x500.jpg')}}" src="{{ asset('theme/theme5/img/card/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card__bottom">
                                 <div class="card__title text">Black Classic Suit</div>
                                 <span class="card__price">$1.855</span>
                                 <span class="card__old-price">$2169</span>
                                 <a href="#" class="card__like">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/heart.svg')}}" alt="icon">
                                 </a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <a href="shop.html" class="btn-default">view all products</a> 	   
               </div>
            </section>
            <!-- == // POPULARS PRODUCTS ================== -->
            <!-- == TEXT VIDEO BLOCK ================== -->
            <section class="text-video-block _parallax">
               <div class="text-video-block__decor layer" data-depth="0.15">
                  <img src="{{ asset('theme/theme5/img/text-video-block/decor.jpg')}}" alt="flowers">
               </div>
               <div class="text-video-block__body">
                  <div class="text-video-block__column">
                     <div class="text-video-block__text-wrap">
                        <div class="text-video-block__text head">
                           <div class="head__suptitle suptitle">
                              <span><img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon"></span>
                              find your beauty
                           </div>
                           <h3 class="head__title title-3"> 
                              we work hard for your happy moment
                           </h3>
                           <div class="head__subtitle">We know that this is the best day of your life and it should be unforgettable.</div>
                           <div class="head__text text">We are a professional team with many years of experience and we know how to do everything in the best way. Wel prepare the perfect version of your holiday for you. Let this day be just the beginning ...</div>
                        </div>
                        <a href="blog-detail.html" class="btn-default">read more</a>
                     </div>
                  </div>
                  <div class="text-video-block__column">
                     <div class="video-block">
                        <video id="player" class="video-block__video" loop poster="{{ asset('theme/theme5/img/placeholder/950x700.jpg')}}">
                           <source src="{{ asset('theme/theme5/img/videoForTest.mp4')}}" type="video/mp4" />
                        </video>
                        <div class="video-block__play-pause">
                           <span class="icon-play3"></span>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- == // TEXT VIDEO BLOCK ================== -->
            <!-- == ADVANTAGES ================== -->
            <section class="advantages">
               <div class="container">
                  <ul class="advantages__list">
                     <li>
                        <div class="advantages__item">
                           <div class="advantages__icon">
                              <img src="{{ asset('theme/theme5/img/advantages/icon-dress.svg')}}" alt="icon">
                           </div>
                           <h5 class="advantages__title title-5">wide selection</h5>
                           <div class="advantages__text text">А huge number of products for your celebration day.</div>
                        </div>
                     </li>
                     <li>
                        <div class="advantages__item">
                           <div class="advantages__icon">
                              <img src="{{ asset('theme/theme5/img/advantages/icon-delivery.svg')}}" alt="icon">
                           </div>
                           <h5 class="advantages__title title-5">fast Delivery</h5>
                           <div class="advantages__text text">We deliver the next day after the order, as you wish.</div>
                        </div>
                     </li>
                     <li>
                        <div class="advantages__item">
                           <div class="advantages__icon">
                              <img src="{{ asset('theme/theme5/img/advantages/icon-girl.svg')}}" alt="icon">
                           </div>
                           <h5 class="advantages__title title-5">individual approach</h5>
                           <div class="advantages__text text">We discuss all the little things you need and want.</div>
                        </div>
                     </li>
                     <li>
                        <div class="advantages__item">
                           <div class="advantages__icon">
                              <img src="{{ asset('theme/theme5/img/advantages/icon-idea.svg')}}" alt="icon">
                           </div>
                           <h5 class="advantages__title title-5">Creative ideas</h5>
                           <div class="advantages__text text">Our designers are full of new creative ideas for you.</div>
                        </div>
                     </li>
                  </ul>
               </div>
            </section>
            <!-- == // ADVANTAGES ================== -->
            <!-- == GET YOUR GIFT BLOCK ================== -->
            <section class="get-your-gift-block _parallax">
               <div class="get-your-gift-block__decor_1 layer" data-depth="0.15">
                  <img src="{{ asset('theme/theme5/img/get-your-gift-block/decor1.jpg')}}" alt="flowers">
               </div>
               <div class="get-your-gift-block__decor_2 layer" data-depth="0.15">
                  <img src="{{ asset('theme/theme5/img/get-your-gift-block/decor2.jpg')}}" alt="flowers">
               </div>
               <div class="get-your-gift-block__img ibg">
                  <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/1920x900.jpg')}}" src="img/get-your-gift-block/placeholder.jpg')}}" alt="bg">
               </div>
               <div class="get-your-gift-block__body">
                  <div class="get-your-gift-block__suptitle suptitle">
                     <span><img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon"></span>
                     mega sale 2020
                  </div>
                  <h2 class="get-your-gift-block__title title-1">
                     hurry up to <br>
                     get your gift
                  </h2>
                  <div class="get-your-gift-block__time time-block" data-time="12/31/2020 10:00:00 PM">
                     <div class="time-block__item"> 
                        <span class="time-block__count" id="days">10</span>  
                        <span class="time-block__units">days</span>
                     </div>
                     <div class="time-block__item">
                        <span class="time-block__count" id="hours">04</span> 
                        <span class="time-block__units">hours</span>
                     </div>
                     <div class="time-block__item">
                        <span class="time-block__count" id="minutes">38</span> 
                        <span class="time-block__units">mins</span>
                     </div>
                     <div class="time-block__item">
                        <span class="time-block__count" id="seconds">15</span> 
                        <span class="time-block__units">sec</span>
                     </div>
                  </div>
                  <a href="collections.html" class="btn-default">find a gift</a>
               </div>
            </section>
            <!-- == // GET YOUR GIFT BLOCK ================== -->
            <!-- == LATEST ARTICLES ================== -->
            <section class="latest-articles _parallax">
               <div class="latest-articles__decor layer" data-depth="0.15">
                  <img src="{{ asset('theme/theme5/img/photo/decor.jpg')}}" alt="flowers">
               </div>
               <div class="container">
                  <div class="latest-articles__head head">
                     <div class="head__suptitle suptitle">
                        our
                        <span><img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon"></span>
                        blog
                     </div>
                     <h3 class="head__title title-3"> 
                        the latest in joolie
                     </h3>
                     <div class="head__text text">Cupidatat ad in qui est aliqua consectetur incididunt irure. Nostrud magna anim officia ad labore.</div>
                  </div>
                  <div class="latest-articles__list swiper-container" data-mobile="false">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="latest-articles__item card-article">
                              <div class="card-article__img ibg">
                                 <a href="blog-detail.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x250.jpg')}}" src="{{ asset('theme/theme5/img/card-article/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card-article__row">
                                 <div class="card-article__photo">
                                    <img src="{{ asset('theme/theme5/img/card-article/author-mini.png')}}" alt="photo">
                                 </div>
                                 <div class="card-article__author">Mary Lanoris</div>
                                 <div class="card-article__date">Sep 22, 2020</div>
                                 <a href="#" class="card-article__share">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/icon-share.svg')}}" alt="share">
                                 </a>
                              </div>
                              <h5 class="card-article__title title-5">
                                 <a href="#">How to prepare everything on the high level</a>
                              </h5>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="latest-articles__item card-article">
                              <div class="card-article__img ibg">
                                 <a href="blog-detail.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x250.jpg')}}" src="{{ asset('theme/theme5/img/card-article/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card-article__row">
                                 <div class="card-article__photo">
                                    <img src="{{ asset('theme/theme5/img/card-article/author-mini.png')}}" alt="photo">
                                 </div>
                                 <div class="card-article__author">Mary Lanoris</div>
                                 <div class="card-article__date">Sep 22, 2020</div>
                                 <a href="#" class="card-article__share">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/icon-share.svg')}}" alt="share">
                                 </a>
                              </div>
                              <h5 class="card-article__title title-5">
                                 <a href="#">Modern and trading decorations for wedding 2020</a>
                              </h5>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="latest-articles__item card-article">
                              <div class="card-article__img ibg">
                                 <a href="blog-detail.html">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/360x250.jpg')}}" src="{{ asset('theme/theme5/img/card-article/placeholder.jpg')}}" alt="img">
                                 </a>
                              </div>
                              <div class="card-article__row">
                                 <div class="card-article__photo">
                                    <img src="{{ asset('theme/theme5/img/card-article/author-mini.png')}}" alt="photo">
                                 </div>
                                 <div class="card-article__author">Mary Lanoris</div>
                                 <div class="card-article__date">Sep 22, 2020</div>
                                 <a href="#" class="card-article__share">
                                 <img class="img-svg" src="{{ asset('theme/theme5/img/icons/icon-share.svg')}}" alt="share">
                                 </a>
                              </div>
                              <h5 class="card-article__title title-5">
                                 <a href="#">The most important things when you choose the flowers</a>
                              </h5>
                           </div>
                        </div>
                     </div>
                     <div class="slider-pagination"></div>
                  </div>
               </div>
            </section>
            <!-- == // LATEST ARTICLES ================== -->
            <!-- == TESTIMONIALS SLIDER ================== -->
            <section class="testimonials-slider _parallax">
               <div class="testimonials-slider__decor layer" data-depth="0.15">
                  <img src="{{ asset('theme/theme5/img/photo/decor1.jpg')}}" alt="flowers">
               </div>
               <div class="container">
                  <div class="testimonials-slider__head head">
                     <div class="head__suptitle suptitle">
                        they
                        <span><img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon"></span>
                        say
                     </div>
                     <h3 class="head__title title-3"> 
                        testimonials
                     </h3>
                  </div>
                  <div class="testimonials-slider__body">
                     <div class="swiper-container">
                        <div class="swiper-wrapper">
                           <div class="testimonials-slider__item swiper-slide">
                              <div class="testimonials-slider__photo ibg">
                                 <span>
                                 <img src="{{ asset('theme/theme5/img/photo/avatar.png')}}" alt="phtoto">
                                 </span>
                              </div>
                              <div class="testimonials-slider__name">Milena Purcle</div>
                              <div class="testimonials-slider__text">
                                 I had the best wedding I have ever seen. Everything was very beautiful: the flowers, the accsessories, the decorations. Also everyone was affected with my amazing dress. Thank you so much!
                              </div>
                           </div>
                           <div class="testimonials-slider__item swiper-slide">
                              <div class="testimonials-slider__photo ibg">
                                 <span>
                                 <img src="{{ asset('theme/theme5/img/photo/avatar.png')}}" alt="phtoto">
                                 </span> 
                              </div>
                              <div class="testimonials-slider__name">Milena Purcle</div>
                              <div class="testimonials-slider__text">
                                 I had the best wedding I have ever seen. Everything was very beautiful: the flowers, the accsessories, the decorations. Also everyone was affected with my amazing dress. Thank you so much!
                                 I had the best wedding I have ever seen. Everything was very beautiful: the flowers, the accsessories, the decorations. Also everyone was affected with my amazing dress. Thank you so much!
                              </div>
                           </div>
                           <div class="testimonials-slider__item swiper-slide">
                              <div class="testimonials-slider__photo ibg">
                                 <span>
                                 <img src="{{ asset('theme/theme5/img/photo/avatar.png')}}" alt="phtoto">
                                 </span>
                              </div>
                              <div class="testimonials-slider__name">Milena Purcle</div>
                              <div class="testimonials-slider__text">
                                 I had the best wedding I have ever seen. Everything was very beautiful: the flowers, the accsessories, the decorations. Also everyone was affected with my amazing dress. Thank you so much!
                              </div>
                           </div>
                        </div>
                        <div class="testimonials-slider__pagination slider-pagination"></div>
                     </div>
                     <div class="testimonials-slider__btn-wrap">
                        <div class="testimonials-slider__btn-prev btn-prev">
                           <span><img src="{{ asset('theme/theme5/img/icons/Arrow-left.svg')}}" alt="arrow"></span>
                           prev
                           <span><img src="{{ asset('theme/theme5/img/icons/Arrow-right.svg')}}" alt="arrow"></span>
                        </div>
                        <div class="testimonials-slider__btn-next btn-next">
                           next <span><img src="{{ asset('theme/theme5/img/icons/Arrow-right.svg')}}" alt="arrow"></span>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- == // TESTIMONIALS SLIDER ================== -->
            <!-- == INSTAGRAM BLOCK ================== -->
            <section class="instagram-block _parallax">
               <div class="instagram-block__decor layer" data-depth="0.15">
                  <img src="{{ asset('theme/theme5/img/photo/decor2.jpg')}}" alt="flowers">
               </div>
               <div class="instagram-block__column_1">
                  <div class="instagram-block__text-wrap">
                     <div class="instagram-block__head head">
                        <div class="head__suptitle suptitle">
                           <span><img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon"></span>
                           <span class="left">our</span> instagram
                        </div>
                        <h3 class="head__title title-3"> 
                           be closer
                        </h3>
                        <div class="head__text text">More actions and bonuses you can find in our Instagram.</div>
                     </div>
                     <a href="#" class="instagram-block__link">
                     follow us <span><img class="img-svg" src="{{ asset('theme/theme5/img/icons/Arrow-right.svg')}}" alt="arrow"></span>
                     </a>
                  </div>
               </div>
               <div class="instagram-block__column_2">
                  <ul class="instagram-block__img-list">
                     <li>
                        <a href="#" class="instagram-block__img ibg">
                        <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/283x283.jpg')}}" src="{{ asset('theme/theme5/img/instagram-block/placeholder.jpg')}}" alt="img">
                        </a>
                     </li>
                     <li>
                        <a href="#" class="instagram-block__img ibg">
                        <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/283x283.jpg')}}" src="{{ asset('theme/theme5/img/instagram-block/placeholder.jpg')}}" alt="img">
                        </a>
                     </li>
                     <li>
                        <a href="#" class="instagram-block__img ibg">
                        <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/283x283.jpg')}}" src="{{ asset('theme/theme5/img/instagram-block/placeholder.jpg')}}" alt="img">
                        </a>
                     </li>
                     <li>
                        <a href="#" class="instagram-block__img ibg">
                        <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/283x283.jpg')}}" src="{{ asset('theme/theme5/img/instagram-block/placeholder.jpg')}}" alt="img">
                        </a>
                     </li>
                  </ul>
               </div>
            </section>
            <!-- == // INSTAGRAM BLOCK ================== -->
         </main>
         <!-- == // PAGE CONTENT ================== -->
         <!-- == FOOTER ================== -->
         <footer class="footer _parallax">
            <div class="footer__decor layer" data-depth="0.15">
               <img src="{{ asset('theme/theme5/img/footer/decor.jpg')}}" alt="flowers">
            </div>
            <div class="footer__bg ibg">
               <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/1920x500.jpg')}}" src="{{ asset('theme/theme5/img/footer/placeholder.jpg')}}" alt="img">
            </div>
            <div class="footer__body container">
               <div class="footer__row footer__row_1">
                  <div class="footer__logo logo">
                     <a href="#">
                     <img class="img-svg" src="{{ asset('theme/theme5/img/logo/logo.svg')}}" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="footer__row footer__row_2">
                  <div class="footer__column_1">
                     <form action="/" class="footer__form">
                        <h5 class="footer__form-title title-5">Newsletter</h5>
                        <p class="footer__form-text text">Don’t miss our significant news and season sales. Subscribe!</p>
                        <div class="footer__form-inner">
                           <input class="footer__form-input input" type="email" placeholder="Enter your email">
                           <button class="footer__form-submit" type="submit"><span>
                           <img class="img-svg" src="{{ asset('theme/theme5/img/icons/icon-send.svg')}}" alt="icon send">
                           </span></button> 
                        </div>
                     </form>
                  </div>
                  <div class="footer__column footer__column_2">
                     <h6 class="footer__title">Hit us up:</h6>
                     <p><a class="link" href="tel:18004527887">+1 800 452 78 87</a></p>
                     <p><a href="mailto:info@sitename.com">info@sitename.com</a></p>
                     <p>27 Division St, New York, NY 10002, USA</p>
                  </div>
                  <div class="footer__column footer__column_3">
                     <h6 class="footer__title">Find us:</h6>
                     <ul>
                        <li>
                           <a href="#">Facebook</a>
                        </li>
                        <li>
                           <a href="#">Twitter</a>
                        </li>
                        <li>
                           <a href="#">Instagram</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="footer__row footer__row_3">
                  <div class="footer__copy">© All right reserved. Joolie 2020</div>
                  <div class="footer__privacy-policy"><a href="#">Privacy policy</a> - Terms and Conditions</div>
               </div>
            </div>
         </footer>
         <!-- == // FOOTER ================== -->
      </div>
      <!-- == // WRAPPER ================== -->
      <div class="popup">
         <div class="popup__content">
            <div class="popup__body">
               <div class="popup__close"></div>
            </div>
         </div>
      </div>
      <div class="popup popup_video">
         <div class="popup__content">
            <div class="popup__body">
               <div class="popup__close popup__close_video"></div>
               <div class="popup__video _video"></div>
            </div>
         </div>
      </div>
      <!-- Scripts -->
      <script src="{{ asset('theme/theme5/js/vendors.js') }}"></script>
      <script src="{{ asset('theme/theme5/js/app.js') }}"></script>
   </body>
</html>