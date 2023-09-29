<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>LoveStory – Wedding Planner</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('theme/theme7/images/favicons.png') }}" />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/css/fontello/css/fontello.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/css/entypo/entypo.min.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/css/style.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/css/template.shortcodes.') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/css/template.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/css/core.animation.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/js/vendor/magnific/magnific-popup.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/js/vendor/woocommerce/assets/css/woocommerce-smallscreen.css') }}" type='text/css' media='only screen and (max-width: 768px)' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/js/vendor/woocommerce/assets/css/woocommerce-layout.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/js/vendor/woocommerce/assets/css/woocommerce.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/js/vendor/woocommerce/assets/css/plugin.woocommerce.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/js/vendor/essential-grid/public/assets/css/lightbox.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/js/vendor/essential-grid/public/assets/css/settings.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/js/vendor/revslider/public/assets/css/settings.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/js/vendor/swiper/swiper.css') }}" type='text/css' media='all' /> 
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/js/vendor/mediaelement/mediaelementplayer.min.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/js/vendor/mediaelement/wp-mediaelement.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/js/vendor/coverslider/css/style.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/js/vendor/testimonialcarousel/slick/slick.css') }}" type='text/css' media='all' />
    <link property="stylesheet" rel="stylesheet" href="{{ asset('theme/theme7/css/responsive.css') }}" type='text/css' media='all' /> 
</head>

