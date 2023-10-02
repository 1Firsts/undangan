<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Metas -->
      <meta charset="utf-8">
      <title>Foxewedding - Beautiful Wedding Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Css -->
      <link href="{{ asset('theme/theme4/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
      <link href="{{ asset('theme/theme4/css/main.css') }}" rel="stylesheet" type="text/css" media="all" />
      <link href="{{ asset('theme/theme4/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" media="all" />
      <link href="{{ asset('theme/theme4/css/fonts.css') }}" rel="stylesheet" type="text/css" media="all" />
      <link href="{{ url('https://fonts.googleapis.com/css?family=Playfair+Display') }}" rel="stylesheet">
      <link href="{{ url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700') }}" rel="stylesheet">
   </head>
   <body>
   @yield('content')
      <!-- Preloader -->
      <div class="loader">
         <!-- Preloader inner -->
         <div class="loader-inner">
            <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1" xmlns="{{ url('http://www.w3.org/2000/svg')}}">
               <circle class="spinner" cx="50" cy="50" r="21" fill="#ffffff" stroke-width="2" />
            </svg>
         </div>
         <!-- End preloader inner -->
      </div>
      <!-- End preloader-->
      <!--Wrapper-->
      <div class="wrapper">
         <!--Header-->
         <header class="header default">
            <div class="header-section">
               <!--Container-->
               <div class="container-fluid ">
                  <nav class="navbar navbar-expand-lg header-navbar ml-0 ml-lg-5">
                     <a class=" navbar-brand navbar-logo scroll" href="#wrapper">
                     <img class="mb-0 logo-light" src="{{ asset('theme/theme4/assets/svg/logo-light.svg')}}" alt="">
                     <img class="mb-0 logo-dark" src="{{ asset('theme/theme4/assets/svg/logo-dark.svg')}}" alt="">
                     </a>
                     <button class="navbar-toggler btn-navbar-toggler" type="button" data-toggle="collapse" data-target=".nav-menu" aria-expanded="true" aria-label="Toggle navigation">
                     <span class="fa fa-bars"></span>
                     </button>
                     <div class="nav-menu collapse navbar-collapse navbar-collapse justify-content-end mr-5 ">
                        <ul class=" navbar-nav  header-navbar-nav">
                           
                        </ul>
                     </div>
                  </nav>
               </div>
               <!--End container-->
            </div>
         </header>
         <!--End header-->
         <!--Hero section-->
         <section class="gradient-overlay gradient-overlay-dark ">
            <img class="bg-image" src="{{ url('https://images.unsplash.com/photo-1695418624960-d94556dc9a8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80')}}" alt="">
            <div class="container">
               <!--row-->
               <div class="row min-vh-80 align-items-center z-index-2 position-relative text-center">
                  <div class="col-12">
                     <h1 class="display-2  text-white mb-4">{{ $seeorders4->nama_panggilan_pria }} &amp; {{ $seeorders4->nama_panggilan_wanita }}</h1>
                     <p class="font-weight-300 text-light  lead mb-5 ">{{ date('d F Y', strtotime($seeorders4->hari_tgl)) }} - {{ $seeorders4->lokasi }}. </p>
                     
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <div class="curved-decoration ">


              <svg width="100%" height="100%" version="1.1" xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px"
    viewBox="0 0 2560 168.6227" enable-background="new 0 0 2560 168.6227" xml:space="preserve">
<g>
</g>
<g>
   <path d="M2560,0c0,0-219.6543,165.951-730.788,124.0771c-383.3156-31.4028-827.2138-96.9514-1244.7139-96.9514
      c-212.5106,0-439,3.5-584.4982,1.5844l0,139.9126h2560V0z"/>
