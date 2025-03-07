@extends('layouts.master')
@section('content')
    {{-- <!-- Page Banner Start -->
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Blogs</h2>
                <a href="#"><i class="lni-home"></i> Home</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Blog</span>
            </div>
        </div>
    </div>
    <!-- Page Banner End --> --}}

    <!-- Blog Section Start -->
    <div id="blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <!-- Blog Post -->
                    <div class="blog-post">
                        <a href="{{route('blog-detail')}}" class="post-img">
                            <img class="img-fluid" src="assets/img/blog/blog-post1.jpg" alt="">
                        </a>
                        <!-- Content -->
                        <div class="content">
                            <h2>
                                <a href="{{route('blog-detail')}}">Great House on The Hills</a>
                            </h2>
                            <ul class="post-meta">
                                <li>Novemer 12, 2018</li>
                                <li><a href="#">5 Comments</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Class aptent taciti sociosqu ad litora torquent…</p>
                            <a href="{{route('blog-detail')}}" class="btn btn-common read-more">Read More <i
                                    class="lni-chevron-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Post -->
                    <div class="blog-post">
                        <a href="{{route('blog-detail')}}" class="post-img">
                            <img class="img-fluid" src="assets/img/blog/blog-post2.jpg" alt="">
                        </a>
                        <!-- Content -->
                        <div class="content">
                            <h2>
                                <a href="{{route('blog-detail')}}">Garden that has Flowers</a>
                            </h2>
                            <ul class="post-meta">
                                <li>Novemer 12, 2018</li>
                                <li><a href="#">5 Comments</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Class aptent taciti sociosqu ad litora torquent…</p>
                            <a href="{{route('blog-detail')}}" class="btn btn-common read-more">Read More <i
                                    class="lni-chevron-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Post -->
                    <div class="blog-post">
                        <a href="{{route('blog-detail')}}" class="post-img">
                            <img class="img-fluid" src="assets/img/blog/blog-post3.jpg" alt="">
                        </a>
                        <!-- Content -->
                        <div class="content">
                            <h2>
                                <a href="{{route('blog-detail')}}">Normal Post with Image</a>
                            </h2>
                            <ul class="post-meta">
                                <li>Novemer 12, 2018</li>
                                <li><a href="#">5 Comments</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Class aptent taciti sociosqu ad litora torquent…</p>
                            <a href="{{route('blog-detail')}}" class="btn btn-common read-more">Read More <i
                                    class="lni-chevron-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Post -->
                    <div class="blog-post">
                        <a href="{{route('blog-detail')}}" class="post-img">
                            <img class="img-fluid" src="assets/img/blog/blog-post4.jpg" alt="">
                        </a>
                        <!-- Content -->
                        <div class="content">
                            <h2>
                                <a href="{{route('blog-detail')}}">Great House on The Hills</a>
                            </h2>
                            <ul class="post-meta">
                                <li>Novemer 12, 2018</li>
                                <li><a href="#">5 Comments</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Class aptent taciti sociosqu ad litora torquent…</p>
                            <a href="{{route('blog-detail')}}" class="btn btn-common read-more">Read More <i
                                    class="lni-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="sidebar right">
                        <div class="widget">
                            <h3 class="sidebar-title">Search Blog</h3>
                            <div class="search-blog-input">
                                <div class="input">
                                    <input class="form-control" type="text" placeholder="Type and hit enter"
                                        value="">
                                    <i class="lni-search"></i>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="widget">
                            <h3 class="sidebar-title">Popular Posts</h3>
                            <ul class="widget-tabs">
                                <li>
                                    <div class="widget-content">
                                        <div class="widget-thumb">
                                            <a href="{{route('blog-detail')}}"><img src="assets/img/blog/blog-widget-01.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="widget-text">
                                            <h5><a href="{{route('blog-detail')}}">What to Do a Year Before Buying Apartment </a>
                                            </h5>
                                            <span>October 26, 2018</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-content">
                                        <div class="widget-thumb">
                                            <a href="{{route('blog-detail')}}"><img src="assets/img/blog/blog-widget-02.jpg"
                                                    alt=""></a>
                                        </div>

                                        <div class="widget-text">
                                            <h5><a href="{{route('blog-detail')}}">Bedroom Colors You'll Never Regret</a></h5>
                                            <span>November 9, 2018</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-content">
                                        <div class="widget-thumb">
                                            <a href="{{route('blog-detail')}}"><img src="assets/img/blog/blog-widget-03.jpg"
                                                    alt=""></a>
                                        </div>

                                        <div class="widget-text">
                                            <h5><a href="{{route('blog-detail')}}">8 Tips to Help You Finding New Home</a></h5>
                                            <span>November 12, 2018</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            </ul>
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

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->
@endsection
