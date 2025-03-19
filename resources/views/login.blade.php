@extends('layouts.master')
@section('title', 'Login')
@section('content')
    {{-- <!-- Page Banner Start -->
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Log</h2>
                <a href="#"><i class="lni-home"></i> Home</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Log</span>
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
                            Login
                        </h3>
                        <form action="{{ route('authenticate') }}" id="loginForm" class="login-form" method="POST">
                            @csrf
                            <div class="form-group">
                                <label id="emailLabel" for="email">Email Address *</label>
                                <input type="text" id="email" class="form-control" name="email"
                                    placeholder="Email Address *">
                                <small id="emailHelp"></small>
                                @if ($errors->has('email'))
                                    <small id="emailError" class="text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label id="passwordLabel" for="password">Password *</label>
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control" placeholder="Password *" name="password">
                                    <div class="input-group-append">
                                        <button id="toggleShowPassword" class="btn btn-outline-warning"
                                            type="button">SHOW</button>
                                    </div>
                                </div>
                                <small id="passwordHelp"></small>
                                @if ($errors->has('password'))
                                    <small id="passwordError" class="text-danger">{{ $errors->first('password') }}</small>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-common log-btn">Submit</button>
                        </form>
                        <ul class="form-links">
                            <li class="text-center"><a href="{{route('register')}}">Don't have an account?</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section End -->
@endsection

@section('scripts')
    <script src="assets/js/scripts/login.js"></script>
@endsection
