@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron__huge jumbotron__centered bg-huge-overlay-event-page2">
  <div class="centered-container">
    <div class="col-lg-12">
      <p class="text-sublarge text-white">Welcome to</p>
      <h1 class="text-white text-extralarge">The Biggest Event</h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="d-flex flex-wrap w-100 u-mt--15">

      <a href="{{route('eventcategory',['bar'])}}" class="flex-fill flex-fill-with-image-event d-flex align-items-end justify-content-start bd-highlight" style="background-image:url(../images/beachparty.jpg) ">
        <p class="text-medium text-white u-ml--20">Event Party</p>
        <span class="text-pos-bottom-right text-small text-white">View Project <i class="fas fa-angle-right text-small"></i></span>
      </a>
      <a href="{{route('eventcategory',['bar'])}}" class="flex-fill flex-fill-with-image-event d-flex align-items-end justify-content-start bd-highlight" style="background-image:url(../images/culture-event.jpg)">
        <p class="text-medium text-white u-ml--20">Event Cultural</p>
        <span class="text-pos-bottom-right text-small text-white">View Project <i class="fas fa-angle-right text-small"></i></span>
      </a>
    </div>
  </div>
</div>





<div class="container">
    @foreach($event_pay_article as $index=>$key)
  <div class="row">
    <div class="d-flex w-100 flex-fill-with-adjacent">
      <div class="flex-fill d-flex bd-highlight first-container position-relative w-50">
        <div class="flex-part-vertical position-absolute">
          <p class="m-0-event"><i class="fas fa-minus text-small u-mr--20"></i>{{ $key->title }}</p>
        </div>
        <div class="flex-part-description">
          <p>{{ $key->description }}</p>
        </div>
      </div>
      <div class="flex-fill flex-fill-with-image d-flex bd-highlight end-container" style="background-image:url(https://picsum.photos/1920/1080/?gravity=west)"></div>
    </div>
  </div>
  @endforeach
</div>



<div class="jumbotron__banner bg-huge-banner">
  <img class="img-banner" src="https://thebeatbali.com/wp-content/uploads/2019/03/ij-web-1350x220.jpg">
</div>


@endsection
