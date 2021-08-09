@extends('layouts.adminaccount')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Add New</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total"></span>
                </div>
                <!--end::Search Form-->
            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                {{-- <a href=" {{ route('admin.pools')}}" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">Back</a> --}}
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
            <div class="card card-custom card-transparent">
                <div class="card-body p-0">
                    <!--begin::Wizard-->
                    <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
                        <!--begin::Wizard Nav-->
                        <div class="wizard-nav">
                            <div class="wizard-steps">
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-number">1</div>
                                        <div class="wizard-label">
                                            <div class="wizard-title">New Company</div>
                                            <div class="wizard-desc">Company's Personal Information</div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <!--end::Wizard Nav-->
                        <!--begin::Card-->
                        <div class="card card-custom card-shadowless rounded-top-0">
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                    <div class="col-xl-12 col-xxl-10">
                                        <!--begin::Wizard Form-->
                                        <div class="text-center">
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
                                       </div>

                                       <form  method="POST" action=" {{ route('createcompany')}}" enctype="multipart/form-data">
                                        @csrf
                                            <div class="row justify-content-center">
                                                <div class="col-xl-9">
                                                    <!--begin::Wizard Step 1-->
                                                    <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">

                                                        <!--begin::Group-->

                                                        <div class="form-group row">
                                                            <label class="col-form-label col-xl-3 col-lg-3"></label>
                                                            <div class="col-xl-9 col-lg-9 col-form-label">
                                                                <div class="checkbox-inline">
                                                                    <label class="checkbox">
                                                                    <input name="analyst" type="checkbox" />
                                                                    <span></span>Analyst</label>
                                                                    <label class="checkbox">
                                                                    <input name="investor" type="checkbox" />
                                                                    <span></span>Investor</label>
                                                                    <label class="checkbox">
                                                                    <input name="incubator" type="checkbox" />
                                                                    <span></span>Incubator</label>
                                                                </div>
                                                            </div>
                                                        </div>




                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-3 text-lg-right text-left">Company Name</label>
                                                            <div class="col-9">
                                                                <input name="name" class="form-control form-control-lg form-control-solid" type="text"  />
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->

                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-3 text-lg-right text-left">Reg number</label>
                                                            <div class="col-9">
                                                                <input name="number" class="form-control form-control-lg form-control-solid" type="text"  />
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-3 text-lg-right text-left">Office Address</label>
                                                            <div class="col-9">
                                                                <div class="input-group input-group-lg input-group-solid">

                                                                    <input name="addr" type="text" class="form-control form-control-lg form-control-solid"   />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-form-label col-3 text-lg-right text-left">Date of incorporation</label>
                                                            <div class="col-9">
                                                                <div class="input-group input-group-lg input-group-solid">

                                                                    <input name="doi" type="number" class="form-control form-control-lg form-control-solid" />
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-3 text-lg-right text-left">Industry Expereince</label>
                                                            <div class="col-9">
                                                                <div class="input-group input-group-lg input-group-solid">

                                                                    <input name="ind_exp" type="text" class="form-control form-control-lg form-control-solid"  />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                            <!--end::Group-->
                                                            <!--begin::Group-->
                                                            <div class="form-group row">
                                                                <label class="col-form-label col-3 text-lg-right text-left">Country</label>
                                                                <div class="col-9">
                                                                    <select name="country_id" class="form-control form-control-lg form-control-solid">
                                                                        @foreach($countries as $country)
                                                                <option value="{{ $country->id }}">
                                                                    {{$country->name }}</option>
                                                                    @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>



                                                            <div class="form-group row">
                                                                <label class="col-form-label col-3 text-lg-right text-left">State</label>
                                                                <div class="col-9">
                                                                    <select name="state_id" class="form-control form-control-lg form-control-solid">
                                                                        @foreach($states as $state)
                                                                        <option   value="{{ $state->id }}">
                                                                            {{$state->name }}</option>
                                                                            @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>



                                                            <div class="form-group row">
                                                                <label class="col-form-label col-3 text-lg-right text-left">Industry</label>
                                                                <div class="col-9">
                                                                    <select name="industry_id" class="form-control form-control-lg form-control-solid">
                                                                        @foreach($industries as $industry)
                                                                        <option   value="{{ $industry->id }}">
                                                                            {{$industry->name }}</option>
                                                                            @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="form-group row">
                                                                <label class="col-form-label col-3 text-lg-right text-left">Type</label>
                                                                <div class="col-9">
                                                                    <select name="type" class="form-control form-control-lg form-control-solid">

                                                                        <option value="LTD">LTD</option>
                                                                        <option value="PLC">PLC</option>

                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="form-group row">
                                                                <label class="col-form-label col-3 text-lg-right text-left">Company Website</label>
                                                                <div class="col-9">
                                                                    <div class="input-group input-group-lg input-group-solid">

                                                                        <input name="website" type="text" class="form-control form-control-lg form-control-solid"  placeholder="Website" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label text-left">Logo</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <div class="image-input image-input-outline" id="kt_user_add_avatar">
                                                                        <div class="image-input-wrapper" style="background-image: url(assets/media/users/100_6.jpg)"></div>
                                                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                                                            <input type="file" name="logo" accept=".png, .jpg, .jpeg" />
                                                                            <input type="hidden" name="profile_avatar_remove" />
                                                                        </label>
                                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="form-group row">
                                                                <label class="col-form-label col-3 text-lg-right text-left">About company</label>
                                                                <div class="col-9">
                                                                    <textarea id="kt-tinymce-2" name="about">

                                                                    </textarea>
                                                                </div>
                                                            </div>


                                                            <div class="form-group row mt-10">
                                                                <label class="col-3"></label>
                                                                <div class="col-9">
                                                                    <button type="submit" class="btn btn-light-primary font-weight-bold">Save changes</button>

                                                                </div>
                                                            </div>


                                                        <!--begin::Group-->

                                                        <!--end::Group-->
                                                    </div>
                                                    <!--end::Wizard Step 1-->

                                                </div>
                                            </div>
                                        </form>
                                        <!--end::Wizard Form-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Wizard-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>



</div>
                    @endsection
