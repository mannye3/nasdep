@extends('layouts.master')

@section('content')



<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <h2 class="breadcrumb_title">Reset Password</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sign in</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our SigIn -->
<section class="our-log">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 offset-lg-3">
                <div class="login_form inner_page">

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <h3>Reset Password</h3>
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="input-group mb-2 mr-sm-2">
                            <input id="email" placeholder="Enter email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group form-group mb5">
                            <input id="password" placeholder="Enter new password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                        </div>


                        <div class="input-group form-group mb5">
                            <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">




                        </div>

                        <button type="submit" class="btn btn-log btn-block btn-thm">Reset Password</button>

                        <!-- <div class="row mt30">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-fb btn-block"><i class="fa fa-facebook float-left mt5"></i> Log In via Facebook</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-googl btn-block"><i class="fa fa-google float-left mt5"></i> Log In via Google+</button>
                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>











@endsection
