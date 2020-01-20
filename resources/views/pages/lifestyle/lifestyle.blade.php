@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron__huge jumbotron__centered bg-huge-overlay">
  <div class="centered-container">
    <div class="col-lg-12">
      <h1 class="text-white text-extralarge">LIFESTYLE</h1>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-8 col-md-8">
      <div class="thumbnail-container thumbnail-container__grid-2">
        @foreach($datas_page as $index=>$key)
      <div class="ih-item square from_top_and_bottom"><a href="{{route('fashioncategory',['man'])}}">
      <figure class="effect-sadie">
    <img src="{{ $key->thumbnail_pict }}" alt="{{ $key->title }}"/>
    <figcaption>
      <h2>{{ $key->title }}</span></h2>
      <p>{{ $key->description }}</p>
    </figcaption>
      </figure>
      </a>
       </div>
       @endforeach

      </div>
    </div>

    <div class="col-lg-4 col-md-4">

      <div class="thumbnail-container thumbnail-container__article-block">
        @foreach($datas_article as $index=>$key)
        <a href="#" target="_blank" rel="noopener noreferrer">
          <div class="thumbnail-item">
            <div class="media">
              <img class="align-self-start mr-3 img-fluid img-max-10" src="{{ $key->thumbnail_pict }}" alt="Generic placeholder image">
              <div class="media-body">
                <p class="text-mini text-dark m-0">{{ $key->description }}</p>
              </div>
            </div>
          </div>
        </a>
            @endforeach
      </div>
    </div>
  </div>
</div>

<div class="jumbotron__banner bg-huge-banner">
  <a href="http://localhost:8000/event/bar">
  <img class="img-banner" src="https://thebeatbali.com/wp-content/uploads/2019/03/ij-web-1350x220.jpg">
</div></a>

@endsection
