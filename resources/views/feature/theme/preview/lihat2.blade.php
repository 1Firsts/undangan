<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dear Bride - One Page Wedding Salon HTML Template</title>
    <!-- Google Fonts -->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Libre+Baskerville') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('theme/theme2/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('theme/theme2/css/animate.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('theme/theme2/css/font-awesome.min.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('theme/theme2/slick/slick.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('theme/theme2/magnific/dist/magnific-popup.css') }}">
    <!-- Reset style -->
    <link rel="stylesheet" href="{{ asset('theme/theme2/css/reset.css') }}">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="{{ asset('theme/theme2/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('theme/theme2/css/responsive.css') }}">
    <!-- Dear Bride colors. We have chosen the color Orange for this default
          page. However, you can choose any other color by changing color css file.
    -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/theme2/css/colors/default-orange.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="css/colors/pink.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/colors/purple.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/colors/brown.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/colors/green.css"> -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="js">

@yield('content')
    <!-- Page loader -->
    <div id="preloader"></div>
    <!-- Home Section START -->
    <div class="home-area" id="home">
        <!-- Header slider section -->
        <div class="home-slider">
            <div class="single-slider">
                <img src="{{ asset('theme/theme2/images/slider-img/slide-1.jpg')}}" alt="">
            </div>
            <div class="single-slider">
                <img src="{{ asset('theme/theme2/images/slider-img/slide-2.jpg')}}" alt="">
            </div>
            <div class="single-slider">
                <img src="{{ asset('theme/theme2/images/slider-img/slide-3.jpg')}}" alt="">
            </div>
        </div>
        <!-- END Header slider section -->
        <!-- Top Right Quote area -->
        <div class="top-quote">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8 text-right">
                        <div class="single-quote text-center">
                            <p><span>Make a Reservation</span></p>
                            <h2>(012) 345 - 6789</h2>
                            <p class="small-font"><span>Or Fill Out</span> The Form</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Top Right Quote area -->
        <!-- MENU section START -->
        <div class="nav-area">
            <nav class="navbar">
                <div class="container menu-bg">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#home"><img src="{{ asset('theme/theme2/images/logo.png')}}" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav appointment navbar-right">
                            <li>
                                <a href="#appointment"><span><img src="{{ asset('theme/theme2/images/pencil.png')}}" alt=""> </span>Make an appointment</a>
                            </li>
                        </ul>
                        <ul class="nav menu navbar-nav navbar-right">
                            <li><a href="#about">About <span class="fa fa-bars"></span></a></li>
                            <li><a href="#testimonial">Testimonials <span class="fa fa-bars"></span></a></li>
                            <li><a href="#dress">Dresses <span class="fa fa-bars"></span></a></li>
                            <li><a href="#gallery">Gallery <span class="fa fa-bars"></span></a></li>
                            <li><a href="#promotions">Promotions <span class="fa fa-bars"></span></a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
        <!-- END MENU section -->
    </div>
    <!-- END Home Section -->
    <!-- Featured Images area -->
    <div class="features-image">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-features wow fadeInUp" data-wow-duration="1s">
                        <img src="{{ asset('theme/theme2/images/feature-img-1.png')}}" alt="">
                        <div class="img-up">
                            <img src="{{ asset('theme/theme2/images/flower.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-features wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <img src="{{ asset('theme/theme2/images/feature-img-2.png')}}" alt="">
                        <div class="img-up">
                            <img src="{{ asset('theme/theme2/images/flower.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-features wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                        <img src="{{ asset('theme/theme2/images/feature-img-3.png')}}" alt="">
                        <div class="img-up">
                            <img src="{{ asset('theme/theme2/images/flower.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Featured Images area -->
    <!-- START About Us Section -->
    <section class="about-us" id="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title wow fadeInUp" data-wow-duration="1s">
                        <h2 class="title-heading">about us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-about bold-font wow fadeInUp" data-wow-duration="1s">
                        <p>“A dress is both an intimate and personal for a woman - it must reflect the personality and style of the bride.”</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-about wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <p>Our mobile salon changes the way brides prepare for their wedding day. The mobile salon creates a unique experience with services such as hair, make-up, skin care, haircuts, color and men’s grooming.</p>
                        <p>Instead of a bride attempting to find individuals to provide and schedule these services.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-about wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <p>The trial is key in deciding the brides look on the day of the wedding becoming comfortable with your stylists. We recommend doing a trial for a special event.</p>
                        <p>For example, your engagement photo shoot, bridal shower, bachelorette party, engagement party, or really any party.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="about-image wow slideInLeft">
                        <img src="{{ asset('theme/theme2/images/about-img-1.png')}}" alt="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="about-image wow slideInRight">
                        <img src="{{ asset('theme/theme2/images/about-img-2.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="about-flow">
                        <img src="{{ asset('theme/theme2/images/about-flower.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END About Us Section -->
    <!-- START Testimonial Section -->
    <section class="testimonial-section" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2 class="title-heading">Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-11 testimonial-slider">
                    <div class="single-testimonial">
                        <div class="testimonial-img">
                            <img src="{{ asset('theme/theme2/images/testimonial.png')}}" alt="">
                        </div>
                        <div class="tesitmonial-content">
                            <h3>Thank you for everything that you (and your lovely staff) did during the whole process. You were all so friendly and helpful and it was always such a lovely experience coming.</h3>
                            <p>- Love, Kate.</p>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="testimonial-img">
                            <img src="{{ asset('theme/theme2/images/testimonial.png')}}" alt="">
                        </div>
                        <div class="tesitmonial-content">
                            <h3>Thank you for everything that you (and your lovely staff) did during the whole process. You were all so friendly and helpful and it was always such a lovely experience coming.</h3>
                            <p>- Love, Kate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Testimonial Section -->
    <!-- START Latest Dresses Section -->
    <section class="latest-dress" id="dress">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2 class="title-heading">Latest Dresses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 dress-bg">
                    <div class="dress-descripttion wow slideInLeft" data-wow-duration="1s">
                        <div class="dress-price">
                            <div class="dress-title">
                                <h3>Blueberry Dress</h3>
                                <p>Price STARTing from </p>
                            </div>
                            <div class="price">
                                <p><span>$</span>599</p>
                            </div>
                        </div>
                        <div class="dress-content">
                            <p>Sleeveless light tulle over sparkling sequin full A-line gown adorned with hand-beaded lace appliqués and scattered sequins, deep V-neckline.</p>
                            <ul>
                                <li><span>Sizes:</span> 0 – 28</li>
                                <li><span>Colors:</span> Ivory/French Beige, Ivory/Sapphire</li>
                                <li><span>Style No:</span> XD5436C</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="dress-slider">
                        <div class="dress-single-slider">
                            <img src="{{ asset('theme/theme2/images/dress-slide-1.jpg')}}" alt="">
                        </div>
                        <div class="dress-single-slider">
                            <img src="{{ asset('theme/theme2/images/dress-slide-2.jpg')}}" alt="">
                        </div>
                        <div class="dress-single-slider">
                            <img src="{{ asset('theme/theme2/images/dress-slide-3.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Latest Dresses Section -->
    <!-- START Gallery Section -->
    <div class="gallery-section clearfix" id="gallery">
        <div class="gallery-slider">
            <div class="single-gallery">
                <img src="{{ asset('theme/theme2/images/gallery/gallery-thumb-1.jpg')}}" alt="">
                <div class="gallhover">
                    <a class="maginfic" href="{{ asset('theme/theme2/images/gallery/gallery-photo-1.jpg')}}"><img src="{{ asset('theme/theme2/images/plus.png')}}" alt=""></a>
                </div>
            </div>
            <div class="single-gallery">
                <img src="{{ asset('theme/theme2/images/gallery/gallery-thumb-2.jpg')}}" alt="">
                <div class="gallhover">
                    <a class="maginfic" href="{{ asset('theme/theme2/images/gallery/gallery-photo-2.jpg')}}"><img src="{{ asset('theme/theme2/images/plus.png')}}" alt=""></a>
                </div>
            </div>
            <div class="single-gallery">
                <img src="{{ asset('theme/theme2/images/gallery/gallery-thumb-3.jpg')}}" alt="">
                <div class="gallhover">
                    <a class="maginfic" href="{{ asset('theme/theme2/images/gallery/gallery-photo-3.jpg')}}"><img src="{{ asset('theme/theme2/images/plus.png')}}" alt=""></a>
                </div>
            </div>
            <div class="single-gallery">
                <img src="{{ asset('theme/theme2/images/gallery/gallery-thumb-4.jpg')}}" alt="">
                <div class="gallhover">
                    <a class="maginfic" href="{{ asset('theme/theme2/images/gallery/gallery-photo-4.jpg')}}"><img src="{{ asset('theme/theme2/images/plus.png')}}" alt=""></a>
                </div>
            </div>
            <div class="single-gallery">
                <img src="{{ asset('theme/theme2/images/gallery/gallery-thumb-5.jpg')}}" alt="">
                <div class="gallhover">
                    <a class="maginfic" href="{{ asset('theme/theme2/images/gallery/gallery-photo-5.jpg')}}"><img src="{{ asset('theme/theme2/images/plus.png')}}" alt=""></a>
                </div>
            </div>
            <div class="single-gallery">
                <img src="{{ asset('theme/theme2/images/gallery/gallery-thumb-3.jpg')}}" alt="">
                <div class="gallhover">
                    <a class="maginfic" href="{{ asset('theme/theme2/images/gallery/gallery-photo-3.jpg')}}"><img src="{{ asset('theme/theme2/images/plus.png')}}" alt=""></a>
                </div>
            </div>
            <div class="single-gallery">
                <img src="{{ asset('theme/theme2/images/gallery/gallery-thumb-2.jpg')}}" alt="">
                <div class="gallhover">
                    <a class="maginfic" href="{{ asset('theme/theme2/images/gallery/gallery-photo-2.jpg')}}"><img src="{{ asset('theme/theme2/images/plus.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Gallery Section -->
    <!-- START Perfect Dresses Section -->
    <section class="perfect-dress" id="promotions">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="perfect-dress-content">
                        <h4>New Dresses Arriving</h4>
                        <br>
                        <h4>Every week at our <a href="#">Dear-Bride.com</a></h4>
                        <div class="perfect-love wow slideInleft" data-wow-duration="1s">
                            <p>Get The <span>Perfect</span> Dress</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Perfect Dresses Section -->
    <!-- START Designers Section -->
    <section class="designer-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2 class="title-heading">Our Designers</h2>
                    </div>
                </div>
            </div>
            <div class="row brand-slider text-center">
                <div class="col-sm-2">
                    <div class="single-designer">
                        <a href=""><img src="{{ asset('theme/theme2/images/designers/brandname.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-designer">
                        <a href=""><img src="{{ asset('theme/theme2/images/designers/hosoreno.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-designer">
                        <a href=""><img src="{{ asset('theme/theme2/images/designers/premium.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-designer">
                        <a href=""><img src="{{ asset('theme/theme2/images/designers/premium_product.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-designer">
                        <a href=""><img src="{{ asset('theme/theme2/images/designers/prestige.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Designers Section -->
    
    <!-- START Bottom Contact Address Section -->
    <div class="bottom-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <div class="single-bottom-content wow fadeInUp" data-wow-duration="1s">
                        <div class="icon">
                            <!-- <img src="images/location.png" alt=""> -->
                            <i class="fa fa-map-marker"></i>
                            <p>4260 Mayo Street</p>
                            <p>Lexington, KY 40507</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="single-bottom-content wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="icon">
                            <!-- <img src="images/call.png" alt=""> -->
                            <i class="fa fa-phone"></i>
                            <p>Phone: (012) 345 - 6789</p>
                            <p>Fax: 555 - 432 5435</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="single-bottom-content wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                        <div class="icon">
                            <!-- <img src="images/envelope.png" alt=""> -->
                            <i class="fa fa-envelope-open-o"></i>
                            <p>information@dear-bride.com</p>
                            <p>sales@dear-bride.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Bottom Contact Address Section -->
    <!-- START Footer Section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <div class="footer-content">
                        <p>&copy; 2016 DEAR BRIDE <span class="fa fa-heart"></span> <a href="{{ url('https://themeforest.net/user/envalab/portfolio?ref=envalab')}}">ENVALAB</a> </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="footer-content">
                        <img src="{{ asset('theme/theme2/images/footer_flower.png')}}" alt="">
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="footer-content">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer Section -->
    <!-- Go to TOP -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- === Include Related JavaScripts === -->
    <!-- Google Map API -->
    <script src="{{ url('https://maps.googleapis.com/maps/api/js?key=AIzaSyCn4uayw359fjMh4P9i2rKKZYHzXaqTRNs') }}"></script>
    <!-- jQuery Main JS -->
    <script src="{{ asset('theme/theme2/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing JS -->
    <script src="{{ asset('theme/theme2/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('theme/theme2/js/bootstrap.min.js') }}"></script>
    <!-- Slick JS -->
    <script src="{{ asset('theme/theme2/slick/slick.min.js') }}"></script>
    <!-- Google Map Active JS -->
    <script src="{{ asset('theme/theme2/js/gmap.') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('theme/theme2/magnific/dist/jquery.magnific-popup.min.js') }}"></script>
    <!-- NAV JS -->
    <script src="{{ asset('theme/theme2/js/jquery.nav.js') }}"></script>
    <!-- WOW JS -->
    <script src="{{ asset('theme/theme2/js/wow.js') }}"></script>
    <!-- Main Active JS -->
    <script src="{{ asset('theme/theme2/js/active.js') }}"></script>
</body>
</html>