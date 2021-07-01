@extends('layouts.master')

@section('content')


<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <h2 class="breadcrumb_title">Sign in</h2>
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
                    <form method="POST" action="{{ route('login') }}"  class="needs-validation">
                        @csrf
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="text" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="input-group form-group mb5">
                            <input id="password" type="password"  class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                        </div>

                        <div class="form-group custom-control custom-checkbox">
                            <input  class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="exampleCheck2">Remember me</label>
                            <a class="btn-fpswd float-right" href={{ route('password.request') }}>Forgot password?</a>
                        </div>
                        <button type="submit" class="btn btn-log btn-block btn-thm">Sign in</button>
                        <p class="text-center mb30 mt20">Don't have an account? <a class="text-thm" href={{ route('register') }}>Sign up</a></p>
                        <hr>
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
