<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Metas Page details-->
<title>Soulmate - Responsive Bootstrap 3 Wedding Template</title>
<meta name="description" content="UX designer and web developer">
<meta name="author" content="">
<!-- Mobile Specific Metas-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--main style-->
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('theme/theme11/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('theme/theme11/css/main.css') }}">

<!--google font style-->
<link href="{{ url('http://fonts.googleapis.com/css?family=Great+Vibes') }}" rel='stylesheet' type='text/css'>
<!--font-family: 'Great Vibes', cursive; -->
<link href="{{ url('http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600italic,600,700italic,700') }}" rel='stylesheet' type='text/css'>
<!--font-family: 'Open Sans', sans-serif; -->

<!-- font icon css style-->
<link rel="stylesheet" href="{{ asset('theme/theme11/css/font-awesome.min.css') }}">
</head>
<body onLoad="load()" onUnload="GUnload()">

<!--wrapper start-->
<div class="wrapper" id="wrapper"> 
  <!-- Preloader -->
  <div id="preloader">
    <div id="status"></div>
  </div>
  <!--Header start -->
  <header>     
    <!--menu start-->
    <div class="menu">
      <div class="navbar-wrapper">
        <div class="container"> 
          <!--Logo -->
          <div class="logo">
            <h1><a href="index.html">Sophie & Andy</a></h1>
          </div>
          <!--Logo -->
          <div class="navwrapper">
            <div class="navbar navbar-inverse navbar-static-top">
              <div class="container">
                <nav class="navArea">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                  </div>
                  <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" id="navigation">
                      <li class="menuItem" id="home"><a href="#wrapper">Start</a></li>
                      <li class="menuItem"><a href="#theCouple">The Couple</a></li>
                      <li class="menuItem"><a href="#eventsSchedule">Events Schedule</a></li>
                      <li class="menuItem"><a href="#importantPeople">People</a></li>
                      <li class="menuItem"><a href="#photoAlbum">Gallery</a>
                        <ul class="submenu">
                          <li><a href="portfolio-full.html">Gallery style 1</a></li>
                          <li><a href="portfolio-threecolumn.html">Gallery style 2</a></li>
                          <li><a href="portfolio-fourcolumn.html">Gallery style 3</a></li>
                        </ul>
                      </li>
                      <li class="menuItem"><a href="#theBlog">Blog</a>
                        <ul class="submenu">
                          <li><a href='blog-large-image.html'><span>Blog 1</span></a></li>
                          <li><a href='blog-medium-image.html'><span>Blog 2</span></a></li>
                          <li><a href="grid-blog.html"><span>Grid 3</span></a></li>
                        </ul>
                      </li>
                      <li class="menuItem"><a href="#rsvp">RSVP</a></li>
                    </ul>
                  </div>
                </nav>
                
                <!--Language -->
                <ul class="language">
                  <li> <a href="#" data-toggle="dropdown">English</a><i class="fa fa-caret-down"></i>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                      <li><a href="#" class="french">French</a></li>
                      <li><a href="#" class="italian">Italian</a></li>
                      <li><a href="#" class="spanish">Spanish</a></li>
                      <li><a href="#" class="portuguese">Portuguese</a></li>
                    </ul>
                  </li>
                </ul>
                <!--/Language --> 
              </div>
            </div>
          </div>
          <!-- End Navbar --> 
        </div>
      </div>
    </div>
    <!--menu end--> 
    
    <!-- header start-->
    <div class="banner row" id="banner">
      <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 noPadd slides-container" style="height:100%"> 
        <!--header slide start-->
        <div class="slide"> 
          <!--header text1 start-->
          <div class="container hedaer-inner">
            <div class="bannerText clearfix">
              <h1>Sophie & Andy</h1>
              <h4>WE ARE GETTING MARRIED</h4>
              <div class="heartline">
                <hr>
                <i class="fa fa-heart"></i> </div>
              <h4>September 20th, 2015</h4>
            </div>
            <p class="downArrow"><a href="#theCouple"><i class="fa fa-chevron-down"></i></a></p> </div>
          <!--header text end--> 
          <!--header image start--> 
          <img src="{{ url('http://placehold.it/1920x1080&text=image1')}}" alt="image01"> </div>
        <!--header image end-->
        <div class="slide"> 
          <!--header text2 start-->
          <div class="container hedaer-inner">
            <div class="bannerText clearfix">
              <h1>We invite you</h1>
              <h4>To Celebrate our Wedding</h4>
              <div class="heartline">
                <hr>
                <i class="fa fa-heart"></i> </div>
              <h4>September 26th, 2015</h4>
            </div>
            <p class="downArrow"><a href="#theCouple"><i class="fa fa-chevron-down"></i></a></p> </div>
          <!--header text end--> 
          <!--header image start--> 
          <img src="{{ url('http://placehold.it/1920x1080&text=image2')}}" alt="image01"> </div>
        <!--header image end--> 
        <!--header slide end--> 
      </div>
    </div>
    <!--banner end--> 
    
  </header>
  <!--Header end --> 
  <!--The Couple section -->
  <section class="yellow_section section_gap" id="theCouple">
    <div class="container">
      <div class="row heading">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 noPadd">
          <h2>The Couple<span>Bride & the Groom</span></h2>
        </div>
        <div class=" col-xs-12 col-lg-12 col-md-8 col-lg-8 noPadd">
          <p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna aliqua. Ut enim ad consequatur quis aliquip ex ea commodo consequat…</p>
        </div>
      </div>
      <div class="row clearfix theCouple">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> <img src="{{ url('http://placehold.it/270x270&text=270px X 270px')}}" alt=" " class="bigRound"/>
          <h3>Sophie takas</h3>
          <h5>Budapest, Hungary</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et pulvinar augue. Nullam dignissim condimentum purus, vitae feugiat augue ornare ut. Praesent imperdiet purus ante, sagittis efficitur leo vehicula nec.</p>
          <ul>
            <li> <a class="ico" href="#"> <i class="fa fa-facebook"> </i> </a> </li>
            <li> <a class="ico" href="#"> <i class="fa fa-linkedin"> </i> </a> </li>
            <li> <a class="ico" href="#"> <i class="fa fa-twitter"> </i> </a> </li>
            <li> <a class="ico" href="#"> <i class="fa fa-google-plus"> </i> </a> </li>
          </ul>
        </div>
        <div class="col-md-2 col-lg-2 line"> <i class="fa fa-heart"></i> </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> <img src="{{ url('http://placehold.it/270x270&text=270px X 270px')}}" alt=" " class="bigRound"/>
          <h3>Andy Collins</h3>
          <h5>San Francisco</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et pulvinar augue. Nullam dignissim condimentum purus, vitae feugiat augue ornare ut. Praesent imperdiet purus ante, sagittis efficitur leo vehicula nec.</p>
          <ul>
            <li> <a class="ico" href="#"> <i class="fa fa-facebook"> </i> </a> </li>
            <li> <a class="ico" href="#"> <i class="fa fa-linkedin"> </i> </a> </li>
            <li> <a class="ico" href="#"> <i class="fa fa-twitter"> </i> </a> </li>
            <li> <a class="ico" href="#"> <i class="fa fa-google-plus"> </i> </a> </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--/The Couple section --> 
  
  <!--Events Schedule start -->
  <section class="section_gap" id="eventsSchedule">
    <div class="container">
      <div class="row heading">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 noPadd">
          <h2>Events Schedule<span>The Wedding Events</span></h2>
        </div>
        <div class=" col-xs-12 col-lg-12 col-md-7 col-lg-7 noPadd">
          <p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna aliqua. Ut enim ad consequatur quis aliquip ex ea commodo consequat…</p>
        </div>
      </div>
      <div class="row events clearfix">
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 events"> <img src="{{ url('http://placehold.it/369x221&text=369px X 221px')}}" alt=" "/>
          <div class="desc">
            <h4><a href="#">Engagement</a><span>September 14, 2015 3:00 pm</span></h4>
            <p>Tnsectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna a aliqua</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 events"> <img src="{{ url('http://placehold.it/369x221&text=369px X 221px')}}" alt=" "/>
          <div class="desc">
            <h4><a href="#">Wedding Ceremony</a><span>September 18, 2015 6:00 pm</span></h4>
            <p>Tnsectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna a aliqua</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4"> <img src="{{ url('http://placehold.it/369x221&text=369px X 221px')}}" alt=" "/>
          <div class="desc">
            <h4><a href="#">Wedding Reception</a><span>September 18, 2015 6:00 pm</span></h4>
            <p>Tnsectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna a aliqua</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/Events Schedule end --> 
  <!--Important People -->
  <section class="grey_section section_gap" id="importantPeople">
    <div class="container">
      <div class="row heading">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 noPadd">
          <h2>Important People<span>For Bride & the Groom</span></h2>
        </div>
        <div class=" col-xs-12 col-lg-12 col-md-7 col-lg-7 noPadd">
          <p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna aliqua. Ut enim ad consequatur quis aliquip ex ea commodo consequat…</p>
        </div>
      </div>
      <div class="row bride">
        <ul class="clearfix">
          <li class="col-xs-12 col-sm-4 col-md-3 col-lg-3 pinkCircle">
            <div class="nameCircle"> <em>Bride <span class="smallTxt">Family</span></em> </div>
          </li>
          <li class="col-xs-12 col-sm-2 col-md-3 col-lg-3 circle"> <img src="{{ url('http://placehold.it/270x270&text=270px X 270px')}}" alt=" " class="smallRound"/>
            <h4>Krisy Gabor<span>Bridemaid</span></h4>
          </li>
          <li class="col-xs-12 col-sm-2 col-md-3 col-lg-3 circle"> <img alt="" src="{{ url('http://placehold.it/270x270&text=270px X 270px')}}" class="smallRound"/>
            <h4>John Takas<span>Bride's Father</span></h4>
          </li>
          <li class="col-xs-12 col-sm-2 col-md-3 col-lg-3 circle"> <img alt="" src="{{ url('http://placehold.it/270x270&text=270px X 270px')}}" class="smallRound"/>
            <h4>Mary Takas<span>Bride's Mother</span></h4>
          </li>
        </ul>
      </div>
      <div class="row groom">
        <ul class="clearfix">
          <li class="col-xs-12 col-sm-4 col-md-3 col-lg-3 blueCircle">
            <div class="nameCircle"> <em>Groom <span class="smallTxt">Family</span></em> </div>
          </li>
          <li class="col-xs-12 col-sm-2 col-md-3 col-lg-3 circle"> <img src="{{ url('http://placehold.it/270x270&text=270px X 270px')}}" alt=" " class="smallRound"/>
            <h4>David William<span>Best man</span></h4>
          </li>
          <li class="col-xs-12 col-sm-2 col-md-3 col-lg-3 circle"> <img alt="" src="{{ url('http://placehold.it/270x270&text=270px X 270px')}}" class="smallRound"/>
            <h4>Ben Collins<span>Groom's Father</span></h4>
          </li>
          <li class="col-xs-12 col-sm-2 col-md-3 col-lg-3 circle"> <img alt="" src="{{ url('http://placehold.it/270x270&text=270px X 270px')}}" class="smallRound"/>
            <h4>Jenni Collins<span>Groom's Mother</span></h4>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!--/Important People --> 
  <!--Photo Album start -->
  <section class="pricingtables section_gap" id="photoAlbum">
    <div class="container">
      <div class="row heading">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 noPadd">
          <h2>Photo Album<span>The Memorable moments </span></h2>
        </div>
        <div class=" col-xs-12 col-lg-12 col-md-7 col-lg-7 noPadd">
          <p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna aliqua. Ut enim ad consequatur quis aliquip ex ea commodo consequat…</p>
        </div>
      </div>
      <div class="row gallery">
        <ul class="thumbnails">
          <li class="span3 col-xs-12 col-sm-4 col-md-4 col-lg-4"> <span class="hoverZoom"> <span class="smallIcon"> <a rel="lightbox-demo" href="{{ asset('theme/theme11/images/gallery/big-images/1.jpg')}}" title="Album Title1" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img class="group1" src="{{ url('http://placehold.it/387x290&text=387px X 290px')}}" title="Image Title" /> </li>
          <!--end thumb -->
          <li class="span3 col-xs-12 col-sm-4 col-md-4 col-lg-4"> <span class="hoverZoom"> <span class="smallIcon"> <a rel="lightbox-demo" href="{{ asset('theme/theme11/images/gallery/big-images/2.jpg')}}" title="Album Title" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img class="group1" src="{{ url('http://placehold.it/387x290&text=387px X 290px')}}" title="Image Title" /> </li>
          <!--end thumb -->
          <li class="span3 col-xs-12 col-sm-4 col-md-4 col-lg-4"> <span class="hoverZoom"> <span class="smallIcon"> <a rel="lightbox-demo" href="{{ asset('theme/theme11/images/gallery/big-images/3.jpg')}}" title="Album Title" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img class="group1" src="{{ url('http://placehold.it/387x290&text=387px X 290px')}}" title="Image Title" /> </li>
          <!--end thumb -->
          <li class="span3 col-xs-12 col-sm-4 col-md-4 col-lg-4"> <span class="hoverZoom"> <span class="smallIcon"> <a rel="lightbox-demo" href="{{ asset('theme/theme11/images/gallery/big-images/4.jpg')}}" title="Album Title" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img class="group1" src="{{ url('http://placehold.it/387x290&text=387px X 290px')}}" title="Image Title" /> </li>
          <!--end thumb -->
          <li class="span3 col-xs-12 col-sm-4 col-md-4 col-lg-4"> <span class="hoverZoom"> <span class="smallIcon"> <a rel="lightbox-demo" href="{{ asset('theme/theme11/images/gallery/big-images/5.jpg')}}" title="Album Title" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img class="group1" src="{{ url('http://placehold.it/387x290&text=387px X 290px')}}" title="Image Title" /> </li>
          <!--end thumb -->
          <li class="span3 col-xs-12 col-sm-4 col-md-4 col-lg-4"> <span class="hoverZoom"> <span class="smallIcon"> <a rel="lightbox-demo" href="{{ asset('theme/theme11/images/gallery/big-images/6.jpg')}}" title="Album Title" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> </span> </span> <img class="group1" src="{{ url('http://placehold.it/387x290&text=387px X 290px')}}" title="Image Title" /> </li>
          <!--end thumb -->
        </ul>
      </div>
      <!-- /.row --> 
      
    </div>
  </section>
  <!--Photo Album end --> 
  <!--Blog section start -->
  <section class="lightYellow_section section_gap" id="theBlog">
    <div class="container">
      <div class="row heading">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 noPadd">
          <h2>Wedding Blog<span>Love Articles</span></h2>
        </div>
        <div class=" col-xs-12 col-lg-12 col-md-8 col-lg-8 noPadd">
          <p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna aliqua. Ut enim ad consequatur quis aliquip ex ea commodo consequat…</p>
        </div>
      </div>
      <ul class="portfolioContainer grid row no_left_right isotope">
        <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4 isotope-item">
          <div class="lightCon">
            <figure>
              <div class="img_hover"> <img alt=" " src="{{ url('http://placehold.it/369x221&text=369px X 221px')}}"> </div>
              <figcaption>
                <h4><a href="#">Citationemut labore</a></h4>
                <div class="metaInfo"> <span>By <a href="#" class="admin">Admin</a> </span> <span><a href="#">Wedding</a> </span> <span><a href="#" class="admin">5</a> Comments</span> </div>
                <p>Tnsectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna a aliqua<br/>
                  <br/>
                  sed do eiusmod tempor exercitationemut labore et dolore </p>
              </figcaption>
            </figure>
          </div>
        </li>
        <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(453px, 0px, 0px);">
          <div class="lightCon">
            <figure>
              <div class="img_hover"> <img alt=" " src="{{ url('http://placehold.it/369x400&text=369px X 400px')}}"> </div>
              <figcaption>
                <h4><a href="#">Exercitationemut labore</a></h4>
                <div class="metaInfo"> <span>By <a href="#" class="admin">Admin</a> </span> <span><a href="#">Family, Wedding</a> </span> <span><a href="#" class="admin">5</a> Comments</span> </div>
                <p>Tnsectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna a aliqua</p>
              </figcaption>
            </figure>
          </div>
        </li>
        <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(906px, 0px, 0px);">
          <div class="lightCon">
            <figure>
              <div class="img_hover"> <img alt=" " src="{{ url('http://placehold.it/369x221&text=369px X 221px')}}"> </div>
              <figcaption>
                <h4><a href="#">Vestibulum a solli</a></h4>
                <div class="metaInfo"> <span>By <a href="#" class="admin">Admin</a> </span> <span><a href="#">Love, Wedding</a> </span> <span><a href="#" class="admin">5</a> Comments</span> </div>
                <p>Tnsectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna a aliqua</p>
              </figcaption>
            </figure>
          </div>
        </li>
        <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
          <div class="lightCon">
            <figure>
              <div class="img_hover"> <img alt=" " src="{{ url('http://placehold.it/369x221&text=369px X 221px')}}"> </div>
              <figcaption>
                <h4><a href="#">Vestibulum a sollicitudin</a></h4>
                <div class="metaInfo"> <span>By <a href="#" class="admin">Admin</a> </span> <span><a href="#">Wedding, Photography</a> </span> <span><a href="#" class="admin">5</a> Comments</span> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet pharetra nunc, non scelerisque ligula. Cras vel justo nulla. Vestibulum a sollicitudin metus, faucibus fermentum leo.<br/>
                  <br/>
                  Cras vel justo nulla. Vestibulum a solli citudin metus, faucibus fermentum leo.Praesent sit amet pharetra nunc, non scelerisque</p>
              </figcaption>
            </figure>
          </div>
        </li>
        <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
          <div class="lightCon">
            <figure>
              <div class="img_hover"> <img alt=" " src="{{ url('http://placehold.it/369x221&text=369px X 221px')}}"> </div>
              <figcaption>
                <h4><a href="#">Praesent sit pharetra </a></h4>
                <div class="metaInfo"> <span>By <a href="#" class="admin">Admin</a> </span> <span><a href="#">Wedding</a> </span> <span><a href="#" class="admin">5</a> Comments</span> </div>
                <p>Tnsectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna a aliqua<br/>
                  <br/>
                  sed do eiusmod tempor exercitationemut labore et dolore </p>
              </figcaption>
            </figure>
          </div>
        </li>
        <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(906px, 0px, 0px);">
          <div class="lightCon">
            <figure>
              <div class="img_hover"> <img alt=" " src="{{ url('http://placehold.it/369x221&text=369px X 221px')}}"> </div>
              <figcaption>
                <h4><a href="#">Citationemut labore</a></h4>
                <div class="metaInfo"> <span>By <a href="#" class="admin">Admin</a> </span> <span><a href="#">Wedding, event</a> </span> <span><a href="#" class="admin">5</a> Comments</span> </div>
                <p>Tnsectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna a aliqua</p>
                <p>sed do eiusmod tempor exercitationemut labore et dolore </p>
              </figcaption>
            </figure>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <section class="pinkSection">
    <section class="container"><a class="anchor" href="grid-blog.html">View all blog posts</a></div>
  </div>
  <!-- Blog section end --> 
  <!--RSVP section start -->
  <section class="white_section section_gap" id="rsvp">
    <div class="container">
      <div class="row heading">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 noPadd">
          <h2>RSVP<span>JOIN OUR PARTY</span></h2>
        </div>
        <div class=" col-xs-12 col-lg-12 col-md-8 col-lg-8">
          <p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna aliqua. Ut enim ad consequatur quis aliquip ex ea commodo consequat…</p>
        </div>
      </div>
    </div>
    <div class="container-fluid rsvpBack">
      <div class="container">
        <div class="row ">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 eventsLocation">
            <h4>Events Location</h4>
            <!--Google map -->
            <section class="contactInfo mapArea">
              <div id="map" style="width: 100%; height: 100%"></div>
            </section>
            <!--/Google map --> 
          </div>
          <section class="col-xs-12 col-sm-12 col-md-5 col-lg-5 pull-right joinourParty">
            <h4>ARE YOU ATTENDING?</h4>
            <div class="form-container">
              <div class="heartline">
                <hr>
                <i class="fa fa-heart"></i> </div>
              <div class="row">
                <div id="message"></div>
                <form method="post" action="php/contact.php" name="cform" id="cform">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group form-row">
                    <input type="text" class="normal" id="name" placeholder="Name" name="name">
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group form-row">
                    <input type="email" class="normal" id="email" placeholder="Email Address" name="email">
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group form-row">
                    <select class="normal" id="events" name="events">
                      <option value="">I'll attend to</option>
                      <option value="All Events">All Events</option>
                      <option value="Wedding Party">Wedding Party</option>
                    </select>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group form-row">
                    <select class="normal" id="guest" name="guest">
                      <option value=""> Guest</option>
                      <option value="1"> 1</option>
                      <option value="2"> 2</option>
                      <option value="3"> 3</option>
                    </select>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input type="submit" id="submit" name="send" value="I'm attending" class="button">
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
  <!--RSVP section end --> 
  <!--Footer start-->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <p>Copyrights &copy; 2015 All Rights Reserved.</p>
      </div>
      <div class="pull-right goto"><a class="gototop smooth" href="#wrapper"><i class="fa fa-chevron-up"></i></a></div>
    </div>
  </footer>
  <!--Footer end --> 
</div>
<!--wrapper end--> 

<!--modernizr js--> 
<script type="text/javascript" src="js/modernizr.custom.26633.js"></script> 
<!--jquary min js--> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="js/bootstrap.min.js"></script> 
<!--for placeholder jquery--> 
<script type="text/javascript" src="js/jquery.placeholder.js"></script> 

<!--for header jquery--> 
<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/stickUp.js"></script> 
<script type="text/javascript">
	$('#banner').superslides({
	  animation: 'fade',
	  play: 5000
	});
</script>  

<!--for portfolio jquery--> 
<script src="{{ asset('theme/theme11/js/jquery.isotope.js')}}" type="text/javascript"></script> 
<link type="text/css" rel="stylesheet" id="theme" href="{{ asset('theme/theme11/css/jquery-ui-1.8.16.custom.css')}}">
<link type="text/css" rel="stylesheet" href="{{ asset('theme/theme11/css/lightbox.min.css')}}">
<script type="text/javascript" src="{{ asset('theme/theme11/js/jquery.ui.widget.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('theme/theme11/js/jquery.ui.rlightbox.js')}}"></script> 

<!--contact form js--> 
<script type="text/javascript" src="{{ asset('theme/theme11/js/jquery.contact.js')}}"></script> 
<script src="{{ url('http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw')}}" type="text/javascript"></script>
<script type="text/javascript">
    //<![CDATA[
    var map;

    function load() {
      if (GBrowserIsCompatible()) {
        map = new GMap2(document.getElementById("map"));
        map.setCenter(new GLatLng(-37.817682, 144.957595), 13);
        document.getElementById("map").checked = true;
        toggleZoom(false);
      }
    }

    function toggleZoom(isChecked) {
      if (isChecked) {
        map.enableScrollWheelZoom();
      } else {
        map.disableScrollWheelZoom();
      }
    }

    //]]>
</script> 

<!--about jquery--> 
<script defer src="{{ asset('theme/theme11/js/jquery.flexslider.js')}}"></script> 

<script src="{{ asset('theme/theme11/js/jquery.easing.js')}}"></script> 
<script src="{{ asset('theme/theme11/js/jquery.mousewheel.js')}}"></script> 
<script defer src="{{ asset('theme/theme11/js/slideroption.js')}}"></script> 
    
<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
	//enabling stickUp on the '.navbar-wrapper' class
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'theCouple',
		  2: 'eventsSchedule',
		  3: 'importantPeople',
		  4: 'photoAlbum',
		  5: 'theBlog',
		  6: 'rsvp'
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});	
		
		// run rlightbox
		$( ".lb" ).rlightbox();
		$( ".lb_title-overwritten" ).rlightbox({overwriteTitle: true});
		
		$('.flexslider').flexslider({
			animation: "fade",
			animationLoop: true,
			slideshow: true,
			pauseOnAction: false,
			slideshowSpeed: 7000,
			controlNav: true,
			start: function(slider){
			$('body').removeClass('loading');
			}
		});
	
});
});
</script>

<!--for theme custom jquery--> 
<script src="{{ asset('theme/theme11/js/custom.js') }}"></script>

</body>
</html>