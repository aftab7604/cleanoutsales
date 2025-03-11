@extends('layouts.master')
@section('title', 'Register')
@section('content')
    {{-- <!-- Page Banner Start -->
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Register</h2>
                <a href="#"><i class="lni-home"></i> Home</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Register</span>
            </div>
        </div>
    </div>
    <!-- Page Banner End --> --}}

    <!-- Content section Start -->
    <section id="content" class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-xs-12">
                    <div class="page-login-form box">
                        <h3>
                            Create Your account
                        </h3>
                        <form class="login-form">
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni lni-user-4" style="color: #000"></i>
                                    <input type="text" class="form-control" name="name" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-envelope"></i>
                                    <input type="text" class="form-control" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-lock"></i>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-unlock"></i>
                                    <input type="password" class="form-control" placeholder="Retype Password">
                                </div>
                            </div>
                            <button class="btn btn-common log-btn mt-3">Register</button>
                            <p class="text-center">Already have an account?<a href="{{route('login')}}"> Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section End -->
@endsection
