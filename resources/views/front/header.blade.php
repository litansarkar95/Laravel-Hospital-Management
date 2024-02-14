
<header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 1829107469</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> litansarkar95@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home')}}"><span class="text-primary">One</span>-Health</a>

  

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
          aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('doctor')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('news')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact')}}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('login')}}">Login </a>
            </li>
            <li class="nav-item">
              <a class="btn btn-success ml-lg-3" href="{{ route('register')}}">Register</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>