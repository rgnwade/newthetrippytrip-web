@extends('layouts.app')

@section('content')


  <div class="jumbotron jumbotron__huge jumbotron__centered bg-huge-overlay">
    <div class="centered-container">
      <div class="col-lg-12">
        <p class="text-sublarge text-white">Welcome to</p>
        <h1 class="text-white text-extralarge">The Biggest Event</h1>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="u-mt--16 u-mb--16">
      <div class="grid-container">
        <div class="grid-card grid-card--block" style="background-image:url(https://picsum.photos/1920/1080)"></div>
        <div class="grid-card grid-card--1">
          <img src="https://picsum.photos/1920/1080/?gravity=north" alt="" class="img-fluid">
        </div>
        <div class="grid-card grid-card--1">
          <img src="https://picsum.photos/1920/1080/?gravity=south" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://picsum.photos/1920/200/?gravity=south" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://picsum.photos/1920/200/?gravity=north" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://picsum.photos/1920/200/?gravity=east" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <i class="fas fa-chevron-right"></i>
        </a>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <h4 class="u-mt--20 u-mb--0">ALL EVENTS</h4>
        <div class="thumbnail-container">
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="thumbnail-item thumbnail-item__v">
              <img src="https://picsum.photos/300/400/?gravity=north" alt="" class="img-thumbnail default-thumbnail">
            </div>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="thumbnail-item thumbnail-item__v">
              <img src="https://picsum.photos/300/400/?gravity=east" alt="" class="img-thumbnail default-thumbnail">
            </div>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="thumbnail-item thumbnail-item__v">
              <img src="https://picsum.photos/300/400/?gravity=south" alt="" class="img-thumbnail default-thumbnail">
            </div>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="thumbnail-item thumbnail-item__v">
              <img src="https://picsum.photos/300/400/?gravity=west" alt="" class="img-thumbnail default-thumbnail">
            </div>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="thumbnail-item thumbnail-item__v">
              <img src="https://picsum.photos/300/400/?gravity=south" alt="" class="img-thumbnail default-thumbnail">
            </div>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="thumbnail-item thumbnail-item__v">
              <img src="https://picsum.photos/300/400/?gravity=east" alt="" class="img-thumbnail default-thumbnail">
            </div>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="thumbnail-item thumbnail-item__v">
              <img src="https://picsum.photos/300/400/?gravity=north" alt="" class="img-thumbnail default-thumbnail">
            </div>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="thumbnail-item thumbnail-item__v">
              <img src="https://picsum.photos/300/400/?gravity=east" alt="" class="img-thumbnail default-thumbnail">
            </div>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="thumbnail-item thumbnail-item__v">
              <img src="https://picsum.photos/300/400/?gravity=south" alt="" class="img-thumbnail default-thumbnail">
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <h4 class="u-mt--20 u-mb--0">NOW OPEN</h4>
        <div class="thumbnail-container thumbnail-container__article-block">
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="thumbnail-item">
              <div class="media">
                <img class="align-self-start mr-3 img-fluid img-max-10" src="https://picsum.photos/180/100/?gravity=north" alt="Generic placeholder image">
                <div class="media-body">
                  <p class="text-mini text-dark m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
              </div>
            </div>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="thumbnail-item">
              <div class="media">
                <img class="align-self-start mr-3 img-fluid img-max-10" src="https://picsum.photos/180/100/?gravity=east" alt="Generic placeholder image">
                <div class="media-body">
                  <p class="text-mini text-dark m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
              </div>
            </div>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="thumbnail-item">
              <div class="media">
                <img class="align-self-start mr-3 img-fluid img-max-10" src="https://picsum.photos/180/100/?gravity=south" alt="Generic placeholder image">
                <div class="media-body">
                  <p class="text-mini text-dark m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
              </div>
            </div>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="thumbnail-item">
              <div class="media">
                <img class="align-self-start mr-3 img-fluid img-max-10" src="https://picsum.photos/180/100/?gravity=west" alt="Generic placeholder image">
                <div class="media-body">
                  <p class="text-mini text-dark m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
              </div>
            </div>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="thumbnail-item">
              <div class="media">
                <img class="align-self-start mr-3 img-fluid img-max-10" src="https://picsum.photos/180/100/?gravity=north" alt="Generic placeholder image">
                <div class="media-body">
                  <p class="text-mini text-dark m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
              </div>
            </div>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="thumbnail-item">
              <div class="media">
                <img class="align-self-start mr-3 img-fluid img-max-10" src="https://picsum.photos/180/100/?gravity=east" alt="Generic placeholder image">
                <div class="media-body">
                  <p class="text-mini text-dark m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

 <div class="jumbotron__banner bg-huge-banner">
  <img class="img-banner" src="https://thebeatbali.com/wp-content/uploads/2019/03/ij-web-1350x220.jpg">
</div>


@endsection
