@extends('layouts.master')
@section('content')
    {{-- <!-- Page Banner Start -->
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Estate Sale Marketplace</h2>
                <a href="#"><i class="lni-home"></i> Home</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Standard Detail</span>
            </div>
        </div>
    </div>
    <!-- Page Banner End --> --}}

    <!-- Start Content -->
    <div id="content" class="section-padding">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6">
                            <h3>Becky Thompson Estate Sale</h3>
                            <p><strong>estate sale &middot; 2 day sale &middot; starts today</strong></p>
                            <div class="featured-badge">Regionally Featured</div>
        
                            <p><strong><i class="fas fa-map-marker-alt"></i> Address</strong><br>
                            <a href="https://maps.google.com/?q=25431 Richton Falls, Richmond, TX 77406" target="_blank">
                                25431 Richton Falls<br>Richmond, TX 77406
                            </a></p>
        
                            <p><strong><i class="fas fa-calendar-alt"></i> Dates</strong></p>
                            <div class="d-flex">
                                <div class="card text-center mr-2 border border-3" style="width: 100px;">
                                    <div class="card-header bg-success text-white py-1" style="font-size: 0.9rem;">
                                        Sat
                                    </div>
                                    <div class="card-body p-2">
                                        <p class="mb-0"><strong>Feb 22</strong></p>
                                        <p class="mb-0">9am to 5pm</p>
                                    </div>
                                </div>
                                <div class="card text-center border border-3" style="width: 100px;">
                                    <div class="card-header bg-success text-white py-1" style="font-size: 0.9rem;">
                                        Sun
                                    </div>
                                    <div class="card-body p-2">
                                        <p class="mb-0"><strong>Feb 23</strong></p>
                                        <p class="mb-0">1pm to 5pm</p>
                                    </div>
                                </div>
                            </div>
                            
        
                            <div class="action-buttons mt-3">
                                <button class="btn btn-secondary"><i class="fas fa-print"></i> PRINT</button>
                                <button class="btn btn-primary"><i class="fab fa-facebook-f"></i> SHARE</button>
                                <button class="btn btn-info"><i class="fab fa-twitter"></i> TWEET</button>
                                <button class="btn btn-danger"><i class="fab fa-pinterest"></i> PIN IT</button>
                            </div>
                        </div>
        
                        <!-- Right Column (Map) -->
                        <div class="col-md-6 d-none d-md-block">
                            <div class="map-container">
                                <iframe src="https://www.google.com/maps?q=25431%20Richton%20Falls%20Richmond,%20TX%2077406&output=embed"
                                    width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""
                                    aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                <!-- Company Info -->
                <div class="col-md-8">
                    <div class="card h-100">
                        <div class="card-body d-flex">
                            <img src="{{asset('assets/img/about/img-1.jpg')}}" alt="Company Award" class="img-thumbnail mr-4" style="width: 120px; height: 120px;">
                            <div>
                                <h4 class="card-title">Becky Thompson Estate Sales</h4>
                                <div class="mb-2">
                                    <a href="#" class="mr-3">
                                        <i class="fas fa-globe"></i> Company Website
                                    </a>
                                    <a href="#">
                                        <i class="fas fa-briefcase"></i> Company Details
                                    </a>
                                </div>
                                <div>
                                    <a href="tel:7132541407">
                                        <i class="fas fa-phone"></i> (713) 254-1407
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
                <!-- Call to Action -->
                <div class="col-md-4 call-to-action-card">
                    <div class="card text-white h-100 text-center d-flex flex-column justify-content-center">
                        <div class="card-body">
                            <h5 class="card-title">Become a User,</h5>
                            <p class="card-text">Get Notified of Estate Sales<br>For Free!</p>
                            <a href="#" class="btn btn-light mt-2">Sign Up Today!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="terms-box">
                <div class="terms-title">
                    <i class="fas fa-shield-alt"></i> Terms & Conditions
                </div>
                <ul class="mb-0">
                    <li>All Sales are final - no refunds or exchanges</li>
                    <li>Please bring help to load your purchases</li>
                    <li>Cash only</li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4">
                {{-- <div class="col-12">
                    <h2 class="desc-title">Similar Properties</h2>
                </div> --}}
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="property-main">
                        <div class="property-wrap">
                            <div class="property-item">
                                <div class="item-thumb">
                                    <a class="hover-effect" href="property.html">
                                        <img class="img-fluid" src="assets/img/property/house-1.jpg" alt="">
                                    </a>
                                    <div class="label-inner">
                                        <span class="label-status label ">For Sale</span>
                                    </div>
                                </div>
                                <div class="item-body">
                                    <h3 class="property-title"><a href="property.html">Amazing oceanfront apartment</a>
                                    </h3>
                                    <div class="adderess"><i class="lni-map-marker"></i> Drive Street, Los Angeles, US
                                    </div>
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
                                        <span class="label-status label ">Auction</span>
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
            </div>
        </div>

    </div>
    <!-- End Content -->
@endsection

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
<style>
.featured-badge {
    background-color: #8bc34a;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    display: inline-block;
    margin-bottom: 15px;
}
.date-box {
    background-color: #8bc34a;
    color: white;
    text-align: center;
    padding: 10px;
    border-radius: 5px;
}
.date-box h5 {
    margin: 0;
}
.action-buttons button {
    margin-right: 5px;
}
.map-container {
    height: 300px;
}
/*  */

.img-thumbnail {
    width: 120px;
    height: 120px;
    object-fit: cover;
}
.icon-circle {
    background-color: #e0e0e0;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-right: 8px;
}
.contact-link {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    color: #007bff;
    text-decoration: none;
}
.contact-link:hover {
    text-decoration: underline;
}

/*  */

.terms-box {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    background-color: #fff;
}
.terms-title {
    font-size: 1.25rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}
.terms-title i {
    color: #007bff;
    margin-right: 10px;
    font-size: 1.5rem;
}

.call-to-action-card .card{
    background-color: #21416a;
    font-family: montserratmedium, Helvetica, Arial, Lucida Grande, sans-serif;
}

</style>
@endsection
