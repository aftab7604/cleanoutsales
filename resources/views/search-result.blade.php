@extends('layouts.master')
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

    <section class="top section-padding">
        {{-- <div class="container"> --}}
            <div class="row  border border-rounded m-sec top-heading m-show">
                <div class="col-12 p-5">
                    <div class="section-title-header">
                        <h2 class="">Houston Estate Sales  <span style="font-weight:100;">(54 Results)</span></h2>
                        <p>Listed below are all the estate sales that are currently scheduled for the Houston area. You may also be interested in</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12 p-5 m-sec filters">
                    <div class="form-group">
                        <label class="h6" for="">Sort By</label>
                        <div class="">
                            <label class="radio-label"> 
                                <input type="radio" name="choice" value="1" checked>
                                Date Then Time
                              </label><br>
                        </div>

                        <div class="">
                            <label class="radio-label"> 
                                <input type="radio" name="choice" value="1">
                                Distance Only
                              </label><br>
                        </div>

                        <div class="">
                            <label class="radio-label"> 
                                <input type="radio" name="choice" value="1">
                                Date Then Distance
                              </label><br>
                        </div>

                        <div class="">
                            <label class="radio-label"> 
                                <input type="radio" name="choice" value="1">
                                Newly Listed
                              </label><br>
                        </div>
                        
                    </div>

                    <div class="">
                        <label for="" class="h6">Show Sales Within 37 Days</label>
                        <div class="range">
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                        </div>
                       

                    </div>

                    <div class="form-group">
                        <label for="" class="h6">State Sales</label>
                        <div class="custom-checkbox">
                            <label class="checkbox-label">
                                <input type="checkbox" name="option1" checked>
                                Estate Sales
                            </label><br>

                            <label class="checkbox-label">
                                <input type="checkbox" name="option1" checked>
                                 Moving Sales
                            </label><br>

                            <label class="checkbox-label">
                                <input type="checkbox" name="option1" checked>
                                Moved Offsite To Warehouse
                            </label><br>

                            <label class="checkbox-label">
                                <input type="checkbox" name="option1" checked>
                                By Appointment
                            </label><br>

                            <label class="checkbox-label">
                                <input type="checkbox" name="option1" checked>
                                Online Estate Sales
                            </label><br>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="" class="h6">Auctions</label>
                        <div class="custom-checkbox">
                            <label class="checkbox-label">
                                <input type="checkbox" name="option1" checked>
                                Auctions
                            </label><br>

                            <label class="checkbox-label">
                                <input type="checkbox" name="option1" checked>
                                Auction House
                            </label><br>

                            <label class="checkbox-label">
                                <input type="checkbox" name="option1" checked>
                                Online Only Auctions
                            </label> <br>

                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="h6">Additional Liquidations</label>
                        <div class="custom-checkbox">
                            <label class="checkbox-label">
                                <input type="checkbox" name="option1" checked>
                                Business Closings
                            </label><br>

                            <label class="checkbox-label">
                                <input type="checkbox" name="option1" checked>
                                Moved Offsite To Store
                            </label><br>

                            <label class="checkbox-label">
                                <input type="checkbox" name="option1" checked>
                                Outside Sales
                            </label> <br>

                            <label class="checkbox-label">
                                <input type="checkbox" name="option1" checked>
                                Single Item Type Collections
                            </label> <br>

                            <label class="checkbox-label">
                                <input type="checkbox" name="option1" checked>
                                Buyouts Or Cleanouts
                            </label> <br>

                            <label class="checkbox-label">
                                <input type="checkbox" name="option1" checked>
                                Demolition Sales
                            </label> <br>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-9 col-md-9 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xl-12  m-sec map" style="height: 300px; background-image: url('{{asset('assets/img/gallery/img-1.jpg')}}');">

                        MAP PLACEHOLDER
                        </div>

                        <div class="col-lg-12 col-md-12 col-xl-12 m-sec filter-row">

                            <div class="row my-4">
                                <!-- Toggle Filters -->
                                <div class="col-md-8 d-flex gap-3 flex-wrap">
                                  <div class="card p-2">
                                    <label class="form-check-label me-2" for="estateSales">Estate Sales</label>
                                    <div class="form-check form-switch d-inline-block">
                                      <input class="form-check-input" type="checkbox" id="estateSales">
                                    </div>
                                  </div>
                          
                                  <div class="card p-2">
                                    <label class="form-check-label me-2" for="auctions">Auctions</label>
                                    <div class="form-check form-switch d-inline-block">
                                      <input class="form-check-input" type="checkbox" id="auctions" checked>
                                    </div>
                                  </div>
                          
                                  <div class="card p-2">
                                    <label class="form-check-label me-2" for="other">Other</label>
                                    <div class="form-check form-switch d-inline-block">
                                      <input class="form-check-input" type="checkbox" id="other">
                                    </div>
                                  </div>
                                </div>
                          
                                <!-- Distance Slider -->
                                <div class="col-md-4">
                                  <label for="distanceRange" class="form-label">Distance <span id="distanceValue" class="slider-value">25</span> Miles</label>
                                  <div class="range">
                                    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                                </div>
                                  {{-- <input type="range" class="form-range range-slider" min="0" max="100" value="25" id="distanceRange"> --}}
                                </div>
                              </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-xl-12 m-sec listings m-show">
                          <div class="container mt-4">
                            <div class="sale-card">
                              <div class="sale-image">
                                <img src="{{asset('assets/img/about/img-1.jpg')}}" alt="Sale Image">
                                <div class="image-overlay">138</div>
                              </div>
                              <div class="sale-details">
                                <div class="text-muted">Feb 22, 23</div>
                                <div class="text-muted">8am to 2pm (Sat)</div>
                                <div class="text-success font-weight-bold">Going on Now!</div>
                                <div class="sale-title">
                                  <a href="#">Blue Moon Estate Sale At Aberdeen Trails - Model Cars, Plan...</a>
                                </div>
                                <div class="text-muted">Listed by Blue Moon Estate Sales - Katy, Tx</div>
                                <div class="text-muted">Last modified 17 hours ago. 138 Pictures. 19 Pictures Added in Last 24 Hours.</div>
                                <div class="font-weight-bold">15907 Aberdeen Trails Dr<br>Houston, TX 77095</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    </section>

  <!-- Sticky Bottom Navigation -->
