<!DOCTYPE html>
<!-- 
Template Name: My Wedding - Wedding Invite Template
Version: 1.1
Author: Kamleshyadav
Website: http://himanshusofttech.com/
Purchase: http://themeforest.net/user/kamleshyadav
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Wedding - Wedding Invite Template</title>
    <link href="{{ asset('theme/theme10/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('theme/theme10/assets/css/swiper-bundle.min.css') }}" />

    <link rel="shortcut icon" type="image/png" href="{{ asset('theme/theme10/assets/images/favicon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('theme/theme10/assets/images/favicon.png') }}" />
</head>

<body>
    <!-- Preloader-->
    <!-- <div id="preloader">
        <div id="status">
            <img src="assets/images/wedding-loading.gif" alt="" />
        </div>
    </div> -->
    <!-- Main Section -->
    <div class="wd_main_container">
        <section class="bubble-header">
            <div id="large-header" class="large-header">
                <canvas id="demo-canvas"></canvas>
            </div>
            <div class="wd_img_overlay text-center">
                <img src="{{ asset('theme/theme10/assets/images/Heart.svg')}}" alt="" class="wd_svg_response" />
                <div class="wd_responsive">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-12">
                                <h1>Christene & William</h1>
                                <h2>Getting Married</h2>
                                <h4><span class="fa fa-calendar"></span>31st Dec 2021</h4>
                                <div class="wd_scroll_wrapper onclick_show_site">
                                    <p>Click Below</p>
                                    <div class="wd_scroll">
                                        <a href="javascript:void(0);">|</a>
                                    </div>
                                </div>

                                <!-- <a href="javascript:void(0);" class=""><i class="fa fa-long-arrow-down"></i></a> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Main Section end -->
    <!-- Site content start -->
    <div class="page">
        <span class="menu_toggle">
            <i class="menu_open fa fa-bars fa-lg"></i>
            <i class="menu_close fa fa-times fa-lg"></i>
        </span>
        <ul class="menu_items">
            <li><a class="page-scroll active" href='#1'><i class="icon fa fa-heart fa-2x"></i>Home</a></li>
            <li><a class="page-scroll" href='#2'><i class="icon fa fa-heart fa-2x"></i>Love Story</a></li>
            <li><a class="page-scroll" href='#3'><i class="icon fa fa-heart fa-2x"></i>Favourites</a></li>
            <li><a class="page-scroll" href='#4'><i class="icon fa fa-heart fa-2x"></i>Events</a></li>
            <li><a class="page-scroll" href='#5'><i class="icon fa fa-heart fa-2x"></i>Gallery</a></li>
            <li><a class="page-scroll" href='#6'><i class="icon fa fa-heart fa-2x"></i>RSVP</a></li>
        </ul>
        <div class="content">
            <div class="content_inner">
                <div class="rev_slider_wrapper" id="1">
                    <div class="ws_counter">
                        <div class="clock1"></div>
                    </div>
                    <!-- START REVOLUTION SLIDER 5.0 auto mode -->
                    <div id="rev_slider" class="rev_slider" data-version="5.0">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-transition="fade">
                                <img src="{{ url('http://placehold.it/1600x768')}}" alt="">
                            </li>
                            <!-- SLIDE  -->
                            <li data-transition="fade">
                                <img src="{{ url('http://placehold.it/1600x768')}}" alt="">
                            </li>
                            <!-- SLIDE  -->
                            <li data-transition="fade">
                                <img src="{{ url('http://placehold.it/1600x768')}}" alt="">
                            </li>
                            <!-- SLIDE  -->
                            <li data-transition="fade">
                                <img src="{{ url('http://placehold.it/1600x768')}}" alt="">
                            </li>
                        </ul>

                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
                <!-- END REVOLUTION SLIDER WRAPPER -->
                <!-- STORY SECTION START -->
                <div class="wd_story_section" id="2">
                    <div class="container">
                        <div class="row">
                            <div class="wd_section_heading">
                                <h1 class="text-center">Our Love Story</h1>
                                <span class="wd_dot_heading"></span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="story_section">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                <div class="wd_img_round">
                                                    <img src="{{ url('http://placehold.it/370x370')}}" alt="" />
                                                    <div class="overlay">
                                                        <span><a href="{{ asset('theme/theme10/assets/images/our_story/01.jpg')}}"
                                                                class="fancybox"><i class="fa fa-search"></i></a></span>
                                                    </div>
                                                </div>
                                                <div class="wd_post_date wd_right">
                                                    <span class="number"> 26 Jan</span>
                                                    <span class="year"> 2021</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                                <h2>We’ve Met</h2>
                                                <p>Donec blandit commodo nibh, pulvinar cursus mi imperdiet et.
                                                    Curabitur sed tortor sed massa eleifend lobortis. Pellentesque
                                                    habitant morbi tristique senectus et netus et malesuada fames ac
                                                    turpis egestas.
                                                    Aenean eget sem a augue pellentesque ullamcorper non at leo. Vivamus
                                                    id diam id eros blandit cursus. Integer ac metus ac quam imperdiet
                                                    hendrerit quis eu erat. Class aptent taciti sociosqu ad litora
                                                    torquent per conubia nostra, per inceptos himenaeos. Vestibulum in
                                                    elit id lectus vestibulum dictum. Morbi justo lorem.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="story_section">
                                        <div class="row align-items-center">

                                            <div
                                                class="col-lg-4 col-md-12 col-lg-push-8 col-md-push-8 col-sm-12 col-xs-12">
                                                <div class="wd_img_round">
                                                    <img src="{{ url('http://placehold.it/370x370')}}" alt="" />
                                                    <div class="overlay">
                                                        <span><a href="{{ asset('theme/theme10/assets/images/our_story/02.jpg')}}"
                                                                class="fancybox"><i class="fa fa-search"></i></a></span>
                                                    </div>
                                                </div>
                                                <div class="wd_post_date wd_left">
                                                    <span class="number"> 26 Jan</span>
                                                    <span class="year"> 2021</span>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-8 col-md-12 col-lg-pull-4 col-md-pull-4 col-sm-12 col-xs-12">
                                                <h2>First Date</h2>
                                                <p>Donec blandit commodo nibh, pulvinar cursus mi imperdiet et.
                                                    Curabitur sed tortor sed massa eleifend lobortis. Pellentesque
                                                    habitant morbi tristique senectus et netus et malesuada fames ac
                                                    turpis egestas.
                                                    Aenean eget sem a augue pellentesque ullamcorper non at leo. Vivamus
                                                    id diam id eros blandit cursus. Integer ac metus ac quam imperdiet
                                                    hendrerit quis eu erat. Class aptent taciti sociosqu ad litora
                                                    torquent per conubia nostra, per inceptos himenaeos. Vestibulum in
                                                    elit id lectus vestibulum dictum. Morbi justo lorem.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="story_section">
                                        <div class="row align-items-center">

                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                <div class="wd_img_round">
                                                    <img src="{{ url('http://placehold.it/370x370')}}" alt="" />
                                                    <div class="overlay">
                                                        <span><a href="{{ asset('theme/theme10/assets/images/our_story/03.jpg')}}"
                                                                class="fancybox"><i class="fa fa-search"></i></a></span>
                                                    </div>
                                                </div>
                                                <div class="wd_post_date wd_right">
                                                    <span class="number"> 26 Jan</span>
                                                    <span class="year"> 2021</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                                <h2>The Proposal</h2>
                                                <p>Donec blandit commodo nibh, pulvinar cursus mi imperdiet et.
                                                    Curabitur sed tortor sed massa eleifend lobortis. Pellentesque
                                                    habitant morbi tristique senectus et netus et malesuada fames ac
                                                    turpis egestas.
                                                    Aenean eget sem a augue pellentesque ullamcorper non at leo. Vivamus
                                                    id diam id eros blandit cursus. Integer ac metus ac quam imperdiet
                                                    hendrerit quis eu erat. Class aptent taciti sociosqu ad litora
                                                    torquent per conubia nostra, per inceptos himenaeos. Vestibulum in
                                                    elit id lectus vestibulum dictum. Morbi justo lorem.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="story_section">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-lg-4 col-md-12 col-lg-push-8 col-md-push-8 col-sm-12 col-xs-12">
                                                <div class="wd_img_round">
                                                    <img src="{{ url('http://placehold.it/370x370')}}" alt="" />
                                                    <div class="overlay">
                                                        <span><a href="{{ asset('theme/theme10/assets/images/our_story/04.jpg')}}"
                                                                class="fancybox"><i class="fa fa-search"></i></a></span>
                                                    </div>
                                                </div>
                                                <div class="wd_post_date wd_left">
                                                    <span class="number"> 26 Jan</span>
                                                    <span class="year"> 2021</span>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-8 col-md-12 col-lg-pull-4 col-md-pull-4 col-sm-12 col-xs-12">
                                                <h2>Engagement</h2>
                                                <p>Donec blandit commodo nibh, pulvinar cursus mi imperdiet et.
                                                    Curabitur sed tortor sed massa eleifend lobortis. Pellentesque
                                                    habitant morbi tristique senectus et netus et malesuada fames ac
                                                    turpis egestas.
                                                    Aenean eget sem a augue pellentesque ullamcorper non at leo. Vivamus
                                                    id diam id eros blandit cursus. Integer ac metus ac quam imperdiet
                                                    hendrerit quis eu erat. Class aptent taciti sociosqu ad litora
                                                    torquent per conubia nostra, per inceptos himenaeos. Vestibulum in
                                                    elit id lectus vestibulum dictum. Morbi justo lorem.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wd_about_section upper_spacer50" id="wd_counter">
                        <div class="wd_about_overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="wd_counter text-center">
                                        <i class="wd_icon fa fa-video-camera"></i>
                                        <h2 class="timer" data-from="0" data-to="2510" data-speed="3000">2510</h2>
                                        <h3>Movies Watched</h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="wd_counter text-center">
                                        <i class="wd_icon fa fa-coffee"></i>
                                        <h2 class="timer" data-from="0" data-to="300" data-speed="3000">300</h2>
                                        <h3>Cup Of Coffee</h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="wd_counter text-center">
                                        <i class="wd_icon fa fa-glass"></i>
                                        <h2 class="timer" data-from="0" data-to="400" data-speed="3000">400</h2>
                                        <h3>Fun & Parties</h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="wd_counter text-center">
                                        <i class="wd_icon fa fa-plane"></i>
                                        <h2 class="timer" data-from="0" data-to="550" data-speed="3000">550</h2>
                                        <h3>Best Outing</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- STORY SECTION END -->
                <!-- FAMILY SECTION START -->
                <div class="wd_story_section" id="3">
                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- <div class="wd_section_heading">
                                <h1 class="text-center title-desc">Family Members</h1>
                                <span class="wd_dot_heading"></span>
                            </div> -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 bottom_padder40">
                                <div class="wd_section_heading">
                                    <h1 class="text-center title-desc">Family Members</h1>
                                    <span class="wd_dot_heading"></span>
                                </div>
                                <p class="text-center">Contrary to popular belief, Lorem Ipsum is not simply random
                                    text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                    over 2000 years old.</p>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 upper_spacer50">
                                <div class="wd_family_section">
                                    <h2>Christeme Family</h2>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="wd_family_member">
                                                <img class="img-responsive" src="{{ url('http://placehold.it/155x155')}}"
                                                    alt="" />
                                                <h3>Bill Swan</h3>
                                                <h4>Father</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="wd_family_member">
                                                <img class="img-responsive" src="{{ url('http://placehold.it/155x155')}}"
                                                    alt="" />
                                                <h3>Christena Swan</h3>
                                                <h4>Mother</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wd_family_member">
                                                <img class="img-responsive" src="{{ url('http://placehold.it/155x155')}}"
                                                    alt="" />
                                                <h3>Max Swan</h3>
                                                <h4>Brother</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wd_family_member">
                                                <img class="img-responsive" src="{{ url('http://placehold.it/155x155')}}"
                                                    alt="" />
                                                <h3>Marry Swan</h3>
                                                <h4>Sister</h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
                                <div class="wd_family_section">
                                    <img src="{{ url('http://placehold.it/275x543')}}" alt="" />
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 upper_spacer50">
                                <div class="wd_family_section">
                                    <h2>William Family</h2>
                                <div class="swiper mySwiper1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="wd_family_member">
                                                <img class="img-responsive" src="{{ url('http://placehold.it/155x155')}}"
                                                    alt="" />
                                                <h3>Bill Swan</h3>
                                                <h4>Father</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="wd_family_member">
                                                <img class="img-responsive" src="{{ url('http://placehold.it/155x155')}}"
                                                    alt="" />
                                                <h3>Christena Swan</h3>
                                                <h4>Mother</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wd_family_member">
                                                <img class="img-responsive" src="{{ url('http://placehold.it/155x155')}}"
                                                    alt="" />
                                                <h3>Max Swan</h3>
                                                <h4>Brother</h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wd_family_member">
                                                <img class="img-responsive" src="{{ url('http://placehold.it/155x155')}}"
                                                    alt="" />
                                                <h3>Marry Swan</h3>
                                                <h4>Sister</h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAMILY SECTION END -->
                <!-- EVENT SECTION START -->
                <div class="wd_story_section" id="4">
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="wd_section_heading">
                                <h1 class="text-center">Event Details</h1>
                                <span class="wd_dot_heading"></span>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center bottom_padder40">
                                <p class="title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                    rhoncus, leo at pretium commodo, dui ipsum tristique dolor, in ullamcorper tellus
                                    velit quis nisl. In placerat volutpat elit quis dictum.</p>
                            </div>
                            <div
                                class="col-lg-4 col-md-6 col-sm-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-2 col-xs-8 wd_card">
                                <div class="wd_event_section text-center">
                                    <h2>Ceremony</h2>
                                    <div class="wd_item wd_square effect9 bottom_to_top">
                                        <a href="javascript:void(0);">
                                            <div class="img"><img src="{{ url('http://placehold.it/336x336')}}" alt="">
                                            </div>
                                            <div class="wd_event_info">
                                                <div class="wd_event_info_back">
                                                    <h3>Schedule</h3>
                                                    <div class="info_box">
                                                        <span class="wd_label">Date :</span>
                                                        <span class="wd_text">15 Feb 2021</span>
                                                    </div>
                                                    <div class="info_box">
                                                        <span class="wd_label">Time :</span>
                                                        <span class="wd_text">8am-12pm</span>
                                                    </div>
                                                    <div class="info_box">
                                                        <span class="wd_label">Location :</span>
                                                        <span class="wd_text">522 Lavaca st., Austin TX 78701</span>
                                                    </div>
                                                    <div class="info_box">
                                                        <span class="wd_label">Dress Code :</span>
                                                        <span class="wd_text">Black, White, Pink</span>
                                                    </div>
                                                    <div class="info_box_last">
                                                        <div class="map_fancybox">
                                                            <div id="mapBox2">
                                                                <iframe
                                                                    src="{{ url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3445.911215166146!2d-97.74762068496076!3d30.26811081492685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644b50916d8f039%3A0x951d29b2e5bb77da!2s522+Lavaca+St%2C+Austin%2C+TX+78701%2C+USA!5e0!3m2!1sen!2s!4v1455343431264')}}"
                                                                    width="600" height="450" frameborder="0"
                                                                    style="border:0"
                                                                    allowfullscreen></iframe><br /><small><a
                                                                        href="{{ url('https://www.google.com/maps?ll=30.268106,-97.745432&z=16&t=m&hl=en-GB&gl=US&mapclient=embed&q=522+Lavaca+St+Austin,+TX+78701+USA')}}"
                                                                        target="_blank">View Larger Map</a></small>
                                                            </div>
                                                        </div>
                                                        <a class="inline" href="#mapBox2"><i
                                                                class="fa fa-map-marker"></i><span class="">View
                                                                Address</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-lg-4 col-md-6 col-sm-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-2 col-xs-8 wd_card">
                                <div class="wd_event_section text-center">
                                    <h2>Reception</h2>
                                    <div class="wd_item wd_square effect9 bottom_to_top">
                                        <a href="javascript:void(0);">
                                            <div class="img"><img src="{{ url('http://placehold.it/336x336')}}" alt="">
                                            </div>
                                            <div class="wd_event_info">
                                                <div class="wd_event_info_back">
                                                    <h3>Schedule</h3>
                                                    <div class="info_box">
                                                        <span class="wd_label">Date :</span>
                                                        <span class="wd_text">15 Feb 2021</span>
                                                    </div>
                                                    <div class="info_box">
                                                        <span class="wd_label">Time :</span>
                                                        <span class="wd_text">8am-12pm</span>
                                                    </div>
                                                    <div class="info_box">
                                                        <span class="wd_label">Location :</span>
                                                        <span class="wd_text">522 Lavaca st., Austin TX 78701</span>
                                                    </div>
                                                    <div class="info_box">
                                                        <span class="wd_label">Dress Code :</span>
                                                        <span class="wd_text">Black, White, Pink</span>
                                                    </div>
                                                    <div class="info_box_last">
                                                        <div style="display:none;">
                                                            <div id="mapBox1">
                                                                <iframe
                                                                    src="{{ url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3445.911215166146!2d-97.74762068496076!3d30.26811081492685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644b50916d8f039%3A0x951d29b2e5bb77da!2s522+Lavaca+St%2C+Austin%2C+TX+78701%2C+USA!5e0!3m2!1sen!2s!4v1455343431264')}}"
                                                                    width="600" height="450" frameborder="0"
                                                                    style="border:0"
                                                                    allowfullscreen></iframe><br /><small><a
                                                                        href="{{ url('https://www.google.com/maps?ll=30.268106,-97.745432&z=16&t=m&hl=en-GB&gl=US&mapclient=embed&q=522+Lavaca+St+Austin,+TX+78701+USA')}}"
                                                                        target="_blank">View Larger Map</a></small>
                                                            </div>
                                                        </div>
                                                        <a class="inline" href="#mapBox1"><i
                                                                class="fa fa-map-marker"></i><span class="">View
                                                                Address</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-lg-4 col-md-6 col-sm-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-3 col-xs-offset-2 col-xs-8 wd_card">
                                <div class="wd_event_section text-center">
                                    <h2>Party</h2>
                                    <div class="wd_item wd_square effect9 bottom_to_top">
                                        <a href="javascript:void(0);">
                                            <div class="img"><img src="{{ url('http://placehold.it/336x336')}}" alt="">
                                            </div>
                                            <div class="wd_event_info">
                                                <div class="wd_event_info_back">
                                                    <h3>Schedule</h3>
                                                    <div class="info_box">
                                                        <span class="wd_label">Date :</span>
                                                        <span class="wd_text">15 Feb 2021</span>
                                                    </div>
                                                    <div class="info_box">
                                                        <span class="wd_label">Time :</span>
                                                        <span class="wd_text">8am-12pm</span>
                                                    </div>
                                                    <div class="info_box">
                                                        <span class="wd_label">Location :</span>
                                                        <span class="wd_text">522 Lavaca st., Austin TX 78701</span>
                                                    </div>
                                                    <div class="info_box">
                                                        <span class="wd_label">Dress Code :</span>
                                                        <span class="wd_text">Black, White, Pink</span>
                                                    </div>
                                                    <div class="info_box_last">
                                                        <div style="display:none;">
                                                            <div id="mapBox">
                                                                <iframe
                                                                    src="{{ url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3445.911215166146!2d-97.74762068496076!3d30.26811081492685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644b50916d8f039%3A0x951d29b2e5bb77da!2s522+Lavaca+St%2C+Austin%2C+TX+78701%2C+USA!5e0!3m2!1sen!2s!4v1455343431264')}}"
                                                                    width="600" height="450" frameborder="0"
                                                                    style="border:0"
                                                                    allowfullscreen></iframe><br /><small><a
                                                                        href="{{ url('https://www.google.com/maps?ll=30.268106,-97.745432&z=16&t=m&hl=en-GB&gl=US&mapclient=embed&q=522+Lavaca+St+Austin,+TX+78701+USA')}}"
                                                                        target="_blank">View Larger Map</a></small>
                                                            </div>
                                                        </div>
                                                        <a class="inline" href="#mapBox"><i
                                                                class="fa fa-map-marker"></i><span class="">View
                                                                Address</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- EVENT SECTION END -->
                <!-- GALLERY SECTION START -->
                <div class="wd_story_section" id="5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <div class="wd_section_heading">
                                    <h1 class="text-center">Best Moments</h1>
                                    <span class="wd_dot_heading"></span>
                                </div>
                                <div class="col-lg-12">
                                    <p class="title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Nullam rhoncus, leo at pretium commodo, dui ipsum tristique dolor, in
                                        ullamcorper tellus velit quis nisl. In placerat volutpat elit quis dictum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wd_gallery_section">
                        <div class="row m-0 justify-content-center">
                            <div class="col-lg-4 col-md-4">
                                <div class="row mb-3">
                                    <div class="wd_gal_img">
                                        <img src="{{ url('http://placehold.it/450x299')}}" alt=""
                                            class="img-responsive" />
                                        <div class="wd_gal_overlay">
                                            <div class="wd_gal_center">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <ul class="wd_social_icons">
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-facebook"></span></a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-twitter"></span></a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-google-plus fa-lg"></span></a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-instagram"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wd_gal_img">
                                        <img src="{{ url('http://placehold.it/450x299')}}" alt=""
                                            class="img-responsive" />
                                        <div class="wd_gal_overlay">
                                            <div class="wd_gal_center">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <ul class="wd_social_icons">
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-facebook"></span></a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-twitter"></span></a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-google-plus fa-lg"></span></a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-instagram"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="row mb-3">
                                    <div class="wd_gal_img">
                                        <img src="{{ url('http://placehold.it/450x596')}}" alt=""
                                            class="img-responsive" />
                                        <div class="wd_gal_overlay">
                                            <div class="wd_gal_center">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <ul class="wd_social_icons">
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-facebook"></span></a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-twitter"></span></a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-google-plus fa-lg"></span></a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-instagram"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="row mb-3">
                                    <div class="wd_gal_img">
                                        <img src="{{ url('http://placehold.it/450x299')}}" alt=""
                                            class="img-responsive" />
                                        <div class="wd_gal_overlay">
                                            <div class="wd_gal_center">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <ul class="wd_social_icons">
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-facebook"></span></a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-twitter"></span></a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-google-plus fa-lg"></span></a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-instagram"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wd_gal_img">
                                        <img src="{{ url('http://placehold.it/450x299')}}" alt=""
                                            class="img-responsive" />
                                        <div class="wd_gal_overlay">
                                            <div class="wd_gal_center">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <ul class="wd_social_icons">
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-facebook"></span></a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-twitter"></span></a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-google-plus fa-lg"></span></a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class="fa fa-instagram"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- GALLERY SECTION END -->
                <!-- RSVP SECTION START -->
                <div class="wd_story_section bottom_padder80" id="6">
                    <div class="wd_section_heading">
                        <h1 class="text-center">RSVP</h1>
                        <span class="wd_dot_heading"></span>
                    </div>
                    <div class="container">
                        <div class="row mb-0 justify-content-center">
                            <div class="col-lg-12 col-md-12 text-center">
                                <p class="title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                    rhoncus, leo at pretium commodo, dui ipsum tristique dolor, in ullamcorper tellus
                                    velit quis nisl. In placerat volutpat elit quis dictum.</p>
                            </div>
                            <div class="wd_rsvp_section">
                                <form id="theForm" class="simform" autocomplete="off" action="" method="post">
                                    <input type="hidden" name="recipient" value="upasana.jain@himanshusofttech.com">
                                    <input type="hidden" name="subject" value="Wedding Planner" />
                                    <div class="simform-inner">
                                        <ol class="questions">
                                            <li>
                                                <span><label for="q1">What's Your Name?</label></span>
                                                <input id="q1" name="name" type="text" />
                                            </li>
                                            <li>
                                                <span><label for="q2">What's Your Email?</label></span>
                                                <input id="q2" name="email" type="text" data-validate="email" />
                                            </li>
                                            <li>
                                                <span><label for="q3">What's Your Mobile Number?</label></span>
                                                <input id="q3" name="mobile_no" type="text" data-validate="number" />
                                            </li>
                                            <li>
                                                <span><label for="q4">No. Of Members?</label></span>
                                                <input id="q4" name="no_of_member" type="text"
                                                    data-validate="mnumber" />
                                            </li>
                                            <li>
                                                <span><label for="q5">Will Attent
                                                        Event(Ceremony,Wedding,Party)</label></span>
                                                <input id="q5" name="events" type="text" />
                                            </li>
                                        </ol>
                                        <!-- /questions -->
                                        <button class="submit" type="submit">Send answers</button>
                                        <div class="controls">
                                            <button class="next fa fa-long-arrow-right"></button>
                                            <div class="progress"></div>
                                            <span class="number">
                                                <span class="number-current"></span>
                                                <span class="number-total"></span>
                                            </span>
                                            <span class="error-message"></span>
                                        </div>
                                        <!-- / controls -->
                                    </div>
                                    <!-- /simform-inner -->
                                    <span class="final-message"></span>
                                </form>
                                <!-- /simform -->
                            </div>
                        </div>
                        <!--form -->
                    </div>
                </div>
                <!-- RSVP SECTION START -->
                <!-- FOOTER SECTION START -->
                <div class="wd_footer_section">
                    <div class="container text-center">
                        <ul class="wd_social_icons">
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <p> &#169; 2021 Perfect Wedding - Design by pixelNx</p>
                    </div>
                </div>
                <!-- FOOTER SECTION END -->
            </div>
        </div>
    </div>

    <script src="{{ asset('theme/theme10/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('theme/theme10/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/theme10/assets/js/animation-bubble.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme10/assets/js/plugins/flipclock/flipclock.js') }}"></script>
    <script src="{{ asset('theme/theme10/assets/js/swiper-bundle.min.js') }}"></script>
    <!-- <script type="text/javascript" src="assets/js/plugins/smoothscroll/smoothscroll.js"></script> -->
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{ asset('theme/theme10/assets/js/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme10/assets/js/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme10/assets/js/plugins/revolution/js/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme10/assets/js/plugins/revolution/js/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme10/assets/js/plugins/revolution/js/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('theme/theme10/assets/js/plugins/revolution/js/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme10/assets/js/plugins/revolution/js/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('theme/theme10/assets/js/plugins/revolution/js/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme10/assets/js/plugins/revolution/js/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('theme/theme10/assets/js/plugins/revolution/js/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme10/assets/js/plugins/revolution/js/revolution.extension.video.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme10/assets/js/plugins/fancybox/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme10/assets/js/plugins/countto/jquery.countTo.js') }}"></script>
    <script src="{{ asset('theme/theme10/assets/js/plugins/smoothscroll/smoothscroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/theme10/assets/js/plugins/owl/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/theme10/assets/js/plugins/rsvp/modernizr.custom.js') }}"></script>
    <script src="{{ asset('theme/theme10/assets/js/plugins/rsvp/classie.js') }}"></script>
    <script src="{{ asset('theme/theme10/assets/js/plugins/rsvp/step_form.jsv"></script>
    <script src="{{ asset('theme/theme10/assets/js/jquery.easing.min.js') }}"></script>
    <!-- <script src="assets/js/plugins/stellar/jquery.stellar.js"></script> -->
    <script src="{{ asset('theme/theme10/assets/js/plugins/rsvp/modernizr.hover.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme10/assets/js/custom.js') }}"></script>
    <script>

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 30,

            pagination: {
                el: ".swiper-pagination",
                clickable: true,

            },
        });
        var swiper = new Swiper(".mySwiper1", {
            slidesPerView: 2,
            spaceBetween: 30,

            pagination: {
                el: ".swiper-pagination",
                clickable: true,

            },
        });
        swiper.pagination.bullets[2];
    </script>
</body>

</html>