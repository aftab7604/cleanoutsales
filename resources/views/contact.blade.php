@extends('layouts.master')
@section('content')
    {{-- <!-- Page Banner Start -->
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Contact Us</h2>
                <a href="#"><i class="lni-home"></i> Home</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Contact Us</span>
            </div>
        </div>
    </div>
    <!-- Page Banner End --> --}}

    <!-- Section Contact Start -->
    <section id="contact-section" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="contact-right-area">
                        <h2 class="title-">Get In Touch</h2>
                        <p>If you are interested in working with us, <br> please get in touch.</p>
                        <div class="contact-right">
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="lni-map-marker"></i>
                                </div>
                                <p>Tampa, Florida, US</p>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="lni-envelope"></i>
                                </div>
                                <p><a href="#">thecleanoutapp@gmail.com</a></p>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="lni-phone-handset"></i>
                                </div>
                                <p><a href="#">813-530-8544</a></p>
                            </div>
                        </div>
                        <div class="social-icon">
                            <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                            <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 form-line">
                    <h2>FeedBack</h2>
                    <form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="email" placeholder="Your name"
                                required data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email Address" required data-error="Please enter your Email">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="msg_subject" name="subject" placeholder="Subject"
                                required data-error="Please enter your message subject">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message" required
                                data-error="Write your message"></textarea>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane"
                                    aria-hidden="true"></i> Send Message</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- Section Contact End -->
    <div class="container">
        <div class="roe">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225475.40640274726!2d-82.61909170020722!3d27.992267948548328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2b782b3b9d1e1%3A0xa75f1389af96b463!2sTampa%2C%20FL%2C%20USA!5e0!3m2!1sen!2s!4v1738035097902!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <br>
@endsection
