<nav class="navbar navbar-expand-lg navbar-dark navbar-pull-top sticky-top">
  <div class="container container-navbar">
    <a class="navbar-brand" href="{{ url('/')}}">
      <img src="{{ url('images/logo.png')}}" alt="Logo" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('event')}}">Event <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('food-drink')}}">Food & Drink</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('nightlife')}}">Nightlife</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('lifestyle')}}">Lifestyle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('fashion')}}">Fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('culture')}}">Culture</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('resource')}}">Resource</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
