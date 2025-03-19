@extends('layouts.master')
@section('title', 'Verify Email')
@section('content')
    <section id="content" class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-xs-12">
                    <div class="page-login-form box">
                        <h3>
                            Verify Email
                        </h3>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $message }}
                            </div>
                        @endif
                        <p>
                            Before proceeding, please check your email for a verification link. If you did not receive the
                            email,
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">click here to request
                                another</button>.
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
