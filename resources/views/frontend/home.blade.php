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
    @livewireStyles
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
           {{-- header  --}}
           <livewire:header />
           {{-- / header  --}}
  
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
            <livewire:home />
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
@livewireScripts
<script src="{{asset('frontend/js/main.js')}}"></script>

@stack('page-js')

</html>