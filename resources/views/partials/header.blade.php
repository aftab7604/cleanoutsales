<!-- Header Area wrapper Starts -->
<header id="header-wrap">
    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-8 col-xs-12" style="height: 42px !important">
            <!-- Start Contact Info -->
            <ul class="links clearfix">
              <li><i class="lni-phone-handset"></i>813-530-8544</li>
              {{-- <li><i class="lni-envelope"></i> thecleanoutapp@gmail.com</li> --}}
              {{-- <li><a href="#"><i class="lni-map-marker"></i> Tampa, Florida, US</a></li> --}}
            </ul>
            <!-- End Contact Info -->
          </div>
          <div class="col-lg-5 col-md-4 col-xs-12">
            <div class="roof-social float-right">
              <a class="facebook" href="https://www.facebook.com/cleanoutapp"><i class="lni-facebook-filled"></i></a>
              <a class="instagram" href="https://www.instagram.com/cleanoutapp"><i class="lni-instagram-filled"></i></a>
            </div>
            @guest
            <div class="header-top-right float-right">
              <a href="{{route('login')}}" class="header-top-button"><i class="lni-lock"></i> Log In</a>
            </div>
            @else
            <div class="header-top-right float-right">
              <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="header-top-button"><i class="lni-exit"></i> Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
              </form>
            </div>
            @endguest
          </div>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white"  data-toggle="sticky-onscroll">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="lin-menu"></span>
          </button>
          <a class="navbar-brand" href="/"><img src="assets/img/logo1.png" alt="" style="height: 75px; width:auto;" ></a>
        </div>

        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav mr-auto w-100 justify-content-center">
            <li class="nav-item dropdown @if(Route::is('index')) active @endif">
              <a class="nav-link" href="{{route('index')}}" >
                Find Estate Sales
              </a>
            </li>
            <li class="nav-item dropdown @if(Route::is('shop')) active @endif">
              <a class="nav-link" href="{{route('shop')}}" >
                Shop
              </a>
            </li>
            <li class="nav-item dropdown @if(Route::is('hire-company')) active @endif" href="{{route('shop')}}">
              <a class="nav-link" href="{{route('hire-company')}}" >
                Hire a Company
              </a>
            </li>
          </ul>
          <div class="search-add float-right">
            <form method="get" action="{{route('search.result')}}">
              <div class="form-group">
                  <button type="submit" class="search-btn"><span class="lni-search"></span></button>
                  <input type="search" name="field-name" value="" placeholder="Search Here" required="">
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Mobile Menu Start -->
      <ul class="mobile-menu">
        <li>
          <a class="@if(Route::is('index')) active @endif" href="{{route('index')}}">
          Find Sale
          </a>
        </li>
        <li>
          <a class="@if(Route::is('shop')) active @endif" href="{{route('shop')}}">
          Shop
          </a>
        </li>
        <li>
          <a class="@if(Route::is('hire-company')) active @endif" href="{{route('shop')}}" href="{{route('hire-company')}}">
          Hire a Company
          </a>
        </li>
      </ul>
      <!-- Mobile Menu End -->
    </nav>
    <!-- Navbar End -->
    <div class="clearfix"></div>
  </header>
  <!-- Header Area wrapper End -->
