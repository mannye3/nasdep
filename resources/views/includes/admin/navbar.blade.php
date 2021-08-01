
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="d-flex flex-row flex-column-fluid page">
                <!--begin::Aside-->
                <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                    <!--begin::Brand-->
                    <div class="brand flex-column-auto" id="kt_brand">
                        <!--begin::Logo-->
                        <a href="index.html" class="brand-logo">
                            <img alt="Logo" width="150" src="https://console.nasdep.com/img/nasdep.png"  />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Toggle-->
                        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                            <span class="svg-icon svg-icon svg-icon-xl">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </button>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Brand-->
                    <!--begin::Aside Menu-->
                    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                        <!--begin::Menu Container-->
                        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                            <!--begin::Menu Nav-->
                            <ul class="menu-nav">

                                <li class="menu-section">
                                    <h4 class="menu-text">Admin Portal</h4>
                                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="{{ route('admin.home')}}" class="menu-link menu-toggle">

                                    <i class="fas fa-chalkboard fa-chalkboard text-success mr-5"></i>


                                        <span class="menu-text">Dashboard</span>

                                    </a>

                                </li>

                                 <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="{{ route('admin.participants')}}" class="menu-link menu-toggle">

                                    <i class="fas fa-users text-success mr-5"></i>


                                        <span class="menu-text">Participant</span>

                                    </a>

                                </li>


                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="{{ route('admin.incubators')}}" class="menu-link menu-toggle">

                                    <i class="fas fa-users text-success mr-5"></i>


                                        <span class="menu-text">Incubators</span>

                                    </a>

                                </li>





                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="{{ route('admin.investors')}}" class="menu-link menu-toggle">

                                    <i class="fas fa-users text-success mr-5"></i>


                                        <span class="menu-text">Investors</span>

                                    </a>

                                </li>




                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="{{ route('admin.analysts')}}" class="menu-link menu-toggle">

                                    <i class="fas fa-users text-success mr-5"></i>


                                        <span class="menu-text">Analysts</span>

                                    </a>

                                </li>



                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="{{ route('admin.sectors')}}" class="menu-link menu-toggle">

                                    <i class="fas fa-users text-success mr-5"></i>


                                        <span class="menu-text">Sectors</span>

                                    </a>

                                </li>




                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="{{ route('admin.industries')}}" class="menu-link menu-toggle">

                                    <i class="fas fa-users text-success mr-5"></i>


                                        <span class="menu-text">Industries</span>

                                    </a>

                                </li>



                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="{{ route('admin.pools')}}" class="menu-link menu-toggle">

                                    <i class="fas fa-users text-success mr-5"></i>


                                        <span class="menu-text">Pools</span>

                                    </a>

                                </li>






                            <li class="menu-section">
                                    <h4 class="menu-text">Trades</h4>
                                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="" class="menu-link menu-toggle">

                                    <i class="fas fa-chart-line text-success mr-5"></i>


                                        <span class="menu-text">Live Trades</span>

                                    </a>

                                </li>

                                 <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="" class="menu-link menu-toggle">

                                    <i class="fas fa-chart-bar text-success mr-5"></i>


                                        <span class="menu-text">Trade History</span>

                                    </a>

                                </li>


                                <li class="menu-section">
                                    <h4 class="menu-text">Report</h4>
                                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="" class="menu-link menu-toggle">

                                    <i class="fas fa-chart-pie text-success mr-5"></i>


                                        <span class="menu-text">Performance Report</span>

                                    </a>

                                </li>




                            </ul>
                            <!--end::Menu Nav-->
                        </div>
                        <!--end::Menu Container-->
                    </div>
                    <!--end::Aside Menu-->
                </div>



 <!--end::Aside-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <!--begin::Header-->
                    <div id="kt_header" class="header header-fixed">
                        <!--begin::Container-->
                        <div class="container-fluid d-flex align-items-stretch justify-content-between">
                            <!--begin::Header Menu Wrapper-->
                            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

                                <!--end::Header Menu-->
                            </div>
                            <!--end::Header Menu Wrapper-->
                            <!--begin::Topbar-->
                            <div class="topbar">
                                <!--begin::Search-->

                                <!--end::Search-->
                                <!--begin::Notifications-->

                                <!--end::Notifications-->
                                <!--begin::Quick Actions-->

                                <!--end::Quick Actions-->
                                <!--begin::Cart-->

                                <!--end::Cart-->
                                <!--begin::Quick panel-->

                                <!--end::Quick panel-->
                                <!--begin::Chat-->

                                <!--end::Chat-->
                                <!--begin::Languages-->

                                <!--end::Languages-->
                                <!--begin::User-->
                                <div class="topbar-item">
                                    <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                        <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{  Auth::guard('admin')->user()->name}}</span>
                                        <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                            <span class="symbol-label font-size-h5 font-weight-bold"></span>
                                        </span>
                                    </div>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header-->
