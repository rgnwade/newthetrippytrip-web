@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron__huge jumbotron__centered bg-huge-overlay">
  <div class="centered-container">
    <div class="col-lg-12">
      <h1 class="text-white text-extralarge">FASHION</h1>
    </div>
  </div>
</div>

<div class="centered-container">
  <div class="col-lg-8">
    <div id="carouselExampleIndicators" class="carousel carousel-small slide u-mt--60" data-ride="carousel">
      <ol class="carousel-indicators carousel-indicators--bullet">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner carousel-inner--small">
        <div class="carousel-item active">
          <img class="img-fluid" src="https://picsum.photos/1280/500/?earth=south" alt="First slide">
          <div class="carousel-item__desc">
            <div class="text-group text-center">
              <h5>Hello World</h5>
              <p class="text-mini">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et dui neque. Curabitur porttitor luctus tellus, eu commodo tortor maximus ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum semper nisi eget dui aliquet tempus. In justo neque, euismod in interdum eu, auctor vel enim. Etiam molestie, dui id suscipit vehicula, sem felis consequat orci, id imperdiet ligula urna eu magna. Pellentesque a euismod purus.</p>
              <a href="#" target="_blank" rel="noopener noreferrer" role="button" class="btn btn-main">View More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="img-fluid" src="https://picsum.photos/1280/500/?earth=north" alt="Second slide">
          <div class="carousel-item__desc">
            <div class="text-group text-center">
              <h5>Hello World</h5>
              <p class="text-mini">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et dui neque. Curabitur porttitor luctus tellus, eu commodo tortor maximus ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum semper nisi eget dui aliquet tempus. In justo neque, euismod in interdum eu, auctor vel enim. Etiam molestie, dui id suscipit vehicula, sem felis consequat orci, id imperdiet ligula urna eu magna. Pellentesque a euismod purus.</p>
              <a href="#" target="_blank" rel="noopener noreferrer" role="button" class="btn btn-main">View More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="img-fluid" src="https://picsum.photos/1280/500/?earth=west" alt="Third slide">
          <div class="carousel-item__desc">
            <div class="text-group text-center">
              <h5>Hello World</h5>
              <p class="text-mini">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et dui neque. Curabitur porttitor luctus tellus, eu commodo tortor maximus ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum semper nisi eget dui aliquet tempus. In justo neque, euismod in interdum eu, auctor vel enim. Etiam molestie, dui id suscipit vehicula, sem felis consequat orci, id imperdiet ligula urna eu magna. Pellentesque a euismod purus.</p>
              <a href="#" target="_blank" rel="noopener noreferrer" role="button" class="btn btn-main text-small">View More</a>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <i class="fas fa-chevron-left"></i>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <i class="fas fa-chevron-right"></i>
      </a>
    </div>
  </div>
</div>

<div class="jumbotron jumbotron__huge jumbotron__centered jumbotron--transparent">
  <div class="centered-container">
    <div class="col-lg-8">
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

<div class="jumbotron jumbotron__huge jumbotron__centered jumbotron--transparent pt-0">
  <div class="centered-container">
    <div class="col-lg-8">
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

<div class="jumbotron__banner bg-huge-banner centered-container">
  <img src="{{url('/uploads/banner-sponsor.jpg')}}">
</div>


@endsection
