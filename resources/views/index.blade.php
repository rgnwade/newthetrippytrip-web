@extends('layouts.app')

@section('content')
<div id="carouselSection" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselSection" data-slide-to="0" class="active">
      <div class="caption-indicator-item text-left">
        <span class="caption-num text-mini" data-content="1"></span>
        <p class="text-small mb-0">10 of the world's most amazing train journeys</p>
      </div>
    </li>
     <li data-target="#carouselSection" data-slide-to="1">
      <div class="caption-indicator-item text-left">
        <span class="caption-num text-mini" data-content="2"></span>
        <p class="text-small mb-0">5 Great Surf Spots in Bali</p>
      </div>
    </li>
    <li data-target="#carouselSection" data-slide-to="2">
      <div class="caption-indicator-item text-left">
        <span class="caption-num text-mini" data-content="3"></span>
        <p class="text-small mb-0">How to be an ethical tourist in Bali</p>
      </div>
    </li>
    <li data-target="#carouselSection" data-slide-to="3">
      <div class="caption-indicator-item text-left">
        <span class="caption-num text-mini" data-content="4"></span>
        <p class="text-small mb-0">BEST BALI INSTAGRAM SPOTS – THE ULTIMATE GUIDE</p>
      </div>
    </li>
  </ol>
   <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid" src="{{ url('uploads/page_slider_1.jpg')}}" alt="First slide">
      <div class="carousel-caption d-md-block d-sm-block text-left">
        <p class="text-mini">Featured Article</p>
        <h5 class="text-sublarge">10 of the world's most amazing train journeys</h5>
        <a href="/" class="text-small text-white">
          Read More
          <i class="fas fa-chevron-right text-mini centered-container u-pl--20"></i>
        </a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="{{ url('uploads/page_slider_2.jpg')}}" alt="Second slide">
      <div class="carousel-caption d-md-block d-sm-block text-left">
        <p class="text-mini">Featured Article</p>
        <h5 class="text-sublarge">5 Great Surf Spots in Bali</h5>
        <a href="/" class="text-small text-white">
          Read More
          <i class="fas fa-chevron-right text-mini centered-container u-pl--20"></i>
        </a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="{{ url('uploads/page_slider_3.jpg')}}" alt="Third slide">
      <div class="carousel-caption d-md-block d-sm-block text-left">
        <p class="text-mini">Featured Article</p>
        <h5 class="text-sublarge">How to be an ethical tourist in Bali</h5>
        <a href="/" class="text-small text-white">
          Read More
          <i class="fas fa-chevron-right text-mini centered-container u-pl--20"></i>
        </a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="{{ url('uploads/page_slider_4.jpg')}}" alt="Third slide">
      <div class="carousel-caption d-md-block d-sm-block text-left">
        <p class="text-mini">Featured Article</p>
        <h5 class="text-sublarge">BEST BALI INSTAGRAM SPOTS – THE ULTIMATE GUIDE</h5>
        <a href="/" class="text-small text-white">
          Read More
          <i class="fas fa-chevron-right text-mini centered-container u-pl--20"></i>
        </a>
      </div>
    </div>
  </div>
</div>


<div class="jumbotron">
  <h1 class="jumbotron__subtitle">Popular Destination</h1>
  <p class="text-origin">Always a pleasure scaffolding your apps.</p>
  <div class="centered-thumbnail">
    <div class="col-lg-8 col-md-8 col-xs-8 list-dest">
      <div class="thumbnail-container">
        <div class="destination">
          <div class="inner-hov">
        	<a href="{{route('destinationcategory',['ubud'])}}">
        	<img class="img-dest" src="{{ url('uploads/ubud.jpg')}}" >
        	<p class="text-dest">Ubud</p>
        </a>
      </div>
      </div>
      <div class="destination">
          <div class="inner-hov">
        <a href="{{route('destinationcategory',['kuta'])}}">
        <img class="img-dest" src="{{ url('uploads/kuta.jpg')}}" >
        <p class="text-dest">Kuta</p>
      </a>
    </div>
    </div>
    <div class="destination">
        <div class="inner-hov">
      <a href="{{route('destinationcategory',['canggu'])}}">
      <img class="img-dest" src="{{ url('uploads/canggu.jpg')}}" >
      <p class="text-dest">Canggu</p>
    </a>
  </div>
  </div>
  <div class="destination">
      <div class="inner-hov">
    <a href="{{route('destinationcategory',['jimbaran'])}}">
    <img class="img-dest" src="{{ url('uploads/jimbaran.jpg')}}" >
    <p class="text-dest">Jimbaran</p>
  </a>
