<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home</title>
    <link rel="shortcut icon" href="{{asset('frontend/favicon.ico')}}" />

    <link rel="stylesheet" href="{{asset('frontend/css/reset.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-grid.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/animations.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/perfect-scrollbar.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}" type="text/css" />
    @stack('page-css')

    <script src="{{asset('frontend/js/modernizr.custom.js')}}"></script>
</head>
<body>
    <!-- Animated Background -->
    <div
      class="lm-animated-bg"
      style="background-image: url({{asset('frontend/img/main_bg.png')}})"
    ></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner"></div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div class="page">
        <div class="page-content">
          <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
              <div class="header-photo">
                <img src="{{asset('frontend/img/main_photo.jpg')}}" alt="Alex Smith" />
              </div>
              <div class="header-titles">
                <h2>{{$about->name}}</h2>
                <h4>{{explode(',',$about->subtitle)[0]}}</h4>
              </div>
            </div>
  
            <ul class="main-menu">
              <li class="active">
                <a href="#home" class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">Home</span>
                </a>
              </li>
              <li>
                <a href="#about-me" class="nav-anim">
                  <span class="menu-icon lnr lnr-user"></span>
                  <span class="link-text">About Me</span>
                </a>
              </li>
              <li>
                <a href="#resume" class="nav-anim">
                  <span class="menu-icon lnr lnr-graduation-hat"></span>
                  <span class="link-text">Resume</span>
                </a>
              </li>
              <li>
                <a href="#portfolio" class="nav-anim">
                  <span class="menu-icon lnr lnr-briefcase"></span>
                  <span class="link-text">Portfolio</span>
                </a>
              </li>
              <li>
                <a href="#blog" class="nav-anim">
                  <span class="menu-icon lnr lnr-book"></span>
                  <span class="link-text">Blog</span>
                </a>
              </li>
              <li>
                <a href="#contact" class="nav-anim">
                  <span class="menu-icon lnr lnr-envelope"></span>
                  <span class="link-text">Contact</span>
                </a>
              </li>
            </ul>
  
            <div class="social-links">
              <ul>
                <li>
                  <a href="#" target="_blank"
                    ><i class="fab fa-github"></i
                  ></a>
                </li>
                <li>
                  <a href="#" target="_blank"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </li>
                <li>
                  <a href="#" target="_blank"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                </li>
                <li>
                  <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                </li>
              </ul>
            </div>
  
            <div class="header-buttons">
              <a download href="{{asset('storage/cv/'.$about->cv)}}" target="_blank" class="btn btn-primary">Download CV</a>
            </div>
  
            <div class="copyrights">Copyright &copy; {{Date('Y')}} All rights reserved.</div>
          </header>
  
          <!-- Mobile Navigation -->
          <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- End Mobile Navigation -->
  
          <!-- Arrows Nav -->
          <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right">
              <i class="lnr lnr-chevron-right"></i>
            </div>
            <div class="lmpixels-arrow-left">
              <i class="lnr lnr-chevron-left"></i>
            </div>
          </div>
          <!-- End Arrows Nav -->
  
          <div class="content-area">
            @stack('content')
          </div>
        </div>
    </div>
    
</body>
<script src="{{asset('frontend/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('frontend/js/animating.js')}}"></script>

<script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>

<script src="{{asset('frontend/js/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.shuffle.min.js')}}"></script>
<script src="{{asset('frontend/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('frontend/js/validator.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
@stack('page-js')

</html>