</g>
</svg>
            </div>
         </section>
         <!--End hero section-->
         <!--Date section-->
         <section id="resto" class=" ">
            <div class="container spacer-double-lg">
               <div class="row justify-content-lg-between align-items-center">
                  <div class="col-md-6 mb-5 mb-md-0">
                     <div class="pr-md-4">
                        <h1 class="font-secondary display-4">Catat tanggalnya</h1>
                        <p class="lead font-weight-300 text-dark-gray opacity-8">{{ date('d F Y', strtotime($seeorders4->hari_tgl)) }} - {{ $seeorders4->lokasi }}.</p>
                        <p class="mb-4 pr-5">Kami dengan gembira ingin memberi tahu Anda bahwa kami akan mengadakan pernikahan. Kami sangat berharap Anda bisa bergabung dengan kami dalam momen istimewa ini. Kehadiran Anda akan sangat berarti bagi kami. Harap konfirmasikan apakah Anda dapat hadir. Terima kasih banyak!.</p>
                        <div class="countdown row text-center"></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="svg-mask-container">
                        <svg version="1.1" id="p.svg" xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px" viewBox="0 0 980.2914 884.5557" enable-background="new 0 0 980.2914 884.5557" xml:space="preserve">
                           <path opacity="0.05" fill="#E35D5D" d="M493.9887,130.1238L493.9887,130.1238C419.5373,4.797,257.8407-37.3296,131.6182,36.1312
                              C4.3062,110.2269-37.5245,274.4576,36.6059,401.6698l215.8423,370.3983c28.1165,48.2495,90.0233,64.5706,138.2729,36.4541
                              l368.4115-214.6845c127.2958-74.1791,172.7084-240.1479,98.7059-367.5465C783.976,99.1337,621.0024,56.1091,493.9887,130.1238z" />
                           <path fill="none" stroke="#E35D5D" stroke-width="3.1978" stroke-miterlimit="10" d="M151.0414,716.6817L151.0414,716.6817
                              c-2.6854-4.5204-8.5175-6.0399-13.0702-3.3902c-4.592,2.6725-6.1008,8.5961-3.427,13.1844l7.7851,13.3598
                              c1.0141,1.7403,3.247,2.3289,4.9873,1.3148l13.2881-7.7433c4.5914-2.6756,6.2294-8.6618,3.5602-13.257
                              C161.5008,715.5639,155.6226,714.0121,151.0414,716.6817z" />
                           <path fill="none" stroke="#E35D5D" stroke-width="2.7402" stroke-miterlimit="10" d="M186.6779,44.1803L186.6779,44.1803
                              c-1.4613-2.4599-4.635-3.2867-7.1125-1.8449c-2.4988,1.4543-3.3199,4.6778-1.8649,7.1747l4.2365,7.2701
                              c0.5519,0.947,1.767,1.2674,2.714,0.7155l7.2311-4.2138c2.4985-1.456,3.3899-4.7136,1.9374-7.2141
                              C192.3697,43.572,189.1709,42.7276,186.6779,44.1803z" />
                           <path fill="none" stroke="#E35D5D" stroke-width="2.5752" stroke-miterlimit="10" d="M978.3951,400.8979
                              c-0.5042,0.934-0.5042,2.0591,0,2.993c0.3052,0.4453,0.5839,0.9083,0.835,1.3862c0.5513,1.3705-0.4096,2.8669-1.3862,3.9854
                              c-0.6144,0.7089-1.3075,1.6697-0.8979,2.5203c0.1919,0.3133,0.4371,0.5904,0.7246,0.8192c2.0887,2.0325,2.1343,5.3734,0.1018,7.4622
                              c-0.5895,0.6058-1.3159,1.0612-2.1182,1.3277" />
                           <defs>
                              <mask id="mask">
                                 <path fill="#ffffff" d="M528.4855,192.3897L528.4855,192.3897C454.034,67.0629,292.3375,24.9363,166.115,98.3971
                                    C38.8029,172.4928-3.0277,336.7236,71.1027,463.9358L286.945,834.3341c28.1165,48.2495,90.0233,64.5706,138.2729,36.4541
                                    l368.4115-214.6845c127.2958-74.1792,172.7084-240.1479,98.7059-367.5465C818.4728,161.3996,655.4992,118.375,528.4855,192.3897z" />
                              </mask>
                           </defs>
                           <image mask="url(#mask)" width="981" height="885" xlink:href="{{ url('https://images.unsplash.com/photo-1459259191495-52eccde892c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80')}}}" />
                           <g>
                              <path fill="none" stroke="#E35D5D" stroke-width="7" stroke-linecap="round" stroke-miterlimit="10" d="M747.8805,524.349
                                 c108.1955-68.637,139.1927-213.677,70.5558-321.8725S606.4696,62.2462,498.2741,130.8832l0,0" />
                           </g>
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
            <div class="curved-decoration">
<svg  width="100%" height="100%" class="bg-secondary-svg" version="1.1" xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px"
    viewBox="0 0 2560 168.6227" enable-background="new 0 0 2560 168.6227" xml:space="preserve">
