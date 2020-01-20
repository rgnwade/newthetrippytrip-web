@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron__huge jumbotron__centered bg-huge-overlay-nightlife-page2">
  <div class="centered-container">
    <div class="col-lg-12">
      <h1 class="text-white text-extralarge">NIGHTLIFE</h1>
    </div>
  </div>
</div>

<div class="jumbotron jumbotron__huge jumbotron__centered jumbotron--transparent">
  <div class="centered-container">
    <div class="col-lg-10 col-md-10">
      <div class="card-deck">
        @foreach($datas_page as $index=>$key)
        <div class="card">
          <img class="card-img-top" src="{{ $key->thumbnail_pict }}" alt="Card image cap">
          <div class="card-body text-left">
            <p class="card-text"><small class="text-muted">{{Carbon\Carbon::parse($key->created_at)->diffForHumans()}}</small></p>
            <h5 class="card-title text-red-brick">{{ $key->title }}</h5>
            <p class="text-small">{{ $key->description }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="d-flex col-lg-4 flex-fill-with-adjacent" style="background-image:url(https://picsum.photos/1280/840/?gravity=west)">
      <div class="centered-container align-items-center flex-column flex-fill">
        <h4 class="text-sublarge text-white">Nice Bars</h4>
        <a href="{{route('nightlifecategory',['bar'])}}" rel="noopener noreferrer" class="btn btn-main">View More</a>
      </div>
    </div>
    <div class="d-flex col-lg-4 flex-fill-with-adjacent" style="background-image:url(https://picsum.photos/1280/840/?gravity=east)">
      <div class="centered-container align-items-center flex-column flex-fill">
        <h4 class="text-sublarge text-white">Good DJ</h4>
        <a href="{{route('nightlifecategory',['bar'])}}"  rel="noopener noreferrer" class="btn btn-main">View More</a>
      </div>
    </div>
    <div class="d-flex col-lg-4 flex-fill-with-adjacent" style="background-image:url(https://picsum.photos/1280/840/?gravity=south)">
      <div class="centered-container align-items-center flex-column flex-fill">
        <h4 class="text-sublarge text-white">Awesome Nightclubs</h4>
        <a href="{{route('nightlifecategory',['bar'])}}"  rel="noopener noreferrer" class="btn btn-main">View More</a>
      </div>
    </div>
  </div>
</div>
</div>

<div class="jumbotron__banner bg-huge-banner">
  <img class="img-banner" src="https://thebeatbali.com/wp-content/uploads/2019/03/ij-web-1350x220.jpg">
</div>

@endsection
