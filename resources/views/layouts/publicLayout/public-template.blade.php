<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/themify-icons.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400&display=swap" rel="stylesheet">

    <title>Home</title>
  </head>
  <body>

    <!-- Navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light navbar-transparent fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{url('/public/img/logo.svg')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="shop.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Women
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="shop.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Men
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.html">Shop </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.html">New-in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.html">Best-sellers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.html">Sale</a>
            </li>
          </ul>

          <ul class="navbar-nav">
          @guest
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="water-treatment.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                My account
              </a>


              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- <a class="dropdown-item" href="{{ url('my-account') }}">My Profile</a> -->
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('user-logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="user-logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </div>


            </li>
          @endguest
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="{{url('/public/img/icons/search-icon.svg')}}"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="{{url('/public/img/icons/cart-icon.svg')}}"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    @yield('main-content')


    <footer>
      <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6">
              <div class="footer-box">
                <h2>Cutra beauty</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, ed do eiusmod tempor<br />
                  incididunt ut labore et doloremagna aliqua. Ut enim ad minim veniam.</p>
                <h2>Stay updated</h2>
                <form class="form-inline">
                  <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="email@example.com">
                  </div>
                  <img src="{{url('/public/img/icons/right-arrow.svg')}}">
                </form>
              </div>
            </div>

            <div class="col-lg-2">
              <div class="footer-box">
                <h2>Shop now</h2>
                <ul>
                  <li><a href="#">Shop Women</a></li>
                  <li><a href="#">Shop Men</a></li>
                  <li><a href="#">Sincare Products</a></li>
                  <li><a href="#">Makeup Products</a></li>
                  <li><a href="#">Fragrances</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-2">
              <div class="footer-box">
                <h2>Information</h2>
                <ul>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">FAQ's</a></li>
                  <li><a href="#">Returns & Exchange</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-2">
              <div class="footer-box">
                <h2>Contact us</h2>
                <ul>
                  <li>hello@cutrabeauty.com</li>
                  <li>+234 700 800 9000</li>
                </ul>
                <div class="social-wrap">
                  <img class="social-icon" src="{{url('/public/img/icons/facebook-white.svg')}}">
                  <img class="social-icon" src="{{url('/public/img/icons/twitter-white.svg')}}">
                  <img class="social-icon" src="{{url('/public/img/icons/instagram-white.svg')}}">
                  <img class="social-icon" src="{{url('/public/img/icons/youtube.svg')}}">
                </div>
              </div>
            </div>

        </div>

        <div class="ft-bottom">
          <div class="row">
            <div class="col-lg-12">
              <p class="copyright">© 2021 Cutra Beauty Inc. All Rights Reserved.</p>
            </div>
          </div>
        </div>

      </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="{{ url('public/js/custom.js') }}"></script>
    
  </body>
</html>