<g>
</g>
<g>
   <path d="M0,0c0,0,219.6543,165.951,730.788,124.0771c383.3156-31.4028,827.2139-96.9514,1244.7139-96.9514
      c212.5106,0,438.9999,3.5,584.4982,1.5844v139.9126H0V0z"/>
</g>
</svg>
            </div>
         </section>
         <!--End date section-->

            <!--End container-->
            <div class="curved-decoration ">
               <svg width="100%" height="100%" class="bg-white-svg" version="1.1" xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px"
    viewBox="0 0 2560 168.6227" enable-background="new 0 0 2560 168.6227" xml:space="preserve">
<g>
</g>
<g>
   <path d="M2560,0c0,0-219.6543,165.951-730.788,124.0771c-383.3156-31.4028-827.2138-96.9514-1244.7139-96.9514
      c-212.5106,0-439,3.5-584.4982,1.5844l0,139.9126h2560V0z"/>
</g>
</svg>
            </div>

         <section id="friends" class="text-center">
            <!--Container-->
            <div class="container spacer-double-lg">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col">
                     <div class=" mb-5 pb-5">
                        <h1 class="display-4 mb-0">Pernikahan</h1>
                        <p class="w-md-40 mb-0 mx-auto text-dark-gray opacity-8 ">Saya beruntung dapat memilikimu</p>
                     </div>
                  </div>
               </div>
               <!--End row-->
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-md-4 d-flex flex-column align-items-center">
                     <div class="px-5 mb-4 pb-4 ">
                        <div class="svg-mask-container px-3">
                        <svg  width="100%" height="100%" version="1.1" xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px" viewBox="0 0 607 532" enable-background="new 0 0 607 532" xml:space="preserve">
                           <defs>
                              <mask id="mask-middle-1">
                                 <path fill="#FFFFFF" d="M303.2954,55.7655L303.2954,55.7655c-68.9887-68.3032-180.269-68.3601-249.3155,0.1402
                                    c-69.6423,69.0921-69.0838,181.9562,0.0139,251.5284l201.1888,202.5704c26.2076,26.3876,68.8445,26.5335,95.2321,0.3258
                                    l201.4838-200.1096c69.6179-69.1431,71.0768-183.7278,2.0303-253.4415C485.013-12.8027,372.7591-13.2244,303.2954,55.7655z"></path>
                              </mask>
                           </defs>
                           <image mask="url(#mask-middle-1)" width="607" height="532" xlink:href="{{ asset($seeorders4->foto_pasangan1) }}"></image>
                        </svg>
                     </div>
                        <div class=" mt-4">
                           <h5 class="mb-0">{{ $seeorders4->nama_lengkap_pria }}</h5>
                           <span class="small">Mempelai Pria </span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 d-flex flex-column align-items-center">
                     <div class=" px-5 mb-4 pb-4 ">
                        <div class="svg-mask-container px-3">
                        <svg width="100%" height="100%" version="1.1" xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px" viewBox="0 0 607 532" enable-background="new 0 0 607 532" xml:space="preserve">
                           <defs>
                              <mask id="mask-middle-2">
                                 <path fill="#FFFFFF" d="M303.2954,55.7655L303.2954,55.7655c-68.9887-68.3032-180.269-68.3601-249.3155,0.1402
                                    c-69.6423,69.0921-69.0838,181.9562,0.0139,251.5284l201.1888,202.5704c26.2076,26.3876,68.8445,26.5335,95.2321,0.3258
                                    l201.4838-200.1096c69.6179-69.1431,71.0768-183.7278,2.0303-253.4415C485.013-12.8027,372.7591-13.2244,303.2954,55.7655z"></path>
                              </mask>
                           </defs>
                           <image mask="url(#mask-middle-2)" width="607" height="532" xlink:href="{{ asset($seeorders4->foto_pasangan2) }}"></image>
                        </svg>
                     </div>
                        <div class=" mt-4">
                           <h5 class="mb-0">{{ $seeorders4->nama_lengkap_wanita }}</h5>
                           <span class="small">Mempelai Wanita </span>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
               <div class="row justify-content-center">
                  <div class="col-md-6">
                     <div class="text-center">
                        <div class="mx-auto icon-round mb-4 mb-md-4  bg-icon-primary">
                           <svg class="icon-svg" version="1.1" xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px" viewBox="0 0 70.8 102.2" enable-background="new 0 0 70.8 102.2;" xml:space="preserve">
                              <path class="st0" opacity="0.3" d="M35.4,70.8c5.4,0,10-1.9,13.9-5.8c3.8-3.8,5.8-8.5,5.8-13.9V19.7c0-5.4-1.9-10-5.8-13.9C45.4,1.9,40.8,0,35.4,0
                                 c-5.4,0-10,1.9-13.9,5.8c-3.8,3.8-5.8,8.5-5.8,13.9v31.5c0,5.4,1.9,10,5.8,13.9C25.4,68.8,30,70.8,35.4,70.8z" fill="#E25D5D" />
                              <path class="st1" d="M69.6,40.5c-0.8-0.8-1.7-1.2-2.8-1.2c-1.1,0-2,0.4-2.8,1.2c-0.8,0.8-1.2,1.7-1.2,2.8v7.9
                                 c0,7.6-2.7,14.1-8.1,19.4c-5.4,5.4-11.9,8.1-19.4,8.1c-7.6,0-14.1-2.7-19.4-8.1c-5.4-5.4-8.1-11.9-8.1-19.4v-7.9
                                 c0-1.1-0.4-2-1.2-2.8c-0.8-0.8-1.7-1.2-2.8-1.2s-2,0.4-2.8,1.2C0.4,41.3,0,42.2,0,43.2v7.9C0,60.2,3,68,9.1,74.7
                                 c6,6.7,13.5,10.5,22.4,11.5v8.1H15.7c-1.1,0-2,0.4-2.8,1.2c-0.8,0.8-1.2,1.7-1.2,2.8c0,1.1,0.4,2,1.2,2.8c0.8,0.8,1.7,1.2,2.8,1.2
                                 H55c1.1,0,2-0.4,2.8-1.2c0.8-0.8,1.2-1.7,1.2-2.8c0-1.1-0.4-2-1.2-2.8c-0.8-0.8-1.7-1.2-2.8-1.2H39.3v-8.1c8.9-1,16.3-4.8,22.4-11.5
                                 c6-6.7,9.1-14.6,9.1-23.6v-7.9C70.8,42.2,70.4,41.3,69.6,40.5z" fill="#E25D5D" />
                           </svg>
                        </div>
                        <blockquote>Pernikahan adalah petualangan cinta seumur hidup. Jadilah satu tim, hadapi bersama, dan isi setiap hari dengan cinta, tawa, dan pengertian. Selamat menikmati perjalanan indah ini bersama!</blockquote>
                        <small class="text-uppercase font-weight-600 text-dark upper-letter-space">Selamat menikmati setiap detiknya!</small>
                     </div>
                  </div>
               </div>
            </div>
            <!--End container-->
            <div class="curved-decoration ">
               <svg width="100%" height="100%" class="bg-secondary-svg" version="1.1" xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px" viewBox="0 0 2560 168.6227" enable-background="new 0 0 2560 168.6227" xml:space="preserve">
