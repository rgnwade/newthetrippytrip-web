@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron__huge jumbotron__centered bg-huge-overlay">
  <div class="centered-container">
    <div class="col-lg-12">
      <h1 class="text-white text-extralarge">DESTINATION</h1>
    </div>
  </div>
</div>

<div class="centered-container">
  <div class="col-lg-8 col-md-8">
    <div class="thumbnail-container thumbnail-container__article-block--lg u-mti--50">
      <div class="thumbnail-item">
        <div class="media">
          <img class="align-self-start mr-3 img-fluid" src="https://picsum.photos/1280/780/?school=north" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="media-title">Lorem Ipsum</h4>
            <p class="text-small text-dark m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <a href="#" role="button" class="btn btn-main">View More</a>
          </div>
        </div>
      </div>
      <div class="thumbnail-item">
        <div class="media">
          <img class="align-self-start mr-3 img-fluid" src="https://picsum.photos/1280/780/?school=east" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="media-title">Lorem Ipsum</h4>
            <p class="text-small text-dark m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <a href="#" role="button" class="btn btn-main">View More</a>
          </div>
        </div>
      </div>
      <div class="thumbnail-item">
        <div class="media">
          <img class="align-self-start mr-3 img-fluid" src="https://picsum.photos/1280/780/?school=south" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="media-title">Lorem Ipsum</h4>
            <p class="text-small text-dark m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <a href="#" role="button" class="btn btn-main">View More</a>
          </div>
        </div>
      </div>
      <div class="thumbnail-item">
        <div class="media">
          <img class="align-self-start mr-3 img-fluid" src="https://picsum.photos/1280/780/?school=west" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="media-title">Lorem Ipsum</h4>
            <p class="text-small text-dark m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <a href="#" role="button" class="btn btn-main">View More</a>
          </div>
        </div>
      </div>
      <div class="thumbnail-item">
        <div class="media">
          <img class="align-self-start mr-3 img-fluid" src="https://picsum.photos/1280/780/?school=north" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="media-title">Lorem Ipsum</h4>
            <p class="text-small text-dark m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <a href="#" role="button" class="btn btn-main">View More</a>
          </div>
        </div>
      </div>
      <div class="thumbnail-item">
        <div class="media">
          <img class="align-self-start mr-3 img-fluid" src="https://picsum.photos/1280/780/?school=east" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="media-title">Lorem Ipsum</h4>
            <p class="text-small text-dark m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <a href="#" role="button" class="btn btn-main">View More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="jumbotron__banner bg-huge-banner">
  <img class="img-banner" src="{{url('/uploads/banner-sponsor.jpg')}}">
</div>

@endsection
