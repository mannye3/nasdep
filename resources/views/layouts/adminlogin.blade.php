<!DOCTYPE html>

<html lang="en">
    <!--begin::Head-->
    <head>
        <base href=""">
        <meta charset="utf-8" />
        <title>NASDEP</title>
        <meta name="description" content="Login page example" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Page Custom Styles(used by this page)-->
        <link href="{{ asset('assets/assets/css/pages/login/classic/login-2.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Page Custom Styles-->
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="{{ asset('assets/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <link href="{{ asset('assets/assets/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/assets/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/assets/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/assets/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Layout Themes-->
        <link rel="shortcut icon" href="{{ asset('assets/assets/media/newNasdIcon.jpg')}}" />
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Login-->
            <div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
                <!--begin::Aside-->
                <div class="login-aside order-2 order-lg-1 d-flex flex-column-fluid flex-lg-row-auto bgi-size-cover bgi-no-repeat p-7 p-lg-10">
                    <!--begin: Aside Container-->
                    <div class="d-flex flex-row-fluid flex-column justify-content-between">
                        <!--begin::Aside body-->
                        <div class="d-flex flex-column-fluid flex-column flex-center mt-5 mt-lg-0">
                            <a href="#" class="mb-15 text-center">
                                <img src="https://console.nasdep.com/img/nasdep.png" class="max-h-75px" alt="" />
                            </a>
        @yield('content')










        <div class="d-flex flex-column-auto justify-content-between mt-15">
            <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2021 NASD</div>
            <div class="d-flex order-1 order-sm-2 my-2">
                
            </div>
        </div>
        <!--end: Aside footer for desktop-->
    </div>
    <!--end: Aside Container-->
</div>
<!--begin::Aside-->
<!--begin::Content-->
<div class="order-1 order-lg-2 flex-column-auto flex-lg-row-fluid d-flex flex-column p-7" style="background-image: url({{ asset('assets/assets/media/port.jpg)')}};">
    <!--begin::Content body-->
    <div class="d-flex flex-column-fluid flex-lg-center">
        <div class="d-flex flex-column justify-content-center">
            <h3 class="display-3 font-weight-bold my-7 text-white">NASDEP ADMIN PORTAL</h3>
            <p class="font-weight-bold font-size-lg text-white opacity-80">Transparency, Integrity, Performance and Innovation.
            </p>
        </div>
    </div>
    <!--end::Content body-->
</div>
<!--end::Content-->
</div>
<!--end::Login-->
</div>
<!--end::Main-->

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{ asset('assets/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{ asset('assets/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
<script src="{{ asset('assets/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('assets/assets/js/pages/custom/login/login-general.js')}}"></script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>



