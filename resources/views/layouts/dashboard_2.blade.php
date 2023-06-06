<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<head>
    <base href=""/>
    <title>Dashboard - @yield('title')</title>
    <meta charset="utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="shortcut icon" href="{{asset('front/assets/images/logo-ral.png')}}"/>
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('admin/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/locale_en.css')}}">

    @yield('style')
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }</script>
<!--end::Theme mode setup on page load-->
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
    @include('dashboard.includes.header_2')
    <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper" direction="rtl">
            <!--begin::Sidebar-->
        @include('dashboard.includes.sidebar')
        <!--end::Sidebar-->
            <!--begin::Main-->

            @yield('content')
        <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->

<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->

<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('admin/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

<script src="{{asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{asset('admin/assets/js/widgets.bundle.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/new-target.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/users-search.js')}}"></script>

<!--end::Custom Javascript-->
<!--end::Javascript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@yield('script')



@if(Session::has('error-auth'))
    <script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'error',
                text: "{{Session::get('error-auth')}}",
                dangerMode: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'back',
                showCloseButton: true,
            });
        });

    </script>
@endif
{{--@if($errors->count())--}}
{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            Swal.fire({--}}
{{--                icon: 'error',--}}
{{--                text: "{{Session::get('errors')}}",--}}
{{--                dangerMode: true,--}}
{{--                confirmButtonColor: '#3085d6',--}}
{{--                // cancelButtonColor: '#d33',--}}
{{--                confirmButtonText: 'حسنا',--}}
{{--                showCloseButton: true,--}}
{{--            });--}}
{{--        });--}}

{{--    </script>--}}
{{--@endif--}}
@if(Session::has('error'))
    <script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'error',
                text: "{{Session::get('error')}}",
                dangerMode: true,
                confirmButtonColor: '#3085d6',
                // cancelButtonColor: '#d33',
                confirmButtonText: 'back',
                showCloseButton: true,
            });
        });

    </script>
@endif
@if($errors->has('subscription_email'))
    <script>
        ToastyError();
    </script>
@endif
@if(Session::has('success'))
    <script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'success',
                text: "{{Session::get('success')}}",
                dangerMode: true,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'back',
                showCloseButton: true,
            });
        });

    </script>
@endif

</body>
<!--end::Body-->
</html>