<div class="bottom-nav d-flex">
  <a href="javascript:void(0)" class="m-btn-map">
    <i class="fas fa-map-marked-alt"></i>
    Map
  </a>
  <a href="javascript:void(0)" class="m-btn-list active">
    <i class="fas fa-list"></i>
    List
  </a>
  <a href="javascript:void(0)" class="m-btn-filter">
    <i class="fas fa-filter"></i>
    Filters
  </a>
</div>



   
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 10px;
  background: #d3d3d3;
  outline: none;
  -webkit-transition: .2s;
  transition: opacity .2s;
}



.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}
/* RADIO START */
.radio-label {
      display: inline-flex;
      align-items: center;
      cursor: pointer;
      font-family: Arial, sans-serif;
      margin-bottom: 10px;
    }

    /* Remove default radio styles */
    input[type="radio"] {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      width: 24px; /* Increased size */
      height: 24px;
      border: 3px solid #555;
      border-radius: 50%;
      outline: none;
      cursor: pointer;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
      position: relative;
      margin-right: 10px; /* Space between radio and label */
    }

    /* Hover effect */
    input[type="radio"]:hover {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    /* Checked state */
    input[type="radio"]:checked {
      border-color: #007bff;
    }

    /* Checked circle */
    input[type="radio"]::before {
      content: "";
      width: 12px;
      height: 12px;
      background-color: #ff5722; /* Custom color */
      border-radius: 50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0);
      transition: transform 0.2s ease;
    }

    /* Show inner circle when checked */
    input[type="radio"]:checked::before {
      transform: translate(-50%, -50%) scale(1);
    }

    /* CHECKBOX */

    .custom-checkbox .checkbox-label {
      display: inline-flex;
      align-items: center;
      cursor: pointer;
      font-family: Arial, sans-serif;
      margin-bottom: 10px;
    }

    /* Remove default checkbox styles */
    .custom-checkbox input[type="checkbox"] {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      width: 28px; /* Increased size */
      height: 28px;
      border: 3px solid #555;
      border-radius: 4px;
      outline: none;
      cursor: pointer;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
      position: relative;
      margin-right: 10px; /* Space between checkbox and label */
    }

    /* Hover effect */
    .custom-checkbox input[type="checkbox"]:hover {
      border-color: #28a745;
      box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
    }

    /* Checked state */
    .custom-checkbox input[type="checkbox"]:checked {
      border-color: #28a745;
      background-color: #e6f9ec;
    }

    /* Green checkmark */
    .custom-checkbox input[type="checkbox"]::after {
      content: "";
      position: absolute;
      width: 8px;
      height: 16px;
      border: solid #28a745;
      border-width: 0 3px 3px 0;
      top: 3px;
      left: 9px;
      transform: rotate(45deg) scale(0);
      transition: transform 0.2s ease;
    }

    /* Show checkmark when checked */
    .custom-checkbox input[type="checkbox"]:checked::after {
      transform: rotate(45deg) scale(1);
    }

    /* TOP BAR FILTERS */

    .form-check.form-switch .form-check-input {
      width: 50px;
      height: 25px;
      background-color: #ccc;
      border: none;
      cursor: pointer;
    }

    .form-check.form-switch .form-check-input:checked {
      background-color: #4CAF50;
    }

    .form-check.form-switch .form-check-input:focus {
      box-shadow: none;
    }

    /* Slider styling */
    .range-slider {
      width: 100%;
    }

    .slider-value {
      font-weight: bold;
      margin-left: 10px;
    }

    /* LISTINGS */
    .image-overlay {
      position: absolute;
      bottom: 5px;
      right: 5px;
      background-color: rgba(0, 0, 0, 0.7);
      color: #fff;
      padding: 2px 6px;
      border-radius: 3px;
      font-size: 12px;
    }
    .sale-card {
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 15px;
      display: flex;
    }
    .sale-image {
      position: relative;
      width: 150px;
      height: 150px;
      overflow: hidden;
      border-radius: 5px;
    }
    .sale-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .sale-details {
      margin-left: 15px;
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    .sale-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
    }
    .sale-title a {
      font-size: 1.2rem;
      font-weight: bold;
      color: #007bff;
      text-decoration: none;
    }
    .sale-title a:hover {
      text-decoration: underline;
    }
    .sale-info {
      text-align: right;
    }

    /* STIICKY FILTERS */
    .bottom-nav {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #fff;
      border-top: 1px solid #ddd;
      box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
      z-index: 1000;
    }
    .bottom-nav a {
      flex: 1;
      text-align: center;
      padding: 10px 0;
      color: #555;
      font-size: 14px;
      text-decoration: none;
    }
    .bottom-nav a.active {
      color: #e91e63; /* Highlight color */
    }
    .bottom-nav i {
      display: block;
      font-size: 20px;
      margin-bottom: 3px;
    }
    @media (min-width: 768px) {
      .bottom-nav {
        display: none; /* Hide on desktop */
      }
    }

    @media (max-width: 768px) {
        .m-sec {
            display: none;
        }
        .m-sec.m-show {
            display: block;
        }
    }
</style>
@endsection

@section('scripts')
<script>
$(document).ready(function(){
  $(".m-btn-filter").click(function () {
        $(".m-sec").removeClass("m-show");
        $(".m-btn-map, .m-btn-list").removeClass("active");

        $(".top-heading, .filters").addClass("m-show");
        $(this).addClass("active");
    });

    $(".m-btn-map").click(function () {
        $(".m-sec").removeClass("m-show");
        $(".m-btn-filter, .m-btn-list").removeClass("active");

        $(".map").addClass("m-show");
        $(this).addClass("active");
    });

    $(".m-btn-list").click(function () {
        $(".m-sec").removeClass("m-show");
        $(".m-btn-filter, .m-btn-map").removeClass("active");

        $(".top-heading, .listings").addClass("m-show");
        $(this).addClass("active");
    });
})  
</script>
@endsection