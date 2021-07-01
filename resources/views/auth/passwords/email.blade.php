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
                <div class="login_form inner_page ">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <h3>Reset your password </h3>
                        <p>If you forgot your password, well, then we’ll email you instructions to reset your password.</p>
                        <div class="input-group mb-2 mr-sm-2">
                            <input id="email" type="email" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>




                        <button type="submit" class="btn btn-log btn-block btn-thm">Send Password Reset Link</button>
                       <a href={{ route('login') }}> <p class="text-center text-thm">Return to Login </p></a>
                        
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
