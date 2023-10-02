<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alife - Wedding Invitation HTML Template</title>
    <meta name="description" content="Alife is multipurpose template option for web developer or designer who needs a web template to promote and introduce their business company. Alife is designed for wedding invitation, wedding ceremony or wedding party.">
    <meta name="keywords" content="bride, bridesmaids, countdown, events, gallery, gifts, groom, groomsmen, invitation, rsvp, story, vintage, wedding, wedding template">
    <meta name="author" content="rometheme.net">  
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="{{ asset('theme/theme1/images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('theme/theme1/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('theme/theme1/images/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('theme/theme1/images/apple-touch-icon-114x114.png') }}">
	
	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/theme1/css/vendor/bootstrap.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/theme1/css/vendor/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/theme1/css/vendor/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/theme1/css/vendor/owl.theme.default.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/theme1/css/vendor/magnific-popup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/theme1/css/vendor/animate.min.css') }}">
	
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/theme1/css/style.css') }}" />
	
    <script src="{{ asset('theme/theme1/js/vendor/modernizr.min.js') }}"></script>

</head>

<body data-spy="scroll" data-target="#navbar-main">

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
    <div class="header header-1">    	

		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
			    <nav id="navbar-main" class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href="index.html">
						<img src="{{ asset('theme/theme1/images/logo.png')}}" alt="" />
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav ml-auto">
			                <li class="nav-item">
			                    <a class="nav-link" href="#home"></a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="#story"></a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="#events"></a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="#gallery"></a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="#jurnal"></a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="#rsvp"></a>
			                </li>
			            </ul>
			            <div class="sosmed-icon no-bg-hover float-right d-inline-flex">
							<a href="#"><i class="fa fa-facebook"></i></a> 
							<a href="#"><i class="fa fa-twitter"></i></a> 
							<a href="#"><i class="fa fa-instagram"></i></a> 
						</div>
			        </div>
			    </nav> <!-- -->
			</div>
		</div>

    </div>

	<!-- BANNER -->
	<div id="home" class="banner">
    	<div class="owl-carousel owl-theme full-screen">
	    	<div class="item">
	        	<img src="{{ url('https://images.unsplash.com/photo-1494955870715-979ca4f13bf0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80')}}" alt="Slider">
	        	<div class="overlay-bg"></div>
	        	<div class="container d-flex align-items-center h-center">
	            	<div class="wrap-caption">
						<div class="uk24 text-white">Perayaan Pernikahan</div>
		                <h1 class="caption-heading">{{ $seeorders1->nama_panggilan_pria }} & {{ $seeorders1->nama_panggilan_wanita }}</h1>
		                <p class="uk21">{{ date('d F Y', strtotime($seeorders1->hari_tgl)) }}</p>
						<div class="separator-banner"><i class="fa fa-heart"></i></div>
					</div>   
	            </div>
	    	</div>
	    	<div class="item">
	            <img src="{{ url('https://images.unsplash.com/photo-1529636798458-92182e662485?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1738&q=80')}}" alt="Slider">
	            <div class="overlay-bg"></div>
	            <div class="container d-flex align-items-center h-center">
	            	<div class="wrap-caption">
	            		<div class="uk24 text-white">Perayaan Pernikahan</div>
		                <h1 class="caption-heading">{{ $seeorders1->nama_panggilan_pria }} & {{ $seeorders1->nama_panggilan_wanita }}</h1>
		                <p class="uk21">{{ date('d F Y', strtotime($seeorders1->hari_tgl)) }}</p>
		                <div class="separator-banner"><i class="fa fa-heart"></i></div>
		            </div>   
	            </div>
	        </div> 
    	</div>
	    <div class="custom-nav owl-nav"></div>
    </div>

    <!-- ABOUT -->
	<div id="story" class="section">
		<div class="content-wrap">

			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center">
                        Kami mengundangmu untuk <br> Pernikahan spesial kami
						</h2>
						<div class="separator-section text-center"><div class="fa fa-heart"></div></div>
						
					</div>
				</div>

				<div class="row mt-5">

					<div class="col-sm-12 col-md-6">
						<div class="box-wedding">
							<div class="people">
								<img src="{{ asset($seeorders1->foto_pasangan1) }}" alt="" class="rounded-circle">
							</div>
							<div class="people-info">
								<div class="name">{{ $seeorders1->nama_lengkap_pria }}</div>
								<h3 class="position">Mempelai Pria</h3>
								<p>Dengan cinta dan rasa syukur yang mendalam, saya berjanji untuk selalu mencintai, merawat, dan melindungimu. Kehidupan ini akan kita jalani bersama, dengan semua kebahagiaan dan tantangan yang akan datang.</p>
							</div>
							<div class="sosmed-icon icon-bg-primary d-flex justify-content-center">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-instagram"></i></a> 
								<a href="#"><i class="fa fa-linkedin"></i></a> 
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-6">
						<div class="box-wedding">
							<div class="people">
								<img src="{{ asset($seeorders1->foto_pasangan2) }}" alt="" class="rounded-circle">
							</div>
							<div class="people-info">
								<div class="name">{{ $seeorders1->nama_lengkap_wanita }} </div>
								<h3 class="position">Mempelai Wanita</h3>
								<p>Pernikahan adalah janji suci, dan dengan penuh cinta, saya berjanji untuk selalu mendukungmu, merawatmu, dan mencintaimu dalam setiap momen kita bersama</p>
							</div>
							<div class="sosmed-icon icon-bg-primary d-flex justify-content-center">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-instagram"></i></a> 
								<a href="#"><i class="fa fa-linkedin"></i></a> 
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

    <!-- OUR PEOPLE -->
	<div class="section bgi-cover-center" data-background="{{ url('https://images.unsplash.com/photo-1495345679747-53991aedf9c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1587&q=80') }}">
		<div class="content-wrap">

			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center">
                        Kisah cinta kita
						</h2>
						<div class="separator-section text-center"><div class="fa fa-heart"></div></div>
						
					</div>
				</div>

				<div class="row mt-5">

					<div class="col-sm-12 col-md-8 offset-md-2">
						<ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Pertemuan Pertama</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Kencan Pertama</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Proposal</a>
						  </li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
						  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						  	<div class="text-center">
								<img src="{{ url('https://images.unsplash.com/photo-1668692376563-9ab7f24a4f32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80') }}" alt="" class="shadow-lg img-fluid mb-3">
								<h2>Pertama Kali Bertemu</h2>
								<p>Momen pertama kali bertemu adalah saat yang akan selalu saya kenang, itu adalah awal dari cerita cinta kita.</p>
							</div>
						  </div>
						  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<div class="text-center">
								<img src="{{ url('https://images.unsplash.com/photo-1445575722865-82118e5084ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1734&q=80') }}" alt="" class="shadow-lg img-fluid mb-3">
								<h2>Kencan Pertama Kami</h2>
								<p>Kencan pertama kami adalah awal dari petualangan cinta yang tak terlupakan</p>
							</div>
						  </div>
						  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
							<div class="text-center">
								<img src="{{ url('https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80') }}" alt="" class="shadow-lg img-fluid mb-3">
								<h2>Momen Terbaik Untuk Kita</h2>
								<p>Momen terbaik untuk kita adalah ketika kita bersama, mengejar impian, dan merayakan kebahagiaan bersama-sama</p>
							</div>
						  </div>
						</div>

					
					</div>
				</div>

				<div class="row mt-5">
					<div class="col-sm-12 col-md-8 offset-md-2">
						<h2 class="section-heading text-center">
                        Lagu Favorit Kami
						</h2>
						<!-- 1:1 aspect ratio -->
						<div class="embed-responsive embed-responsive-1by1 audio-wrap">
						  <iframe class="embed-responsive-item" src="{{ url('https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F34019569&auto_play=false&show_artwork=true&color=0066cc') }}"></iframe>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

    

    <!-- CTA -->
	<div class="section bgi-cover-center bg-overlay-secondary" data-background="{{ url('https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80')}}">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-8 offset-md-2">
						<h1 class="text-center text-white">
                        "Hanya ada satu kebahagiaan dalam hidup, mencintai dan dicintai". 
						</h1>
						<p class="uk18 text-center text-primary-light">- George Sands -</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- EVENTS -->
	<div id="events">
		<div class="content-wrap">
			

			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center">
                        Acara Pernikahan
						</h2>
						<div class="separator-section text-center"><div class="fa fa-heart"></div></div>
						
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-sm-12 col-md-12">

						<div class="box-events">
							<div class="box-event bgi-cover-center" data-background="{{ url('https://images.unsplash.com/photo-1600783245777-080fd7ff9253?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80') }}">
								<div class="event-location">
									<a href="https://www.google.com/maps/search/?api=1&query={{ $seeorders1->lokasi }}"><i class="fa fa-google"></i></a> Cek Lokasi
								</div>
								<div class="event-info col-md-5 offset-md-6">
									<h2>Upacara Pernikahan</h2>
									<p class="font-weight-bold">{{ $seeorders1->lokasi }}</p> 
									<p class="mb-0">{{ \Carbon\Carbon::parse($seeorders1->hari_tgl)->format('F d, Y') }}</p>
									@php
                                        $time = DateTime::createFromFormat('H:i:s', $seeorders1->waktu);
                                        $formattedTime = $time->format('h:i A') . ' - ' . $time->add(new DateInterval('PT3H'))->format('h:i A');
                                    @endphp
                                    <p>{{ $formattedTime }}</p>
								</div>
							</div>

						</div>

					</div>
					
				</div>

			</div>
		</div>
	</div>

	

	<!-- PORTFOLIO -->
	<div id="gallery" class="section">
		<div class="content-wrap">
			

			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center">
                        Galeri foto
						</h2>
						<div class="separator-section text-center"><div class="fa fa-heart"></div></div>
						
					</div>
				</div>
				<div class="row popup-gallery gutter-5 mt-5">
					<!-- Item 1 -->
					<div class="col-sm-6 col-md-3">
						<div class="box-gallery">
							<a href="{{ asset($seeorders1->foto_galeri1) }}" title="Gallery #1">
								<img src="{{ asset($seeorders1->foto_galeri1) }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- Item 2 -->
					<div class="col-sm-6 col-md-3">
						<div class="box-gallery">
							<a href="{{ asset($seeorders1->foto_galeri2) }}" title="Gallery #2">
								<img src="{{ asset($seeorders1->foto_galeri2) }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- Item 3 -->
					<div class="col-sm-6 col-md-3">
						<div class="box-gallery">
							<a href="{{ asset($seeorders1->foto_galeri3) }}" title="Gallery #3">
								<img src="{{ asset($seeorders1->foto_galeri3) }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- Item 4 -->
					<div class="col-sm-6 col-md-3">
						<div class="box-gallery">
							<a href="{{ asset($seeorders1->foto_galeri4) }}" title="Gallery #4">
								<img src="{{ asset($seeorders1->foto_galeri4) }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- Item 5 -->
					<div class="col-sm-6 col-md-3">
						<div class="box-gallery">
							<a href="{{ asset($seeorders1->foto_galeri5) }}" title="Gallery #5">
								<img src="{{ asset($seeorders1->foto_galeri5) }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- Item 6 -->
					<div class="col-sm-6 col-md-3">
						<div class="box-gallery">
							<a href="{{ asset($seeorders1->foto_galeri6) }}" title="Gallery #6">
								<img src="{{ asset($seeorders1->foto_galeri6) }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- Item 7 -->
					<div class="col-sm-6 col-md-3">
						<div class="box-gallery">
							<a href="{{ asset($seeorders1->foto_galeri7) }}" title="Gallery #7">
								<img src="{{ asset($seeorders1->foto_galeri7) }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- Item 8 -->
					<div class="col-sm-6 col-md-3">
						<div class="box-gallery">
							<a href="{{ asset($seeorders1->foto_galeri8) }}" title="Gallery #8">
								<img src="{{ asset($seeorders1->foto_galeri8) }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					
				</div>

			</div>
		</div>
	</div>	

	<!-- OUR TESTIMONIALS -->
	<div class="section bgi-cover-center bg-primary" data-background="{{ url('https://images.unsplash.com/photo-1521633575100-0b4b6f968ffb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80')}}">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center">
							Beberapa Kutipan
						</h2>
						<div class="separator-section text-center"><div class="fa fa-heart"></div></div>
						
					</div>
				</div>

				<div class="row mt-5">

					<div class="col-sm-12 col-md-8 offset-md-2">
						
						<div id="car_item_1b" class="owl-carousel owl-theme">
							<!-- Item 1 -->
							<div class="item">
								<div class="rs-testimonial-3">
									<div class="quote-box">
										<p class="uk24">Pernikahan adalah bukan akhir dari perjalanan, melainkan awal dari petualangan bersama. Bersama, kita dapat menghadapi segala hal dengan cinta dan dukungan</p>
										                      
									</div>
								</div>
							</div>

							<!-- Item 2 -->
							<div class="item">
								<div class="rs-testimonial-3">
									<div class="quote-box">
										<p class="uk24">Setelah pernikahan, saatnya untuk membangun impian bersama. Bersama, kita bisa mencapai lebih banyak daripada yang kita bayangkan</p>
										                   
									</div>
								</div>
							</div>

							<!-- Item 3 -->
							<div class="item">
								<div class="rs-testimonial-3">
									<div class="quote-box">
										<p class="uk24">Ketika cinta dan komitmen menjadi dasar pernikahan, tak ada hal yang tak mungkin. Teruslah saling mendukung dan bertumbuh bersama</p>
										                     
									</div>
								</div>
							</div>

							<!-- Item 4 -->
							<div class="item">
								<div class="rs-testimonial-3">
									<div class="quote-box">
										<p class="uk24">Hidup setelah pernikahan adalah tentang menjalani kisah cinta yang indah. Tetap berpegang pada nilai-nilai kita dan bersama-sama kita bisa mencapai segalanya</p>
										                    
									</div>
								</div>
							</div>

						</div>


					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CTA -->
	<div class="section bgi-cover-center bg-overlay-secondary" data-background="{{ url('https://images.unsplash.com/photo-1519657502999-ab785d28a1f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80')}}">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h1 class="text-center text-white">
                        Jangan lewatkan itu
						</h1>
                        
                        <p class="uk18 text-center text-primary-light">{{ date('d F Y', strtotime($seeorders1->hari_tgl)) }}</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- FOOTER SECTION -->
	<div class="footer">
		
			<div class="container">
				
				<div class="row">
					<div class="col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3">
						<div class="spacer-content"></div>
						<div class="text-center">
							<h3>Terima kasih</h3>
							<h1 class="text-primary">{{ $seeorders1->nama_panggilan_pria }} & {{ $seeorders1->nama_panggilan_wanita }}</h1>
							<div class="separator-banner"><i class="fa fa-heart"></i></div>
							<div class="sosmed-icon d-inline-flex">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-instagram"></i></a> 
								<a href="#"><i class="fa fa-pinterest"></i></a> 
								<a href="#"><i class="fa fa-linkedin"></i></a> 
							</div>
						</div>
						<div class="mt-5"></div>
					</div>	
				</div>
			</div>
		
		
		
	</div>
	
	<!-- JS VENDOR -->
	<script src="{{ asset('theme/theme1/js/vendor/jquery.min.js') }}"></script>
	<script src="{{ asset('theme/theme1/js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('theme/theme1/js/vendor/owl.carousel.js') }}"></script>
	<script src="{{ asset('theme/theme1/js/vendor/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('theme/theme1/js/vendor/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('theme/theme1/js/vendor/imagesloaded.pkgd.min.js') }}"></script>

	<!-- SENDMAIL -->
	<script src="{{ asset('theme/theme1/js/vendor/validator.min.js') }}"></script>
	<script src="{{ asset('theme/theme1/js/vendor/form-scripts.js') }}"></script>

	<!-- GOOGLEMAP -->
	<script src="{{ asset('theme/theme1/js/googlemap-setting.js') }}"></script>
	<script async defer src="{{ url('https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU&callback=initMap') }}"> </script>

	<script src="{{ asset('theme/theme1/js/script.js') }}"></script>

</body>
</html>