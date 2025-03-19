@extends('layouts.master')
@section('title', 'Register')
@section('content')
    <!-- Content section Start -->
    <section id="content" class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-xs-12">
                    <div class="page-login-form box">
                        <div id="registerFormSection">
                            <h3>
                                Create Your account
                            </h3>
                            <form action="{{ route('register.store') }}" id="registerForm" class="login-form" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label id="emailLabel" for="email">Email Address *</label>
                                    <input name="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address *">
                                    @if ($errors->has('email'))
                                        <small id="emailError" class="text-danger">{{ $errors->first('email') }}</small>
                                    @endif
                                    <small id="emailHelp"></small>
                                </div>
    
                                <div class="form-group">
                                    <label id="passwordLabel" for="password">Password *</label>
                                    <div class="input-group">
                                        <input name="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password *">
                                        <div class="input-group-append">
                                            <button id="toggleShowPassword" class="btn btn-outline-warning"
                                                type="button">SHOW</button>
                                        </div>
                                    </div>
                                    @if ($errors->has('password'))
                                        <small id="passwordError" class="text-danger">{{ $errors->first('password') }}</small>
                                    @endif
                                    <small id="passwordHelp"></small>
                                </div>
    
                                <div class="form-group">
                                    <label id="firstNameLabel" for="firstName">First Name *</label>
                                    <input name="first_name" id="firstName" type="text" class="form-control @error('first_name') is-invalid @enderror"
                                        placeholder="First Name *">
                                    @if ($errors->has('first_name'))
                                        <small id="firstNameError" class="text-danger">{{ $errors->first('first_name') }}</small>
                                    @endif
                                    <small id="firstNameHelp"></small>
                                </div>
    
                                <div class="form-group">
                                    <label id="lastNameLabel" for="lastName">Last Name *</label>
                                    <input name="last_name" id="lastName" type="text" class="form-control @error('last_name') is-invalid @enderror"
                                        placeholder="Last Name *">
                                    @if ($errors->has('last_name'))
                                        <small id="lastNameError" class="text-danger">{{ $errors->first('last_name') }}</small>
                                    @endif
                                    <small id="lastNameHelp"></small>
                                </div>
    
                                <div class="form-group">
                                    <label id="phoneNumberLabel" for="phoneNumber">Phone Number *</label>
                                    <input name="phone_number" id="phoneNumber" type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                        placeholder="Phone Number *">
                                    @if ($errors->has('phone_number'))
                                        <small id="phoneNumberError" class="text-danger">{{ $errors->first('phone_number') }}</small>
                                    @endif
                                    <small id="phoneNumberHelp"></small>
                                </div>
    
                                <div class="form-group">
                                    <label id="postalCodeLabel" for="postalCode">Postal Code *</label>
                                    <input name="postal_code" id="postalCode" type="number" class="form-control @error('postal_code') is-invalid @enderror"
                                        placeholder="Postal Code *">
                                    @if ($errors->has('postal_code'))
                                        <small id="postalCodeError" class="text-danger">{{ $errors->first('postal_code') }}</small>
                                    @endif
                                    <small id="postalCodeHelp"></small>
                                </div>
                                <button type="submit" class="btn btn-common log-btn mt-3">Register</button>
                                <p class="text-center">Already have an account?<a href="{{ route('login') }}"> Sign In</a></p>
                            </form>
                        </div>
                        <div id="registerDoneSetion" style="display: none; text-align: center;">
                            <h3>
                                Account has been created
                            </h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section End -->
@endsection

@section('scripts')
    <script src="assets/js/scripts/register.js"></script>
@endsection
