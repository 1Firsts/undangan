<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Joolie - Wedding Store HTML Template</title>
      <meta name="format-detection" content="telephone=no">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/x-icon" href="{{ asset('theme/theme5/img/icons/favicon.png') }}">
      <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}">
      <link href="{{ url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Sulphur+Point:wght@300;400;700&display=swap') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('theme/theme5/css/style.css') }}">
   </head>
   <body>
   @yield('content')
      <!-- == WRAPPER ================== -->
      <div class="wrapper home">
         <!-- == HEADER ================== -->
         <header class="header">
            <div class="header__body">
               <div class="header__top">
                  <div class="header__top-column" data-da="header__menu,last,600">
                  </div>
                  <div class="header__top-column">
                  </div>
               </div>
               <div class="header__main">
                  <div class="header__burger">
                     <div class="burger-wrap">
                        <div class="burger" data-activEl="header__menu">
                           <span></span>
                           <span></span>
                           <span></span>
                           <span></span>
                        </div>
                     </div>
                  </div>
                  <nav class="header__menu">
                     <ul class="header__menu-list">
                        
                     </ul>
                  </nav>
                  <div class="header__logo logo">
                     <a href="index.html">
                     <img class="img-svg" src="{{ asset('theme/theme5/img/logo/logo.svg')}}" alt="logo">
                     </a>
                  </div>
                  <div class="header__action">
                     <ul class="header__action-list">
                        
                     </ul>
                  </div>
               </div>
            </div>
         </header>
         <!-- == // HEADER ================== -->
         <!-- == PAGE CONTENT ================== -->
         <main class="page">
            <!-- == PROMO SLIDER ================== -->
            <section class="promo-slider _parallax">
               <!-- <div class="promo-slider__decor_1 layer" data-depth="0.30">
                  <img src="{{ asset('theme/theme5/img/promo-slider/flowers1.jpg')}}" alt="flowers">
               </div>
               <div class="promo-slider__decor_2 layer" data-depth="0.15">
                  <img src="{{ asset('theme/theme5/img/promo-slider/flowers2.jpg')}}" alt="flowers">
               </div> -->
               <div class="promo-slider__bg swiper-container">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide ibg">
                        <img data-src="{{ url('https://images.unsplash.com/photo-1606800052052-a08af7148866?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80')}}" src="{{ asset('theme/theme5/img/promo-slider/1x1.png')}}" class="swiper-lazy" alt="bg">
                     </div>
                     <div class="swiper-slide ibg">
                        <img data-src="{{ url('https://images.unsplash.com/photo-1492176861288-6b481cfad893?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80')}}" src="{{ asset('theme/theme5/img/promo-slider/1x1.png')}}" class="swiper-lazy" alt="bg">
                     </div>
                     <div class="swiper-slide ibg">
                        <img data-src="{{ url('https://images.unsplash.com/photo-1460978812857-470ed1c77af0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1295&q=80')}}" src="{{ asset('theme/theme5/img/promo-slider/1x1.png')}}" class="swiper-lazy" alt="bg">
                     </div>
                  </div>
               </div>
               <div class="promo-slider__content">
                  <div class="swiper-container">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="promo-slider__inner">
                              <div class="promo-slider__suptitle suptitle">
                                 Jangan lupa untuk hadir
                              </div>
                              <h1 class="promo-slider__title title-1">
                                 Pernikahan <br>
                                 {{ $seeorders5->nama_panggilan_pria }} &amp; {{ $seeorders5->nama_panggilan_wanita }}
                              </h1>
                              <div class="promo-slider__subtitle">
                                 {{ date('d F Y', strtotime($seeorders5->hari_tgl)) }}.
                              </div>
                              
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="promo-slider__inner">
                              <div class="promo-slider__suptitle suptitle">
                                 Jangan lupa untuk hadir
                              </div>
                              <h1 class="promo-slider__title title-1">
                              Pernikahan <br>
                                 {{ $seeorders5->nama_panggilan_pria }} &amp; {{ $seeorders5->nama_panggilan_wanita }}
                              </h1>
                              <div class="promo-slider__subtitle">
                              {{ date('d F Y', strtotime($seeorders5->hari_tgl)) }}.
                              </div>
                              
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="promo-slider__inner">
                              <div class="promo-slider__suptitle suptitle">
                                 Jangan lupa untuk hadir
                              </div>
                              <h1 class="promo-slider__title title-1">
                              Pernikahan <br>
                                 {{ $seeorders5->nama_panggilan_pria }} &amp; {{ $seeorders5->nama_panggilan_wanita }}
                              </h1>
                              <div class="promo-slider__subtitle">
                              {{ date('d F Y', strtotime($seeorders5->hari_tgl)) }}.
                              </div>
                             
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </section>
            <!-- == // PROMO SLIDER ================== -->
            
            <!-- == PRODUCTS CATEGORY ================== -->
            <section class="products-category">
               <div class="container">
                  <div class="products-category__head head">
                     <div class="head__suptitle suptitle">
                        Sebuah Informasi
                     </div>
                     <h3 class="head__title title-3"> 
                        Pernikahan
                     </h3>
                     <div class="head__text text">Foto Pasangan Mempelai Pria dan Wanita</div>
                  </div>
               </div>
               <div class="products-category__list swiper-container" data-mobile="false">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <a href="shop.html" class="products-category__item category-card">
                           <div class="category-card__front">
                              
                           </div>
                           <div class="category-card__back">
                              <div class="category-card__img ibg">
                                 <img class="lazy" data-src="{{ asset('theme/theme5/img/placeholder/478x700.jpg')}}" src="{{ asset('theme/theme5/img/products-category/placeholder.jpg')}}" alt="img">
                              </div>
                              <div class="category-card__content">
                                 
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="shop.html" class="products-category__item category-card">
                           <div class="category-card__front">
                              <div class="category-card__img ibg">
                                 <img class="lazy" data-src="{{ asset($seeorders5->foto_pasangan1) }}" src="{{ asset($seeorders5->foto_pasangan1) }}" alt="img">
                              </div>
                              <div class="category-card__content">
                                 <div class="category-card__icon">
                                    
                                 </div>
                              </div>
                           </div>
                           <div class="category-card__back">
                              <div class="category-card__img ibg">
                                 <img class="lazy" data-src="{{ asset($seeorders5->foto_pasangan1) }}" src="{{ asset($seeorders5->foto_pasangan1) }}" alt="img">
                              </div>
                              <div class="category-card__content">
                                 <div class="category-card__icon">
                                    
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="shop.html" class="products-category__item category-card">
                           <div class="category-card__front">
                              <div class="category-card__img ibg">
                                 <img class="lazy" data-src="{{ asset($seeorders5->foto_pasangan2) }}" src="{{ asset($seeorders5->foto_pasangan2) }}" alt="img">
                              </div>
                              <div class="category-card__content">
                                 <div class="category-card__icon">
                                    
                                 </div>
                              </div>
                           </div>
                           <div class="category-card__back">
                              <div class="category-card__img ibg">
                                 <img class="lazy" data-src="{{ asset($seeorders5->foto_pasangan2) }}" src="{{ asset($seeorders5->foto_pasangan2) }}" alt="img">
                              </div>
                              <div class="category-card__content">
                                 <div class="category-card__icon">
                                    
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="shop.html" class="products-category__item category-card">
                           <div class="category-card__front">
                              
                           </div>
                           <div class="category-card__back">
                              
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="slider-pagination"></div>
               </div>
            </section>
            <!-- == // PRODUCTS CATEGORY ================== -->
            <!-- == POPULARS PRODUCTS ================== -->
            <section class="popular-products _parallax">
               
               <div class="container">
                  <div class="popular-products__head head">
                     <div class="head__suptitle suptitle">
                        Lihat Kesini
                     </div>
                     <h3 class="head__title title-3"> 
                        Foto Galeri
                     </h3>
                  </div>
                  
                  <div id="tab-1" class="popular-products__tabs-content active">
                     <ul class="popular-products__list">
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 <img class="lazy" data-src="{{ asset($seeorders5->foto_galeri1) }}" src="{{ asset($seeorders5->foto_galeri1) }}" alt="img">
                              </div>
                              
                           </div>
                        </li>
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 
                                 <img class="lazy" data-src="{{ asset($seeorders5->foto_galeri2) }}" src="{{ asset($seeorders5->foto_galeri2) }}" alt="img">
                                 
                              </div>
                              
                           </div>
                        </li>
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 
                                 <img class="lazy" data-src="{{ asset($seeorders5->foto_galeri3) }}" src="{{ asset($seeorders5->foto_galeri3) }}" alt="img">
                                 
                              </div>
                              
                           </div>
                        </li>
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 
                                 <img class="lazy" data-src="{{ asset($seeorders5->foto_galeri4) }}" src="{{ asset($seeorders5->foto_galeri4) }}" alt="img">
                                 
                              </div>
                              
                           </div>
                        </li>
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                 
                                 <img class="lazy" data-src="{{ asset($seeorders5->foto_galeri5) }}" src="{{ asset($seeorders5->foto_galeri5) }}" alt="img">
                                 
                              </div>
                              
                           </div>
                        </li>
                        <li>
                           <div class="card">
                              <div class="card__img ibg">
                                 <div class="card__label-wrap">
                                 </div>
                                
                                 <img class="lazy" data-src="{{ asset($seeorders5->foto_galeri6) }}" src="{{ asset($seeorders5->foto_galeri6) }}" alt="img">
                                 
                              </div>
                              
                           </div>
                        </li>
                     </ul>
                  </div>
                  
                  <!-- <a href="shop.html" class="btn-default">view all products</a> 	    -->
               </div>
            </section>
            <!-- == // POPULARS PRODUCTS ================== -->
            <!-- == TEXT VIDEO BLOCK ================== -->
            <section class="text-video-block _parallax">
               <div class="text-video-block__decor layer" data-depth="0.15">
                  <!-- <img src="{{ url('theme/theme5/img/text-video-block/decor.jpg')}}" alt="flowers"> -->
               </div>
               <div class="text-video-block__body">
                  <div class="text-video-block__column">
                     <div class="text-video-block__text-wrap">
                        <div class="text-video-block__text head">
                           <div class="head__suptitle suptitle">
                              Lokasi Pernikahan
                           </div>
                           <h3 class="head__title title-3"> 
                           {{ $seeorders5->nama_panggilan_pria }} &amp; {{ $seeorders5->nama_panggilan_wanita }}
                           </h3>
                           <div class="head__subtitle">Hari Tanggal : {{ date('d F Y', strtotime($seeorders5->hari_tgl)) }}</div>
                           <div class="head__subtitle">Lokasi : {{ $seeorders5->lokasi }}</div>
                           <div class="head__subtitle">Waktu : {{ $seeorders5->waktu }}</div>
                           <div class="head__text text">Kami sangat senang mengundang Anda untuk bergabung dengan kami dalam pernikahan kami. Informasi lengkap tentang acara akan segera kami bagikan. Mohon simpan tanggalnya!</div>
                        </div>
                        <a href="https://www.google.com/maps/search/?api=1&query={{ $seeorders5->lokasi }}" class="btn-default">Temukan lokasi</a>
                     </div>
                  </div>
                  <div class="text-video-block__column">
                     <div class="video-block">
                        <video id="player" class="video-block__video" loop poster="{{ url('https://images.unsplash.com/photo-1550155891-1ab2d265d9c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1287&q=80')}}">
                           <source src="{{ asset('theme/theme5/img/videoForTest.mp4')}}" type="video/mp4" />
                        </video>
                     </div>
                  </div>
               </div>
            </section>
            <!-- == // TEXT VIDEO BLOCK ================== -->
            <!-- == ADVANTAGES ================== -->
            <section class="advantages">
               <div class="container">
                  <ul class="advantages__list">
                     <li>
                        <div class="advantages__item">
                           <div class="advantages__icon">
                              <img src="{{ asset('theme/theme5/img/advantages/icon-dress.svg')}}" alt="icon">
                           </div>
                           <h5 class="advantages__title title-5">Pilihan Seragam</h5>
                           <div class="advantages__text text">Gunakan Pakaian sopan cerminan dari etika dan penghormatan diri</div>
                        </div>
                     </li>
                     <li>
                        <div class="advantages__item">
                           <div class="advantages__icon">
                              <img src="{{ asset('theme/theme5/img/advantages/icon-delivery.svg')}}" alt="icon">
                           </div>
                           <h5 class="advantages__title title-5">Ragam Makanan</h5>
                           <div class="advantages__text text">Beragam hidangan makanan dipernikahan kami.</div>
                        </div>
                     </li>
                     <li>
                        <div class="advantages__item">
                           <div class="advantages__icon">
                              <img src="{{ asset('theme/theme5/img/advantages/icon-girl.svg')}}" alt="icon">
                           </div>
                           <h5 class="advantages__title title-5">Sanjungan Hangat</h5>
                           <div class="advantages__text text">Disanjung dengan hangat ketika masuk</div>
                        </div>
                     </li>
                     <li>
                        <div class="advantages__item">
                           <div class="advantages__icon">
                              <img src="{{ asset('theme/theme5/img/advantages/icon-idea.svg')}}" alt="icon">
                           </div>
                           <h5 class="advantages__title title-5">Tema Kreatif</h5>
                           <div class="advantages__text text">Memilih tema pernikahan yang kreatif dan unik</div>
                        </div>
                     </li>
                  </ul>
               </div>
            </section>
            <!-- == // ADVANTAGES ================== -->
            <!-- == GET YOUR GIFT BLOCK ================== -->
            <section class="get-your-gift-block _parallax">
               
               <div class="get-your-gift-block__img ibg">
                  <img class="lazy" data-src="{{ url('https://images.unsplash.com/photo-1517867065801-e20f409696b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80')}}" src="img/get-your-gift-block/placeholder.jpg')}}" alt="bg">
               </div>
               <div class="get-your-gift-block__body">
                  <div class="get-your-gift-block__suptitle suptitle">
                     <span><img src="{{ asset('theme/theme5/img/icons/icon-circles.svg')}}" alt="icon"></span>
                     Acara Pernikahan
                  </div>
                  <h2 class="get-your-gift-block__title title-1">
                     Jangan lupa<br>
                     untuk Menghadiri Pernikahan kami
                  </h2>
                  <div class="get-your-gift-block__time time-block" data-time="12/31/2020 10:00:00 PM">
                     <div class="time-block__item">
                        <span class="time-block__count" id="days">0</span>
                        <span class="time-block__units">days</span>
                     </div>
                     <div class="time-block__item">
                        <span class="time-block__count" id="hours">0</span>
                        <span class="time-block__units">hours</span>
                     </div>
                     <div class="time-block__item">
                        <span class="time-block__count" id="minutes">0</span>
                        <span class="time-block__units">mins</span>
                     </div>
                     <div class="time-block__item">
                        <span class="time-block__count" id="seconds">0</span>
                        <span class="time-block__units">sec</span>
                     </div>
                  </div>

                  <script>
                     // Set the target date from your PHP code (e.g., 12/31/2020 10:00:00 PM)
                     var targetDate = new Date("{{ date('d F Y', strtotime($seeorders5->hari_tgl)) }}").getTime();

                     // Update the countdown every second
                     var timer = setInterval(function () {
                        // Get the current date and time
                        var currentDate = new Date().getTime();

                        // Calculate the remaining time in milliseconds
                        var timeRemaining = targetDate - currentDate;

                        // Calculate days, hours, minutes, and seconds
                        var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                        // Update the countdown elements with the calculated values
                        document.getElementById("days").innerHTML = days;
                        document.getElementById("hours").innerHTML = hours;
                        document.getElementById("minutes").innerHTML = minutes;
                        document.getElementById("seconds").innerHTML = seconds;

                        // If the countdown is over, display a message
                        if (timeRemaining < 0) {
                              clearInterval(timer);
                              document.getElementById("days").innerHTML = "0";
                              document.getElementById("hours").innerHTML = "0";
                              document.getElementById("minutes").innerHTML = "0";
                              document.getElementById("seconds").innerHTML = "0";
                              // You can add a message here, e.g., "Countdown expired!"
                        }
                     }, 1000); // Update every 1 second (1000 milliseconds)
                  </script>

               </div>
            </section>
            <!-- == // GET YOUR GIFT BLOCK ================== -->
            
            <!-- == TESTIMONIALS SLIDER ================== -->
            <section class="testimonials-slider _parallax">
               
               <div class="container">
                  <div class="testimonials-slider__head head">
                     <div class="head__suptitle suptitle">
                        Motivasi
                     </div>
                     <h3 class="head__title title-3"> 
                        Kutipan
                     </h3>
                  </div>
                  <div class="testimonials-slider__body">
                     <div class="swiper-container">
                        <div class="swiper-wrapper">
                           <div class="testimonials-slider__item swiper-slide">
                              <div class="testimonials-slider__text">
                              Ketika dua jiwa yang mencintai bertemu dalam pernikahan, mereka menciptakan cerita yang indah yang akan mereka bagi selamanya
                              </div>
                           </div>
                        </div>
                     </div>
                    
                  </div>
               </div>
            </section>
            <!-- == // TESTIMONIALS SLIDER ================== -->
            
         </main>
         <!-- == // PAGE CONTENT ================== -->
         <!-- == FOOTER ================== -->
         <footer class="footer _parallax">
            <div class="footer__decor layer" data-depth="0.15">
               <!-- <img src="{{ asset('theme/theme5/img/footer/decor.jpg')}}" alt="flowers"> -->
            </div>
            <div class="footer__bg ibg">
               <img class="lazy" data-src="{{ asset('https://images.unsplash.com/photo-1612490567273-23288c5744df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1241&q=80')}}" alt="img">
            </div>
            <div class="footer__body container">
               <div class="footer__row footer__row_1">
                  <div class="footer__logo logo">
                     <a href="#">
                     <img class="img-svg" src="{{ asset('theme/theme5/img/logo/logo.svg')}}" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="footer__row footer__row_2">
                  <div class="footer__column_1">
                     <form action="/" class="footer__form">
                        <h5 class="footer__form-title title-5">Newsletter</h5>
                        <p class="footer__form-text text">Don’t miss our significant news and season sales. Subscribe!</p>
                        <div class="footer__form-inner">
                           <input class="footer__form-input input" type="email" placeholder="Enter your email">
                           <button class="footer__form-submit" type="submit"><span>
                           <img class="img-svg" src="{{ asset('theme/theme5/img/icons/icon-send.svg')}}" alt="icon send">
                           </span></button> 
                        </div>
                     </form>
                  </div>
                  <div class="footer__column footer__column_2">
                     <h6 class="footer__title">Hit us up:</h6>
                     <p><a class="link" href="tel:18004527887">+1 800 452 78 87</a></p>
                     <p><a href="mailto:info@sitename.com">info@sitename.com</a></p>
                     <p>27 Division St, New York, NY 10002, USA</p>
                  </div>
                  <div class="footer__column footer__column_3">
                     <h6 class="footer__title">Find us:</h6>
                     <ul>
                        <li>
                           <a href="#">Facebook</a>
                        </li>
                        <li>
                           <a href="#">Twitter</a>
                        </li>
                        <li>
                           <a href="#">Instagram</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="footer__row footer__row_3">
                  <div class="footer__copy">© All right reserved. Joolie 2020</div>
                  <div class="footer__privacy-policy"><a href="#">Privacy policy</a> - Terms and Conditions</div>
               </div>
            </div>
         </footer>
         <!-- == // FOOTER ================== -->
      </div>
      <!-- == // WRAPPER ================== -->
      <div class="popup">
         <div class="popup__content">
            <div class="popup__body">
               <div class="popup__close"></div>
            </div>
         </div>
      </div>
      <div class="popup popup_video">
         <div class="popup__content">
            <div class="popup__body">
               <div class="popup__close popup__close_video"></div>
               <div class="popup__video _video"></div>
            </div>
         </div>
      </div>
      <!-- Scripts -->
      <script src="{{ asset('theme/theme5/js/vendors.js') }}"></script>
      <script src="{{ asset('theme/theme5/js/app.js') }}"></script>
   </body>
</html>