@extends('layouts.master')
@section('title', 'Blog Details')
@section('content')
    {{-- <!-- Page Banner Start -->
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Property - Details</h2>
                <a href="#"><i class="lni-home"></i> Blog</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Blog Details</span>
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
                    <div class="blog-post single-post">
                        <a href="single-blog.html" class="post-img">
                            <img class="img-fluid" src="assets/img/blog/blog-post1.jpg" alt="">
                        </a>
                        <!-- Content -->
                        <div class="content">
                            <h2>
                                <a href="single-blog.html">Great House on The Hills</a>
                            </h2>
                            <ul class="post-meta">
                                <li>Novemer 12, 2018</li>
                                <li><a href="#">5 Comments</a></li>
                            </ul>
                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate</p>
                            <p>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                                unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                                aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                                non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                voluptatem.</p>
                            <ul class="share-buttons mt-5 mb-4">
                                <li><a class="fb-share" href="#"><i class="lni-facebook-filled"></i> Share</a></li>
                                <li><a class="twitter-share" href="#"><i class="lni-twitter-filled"></i> Tweet</a>
                                </li>
                                <li><a class="gplus-share" href="#"><i class="lni-google-plus"></i> Share</a></li>
                                <li><a class="linkedin-share" href="#"><i class="lni-linkedin-filled"></i>
                                        linkedin</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Author -->
                    <div class="author post-block">
                        <h4>Meet Author</h4>
                        <div class="thumb">
                            <a href="#"><img src="assets/img/blog/author-thumb.jpg" alt=""></a>
                        </div>
                        <div class="body">
                            <h5>Maria Marlin</h5>
                            <a href="#">jennie@example.com</a>
                            <p>Nullam ultricies, velit ut varius molestie, ante metus condimentum nisi, dignissim facilisis
                                turpis ex in libero. Sed porta ante tortor, a pulvinar mi facilisis nec. Proin finibus dolor
                                ac convallis congue.</p>
                        </div>
                    </div>

                    <!-- Start Comment Area -->
                    <div id="comments">
                        <div class="comment-box">
                            <h3>Comments (5)</h3>
                            <ol class="comments-list">
                                <li>
                                    <div class="media">
                                        <div class="thumb-left">
                                            <a href="#">
                                                <img class="img-fluid" src="assets/img/blog/user1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="info-body">
                                            <div class="media-heading">
                                                <h4 class="name">Larsen Mortin</h4>
                                                <span class="comment-date"><i class="lni-alarm-clock"></i> 18 December
                                                    2018</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus,
                                                excepturi modi sit. Exercitationem nesciunt necessitatibus excepturi magni
                                                vero voluptatibus quam, iste explicabo, qui. Explicabo perferendis officia.
                                            </p>
                                            <a href="#" class="reply-link"><i class="lni-reply"></i> Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <div class="media">
                                                <div class="thumb-left">
                                                    <a href="#">
                                                        <img class="img-fluid" src="assets/img/blog/user3.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="info-body">
                                                    <div class="media-heading">
                                                        <h4 class="name">Hansom Rob</h4>
                                                        <span class="comment-date"><i class="lni-alarm-clock"></i> 18
                                                            December 2018</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus,
                                                        excepturi modi sit. Exercitationem nesciunt necessitatibus excepturi
                                                        magni vero voluptatibus quam, iste explicabo, qui. Explicabo
                                                        perferendis officia.</p>
                                                    <a href="#" class="reply-link"><i class="lni-reply"></i> Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="thumb-left">
                                            <a href="#">
                                                <img class="img-fluid" src="assets/img/blog/user1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="info-body">
                                            <div class="media-heading">
                                                <h4 class="name">Sticky Fingerz</h4>
                                                <span class="comment-date"><i class="lni-alarm-clock"></i> 18 December
                                                    2018</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus,
                                                excepturi modi sit. Exercitationem nesciunt necessitatibus excepturi magni
                                                vero voluptatibus quam, iste explicabo, qui. Explicabo perferendis officia.
                                            </p>
                                            <a href="#" class="reply-link"><i class="lni-reply"></i> Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                            <!-- Start Respond Form -->
                            <div id="respond">
                                <h3>Add Comment</h3>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                            <div class="form-group">
                                                <input id="author" class="form-control" name="author" type="text"
                                                    value="" size="30" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                            <div class="form-group">
                                                <input id="email" class="form-control" name="author" type="text"
                                                    value="" size="30" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12col-xs-12">
                                            <div class="form-group">
                                                <textarea id="comment" class="form-control" name="comment" cols="45" rows="8" placeholder="Massage"></textarea>
                                            </div>
                                            <button type="submit" id="submit" class="btn btn-common">Add
                                                Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Respond Form -->
                        </div>
                    </div>
                    <!-- End Comment Area -->
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
                                            <a href="single-blog.html"><img src="assets/img/blog/blog-widget-01.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="widget-text">
                                            <h5><a href="single-blog.html">What to Do a Year Before Buying Apartment </a>
                                            </h5>
                                            <span>October 26, 2018</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-content">
                                        <div class="widget-thumb">
                                            <a href="single-blog.html"><img src="assets/img/blog/blog-widget-02.jpg"
                                                    alt=""></a>
                                        </div>

                                        <div class="widget-text">
                                            <h5><a href="single-blog.html">Bedroom Colors You'll Never Regret</a></h5>
                                            <span>November 9, 2018</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-content">
                                        <div class="widget-thumb">
                                            <a href="single-blog.html"><img src="assets/img/blog/blog-widget-03.jpg"
                                                    alt=""></a>
                                        </div>

                                        <div class="widget-text">
                                            <h5><a href="single-blog.html">8 Tips to Help You Finding New Home</a></h5>
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
