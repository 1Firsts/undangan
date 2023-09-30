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

@yield('content')
	
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
	            		<div class="uk24 text-white">The Wedding Celebration of</div>
		                <h1 class="caption-heading">Adam & Hawa</h1>
		                <p class="uk21">10 September 2018</p>
		                <div class="separator-banner"><i class="fa fa-heart"></i></div>
		            </div>   
	            </div>
	    	</div>
	    	<div class="item">
	            <img src="{{ url('https://images.unsplash.com/photo-1529636798458-92182e662485?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1738&q=80')}}" alt="Slider">
	            <div class="overlay-bg"></div>
	            <div class="container d-flex align-items-center h-center">
	            	<div class="wrap-caption">
	            		<div class="uk24 text-white">The Wedding Celebration of</div>
		                <h1 class="caption-heading">Adam & Hawa</h1>
		                <p class="uk21">10 September 2018</p>
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
							We invite you<br>to our special Wedding
						</h2>
						<div class="separator-section text-center"><div class="fa fa-heart"></div></div>
						
					</div>
				</div>

				<div class="row mt-5">

					<div class="col-sm-12 col-md-6">
						<div class="box-wedding">
							<div class="people">
								<img src="{{ asset('theme/theme1/images/dummy-img-600x600.jpg') }}" alt="" class="rounded-circle">
							</div>
							<div class="people-info">
								<div class="name">JOHN JOEL</div>
								<h3 class="position">The Groom</h3>
								<p>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium totam rem aperiam sem vitae sollicitudin scelerisque.</p>
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
								<img src="{{ asset('theme/theme1/images/dummy-img-600x600.jpg') }}" alt="" class="rounded-circle">
							</div>
							<div class="people-info">
								<div class="name">HAWA JOEL</div>
								<h3 class="position">The Bride</h3>
								<p>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium totam rem aperiam sem vitae sollicitudin scelerisque.</p>
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
							Our Love Story
						</h2>
						<div class="separator-section text-center"><div class="fa fa-heart"></div></div>
						
					</div>
				</div>

				<div class="row mt-5">

					<div class="col-sm-12 col-md-8 offset-md-2">
						<ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">First Meet</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">First Date</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">The Proposal</a>
						  </li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
						  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						  	<div class="text-center">
								<img src="{{ url('https://images.unsplash.com/photo-1668692376563-9ab7f24a4f32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80') }}" alt="" class="shadow-lg img-fluid mb-3">
								<h2>We meet in Bali</h2>
								<p>Morbi cursus efficitur felis quis placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vestibulum, sem vitae sollicitudin scelerisque, Morbi cursus efficitur felis quis placerat. Duis posuere auctor erat nec lobortis. Morbi cursus efficitur felis quis placerat. Duis pellentesque fermentum ex sed auctor. In id enim imperdiet, mollis ante a, fringilla ligula. Pellentesque vel ipsum et nulla scelerisque eleifend nec id dui.</p>
							</div>
						  </div>
						  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<div class="text-center">
								<img src="{{ url('https://images.unsplash.com/photo-1445575722865-82118e5084ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1734&q=80') }}" alt="" class="shadow-lg img-fluid mb-3">
								<h2>Endless park is our first date</h2>
								<p>Morbi cursus efficitur felis quis placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vestibulum, sem vitae sollicitudin scelerisque, Morbi cursus efficitur felis quis placerat. Duis posuere auctor erat nec lobortis. Morbi cursus efficitur felis quis placerat. Duis pellentesque fermentum ex sed auctor. In id enim imperdiet, mollis ante a, fringilla ligula. Pellentesque vel ipsum et nulla scelerisque eleifend nec id dui.</p>
							</div>
						  </div>
						  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
							<div class="text-center">
								<img src="{{ url('https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80') }}" alt="" class="shadow-lg img-fluid mb-3">
								<h2>The best moment for our</h2>
								<p>Morbi cursus efficitur felis quis placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vestibulum, sem vitae sollicitudin scelerisque, Morbi cursus efficitur felis quis placerat. Duis posuere auctor erat nec lobortis. Morbi cursus efficitur felis quis placerat. Duis pellentesque fermentum ex sed auctor. In id enim imperdiet, mollis ante a, fringilla ligula. Pellentesque vel ipsum et nulla scelerisque eleifend nec id dui.</p>
							</div>
						  </div>
						</div>

					
					</div>
				</div>

				<div class="row mt-5">
					<div class="col-sm-12 col-md-8 offset-md-2">
						<h2 class="section-heading text-center">
							Our Favorite Song
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
							"There is only one happiness in life, to love and be loved". 
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
							Wedding Events
						</h2>
						<div class="separator-section text-center"><div class="fa fa-heart"></div></div>
						
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-sm-12 col-md-12">

						<div class="box-events">
							<div class="box-event bgi-cover-center" data-background="{{ asset('theme/theme1/images/dummy-img-1920x900.jpg')}}">
								<div class="event-location">
									<a href="#"><i class="fa fa-facebook"></i></a> Check location here
								</div>
								<div class="event-info col-md-5 offset-md-6">
									<h2>Wedding Ceremony</h2>
									<p class="font-weight-bold">HOTEL SHERATON<br> Jl. Tuanku Tambusai no.55 <br>Pekanbaru, Riau</p> 
									<p class="mb-0">September 10, 2019</p>
									<p> 14:00 - 17:00 pm</p>
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
							Photo Gallery
						</h2>
						<div class="separator-section text-center"><div class="fa fa-heart"></div></div>
						
					</div>
				</div>
				<div class="row popup-gallery gutter-5 mt-5">
					<!-- Item 1 -->
					<div class="col-sm-6 col-md-3">
						<div class="box-gallery">
							<a href="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" title="Gallery #1">
								<img src="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" alt="" class="img-fluid">
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
							<a href="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" title="Gallery #2">
								<img src="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" alt="" class="img-fluid">
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
							<a href="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" title="Gallery #3">
								<img src="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" alt="" class="img-fluid">
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
							<a href="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" title="Gallery #4">
								<img src="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" alt="" class="img-fluid">
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
							<a href="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" title="Gallery #5">
								<img src="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" alt="" class="img-fluid">
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
							<a href="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" title="Gallery #6">
								<img src="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" alt="" class="img-fluid">
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
							<a href="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" title="Gallery #7">
								<img src="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" alt="" class="img-fluid">
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
							<a href="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" title="Gallery #8">
								<img src="{{ asset('theme/theme1/images/dummy-img-600x500.jpg')}}" alt="" class="img-fluid">
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
	<div class="section bgi-cover-center bg-primary" data-background="{{ asset('theme/theme1/images/dummy-img-1920x900-2.jpg')}}">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center">
							Friends Says
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
										<p class="uk24">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error <a href="#">@rometheme</a> sit voluptatem accusantium dolore mque laudantium, totam rem aperiam </p>
										<div class="media mt-5">
											<img src="{{ asset('theme/theme1/images/dummy-img-600x600.jpg')}}" alt="" class="rounded-circle">
										</div>
										<p class="quote-name">
											John Doel <span>Graphicriver</span>
										</p>                        
									</div>
								</div>
							</div>

							<!-- Item 2 -->
							<div class="item">
								<div class="rs-testimonial-3">
									<div class="quote-box">
										<p class="uk24">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error <a href="#">@rometheme</a> sit voluptatem accusantium dolore mque laudantium, totam rem aperiam </p>
										<div class="media mt-5">
											<img src="{{ asset('theme/theme1/images/dummy-img-600x600.jpg')}}" alt="" class="rounded-circle">
										</div>
										<p class="quote-name">
											Laura Doel <span>Themeforest</span>
										</p>                        
									</div>
								</div>
							</div>

							<!-- Item 3 -->
							<div class="item">
								<div class="rs-testimonial-3">
									<div class="quote-box">
										<p class="uk24">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error <a href="#">@rometheme</a> sit voluptatem accusantium dolore mque laudantium, totam rem aperiam </p>
										<div class="media mt-5">
											<img src="{{ asset('theme/theme1/images/dummy-img-600x600.jpg')}}" alt="" class="rounded-circle">
										</div>
										<p class="quote-name">
											Donju Doel <span>Petugas THR</span>
										</p>                        
									</div>
								</div>
							</div>

							<!-- Item 4 -->
							<div class="item">
								<div class="rs-testimonial-3">
									<div class="quote-box">
										<p class="uk24">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error <a href="#">@rometheme</a> sit voluptatem accusantium dolore mque laudantium, totam rem aperiam </p>
										<div class="media mt-5">
											<img src="{{ asset('theme/theme1/images/dummy-img-600x600.jpg')}}" alt="" class="rounded-circle">
										</div>
										<p class="quote-name">
											John Doel <span>Themeforest</span>
										</p>                        
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
							Don't Miss it
						</h1>
						<p class="uk18 text-center text-primary-light">10 September 2015</p>
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
							<h3>Thank You</h3>
							<h1 class="text-primary">Adam & Hawa</h1>
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
		
		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<p class="mt-3 text-center">Copyright 2019 © <span class="text-primary">Alife HTML Template</span>. Designed by <span class="text-primary">Rometheme.</span></p> 
					</div>
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