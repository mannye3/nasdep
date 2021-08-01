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
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">{{ $pool->name }}</span>
                </div>
                <!--end::Search Form-->
            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href=" {{ route('admin.pools')}}" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">Back</a>
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
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <div class="d-flex">
                        <!--begin::Pic-->
                        <div class="flex-shrink-0 mr-7">
                            <div class="symbol symbol-50 symbol-lg-120">
                                <img alt="Pic" src="{{ $pool->logo }}" />
                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin: Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <!--begin::User-->
                                <div class="mr-3">
                                    <div class="d-flex align-items-center mr-3">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{ $pool->name }}</a>
                                        <!--end::Name-->

                                        <span class="label label-light-success label-inline font-weight-bolder mr-1">{{ $pool->industry->name }}</span>
                                    </div>
                                    <!--begin::Contacts-->

                                    <!--end::Contacts-->
                                </div>
                                <!--begin::User-->

                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="d-flex align-items-center flex-wrap justify-content-between">
                                <!--begin::Description-->
                                <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5"><p>
                                    {!! $pool->profile !!}</p></div>
                                <!--end::Description-->
                                <!--begin::Progress-->

                                <!--end::Progress-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Info-->
                    </div>
                </div>
            </div>
            <!--end::Card-->
            <!--begin::Row-->
            <div class="row">

                <div class="col-xl-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Header-->
                        <div class="card-header card-header-tabs-line">
                            <div class="card-toolbar">
                                <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-bold nav-tabs-line-3x" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_1">
                                            <span class="nav-icon mr-2">
                                                <span class="svg-icon mr-3">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
                                                            <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <span class="nav-text">Details</span>
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item mr-3">
                                        <a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_2">
                                            <span class="nav-icon mr-2">
                                                <span class="svg-icon mr-3">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <span class="nav-text">Enterpises</span>
                                        </a>
                                    </li>
                                    <li class="nav-item mr-3">
                                        <a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_3">
                                            <span class="nav-icon mr-2">
                                                <span class="svg-icon mr-3">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
                                                            <path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <span class="nav-text">Pools</span>
                                        </a>
                                    </li> --}}
                                    <li class="nav-item mr-3">
                                        <a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_4">
                                            <span class="nav-icon mr-2">
                                                <span class="svg-icon mr-3">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
                                                            <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <span class="nav-text">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body px-0">

                            <div class="tab-content pt-5">
                             <div class="text-center">    @if (Session::has('success'))
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

                                @endif </div>
                                <!--begin::Tab Content-->
                                <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                                    <div class="container">
                                        <div class="card card-custom">
											<!--begin::Header-->

											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-4">
												<div class="form-group row my-2">
													<label class="col-4 col-form-label">Country:</label>
													<div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">{!! $pool->countries !!}</span>
													</div>
												</div>
												<div class="form-group row my-2">
													<label class="col-4 col-form-label">Expereince:</label>
													<div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">{{ $pool->exp }}</span>
													</div>
												</div>
												<div class="form-group row my-2">
													<label class="col-4 col-form-label">Financial Info:</label>
													<div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">


															{{ $pool->data_available }}
														</span>
													</div>
												</div>
												<div class="form-group row my-2">
													<label class="col-4 col-form-label">REG Date:</label>
													<div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">{{$pool->regdate}}</span>
													</div>
												</div>

                                                <div class="form-group row my-2">
													<label class="col-4 col-form-label">Growth Stage:</label>
													<div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">{{$pool->growth_stage}}</span>
													</div>
												</div>


												<div class="form-group row my-2">
													<label class="col-4 col-form-label">Incubator:</label>
													<div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">
															{{$pool->incubator->company->name}}
														</span>
													</div>
												</div>

                                                <div class="form-group row my-2">
													<label class="col-4 col-form-label">Industry:</label>
													<div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">
												        {{$pool->industry->name}}
														</span>
													</div>
												</div>




												{{-- <div class="form-group row my-2">
													<label class="col-4 col-form-label">Enterprises:</label>
													<div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">
															<a href="#">{{ $pool->enterprise->count() }}</a>
														</span>
													</div>
												</div> --}}

                                                <div class="form-group row my-2">
													<label class="col-4 col-form-label">Created on:</label>
													<div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">
															{{$pool->created_at}}
														</span>
													</div>
												</div>
											</div>
											<!--end::Body-->
											<!--begin::Footer-->

											<!--end::Footer-->
										</div>


                                        <!--end::Timeline-->
                                    </div>
                                </div>
                                <!--end::Tab Content-->
                                <!--begin::Tab Content-->
                                <div class="tab-pane" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                                    <div class="card-body">
                                        <!--begin: Datatable-->
                                        sample text
                                        <!--end: Datatable-->
                                    </div>
                                </div>
                                <!--end::Tab Content-->
                                <!--begin::Tab Content-->
                                <div class="tab-pane" id="kt_apps_contacts_view_tab_3" role="tabpanel">
                                    <div class="card-body">




                                    </div>
                                </div>
                                <!--end::Tab Content-->
                                <!--begin::Tab Content-->
                                <div class="tab-pane" id="kt_apps_contacts_view_tab_4" role="tabpanel">
                                    <form  method="POST" action=" {{ route('editpool', $pool->id)}}" enctype="multipart/form-data">
                                        @csrf

                                    <div class="row">

                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-7">
                                            <div class="my-2">

                                                <div class="row">
                                                    <label class="col-form-label col-3 text-lg-right text-left"></label>
                                                    <div class="col-9">
                                                        <h6 class="text-dark font-weight-bold mb-10">Account:</h6>
                                                    </div>
                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Group-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-3 text-lg-right text-left">Logo</label>

                                                    <div class="col-9">
                                                        @if($pool->logo == "")
                                                        <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar"
                                                        style="background-image: url({{ asset('assets/assets/media/users/blank.png')}})">
                                                        @else
                                                        <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar"
                                                        style="background-image: url({{ $pool->logo }})">

                                                        @endif
                                                            <div class="image-input-wrapper"></div>
                                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                                <input type="file" name="logo" accept=".png, .jpg, .jpeg" />
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
                                                <label class="col-form-label col-3 text-lg-right text-left">Company Name</label>
                                                <div class="col-9">
                                                    <input name="name" class="form-control form-control-lg form-control-solid" type="text" value="{{ $pool->name}}" />
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->

                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left"> Reg Date</label>
                                                <div class="col-9">
                                                    <input name="regdate" type="date" class="form-control form-control-lg form-control-solid" type="text" value="{{ $pool->regdate}}" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left"> Experience</label>
                                                <div class="col-9">
                                                    <input name="exp" type="number" class="form-control form-control-lg form-control-solid" type="text" value="{{ $pool->exp}}" />
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left"> Growth Stage</label>
                                                <div class="col-9">
                                                    <input name="growth_stage" type="text" class="form-control form-control-lg form-control-solid" type="text" value="{{ $pool->growth_stage}}" />
                                                </div>
                                            </div>




                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left"> Available Data</label>
                                                <div class="col-9">
                                                    <input id="kt_tagify_1" class="form-control tagify" name="data_available" placeholder='type...'  value="{{ $pool->data_available}}" autofocus="" data-blacklist='.NET,PHP' />

                                                </div>
                                            </div>




                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Industry</label>
                                                <div class="col-9">
                                                    <div class="input-group input-group-lg input-group-solid">

                                                        <select name="industry_id" class="form-control form-control-lg form-control-solid">
                                                            @foreach($industries as $industry)
                                                    <option {{ ($industry->id) == $pool->industry_id ? 'selected' : '' }}  value="{{ $industry->id }}">
                                                        {{$industry->name }}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Incubator</label>
                                                <div class="col-9">
                                                    <div class="input-group input-group-lg input-group-solid">

                                                        <select name="incubator_id" class="form-control form-control-lg form-control-solid">
                                                            @foreach($incubators as $incubator)
                                                    <option {{ ($incubator->id) == $pool->incubator_id ? 'selected' : '' }}  value="{{ $incubator->id }}">
                                                        {{$incubator->company->name }}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Country</label>
                                                <div class="col-9">
                                                    <div class="input-group input-group-lg input-group-solid">


                                                        <select name="countries" class="form-control form-control-lg form-control-solid">
                                                            @foreach($countries as $country)
                                                    <option {{ ($country->name) == $pool->countries ? 'selected' : '' }}  value="{{ $country->name }}">
                                                        {{$country->name }}</option>
                                                        @endforeach
                                                        </select>


                                                    </div>
                                                </div>
                                            </div>




                                                <div class="form-group row">
                                                    <label class="col-form-label col-3 text-lg-right text-left">Profile</label>
                                                    <div class="col-9">
                                                        <textarea id="kt-tinymce-2" name="profile">
                                                            {{ $pool->profile}}
                                                        </textarea>
                                                    </div>
                                                </div>


                                                <div class="form-group row mt-10">
                                                    <label class="col-3"></label>
                                                    <div class="col-9">
                                                        <button type="submit" class="btn btn-light-primary font-weight-bold">Save changes</button>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    </div>
                                <!--end::Tab Content-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>



</div>
                    @endsection
