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
            <section id="section-hero-2" class="full-height relative text-light z1 owl-slide-wrapper" data-stellar-background-ratio=".2">

                <div class="center-y fadeScroll relative" data-scroll-speed="4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                   <img src="{{ asset('theme/theme8/images_02/logo-big.png')}}" class="img-responsive img-auto" alt="">
								   <h1 class='s2'>Serena Laurie</h1>
								   <h4 class='s3'>Wedding Planner</h4>
								   <div class="spacer-double"></div>
								   <div class="spacer-double"></div>
                            </div>
                        </div>
                    </div>
                </div>
				
            </section>
            <!-- section close -->
			
			
			<!-- section begin -->
            <section id="section-pricing-no-bg" class="relative no-top" data-stellar-background-ratio=".2" data-bgcolor="#eaecf0">
				<div class="container">
					<div class="row mt-100">
						<div class="col-md-12">
							<div class="item pricing">
								<div class="container">
									<div class="row">
										<div class="col-sm-3">
											<div class="pricing-s1 mb30">
												<div class="top">
													<h2 class="s1">Basic</h2>
													<p class="price"><span class="currency">$</span> <b>5</b>
												</div>
												<div class="bottom">
													<ul>
														<li><i class="icon_check"></i>Grand Ballroom</li>
														<li><i class="icon_check"></i>Decoration Layout</li>
														<li><i class="icon_check"></i>Wedding Cake</li>
														<li><i class="icon_check"></i>Album + Video</li>
														<li><i class="icon_check"></i>Music Entertaiment</li>
													</ul>
													<a href="02_contact.html" class="btn btn-custom">Contact Us Now</a>
												</div>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="pricing-s1 mb30">
												<div class="top">
													<h2 class="s1">Standard</h2>
													<p class="price"><span class="currency">$</span> <b>99</b>
												</div>
												<div class="bottom">
													<ul>
														<li><i class="icon_check"></i>Grand Ballroom</li>
														<li><i class="icon_check"></i>Decoration Layout</li>
														<li><i class="icon_check"></i>Wedding Cake</li>
														<li><i class="icon_check"></i>Album + Video</li>
														<li><i class="icon_check"></i>Music Entertaiment</li>
													</ul>
													<a href="02_contact.html" class="btn btn-custom">Contact Us Now</a>
												</div>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="pricing-s1 mb30">
												<div class="ribbon">Recommend</div>
												<div class="top">
													<h2 class="s1">Classic</h2>
													<p class="price"><span class="currency">$</span> <b>299</b>
												</div>
												<div class="bottom">
													<ul>
														<li><i class="icon_check"></i>Grand Ballroom</li>
														<li><i class="icon_check"></i>Decoration Layout</li>
														<li><i class="icon_check"></i>Wedding Cake</li>
														<li><i class="icon_check"></i>Album + Video</li>
														<li><i class="icon_check"></i>Music Entertaiment</li>
													</ul>
													<a href="02_contact.html" class="btn btn-custom">Contact Us Now</a>
												</div>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="pricing-s1 mb30">
												<div class="top">
													<h2 class="s1">Premium</h2>
													<p class="price"><span class="currency">$</span> <b>499</b>
												</div>
												<div class="bottom">
													<ul>
														<li><i class="icon_check"></i>Grand Ballroom</li>
														<li><i class="icon_check"></i>Decoration Layout</li>
														<li><i class="icon_check"></i>Wedding Cake</li>
														<li><i class="icon_check"></i>Album + Video</li>
														<li><i class="icon_check"></i>Music Entertaiment</li>
													</ul>
													<a href="02_contact.html" class="btn btn-custom">Contact Us Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</section>
            <!-- section close -->

			
			<!-- section begin -->
            <section id="section-latest-wedding">
                <div class="container">
                    <div class="row">
						<div class="col-md-12 text-center">
                            <h2 class="s1">Latest Wedding</h2>
                            <div class="small-border"></div>
                        </div>
						
						<div id="testimonial-carousel-3" class="de_carousel" data-wow-delay=".3s">

                            <div class="col-md-6 item">
                                <div class="de_testi opt-3">
									<figure class="pic-hover img-rounded hover-scale mb30">
											<img src="{{ asset('theme/theme8/images_02/misc/w1.jpg')}}" class="img-responsive" alt="">
									</figure>
                                    <blockquote>
                                        <p>Everything ran really smoothly and we all had a wonderful day. We couldn't have done it without you! I'd be happy to put up some photos on the website and recommend you to everybody. </p>
                                        <div class="de_testi_by">
                                            John, Friend
                                        </div>
                                    </blockquote>

                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi opt-3">
									<figure class="pic-hover img-rounded hover-scale mb30">
											<img src="{{ asset('theme/theme8/images_02/misc/w2.jpg')}}" class="img-responsive" alt="">
									</figure>
                                    <blockquote>
                                        <p>Everything ran really smoothly and we all had a wonderful day. We couldn't have done it without you! I'd be happy to put up some photos on the website and recommend you to everybody. </p>
                                        <div class="de_testi_by">
                                            Sarah, Friend
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi opt-3">
									<figure class="pic-hover img-rounded hover-scale mb30">
											<img src="{{ asset('theme/theme8/images_02/misc/w3.jpg')}}" class="img-responsive" alt="">
									</figure>
                                    <blockquote>
                                        <p>Everything ran really smoothly and we all had a wonderful day. We couldn't have done it without you! I'd be happy to put up some photos on the website and recommend you to everybody. </p>
                                        <div class="de_testi_by">
                                            Michael, Friend
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi opt-3">
									<figure class="pic-hover img-rounded hover-scale mb30">
											<img src="{{ asset('theme/theme8/images_02/misc/w4.jpg')}}" class="img-responsive" alt="">
									</figure>
                                    <blockquote>
                                        <p>Everything ran really smoothly and we all had a wonderful day. We couldn't have done it without you! I'd be happy to put up some photos on the website and recommend you to everybody. </p>
                                        <div class="de_testi_by">
                                            Jenny, Friend
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
						
                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>
            <!-- section close -->
			
			
			<!-- section begin -->
            <section id="section-about"  data-bgcolor="#eaecf0">
                <div class="container">
                    <div class="row text-center">

                        <div class="col-md-8 col-md-offset-2">
							<h2 class="s1">Our Facilities</h2>
							<div class="small-border"></div>
						</div>
						
						<div class="spacer-single"></div>
						
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

                        <div class="spacer-double"></div>
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
