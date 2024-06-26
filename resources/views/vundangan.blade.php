<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Website Undangan Pernikahan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('undangan/css/bootstrap.min.css') }}" /><!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{ asset('undangan/css/font-awesome.min.css') }}" /><!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="{{ asset('undangan/css/style.css') }}" /><!-- Style -->
	<link rel="stylesheet" type="text/css" href="{{ asset('undangan/css/responsive.css') }}" /><!-- Responsive -->
	
	<!-- Color Scheme -->
	<link rel="stylesheet" type="text/css" href="{{ asset('undangan/css/colors/color.css') }}" title="color" /><!-- Color -->

	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('undangan/css/revolution/settings.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('undangan/css/revolution/navigation.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('undangan/css/revolution/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" />
</head>
<body>

	<div class="page-load">
		<div class="pageloader">
			<div class="heart">
				<span class="heartL"></span>
				<span class="heartR"></span>
				<span class="square"></span>
			</div>
			<span class="shadow"></span>
		</div>
	</div>
	<div class="theme-layout">
		<header class="stick">
			<div class="topbar">
				<div class="container">
					<ul class="social-btns">
					</ul>
				</div>
			</div><!-- Top Bar -->
			<div class="container">
				<nav class="logomenu-sec">
					<ul>
						<li class="menu-item-has-children"><a href="index.html" title="">Home</a>
						</li>
						<li class="menu-item-has-children"><a href="#" title="">Tentang</a>
						</li>
						<li><a class="custom-scroll" href="#scroll-story-section" title="">Keunggulan</a></li>
					</ul>
					<div class="logo"><a href="index.html" title=""><img src="{{ asset('undangan/images/logo.png') }}" alt="" /></a></div>
					<ul>
						<li><a class="custom-scroll" href="#scroll-team-section" title="">Pembayaran</a></li>
						<li><a class="custom-scroll" href="#scroll-gallery-section" title="">Tema</a></li>
						<li><a class="custom-scroll" href="#scroll-rsvp-section" title="">Promo</a></li>
					</ul>
				</nav>
			</div>
		</header><!-- Header -->

		<div class="responsive-header">
			<div class="topbar">
				<div class="container">
					<ul class="social-btns">
					</ul>
				</div>
			</div><!-- Top Bar -->
			<div class="logo-menu">
				<div class="logo"><a href="index.html"><img src="{{ asset('undangan/images/logo.png') }}" alt="" /></a></div>
				<span class="menu-btn"><i class="fa fa-align-center"></i></span>
				<div class="responsive-menu">
					<span class="close-btn"><i class="fa fa-times"></i></span>
					<ul>
						<li class="menu-item-has-children"><a href="index.html" title="">Home</a><i class="fa fa-angle-down"></i>
						</li>
						<li class="menu-item-has-children"><a href="#" title="">Tentang</a><i class="fa fa-angle-down"></i>
						</li>
						<li><a class="custom-scroll" href="#scroll-story-section" title="">Keunggulan</a></li>
						<li class="menu-item-has-children"><a class="custom-scroll" href="#scroll-blog-section" title="">Event</a><i class="fa fa-angle-down"></i></li>
						<li><a class="custom-scroll" href="#scroll-gallery-section" title="">Pembayaran</a></li>
						<li><a class="custom-scroll" href="#scroll-rsvp-section" title="">Tema</a></li>
						<li class="menu-item-has-children"><a href="#" title="">Promo</a><i class="fa fa-angle-down"></i></li>
					</ul>
				</div>
			</div>
		</div><!-- Responsive Header -->

		<section>
			<div class="block no-padding">
				<div class="row">
					<div class="col-md-12">
						<div class="creative-slider">
							<div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;">
								<ul>
									<li data-index="rs-1" data-transition="papercut" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-title="Slide 2">
										<!-- MAIN IMAGE -->
										<img src="{{ asset('undangan/images/resource/gambar2.png') }}"  alt=""  data-bgposition="center center"  data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" data-kenburns="on" data-duration="10000" data-ease="Linear.explainpaseNone" data-scalestart="120" data-scaleend="100" class="rev-slidebg" data-no-retina>

										<!-- LAYER NR. 1 -->
										<div class="tp-caption layer4 tp-resizeme rs-parallaxlevel-3" 
											id="slide1-layer-1" 
											data-x="center" data-hoffset="-250" 
											data-y="center" data-voffset="-250" 
											data-width="['auto','auto','auto','auto']"
											data-height="['auto','auto','auto','auto']"
											data-transform_idle="o:1;"
											data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
											data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
											data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
											data-start="1000" 
											data-splitin="chars" 
											data-splitout="none" 
											data-responsive_offset="on" 
											data-elementdelay="0.05" 
											style="font-size:36px;letter-spacing:0.2px;">Welcome To Our, 
										</div> 		

										<!-- LAYER NR. 2 -->
										<div class="tp-caption layer5 tp-resizeme rs-parallaxlevel-3" 
											id="slide1-layer-2" 
											data-x="center" data-hoffset="" 
											data-y="center" data-voffset="-100" 
											data-width="['auto','auto','auto','auto']"
											data-height="['auto','auto','auto','auto']"
											data-transform_idle="o:1;"
											data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;" 
											data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
											data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
											data-start="1200" 
											data-splitin="chars" 
											data-splitout="none" 
											data-responsive_offset="on" 
											data-elementdelay="0.05" 
											style="font-size:197px">Wedding
										</div> 		

										<!-- LAYER NR. 3 -->
										<div class="tp-caption layer5 tp-resizeme rs-parallaxlevel-3" 
											id="slide1-layer-3" 
											data-x="center" data-hoffset="" 
											data-y="center" data-voffset="100" 
											data-width="['auto','auto','auto','auto']"
											data-height="['auto','auto','auto','auto']"
											data-transform_idle="o:1;"
											data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;" 
											data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
											data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
											data-start="1400" 
											data-splitin="chars" 
											data-splitout="none" 
											data-responsive_offset="on" 
											data-elementdelay="0.05" 
											style="font-size:197px;padding-left:20px">Invitation!
										</div> 		


										<!-- LAYER NR. 4 -->
										<div class="tp-caption tp-resizeme" 
											id="slide1-layer4" 
											data-x="center" data-hoffset="60" 
											data-y="bottom" data-voffset="100" 
											data-width="['auto','auto','auto','auto']"
											data-height="['auto','auto','auto','auto']"
											data-transform_idle="o:1;"
											data-transform_in="x:50px;opacity:0;s:1000;e:Power3.easeOut;" 
											data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"							
											data-start="3400" 
											data-splitin="none" 
											data-splitout="none" 
											data-responsive_offset="on" 
											data-elementdelay="0.7" 									
											style="">
										</div>
									</li>

									<li data-index="rs-2" data-transition="papercut" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-title="Slide 2">
										<!-- MAIN IMAGE -->
										<img   src="{{ asset('undangan/images/resource/gambar1.png') }}"  alt=""  data-bgposition="center center"  data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" data-kenburns="on" data-duration="10000" data-ease="Linear.explainpaseNone" data-scalestart="120" data-scaleend="100" class="rev-slidebg" data-no-retina>

										<!-- LAYER NR. 1 -->
										<div class="tp-caption layer4 tp-resizeme rs-parallaxlevel-3" 
											id="slide2-layer-1" 
											data-x="center" data-hoffset="-250" 
											data-y="center" data-voffset="-250" 
											data-width="['auto','auto','auto','auto']"
											data-height="['auto','auto','auto','auto']"
											data-transform_idle="o:1;"
											data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
											data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
											data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
											data-start="1000" 
											data-splitin="chars" 
											data-splitout="none" 
											data-responsive_offset="on" 
											data-elementdelay="0.05" 
											style="font-size:36px;letter-spacing:0.2px;">Welcome To Our, 
										</div> 		

										<!-- LAYER NR. 2 -->
										<div class="tp-caption layer5 tp-resizeme rs-parallaxlevel-3" 
											id="slide2-layer-2" 
											data-x="center" data-hoffset="" 
											data-y="center" data-voffset="-100" 
											data-width="['auto','auto','auto','auto']"
											data-height="['auto','auto','auto','auto']"
											data-transform_idle="o:1;"
											data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;" 
											data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
											data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
											data-start="1200" 
											data-splitin="chars" 
											data-splitout="none" 
											data-responsive_offset="on" 
											data-elementdelay="0.05" 
											style="font-size:197px">Wedding
										</div> 		

										<!-- LAYER NR. 3 -->
										<div class="tp-caption layer5 tp-resizeme rs-parallaxlevel-3" 
											id="slide2-layer-3" 
											data-x="center" data-hoffset="" 
											data-y="center" data-voffset="100" 
											data-width="['auto','auto','auto','auto']"
											data-height="['auto','auto','auto','auto']"
											data-transform_idle="o:1;"
											data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;" 
											data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
											data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
											data-start="1400" 
											data-splitin="chars" 
											data-splitout="none" 
											data-responsive_offset="on" 
											data-elementdelay="0.05" 
											style="font-size:197px;padding-left:20px">Invitation!
										</div> 		


										<!-- LAYER NR. 4 -->
										<div class="tp-caption tp-resizeme" 
											id="slide2-layer4" 
											data-x="center" data-hoffset="60" 
											data-y="bottom" data-voffset="100" 
											data-width="['auto','auto','auto','auto']"
											data-height="['auto','auto','auto','auto']"
											data-transform_idle="o:1;"
											data-transform_in="x:50px;opacity:0;s:1000;e:Power3.easeOut;" 
											data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"							
											data-start="3400" 
											data-splitin="none" 
											data-splitout="none" 
											data-responsive_offset="on" 
											data-elementdelay="0.7" 									
											style="">
										</div>
									</li>

									<li data-index="rs-3" data-transition="papercut" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-title="Slide 2">
										<!-- MAIN IMAGE -->
										<img src="{{ asset('undangan/images/resource/gambar3.png') }}"  alt=""  data-bgposition="center center"  data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" data-kenburns="on" data-duration="10000" data-ease="Linear.explainpaseNone" data-scalestart="120" data-scaleend="100" class="rev-slidebg" data-no-retina>

										<!-- LAYER NR. 1 -->
										<div class="tp-caption layer4 tp-resizeme rs-parallaxlevel-3" 
											id="slide3-layer-1" 
											data-x="center" data-hoffset="-250" 
											data-y="center" data-voffset="-250" 
											data-width="['auto','auto','auto','auto']"
											data-height="['auto','auto','auto','auto']"
											data-transform_idle="o:1;"
											data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
											data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
											data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
											data-start="1000" 
											data-splitin="chars" 
											data-splitout="none" 
											data-responsive_offset="on" 
											data-elementdelay="0.05" 
											style="font-size:36px;letter-spacing:0.2px;">Welcome To Our, 
										</div> 		

										<!-- LAYER NR. 2 -->
										<div class="tp-caption layer5 tp-resizeme rs-parallaxlevel-3" 
											id="slide3-layer-2" 
											data-x="center" data-hoffset="" 
											data-y="center" data-voffset="-100" 
											data-width="['auto','auto','auto','auto']"
											data-height="['auto','auto','auto','auto']"
											data-transform_idle="o:1;"
											data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;" 
											data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
											data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
											data-start="1200" 
											data-splitin="chars" 
											data-splitout="none" 
											data-responsive_offset="on" 
											data-elementdelay="0.05" 
											style="font-size:197px">Wedding
										</div> 		

										<!-- LAYER NR. 3 -->
										<div class="tp-caption layer5 tp-resizeme rs-parallaxlevel-3" 
											id="slide3-layer-3" 
											data-x="center" data-hoffset="" 
											data-y="center" data-voffset="100" 
											data-width="['auto','auto','auto','auto']"
											data-height="['auto','auto','auto','auto']"
											data-transform_idle="o:1;"
											data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;" 
											data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
											data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
											data-start="1400" 
											data-splitin="chars" 
											data-splitout="none" 
											data-responsive_offset="on" 
											data-elementdelay="0.05" 
											style="font-size:197px;padding-left:20px">Invitation!
										</div> 		


										<!-- LAYER NR. 4 -->
										<div class="tp-caption tp-resizeme" 
											id="slide3-layer4" 
											data-x="center" data-hoffset="60" 
											data-y="bottom" data-voffset="100" 
											data-width="['auto','auto','auto','auto']"
											data-height="['auto','auto','auto','auto']"
											data-transform_idle="o:1;"
											data-transform_in="x:50px;opacity:0;s:1000;e:Power3.easeOut;" 
											data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"							
											data-start="3400" 
											data-splitin="none" 
											data-splitout="none" 
											data-responsive_offset="on" 
											data-elementdelay="0.7" 									
											style="">
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- Creative Slider  -->
				</div>
			</div>		
		</section>

		<section class="scroll-sction" id="scroll-story-section">
			<div class="block pattern remove-gap">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="stories-sec">								
								<div class="stories-post video">
									<div class="row">
										<div class="col-md-6">
											<div class="stories-thumb fromleft lightbox">
												<img src="{{ asset('undangan/images/resource/undangan.png') }}" alt="" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="stories-detail fromright">
												<div class="title">
													<h4>Undangan <span> <br>Pernikahan</span></h4>
												</div>
												<p>Undangan pernikahan digital adalah alternatif yang populer untuk undangan fisik yang dapat dibagikan secara online kepada teman, keluarga, dan tamu undangan Anda.</p>
												<p>Selain itu, Anda juga dapat menggunakan platform atau situs web khusus yang dirancang untuk membuat undangan pernikahan digital. Ini akan memberikan berbagai fitur tambahan seperti manajemen RSVP yang lebih baik, kemampuan untuk membagikan galeri foto, dan banyak lagi</p>
											</div>
										</div>
									</div>
								</div>
							</div><!-- Stories Sec -->
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block pattern">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="your-gifts style2">
								<div class="row">
									<div class="col-md-7">
										<div class="gift-carousel fromleft">
											<div class="gift-post">
												<img src="{{ asset('undangan/images/resource/logobank.png') }}" alt="" />
												<div class="gift-info">
													<img class="fr-img" src="{{ asset('undangan/images/resource/dana.png') }}" alt="" />
													<img class="bk-img" src="{{ asset('undangan/images/resource/bni.png') }}" alt="" />
												</div>
											</div>
											<div class="gift-post">
												<img src="{{ asset('undangan/images/resource/logobank.png') }}" alt="" />
												<div class="gift-info">
													<img class="fr-img" src="{{ asset('undangan/images/resource/dana.png') }}" alt="" />
													<img class="bk-img" src="{{ asset('undangan/images/resource/linkaja.png') }}" alt="" />
												</div>
											</div>
											<div class="gift-post">
												<img src="{{ asset('undangan/images/resource/logobank.png') }}" alt="" />
												<div class="gift-info">
													<img class="fr-img" src="{{ asset('undangan/images/resource/mandiri.png') }}" alt="" />
													<img class="bk-img" src="{{ asset('undangan/images/resource/ovo.png') }}" alt="" />
												</div>
											</div>
											<div class="gift-post">
												<img src="{{ asset('undangan/images/resource/logobank.png') }}" alt="" />
												<div class="gift-info">
													<img class="fr-img" src="{{ asset('undangan/images/resource/permata.png') }}" alt="" />
													<img class="bk-img" src="{{ asset('undangan/images/resource/qris.png') }}" alt="" />
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="gift-info1 fromright">
											<div class="title">
												<h4>Metode <span><br /> Pembayaran</span></h4>
											</div>
											<p>Tersedia berbagai macam jenis pembayaran untuk mendukung kemudahan dalam pemesanan.</p>
											<img src="{{ asset('undangan/images/design.png') }}" alt="" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="our-blog remove-ext">
								<div class="row">

									<div class="col-md-6">
										<div class="blog-post post-carousel fromleft">
											<div class="carousel-post">
												<span>Pesan Sekarang</span>
												<h2>Yukk!</h2>
												<img src="{{ asset('undangan/images/resource/wait1.png') }}" alt="" />
											</div>
											<div class="carousel-post">
												<span>Pesan Sekarang</span>
												<h2>Yukk!</h2>
												<img src="{{ asset('undangan/images/resource/wait2.png') }}" alt="" />
											</div>
											<div class="carousel-post">
												<span>Pesan Sekarang</span>
												<h2>Yukk!</h2>
												<img src="{{ asset('undangan/images/resource/wait3.png') }}" alt="" />
											</div>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="blog-post intro-div fromright">
											<div class="title">
												<h4>Pilihan <span><br /> Undangan</span></h4>
											</div>
											<p>Pilih dan Bagikan Undanganmu kepada Keluarga dan Teman-Teman, sedang ada Promo untuk sekarang ini jika membeli Undangan Online.</p>
											<a href="#" title="" class="btn2">Pesan Sekarang!</a>
										</div>
									</div>
									
									@foreach ($undangans as $undangan)
									<div class="col-md-6">
										<div class="blog-post author-post">
										<img src="{{ $undangan->file }}" alt="" />
										<div class="blog-post-padd">
											<div class="blog-post-padd-inner">
											<div class="post-detail">
												<ul class="post-meta">
												@foreach ($dataLinks as $dataLink)
												<h1><a href="{{ $dataLink->link }}">{{ $undangan->judul }}</a></h1>
												@endforeach
												<h6>Kategori {{ $undangan->category }}</h6>
												</ul>
												<h2>{{ $undangan->deskripsi }}</h2>
											</div>
											</div>
										</div>
										</div>
									</div>
									@endforeach

								</div>
							</div><!-- Our Blog -->
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="scroll-sction" id="scroll-rsvp-section">
			<div class="block pattern remove-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="attending-sec overlape style2">
								<div class="attending">
									<div class="row">
										<div class="col-md-6">
											<div class="attending-div fromleft">
												<div class="title">
													<h4>Dapatkan <span>Segera <br /> Sebelum kehabisan</span></h4>
												</div>
												<img src="{{ asset('undangan/images/design.png') }}" alt="" />
												<p>Kesempatan Mendapatkan Promo Sangat Terbatas, Ambil atau nyesel bertubi - tubi.</div>
										</div>

										<script>
											// Set the date we're counting down to (replace with your desired end date)
											var countDownDate = new Date("September 30, 2023 00:00:00").getTime();
									
											// Update the countdown every 1 second
											var x = setInterval(function() {
												// Get the current date and time
												var now = new Date().getTime();
									
												// Calculate the remaining time
												var distance = countDownDate - now;
									
												// Calculate days, hours, minutes, and seconds
												var days = Math.floor(distance / (1000 * 60 * 60 * 24));
												var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
												var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
												var seconds = Math.floor((distance % (1000 * 60)) / 1000);
									
												// Display the countdown in the "timer" element
												document.getElementById("timer").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
									
												// If the countdown is over, display a message
												if (distance < 0) {
													clearInterval(x);
													document.getElementById("timer").innerHTML = "EXPIRED";
												}
											}, 1000);
										</script>

										<div class="col-md-6">
											<div class="contect-form fromright">
												<img src="{{ asset('undangan/images/contact-img2.png') }}" alt="" />
													<div id="message">Undangan Online</div>
													<div class="event-time">
														<p>Promo Segera Berakhir</p>
														<h2>Rp. 70.000</h2>
														<span class="time" id="timer">Friday</span>
													</div>
												<span class="envelop-btn">
													<i class="fa fa-envelope-o"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div><!-- Attending Sec -->
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="block no-padding">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-map fromdown">
							<div id="map-canvas"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="block pattern remove-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="bottom-links overlape2 fromdown">
									
                                    <div class="pricing active fromdown">
										<span class="top-img"></span>
										<img src="{{ asset('undangan/images/logo2.png') }}" alt=""/>
										<div class="event-loc">
											<h4>Berbagi Undangan Jadi Lebih Mudah & Cepat​</h4>										
										</div>
										<p>Anda Sudah Tidak Sabar Lagi Untuk Segera Membagikan Undangan Pernikahan Digitalnya, Kan</p>
										<span class="pricing-btn">
											@foreach ($dataLinks as $dataLink)
												<a href="{{ $dataLink->link }}" title="{{ $dataLink->title }}">Hubungi Kami via WhatsApp</a>
											@endforeach
										</span>
									</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<div class="bottom-line">
		</div>

		<div class="forever-flowers">
			<div class="flwr flwr1" data-0="top:550px" data-500="top:600px" data-1200="top:1300px" data-3000="top:3100px" data-4500="top:5000px" data-6500="top:6600px" data-8000="top:8200px" data-10000="top:10100px">
				<img src="{{ asset('undangan/images/flwr1.png') }}" alt="">
			</div>		
			<div class="flwr flwr2" data-0="top:480px" data-500="top:520px" data-1200="top:1250px" data-3000="top:3200px" data-4500="top:4900px" data-6500="top:6700px" data-8000="top:9000px" data-10000="top:10200px">
				<img src="{{ asset('undangan/images/flwr2.png') }}" alt="">
			</div>		
			<div class="flwr flwr3" data-0="top:390px" data-500="top:540px" data-1200="top:1270px" data-3000="top:3600px" data-4500="top:4800px" data-6500="top:6890px" data-8000="top:8600px" data-10000="top:10250px">
				<img src="{{ asset('undangan/images/flwr3.png') }}" alt="">
			</div>		
			<div class="flwr flwr4" data-0="top:310px" data-500="top:750px" data-1200="top:1340px" data-3000="top:3750px" data-4500="top:4598px" data-6500="top:6890px" data-8000="top:8700px" data-10000="top:10120px">
				<img src="{{ asset('undangan/images/flwr4.png') }}" alt="">
			</div>		
			<div class="flwr flwr5" data-0="top:240px" data-500="top:630px" data-1200="top:1304px" data-3000="top:3670px" data-4500="top:4900px" data-6500="top:6840px" data-8000="top:8100px" data-10000="top:10130px">
				<img src="{{ asset('undangan/images/flwr5.png') }}" alt="">
			</div>		
			<div class="flwr flwr6" data-0="top:500px" data-500="top:550px" data-1200="top:1350px" data-3000="top:3250px" data-4500="top:4850px" data-6500="top:6950px" data-8000="top:8250px" data-10000="top:10150px">
				<img src="{{ asset('undangan/images/flwr1.png') }}" alt="">
			</div>		
			<div class="flwr flwr7" data-0="top:430px" data-500="top:540px" data-1200="top:1270px" data-3000="top:3220px" data-4500="top:4920px" data-6500="top:6720px" data-8000="top:9020px" data-10000="top:10220px">
				<img src="{{ asset('undangan/images/flwr2.png') }}" alt="">
			</div>		
			<div class="flwr flwr8" data-0="top:340px" data-500="top:570px" data-1200="top:1300px" data-3000="top:3630px" data-4500="top:4830px" data-6500="top:7010px" data-8000="top:8630px" data-10000="top:10280px">
				<img src="{{ asset('undangan/images/flwr3.png') }}" alt="">
			</div>		
			<div class="flwr flwr9" data-0="top:260px" data-500="top:730px" data-1200="top:1320px" data-3000="top:3720px" data-4500="top:4578px" data-6500="top:6870px" data-8000="top:8680px" data-10000="top:10100px">
				<img src="{{ asset('undangan/images/flwr4.png') }}" alt="">
			</div>		
			<div class="flwr flwr10" data-0="top:190px" data-500="top:690px" data-1200="top:1364px" data-3000="top:3730px" data-4500="top:4960px" data-6500="top:6900px" data-8000="top:8160px" data-10000="top:10190px">
				<img src="{{ asset('undangan/images/flwr5.png') }}" alt="">
			</div>		
		</div>

	<!-- Scripts -->
	<script src="{{ asset('undangan/js/jquery.min.js') }}" type="text/javascript"></script><!-- jQuery -->
	<script src="{{ asset('undangan/js/bootstrap.min.js') }}" type="text/javascript"></script><!-- Bootstrap -->
	<script src="{{ asset('undangan/js/owl.carousel.min.js') }}" type="text/javascript"></script><!-- Owl Carousel -->
	<script src="{{ asset('undangan/js/jquery.downCount.js') }}" type="text/javascript"></script><!-- Down Count -->
	<script src="{{ asset('undangan/js/jquery.poptrox.min.js') }}" type="text/javascript"></script><!-- LightBox -->

	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="{{ asset('undangan/js/revolution/jquery.themepunch.tools.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('undangan/js/revolution/jquery.themepunch.revolution.min.js') }}"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->	
	<script type="text/javascript" src="{{ asset('undangan/js/revolution/revolution.extension.actions.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('undangan/js/revolution/revolution.extension.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('undangan/js/revolution/revolution.extension.kenburn.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('undangan/js/revolution/revolution.extension.layeranimation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('undangan/js/revolution/revolution.extension.migration.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('undangan/js/revolution/revolution.extension.navigation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('undangan/js/revolution/revolution.extension.parallax.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('undangan/js/revolution/revolution.extension.slideanims.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('undangan/js/revolution/revolution.extension.video.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('undangan/js/revolution/revolution.initialize.js') }}"></script>	
	<script type="text/javascript" src="{{ asset('undangan/js/perfect-scrollbar.js') }}"></script><!-- Scroll Bar -->
	<script type="text/javascript" src="{{ asset('undangan/js/perfect-scrollbar.jquery.js') }}"></script><!-- Scroll Bar -->
	<script src="{{ asset('undangan/js/skrollr.min.js') }}" type="text/javascript"></script><!-- Skrollr -->
	<script src="{{ asset('undangan/js/onscreen.js') }}" type="text/javascript"></script><!-- OnScreen -->
	<script src="{{ asset('undangan/js/map-int1.js') }}" type="text/javascript"></script><!-- Map Int -->
	<script src="{{ asset('undangan/js/script.js') }}" type="text/javascript"></script><!-- Custom -->
    <script src="{{ url('https://maps.googleapis.com/maps/api/js?v=3.exp') }}"></script><!-- Google Map -->
	<!-- <script src="{{ url('https://w.soundcloud.com/player/api.js" type="text/javascript') }}"></script> -->
</body>
</html>