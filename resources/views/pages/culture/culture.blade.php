@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron__huge jumbotron__centered bg-huge-overlay">
  <div class="centered-container">
    <div class="col-lg-12">
      <h1 class="text-white text-extralarge">CULTURAL</h1>
    </div>
  </div>
</div>

<div class="centered-container">
  <div class="col-lg-8 col-md-8">
    <div class="thumbnail-container thumbnail-container__article-block--lg u-mti--50">
      @foreach($culture as $index=>$key)
      <div class="thumbnail-item">
        <div class="media">
          <img class="align-self-start mr-3 img-fluid" src="{{ $key->thumbnail_pict }}" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="media-title">{{ $key->title }}</h4>
            <p class="text-small text-dark m-0">{{ $key->description }}</p>
            <a href="{{ route('article', [$key->id]) }}" role="button" class="btn btn-main">View More</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>


<div class="jumbotron__banner bg-huge-banner">
  <img class="img-banner" src="https://thebeatbali.com/wp-content/uploads/2019/03/ij-web-1350x220.jpg">
</div>


@endsection
