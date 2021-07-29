@extends('layouts.adminaccount')

@section('content')















          <!--begin::Content-->
          <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
              <!--begin::Subheader-->
              <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
                  <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                      <!--begin::Info-->
                      <div class="d-flex align-items-center flex-wrap mr-2">
                          <!--begin::Page Title-->

                          <!--end::Page Title-->
                          <!--begin::Actions-->

                          <!--end::Actions-->
                      </div>
                      <!--end::Info-->
                      <!--begin::Toolbar-->

                      <!--end::Toolbar-->
                  </div>
              </div>


              <!--end::Subheader-->
              <!--begin::Entry-->
              <div class="d-flex flex-column-fluid">
                  <!--begin::Container-->
                  <div class="container">
                    <div class="row">




                        <div class="col-xl-3">
                         <!--begin::Stats Widget 32-->
                         <div class="card card-custom bg-dark card-stretch gutter-b">
                           <!--begin::Body-->
                           <div class="card-body">
                             <span class="svg-icon svg-icon-2x svg-icon-white">
                               <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                   <rect x="0" y="0" width="24" height="24" />


                                 </g>
                               </svg>
                               <!--end::Svg Icon-->
                             </span>
                             <h3 class="font-weight-bold text-white">Enterprises </h3>
                             <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 text-hover-primary d-block"> {{ \App\Models\User::all()->count() }}</span>

                           </div>
                           <!--end::Body-->
                         </div>
                         <!--end::Stats Widget 32-->
                       </div>
                        <div class="col-xl-3">
                         <!--begin::Stats Widget 32-->
                         <div class="card card-custom bg-dark card-stretch gutter-b">
                           <!--begin::Body-->
                           <div class="card-body">
                             <span class="svg-icon svg-icon-2x svg-icon-white">
                               <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->

                               <!--end::Svg Icon-->
                             </span>
                             <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 text-hover-primary d-block">
                              <h3 class="font-weight-bold text-white ">Analysts</h3>
                               1</span>

                           </div>
                           <!--end::Body-->
                         </div>
                         <!--end::Stats Widget 32-->
                       </div>
                        <div class="col-xl-3">
                         <!--begin::Stats Widget 32-->
                         <div class="card card-custom bg-dark card-stretch gutter-b">
                           <!--begin::Body-->
                           <div class="card-body">
                             <span class="svg-icon svg-icon-2x svg-icon-white">
                               <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->

                               <!--end::Svg Icon-->
                             </span>
                             <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 text-hover-primary d-block">
                                 <h3 class="font-weight-bold text-white ">Investors</h3>
                                1</span>

                           </div>
                           <!--end::Body-->
                         </div>
                         <!--end::Stats Widget 32-->
                       </div>
                        <div class="col-xl-3">
                         <!--begin::Stats Widget 32-->
                         <div class="card card-custom bg-dark card-stretch gutter-b">
                           <!--begin::Body-->
                           <div class="card-body">
                             <span class="svg-icon svg-icon-2x svg-icon-white">
                               <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->

                               <!--end::Svg Icon-->
                             </span>

                               <h3 class="font-weight-bold text-white ">Incubators</h3>
                                <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 text-hover-primary d-block"> 1</span>

                           </div>
                           <!--end::Body-->
                         </div>
                         <!--end::Stats Widget 32-->
                       </div>
                       <div class="col-xl-3">
                        <!--begin::Stats Widget 32-->
                        <div class="card card-custom bg-dark card-stretch gutter-b">
                          <!--begin::Body-->
                          <div class="card-body">
                            <span class="svg-icon svg-icon-2x svg-icon-white">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->

                              <!--end::Svg Icon-->
                            </span>

                              <h3 class="font-weight-bold text-white ">Pools</h3>
                               <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 text-hover-primary d-block"> 1</span>

                          </div>
                          <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 32-->
                      </div>

                      <div class="col-xl-3">
                        <!--begin::Stats Widget 32-->
                        <div class="card card-custom bg-dark card-stretch gutter-b">
                          <!--begin::Body-->
                          <div class="card-body">
                            <span class="svg-icon svg-icon-2x svg-icon-white">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->

                              <!--end::Svg Icon-->
                            </span>

                              <h3 class="font-weight-bold text-white ">Participants Request</h3>
                               <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 text-hover-primary d-block"> 1</span>

                          </div>
                          <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 32-->
                      </div>


                      <div class="col-xl-3">
                        <!--begin::Stats Widget 32-->
                        <div class="card card-custom bg-dark card-stretch gutter-b">
                          <!--begin::Body-->
                          <div class="card-body">
                            <span class="svg-icon svg-icon-2x svg-icon-white">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->

                              <!--end::Svg Icon-->
                            </span>

                              <h3 class="font-weight-bold text-white ">Participants</h3>
                               <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 text-hover-primary d-block"> 1</span>

                          </div>
                          <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 32-->
                      </div>
                     </div>





                      <!--begin::Row-->
                      <div class="row">

                          <div class="col-lg-12">
                              <!--begin::Advance Table Widget 4-->
                              <div class="card card-custom card-stretch gutter-b">
                                  <!--begin::Header-->
                                  <div class="card-header border-0 py-5">
                                      <h3 class="card-title align-items-start flex-column">
                                          <span class="card-label font-weight-bolder text-dark">Resent Trades</span>

                                      </h3>

                                      <table class="table table-separate table-head-custom table-checkable" id=" kt_datatable1">
            <thead>
              <tr>
                                  <th>SN</th>
                                  <th>SYMBOL</th>
                                  <th>Buyer Name</th>
                                  <th>Buyer Broker Code</th>
                                  <th>Seller Name</th>
                                  <th>Seller Broker Code</th>
                                   <th>Volume</th>


              </tr>
            </thead>
            <tbody>

                                     <tr>
                                  <td></td>
                                  <td> </td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>


                      </tr>



            </tbody>
          </table>

                                  </div>
                                  <!--end::Header-->
                                  <!--begin::Body-->
                                  <div class="card-body pt-0 pb-3">
                                      <div class="tab-content">
                                          <!--begin::Table-->

                                          <!--end::Table-->
                                      </div>
                                  </div>
                                  <!--end::Body-->
                              </div>
                              <!--end::Advance Table Widget 4-->
                          </div>
                      </div>
                      <!--end::Row-->
                      <!--end::Dashboard-->
                  </div>
                  <!--end::Container-->
              </div>
              <!--end::Entry-->
          </div>
          <!--end::Content-->



























{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard {{  Auth::guard('admin')->user()->name}}</div>
                <br>
                <form  method="POST" id="logout-form" action="{{ route('admin.logout')}}">@csrf</form>
									<a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit();">Logout</a>
                <div class="card-body">You are logged in!</div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
