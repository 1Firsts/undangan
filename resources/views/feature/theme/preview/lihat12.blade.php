<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lovus - Wedding Website Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lovus is responsive wedding html website template">
    <meta name="keywords" content="wedding,couple,ceremony,reception,rsvp,gallery,event,countdown">
    <meta name="author" content="">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->


    <link rel="stylesheet" href="{{ asset('theme/theme8/css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/jquery.countdown.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/animsition.min.css') }}" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/bg.css') }}" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/color.css') }}" type="text/css" id="colors">
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header>


            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                                <img class="logo" src="{{ asset('theme/theme8/images_02/logo-2.png')}}" alt="">
								<img class="logo-2" src="{{ asset('theme/theme8/images_02/logo.png')}}" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->
						
						<a href="02_contact.html" class="btn-rsvp">Contact</a>

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a href="02_index.html">Home</a>
									<ul>
                                        <li><a href="02_index.html">Wedding Planner 1</a></li>
                                        <li><a href="02_index_2.html">Wedding Planner 2</a></li>
                                        <li><a href="02_index_3.html">Wedding Planner 3</a></li>
										<li><a href="index.html">Wedding 1</a></li>
                                        <li><a href="01_index_2.html">Wedding 2</a></li>
                                        <li><a href="01_index_3.html">Wedding 3</a></li>
                                    </ul>
								</li>
								<li><a href="02_about.html">About</a></li>
                                <li><a href="02_services.html">Services</a></li>
                                <li><a href="02_packages.html">Packages</a></li>
                                <li><a href="02_blog.html">Blog</a></li>
                            </ul>
                        </nav>
						<!-- mainmenu close -->

                    </div>

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <!-- section begin -->
            <section id="section-hero-3" class="relative text-light z1 owl-slide-wrapper" data-stellar-background-ratio=".2">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
									<div class="spacer-double"></div>
                                   <img src="{{ asset('theme/theme8/images_02/logo-big.png')}}" class="img-responsive img-auto" alt="">
								   <div class="spacer-double"></div>
								   <h1 class='s2'>Serena Laurie</h1>
								   <h4 class='s3'>Wedding Planner</h4>
								   <div class="spacer-double"></div>
								   <div class="spacer-double"></div>
                            </div>
							
							<div class="col-md-4">
							<i class="icon-chat id-color mb20 size40"></i>
							<h4>Initial Consultation</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						
						<div class="col-md-4">
							<i class="icon-map id-color mb20 size40"></i>
							<h4>Wedding Venues</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						
						<div class="col-md-4">
							<i class="icon-calendar id-color mb20 size40"></i>
							<h4>Full Wedding Management</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
                            </div>
                        </div>
                </div>
				
            </section>
            <!-- section close -->
			
			
			<!-- section begin -->
            <section id="section-package" class="no-top no-bottom">
                <div class="container-fluid">
                    <div class="row-fluid display-table">

                        <div class="col-md-4 text-middle text-light wow fadeInRight" data-wow-delay="0">
                            <div class="padding60 equal overlay-s1">
                                <h3 class="s1">Sliver Package</h3>
                                <p>Our commitment to quality and services ensure our clients happy. With years of experiences and continuing research, our team is ready to serve your interior design needs. We're happy to make you feel more comfortable on your home.</p>
                                <a href="#" class="btn btn-border">Read More</a>
                            </div>
                        </div>

                        <div class="col-md-4 text-middle text-light wow fadeInRight" data-wow-delay=".1s">
                            <div class="padding60 equal overlay-s2">
                                <h3 class="s1">Gold Package</h3>
                                <p>Our commitment to quality and services ensure our clients happy. With years of experiences and continuing research, our team is ready to serve your interior design needs. We're happy to make you feel more comfortable on your home.</p>
                                <a href="#" class="btn btn-border">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-middle text-light wow fadeInRight" data-wow-delay=".3s">
                            <div class="padding60 equal overlay-s3">
                                <h3 class="s1">Platinum Package</h3>
                                <p>Our commitment to quality and services ensure our clients happy. With years of experiences and continuing research, our team is ready to serve your interior design needs. We're happy to make you feel more comfortable on your home.</p>
                                <a href="#" class="btn btn-border">Read More</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- section close -->

			
			<!-- section begin -->
            <section id="section-services">
                <div class="container">
                            <div class="row">
								<div class="col-md-12 text-center">
									<h2 class="s1">Services</h2>
									<div class="small-border"></div>
								</div>
								
                                <div class="col-md-3 text-center">
									<img src="{{ asset('theme/theme8/images_02/services/1.jpg')}}" alt="" class="img-circle mb30"/>
                                    <h4>Wedding Make Up</h4>
									Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
                                </div>
								
								<div class="col-md-3 text-center">
									<img src="{{ asset('theme/theme8/images_02/services/2.jpg')}}" alt="" class="img-circle mb30"/>
                                    <h4>Wedding Venues</h4>
									Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
                                </div>
								
								<div class="col-md-3 text-center">
									<img src="{{ asset('theme/theme8/images_02/services/3.jpg')}}" alt="" class="img-circle mb30"/>
                                    <h4>Wedding Decoration</h4>
									Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
                                </div>
								
								<div class="col-md-3 text-center">
									<img src="{{ asset('theme/theme8/images_02/services/4.jpg')}}" alt="" class="img-circle mb30"/>
                                    <h4>Wedding Cars</h4>
									Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
                                </div>
                            </div>
                        </div>
            </section>
            <!-- section close -->
			 
			
			<!-- section begin -->
            <section class="call-to-action bg-color text-light pt40 pb30 bg-color">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="mt10">Looking for best planner for your wedding day?</h4>
                        </div>

                        <div class="col-md-4 text-right">
                            <a href="02_contact.html" class="btn btn-border">Contact Us</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
			
			<!-- section begin -->
            <section id="section-gallery" class="no-top no-bottom">
                <div id="gallery-carousel-4" class="owl-slide">

                    <!-- gallery carousel-item -->
                    <div class="carousel-item">
                        <figure class="picframe">
                            <a class="image-popup" href="{{ asset('theme/theme8/images_02/gallery/1.jpg')}}">
							<span class="overlay-v">
							<i></i>
							</span>
						</a>
                            <img src="{{ asset('theme/theme8/images_02/gallery/1.jpg')}}" class="img-responsive" alt="">
                        </figure>
                    </div>
                    <!-- close gallery carousel-item -->

                    <!-- gallery carousel-item -->
                    <div class="carousel-item">
                        <figure class="picframe">
                            <a class="image-popup" href="{{ asset('theme/theme8/images_02/gallery/2.jpg')}}">
							<span class="overlay-v">
							<i></i>
							</span>
						</a>
                            <img src="{{ asset('theme/theme8/images_02/gallery/2.jpg')}}" class="img-responsive" alt="">
                        </figure>
                    </div>
                    <!-- close gallery carousel-item -->

                    <!-- gallery carousel-item -->
                    <div class="carousel-item">
                        <figure class="picframe">
                            <a class="image-popup" href="{{ asset('theme/theme8/images_02/gallery/3.jpg')}}">
							<span class="overlay-v">
							<i></i>
							</span>
						</a>
                            <img src="{{ asset('theme/theme8/images_02/gallery/3.jpg')}}" class="img-responsive" alt="">
                        </figure>
                    </div>
                    <!-- close gallery carousel-item -->

                    <!-- gallery carousel-item -->
                    <div class="carousel-item">
                        <figure class="picframe">
                            <a class="image-popup" href="{{ asset('theme/theme8/images_02/gallery/4.jpg')}}">
							<span class="overlay-v">
							<i></i>
							</span>
						</a>
                            <img src="{{ asset('theme/theme8/images_02/gallery/4.jpg')}}" class="img-responsive" alt="">
                        </figure>
                    </div>
                    <!-- close gallery carousel-item -->

                    <!-- gallery carousel-item -->
                    <div class="carousel-item">
                        <figure class="picframe">
                            <a class="image-popup" href="{{ asset('theme/theme8/images_02/gallery/5.jpg')}}">
							<span class="overlay-v">
							<i></i>
							</span>
						</a>
                            <img src="{{ asset('theme/theme8/images_02/gallery/5.jpg')}}" class="img-responsive" alt="">
                        </figure>
                    </div>
                    <!-- close gallery carousel-item -->

                    <!-- gallery carousel-item -->
                    <div class="carousel-item">
                        <figure class="picframe">
                            <a class="image-popup" href="{{ asset('theme/theme8/images_02/gallery/6.jpg')}}">
							<span class="overlay-v">
							<i></i>
							</span>
						</a>
                            <img src="{{ asset('theme/theme8/images_02/gallery/6.jpg')}}" class="img-responsive" alt="">
                        </figure>
                    </div>
                    <!-- close gallery carousel-item -->

                </div>
            </section>
            <!-- section close -->

        </div>
        <!-- content close -->

        <!-- footer begin -->
        <footer>
            <div class="container text-center text-light">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('theme/theme8/images_02/logo-med.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            &copy; Copyright 2019 - Lovus by Designesia                     
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

        <a href="#" id="back-to-top"></a>
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>



    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('theme/theme8/js/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/theme8/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/theme8/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('theme/theme8/js/easing.js') }}"></script>
    <script src="{{ asset('theme/theme8/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('theme/theme8/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('theme/theme8/js/validation.js') }}"></script>
    <script src="{{ asset('theme/theme8/js/wow.min.js') }}"></script>
    <script src="{{ asset('theme/theme8/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('theme/theme8/js/enquire.min.js') }}"></script>
    <script src="{{ asset('theme/theme8/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('theme/theme8/js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('theme/theme8/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('theme/theme8/js/countdown-custom.js') }}"></script>
	<script src="{{ asset('theme/theme8/js/animsition.min.js') }}"></script>
    <script src="{{ asset('theme/theme8/js/designesia.js') }}"></script>

</body>
</html>