<body class="home page  body_filled  scheme_original">
@yield('content')
    <!--.body_wrap -->
    <div class="body_wrap">
       <!--.page_wrap -->
		<div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <header class="top_panel_wrap top_panel_style_2 scheme_original">
                <div class="top_panel_wrap_inner top_panel_inner_style_2 top_panel_position_above">
                    <div class="top_panel_middle">
                        <div class="content_wrap">
                            <div class="columns_wrap columns_fluid">
                                <div class="column-1_5 contact_field contact_phone">
                                    <span class="contact_icon icon-icon_phone"></span>
                                    <span class="contact_us">Call Us</span>
                                    <span class="contact_label contact_phone">800-123-4567</span>
                                </div>
                                <div class="column-3_5 contact_logo">
                                    <div class="logo">
                                        <a href="#"><img src="{{ asset('theme/theme7/images/logo.png') }}" class="logo_main" alt="Main Logo">
                                            <img src="{{ asset('theme/theme7/images/logo.png') }}" class="logo_fixed" alt="Fixed Logo"></a>
                                    </div>
                                </div>
                                <div class="column-1_5 contact_field contact_cart">
                                    <a href="#" class="top_panel_cart_button">
                                        <span class="contact_icon icon-icon_cart"></span>
                                        <span class="contact_label contact_cart_label">Your cart:</span>
                                        <span class="contact_cart_totals">
                                            <span class="cart_items">(2)</span> - <span class="cart_summa">$120.00</span>
                                        </span>
                                    </a>
                                    <ul class="widget_area sidebar_cart sidebar">
                                        <li>
                                            <div class="widget woocommerce widget_shopping_cart">
                                                <div class="hide_cart_widget_if_empty">
                                                    <div class="widget_shopping_cart_content">
                                                        <!-- product list -->
                                                        <ul class="cart_list product_list_widget">
                                                            <li class="mini_cart_item">
                                                                <a href="#" class="remove" title="Remove this item">×</a>
                                                                <a href="#"><img src="{{ asset('theme/theme7/images/product4-180x180.jpg') }}" alt="Product Image">Flower Decor</a>
                                                                <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>55.00</span></span>
                                                            </li>
                                                            <li class="mini_cart_item">
                                                                <a href="#" class="remove" title="Remove this item">×</a>
                                                                <a href="#"><img src="{{ asset('theme/theme7/images/product1-180x180.jpg') }}" alt="Product Image">Love Balloons</a>
                                                                <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>65.00</span></span>
                                                            </li>
                                                        </ul>
                                                        <!-- end product list -->
                                                        <p class="total"><strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>120.00</span></p>
                                                        <p class="buttons"><a href="#" class="button wc-forward">View Cart</a><a href="#" class="button checkout wc-forward">Checkout</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top_panel_bottom">
                        <div class="content_wrap clearfix">
                            <nav class="menu_main_nav_area menu_hover_fade">
                                <ul id="menu_main" class="menu_main_nav">
                                    <li class="menu-item  menu-item-has-children current-menu-ancestor">
                                        <a href="#"><span>Home</span></a>
                                        <ul class="sub-menu fadeOutDown animated fast">
                                            <li class="menu-item current-menu-item"><a href="index.html"><span>Home Fullwidth</span></a></li>
                                            <li class="menu-item"><a href="home-boxed.html"><span>Home Boxed</span></a></li>
                                        </ul>
                                    </li>
                                    <!-- ... Tambahkan bagian ini untuk menu About, Features, Shop, Team, Services, Blog, dan Contacts ... -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <div class="header_mobile">
                <div class="content_wrap">
                    <div class="menu_button icon-menu"></div>
                    <div class="logo">
                        <a href="#"><img src="{{ asset('theme/theme7/images/logo.png')}}" class="logo_main" alt=""></a>
                    </div>
                    <div class="menu_main_cart top_panel_icon">
                        <a href="#" class="top_panel_cart_button"> <span class="contact_icon icon-icon_cart"></span><span class="contact_label contact_cart_label">Your cart:</span> <span class="contact_cart_totals">
                        <span class="cart_items">(2)</span> - <span class="cart_summa">&#36;120.00</span> </span>
                        </a>
                        <ul class="widget_area sidebar_cart sidebar">
                            <li>
                                <div class="widget woocommerce widget_shopping_cart">
                                    <div class="hide_cart_widget_if_empty">
                                        <div class="widget_shopping_cart_content">
                                            <!-- product list -->
                                            <ul class="cart_list product_list_widget ">
                                                <li class="mini_cart_item"><a href="#" class="remove" title="Remove this item">×</a>
                                                    <a href="#"><img src="{{ asset('theme/theme7/images/product4-180x180.jpg')}}">Flower Decor&nbsp; </a><span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>55.00</span>
                                                    </span>
                                                </li>
                                                <li class="mini_cart_item"><a href="#" class="remove" title="Remove this item">×</a>
                                                    <a href="#"><img src="{{ asset('theme/theme7/images/product1-180x180.jpg')}}">Love Balloons&nbsp; </a><span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>65.00</span>
                                                    </span>
                                                </li>
                                            </ul>
                                            <!-- end product list -->
                                            <p class="total"><strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>120.00</span>
                                            </p>
                                            <p class="buttons"><a href="#" class="button wc-forward">View Cart</a><a href="#" class="button checkout wc-forward">Checkout</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="side_wrap">
                    <div class="close">Close</div>
                    <div class="panel_top">
                        <nav class="menu_main_nav_area">
                            <ul id="menu_mobile" class="menu_main_nav">
                                <li class="menu-item menu-item-has-children current-menu-ancestor current-menu-parent"><a href="#"><span>Home</span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item current-menu-item"><a href="index.html"><span>Home Fullwidth</span></a></li>
                                        <li class="menu-item"><a href="home-boxed.html"><span>Home Boxed</span></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="#"><span>About</span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="about-us.html"><span>About Us</span></a></li>
                                        <li class="menu-item menu-item-has-children"><a href="#"><span>Portfolio</span></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="gallery-grid.html"><span>Grid</span></a></li>
                                                <li class="menu-item"><a href="gallery-cobbles.html"><span>Cobbles</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item  menu-item-has-children"><a href="#"><span>Features</span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item  menu-item-has-children"><a href="#"><span>Tools</span></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="features-shortcodes.html"><span>Shortcodes</span></a></li>
                                                <li class="menu-item"><a href="features-typography.html"><span>Typography</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#"><span>Support</span></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="features-support.html"><span>Support</span></a></li>
                                                <li class="menu-item"><a href="features-customization.html"><span>Customization</span></a></li>
                                                <li class="menu-item"><a href="features-video-tutorials.html"><span>Video Tutorials</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="shop.html"><span>Shop</span></a></li>
                                <li class="menu-item"><a href="our-team.html"><span>Team</span></a></li>
                                <li class="menu-item menu-item-has-children"><a href="#"><span>Services</span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="services-our.html"><span>Our Services</span></a></li>
                                        <li class="menu-item"><a href="services-single.html"><span>Single Service</span></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="#"><span>Blog</span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog-classic.html"><span>Classic</span></a></li>
                                        <li class="menu-item menu-item-has-children"><a href="#"><span>Style Masonry</span></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-masonry-2-columns.html"><span>Masonry 2 Columns</span></a></li>
                                                <li class="menu-item"><a href="blog-masonry-3-columns.html"><span>Masonry 3 Columns</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#"><span>Style Portfolio</span></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-portfolio-2-columns.html"><span>Portfolio 2 Columns</span></a></li>
                                                <li class="menu-item"><a href="blog-portfolio-3-columns.html"><span>Portfolio 3 Columns</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="contacts.html"><span>Contacts</span></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="panel_middle">
                        <div class="contact_field contact_phone">
                             <span class="contact_icon icon-phone"></span>
                             <span class="contact_label contact_phone">800-123-4567</span>
                             <span class="contact_icon icon-mail"></span>
                             <span class="contact_label contact_email ">info@yoursite.com</span>
                        </div>
                    </div>
                </div>
                <div class="mask"></div>
            </div>
        
            <section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_Homeslider mainslider_1">
       
                <div id="mainslider_1" class="rev_slider_wrapper fullwidthbanner-container revslider-global-param " data-source="gallery">
                    <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                    <div id="rev_slider_2_1" class="rev_slider fullwidthabanner" data-version="5.3.0.2">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('theme/theme7/images/slide1-100x50.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('theme/theme7/images/slide1.jpg')}}" alt="" title="slide1" width="1920" height="820" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption Title-slider tp-resizeme revslider-param-type-a" 
                                     id="slide-5-layer-1" 
                                     data-x="center" 
                                     data-hoffset="" 
                                     data-y="center" 
                                     data-voffset="-50" 
                                     data-width="['auto']" 
                                     data-height="['auto']" 
                                     data-type="text" 
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":700,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' 
                                     data-textAlign="['center','center','center','center']" 
                                     data-paddingtop="[0,0,0,0]" 
                                     data-paddingright="[0,0,0,0]" 
                                     data-paddingbottom="[0,0,0,0]" 
                                     data-paddingleft="[0,0,0,0]">We’ll Make Your Wedding
                                     <br />Perfect
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption Divider-slider tp-resizeme revslider-param-type-b" 
                                     id="slide-5-layer-2" 
                                     data-x="center" 
                                     data-hoffset="1" 
                                     data-y="center" 
                                     data-voffset="49" 
                                     data-width="['none','none','none','none']" 
                                     data-height="['none','none','none','none']" 
                                     data-type="image" 
                                     data-responsive_offset="on" 
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":700,"to":"o:1;","delay":1000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' 
                                     data-textAlign="['left','left','left','left']" 
                                     data-paddingtop="[0,0,0,0]" 
                                     data-paddingright="[0,0,0,0]" 
                                     data-paddingbottom="[0,0,0,0]" 
                                     data-paddingleft="[0,0,0,0]">
                                     <img src="{{ asset('theme/theme7/images/divider_white.png')}}" alt="" data-ww="260px" data-hh="26px" width="260" height="26" data-no-retina>
                                </div>
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-9" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('theme/theme7/images/slide2-100x50.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('theme/theme7/images/slide2.jpg')}}" alt="" title="slide2" width="1920" height="820" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption Title-slider tp-resizeme  revslider-param-type-c" 
                                     id="slide-9-layer-1" 
                                     data-x="center" 
                                     data-hoffset="" 
                                     data-y="center" 
                                     data-voffset="-50" 
                                     data-width="['auto']" 
                                     data-height="['auto']" 
                                     data-type="text" 
                                     data-responsive_offset="on" 
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":700,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' 
                                     data-textAlign="['center','center','center','center']" 
                                     data-paddingtop="[0,0,0,0]" 
                                     data-paddingright="[0,0,0,0]" 
                                     data-paddingbottom="[0,0,0,0]" 
                                     data-paddingleft="[0,0,0,0]">Gorgeous Flowers for Your
                                     <br />Special Event
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption Divider-slider tp-resizeme revslider-param-type-d" 
                                     id="slide-9-layer-2" 
                                     data-x="center" 
                                     data-hoffset="1" 
                                     data-y="center" 
                                     data-voffset="49" 
                                     data-width="['none','none','none','none']" 
                                     data-height="['none','none','none','none']"
                                     data-type="image" 
                                     data-responsive_offset="on" 
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":700,"to":"o:1;","delay":1000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' 
                                     data-textAlign="['left','left','left','left']" 
                                     data-paddingtop="[0,0,0,0]" 
                                     data-paddingright="[0,0,0,0]" 
                                     data-paddingbottom="[0,0,0,0]" 
                                     data-paddingleft="[0,0,0,0]">
                                     <img src="{{ asset('theme/theme7/images/divider_white.png')}}" alt="" data-ww="260px" data-hh="26px" width="260" height="26" data-no-retina>
                                </div>
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-10" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('theme/theme7/images/slide3-100x50.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('theme/theme7/images/slide3.jpg')}}" alt="" title="slide3" width="1920" height="820" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption Title-slider tp-resizeme revslider-param-type-e" 
                                     id="slide-10-layer-1" 
                                     data-x="center" 
                                     data-hoffset="" 
                                     data-y="center" 
                                     data-voffset="-50" 
                                     data-width="['auto']" 
                                     data-height="['auto']" 
                                     data-type="text" 
                                     data-responsive_offset="on" 
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":700,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['center','center','center','center']" 
                                     data-paddingtop="[0,0,0,0]" 
                                     data-paddingright="[0,0,0,0]" 
                                     data-paddingbottom="[0,0,0,0]" 
                                     data-paddingleft="[0,0,0,0]">Hand-Tied Bouquets 
                                </div>
                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption Divider-slider tp-resizeme revslider-param-type-f" 
                                     id="slide-10-layer-2" 
                                     data-x="center" 
                                     data-hoffset="1" 
                                     data-y="center" 
                                     data-voffset="49" 
                                     data-width="['none','none','none','none']" 
                                     data-height="['none','none','none','none']" 
                                     data-type="image" 
                                     data-responsive_offset="on" 
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":700,"to":"o:1;","delay":1000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' 
                                     data-textAlign="['left','left','left','left']" 
                                     data-paddingtop="[0,0,0,0]" 
                                     data-paddingright="[0,0,0,0]" 
                                     data-paddingbottom="[0,0,0,0]" 
                                     data-paddingleft="[0,0,0,0]">
                                     <img src="{{ asset('theme/theme7/images/divider_white.png')}}" alt="" data-ww="260px" data-hh="26px" width="260" height="26" data-no-retina> 
                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom hidden"></div>	
                    </div>
                </div>
                <!-- END REVOLUTION SLIDER -->
            </section>
		    <div class="page_content_wrap page_paddings_no">
                <div class="content">
                    <article class="post_item post_item_single page type-page">
                        <div class="post_content">
                            <section class="no-col-padding">
                                <div class="container-fluid sc_home-bg-type-a">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div  class="sc_call_to_action sc_call_to_action_accented sc_call_to_action_style_2 sc_call_to_action_align_center w100">
                                                            <div class="sc_call_to_action_info">
                                                                <h2 class="sc_call_to_action_title sc_item_title sc_item_title_without_descr">ORDER Full Package Plan &amp; Get -25% discount!</h2>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </section>       
                            <section class="no-col-padding">
                                <div class="content_container">
                                    <div class="columns_wrap">
                                        <div class="column_container column-1_1">
                                            <div class="column-inner">
                                                 <div class="m_wrapper">
                                                   <!--.sc_services_wrap -->
                                                    <div class="sc_services_wrap">
                                                       <!--.sc_services -->
                                                        <div class="sc_services sc_services_style_services-1 sc_services_type_images margin_bottom_medium sc_home-param-type-a">
                                                            <h3 class="sc_services_title sc_item_title sc_item_title_without_descr">Let's Plan Your Perfect Wedding</h3>
                                                            <h6 class="sc_services_subtitle sc_item_subtitle">welcome</h6>
                                                            <div class="sc_columns columns_wrap">
                                                                <div class="column-1_2 column_padding_bottom">
                                                                    <div class="sc_services_item odd first">
                                                                        <div class="sc_services_item_featured post_featured">
                                                                            <div class="post_thumb" data-image="" data-title="Bouquets &amp; Style">
                                                                                <a class="hover_icon hover_icon_link" href="services-our.html"><img class="post-image" alt="img1.jpg" src="{{ asset('theme/theme7/images/img1-370x240.jpg')}}"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_services_item_content">
                                                                            <h4 class="sc_services_item_title"><a href="services-our.html">Bouquets &amp; Style</a></h4>
                                                                            <div class="sc_services_item_description"> <a href="services-our.html" class="sc_button sc_button_square sc_button_style_hovered sc_button_size_small">order now</a> </div>
                                                                        </div>
                                                                    </div>
                                                                </div><div class="column-1_2 column_padding_bottom">
                                                                    <div class="sc_services_item even">
                                                                        <div class="sc_services_item_featured post_featured">
                                                                            <div class="post_thumb" data-image="" data-title="Wedding Planning">
                                                                                <a class="hover_icon hover_icon_link" href="shop.html"><img class="post-image" alt="img2.jpg" src="{{ asset('theme/theme7/images/img2-370x240.jpg')}}"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_services_item_content">
                                                                            <h4 class="sc_services_item_title"><a href="shop.html">Wedding Planning</a></h4>
                                                                            <div class="sc_services_item_description"> <a href="shop.html" class="sc_button sc_button_square sc_button_style_hovered sc_button_size_small">shop now</a> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- end .sc_services -->
                                                    </div>
                                                    <!-- end .sc_services_wrap -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </section>
                            <section class="no-col-padding">
                                <div class="container-fluid sc_home-bg-type-b">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                         <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_9 sc_home-margin-type-a">
                                                            <div class="column-5_9 sc_column_item  odd first span_5">
                                                                <h6 class="sc_title sc_title_regular margin_top_null sc_home-margin-type-b">about us</h6>
                                                                <h2 class="sc_title sc_title_iconed margin_top_tiny margin_bottom_null sc_home-margin-type-c fsz_cust">We Plan &amp; Design Weddings<br />
                                                                That Capture the Imagination<span class="sc_title_icon sc_title_icon_bottom  sc_title_icon_small"><img src="{{ asset('theme/theme7/images/vector-smart-object-copy-12.png')}}" alt="" /></span></h2>
                                                                <div class="m_text_column m_content_element ">
                                                                    <div class="m_wrapper">
                                                                        <p>Weddings are significant events in people&#8217;s lives and as such, couples are often willing to spend considerable amount of money to ensure that their weddings are well-organized. Wedding planners are often used by couples who work long hours and have little spare time available for sourcing and managing wedding venues.</p>
                                                                    </div>
                                                                </div> <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium sc_home-margin-type-d">more about us</a></div><div class="column-4_9 sc_column_item even span_4">
                                                                <div class="cq-coverslider  navigation-overlay-right tinyshadow grapefruit " data-imagemaxheight="300" data-buttonbackground="" data-buttonhoverbackground="#222F46" data-contentbackground="" data-contentcolor="" data-arrowcolor="" data-arrowhovercolor="" data-delaytime="2">
                                                                    <div class="cq-coverslider-area btn-large square">
                                                                        <div class="cq-coverslider-cover">
                                                                            <div class="cq-coverslider-itemcontainer">
                                                                                <div class="cq-coverslider-imageitem"><img src="{{ asset('theme/theme7/images/welcome_gallery_img1.jpg')}}" class="cq-coverslider-image" alt=""></div>
                                                                                <div class="cq-coverslider-imageitem"><img src="{{ asset('theme/theme7/images/welcome_gallery_img2-1.jpg')}}" class="cq-coverslider-image" alt=""></div>
                                                                                <div class="cq-coverslider-imageitem"><img src="{{ asset('theme/theme7/images/welcome_gallery_img3.jpg')}}" class="cq-coverslider-image" alt=""></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cq-coverslider-content">
                                                                            <div class="cq-coverslider-contentitem"></div>
                                                                            <div class="cq-coverslider-contentitem"></div>
                                                                            <div class="cq-coverslider-contentitem"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cq-coverslider-navigation btn-large">
                                                                        <div class="coverslider-navigation-prev"><i class="cq-coverslider-icon entypo-icon entypo-icon-left-open-big"></i></div><div class="coverslider-navigation-next"><i class="cq-coverslider-icon entypo-icon entypo-icon-right-open-big"></i></div>
                                                                    </div>
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
                            <section class="no-col-padding">
                                <div class="container-fluid">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <!--.sc_services_wrap -->  
                                                        <div class="sc_services_wrap">
                                                            <!--.sc_services -->
                                                            <div class="sc_services sc_services_style_services-2 sc_services_type_icons margin_bottom_medium sc_home-param-type-b" data-animation="animated fadeInDown normal">
                                                                <div class="sc_columns columns_wrap">
                                                                    <div class="column-1_3 column_padding_bottom">
                                                                        <div class="sc_services_item odd first"> <a href="services-single.html"><span class="sc_icon icon-icon1"></span></a>
                                                                            <div class="sc_services_item_content">
                                                                                <h4 class="sc_services_item_title"><a href="services-single.html">Free Delivery</a></h4>
                                                                                <div class="sc_services_item_description">
                                                                                    <p>on every order, during the same day</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><div class="column-1_3 column_padding_bottom">
                                                                        <div class="sc_services_item even"> <a href="services-single.html"><span class="sc_icon icon-icon2"></span></a>
                                                                            <div class="sc_services_item_content">
                                                                                <h4 class="sc_services_item_title"><a href="services-single.html">Hand &#8211; Tied</a></h4>
                                                                                <div class="sc_services_item_description">
                                                                                    <p>bouquets and beautiful plants</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><div class="column-1_3 column_padding_bottom">
                                                                        <div class="sc_services_item odd"> <a href="services-single.html"><span class="sc_icon icon-icon3"></span></a>
                                                                            <div class="sc_services_item_content">
                                                                                <h4 class="sc_services_item_title"><a href="services-single.html">Exclusive Design</a></h4>
                                                                                <div class="sc_services_item_description">
                                                                                    <p>by the best florist from NYC</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end .sc_services -->
                                                        </div>
                                                        <!-- end .sc_services_wrap -->  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </section>
                            <section class="no-col-padding">
                                <div class="container-fluid">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="sc_section margin_top_huge margin_bottom_medium aligncenter">
                                                            <div class="sc_section_inner">
                                                                <h2 class="sc_section_title sc_item_title sc_item_title_without_descr">Shop Our Latest Styles</h2>
                                                                <h6 class="sc_section_subtitle sc_item_subtitle">shop</h6>
                                                                <div class="sc_section_content_wrap">
                                                                    <div class="woocommerce columns-3">
                                                                        <ul class="products">
                                                                            <li class="product type-product status-publish has-post-thumbnail product_cat-flower-decor product_tag-floristic product_tag-joy first instock shipping-taxable purchasable product-type-simple">
                                                                                <div class="post_item_wrap">
                                                                                    <div class="post_featured">
                                                                                        <div class="post_thumb">
                                                                                        <a class="hover_icon hover_icon_link" href="shop-single.html">
                                                                                            <img
                                                                                                src="{{ asset('theme/theme7/images/product4-555x615.jpg') }}"
                                                                                                alt="product4"
                                                                                                title="product4"
                                                                                                srcset="
                                                                                                    {{ asset('theme/theme7/images/product4-555x615.jpg') }} 555w,
                                                                                                    {{ asset('theme/theme7/images/product4-271x300.jpg') }} 271w,
                                                                                                    {{ asset('theme/theme7/images/product4-768x851.jpg') }} 768w,
                                                                                                    {{ asset('theme/theme7/images/product4-924x1024.jpg') }} 924w,
                                                                                                    {{ asset('theme/theme7/images/product4-706x783.jpg') }} 706w,
                                                                                                    {{ asset('theme/theme7/images/product4.jpg') }} 1000w"
                                                                                                sizes="(max-width: 555px) 100vw, 555px"
                                                                                            />
                                                                                        </a>   
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="post_content">
                                                                                        <h3>Flower Decor</h3> <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>55.00</span>
                                                                                        </span> <a rel="nofollow" href="#" data-quantity="1" data-product_id="143" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="product type-product status-publish has-post-thumbnail product_cat-balloons product_tag-beautiful product_tag-roses  instock shipping-taxable purchasable product-type-simple">
                                                                                <div class="post_item_wrap">
                                                                                    <div class="post_featured">
                                                                                        <div class="post_thumb">
                                                                                        <a class="hover_icon hover_icon_link" href="shop-single.html">
                                                                                            <img
                                                                                                src="{{ asset('theme/theme7/images/product1-555x615.jpg') }}"
                                                                                                alt="product1"
                                                                                                title="product1"
                                                                                                srcset="
                                                                                                    {{ asset('theme/theme7/images/product1-555x615.jpg') }} 555w,
                                                                                                    {{ asset('theme/theme7/images/product1-271x300.jpg') }} 271w,
                                                                                                    {{ asset('theme/theme7/images/product1-768x851.jpg') }} 768w,
                                                                                                    {{ asset('theme/theme7/images/product1-924x1024.jpg') }} 924w,
                                                                                                    {{ asset('theme/theme7/images/product1-706x783.jpg') }} 706w,
                                                                                                    {{ asset('theme/theme7/images/product1.jpg') }} 1000w"
                                                                                                sizes="(max-width: 555px) 100vw, 555px"
                                                                                            />
                                                                                        </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="post_content">
                                                                                        <h3>Love Balloons</h3> <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>65.00</span>
                                                                                        </span> <a rel="nofollow" href="#" data-quantity="1" data-product_id="145" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="product type-product status-publish has-post-thumbnail product_cat-dessert-stands product_tag-decorations product_tag-love last instock shipping-taxable purchasable product-type-simple">
                                                                                <div class="post_item_wrap">
                                                                                    <div class="post_featured">
                                                                                        <div class="post_thumb">
                                                                                        <a class="hover_icon hover_icon_link" href="shop-single.html">
                                                                                            <img
                                                                                                src="{{ asset('theme/theme7/images/product2-555x615.jpg') }}"
                                                                                                alt="product2"
                                                                                                title="product2"
                                                                                                srcset="
                                                                                                    {{ asset('theme/theme7/images/product2-555x615.jpg') }} 555w,
                                                                                                    {{ asset('theme/theme7/images/product2-271x300.jpg') }} 271w,
                                                                                                    {{ asset('theme/theme7/images/product2-768x851.jpg') }} 768w,
                                                                                                    {{ asset('theme/theme7/images/product2-924x1024.jpg') }} 924w,
                                                                                                    {{ asset('theme/theme7/images/product2-706x783.jpg') }} 706w,
                                                                                                    {{ asset('theme/theme7/images/product2.jpg') }} 1000w"
                                                                                                sizes="(max-width: 555px) 100vw, 555px"
                                                                                            />
                                                                                        </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="post_content">
                                                                                        <h3>Vintage Metal Cake Stand</h3> <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>57.00</span>
                                                                                        </span> <a rel="nofollow" href="#" data-quantity="1" data-product_id="141" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="product type-product status-publish has-post-thumbnail product_cat-bouquets product_tag-beautiful product_tag-roses first instock shipping-taxable purchasable product-type-simple">
                                                                                <div class="post_item_wrap">
                                                                                    <div class="post_featured">
                                                                                        <div class="post_thumb">
                                                                                        <a class="hover_icon hover_icon_link" href="shop-single.html">
                                                                                            <img
                                                                                                src="{{ asset('theme/theme7/images/product2-555x615.jpg') }}"
                                                                                                alt="product2"
                                                                                                title="product2"
                                                                                                srcset="
                                                                                                    {{ asset('theme/theme7/images/product2-555x615.jpg') }} 555w,
                                                                                                    {{ asset('theme/theme7/images/product2-271x300.jpg') }} 271w,
                                                                                                    {{ asset('theme/theme7/images/product2-768x851.jpg') }} 768w,
                                                                                                    {{ asset('theme/theme7/images/product2-924x1024.jpg') }} 924w,
                                                                                                    {{ asset('theme/theme7/images/product2-706x783.jpg') }} 706w,
                                                                                                    {{ asset('theme/theme7/images/product2.jpg') }} 1000w"
                                                                                                sizes="(max-width: 555px) 100vw, 555px"
                                                                                            />
                                                                                        </a>    
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="post_content">
                                                                                        <h3>Wedding Bouquet</h3> <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>112.00</span>
                                                                                        </span> <a rel="nofollow" href="#" data-quantity="1" data-product_id="142" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="product type-product status-publish has-post-thumbnail product_cat-lights-candles product_tag-decorations product_tag-love  instock shipping-taxable purchasable product-type-simple">
                                                                                <div class="post_item_wrap">
                                                                                    <div class="post_featured">
                                                                                        <div class="post_thumb">
                                                                                        <a class="hover_icon hover_icon_link" href="shop-single.html">
                                                                                            <img
                                                                                                src="{{ asset('theme/theme7/images/product2-555x615.jpg') }}"
                                                                                                alt="product2"
                                                                                                title="product2"
                                                                                                srcset="
                                                                                                    {{ asset('theme/theme7/images/product2-555x615.jpg') }} 555w,
                                                                                                    {{ asset('theme/theme7/images/product2-271x300.jpg') }} 271w,
                                                                                                    {{ asset('theme/theme7/images/product2-768x851.jpg') }} 768w,
                                                                                                    {{ asset('theme/theme7/images/product2-924x1024.jpg') }} 924w,
                                                                                                    {{ asset('theme/theme7/images/product2-706x783.jpg') }} 706w,
                                                                                                    {{ asset('theme/theme7/images/product2.jpg') }} 1000w"
                                                                                                sizes="(max-width: 555px) 100vw, 555px"
                                                                                            />
                                                                                        </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="post_content">
                                                                                        <h3>Wedding Candles</h3> <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>45.00</span>
                                                                                        </span> <a rel="nofollow" href="#" data-quantity="1" data-product_id="144" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="product type-product status-publish has-post-thumbnail product_cat-signs-signatures product_tag-floristic product_tag-joy last instock shipping-taxable purchasable product-type-simple">
                                                                                <div class="post_item_wrap">
                                                                                    <div class="post_featured">
                                                                                        <div class="post_thumb">
                                                                                        <a class="hover_icon hover_icon_link" href="shop-single.html">
                                                                                            <img
                                                                                                src="{{ asset('theme/theme7/images/product2-555x615.jpg') }}"
                                                                                                alt="product2"
                                                                                                title="product2"
                                                                                                srcset="
                                                                                                    {{ asset('theme/theme7/images/product2-555x615.jpg') }} 555w,
                                                                                                    {{ asset('theme/theme7/images/product2-271x300.jpg') }} 271w,
                                                                                                    {{ asset('theme/theme7/images/product2-768x851.jpg') }} 768w,
                                                                                                    {{ asset('theme/theme7/images/product2-924x1024.jpg') }} 924w,
                                                                                                    {{ asset('theme/theme7/images/product2-706x783.jpg') }} 706w,
                                                                                                    {{ asset('theme/theme7/images/product2.jpg') }} 1000w"
                                                                                                sizes="(max-width: 555px) 100vw, 555px"
                                                                                            />
                                                                                        </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="post_content">
                                                                                        <h3>Wedding Lighted Signs</h3> <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>130.00</span>
                                                                                        </span> <a rel="nofollow" href="#" data-quantity="1" data-product_id="132" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
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
                            <section class="no-col-padding overflow-hidden">
                                <div class="container-fluid sc_home-bg-type-c">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_7 sc_home-margin-type-e" data-equal-height=".sc_column_item">
                                                            <div class="column-4_7 sc_column_item odd first span_4"></div><div class="column-3_7 sc_column_item odd" data-animation="animated fadeInRightBig normal">
                                                                <h6 class="sc_title sc_title_regular sc_home-margin-type-f">inspiration</h6>
                                                                <h3 class="sc_title sc_title_regular margin_top_tiny margin_bottom_tiny sc_home-font-type-a">Exclusive Design by Best Florists</h3>
                                                                <div class="m_text_column m_content_element ">
                                                                    <div class="m_wrapper">
                                                                        <p>The floristry business has a significant market in the corporate and social event world, as flowers play a large part in the decor of special events and meetings</p>
                                                                    </div>
                                                                </div> <a href="gallery-grid.html" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large sc_home-margin-type-g" >visit gallery</a>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </section>
                            <section class="no-col-padding">
                                <div class="container-fluid">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="sc_testimonials sc_testimonials_style_testimonials-1 margin_bottom_medium sc_home-param-type-c">
                                                            <div class="sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_controls_side" data-interval="5160" data-slides-min-width="250">
                                                                <div class="slides swiper-wrapper">
                                                                    <div class="swiper-slide w100" data-style="width:100%;">
                                                                        <div class="sc_testimonial_item">
                                                                            <div class="sc_testimonial_avatar"><img class="post-image" alt="Alison &#038; Mark Priston" src="{{ asset('theme/theme7/images/testimonials-1-102x102.jpg')}}"></div>
                                                                            <div class="sc_testimonial_content">
                                                                                <p>The wedding was truly fantastic. Thank you for making our dream come true!</p>
                                                                            </div>
                                                                            <div class="sc_testimonial_author"><span class="sc_testimonial_author_name">Alison &amp; Mark Priston, </span><span class="sc_testimonial_author_position">NYC</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide w100" data-style="width:100%;">
                                                                        <div class="sc_testimonial_item">
                                                                            <div class="sc_testimonial_avatar"><img class="post-image" alt="Kelly &#038; Brandon Walsh" src="{{ asset('theme/theme7/images/testimonials-2-102x102.jpg')}}"></div>
                                                                            <div class="sc_testimonial_content">
                                                                                <p>We were extremely excited, but everything was even more that we hoped for!</p>
                                                                            </div>
                                                                            <div class="sc_testimonial_author"><span class="sc_testimonial_author_name">Kelly &amp; Brandon Walsh, </span><span class="sc_testimonial_author_position">CA</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide w100" data-style="width:100%;">
                                                                        <div class="sc_testimonial_item">
                                                                            <div class="sc_testimonial_avatar"><img class="post-image" alt="Melissa &#038; Ryan Smith" src="{{ asset('theme/theme7/images/testimonials-3-102x102.jpg')}}"></div>
                                                                            <div class="sc_testimonial_content">
                                                                                <p>The ceremony was amazing! We are grateful for the creative caring approach.</p>
                                                                            </div>
                                                                            <div class="sc_testimonial_author"><span class="sc_testimonial_author_name">Melissa &amp; Ryan Smith, </span><span class="sc_testimonial_author_position">TX</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_slider_controls_wrap">
                                                                    <a class="sc_slider_prev" href="#"></a>
                                                                    <a class="sc_slider_next" href="#"></a>
                                                                </div>
                                                                <div class="sc_slider_pagination_wrap"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </section>
                            
                            <section class="no-col-padding">
                                <div class="container-fluid sc_home-bg-type-d">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="sc_section sc_section_block sc_home-margin-type-i">
                                                            <div class="sc_section_inner">
                                                                <div class="sc_section_content_wrap">
                                                                    <h3 class="sc_title sc_title_underline sc_align_center sc_home-param-type-d">Let Us Make Your Wedding Flawless</h3><a href="contacts.html" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large aligncenter sc_home-param-type-e">send request</a>
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
                            <section class="no-col-padding">
                                <div class="container-fluid">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="sc_section sc_section_block sc_home-margin-type-j">
                                                            <div class="sc_section_inner">
                                                                <h2 class="sc_section_title sc_item_title sc_item_title_without_descr">Our Events Plans</h2>
                                                                <h6 class="sc_section_subtitle sc_item_subtitle">prices</h6>
                                                                <div class="sc_section_content_wrap">
                                                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
                                                                        <div class="column-1_3 sc_column_item odd first">
                                                                            <div class="sc_price_block sc_price_block_style_1">
                                                                                <div class="featured_image"><img alt="Bouquets" src="{{ asset('theme/theme7/images/depositphotos-80370732-original.jpg')}}"></div>
                                                                                <div class="sc_price_block_title"><span>Bouquets</span></div>
                                                                                <div class="sc_price_block_description">
                                                                                    <ul>
                                                                                        <li>Bridal Bouquets</li>
                                                                                        <li>Bridesmaids&#8217; Bouquets</li>
                                                                                        <li>Corsages</li>
                                                                                        <li>Boutonnieres</li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="sc_price_block_money">
                                                                                    <div class="sc_price"><span>from </span><span class="sc_price_currency">$</span><span class="sc_price_money">399</span><span class="sc_price_info"><span class="sc_price_penny">.00</span><span class="sc_price_period_empty"></span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="sc_price_block_link"><a href="shop.html" class="sc_button sc_button_square sc_button_style_hovered sc_button_size_small">order now</a>
                                                                                </div>
                                                                            </div>
                                                                        </div><div class="column-1_3 sc_column_item even">
                                                                            <div class="sc_price_block sc_price_block_style_1">
                                                                                <div class="featured_image"><img alt="Ceremony+ Bouquets" src="{{ asset('theme/theme7/images/depositphotos-70525293-original.jpg')}}"></div>
                                                                                <div class="sc_price_block_title"><span>Ceremony+ Bouquets</span></div>
                                                                                <div class="sc_price_block_description">
                                                                                    <ul>
                                                                                        <li>Bride&#8217;s &amp; Bridemaids&#8217; Bouquets</li>
                                                                                        <li>Corsages &amp; Boutonnieres</li>
                                                                                        <li>Ceremony Main Altar</li>
                                                                                        <li>Aisle Pew Markers</li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="sc_price_block_money">
                                                                                    <div class="sc_price"><span>from </span><span class="sc_price_currency">$</span><span class="sc_price_money">799</span><span class="sc_price_info"><span class="sc_price_penny">.00</span><span class="sc_price_period_empty"></span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="sc_price_block_link"><a href="shop.html" class="sc_button sc_button_square sc_button_style_hovered sc_button_size_small">order now</a></div>
                                                                            </div>
                                                                        </div><div class="column-1_3 sc_column_item odd">
                                                                            <div class="sc_price_block sc_price_block_style_1">
                                                                                <div class="featured_image"><img alt="Full Package" src="{{ asset('theme/theme7/images/depositphotos-99534020-original.jpg')}}"></div>
                                                                                <div class="sc_price_block_title"><span>Full Package</span></div>
                                                                                <div class="sc_price_block_description">
                                                                                    <ul>
                                                                                        <li>Bride&#8217;s &amp; Bridemaids&#8217; Bouquets</li>
                                                                                        <li>Corsages &amp; Boutonnieres</li>
                                                                                        <li>Ceremony Decoration</li>
                                                                                        <li>Tables &amp; Cake Decoration</li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="sc_price_block_money">
                                                                                    <div class="sc_price"><span>from </span><span class="sc_price_currency">$</span><span class="sc_price_money">999</span><span class="sc_price_info"><span class="sc_price_penny">.00</span><span class="sc_price_period_empty"></span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="sc_price_block_link"><a href="shop.html" class="sc_button sc_button_square sc_button_style_hovered sc_button_size_small">order now</a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                            <section class="no-col-padding">
                                <div class="container-fluid sc_home-bg-type-a">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 margin_top_large margin_bottom_large" data-equal-height=".sc_column_item">
                                                            <div class="column-1_2 sc_column_item odd first">
                                                                <h3 class="sc_title sc_title_regular margin_bottom_null sc_home-param-type-f">Stay Tuned with Updates!</h3>
                                                            </div><div class="column-1_2 sc_column_item even">
                                                                <div class="m_text_column m_content_element ">
                                                                    <div class="m_wrapper">
                                                                        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-341" method="post" data-id="341" data-name="">
                                                                            <div class="mc4wp-form-fields">
                                                                                <input type="email" name="EMAIL" placeholder="Enter Your Email" class="emailer_input" required />
                                                                                <input type="submit" class="emailer_submit" value="submit" />
                                                                                <div class="hide">
                                                                                    <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" />
                                                                                </div>
                                                                           </div>
                                                                            <div class="mc4wp-response"></div>
                                                                        </form>
                                                                    </div>
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
                            <section class="no-col-padding">
                                <div class="container-fluid">    
                                    <div class="column_container column-1_1">
                                        <div class="column-inner">
                                            <div class="m_wrapper">
                                                <article class="myportfolio-container minimal-light" id="esg-grid-5-1-wrap">
                                                    <!-- THE GRID ITSELF WITH FILTERS, PAGINATION, SORTING ETC... -->
                                                    <div id="esg-grid-5-1" class="esg-grid sc_gal-grid-param-type-a">
                                                        <!-- ############################ -->
                                                        <!-- THE GRID ITSELF WITH ENTRIES -->
                                                        <!-- ############################ -->
                                                        <ul>
                                                            <!-- PORTFOLIO ITEM 8 -->
                                                            <li class="filterall eg-vanburen-wrapper">
                                                                <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                                <div class="esg-media-cover-wrapper">
                                                                    <!-- THE MEDIA OF THE ENTRY -->
                                                                    <div class="esg-entry-media"><img src="{{ asset('theme/theme7/images/gallery-12.jpg')}}" alt=""></div>
                                                                    <!-- THE CONTENT OF THE ENTRY -->
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <!-- THE COLORED OVERLAY -->
                                                                        <div class="esg-overlay esg-flipup eg-vanburen-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-vanburen-element-5-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-vanburen-element-5 esgbox" href="{{ asset('theme/theme7/images/gallery-9.jpg')}}">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-vanburen-element-6-a esg-falldown" data-delay="0.3">
                                                                            <a class="eg-vanburen-element-6" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                                        <div class="esg-center eg-vanburen-element-0 esg-flyleft" data-delay="0.05">Classic Ceremony</div>
                                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                                    </div>
                                                                    <!-- END OF THE CONTENT IN THE ENTRY -->
                                                                </div>
                                                                <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->
                                                            </li>
                                                            <!-- END OF PORTFOLIO ITEM -->
                                                            <!-- PORTFOLIO ITEM 8 -->
                                                            <li class="filterall eg-vanburen-wrapper">
                                                                <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                                <div class="esg-media-cover-wrapper">
                                                                    <!-- THE MEDIA OF THE ENTRY -->
                                                                    <div class="esg-entry-media"><img src="{{ asset('theme/theme7/images/gallery-11.jpg')}}" alt=""></div>
                                                                    <!-- THE CONTENT OF THE ENTRY -->
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <!-- THE COLORED OVERLAY -->
                                                                        <div class="esg-overlay esg-flipup eg-vanburen-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-vanburen-element-5-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-vanburen-element-5 esgbox" href="{{ asset('theme/theme7/images/gallery-9.jpg')}}">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-vanburen-element-6-a esg-falldown" data-delay="0.3">
                                                                            <a class="eg-vanburen-element-6" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                                        <div class="esg-center eg-vanburen-element-0 esg-flyleft" data-delay="0.05">Country Style Mix</div>
                                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                                    </div>
                                                                    <!-- END OF THE CONTENT IN THE ENTRY -->
                                                                </div>
                                                                <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->
                                                            </li>
                                                            <!-- END OF PORTFOLIO ITEM -->
                                                            <!-- PORTFOLIO ITEM 8 -->
                                                            <li class="filterall eg-vanburen-wrapper">
                                                                <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                                <div class="esg-media-cover-wrapper">
                                                                    <!-- THE MEDIA OF THE ENTRY -->
                                                                    <div class="esg-entry-media"><img src="{{ asset('theme/theme7/images/gallery-10.jpg')}}" alt=""></div>
                                                                    <!-- THE CONTENT OF THE ENTRY -->
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <!-- THE COLORED OVERLAY -->
                                                                        <div class="esg-overlay esg-flipup eg-vanburen-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-vanburen-element-5-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-vanburen-element-5 esgbox" href="{{ asset('theme/theme7/images/gallery-9.jpg')}}">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-vanburen-element-6-a esg-falldown" data-delay="0.3">
                                                                            <a class="eg-vanburen-element-6" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                                        <div class="esg-center eg-vanburen-element-0 esg-flyleft" data-delay="0.05">Rose Garden</div>
                                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                                    </div>
                                                                    <!-- END OF THE CONTENT IN THE ENTRY -->
                                                                </div>
                                                                <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->
                                                            </li>
                                                            <!-- END OF PORTFOLIO ITEM -->
                                                            <!-- PORTFOLIO ITEM 8 -->
                                                            <li class="filterall eg-vanburen-wrapper">
                                                                <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                                <div class="esg-media-cover-wrapper">
                                                                    <!-- THE MEDIA OF THE ENTRY -->
                                                                    <div class="esg-entry-media"><img src="{{ asset('theme/theme7/images/gallery_img4.jpg')}}" alt=""></div>
                                                                    <!-- THE CONTENT OF THE ENTRY -->
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <!-- THE COLORED OVERLAY -->
                                                                        <div class="esg-overlay esg-flipup eg-vanburen-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-vanburen-element-5-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-vanburen-element-5 esgbox" href="{{ asset('theme/theme7/images/gallery-9.jpg')}}">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-vanburen-element-6-a esg-falldown" data-delay="0.3">
                                                                            <a class="eg-vanburen-element-6" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                                        <div class="esg-center eg-vanburen-element-0 esg-flyleft" data-delay="0.05">She Said Yes!</div>
                                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                                    </div>
                                                                    <!-- END OF THE CONTENT IN THE ENTRY -->
                                                                </div>
                                                                <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->
                                                            </li>
                                                            <!-- END OF PORTFOLIO ITEM -->
                                                        </ul>
                                                        <!-- ############################ -->
                                                        <!--      END OF THE GRID         -->
                                                        <!-- ############################ -->
                                                    </div>
                                                    <!-- END OF THE GRID -->
                                                </article>
                                                <!-- END OF THE GRID WRAPPER -->
                                                <div class="clear"></div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>                         
                            <section class="no-col-padding">
                                <div class="container-fluid sc_home-bg-type-b">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="sc_form_wrap">
                                                            
                                                        </div>   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </section>  
                        </div>
                        <!--end .post_content-->
                    </article>
                    <!-- end .post_item .post_item_single .page .type-page -->
                </div>
                <!--end .content-->
            </div>
            <!--end .page_content_wrap-->
            
            <!--.contacts_wrap -->
            <footer class="contacts_wrap scheme_original">
               <!--.contacts_wrap_inner -->
                <div class="contacts_wrap_inner">
                   <!--.content_wrap -->
                    <div class="content_wrap">
                        <div class="contacts_address">
                            <address class="address_right address_block">
                                <span class="sc_icon icon-icon4"></span>
                                <p class="address_title">Address</p><p>123, New Lenox Chicago, IL 60606<br></p>			
                            </address><address class="address_center phone_block">
                                <span class="sc_icon icon-icon5"></span>
                                <p class="address_title">Phone</p><p>800-123-4567</p>				
                            </address><address class="address_left email_block">
                                <span class="sc_icon icon-icon6"></span>
                                <p class="address_title">Email address</p><p>info@yoursite.com </p>	
                            </address>
                        </div>
                    </div>	
                    <!-- end .content_wrap -->
                </div>	
                <!-- end .contacts_wrap_inner -->
			</footer>
			<!-- end .contacts_wrap -->
			
			<!--.footer_wrap -->
			<footer class="footer_wrap widget_area scheme_original">
               <!--.footer_wrap_inner -->
                <div class="footer_wrap_inner widget_area_inner">
                   <!--.content_wrap -->
                    <div class="content_wrap">
                        <aside id="lovestory_widget_socials-2" class="widget_number_1 widget widget_socials">
                            <div class="widget_inner">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('theme/theme7/images/logo_2x.png')}}" class="logo_main" alt=""></a>
                                </div>
                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                    <div class="sc_socials_item"><a href="#" class="social_icons social_facebook"><span class="icon-facebook"></span></a></div><div class="sc_socials_item"><a href="#" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div><div class="sc_socials_item"><a href="#" class="social_icons social_instagramm"><span class="icon-instagramm"></span></a></div><div class="sc_socials_item"><a href="#" class="social_icons social_gplus"><span class="icon-gplus"></span></a></div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- end .content_wrap -->
                </div>
                <!-- end .footer_wrap_inner -->
            </footer>
            <!-- end .footer_wrap -->
				 
			<div class="copyright_wrap copyright_style_text  scheme_original">
                <div class="copyright_wrap_inner">
                    <div class="content_wrap">
                        <div class="copyright_text">
                            <p>ThemeREX &copy; 2017 All Rights Reserved <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
		</div>	
		<!-- end .page_wrap -->
	</div>		
   <!-- end .body_wrap -->
    <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
    
    <script type="text/javascript" src="{{ asset('theme/theme7/js/vendor/jquery-3.1.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/vendor/jquery-migrate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/vendor/photostack/modernizr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/vendor/superfish.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/vendor/essential-grid/public/assets/js/lightbox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/vendor/essential-grid/public/assets/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/vendor/essential-grid/public/assets/js/jquery.themepunch.essential.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/vendor/revslider/public/assets/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/custom/_main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/custom/core.utils.') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/custom/core.init.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/custom/template.init.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/custom/template.shortcodes.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/vendor/magnific/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/vendor/core.messages/core.messages.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('theme/theme7/js/vendor/testimonialcarousel/slick/slick.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('theme/theme7/js/vendor/coverslider/js/init.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/vendor/swiper/swiper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/theme7/js/vendor/isotope.pkgd.min.js') }}"></script>
   
</body>
</html>