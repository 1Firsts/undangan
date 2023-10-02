<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dear Bride - One Page Wedding Salon HTML Template</title>
    <!-- Google Fonts -->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Libre+Baskerville') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('theme/theme2/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('theme/theme2/css/animate.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('theme/theme2/css/font-awesome.min.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('theme/theme2/slick/slick.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('theme/theme2/magnific/dist/magnific-popup.css') }}">
    <!-- Reset style -->
    <link rel="stylesheet" href="{{ asset('theme/theme2/css/reset.css') }}">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="{{ asset('theme/theme2/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('theme/theme2/css/responsive.css') }}">
    <!-- Dear Bride colors. We have chosen the color Orange for this default
          page. However, you can choose any other color by changing color css file.
    -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/theme2/css/colors/default-orange.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="css/colors/pink.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/colors/purple.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/colors/brown.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/colors/green.css"> -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="js">

@yield('content')
    <!-- Page loader -->
    <div id="preloader"></div>
    <!-- Home Section START -->
    <div class="home-area" id="home">
        <!-- Header slider section -->
        <div class="home-slider">
            <div class="single-slider">
                <img src="{{ url('https://images.unsplash.com/photo-1502635385003-ee1e6a1a742d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1587&q=80')}}" alt="">
            </div>
        </div>
        <!-- END Header slider section -->
       
        <!-- MENU section START -->
        <div class="nav-area">
            <nav class="navbar">
                <div class="container menu-bg">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- <a class="navbar-brand" href="#home"><img src="{{ asset('theme/theme2/images/logo.png')}}" alt=""></a> -->
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav appointment navbar-right">
                            <li>
                                <!-- <a href="#appointment"><span><img src="{{ asset('theme/theme2/images/pencil.png')}}" alt=""> </span>Make an appointment</a> -->
                            </li>
                        </ul>
                        <ul class="nav menu navbar-nav navbar-right">
                            
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
        <!-- END MENU section -->
    </div>
    <!-- END Home Section -->
    <!-- Featured Images area -->
    <div class="features-image">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="about-image wow slideInLeft">
                        <img src="{{ asset($seeorders2->foto_pasangan1) }}" alt="">
                        <br><br><h2 class="title-heading">{{ $seeorders2->nama_lengkap_pria }}</h2><br>
                        <div class="single-about bold-font wow fadeInUp" data-wow-duration="1s">
                            <p>Dalam momen ini, saya ingin mengucapkan terima kasih kepada keluarga dan teman-teman yang hadir di sini. Dengan dukungan mereka, saya bersedia memulai babak baru dalam hidup ini, denganmu sebagai pasangan hidupku</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="about-image wow slideInRight">
                        <img src="{{ asset($seeorders2->foto_pasangan2) }}" alt="">
                        <br><br><h2 class="title-heading">{{ $seeorders2->nama_lengkap_wanita }}</h2><br>
                        <div class="single-about bold-font wow fadeInUp" data-wow-duration="1s">
                            <p>Pernikahan adalah janji suci, dan dengan penuh cinta, saya berjanji untuk selalu mendukungmu, merawatmu, dan mencintaimu dalam setiap momen kita bersama</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-features wow fadeInUp" data-wow-duration="1s">
                        <img src="{{ url('https://images.unsplash.com/photo-1455541053858-f5c756ccb2e7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80')}}" alt="">
                        <div class="img-up">
                            <img src="{{ asset('theme/theme2/images/flower.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-features wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <img src="{{ url('https://images.unsplash.com/photo-1520860335182-b40a5c3cc4ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80')}}" alt="">
                        <div class="img-up">
                            <img src="{{ asset('theme/theme2/images/flower.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-features wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                        <img src="{{ url('https://images.unsplash.com/photo-1519657502999-ab785d28a1f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80')}}" alt="">
                        <div class="img-up">
                            <img src="{{ asset('theme/theme2/images/flower.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Featured Images area -->
    <!-- START About Us Section -->
    <section class="about-us" id="about">
        <div class="container">
            
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="about-flow">
                        <img src="{{ asset('theme/theme2/images/about-flower.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END About Us Section -->
    <!-- START Testimonial Section -->
    <section class="testimonial-section" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2 class="title-heading">Beberapa Kutipan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-11 testimonial-slider">
                    <div class="single-testimonial">
                        <div class="tesitmonial-content">
                            <h3>Hidup setelah pernikahan akan membawa banyak ujian dan cobaan, tetapi bersama-sama, kita akan menjadi lebih kuat dari sebelumnya. Jadilah pasangan yang saling mendukung dan tak tergoyahkan.</h3>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="tesitmonial-content">
                            <h3>Cinta yang tulus adalah kekuatan terbesar. Saat kita mencintai dengan sepenuh hati, kita memiliki daya untuk mengubah dunia dan menghadapi semua rintangan</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Testimonial Section -->
    <!-- START Latest Dresses Section -->
    <section class="latest-dress" id="dress">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2 class="title-heading">Acara Pernikahan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 dress-bg">
                    <div class="dress-descripttion wow slideInLeft" data-wow-duration="1s">
                        <div class="dress-price">
                            <div class="dress-title">
                                <h3>Upacara pernikahan</h3>
                                <p>{{ $seeorders2->nama_lengkap_pria }} & {{ $seeorders2->nama_lengkap_wanita }}</p>
                            </div>
                            <div class="price">
                                <p>{{ date('jS', strtotime($seeorders2->hari_tgl)) }}</p>
                            </div>
                        </div>
                        <div class="dress-content">
                            <p>Mohon diperhatikan bahwa acara ini memiliki kode berpakaian sopan. Kami menghargai ketertiban dan etika berpakaian, dan kami sangat menyarankan para tamu untuk mengenakan pakaian yang sesuai dengan suasana acara. Terima kasih atas pemahaman dan kerjasamanya</p>
                            <ul>
                                <li><span>Hari Tanggal:</span>{{ \Carbon\Carbon::parse($seeorders2->hari_tgl)->format('F d, Y') }}</li>
                                    @php
                                        $time = DateTime::createFromFormat('H:i:s', $seeorders2->waktu);
                                        $formattedTime = $time->format('h:i A') . ' - ' . $time->add(new DateInterval('PT3H'))->format('h:i A');
                                    @endphp
                                <li><span>Waktu:</span> {{ $formattedTime }}</li>
                                <li><span>Lokasi:</span> {{ $seeorders2->lokasi }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="dress-slider">
                        <div class="dress-single-slider">
                            <a href="https://www.google.com/maps/search/?api=1&query={{ $seeorders2->lokasi }}">
                                <img src="{{ url('https://images.unsplash.com/photo-1694928850410-b209896782a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80') }}" alt="">    
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Latest Dresses Section -->
    <!-- START Gallery Section -->
    <div class="gallery-section clearfix" id="gallery">
        <div class="gallery-slider">
            <div class="single-gallery">
                <img src="{{ asset($seeorders2->foto_galeri1) }}" alt="">
                <div class="gallhover">
                    <a class="maginfic" href="{{ asset($seeorders2->foto_galeri1) }}"><img src="{{ asset($seeorders2->foto_galeri1) }}" alt=""></a>
                </div>
            </div>
            <div class="single-gallery">
                <img src="{{ asset($seeorders2->foto_galeri2) }}" alt="">
                <div class="gallhover">
                    <a class="maginfic" href="{{ asset($seeorders2->foto_galeri2) }}"><img src="{{ asset($seeorders2->foto_galeri2) }}" alt=""></a>
                </div>
            </div>
            <div class="single-gallery">
                <img src="{{ asset($seeorders2->foto_galeri3) }}" alt="">
                <div class="gallhover">
                    <a class="maginfic" href="{{ asset($seeorders2->foto_galeri3) }}"><img src="{{ asset($seeorders2->foto_galeri3) }}" alt=""></a>
                </div>
            </div>
            <div class="single-gallery">
                <img src="{{ asset($seeorders2->foto_galeri4) }}" alt="">
                <div class="gallhover">
                    <a class="maginfic" href="{{ asset($seeorders2->foto_galeri4) }}"><img src="{{ asset($seeorders2->foto_galeri4) }}" alt=""></a>
                </div>
            </div>
            <div class="single-gallery">
                <img src="{{ asset($seeorders2->foto_galeri5) }}" alt="">
                <div class="gallhover">
                    <a class="maginfic" href="{{ asset($seeorders2->foto_galeri5) }}"><img src="{{ asset($seeorders2->foto_galeri5) }}" alt=""></a>
                </div>
            </div>
            <div class="single-gallery">
                <img src="{{ asset($seeorders2->foto_galeri6) }}" alt="">
                <div class="gallhover">
                    <a class="maginfic" href="{{ asset($seeorders2->foto_galeri6) }}"><img src="{{ asset($seeorders2->foto_galeri6) }}" alt=""></a>
                </div>
            </div>
            <div class="single-gallery">
                <img src="{{ asset($seeorders2->foto_galeri7) }}" alt="">
                <div class="gallhover">
                    <a class="maginfic" href="{{ asset($seeorders2->foto_galeri7) }}"><img src="{{ asset($seeorders2->foto_galeri7) }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Gallery Section -->
    <!-- START Perfect Dresses Section -->
    <section class="perfect-dress" id="promotions">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="perfect-dress-content">
                        <h4>Jangan lupa untuk hadir</h4>
                        <br>
                        <h4>{{ date('d F Y', strtotime($seeorders2->hari_tgl)) }}</h4>
                        <div class="perfect-love wow slideInleft" data-wow-duration="1s">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Perfect Dresses Section -->
    
    
    <!-- START Bottom Contact Address Section -->
    <div class="bottom-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <div class="single-bottom-content wow fadeInUp" data-wow-duration="1s">
                        <div class="icon">
                            <!-- <img src="images/location.png" alt=""> -->
                            <i class="fa fa-map-marker"></i>
                            <p>4260 Mayo Street</p>
                            <p>Lexington, KY 40507</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="single-bottom-content wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="icon">
                            <!-- <img src="images/call.png" alt=""> -->
                            <i class="fa fa-phone"></i>
                            <p>Phone: (012) 345 - 6789</p>
                            <p>Fax: 555 - 432 5435</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="single-bottom-content wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                        <div class="icon">
                            <!-- <img src="images/envelope.png" alt=""> -->
                            <i class="fa fa-envelope-open-o"></i>
                            <p>information@dear-bride.com</p>
                            <p>sales@dear-bride.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Bottom Contact Address Section -->
    
    <!-- Go to TOP -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- === Include Related JavaScripts === -->
    <!-- Google Map API -->
    <script src="{{ url('https://maps.googleapis.com/maps/api/js?key=AIzaSyCn4uayw359fjMh4P9i2rKKZYHzXaqTRNs') }}"></script>
    <!-- jQuery Main JS -->
    <script src="{{ asset('theme/theme2/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing JS -->
    <script src="{{ asset('theme/theme2/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('theme/theme2/js/bootstrap.min.js') }}"></script>
    <!-- Slick JS -->
    <script src="{{ asset('theme/theme2/slick/slick.min.js') }}"></script>
    <!-- Google Map Active JS -->
    <script src="{{ asset('theme/theme2/js/gmap.') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('theme/theme2/magnific/dist/jquery.magnific-popup.min.js') }}"></script>
    <!-- NAV JS -->
    <script src="{{ asset('theme/theme2/js/jquery.nav.js') }}"></script>
    <!-- WOW JS -->
    <script src="{{ asset('theme/theme2/js/wow.js') }}"></script>
    <!-- Main Active JS -->
    <script src="{{ asset('theme/theme2/js/active.js') }}"></script>
</body>
</html>