<g>
</g>
<g>
   <path d="M2560,0c0,0-219.6543,165.951-730.788,124.0771c-383.3156-31.4028-827.2138-96.9514-1244.7139-96.9514
      c-212.5106,0-439,3.5-584.4982,1.5844l0,139.9126h2560V0z"></path>
</g>
</svg>
            </div>
         </section>

         <section id="wedding" class="spacer-one-top-lg">
            <!--Container-->
            <div class="container spacer-one-bottom-lg">
               <!--Row-->
               <div class="row justify-content-center">
                     <div class="col">
                        <div class=" text-center mb-5 pb-5">
                           <h1 class="display-4 mb-0">Acara Pernikahan</h1>
                           <p class="w-md-40 mb-0 mx-auto text-dark-gray opacity-8 ">Upacara utama - Pesta pernikahan</p>
                        </div>
                     </div>
                  </div>
                  <!--End row-->
                  <!--Row-->
                  <div class="row">
                     <div class="col-md-6 col-lg-4 d-flex mb-4 mb-lg-0">
                        <div class="card card-body justify-content-between text-center">
                        </div>
                     </div>
                     
                     <div class="col-md-6 col-lg-4 d-flex ">
                        <div class="card card-body justify-content-between bg-primary text-light text-center">
                           <h5 class="mb-0">Pernikahan</h5>
                           <h6 class="mb-5">{{ $seeorders4->nama_panggilan_pria }} &amp; {{ $seeorders4->nama_panggilan_wanita }}</h6>
                           <p>{{ $seeorders4->waktu }}</p>
                           <p>{{ $seeorders4->lokasi }}</p>
                           <p>{{ date('d F Y', strtotime($seeorders4->hari_tgl)) }}</p>
                        </div>
                     </div>

                     <div class="col-md-6 col-lg-4 d-flex mb-4 mb-lg-0">
                        <div class="card card-body justify-content-between text-center">
                           <a href="https://www.google.com/maps/search/?api=1&query={{ $seeorders4->lokasi }}">
                                 <img class="bg-image" src="{{ asset('theme/theme4/assets/img/1.jpg') }}" alt="Image Description">
                           </a>
                        </div>
                     </div>

               </div>
               <!--End row-->
               <!--Row-->
               
               <!--End container-->
            </div>
            <div class="curved-decoration">
               <svg width="100%" height="100%" class="bg-secondary-svg" version="1.1" xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px" viewBox="0 0 2560 168.6227" enable-background="new 0 0 2560 168.6227" xml:space="preserve">
