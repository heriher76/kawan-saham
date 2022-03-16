<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kawan Saham</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ url('front/vendors/owl-carousel/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ url('front/vendors/owl-carousel/css/owl.theme.default.css') }}">
  <link rel="stylesheet" href="{{ url('front/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ url('front/vendors/aos/css/aos.css') }}">
  <link rel="stylesheet" href="{{ url('front/css/style.min.css') }}">
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  
  @include('partials.front-header')

  @include('partials.front-banner')

  <div class="content-wrapper">
    <div class="container">
      
      @yield('contents')

  	  @include('partials.front-footer')
      
      @include('partials.front-modal')

    </div> 
  </div>
  <script src="{{ url('front/vendors/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('front/vendors/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ url('front/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('front/vendors/aos/js/aos.js') }}"></script>
  <script src="{{ url('front/js/landingpage.js') }}"></script>
</body>
</html>