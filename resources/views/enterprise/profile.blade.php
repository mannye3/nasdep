@extends('layouts.account')

@section('content')


<div class="col-lg-12 mb10">
    <div class="breadcrumb_content style2">
        <h2 class="breadcrumb_title float-left">Profile</h2>
        <p class="float-right">Ready to jump back in!</p>
    </div>
</div>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-5">
            <div class="my_dashboard_profile mb30-lg">
                <h4 class="mb30">Profile Details</h4>
                <div class="row">


                    <div class="row">

                        <div class="wrap-custom-file mb50">



                            <img src="{{ Auth::user()->avatar}}" class="profile_picture">

                        </div>

                        <div class="col-lg-12">
                            <div class="my_profile_setting_input form-group mt100-500">
                                <label for="formGroupExampleInput1">Name</label>

                               <p> {{ Auth::user()->name}}</p>

                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="my_profile_setting_input form-group mt100-500">
                                <label for="formGroupExampleInput1">Phone</label>

                                <p> {{ Auth::user()->phone}} </p>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="my_profile_setting_input form-group mt100-500">
                                <label for="formGroupExampleInput1">Email</label>

                                <p>  {{ Auth::user()->email}} </p>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="my_profile_setting_input form-group mt100-500">
                                <label for="formGroupExampleInput1">Company</label>

                                <p>   {{ Auth::user()->company}} </p>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="my_profile_setting_input form-group mt100-500">
                                <label for="formGroupExampleInput1">Gender</label>

                                <p>   {{ Auth::user()->gender}} </p>

                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="my_profile_setting_input form-group mt100-500">
                                <label for="formGroupExampleInput1">Location</label>

                                <p>  {{ Auth::user()->location}} </p>

                            </div>
                        </div>




                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="shop_single_tab_content mt30">
                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Update Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Update Password</a>
                    </li>

                   


                </ul>
                <div class="tab-content" id="myTabContent2">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="product_single_content">
                            <div class="col-xl-12">
                                <div class="mb30-lg">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form method="POST" action="{{ route('investorProfilePicture') }}" enctype="multipart/form-data">
                                                @csrf

                                        </form>
                                        </div>

                                        @if (Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success')}}
                                        </div>

                                        @endif

                                        <br>

                                        <form method="POST" action="{{ route('investorProfileEdit') }}" enctype="multipart/form-data" class="needs-validation">
                                            @csrf
                                        <div class="row">


                                            <div class="wrap-custom-file1 mb50 my_profile_setting_input" >
                                                @if(Auth::user()->avatar == "")
                                                <input type="file" name="avatar"  id="input-file-disable-remove" data-disable-remove="true" class="dropify rounded-circle profile_picture" data-default-file="{{ Auth::user()->avatar}}" />

                                                <br>
                                                <br>

                                                @else
                                                {{-- <input type="file" name="avatar" id="image1" accept=".gif, .jpg, .png"/> --}}
                                                <input type="file" name="avatar"  id="input-file-disable-remove" data-disable-remove="true" class="dropify  profile_picture" data-default-file="{{ Auth::user()->avatar}}" />

                                                <br>





                                                @endif



                                            </div>



                                        <div class="col-lg-12">
                                            <div class="my_profile_setting_input form-group mt100-500">
                                                <label for="formGroupExampleInput1">Your Name</label>
                                                <input type="text" name="name" class="form-control" id="formGroupExampleInput1" value="{{ Auth::user()->name}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleInput8">Phone</label>
                                                <input type="text" name="phone" class="form-control" id="formGroupExampleInput8" value="{{ Auth::user()->phone}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleEmail">Email</label>
                                                <input type="email" name="email" class="form-control" id="formGroupExampleEmail"  value="{{ Auth::user()->email}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleEmail">Compnay</label>
                                                <input type="text" name="company" class="form-control" id="formGroupExampleEmail"  value="{{ Auth::user()->company}}">
                                            </div>
                                        </div>



                                        <div class="col-lg-6">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleEmail">Gender</label>
                                                <select name="gender" class="form-control">
                                                    <option value="{{ Auth::user()->gender}}">{{ Auth::user()->gender}}</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>

                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleEmail">Location</label>
                                                <select name="location" class="form-control">
                                                <option value="{{ Auth::user()->location}}">{{ Auth::user()->location}}</option>
                                                <option value="Lagos">Lagos</option>
                                                <option value="Abuja">Abuja</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="my_profile_setting_input">
                                                <button type="submit" class="btn update_btn">Save Changes</button>
                                            </div>
                                        </div>


                                        </div>
                                          </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div class="product_single_content mb50">
                            <div class="mbp_pagination_comments">
                                <div class="mbp_first media">
                                    @if (Session::has('password_success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('password_success')}}
                                    </div>

                                    @endif



                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                        <li>{{ $error}}</li>
                                            @endforeach
                                        </ul>

                                    </div>

                                    @endif

                                <form method="POST" action="{{ route('investorProfilePassword') }}" class="needs-validation">
                                    @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleOldPass">Current Password</label>
                                            <input type="password" name="password" class="form-control" id="formGroupExampleOldPass">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleNewPass">New Password</label>
                                            <input type="password" name="new_password" class="form-control" id="formGroupExampleNewPass">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleConfPass">Confirm New Password</label>
                                            <input type="password" name="new_password_confirmation" class="form-control" id="formGroupExampleConfPass">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="my_profile_setting_input">
                                            <button class="btn update_btn style2">Change Password</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                                </div>

                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>


    </div>
</div>
</div>
</div>
</section>






@endsection
