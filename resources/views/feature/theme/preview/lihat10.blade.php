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


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/jquery.countdown.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/animsition.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('theme/theme8/rsvp/form.css') }}">

    <!-- custom background -->
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/bg.css') }}" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="{{ asset('theme/theme8/css/color.css') }}" type="text/css" id="colors">
</head>

<body id="homepage">
@yield('content')
    <div id="wrapper">

        <!-- header begin -->
        <header>


            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                                <h2>Laurie<span>&amp;</span>Briant</h2>
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <span class="btn-rsvp">RSVP</span>

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Wedding 1</a></li>
                                        <li><a href="01_index_2.html">Wedding 2</a></li>
                                        <li><a href="01_index_3.html">Wedding 3</a></li>
                                        <li><a href="02_index.html">Wedding Planner 1</a></li>
                                        <li><a href="02_index_2.html">Wedding Planner 2</a></li>
                                        <li><a href="02_index_3.html">Wedding Planner 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">About</a>
                                    <ul>
                                        <li><a href="01_about-her.html">About Her</a></li>
                                        <li><a href="01_about-him.html">About Him</a></li>
                                    </ul>
                                </li>
                                <li><a href="01_story.html">Story</a></li>
                                <li><a href="01_events.html">Events</a></li>
                                <li><a href="01_people.html">People</a></li>
                                <li><a href="01_gallery.html">Gallery</a></li>
                                <li><a href="01_journal.html">Journal</a></li>
                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <div id="popup-box" class="full-height">
                <span class="btn-close">
					<i class="icon_close"></i>
				</span>

                <div class="container center-y">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="deco id-color"><span>We Invite You</span></h2>
                            <h2 data-wow-delay=".2s">Saturday, 27 November 2021</h2>
                        </div>

                        <div class="spacer-double"></div>

                        <div class="col-md-5 col-md-offset-1 text-right">
                            <h3>Wedding Ceremony</h3>
                            13:00 PM - 14:00 PM<br> 100 Mainstreet Center, Sydney<br>
                        </div>

                        <div class="col-md-5">
                            <h3>Wedding Reception</h3>
                            14:00 PM - 16:00 PM<br> 100 Mainstreet Center, Sydney<br>
                        </div>

                        <div class="spacer-double"></div>

                        <form name="rsvp" id='rsvp_form' class="form-underline" method="post" action="rsvp.php">
                            <div class="col-md-3">
                                <input type='text' name='Name' id='name' class="form-control" placeholder="Your Name" required maxlength="50">
                            </div>
                            <div class="col-md-3">
                                <input type='text' name='Email' id='email' class="form-control" placeholder="Your Email" required maxlength="50">
                            </div>
                            <div class="col-md-3">
                                <select id="guest" name="Guest" size="1" class="form-control">
                                    <option value="" disabled selected>Guests</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="attend" name="Attend" size="1" class="form-control">
                                    <option value="" disabled selected>Are you attending?</option>
                                    <option>yes</option>
                                    <option>no</option>
                                </select>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="spacer-single"></div>
                                <input type='submit' id='submit' value='Submit' class="btn btn-custom">
                                <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                            </div>
                        </form>
                        <div id="success_message">
                            <h1>Thank You!</h1>
                            <p> We will get back to you soon. </p>
                        </div>
                        <div id="error_message">
                            <h1>Error</h1> Sorry there was an error sending your form.
                        </div>

                        <div class="spacer-single"></div>
                    </div>
                </div>
            </div>

            <!-- section begin -->
            <section id="section-hero" class="full-height relative z1 owl-slide-wrapper no-top no-bottom text-light" data-stellar-background-ratio=".2">
                <div class="owl-slider-nav">
                    <div class="next"></div>
                    <div class="prev"></div>
                </div>

                <div class="center-y fadeScroll relative" data-scroll-speed="4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="row">
                                    <div class="spacer-double"></div>
                                    <div class="spacer-single"></div>
                                    <div class="col-md-5 text-right text-center-sm relative">
                                        <h2 class="name">Laurie</h2>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <span class="deco-big" data-scroll-speed="2">&amp;</span>
                                    </div>
                                    <div class="col-md-5 text-left text-center-sm relative">
                                        <h2 class="name">Briant</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="custom-owl-slider" class="owl-slide" data-scroll-speed="2">
                    <div class="item">
                        <img src="{{ asset('theme/theme8/images/slider/7.jpg')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('theme/theme8/images/slider/8.jpg')}}" alt="">
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-event-1" class="text-light" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="deco id-color"><span>You Are Invited</span></h2>
                            <h2 data-wow-delay=".2s">Saturday, 27 November 2021</h2>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-6">
                            <img src="{{ asset('theme/theme8/images/misc/3.jpg')}}" alt="" class="img-responsive img-rounded wow fadeInLeft">
                        </div>

                        <div class="col-md-5 col-md-offset-1 pt40 pb40 wow fadeIn" data-wow-delay=".5s">
                            <h3>Wedding Ceremony</h3>
                            Saturday, 27 November 2021<br> 13:00 PM - 14:00 PM<br> 100 Mainstreet Center, Sydney<br>
                            <a href="{{ url('https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom')}}"
                                class="btn btn-custom mt30 popup-gmaps">View on map</a>
                        </div>
                    </div>

                    <div class="spacer-double"></div>

                    <div class="row">
                        <div class="col-md-5 pt40 pb40 text-right wow fadeIn" data-wow-delay=".5s">
                            <h3>Wedding Reception</h3>
                            Saturday, 27 November 2021<br> 14:00 PM - 16:00 PM<br> 100 Mainstreet Center, Sydney<br>
                            <a href="{{ url('https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom')}}"
                                class="btn btn-custom mt30 popup-gmaps">View on map</a>
                        </div>

                        <div class="col-md-6 col-md-offset-1">
                            <img src="{{ asset('theme/theme8/images/misc/4.jpg')}}" alt="" class="img-responsive img-rounded wow fadeInRight">
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-bride" class="full-height no-top no-bottom text-light" data-stellar-background-ratio=".2">
                <div class="center-y">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center wow fadeInUp">
                                <h2>Happy Bride</h2>
                                <div class="spacer-single"></div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                    sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit
                                    amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                    ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>

                                <!-- social icons -->
                                <div class="social-icons-sm">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i></a>
                                </div>
                                <!-- social icons close -->
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-groom" class="full-height no-top no-bottom text-light" data-stellar-background-ratio=".2">
                <div class="center-y">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center wow fadeInUp">
                                <h2>Happy Groom</h2>
                                <div class="spacer-single"></div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                    sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit
                                    amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                    ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>

                                <!-- social icons -->
                                <div class="social-icons-sm">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i></a>
                                </div>
                                <!-- social icons close -->
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->



            <!-- section begin -->
            <section id="section-guestbook" class="text-light" data-stellar-background-ratio=".2">
                <div class="container relative">
                    <div class="row wow fadeInUp">
                        <div class="col-md-12 text-center">
                            <h2>Guest Book</h2>
                            <div class="spacer-single"></div>
                        </div>


                        <div id="testimonial-carousel" class="de_carousel" data-wow-delay=".3s">

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>To a special couple who show that love can be true and forever. May your lives continue
                                            to grow in love and happiness together!</p>
                                        <div class="de_testi_by">
                                            John, Friend
                                        </div>
                                    </blockquote>

                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Wedding wishes for my dear friends. I hope your life together will be filled with
                                            joy, happiness and lots of love!</p>
                                        <div class="de_testi_by">
                                            Sarah, Friend
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Hope you will have a long and happy life together. Always treat each other better
                                            than you want to be treated.</p>
                                        <div class="de_testi_by">
                                            Michael, Friend
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>I wish you a wonderful life together as you head down the road to married happiness.
                                            So happy for you!</p>
                                        <div class="de_testi_by">
                                            Jenny, Friend
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
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
                            <h2 class="hs1 wow fadeInUp">Laurie<span>&amp;</span>Briant</h2>
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
            <script src="{{ asset('theme/theme8/js/validation-rsvp.js') }}"></script>
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