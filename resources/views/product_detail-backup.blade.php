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
            <div class="property-details">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-xs-12">
                        <div class="info">
                            <h3>Family Condo <span class="badge">Auction</span></h3>
                            <p class="room-type">Home</p>
                            <p class="address"><i class="lni-map-marker"></i> York Blvd, Los Angeles, US View, CA 94041USA</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12">
                        <div class="details">
                            <div class="details-listing">
                                <p>Days</p>
                                <h5>05</h5>
                            </div>
                            <div class="details-listing">
                                <p>Hours</p>
                                <h5>06</h5>
                            </div>
                            <div class="details-listing">
                                <p>Minutes</p>
                                <h5>53</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12">
                        <div class="others">
                            <ul>
                                <li><span>$22,500.00</span></li>
                                <li><a href="#"><i class="lni-bookmark-alt"></i></a></li>
                                <li><a href="#"><i class="lni-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Product Info Start -->
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="property-slider">
                        <div id="property-slider" class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="assets/img/productinfo/img1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="assets/img/productinfo/img2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="assets/img/productinfo/img3.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="inner-box property-dsc">
                        <h2 class="desc-title"> Description</h2>
                        <b>Pickup Details</b>
                        <p>Pick up will be Saturday February 1st We will reach out to schedule pick up time slots</p>
                    </div>

                    <div class="inner-box featured">
                        <h2 class="desc-title">Seller Details</h2>
                        <h4>Elite Estate Liquidators, LLC</h4>
                        <br>
                        <ul class="property-features">
                            <li>Website: <span><a href="">Company Website</a></span></li>
                            <li>Details: <span><a href="">Company Details</a></span></li>
                            <li>Contact: <span><a href="tel:">(341) 545-8744</a> </span></li>
                        </ul>
                    </div>

                    {{-- <div class="inner-box location-map">
                        <h2 class="desc-title">Location On Map</h2>
                        <div id="conatiner-map"></div>
                    </div> --}}

                </div>

                <!--Sidebar-->
                <aside id="sidebar" class="col-lg-4 col-md-12 col-xs-12 right-sidebar">
                    <!-- Widget -->
                    <div class="widget mb2">
                        <button class="widget-button"><i class="lni-printer"></i></button>
                        <button class="widget-button "><i class="lni-star"></i></button>
                        <button class="widget-button"><i class="lni-zip"></i></button>
                        <div class="clearfix"></div>
                    </div>

                    <!-- Property Agent Widget -->
                    <div class="widget mt3">
                        <div class="agent-inner">
                            <div class="agent-title">
                                <div class="agent-photo">
                                    <a href="#"><img src="assets/img/productinfo/agent.jpg" alt=""></a>
                                </div>
                                <div class="agent-details">
                                    <h3><a href="#">Elite Estate Liquidators, LLC</a></h3>
                                    <span><i class="lni-phone-handset"></i>(123) 123-456</span>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Your Email">
                            <input type="text" class="form-control" placeholder="Your Phone">
                            <p>I'm interested in this product [ID 123456] and I'd like to know more details.</p>
                            <button class="btn btn-common fullwidth mt-4">Send Message</button>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="widget widget-social">
                        <h3 class="sidebar-title">Social Media</h3>
                        <ul class="social-icons">
                            <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                            <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a class="google" href="#"><i class="lni-google-plus"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a></li>
                        </ul>
                    </div>

                </aside>
                <!--End sidebar-->
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="desc-title">Similar Properties</h2>
                </div>
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
