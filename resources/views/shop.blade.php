@extends('layouts.master')
@section('title', 'Shop')
@section('content')
    {{-- <!-- Page Banner Start -->
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Estate Sale Marketplace</h2>
                <a href="#"><i class="lni-home"></i> Home</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Shop</span>
            </div>
        </div>
    </div>
    <!-- Page Banner End --> --}}

    <!-- Main container Start -->
    <div class="main-container section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <!-- Sidebar Start -->
                    <div class="sidebar sticky right">
                        <!-- Widget -->
                        <div class="widget">
                            <h3 class="sidebar-title">Search</h3>
                            <div class="row with-forms">
                                <div class="col-md-12">
                                    <select class="classic">
                                        <option>Traditional  Sales</option>
                                        <option>Market Place</option>
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Area Range -->
                            <div class="range-area">
                                <label>Refine by Distance</label>
                                <div id="area-range">
                                    <input type="text" class="form-control" placeholder="Zip Code">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- Price Range -->
                            <div class="price-range">
                                <label>Price Range</label>
                                <div id="area-price">
                                    <span>From $</span>
                                    <input type="text" class="form-control">
                                    <span>To $</span>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- More Search Options -->
                            <div class="more-search-options">
                                <h3 class="sidebar-title">Categories</h3>
                                <!-- Checkboxes -->
                                <div class="checkboxes one-in-row">
                                    <input id="check-2" type="checkbox" name="check">
                                    <label for="check-2">Farm & Auto </label>
                                    <input id="check-3" type="checkbox" name="check">
                                    <label for="check-3">Electronics</label>
                                    <input id="check-4" type="checkbox" name="check">
                                    <label for="check-4">Fashion and Jewwllry </label>
                                    <input id="check-5" type="checkbox" name="check">
                                    <label for="check-5">Home</label>
                                    <input id="check-6" type="checkbox" name="check">
                                    <label for="check-6">Music and Arts</label>
                                    <input id="check-7" type="checkbox" name="check">
                                    <label for="check-7">Outdoor</label>
                                    <input id="check-8" type="checkbox" name="check">
                                    <label for="check-8">Tools</label>
                                </div>
                            </div>
                            <!-- More Search Options  End -->
                            <button class="fullwidth btn btn-common">Search</button>
                        </div>
                        <!-- Widget End -->
                    </div>
                    <!-- Sidebar End -->
                </div>

                <div class="col-lg-8 col-md-12 col-xs-12">
                    <!-- Product Filter Start -->
                    <div class="product-filter">
                        <!-- Sort by -->
                        <div class="sort-by">
                            <span>Sort by:</span>
                            <div class="sort-by-select">
                                <select class="classic">
                                    <option>Default Order</option>
                                    <option>Price Low to High</option>
                                    <option>Price High to Low</option>
                                    <option>Newest Listing</option>
                                    <option>Oldest Listing</option>
                                </select>
                            </div>
                        </div>
                        <!-- Layout Switcher -->
                        <div class="layout-switcher">
                            <a href="#" class="list active">
                                <i class="lni-menu"></i>
                            </a>
                            <a href="#" class="grid ">
                                <i class="lni-grid"></i>
                            </a>
                        </div>
                        <p class="text-left">42 homes found</p>
                    </div>
                    <!-- Product Filter End -->

                    <!-- Listings Star -->
                    <div class="listing-container list-layout">
                        <div class="property-main">
                            <div class="property-wrap">
                                <div class="property-item">
                                    <div class="item-thumb">
                                        <a class="hover-effect" href="{{route('detail')}}">
                                            <img class="img-fluid" src="assets/img/property/house-1.jpg" alt="">
                                        </a>
                                        <div class="label-inner">
                                            <span class="label-status label">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <h3 class="property-title"><a href="{{route('detail')}}">Amazing oceanfront
                                                apartment</a></h3>
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

                        <div class="property-main">
                            <div class="property-wrap">
                                <div class="property-item">
                                    <div class="item-thumb">
                                        <a class="hover-effect" href="{{route('detail')}}">
                                            <img class="img-fluid" src="assets/img/property/house-2.jpg" alt="">
                                        </a>
                                        <div class="label-inner">
                                            <span class="label-status label">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <h3 class="property-title"><a href="{{route('detail')}}">Amazing oceanfront
                                                apartment</a></h3>
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

                        <div class="property-main">
                            <div class="property-wrap">
                                <div class="property-item">
                                    <div class="item-thumb">
                                        <a class="hover-effect" href="{{route('detail')}}">
                                            <img class="img-fluid" src="assets/img/property/house-3.jpg" alt="">
                                        </a>
                                        <div class="label-inner">
                                            <span class="label-status label">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <h3 class="property-title"><a href="{{route('detail')}}">Guaranteed modern home</a></h3>
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

                        <div class="property-main">
                            <div class="property-wrap">
                                <div class="property-item">
                                    <div class="item-thumb">
                                        <a class="hover-effect" href="{{route('detail')}}">
                                            <img class="img-fluid" src="assets/img/property/house-4.jpg" alt="">
                                        </a>
                                        <div class="label-inner">
                                            <span class="label-status label">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <h3 class="property-title"><a href="{{route('detail')}}">Family home for sale</a></h3>
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
                    <!-- Listings End -->

                    <div class="pagination-container">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="btn btn-common" href="#"><i
                                            class="lni-chevron-left"></i> Previous </a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="btn btn-common" href="#">Next <i
                                            class="lni-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Main container End -->
@endsection
