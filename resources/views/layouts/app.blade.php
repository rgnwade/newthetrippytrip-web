<!doctype html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>TheTrippyTrip</title>

  <link rel="apple-touch-icon" href="{{ url('icon/apple-touch-icon-57x57.png')}}">
  <link rel="apple-touch-icon" href="{{ url('icon/apple-touch-icon-60x60.png')}}">
  <link rel="apple-touch-icon" href="{{ url('icon/apple-touch-icon-72x72.png')}}">
  <link rel="apple-touch-icon" href="{{ url('icon/apple-touch-icon-76x76.png')}}">
  <link rel="icon" href="{{ url('images/favicon-2.jpg')}}" type="image/png" sizes="32x32">

  <link rel="stylesheet" href="{{ url('css/main.css') }}">
  <link rel="stylesheet" href="{{ url('css/fontawesome-all.min.css')}}">
  <link rel="stylesheet" href="{{ url('sweetalert/sweet.css')}}">
  <link rel="stylesheet" href="{{ url('sweetalert/sweet.min.css')}}">

  <link href="{{ url('css/owl.carousel.min.css') }}" rel="stylesheet" >
  <link href="{{asset('css/owl.theme.default.css')}}" rel="stylesheet">
  <link href="{{url('css/owl.carousel.css')}}" rel="stylesheet">




  <script src="{{ url('sweetalert/sweet.js')}}"></script>
  <script src="{{ url('sweetalert/sweet.min.js')}}"></script>
  <script src="{{ url('js/vendor/modernizr.js')}}"></script>
  <script src="{{ url('js/figure.js')}}"></script>

<!-- google adsense -->
<!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7068441638280597",
    enable_page_level_ads: true
  });
</script> -->



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137904093-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137904093-1');
</script>



</head>

<body>
        @include('sweet::alert')
        @include('layouts/inc/header')

        @yield('content')

        @include('layouts/inc/footer')

</body>

<script src="{{ url('js/vendor.js') }}"></script>
<script src="{{ url('js/plugins.js') }}"></script>
<script src="{{ url('js/scripts/main.js') }}"></script>

<!-- owl carousel -->
<script type="text/javascript" src="{{url('js/carousel/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/carousel//tether.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/carousel/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/carousel/owl.carousel.min.js')}}"></script>

<script type="text/javascript">
$(document).ready(function(){
 $(".owl-carousel-1").owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots:true,
  slideSpeed : 300,
  paginationSpeed : 400,
  responsive:{
   0:{
    items:1
   },
   600:{
    items:3
   },
   1000:{
    items:5
   }
  }
 })
});

$(document).ready(function(){
 $(".owl-carousel-2").owlCarousel({
  items:1,
  loop:true,
  slideSpeed : 300,
  autoplay:true,
  autoPlay: 2500,
  autoplayTimeout:3500,
 });
 $('.play').on('click',function(){
  owl.trigger('play.owl.autoplay',[3000])
 })
 $('.stop').on('click',function(){
  owl.trigger('stop.owl.autoplay')
 })
});

$(document).ready(function(){
  $(".owl-carousel-3").owlCarousel({
  items:4,
  loop:true,
  margin:10,
  dots:true,
 });
});

</script>

</html>