<g>
</g>
<g>
   <path d="M0,0c0,0,219.6543,165.951,730.788,124.0771c383.3156-31.4028,827.2139-96.9514,1244.7139-96.9514
      c212.5106,0,438.9999,3.5,584.4982,1.5844v139.9126H0V0z"></path>
</g>
</svg>
            </div>
         </section>
         
         <section id="gallery" class="bg-secondary ">
            <div class="container spacer-double-lg">
               <div class="col-lg-11 mx-lg-auto">
                  <div class="row justify-content-center card-gutters">
                     <div class="col-7 mb-3">
                        <a href="{{ asset($seeorders4->foto_galeri1) }}" class="popup-image hover-effect d-block">
                           <img class="img-fluid" src="{{ asset($seeorders4->foto_galeri1) }}" alt="">
                           <span class="hover-effect-container">
                              <span class="hover-effect-icon has-svg">
                                 <svg version="1.1"  xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px"
                                    viewBox="0 0 73.6404 64.5606" enable-background="new 0 0 73.6404 64.5606" xml:space="preserve">
                                    <g>
                                       <path fill="#E25D5D" d="M36.904,6.66L36.904,6.66C28.5329-1.7395,14.9401-1.8373,6.4502,6.4736
                                          c-8.5632,8.3827-8.5871,22.1694-0.2037,30.724l24.4097,24.9081c3.1797,3.2446,8.3876,3.2973,11.6323,0.1176l24.7745-24.2787
                                          c8.5602-8.3889,8.832-22.3842,0.4549-30.956C59.1567-1.5672,45.4453-1.7103,36.904,6.66z"/>
                                       <path fill="#FFFFFF" d="M44.695,28.8005c0-0.4883-0.3996-0.8879-0.8879-0.8879h-4.4394v-4.4394
                                          c0-0.4883-0.3996-0.8879-0.8879-0.8879h-2.9596c-0.4883,0-0.8879,0.3996-0.8879,0.8879v4.4394h-4.4394
                                          c-0.4883,0-0.8879,0.3995-0.8879,0.8879v2.9596c0,0.4883,0.3996,0.8879,0.8879,0.8879h4.4394v4.4394
                                          c0,0.4883,0.3996,0.8879,0.8879,0.8879h2.9596c0.4883,0,0.8879-0.3996,0.8879-0.8879V32.648h4.4394
                                          c0.4883,0,0.8879-0.3995,0.8879-0.8879V28.8005z"/>
                                    </g>
                                 </svg>
                              </span>
                           </span>
                        </a>
                     </div>
                     <div class="col-5 align-self-end mb-3">
                        <a href="{{ asset($seeorders4->foto_galeri2) }}" class="popup-image hover-effect d-block">
                           <img class="img-fluid" src="{{ asset($seeorders4->foto_galeri2) }}" alt="">
                           <span class="hover-effect-container">
                              <span class="hover-effect-icon has-svg">
                                 <svg version="1.1"  xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px"
                                    viewBox="0 0 73.6404 64.5606" enable-background="new 0 0 73.6404 64.5606" xml:space="preserve">
                                    <g>
                                       <path fill="#E25D5D" d="M36.904,6.66L36.904,6.66C28.5329-1.7395,14.9401-1.8373,6.4502,6.4736
                                          c-8.5632,8.3827-8.5871,22.1694-0.2037,30.724l24.4097,24.9081c3.1797,3.2446,8.3876,3.2973,11.6323,0.1176l24.7745-24.2787
                                          c8.5602-8.3889,8.832-22.3842,0.4549-30.956C59.1567-1.5672,45.4453-1.7103,36.904,6.66z"/>
                                       <path fill="#FFFFFF" d="M44.695,28.8005c0-0.4883-0.3996-0.8879-0.8879-0.8879h-4.4394v-4.4394
                                          c0-0.4883-0.3996-0.8879-0.8879-0.8879h-2.9596c-0.4883,0-0.8879,0.3996-0.8879,0.8879v4.4394h-4.4394
                                          c-0.4883,0-0.8879,0.3995-0.8879,0.8879v2.9596c0,0.4883,0.3996,0.8879,0.8879,0.8879h4.4394v4.4394
                                          c0,0.4883,0.3996,0.8879,0.8879,0.8879h2.9596c0.4883,0,0.8879-0.3996,0.8879-0.8879V32.648h4.4394
                                          c0.4883,0,0.8879-0.3995,0.8879-0.8879V28.8005z"/>
                                    </g>
                                 </svg>
                              </span>
                           </span>
                        </a>
                     </div>
                     <div class="col-5">
                        <a href="{{ asset($seeorders4->foto_galeri3) }}" class="popup-image hover-effect d-block">
                           <img class="img-fluid" src="{{ asset($seeorders4->foto_galeri3) }}" alt="">
                           <span class="hover-effect-container">
                              <span class="hover-effect-icon has-svg">
                                 <svg version="1.1" xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px"
                                    viewBox="0 0 73.6404 64.5606" enable-background="new 0 0 73.6404 64.5606" xml:space="preserve">
                                    <g>
                                       <path fill="#E25D5D" d="M36.904,6.66L36.904,6.66C28.5329-1.7395,14.9401-1.8373,6.4502,6.4736
                                          c-8.5632,8.3827-8.5871,22.1694-0.2037,30.724l24.4097,24.9081c3.1797,3.2446,8.3876,3.2973,11.6323,0.1176l24.7745-24.2787
                                          c8.5602-8.3889,8.832-22.3842,0.4549-30.956C59.1567-1.5672,45.4453-1.7103,36.904,6.66z"/>
                                       <path fill="#FFFFFF" d="M44.695,28.8005c0-0.4883-0.3996-0.8879-0.8879-0.8879h-4.4394v-4.4394
                                          c0-0.4883-0.3996-0.8879-0.8879-0.8879h-2.9596c-0.4883,0-0.8879,0.3996-0.8879,0.8879v4.4394h-4.4394
                                          c-0.4883,0-0.8879,0.3995-0.8879,0.8879v2.9596c0,0.4883,0.3996,0.8879,0.8879,0.8879h4.4394v4.4394
                                          c0,0.4883,0.3996,0.8879,0.8879,0.8879h2.9596c0.4883,0,0.8879-0.3996,0.8879-0.8879V32.648h4.4394
                                          c0.4883,0,0.8879-0.3995,0.8879-0.8879V28.8005z"/>
                                    </g>
                                 </svg>
                              </span>
                           </span>
                        </a>
                     </div>
                     <div class="col-3">
                        <a href="{{ asset($seeorders4->foto_galeri4) }}" class="popup-image hover-effect d-block">
                           <img class="img-fluid" src="{{ asset($seeorders4->foto_galeri4) }}" alt="">
                           <span class="hover-effect-container">
                              <span class="hover-effect-icon has-svg">
                                 <svg version="1.1"  xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px"
                                    viewBox="0 0 73.6404 64.5606" enable-background="new 0 0 73.6404 64.5606" xml:space="preserve">
                                    <g>
                                       <path fill="#E25D5D" d="M36.904,6.66L36.904,6.66C28.5329-1.7395,14.9401-1.8373,6.4502,6.4736
                                          c-8.5632,8.3827-8.5871,22.1694-0.2037,30.724l24.4097,24.9081c3.1797,3.2446,8.3876,3.2973,11.6323,0.1176l24.7745-24.2787
                                          c8.5602-8.3889,8.832-22.3842,0.4549-30.956C59.1567-1.5672,45.4453-1.7103,36.904,6.66z"/>
                                       <path fill="#FFFFFF" d="M44.695,28.8005c0-0.4883-0.3996-0.8879-0.8879-0.8879h-4.4394v-4.4394
                                          c0-0.4883-0.3996-0.8879-0.8879-0.8879h-2.9596c-0.4883,0-0.8879,0.3996-0.8879,0.8879v4.4394h-4.4394
                                          c-0.4883,0-0.8879,0.3995-0.8879,0.8879v2.9596c0,0.4883,0.3996,0.8879,0.8879,0.8879h4.4394v4.4394
                                          c0,0.4883,0.3996,0.8879,0.8879,0.8879h2.9596c0.4883,0,0.8879-0.3996,0.8879-0.8879V32.648h4.4394
                                          c0.4883,0,0.8879-0.3995,0.8879-0.8879V28.8005z"/>
                                    </g>
                                 </svg>
                              </span>
                           </span>
                        </a>
                     </div>
                     <div class="col-3">
                        <a href="{{ asset($seeorders4->foto_galeri5) }}" class="popup-image hover-effect d-block">
                           <img class="img-fluid" src="{{ asset($seeorders4->foto_galeri5) }}" alt="">
                           <span class="hover-effect-container">
                              <span class="hover-effect-icon has-svg">
                                 <svg version="1.1" xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px"
                                    viewBox="0 0 73.6404 64.5606" enable-background="new 0 0 73.6404 64.5606" xml:space="preserve">
                                    <g>
                                       <path fill="#E25D5D" d="M36.904,6.66L36.904,6.66C28.5329-1.7395,14.9401-1.8373,6.4502,6.4736
                                          c-8.5632,8.3827-8.5871,22.1694-0.2037,30.724l24.4097,24.9081c3.1797,3.2446,8.3876,3.2973,11.6323,0.1176l24.7745-24.2787
                                          c8.5602-8.3889,8.832-22.3842,0.4549-30.956C59.1567-1.5672,45.4453-1.7103,36.904,6.66z"/>
                                       <path fill="#FFFFFF" d="M44.695,28.8005c0-0.4883-0.3996-0.8879-0.8879-0.8879h-4.4394v-4.4394
                                          c0-0.4883-0.3996-0.8879-0.8879-0.8879h-2.9596c-0.4883,0-0.8879,0.3996-0.8879,0.8879v4.4394h-4.4394
                                          c-0.4883,0-0.8879,0.3995-0.8879,0.8879v2.9596c0,0.4883,0.3996,0.8879,0.8879,0.8879h4.4394v4.4394
                                          c0,0.4883,0.3996,0.8879,0.8879,0.8879h2.9596c0.4883,0,0.8879-0.3996,0.8879-0.8879V32.648h4.4394
                                          c0.4883,0,0.8879-0.3995,0.8879-0.8879V28.8005z"/>
                                    </g>
                                 </svg>
                              </span>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         
         

         
         <!--Hero section-->
         <section class="gradient-overlay ">
            <img class="bg-image" src="{{ url('https://images.unsplash.com/photo-1495609000883-209fc68187ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80')}}" alt="">
            <div class="container">
               <!--row-->
               <div class="row  min-vh-80 align-items-center z-index-2 position-relative text-center">
                  <div class="col-12">
                     <div class=" play-btn-container mb-4">
                        
                     </div>
                     <h1 class="display-4 font-secondary  text-white mb-4">Baru Menikah</h1>
                     <p class="w-md-50 mb-0 mx-auto text-light lead font-weight-300 ">Persahabatan... bukanlah sesuatu yang kamu pelajari di sekolah. Tapi jika kamu belum belajar arti persahabatan, sebenarnya kamu belum belajar apa-apa</p>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <div class="curved-decoration ">
               <svg width="100%" height="100%" class="bg-secondary-svg" version="1.1" xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px" viewBox="0 0 2560 168.6227" enable-background="new 0 0 2560 168.6227" xml:space="preserve">