</div>
</div>
<div class="destination">
    <div class="inner-hov">
  <a href="{{route('destinationcategory',['denpasar'])}}">
  <img class="img-dest" src="{{ url('uploads/denpasar.jpg')}}" >
  <p class="text-dest">Denpasar</p>
</a>
</div>
</div>
<div class="destination">
    <div class="inner-hov">
  <a href="{{route('destinationcategory',['tabanan'])}}">
  <img class="img-dest" src="{{ url('uploads/tabanan.jpg')}}" >
  <p class="text-dest">Tabanan</p>
</a>
</div>
</div>
       <!-- <div class="thumbnail-item hovereffect">
          <a href="{{route('destinationcategory',['ubud'])}}"><img class="img-responsive" src="{{ url('uploads/ubud.jpg')}}"  alt="" width="286px">
            <div class="overlay">
              <p>UBUD</p>
            </div>
          </a>
      </div>
      <div class="thumbnail-item hovereffect">
        <a href="{{route('destinationcategory',['kuta'])}}"><img class="img-responsive" src="{{ url('uploads/kuta.jpg')}}"  alt="" width="286px">
          <div class="overlay">
            <p>KUTA</p></div>
        </a>
      </div>
      <div class="thumbnail-item hovereffect">
        <a href="{{route('destinationcategory',['canggu'])}}"><img class="img-responsive" src="{{ url('uploads/canggu.jpg')}}"  alt="" width="286px">
            <div class="overlay">
            <p>CANGGU</p>
            </div>
        </a>
      </div>
      <div class="thumbnail-item hovereffect">
        <a href="{{route('destinationcategory',['jimbaran'])}}"><img class="img-responsive" src="{{ url('uploads/jimbaran.jpg')}}"  alt="" width="286px">
            <div class="overlay">
        <p>JIMBARAN</p>
            </div>
        </a>
      </div>
      <div class="thumbnail-item hovereffect">
        <a href="{{route('destinationcategory',['denpasar'])}}"><img class="img-responsive" src="{{ url('uploads/denpasar.jpg')}}"  alt="" width="286px">
            <div class="overlay">
        <p>DENPASAR</a></p>
            </div>
      </div>
      <div class="thumbnail-item hovereffect">
        <a href="{{route('destinationcategory',['tabanan'])}}"><img class="img-responsive" src="{{ url('uploads/tabanan.jpg')}}"  alt="" width="286px">
            <div class="overlay">
        <p>TABANAN</p>
          </div>
       </a>
     </div> -->
  </div>
  <a href="{{route('destinationcategory',['all'])}}">
      <button class="btn btn-main">
        ALL DESTINATION
      </button>
  </a>
    </div>
  </div>
</div>



<div class="jumbotron jumbotron__huge jumbotron__centered bg-huge-event-index ">
  <div class="centered-container">
    <div class="col-md-8">
      <h1 class="jumbotron__subtitle" style="color: white;">EVENT & NOW OPEN</h1>
      <p class="text-origin text-white">Our events informations bring destinations to life, deliver interactive and sensory experiences, making it the perfect place to get inspiration and advice. From supper clubs to immersive drink experiences, our events are unforgettable, once-in-a-lifetime experiences created exclusively for TheTrippyTrip audiences.</p>
      <div class="centered-container">
        <a href="{{ url('event')}}">
          <button class="btn btn-main">FIND OUT MORE</button>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="jumbotron jumbotron__small jumbotron__centered">
  <div class="centered-container">
    <div class="col-md-8">
      <h1 class="jumbotron__subtitle">FOOD & DRINK</h1>
      <p class="text-origin">Food and drink represent some of our society's greatest traditions and pleasures. Today we have access to an impressive variety and quality of food and drinks. If you're looking for the best places to eat in Indonesia, we're your guide. From pop-ups to established spots, hidden away places to gluten-free, vegan, vegetarian delights, here's our selection of the best places to eat and drink in Indonesia.</p>
      <ul class="list-group--inline">
        <a style="color:#2f2d2e;"href="{{route('fooddrinkcategory',['chill'])}}"><li class="list-group-item swing"><img src="{{ url('images/img-fd-1.png')}}" class="icon" alt="Resorts"><br>Chill Place</li> </a>
        <a style="color:#2f2d2e;"href="{{route('fooddrinkcategory',['restaurant'])}}"><li class="list-group-item swing"><img src="{{ url('images/img-fd-2.png')}}" class="icon" alt="Food and Beverage"><br>Resto</li> </a>
        <a style="color:#2f2d2e;"href="{{route('fooddrinkcategory',['caffe'])}}"><li class="list-group-item swing"><img src="{{ url('images/img-fd-3.png')}}" class="icon" alt="Coffee"><br>Caffe</li> </a>
        <a style="color:#2f2d2e;"href="{{route('fooddrinkcategory',['vegetarian'])}}"><li class="list-group-item swing"><img src="{{ url('images/img-fd-4.png')}}" class="icon" alt="Snacks"><br>Vegetarian Food</li> </a>
      </ul>
    </div>
  </div>
