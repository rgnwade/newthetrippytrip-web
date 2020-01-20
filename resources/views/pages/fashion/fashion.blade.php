@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron__huge jumbotron__centered bg-huge-overlay">
  <div class="centered-container">
    <div class="col-lg-12">
      <h1 class="text-white text-extralarge">FASHION</h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="d-flex flex-wrap w-100 u-mt--50">
      <figure class="snip1104 red">
        <img src="https://images.pexels.com/photos/874158/pexels-photo-874158.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="sample33" />
        <figcaption>
        <h2>  MAN </h2>
        </figcaption>
        <a href="{{route('fashioncategory',['man'])}}"></a>
        </figure>
      <figure class="snip1104 blue">
        <img src="https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="sample33" />
        <figcaption>
        <h2>  WOMAN </h2>
        </figcaption>
        <a href="{{route('fashioncategory',['woman'])}}"></a>
        </figure>
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
            <p class="text-small">T{{ $key->description }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<div class="jumbotron__banner bg-huge-banner">
  <img class="img-banner" src="https://thebeatbali.com/wp-content/uploads/2019/03/ij-web-1350x220.jpg">
</div>


@endsection