<g>
</g>
<g>
   <path d="M0,0c0,0,219.6543,165.951,730.788,124.0771c383.3156-31.4028,827.2139-96.9514,1244.7139-96.9514
      c212.5106,0,438.9999,3.5,584.4982,1.5844v139.9126H0V0z"></path>
</g>
</svg>
            </div>
         </section>
         <!--End hero section-->
         <footer class="spacer-double-lg bg-secondary">
            <div class="container">
               <!--row-->
               <div class="row justify-content-center">
                  <div class="col-md-4">
                     <div class="signature mb-3">
                        <svg version="1.1" id="Layer_1" xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px" viewBox="0 0 136.1218 25.9217" enable-background="new 0 0 136.1218 25.9217" xml:space="preserve">
                            <img class="mb-0 logo-dark" src="{{ asset('theme/theme4/assets/svg/logo-dark.svg')}}" alt="">
                        </svg>
                     </div>
                     <p class="text-dark">Persahabatan... bukanlah sesuatu yang kamu pelajari di sekolah. Tapi jika kamu belum belajar arti persahabatan, sebenarnya kamu belum belajar apa-apa.</p>
                  </div>
                  <div class="col-md-3">
                  </div>
                  <div class="col-md-4">
                     <h6 class="text-uppercase font-weight-600 font-size-15 mb-4 upper-letter-space">Newsletter</h6>
                     <p class="text-dark">Wedding news, articles, and resources, directly to your inbox each month.</p>
                     <div>
                        <form method="post">
                           <div class="input-group mb-2">
                              <input type="email" class="form-control" name="email" placeholder="Your email">
                           </div>
                           <button type="submit" class="btn btn-primary w-100">
                           Subscribe
                           </button>
                        </form>
                        <small class="text-dark-gray opacity-8 mt-2">We don't share your information. <a href="#">Privacy Policy</a>
                        </small>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </footer>
        
         <!--To the top-->
         <a class="scroll-to-top scroll" href="#wrapper">
            <svg version="1.1" xmlns="{{ url('http://www.w3.org/2000/svg')}}" xmlns:xlink="{{ url('http://www.w3.org/1999/xlink')}}" x="0px" y="0px" viewBox="0 0 273.1091 238.2098" enable-background="new 0 0 273.1091 238.2098" xml:space="preserve">
               <path fill="#E25D5D" d="M136.7428,23.457L136.7428,23.457C105.6324-7.6197,55.2286-7.8699,23.8161,23.0177
                  c-31.6835,31.1545-31.6582,82.277-0.501,113.9287l90.7191,92.1591c11.8174,12.005,31.1293,12.1571,43.1343,0.3396l91.6648-90.2325
                  c31.6726-31.1777,32.5645-83.0754,1.4308-114.7912C219.1893-7.2342,168.3452-7.6516,136.7428,23.457z" />
               <path fill="#FFFFFF" d="M110.7149,123.5662l-2.9542-2.9542c-1.2509-1.2509-1.2509-3.2736,0-4.5112l25.8562-25.8695
                  c1.2509-1.2509,3.2736-1.2509,4.5112,0l25.8562,25.8562c1.2509,1.2509,1.2509,3.2736,0,4.5112l-2.9542,2.9542
                  c-1.2642,1.2642-3.3268,1.2376-4.5644-0.0532l-15.2635-16.0221v38.2454c0,1.7699-1.4239,3.1938-3.1938,3.1938H133.75
                  c-1.7699,0-3.1938-1.4239-3.1938-3.1938v-38.2454l-15.2769,16.0354C114.0418,124.8171,111.9791,124.8437,110.7149,123.5662z" />
            </svg>
         </a>
         <!-- End to the top -->
      </div>
      <!-- End wrapper-->
      <!--Javascript-->
      <script src="{{ asset('theme/theme4/js/jquery-1.12.4.min.js') }}"></script>
      <script src="{{ asset('theme/theme4/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('theme/theme4/js/smooth-scroll.js') }}"></script>
      <script src="{{ asset('theme/theme4/js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset('theme/theme4/js/jquery.countdown.min.js') }}"></script>
      <script src="{{ asset('theme/theme4/js/placeholders.min.js') }}"></script>
      <script src="{{ asset('theme/theme4/js/instafeed.min.js') }}"></script>
      <script src="{{ asset('theme/theme4/js/script.js') }}"></script>
      <!-- Google analytics -->
      <!-- End google analytics -->
   </body>
</html>
<!-- 
   https://beatpb.club/search/epub/16/7// -->

