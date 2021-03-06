@extends('layouts.adminaccount')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Particioant Details</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">{{ $user->name}}</span>
                </div>
                <!--end::Search Form-->
            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href=" {{ route('admin.participants')}}" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">Back</a>
                <!--end::Button-->
                <!--begin::Dropdown-->

                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">

            <!--begin::Card-->
            <div class="card card-custom">

                <!--begin::Card header-->
                <div class="card-header card-header-tabs-line nav-tabs-line-3x">
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">

                        <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1">
                                    <span class="nav-icon">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="nav-text font-size-lg">Profile Overview</span>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2">
                                    <span class="nav-icon">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="nav-text font-size-lg">Settings</span>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            {{-- <li class="nav-item mr-3">
                                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_3">
                                    <span class="nav-icon">
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
                                                    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
                                                    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>

                                        </span>
                                    </span>
                                    <span class="nav-text font-size-lg">Change Password</span>
                                </a>
                            </li> --}}
                            <!--end::Item-->
                            <!--begin::Item-->
                            {{-- <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_4">
                                    <span class="nav-icon">
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3" />
                                                    <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
                                                </g>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="nav-text font-size-lg">Settings</span>
                                </a>
                            </li> --}}
                            <!--end::Item-->
                        </ul>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">



                        <div class="tab-content">
                            <!--begin::Tab-->
                            <div class="tab-pane show active px-7" id="kt_user_edit_tab_1" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-7 my-2">

                                        <!--begin::Row-->
                                        <div class="row">
                                            <label class="col-3"></label>
                                            <div class="col-9">
                                                @if (Session::has('success'))
                                                <div class="alert alert-success">
                                                    {{ Session::get('success')}}
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
                                                <h6 class="text-dark font-weight-bold mb-10">Paticipant Info:</h6>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Avatar</label>
                                            <div class="col-9">

                                                 @if($user->avatar == "")
                                                <div class="image-input image-input-empty image-input-outline"
                                                style="background-image: url({{ asset('assets/assets/media/users/blank.png')}})">
                                                @else
                                                <div class="image-input image-input-empty image-input-outline"
                                                style="background-image: url({{ $user->avatar }})">

                                                @endif
                                                    <div class="image-input-wrapper"></div>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>

                                                    </span>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">First Name</label>
                                            <div class="col-9">
                                                <input name="name" class="form-control form-control-lg form-control-solid" type="text" value="{{ $user->fname}}" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Last Name</label>
                                            <div class="col-9">
                                                <input name="name" class="form-control form-control-lg form-control-solid" type="text" value="{{ $user->lname}}" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Company </label>
                                            <div class="col-9">

                                                <div class="border-bottom mb-5 pb-5">
                                                    <div class="line-height-xl">
                                                     <p style="font-size : 15px;">@foreach($user->user_request as $user_company)
                                                     {{ $user_company->company .',' }}  @endforeach </p>
                                                    </div>
                                                 </div>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Contact Phone</label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-phone"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-lg form-control-solid" value="{{ $user->phone}}" placeholder="Phone" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Email Address</label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-at"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-lg form-control-solid" value="{{ $user->email}}" placeholder="Email" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Role</label>
                                            <div class="col-9">
                                                <div class="border-bottom mb-5 pb-5">
                                                   <div class="line-height-xl">
                                                    <p style="font-size : 15px;">@foreach($user->user_request as $user_company)
                                                    {{ $user_company->role .',' }}  @endforeach </p>
                                                   </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Gender</label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Username" value="{{ $user->gender}}" />

                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Country</label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Username" value="{{ $user->country->name}}" />

                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">State</label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Username" value="{{ $user->state->name}}" />

                                                </div>
                                            </div>
                                        </div>



                                        <!--end::Group-->
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            <div class="tab-pane px-7" id="kt_user_edit_tab_2" role="tabpanel">
                                <form  method="POST" action=" {{ route('adminEditUserPost', $user->id)}}" enctype="multipart/form-data">
                                    @csrf
                                <!--begin::Row-->
                                <div class="row">

                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-7">
                                        <div class="my-2">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <label class="col-form-label col-3 text-lg-right text-left"></label>
                                                <div class="col-9">
                                                    <h6 class="text-dark font-weight-bold mb-10">Account:</h6>
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Avatar</label>






                                                <div class="col-9">
                                                    @if($user->avatar == "")
                                                    <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar"
                                                    style="background-image: url({{ asset('assets/assets/media/users/blank.png')}})">
                                                    @else
                                                    <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar"
                                                    style="background-image: url({{ $user->avatar }})">

                                                    @endif
                                                        <div class="image-input-wrapper"></div>
                                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="profile_avatar_remove" />
                                                        </label>
                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                        </span>
                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                             <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">First Name</label>
                                            <div class="col-9">
                                                <input name="name" class="form-control form-control-lg form-control-solid" type="text" value="{{ $user->fname}}" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Last Name</label>
                                            <div class="col-9">
                                                <input name="name" class="form-control form-control-lg form-control-solid" type="text" value="{{ $user->lname}}" />
                                            </div>
                                        </div>


                                        <!--end::Group-->
                                        <!--begin::Group-->

                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Company Name</label>
                                            <div class="col-9">
                                                <input name="company" class="form-control form-control-lg form-control-solid" type="text" value="{{ $user->company}}" />
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Contact Phone</label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-phone"></i>
                                                        </span>
                                                    </div>
                                                    <input name="phone" type="text" class="form-control form-control-lg form-control-solid" value="{{ $user->phone}}" placeholder="Phone" />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Email Address</label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-at"></i>
                                                        </span>
                                                    </div>
                                                    <input name="email" type="text" class="form-control form-control-lg form-control-solid" value="{{ $user->email}}" placeholder="Email" />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Member Type</label>
                                                <div class="col-9">
                                                    <select name="member_type" class="form-control form-control-lg form-control-solid">


                                                        @if($user->member_type == 1)
                                                        <option value="2">Investor Representative</option>
                                                        @endif


                                                        @if($user->member_type == 2)
                                                        <option value="2">Investor Representative</option>
                                                        @endif

                                                        @if($user->member_type == 3)
                                                        <option value="3"> Accredited Investor</option>

                                                        @endif

                                                        @if($user->member_type == 4)
                                                        <option value="4">Incubator</option>
                                                        <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Username" value="Incubator" />


                                                        @endif

                                                        <option value="1">Enterprise Representative</option>
                                                        <option value="2">Investor Representative</option>
                                                        <option value="3">Accredited Investor</option>
                                                        <option value="4">Incubator</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Gender</label>
                                                <div class="col-9">
                                                    <select name="gender" class="form-control form-control-lg form-control-solid">
                                                  <option value="{{$user->gender}}">{{ $user->gender}}</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>

                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Location</label>
                                                <div class="col-9">
                                                    <select name="location" class="form-control form-control-lg form-control-solid">
                                                        <option value="{{$user->location}}">{{ $user->location}}</option>
                                                        <option value="Lagos">Lagos</option>
                                                        <option value="Abuja">Abuja</option>

                                                    </select>
                                                </div>
                                            </div>







                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <div class="separator separator-dashed my-10"></div>
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-7">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <label class="col-form-label col-3 text-lg-right text-left"></label>
                                            <div class="col-9">
                                                <h6 class="text-dark font-weight-bold mb-10">Security:</h6>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Group-->


                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Change Password</label>
                                            <div class="col-9">
                                     <input name="password" class="form-control form-control-lg form-control-solid" type="password" />
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->

                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row mt-10">
                                            <label class="col-3"></label>
                                            <div class="col-9">
                                                <button type="submit" class="btn btn-light-primary font-weight-bold">Save changes</button>

                                            </div>
                                        </div>

                                    </form>

                                        <!--end::Group-->
                                    </div>
                                    <div class="col-xl-2"></div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            {{-- <div class="tab-pane px-7" id="kt_user_edit_tab_3" role="tabpanel">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-7">
                                            <!--begin::Row-->
                                            <div class="row mb-5">
                                                <label class="col-3"></label>
                                                <div class="col-9">
                                                    <div class="alert alert-custom alert-light-danger fade show py-4" role="alert">
                                                        <div class="alert-icon">
                                                            <i class="flaticon-warning"></i>
                                                        </div>
                                                        <div class="alert-text font-weight-bold">Configure user passwords to expire periodically.
                                                        <br />Users will need warning that their passwords are going to expire, or they might inadvertently get locked out of the system!</div>
                                                        <div class="alert-close">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">
                                                                    <i class="la la-close"></i>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="row">
                                                <label class="col-3"></label>
                                                <div class="col-9">
                                                    <h6 class="text-dark font-weight-bold mb-10">Change Or Recover Your Password:</h6>
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Current Password</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid mb-1" type="text" value="Current password" />
                                                    <a href="#" class="font-weight-bold font-size-sm">Forgot password ?</a>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">New Password</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid" type="text" value="New password" />
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Verify Password</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid" type="text" value="Verify password" />
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="card-footer pb-0">
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-7">
                                            <div class="row">
                                                <div class="col-3"></div>
                                                <div class="col-9">
                                                    <a href="#" class="btn btn-light-primary font-weight-bold">Save changes</a>
                                                    <a href="#" class="btn btn-clean font-weight-bold">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Footer-->
                            </div> --}}
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            {{-- <div class="tab-pane px-7" id="kt_user_edit_tab_4" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-8">
                                        <div class="my-2">
                                            <div class="row">
                                                <label class="col-form-label col-3 text-lg-right text-left"></label>
                                                <div class="col-9">
                                                    <h6 class="text-dark font-weight-bold mb-7">Setup Email Notification:</h6>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <label class="col-form-label col-3 text-lg-right text-left">Email Notification</label>
                                                <div class="col-3">
                                                    <span class="switch">
                                                        <label>
                                                            <input type="checkbox" checked="checked" name="select" />
                                                            <span></span>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Send Copy To Personal Email</label>
                                                <div class="col-3">
                                                    <span class="switch">
                                                        <label>
                                                            <input type="checkbox" name="select" />
                                                            <span></span>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-form-label col-3 text-lg-right text-left"></label>
                                            <div class="col-9">
                                                <h6 class="text-dark font-weight-bold mb-7">Activity Related Emails:</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator separator-dashed mb-10"></div>
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-8">
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">When To Email</label>
                                            <div class="col-9">
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox">
                                                    <input type="checkbox" />
                                                    <span></span>You have new notifications.</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox">
                                                    <input type="checkbox" />
                                                    <span></span>You're sent a direct message</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox">
                                                    <input type="checkbox" checked="checked" />
                                                    <span></span>Someone adds you as a connection</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">When To Escalate Emails</label>
                                            <div class="col-9">
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" />
                                                    <span></span>Upon new order</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" />
                                                    <span></span>New membership approval</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" />
                                                    <span></span>Member registration</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator separator-dashed mb-10"></div>
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-8">
                                        <div class="row">
                                            <label class="col-form-label col-3 text-lg-right text-left"></label>
                                            <div class="col-9">
                                                <h6 class="text-dark font-weight-bold mb-7">Updates From Keenthemes:</h6>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Email You With</label>
                                            <div class="col-9">
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" />
                                                    <span></span>News about Metronic product and feature updates</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" />
                                                    <span></span>Tips on getting more out of Keen</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" checked="checked" />
                                                    <span></span>Things you missed since you last logged into Keen</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" checked="checked" />
                                                    <span></span>News about Metronic on partner products and other services</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" checked="checked" />
                                                    <span></span>Tips on Metronic business products</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!--end::Tab-->
                        </div>

                </div>
                <!--begin::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
                    @endsection