</div>

<div class="jumbotron jumbotron__huge-nightlife-index jumbotron__centered .bg-huge-overlay-nightlife-index">
  <div class="video-container">
  <video autoplay muted loop>
    <source src="{{ url('uploads/Sequence01.mp4')}}" type="video/mp4" >
  </video>
</div>

  <div class="end-container text-left">
    <div class="col-lg-6 col-md-6">
      <h1 class="jumbotron__subtitle" style="color:white;">NIGHTLIFE</h1>
      <p class="text-origin text-white">We connects the entire nightlife ecosystem. A companion for the night, the app allows people to discover the best party in town, broadcast their night to the public in real-time, book events and guest lists, and meet like-minded people. Venue owners can communicate, promote, and engage with users directly through the app, ensuring more successful nights for partygoers and nightlife businesses alike.</p>
      <br>
      <br>
      <a href="#" class="category-nightlife zoom">Nice Bar |</a>
      <a href="#" class="category-nightlife zoom">Good DJ |</a>
      <a href="#" class="category-nightlife zoom">Nice Club</a>
    </div>
  </div>
</div>

<div class="jumbotron jumbotron__small jumbotron__centered">
  <div class="first-container text-left">
    <div class="col-lg-10 col-md-12">
      <h1 class="jumbotron__subtitle">LIFESTYLE</h1>
      <p class="text-origin">Approximately 1500 travellers per days having fun together and there are a plenty of ways they do so. We offer an information of never-ending activities that are already in place, and from which you can choose. These include yoga, pilates and other fitness classes, Parents Night Out, Men’s Brew & Poker Night and Scotch and Cigar Night, and many more.</p>
      <div class="centered-container">
          <a href="{{ url('lifestyle')}}">
        <button class="btn btn-main">FIND OUT MORE</button>
      </a>
      </div>
    </div>
  </div>
  <div class="end-container text-left">
    <div class="col-lg-12 col-md-12">

      <div class="thumbnail-container">
          @foreach($homepage_data_lifestyle as $index=>$key)
          <a href="{{ route('article', [$key->id]) }}">
        <div class="thumbnail-item thumbnail-item__small">
          <img src="{{ $key->thumbnail_pict }}" alt="" class="img-thumbnail default-thumbnail" style="height:161px">
          <h5 class="thumb-title">{{ $key->title }}</h5>
          <p class="text-origin text-mini">{{ $key->description }}</p>
        </div></a>
          @endforeach
      </div>

    </div>
  </div>
</div>

<div class="jumbotron jumbotron__small jumbotron__centered bg-huge-overlay-fashion">
  <div class="first-container text-justify">
    <div class="col-lg-10 col-md-10">
      <h1 class="jumbotron__subtitle" style="color:white;">FASHION</h1>
      <p class="text-origin text-white">The fashion industry is one of the most promising and appealing industries in the world. Although it seems like the height of its innovation lies on the runways of Paris, Milan, London and New York, there is a lot to be said for the strides made in fashion related media.</p>
      <div class="centered-container">
      <a href="{{ url('fashion')}}">
        <button class="btn centered-container btn-main">FIND OUT MORE</button>
      </a>
    </div>
    </div>
  </div>

    <div class="col-lg-7 col-md-7 fsh-responsive">
      <div class="owl-carousel owl-theme owl-carousel-fsh">
       <div class="item">
         <img class="fsh-logo-image"src="{{url('/uploads/logo/logo1.jpg')}}" />
       </div>
       <div class="item">
         <img class="fsh-logo-image" src="{{url('/uploads/logo/logo2.jpg')}}"/>
       </div>
       <div class="item">
        <img class="fsh-logo-image" src="{{url('/uploads/logo/logo3.jpg')}}" />
       </div>
       <div class="item">
         <img class="fsh-logo-image" src="{{url('/uploads/logo/logo4.jpg')}}">
       </div>
       <div class="item">
         <img class="fsh-logo-image"src="{{url('/uploads/logo/logo5.jpg')}}" />
       </div>
      </div>
    </div>
  </div>




