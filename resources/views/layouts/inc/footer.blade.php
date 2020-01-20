<div class="footer">
  <div class="container container-footer">
    <div class="row">
      <div class="col-lg-4">
        <div class="footer-cell">
          <p>Jl. Balangan Biru V No.20 Jimbaran</p>
          <p>Badung, Bali, 80361, Indonesia</p>
        </div>
        <div class="footer-cell">
          <p>p. +6289 - 9863 - 1758</p>
          <p>f. +62361 - 224 - 956</p>
          <p>e. hi@thetrippytrip.com</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="footer-cell">
          <div class="text-center">
            <p>Find Us On</p>
          </div>
          <ul class="list-group list-group--inline">
            <li class="list-group-item">
              <a href="/" target="_blank">
                <i class="fab fa-facebook-square"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="/" target="_blank">
                <i class="fab fa-google-plus-square"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="/" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="footer-cell">
          <div class="text-right">
            <p>Email Address</p>
          </div>
          <form method="POST" action="{{ route('post-subscribe') }}" class="form-container form-container--end">
            {{csrf_field()}}
            <input type="text" id="email" name="email" class="form-control form-control__plain u-mb--10">
            <button type="submit" class="btn btn-outline-secondary">Subscribe</button>
          </form>
          <div class="text-right">
            <p>&copy; 2019 The Trippy Trip</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
