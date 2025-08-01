<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>
  <base href="{{ asset('') }}">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <!-- favicon chuẩn -->
  <link rel="shortcut icon" type="image/x-icon" href="page/assets/img/logo/favicon.ico">
  <!-- CSS here -->
  <link rel="stylesheet" href="page/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="page/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="page/assets/css/slicknav.css">
  <link rel="stylesheet" href="page/assets/css/flaticon.css">
  <link rel="stylesheet" href="page/assets/css/progressbar_barfiller.css">
  <link rel="stylesheet" href="page/assets/css/gijgo.css">
  <link rel="stylesheet" href="page/assets/css/animate.min.css">
  <link rel="stylesheet" href="page/assets/css/animated-headline.css">
  <link rel="stylesheet" href="page/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="page/assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="page/assets/css/themify-icons.css">
  <link rel="stylesheet" href="page/assets/css/slick.css">
  <link rel="stylesheet" href="page/assets/css/nice-select.css">
  <link rel="stylesheet" href="page/assets/css/style.css">
  <link rel="stylesheet" href="page/assets/css/page.css">
  <link rel="stylesheet" href="page/assets/css/flatsome.css">

</head>

<body>
  <div class="hotline-phone-ring-wrap">
<div class="hotline-phone-ring">
<div class="hotline-phone-ring-circle"></div>
<div class="hotline-phone-ring-circle-fill"></div>
<div class="hotline-phone-ring-img-circle">
<a class="pps-btn-i" href="tel:0964708686"><img src="page/assets/img/logo/icon-call-nh.png" width="50"></a>
</div>
</div>
<div class="hotline-bar">
<a href="tel:0964708686"><span class="text-hotline">0964708686</span></a>
</div>
</div>
  <!-- ? Preloader Start -->
  <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="preloader-circle"></div>
        <div class="preloader-img pere-text">
          <img src="page/assets/img/logo/loder.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- Preloader Start -->
  <header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
      <div class="main-header ">
        
        <div class="header-bottom  header-sticky">
          <div class="container-fluid">
            <div class="row align-items-center">
              <!-- Logo -->
              <div class="col-xl-2 col-lg-2">
                <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                  <div id="logo" class="flex-col logo">

                    <!-- Header logo -->
                    <a href="/" title="Trang chủ dịch vụ internet Viettel - Hướng dẫn đăng ký gói data 4G Viettel mới nhất"
                      rel="home">
                      <img width="1" height="1" src="page/assets/img/logo/logo.svg" class="header_logo header-logo"
                        alt="Trang chủ dịch vụ internet Viettel"><img width="1" height="1" src="page/assets/img/logo/logo.svg"
                        class="header-logo-dark" alt="Trang chủ dịch vụ internet Viettel"></a>
                  </div>
                </div>
              </div>
              <div class="col-xl-10 col-lg-10">
                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                  <!-- Main-menu -->
                  <div class="main-menu d-none d-lg-block">
                    <nav>
                      <ul id="navigation">
                       @foreach(\App\Models\Categories::all() as $category)
                          <li><a href="{{ route('categories.products', ['category' => $category->id]) }}">{{ $category->tenLoaiGoiCuoc }}</a></li>
                      @endforeach
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              <!-- Mobile Menu -->
              <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
  </header>