<div class="jumbotron jumbotron__small jumbotron__centered jumbotron--brown">
  <div class="centered-container">
    <div class="col-lg-8 col-md-8">
      <h1 class="jumbotron__subtitle">RESOURCES</h1>
      <p class="text-origin">The companies listed below are the those that are often used by most travelers. We're a firm believer in them and that’s why they are listed. They are the best out there, and continually offer the best deals, including some TheTrippyTrip's exclusives. Check back here before you book your trip for the latest updates.</p>
      <ul class="list-group--inline">
        <div class="swing">
          <li class="list-group-item"><img src="{{url('images/img-rs-1.png')}}" class="icon" alt="Passport"><br>Tour Package</li>
        </div>
         <div class="swing">
        <li class="list-group-item"><img src="{{url('images/img-rs-2.png')}}" class="icon" alt="Travel"><br>Travel Gear</li>
        </div>
         <div class="swing">
        <li class="list-group-item"><img src="{{url('images/img-rs-3.png')}}" class="icon" alt="Home"><br>Hotel & Villa</li>
        </div>
      </ul>
    </div>
  </div>
</div>

<div class="jumbotron jumbotron__huge jumbotron__centered bg-huge-culture-index">
  <div class="end-container end-container--absr-overlay text-left">
    <div class="col-lg-10">
      <h1 class="jumbotron__subtitle">CULTURE</h1>
      <p class="text-origin">Culture is the characteristics and knowledge of a particular group of people, encompassing language, religion, cuisine, social habits, music and arts.</p>
      <div class="centered-container">
        <a href="{{ url('culture')}}">
        <button class="btn btn-main">FIND OUT MORE</button>
      </a>
      </div>
    </div>
  </div>
</div>

<div class="jumbotron jumbotron__small jumbotron__centered">
  <div class="first-container text-left">
    <div class="col-lg-10 col-md-12">
      <h1 class="jumbotron__subtitle">TIPS</h1>
      <p class="text-origin">It’s the final countdown to your next big adventure. You’ve got your passport and tickets, every pair of socks you own, and enough mosquito repellent to cover an elephant. But aren’t you forgetting something? Check our Travel tips for planning your best trip.</p>
      <div class="centered-container">
          <a href="{{ url('tips')}}">
        <button class="btn btn-main">FIND OUT MORE</button>
      </a>
      </div>
    </div>
  </div>
  <div class="end-container text-left">

    <div class="col-lg-12 col-md-12">

      <div class="thumbnail-container">
        @foreach($homepage_data_tips as $index=>$key)
          <a href="{{ route('article', [$key->id]) }}">
        <div class="thumbnail-item thumbnail-item__small">
          <img src="{{ $key->thumbnail_pict }}" style="height:174px" alt="" class="img-thumbnail default-thumbnail">
          <h5 class="thumb-title">{{ $key->title }}</h5>
          <p class="text-origin text-mini">{{ $key->description }}</p>
        </div></a>
          @endforeach
      </div>

    </div>

  </div>
</div>




  <div class="centered-container logos">
    <div class="logos">
      <a style="border-bottom : solid 1px #3c3c3c;">Our Partners</a>
      <span><img src="{{url('images/logo/Hardrocklogo.png')}}" width="100px"></span>
      <span><img src="{{url('images/logo/Lafavelalogo.png')}}" width="100px"></span>
      <span><img src="{{url('images/logo/Settrip.png')}}" width="100px"></span>
      <span><img src="{{url('images/logo/LYD-SQUARE.png')}}" width="100px"></span>
    </div>
  </div>


@endsection

<script type="text/javascript" src="{{url('js/carousel/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/carousel/owl.carousel.min.js')}}"></script>
<script>
  //lifestyle
  $(document).ready(function() {
    var owl = $('.owl-carousel-lft');
    owl.owlCarousel({
        items:3,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:false
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[1000])
    })
    $('.stop').on('click',function(){
     owl.trigger('stop.owl.autoplay')
    })
  })

  //fashio
  $(document).ready(function() {
    var owl = $('.owl-carousel-fsh');
    owl.owlCarousel({
        items:3,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:false
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[2000])
    })
    $('.stop').on('click',function(){
     owl.trigger('stop.owl.autoplay')
    })
  })
</script>
