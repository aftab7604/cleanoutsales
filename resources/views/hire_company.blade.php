@extends('layouts.master')
@section('content')
    {{-- <!-- Page Banner Start -->
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Estate Sale Marketplace</h2>
                <a href="#"><i class="lni-home"></i> Home</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Hire a Company</span>
            </div>
        </div>
    </div>
    <!-- Page Banner End --> --}}

    <!-- Services Section Start -->
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">Hire a Company</h2>
                        <p>Need help finding a company? We've made it easy. We'll contact the companies for you!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Services item -->
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon">
                            <i class="lni-apartment"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">Tips For Choosing a Company</a></h3>
                            <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan
                                wasnad Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quibusdam iste a
                                repellendus sint velit nam. Veritatis corrupti exercitationem aliquam sequi asperiores aut
                                ut pariatur soluta! Architecto ratione sapiente mollitia.</p>
                                <br>
                                <center>
                                    <a href="#" class="btn btn-common">Learn More</a>
                                </center>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.4s">
                        <div class="icon">
                            <i class="lni-crown"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="{{route('pricing')}}">List Your Company</a></h3>
                            <p>EstateSales.NET has been around since 2002 and has provided a way for over 9,000 estate sale
                                companies nationwide to grow beyond their expectations. List your company today! Lorem ipsum
                                dolor sit, amet consectetur adipisicing elit. Commodi, tenetur molestias. Dignissimos
                                tempore dolorum adipisci sunt illum consequatur</p>
                                <br>
                                <center>
                                    <a href="{{route('pricing')}}" class="btn btn-common">List Your Company</a>
                                </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <div class="row">
        <div class="col-12">
            <div class="section-title-header text-center">
                <h2 class="section-title">What People Are Saying About Companies Listed on Cleanout</h2>

            </div>
        </div>
    </div>

    <!-- Testimonial Section Start -->
    <section class="testimonial section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="testimonials" class="owl-carousel">
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                                </div>
                            </div>
                            <div class="client-info">
                                <div class="img-thumb">
                                    <img src="assets/img/testimonial/img1.png" alt="">
                                </div>
                                <div class="info-text">
                                    <h2><a href="#">Michael Papirov</a></h2>
                                    <h4><a href="#">Customer</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                                </div>
                            </div>
                            <div class="client-info">
                                <div class="img-thumb">
                                    <img src="assets/img/testimonial/img2.png" alt="">
                                </div>
                                <div class="info-text">
                                    <h2><a href="#">Josh Rossi</a></h2>
                                    <h4><a href="#">Manager</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                                </div>
                            </div>
                            <div class="client-info">
                                <div class="img-thumb">
                                    <img src="assets/img/testimonial/img3.png" alt="">
                                </div>
                                <div class="info-text">
                                    <h2><a href="#">Daniel Greem</a></h2>
                                    <h4><a href="#">Customer</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                                </div>
                            </div>
                            <div class="client-info">
                                <div class="img-thumb">
                                    <img src="assets/img/testimonial/img4.png" alt="">
                                </div>
                                <div class="info-text">
                                    <h2><a href="#">John Doe</a></h2>
                                    <h4><a href="#">Manager</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                                </div>
                            </div>
                            <div class="client-info">
                                <div class="img-thumb">
                                    <img src="assets/img/testimonial/img5.png" alt="">
                                </div>
                                <div class="info-text">
                                    <h2><a href="#">Michael Papirov</a></h2>
                                    <h4><a href="#">Customer</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->
@endsection
