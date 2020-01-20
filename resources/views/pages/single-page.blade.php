@extends('layouts.app')

@section('content')

<div class="container-article">
    <div class="raw">
    <div class="col-lg-8 col-md-8">
      @foreach($article as $index=>$key)
    <div class="jumbotron-article jumbotron--transparent pl-0 pr-0">
      <img src="{{ $key->thumbnail_pict }}" alt="" class="img-fluid">
    </div>
    <div class="container-description">
      <h4 class="text-large">{{ $key->title }}</h4>
      <h6 class="text-mini">Updated: {{Carbon\Carbon::parse($key->created_at)->diffForHumans()}}</h6>
      <p class="text-small">{!! $key->content !!}</p>
    @endforeach

      <div class="separator">
        <ul class="list-group list-group--inline">
          <li class="list-group-item">
            <a href="/" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="list-group-item">
            <a href="/" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="list-group-item">
            <a href="/" target="_blank">
              <i class="fab fa-google-plus-g"></i>
            </a>
          </li>
          <li class="list-group-item">
            <a href="/" target="_blank">
              <i class="fas fa-link text-origin"></i>
            </a>
          </li>
        </ul>
        <p class="text-small mb-0 u-mr--10"><span class="text-small far fa-eye"> {{ $key->total_visitors }}</span> </p>
      </div>
    </div>
  </div>
    <div class="col-lg-3 col-md-3">
     <div class="banner-left">
        <img class="img-banner-left" src="https://i.thetrippytrip.com/banner-kanan2.JPG">
        </div>

    <div class="banner-left">
        <img class="img-banner-left" src="/images/banner-kanan2.jpg">
        </div>
   </div>
   </div>
  </div>


<div class="lurus">
<div class="vicon">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/3S9efCaj3nU" frameborder="0" allowfullscreen></iframe>
</div>
</div>



<div class="jumbotron jumbotron__huge jumbotron__centered jumbotron--transparent">
  <div class="centered-container">
    <div class="col-lg-8 col-md-8">
      <h4 class="text-sublarge text-center u-mb--50">Related Articles</h4>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/1280/800/?gravity=north" alt="Card image cap">
          <div class="card-body text-left">
            <p class="card-text"><small class="text-muted">Jan, 14 2018</small></p>
            <h5 class="card-title text-red-brick">Card title</h5>
            <p class="text-small">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/1280/800/?gravity=south" alt="Card image cap">
          <div class="card-body text-left">
            <p class="card-text"><small class="text-muted">Jan, 17 2018</small></p>
            <h5 class="card-title text-red-brick">Card title</h5>
            <p class="text-small">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/1280/800/?gravity=west" alt="Card image cap">
          <div class="card-body text-left">
            <p class="card-text"><small class="text-muted">Feb, 09 2018</small></p>
            <h5 class="card-title text-red-brick">Card title</h5>
            <p class="text-small">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="jumbotron__banner bg-huge-banner">
  <img class="img-banner" src="https://thebeatbali.com/wp-content/uploads/2019/03/ij-web-1350x220.jpg">
</div>



@endsection
