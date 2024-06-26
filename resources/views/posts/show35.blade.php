<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Our Love - Responsive Wedding Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Our Love - Responsive Wedding Template" />
    <meta name="keywords" content="retina, responsive, wedding, rsvp, Our Love" />
    <meta name="author" content="lmpixels (Linar Miftakhov)" />
    <link rel="shortcut icon" href="{{ asset('theme/theme17/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('theme/theme17/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/theme17/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/theme17/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/theme17/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/theme17/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/theme17/css/main.css') }}" type="text/css">

    <script src="{{ asset('theme/theme17/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('theme/theme17/js/modernizr.custom.js') }}"></script>
  </head>

  <body>
  @yield('content')
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="main-container">

      <!-- Header -->
      <header id="header" class="header">
        <div class="container clearfix">
          <div class="logo-container">
            <div class="header-logo">Bryan <span class="main-color">&amp;</span> Sarah</div>
          </div>

          <div class="header-date mobile-hidden">
            <p>Saturday, 23 <span class="main-color">September</span> 2017</p>
          </div>
          <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
          </a>
        </div>
      </header>
      <!-- /Header -->

      <!-- Site Navigation -->
      <nav class="main-nav mobile-menu-hide">
        <div class="container">
          <ul class="nav navbar-nav">
            <li>
              <a href="#home">Home</a>
            </li>
            <li>
              <a href="#wedding-day">Our Day</a>
            </li>
            <li>
              <a href="#story">Our Story</a>
            </li>
            <li>
              <a href="#events">Wedding Events</a>
            </li>
            <li>
              <a href="#gallery">Gallery</a>
            </li>
            <li>
              <a href="#rsvp">RSVP</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- /Site Navigation -->

      <div class="sections">
        <!-- Home Section -->
        <section id="home" class="home-section clearfix">
          <div id="hs-image-block" class="hs-image-block" style="background-image: url({{ asset('theme/theme17/images/main_photo_1.jpg')}}); background-attachment: fixed; background-position: 50% 0;" data-stellar-background-ratio="0.3">
            <div class="hs-mask"></div>
          </div>

          <div class="hs-main-content container">
            <div class="hs-section-title">
              <h1>We’re Getting Married</h1>
            </div>

            <div class="about-us clearfix"> 
              <div class="about-us-block first-block">
                <div class="top-block">
                  <div class="name">
                    <h2>Bryan</h2>
                    <p>Morrys</p>
                    <ul class="social-links">
                      <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
                      <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                      <li><a class="tip social-button" href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                      <!--<li><a class="tip social-button" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>-->
                      <!--<li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
                      <!--<li><a class="tip social-button" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
                    </ul>
                  </div>

                  <div class="photo">
                    <img src="{{ asset('theme/theme17/images/photo_1.jpg')}}" alt="">
                  </div>
                </div>
                <div class="bottom-block">
                  <p>Nulla eros eros, tincidunt in tempor vitae, pellentesque non mi. Mauris eu molestie lacus, eget dictum orci. Etiam semper mauris neque, in posuere lacus varius.</p>
                </div>
              </div>

              <div class="heart">
                <img src="{{ asset('theme/theme17/images/heart_img.png')}}" alt="">
              </div>

              <div class="about-us-block second-block">
                <div class="top-block">
                  <div class="name">
                    <h2>Sarah</h2>
                    <p>Smith</p>
                    <ul class="social-links">
                      <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
                      <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                      <li><a class="tip social-button" href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                      <!--<li><a class="tip social-button" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>-->
                      <!--<li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
                      <!--<li><a class="tip social-button" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
                    </ul>
                  </div>

                  <div class="photo">
                    <img src="{{ asset('theme/theme17/images/photo_2.jpg')}}" alt="">
                  </div>
                </div>
                <div class="bottom-block">
                  <p>Nulla eros eros, tincidunt in tempor vitae, pellentesque non mi. Mauris eu molestie lacus, eget dictum orci. Etiam semper mauris neque, in posuere lacus varius.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /Home Section -->

        <!-- Our Day Section -->
        <section id="wedding-day" class="wedding-day section-boxed">
          <div class="container">
            <div class="section-title">
              <h2>Saturday, 23 <span class="main-color">September</span> 2017</h2>
            </div>
            <!-- Counter -->
            <div id="count" class="count"> <!-- You can edit HTML code of this block in the js/main.js -->
            </div>
            <!-- Counter -->

            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id tellus pretium quam sodales luctus. Nunc nec lacus ac arcu iaculis accumsan dictum a nulla. Nullam malesuada pellentesque turpis, eu elementum risus sagittis in. Nunc sit amet arcu justo.</p>
      
          </div>
        </section>
        <!-- /Our Day Section -->

        <!-- Our Story Section -->
        <section id="story" class="our-story section-boxed section-bg-color">
          <div class="container">
            <div class="section-title">
              <h2>Our Story</h2>
            </div>
            <!-- Story Row 1 -->
            <div class="row story-row">
              <div class="col-sm-12 col-md-5 story-block text-center">
                <div class="story-image scale-image-effect">
                  <img src="{{ asset('theme/theme17/images/story_photo_1.jpg')}}" alt="">
                </div>
              </div>
              <div class="col-sm-12 col-md-2 story-block text-center">
                <div class="story-date">
                  <div class="year">2016</div>
                  <div class="month">Apr</div>
                </div>
              </div>
              <div class="col-sm-12 col-md-5 story-block text-center">
                <h3>Morbi dapibus enim mollis</h3>
                <p>Maecenas vestibulum volutpat nisl. Nulla faucibus, quam eget auctor vulputate, elit ante commodo erat, et pretium purus massa et nunc. Duis vitae nisl eget metus gravida maximus non mattis nunc. Etiam posuere sodales mollis. Donec viverra egestas lorem, at varius sem congue quis.</p>
              </div>
              <div class="vertical-line"></div>
            </div>
            <!-- /Story Row 1 -->

            <!-- Story Row 2 -->
            <div class="row story-row">
              <div class="col-sm-12 col-md-5 col-md-push-7 story-block text-center">
                <div class="story-image scale-image-effect">
                  <img src="{{ asset('theme/theme17/images/story_photo_2.jpg')}}" alt="">
                </div>
              </div>
              <div class="col-sm-12 col-md-2 story-block text-center">
                <div class="story-date">
                  <div class="year">2016</div>
                  <div class="month">Apr</div>
                </div>
              </div>
              <div class="col-sm-12 col-md-5 col-md-pull-7 story-block text-center">
                <h3>Sed vitae eros nisl</h3>
                <p>Maecenas vestibulum volutpat nisl. Nulla faucibus, quam eget auctor vulputate, elit ante commodo erat, et pretium purus massa et nunc. Duis vitae nisl eget metus gravida maximus non mattis nunc. Etiam posuere sodales mollis. Donec viverra egestas lorem, at varius sem congue quis.</p>
              </div>
              <div class="vertical-line"></div>
            </div>
            <!-- /Story Row 2 -->

            <!-- Story Row 3 -->
            <div class="row story-row">
              <div class="col-sm-12 col-md-5 story-block text-center">
                <div class="story-image scale-image-effect">
                  <img src="{{ asset('theme/theme17/images/story_photo_3.jpg')}}" alt="">
                </div>
              </div>
              <div class="col-sm-12 col-md-2 story-block text-center">
                <div class="story-date">
                  <div class="year">2017</div>
                  <div class="month">Jan</div>
                </div>
              </div>
              <div class="col-sm-12 col-md-5 story-block text-center">
                <h3>Sed scelerisque</h3>
                <p>Maecenas vestibulum volutpat nisl. Nulla faucibus, quam eget auctor vulputate, elit ante commodo erat, et pretium purus massa et nunc. Duis vitae nisl eget metus gravida maximus non mattis nunc. Etiam posuere sodales mollis. Donec viverra egestas lorem, at varius sem congue quis.</p>
              </div>
              <div class="vertical-line"></div>
            </div>
            <!-- /Story Row 3 -->

          </div>
        </section>
        <!-- /Our Story Section -->

        <!-- Wedding Events Section -->
        <section id="events" class="our-story section-boxed">
          <div class="container">
            <div class="section-title">
              <h2>Wedding Events</h2>
              <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id tellus pretium quam sodales luctus. Nunc nec lacus ac arcu iaculis accumsan dictum a nulla. Nullam malesuada pellentesque turpis, eu elementum risus sagittis in. Nunc sit amet arcu justo.</p>
            </div>

            <div class="row">
              <!-- Ceremony Block -->
              <div class="col-md-6 event-block">
                <div class="event-photo scale-image-effect">
                  <img src="{{ asset('theme/theme17/images/photo_the_ceremony.jpg')}}" alt="">
                </div>

                <div class="event-title">
                  <h3>The Ceremony</h3>
                </div>

                <div class="event-info">
                  <div class="event-date"><i class="fa fa-calendar"></i> Saturday, 23 September 2017</div>
                  <div class="event-time"><i class="fa fa-clock-o"></i>  12:00 PM - 15:00 PM</div>
                  <div class="event-address"><i class="fa fa-map-marker"></i>  Some Street, Some City</div>
                  <a class="button small-button lightbox mfp-iframe" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom" title="The Ceremony">View on Map</a><!-- Do not change 'https://maps.google.com/maps?q=' in the href, simply change the address. Remake "221B Baker Street, London, United Kingdom +", as example, in this form: "221B+Baker+Street,+London,+United+Kingdom". -->
                </div>
              </div>
              <!-- /Ceremony Block -->

              <!-- Party Block -->
              <div class="col-md-6 event-block">
                <div class="event-photo scale-image-effect">
                  <img src="{{ asset('theme/theme17/images/photo_the_party.jpg')}}" alt="">
                </div>

                <div class="event-title">
                  <h3>The Party</h3>
                </div>

                <div class="event-info">
                  <div class="event-date"><i class="fa fa-calendar"></i> Saturday, 23 September 2017</div>
                  <div class="event-time"><i class="fa fa-clock-o"></i>  15:00 PM - 18:00 PM</div>
                  <div class="event-address"><i class="fa fa-map-marker"></i>  Some Street, Some City</div>
                  <a class="button small-button lightbox mfp-iframe" href="https://maps.google.com/maps?q=2+Baker+Street,+London,+United+Kingdom" title="The Party">View on Map</a><!-- Do not change 'https://maps.google.com/maps?q=' in the href, simply change the address. Remake "2 Baker Street, London, United Kingdom +", as example, in this form: "2+Baker+Street,+London,+United+Kingdom". -->
                </div>
              </div>
              <!-- /Party Block -->
            </div>
          </div>
        </section>
        <!-- /Wedding Events Section -->

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section-boxed section-bg-color">
          <div class="container">
            <div class="section-title">
              <h2>Gallery</h2>
            </div>

            <!-- Gallery Items -->
            <div class="row gallery-grid">
              <div class="col-sm-6 col-md-4 gallery-item">
                <a href="{{ asset('theme/theme17/images/gallery/gallery_photo_1.jpg')}}" title="The Cleaner">
                  <img src="{{ asset('theme/theme17/images/gallery/gallery_photo_1.jpg')}}" alt="">
                  <div class="mask"></div>
                </a>
              </div>
              <div class="col-sm-6 col-md-4 gallery-item">
                <a href="{{ asset('theme/theme17/images/gallery/gallery_photo_2.jpg')}}" title="The Cleaner">
                  <img src="{{ asset('theme/theme17/images/gallery/gallery_photo_2.jpg')}}" alt="">
                  <div class="mask"></div>
                </a>
              </div>
              <div class="col-sm-6 col-md-4 gallery-item">
                <a href="{{ asset('theme/theme17/images/gallery/gallery_photo_3.jpg')}}" title="The Cleaner">
                  <img src="{{ asset('theme/theme17/images/gallery/gallery_photo_3.jpg')}}" alt="">
                  <div class="mask"></div>
                </a>
              </div>
              <div class="col-sm-6 col-md-4 gallery-item">
                <a href="{{ asset('theme/theme17/images/gallery/gallery_photo_4.jpg')}}" title="The Cleaner">
                  <img src="{{ asset('theme/theme17/images/gallery/gallery_photo_4.jpg')}}" alt="">
                  <div class="mask"></div>
                </a>
              </div>
              <div class="col-sm-6 col-md-4 gallery-item">
                <a href="{{ asset('theme/theme17/images/gallery/gallery_photo_5.jpg')}}" title="The Cleaner">
                  <img src="{{ asset('theme/theme17/images/gallery/gallery_photo_5.jpg')}}" alt="">
                  <div class="mask"></div>
                </a>
              </div>
              <div class="col-sm-6 col-md-4 gallery-item">
                <a href="{{ asset('theme/theme17/images/gallery/gallery_photo_6.jpg')}}" title="The Cleaner">
                  <img src="{{ asset('theme/theme17/images/gallery/gallery_photo_6.jpg')}}" alt="">
                  <div class="mask"></div>
                </a>
              </div>
              <div class="col-sm-6 col-md-4 gallery-item">
                <a href="{{ asset('theme/theme17/images/gallery/gallery_photo_7.jpg')}}" title="The Cleaner">
                  <img src="{{ asset('theme/theme17/images/gallery/gallery_photo_7.jpg')}}" alt="">
                  <div class="mask"></div>
                </a>
              </div>
              <div class="col-sm-6 col-md-4 gallery-item">
                <a href="{{ asset('theme/theme17/images/gallery/gallery_photo_8.jpg')}}" title="The Cleaner">
                  <img src="{{ asset('theme/theme17/images/gallery/gallery_photo_8.jpg')}}" alt="">
                  <div class="mask"></div>
                </a>
              </div>
              <div class="col-sm-6 col-md-4 gallery-item">
                <a href="{{ asset('theme/theme17/images/gallery/gallery_photo_9.jpg')}}" title="The Cleaner">
                  <img src="{{ asset('theme/theme17/images/gallery/gallery_photo_9.jpg')}}" alt="">
                  <div class="mask"></div>
                </a>
              </div>
            </div>
            <!-- /Gallery Items -->
          </div>
        </section>
        <!-- /Gallery Section -->

       
            </div>
          </div>
        </section>
        <!-- /RSVP Section -->

        <!-- Footer (Thank You block) -->
        <footer id="thanks" class="footer">
          <div id="footer-image-block" class="footer-image-block" style="background-image: url({{ asset('theme/theme17/images/footer_photo.jpg')}}); background-attachment: fixed; background-position: 50%;" data-stellar-background-ratio="0.3">
            <div class="footer-mask"></div>
          </div>

          <div class="footer-title">
            <h2>Thank You!</h2>
          </div>
        </footer>
        <!-- /Footer (Thank You block) -->

      </div>

    </div>
    <!-- /Main Container -->
    
    <script src="{{ asset('theme/theme17/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/theme17/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('theme/theme17/js/validator.js') }}"></script>
    <script src="{{ asset('theme/theme17/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('theme/theme17/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('theme/theme17/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('theme/theme17/js/jquery.malihu.PageScroll2id.min.js') }}"></script>
    <script src="{{ asset('theme/theme17/js/main.js') }}"></script>
  </body>
</html>
