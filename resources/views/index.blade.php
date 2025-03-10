@extends('layouts.master')
@section('title', 'Home')
@section('content')
    {{-- <!-- Main Carousel Section Start -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/slider/slide1.jpg" alt="First slide">
                <div class="carousel-caption d-md-block">
                    <h1 class="wow fadeInDown heading" data-wow-delay=".4s">Feature-rich Real Estate Template</h1>
                    <p class="fadeInUp wow" data-wow-delay=".6s">A family-owned business dedicated to simplifying your
                        moving, estate cleanout, and home-selling experiences.</p>
                    <a href="#" class="fadeInLeft wow btn btn-common" data-wow-delay=".6s">Shop Now</a>
                    <a href="#" class="fadeInRight wow btn btn-border" data-wow-delay=".6s">Learn More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/slider/slide2.jpg" alt="Second slide">
                <div class="carousel-caption d-md-block">
                    <h1 class="wow bounceIn heading" data-wow-delay=".7s">Best Apartments for Sale</h1>
                    <p class="fadeInUp wow" data-wow-delay=".6s">A family-owned business dedicated to simplifying your
                        moving, estate cleanout, and home-selling experiences.</p>
                    <a href="#" class="fadeInLeft wow btn btn-common" data-wow-delay=".6s">Shop Now</a>
                    <a href="#" class="fadeInRight wow btn btn-border" data-wow-delay=".6s">Learn More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/slider/slide3.jpg" alt="Third slide">
                <div class="carousel-caption d-md-block">
                    <h1 class="wow fadeInUp heading" data-wow-delay=".6s">Best Apartments to Rent</h1>
                    <p class="fadeInUp wow" data-wow-delay=".6s">A family-owned business dedicated to simplifying your
                        moving, estate cleanout, and home-selling experiences.</p>
                    <a href="#" class="fadeInLeft wow btn btn-common" data-wow-delay=".6s">Shop Now</a>
                    <a href="#" class="fadeInRight wow btn btn-border" data-wow-delay=".6s">Learn More</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Main Carousel Section End --> --}}

    <!-- Property Section Start -->
    <section class="property section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">Popular Listings</h2>
                        <p>Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="property-main">
                        <div class="property-wrap">
                            <div class="property-item">
                                <div class="item-thumb">
                                    <a class="hover-effect" href="property.html">
                                        <img class="img-fluid" src="assets/img/property/house-1.jpg" alt="">
                                    </a>
                                    <div class="label-inner">
                                        <span class="label-status label">For Sale</span>
                                    </div>
                                </div>
                                <div class="item-body">
                                    <h3 class="property-title"><a href="property.html">Amazing oceanfront apartment</a></h3>
                                    <div class="adderess"><i class="lni-map-marker"></i> Drive Street, Los Angeles, US</div>
                                    <div class="pricin-list">
                                        <div class="property-price">
                                            <span>$1,500</span>
                                        </div>
                                        <p>22h 20m left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="property-main">
                        <div class="property-wrap">
                            <div class="property-item">
                                <div class="item-thumb">
                                    <a class="hover-effect" href="property.html">
                                        <img class="img-fluid" src="assets/img/property/house-2.jpg" alt="">
                                    </a>
                                    <div class="label-inner">
                                        <span class="label-status label">Auction</span>
                                    </div>
                                </div>
                                <div class="item-body">
                                    <h3 class="property-title"><a href="property.html">Family Condo</a></h3>
                                    <div class="adderess"><i class="lni-map-marker"></i> Louis, Missouri, US</div>
                                    <div class="pricin-list">
                                        <div class="property-price">
                                            <span>$27,00</span>
                                        </div>
                                        <p>22h 20m left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="property-main">
                        <div class="property-wrap">
                            <div class="property-item">
                                <div class="item-thumb">
                                    <a class="hover-effect" href="property.html">
                                        <img class="img-fluid" src="assets/img/property/house-3.jpg" alt="">
                                    </a>
                                    <div class="label-inner">
                                        <span class="label-status label">Auction</span>
                                    </div>
                                </div>
                                <div class="item-body">
                                    <h3 class="property-title"><a href="property.html">Guaranteed modern home</a></h3>
                                    <div class="adderess"><i class="lni-map-marker"></i> Avenue C, New York, US</div>
                                    <div class="pricin-list">
                                        <div class="property-price">
                                            <span>$1,750</span>
                                        </div>
                                        <p>22h 20m left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="property-main">
                        <div class="property-wrap">
                            <div class="property-item">
                                <div class="item-thumb">
                                    <a class="hover-effect" href="property.html">
                                        <img class="img-fluid" src="assets/img/property/house-4.jpg" alt="">
                                    </a>
                                    <div class="label-inner">
                                        <span class="label-status label">Auction</span>
                                    </div>
                                </div>
                                <div class="item-body">
                                    <h3 class="property-title"><a href="property.html">Family home for sale</a></h3>
                                    <div class="adderess"><i class="lni-map-marker"></i> Sacramento, Chicago, US</div>
                                    <div class="pricin-list">
                                        <div class="property-price">
                                            <span>$1,400</span>
                                        </div>
                                        <p>22h 20m left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="property-main">
                        <div class="property-wrap">
                            <div class="property-item">
                                <div class="item-thumb">
                                    <a class="hover-effect" href="property.html">
                                        <img class="img-fluid" src="assets/img/property/house-5.jpg" alt="">
                                    </a>
                                    <div class="label-inner">
                                        <span class="label-status label bg-yellow">New</span>
                                    </div>
                                </div>
                                <div class="item-body">
                                    <h3 class="property-title"><a href="property.html">Amazing oceanfront apartment</a>
                                    </h3>
                                    <div class="adderess"><i class="lni-map-marker"></i> 53 W 88th St, Dallas, US</div>
                                    <div class="pricin-list">
                                        <div class="property-price">
                                            <span>$1,750</span>
                                        </div>
                                        <p>22h 20m left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="property-main">
                        <div class="property-wrap">
                            <div class="property-item">
                                <div class="item-thumb">
                                    <a class="hover-effect" href="property.html">
                                        <img class="img-fluid" src="assets/img/property/house-6.jpg" alt="">
                                    </a>
                                    <div class="label-inner">
                                        <span class="label-status label">For Sale</span>
                                    </div>
                                </div>
                                <div class="item-body">
                                    <h3 class="property-title"><a href="property.html">Luxury home for sale</a></h3>
                                    <div class="adderess"><i class="lni-map-marker"></i> 365 Webber Street, Washington
                                    </div>
                                    <div class="pricin-list">
                                        <div class="property-price">
                                            <span>$1,800</span>
                                        </div>
                                        <p>22h 20m left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <a href="listing.html" class="btn btn-common">Browse All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Section End -->

    <!-- Featured Section Start -->
    <section class="featured-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">About Us</h2>
                        <p>Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xs-12">
                    <img class="img-fluid" src="assets/img/about/img-3.jpg" alt="">
                </div>
                <div class="col-md-12 col-lg-6 col-xs-12">
                    <h2 class="intro-title">Who We Are</h2>
                    <h3 class="title-sub">Best and Award Winning <br>Estate Business in USA 2019</h3>
                    <p class="intro-desc">We are a family-owned business dedicated to simplifying your moving, estate
                        cleanout, and home-selling experiences. Founded by the Dogan family, we bring over 10 years of
                        expertise, care, and commitment to every client we serve.
                    </p>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="featured-item">
                                <div class="icon">
                                    <i class="lni-medall"></i>
                                </div>
                                <h3><a href="#">Cretified Company</a></h3>
                                <div class="featured-content">
                                    <p>We'll generate a sitemap for your site, submit it to search engine is and track
                                        crawler access.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="featured-item">
                                <div class="icon">
                                    <i class="lni-thumbs-up"></i>
                                </div>
                                <h3><a href="#">Highly experienced</a></h3>
                                <div class="featured-content">
                                    <p>We'll generate a sitemap for your site, submit it to search engine is and track
                                        crawler access.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Pricing Table -->
    <section class="pricing section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">Pricing Plans</h2>
                        <p>Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Table -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="pricing-table text-center">
                        <div class="table-header">
                            <h3>
                                Personal
                            </h3>
                        </div>
                        <div class="plan">
                            <h3 class="price">
                                $99
                            </h3>
                            <p class="period">
                                Monthly

                        </div>
                        <div class="plan-info">
                            <p>
                                <strong><i class="lni-check-box"></i>Price to list a sale: $64</strong>
                            </p>
                            <p>
                                <strong><i class="lni-check-box"></i> Third tier of company directory</strong>
                            </p>
                            <p>
                                <strong><i class="lni-check-box"></i> 125 pictures per sale
                                    Extra pictures: $0.50 /pic</strong>
                            </p>
                            <p>
                                <strong><i class="lni-check-box"></i> Listings included in lifecycle marketing to
                                    users</strong>
                            </p>
                            <div class="button-area">
                                <a href="#" class="btn btn-common btn-lg">
                                    Get Started Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Table -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="pricing-table pricing-active text-center">
                        <div class="table-header">
                            <h3>
                                Ultimate
                            </h3>
                        </div>
                        <div class="plan">
                            <h3 class="price">
                                $999
                            </h3>
                            <p class="period">
                                Monthly
                            </p>
                        </div>
                        <div class="plan-info">
                            <p>
                                <strong><i class="lni-check-box"></i> Unlimited sale listings </strong>
                            </p>
                            <p>
                                <strong><i class="lni-check-box"></i> Top tier of company directory</strong>
                            </p>
                            <p>
                                <strong><i class="lni-check-box"></i> Listings included in lifecycle marketing to users</strong>
                            </p>
                            <p>
                                <strong><i class="lni-check-box"></i> Stand out on our "Hire a Company" page with a dedicated company profile and gold badge</strong>
                            </p>
                            <p>
                                <strong><i class="lni-check-box"></i> 20% discount on optional Seller Marketing Program advertising products such as Local, Regional & National Features</strong>
                            </p>
                            <p>
                                <strong><i class="lni-check-box"></i> Access to our client lead generation system</strong>
                            </p>

                            <div class="button-area">
                                <a href="#" class="btn btn-common btn-lg">
                                    Get Started Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Table -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="pricing-table text-center">
                        <div class="table-header">
                            <h3>
                                Business
                            </h3>
                        </div>
                        <div class="plan">
                            <h3 class="price">
                                $199
                            </h3>
                            <p class="period">
                                Monthly
                            </p>
                        </div>
                        <div class="plan-info">
                            <p>
                                <strong><i class="lni-check-box"></i> Unlimited sale listings</strong>
                            </p>
                            <p>
                                <strong><i class="lni-check-box"></i> Second tier of company directory</strong>
                            </p>
                            <p>
                                <strong><i class="lni-check-box"></i> 200 pictures per sale
                                    Extra pictures: $0.50 /pic</strong>
                            </p>
                            <p>
                                <strong><i class="lni-check-box"></i>Listings included in lifecycle marketing to users</strong>
                            </p>
                            <div class="button-area">
                                <a href="#" class="btn btn-common btn-lg">
                                    Get Started Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Table End -->

    <!-- Blog Section Start -->
    <section id="blog" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h2 class="section-title">The Blog</h2>
                <p>Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="blog-item text-center">
                <div class="blog-image">
                  <a href="#">
                    <img class="img-fluid" src="assets/img/blog/img1.jpg" alt="">
                  </a>
                </div>
                <div class="date">24 Jan, 2025</div>
                <div class="descr">
                  <h3 class="title">
                    <a href="single-blog.html">
                      Visual Design Concept
                    </a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias laudantium fugiat, eius sint.</p>
                </div>
                <div class="blog-footer hide-on-list">
                  <div class="float-left">
                    <p class="prop-user"><a href="#"><i class="lni-user"></i> Admin</a></p>
                  </div>
                  <div class="float-right">
                    <span><i class="lni-heart"></i> 350</span>
                    <span><i class="lni-comments"></i> 30</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="blog-item text-center">
                <div class="blog-image">
                  <a href="#">
                    <img class="img-fluid" src="assets/img/blog/img2.jpg" alt="">
                  </a>
                </div>
                <div class="date">24 Jan, 2025</div>
                <div class="descr">
                  <h3 class="title">
                    <a href="single-blog.html">
                      Real Estate Feswtival - 2018
                    </a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias laudantium fugiat, eius sint.</p>
                </div>
                <div class="blog-footer hide-on-list">
                  <div class="float-left">
                    <p class="prop-user"><a href="#"><i class="lni-user"></i> Admin</a></p>
                  </div>
                  <div class="float-right">
                    <span><i class="lni-heart"></i> 350</span>
                    <span><i class="lni-comments"></i> 30</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="blog-item text-center">
                <div class="blog-image">
                  <a href="#">
                    <img class="img-fluid" src="assets/img/blog/img3.jpg" alt="">
                  </a>
                </div>
                <div class="date">24 Jan, 2025</div>
                <div class="descr">
                  <h3 class="title">
                    <a href="single-blog.html">
                      Latest Architectural Design
                    </a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias laudantium fugiat, eius sint.</p>
                </div>
                <div class="blog-footer hide-on-list">
                  <div class="float-left">
                    <p class="prop-user"><a href="#"><i class="lni-user"></i> Admin</a></p>
                  </div>
                  <div class="float-right">
                    <span><i class="lni-heart"></i> 350</span>
                    <span><i class="lni-comments"></i> 30</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Blog Section End -->
@endsection
