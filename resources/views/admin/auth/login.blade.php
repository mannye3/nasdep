@extends('layouts.adminlogin')

@section('content')



                            <!--begin::Signin-->
                            <div class="login-form login-signin">


                           <!--begin::Form-->
                                   <form class="form"   action="{{ route('admin.login') }}" method="post">
                                    @csrf
                                      <div class="pb-13 pt-lg-0 pt-5">
                                        <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Sign In</h3>
                                        <span class="text-muted font-weight-bold font-size-h4">Enter your email and password
                                        </span>
                                    </div>
                                    <!--begin::Title-->
                                    <div class="pb-13 pt-lg-0 pt-5">
                                        <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg"></h3>

                                    </div>
                                    <!--begin::Title-->
                                    <!--begin::Form group-->
                                   <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                        <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg  @error('email') is-invalid @enderror " type="enail" name="email" value="{{ old('email') }}" autocomplete="off" />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>

                                    @enderror

                                    </div>
                                    <!--end::Form group-->
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between mt-n5">
                                            <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                            {{-- <a href=users/forget_password" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">Forgot Password ?</a> --}}
                                        </div>
                                        <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg " type="password"  @error('password') is-invalid @enderror name="password"  autocomplete="off" />
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror


                                    </div>
                                    <!--end::Form group-->
                                    <!--begin::Action-->
                                    <div class="pb-lg-0 pb-5">
                                        <button type="submit" id="kt_login_signin_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>


                                    </div>



                                    <!--end::Action-->
                                </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Signin-->

                            </div>
                            <!--end::Aside body-->







{{--
<div>
    <div class="container-fluid p-0">
        <div class="row g-0">

            <div class="col-xl-4">
                <div class="auth-full-page-content p-md-5 p-4">
                    <div class="w-100">

                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5">
                                <a href="index.html" class="d-block auth-logo">
                                    <img src="https://console.nasdep.com/img/nasdep.png" alt="" height="60" class="auth-logo-dark" >
                                </a>
                            </div>
                            <div class="my-auto" >

                                <div>
                                    <p class="text-muted">Sign in to NASDEP ADMIN.</p>
                                </div>

                                <div class="mt-4">
                                    <form method="POST" action="{{ route('admin.login') }}"  class="needs-validation" >
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email</label>
                                            <input type="text" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>

                                          <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input id="password" type="password"  class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" @error('password') is-invalid @enderror name="password"  autocomplete="new-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-check">
                                            <label class="form-check-label" for="remember-check">
                                                Remember me
                                            </label>
                                        </div>

                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                        </div>



                                    </form>

                                </div>
                            </div>

                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="auth-full-bg pt-lg-5 p-4">
                    <div class="w-100">
                        <div class="bg-overlay"></div>
                        <div class="d-flex h-100 flex-column">

                            <div class="p-4 mt-auto">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>

    </div>

</div> --}}





@endsection
