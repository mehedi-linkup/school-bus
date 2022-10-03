<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="School Bus Stop"/>
    <meta name="keywords" content="School Bus"/>
	  <meta name="author" content="School Bus"/>
    <meta name="description" content="This is school bus project the text is available only for seo">
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" href="{{asset('website')}}/assets/img/favicon.ico" type="image/x-icon">
    <!-- Vendor Style Sheet -->
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/vendor/font-family.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/vendor/menu-engine.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/vendor/menu-grid.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/vendor/swiper.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/vendor/dynamic-slider.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/vendor/bricklayer.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/vendor/lightbox.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/vendor/aos.min.css">
    <!-- Main Style Sheet -->
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/theme.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/core.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/main.css">
    @stack('web-css')
	<!-- PAGE TITLE HERE -->
    <title>@yield('title') - School Bus</title>
</head>
<body class="shock-body" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    {{-- Web Header --}}
    @include('layouts.partials.web_header')
    {{-- End Web Header --}}
    <main id="main" class="shock-main">
      @yield('web-content')
    </main>

    {{-- Scroll to Top --}}
    <div class="side-widget to-right invert-color mix-blend-difference show">
      <div class="item align-v-bottom">
          <a href="{{asset('/')}}#" class="link hover-up">
              <span class="widget float-icon">
                  <i class="fa-solid fa-arrow-up-long icon"></i>
              </span>
          </a>
      </div>
    </div>
    {{-- End Scroll to Top --}}


    {{-- Footer --}}
    @include('layouts.partials.web_footer')
    {{-- End Footer --}}
    
    <!-- Vendor JavaScript -->
    <script src="{{asset('website')}}/assets/js/vendor/jquery.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/inview.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/menu-engine.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/menu-grid.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/bootstrap.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/swiper.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/anime.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/dynamic-slider.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/shuffle.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/stickybits.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/bricklayer.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/lightbox.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/typed.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/progressbar.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/map-styles.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/magnetic-effect.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/gsap.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/aos.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/lax.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/cursor-effect.min.js"></script>
    <!-- Main JavaScript -->
    <script src="{{asset('website')}}/assets/js/main.js"></script>
    <style type="text/css" data-typed-js-css="true">
        .typed-cursor {
            opacity: 1;
        }

        .typed-cursor.typed-cursor--blink {
            animation: typedjsBlink 0.7s infinite;
            -webkit-animation: typedjsBlink 0.7s infinite;
            animation: typedjsBlink 0.7s infinite;
        }

        @keyframes typedjsBlink {
            50% {
                opacity: 0.0;
            }
        }

        @-webkit-keyframes typedjsBlink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
    @stack('web-js')
</body>
</html>