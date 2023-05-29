{{--@extends('layouts.dashboard')--}}

{{--@section('content')--}}
{{--    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper" dir="rtl">--}}
{{--        <!--begin::Wrapper container-->--}}
{{--        <div class="app-container container-xxl d-flex flex-row flex-column-fluid">--}}
{{--            <!--begin::Main-->--}}
{{--            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">--}}
{{--                <!--begin::Content wrapper-->--}}
{{--                <div class="d-flex flex-column flex-column-fluid">--}}
{{--                    <!--begin::Toolbar-->--}}
{{--                    <div id="kt_app_toolbar" class="app-toolbar d-flex flex-stack py-4 py-lg-8">--}}
{{--                        <!--begin::Toolbar wrapper-->--}}
{{--                        <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10" id="kt_toolbar">--}}
{{--                            <!--begin::Page title-->--}}
{{--                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">--}}
{{--                                <!--begin::Title-->--}}
{{--                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">--}}
{{--                                    الشروط والاحكام</h1>--}}
{{--                                <!--end::Title-->--}}
{{--                                <!--begin::Breadcrumb-->--}}
{{--                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">--}}
{{--                                    <!--begin::Item-->--}}
{{--                                    <li class="breadcrumb-item text-muted">--}}

{{--                                        الرئيسية--}}

{{--                                    </li>--}}
{{--                                    <!--end::Item-->--}}
{{--                                    <!--begin::Item-->--}}
{{--                                    <li class="breadcrumb-item">--}}
{{--                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>--}}
{{--                                    </li>--}}
{{--                                    <!--end::Item-->--}}
{{--                                    <!--begin::Item-->--}}
{{--                                    <li class="breadcrumb-item text-muted">الشروط والاحكام</li>--}}
{{--                                    <!--end::Item-->--}}
{{--                                    <!--begin::Item-->--}}
{{--                                    <li class="breadcrumb-item">--}}
{{--                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>--}}
{{--                                    </li>--}}
{{--                                    <!--end::Item-->--}}
{{--                                    <!--begin::Item-->--}}
{{--                                    <li class="breadcrumb-item text-muted">القائمة</li>--}}
{{--                                    <!--end::Item-->--}}
{{--                                </ul>--}}
{{--                                <!--end::Breadcrumb-->--}}
{{--                            </div>--}}
{{--                            <!--end::Page title-->--}}
{{--                            <!--begin::Actions-->--}}
{{--                        </div>--}}
{{--                        <!--end::Toolbar wrapper-->--}}
{{--                    </div>--}}
{{--                    <!--end::Toolbar-->--}}
{{--                    <!--begin::Content-->--}}
{{--                    <div id="kt_app_content" class="app-content flex-column-fluid">--}}
{{--                        <!--begin::Card-->--}}
{{--                        <div class="card">--}}
{{--                            <!--begin::Card header-->--}}
{{--                            <div class="card-header border-0 pt-6">--}}
{{--                                <!--begin::Card title-->--}}
{{--                                <div class="card-title">--}}
{{--                                    <!--begin::Search-->--}}
{{--                                    <div class="d-flex align-items-center position-relative my-1">--}}
{{--                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->--}}
{{--                                        <span class="svg-icon svg-icon-1 position-absolute me-6" style="left: 5px;">--}}
{{--														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"--}}
{{--                                                             xmlns="http://www.w3.org/2000/svg">--}}
{{--															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"--}}
{{--                                                                  height="2" rx="1"--}}
{{--                                                                  transform="rotate(45 17.0365 15.1223)"--}}
{{--                                                                  fill="currentColor"/>--}}
{{--															<path--}}
{{--                                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"--}}
{{--                                                                fill="currentColor"/>--}}
{{--														</svg>--}}
{{--													</span>--}}
{{--                                        <!--end::Svg Icon-->--}}
{{--                                        <input type="text" data-kt-user-table-filter="search"--}}
{{--                                               class="form-control form-control-solid w-250px ps-14"--}}
{{--                                               placeholder="بحث"/>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Search-->--}}
{{--                                </div>--}}
{{--                                <!--begin::Card title-->--}}
{{--                                <!--begin::Card toolbar-->--}}
{{--                                <div class="card-toolbar">--}}

{{--                                    <!--begin::Group actions-->--}}
{{--                                    <div class="d-flex justify-content-end align-items-center d-none"--}}
{{--                                         data-kt-user-table-toolbar="selected">--}}
{{--                                        <div class="fw-bold me-5">--}}
{{--                                            <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected--}}
{{--                                        </div>--}}
{{--                                        <button type="button" class="btn btn-danger"--}}
{{--                                                data-kt-user-table-select="delete_selected">Delete Selected--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Group actions-->--}}
{{--                                </div>--}}
{{--                                <!--end::Card toolbar-->--}}
{{--                            </div>--}}
{{--                            <!--end::Card header-->--}}
{{--                            <!--begin::Card body-->--}}
{{--                            <div class="card-body py-4">--}}
{{--                                <!--begin::Table-->--}}
{{--                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="terms">--}}
{{--                                    <!--begin::Table head-->--}}
{{--                                    <thead>--}}
{{--                                    <!--begin::Table row-->--}}
{{--                                    <tr class="text-right text-muted fw-bold fs-7 text-uppercase gs-0">--}}
{{--                                        <th class="w-10px pe-2">--}}
{{--                                            <div--}}
{{--                                                class="form-check form-check-sm form-check-custom form-check-solid me-3">--}}
{{--                                                <input class="form-check-input" type="checkbox" data-kt-check="true"--}}
{{--                                                       data-kt-check-target="#terms .form-check-input"--}}
{{--                                                       value="1"/>--}}
{{--                                            </div>--}}
{{--                                        </th>--}}
{{--                                        <th class="min-w-425px">الشروط والاحكام</th>--}}
{{--                                        <th class="text-end min-w-100px">عمليات</th>--}}
{{--                                    </tr>--}}
{{--                                    <!--end::Table row-->--}}
{{--                                    </thead>--}}
{{--                                    <!--end::Table head-->--}}
{{--                                    <!--begin::Table body-->--}}
{{--                                    <tbody class="text-gray-600 fw-semibold">--}}
{{--                                    @if(isset($data))--}}
{{--                                        <!--begin::Table row-->--}}
{{--                                        <tr>--}}
{{--                                            <!--begin::Checkbox-->--}}
{{--                                            <td>--}}
{{--                                                <div--}}
{{--                                                    class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="{{$data->id}}"/>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <!--end::Checkbox-->--}}
{{--                                            <!--begin::User=-->--}}
{{--                                            <td class="d-flex align-items-center">--}}

{{--                                                <!--begin::User details-->--}}
{{--                                                <div class="d-flex flex-column">--}}
{{--                                                    {{$data->terms_details}}--}}
{{--                                                </div>--}}
{{--                                                <!--begin::User details-->--}}
{{--                                            </td>--}}
{{--                                            <!--end::User=-->--}}

{{--                                            <!--begin::Action=-->--}}
{{--                                            <td class="text-end">--}}
{{--                                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"--}}
{{--                                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عمليات--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-5 m-0">--}}
{{--																<svg width="24" height="24" viewBox="0 0 24 24"--}}
{{--                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--																	<path--}}
{{--                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"--}}
{{--                                                                        fill="currentColor"/>--}}
{{--																</svg>--}}
{{--															</span>--}}
{{--                                                    <!--end::Svg Icon--></a>--}}
{{--                                                <!--begin::Menu-->--}}
{{--                                                <div--}}
{{--                                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"--}}
{{--                                                    data-kt-menu="true">--}}
{{--                                                    <!--begin::Menu item-->--}}
{{--                                                    <div class="menu-item px-3">--}}
{{--                                                        <a href="{{route('terms.edit', $data->id)}}"--}}
{{--                                                           class="menu-link px-3">عرض & تعديل</a>--}}
{{--                                                    </div>--}}
{{--                                                    <!--end::Menu item-->--}}
{{--                                                    <!--begin::Menu item-->--}}
{{--                                                --}}{{--                                                    <div class="menu-item px-3">--}}
{{--                                                --}}{{--                                                        <a href="#" class="menu-link px-3"--}}
{{--                                                --}}{{--                                                           data-kt-users-table-filter="delete_row">Delete</a>--}}
{{--                                                --}}{{--                                                    </div>--}}
{{--                                                <!--end::Menu item-->--}}
{{--                                                </div>--}}
{{--                                                <!--end::Menu-->--}}
{{--                                            </td>--}}
{{--                                            <!--end::Action=-->--}}
{{--                                        </tr>--}}
{{--                                        <!--end::Table row-->--}}
{{--                                    @endif--}}


{{--                                    </tbody>--}}
{{--                                    <!--end::Table body-->--}}
{{--                                </table>--}}
{{--                                <!--end::Table-->--}}
{{--                            </div>--}}
{{--                            <!--end::Card body-->--}}
{{--                        </div>--}}
{{--                        <!--end::Card-->--}}
{{--                    </div>--}}
{{--                    <!--end::Content-->--}}
{{--                </div>--}}
{{--                <!--end::Content wrapper-->--}}


{{--                <!--begin::Footer-->--}}
{{--            @include('dashboard.includes.footer')--}}

{{--            <!--end::Footer-->--}}
{{--            </div>--}}
{{--            <!--end:::Main-->--}}
{{--        </div>--}}
{{--        <!--end::Wrapper container-->--}}
{{--    </div>--}}
{{--@stop--}}


@extends('layouts.dashboard_2')
@section('title', 'Terms')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6" dir="rtl">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                الشروط والأحكام</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="{{route('dashboard')}}"
                                       class="text-muted text-hover-primary">الرئيسية</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">الشروط والأحكام</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->

                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid" dir="rtl">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-xxl">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card header-->
                            <div class="card-header border-0 pt-6">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-duotone ki-magnifier fs-3 position-absolute me-5" style="left: 10px">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="بحث" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->

                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body py-4">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                                    <thead>
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2" style="text-align: right">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                            </div>
                                        </th>
                                        <th class="min-w-425px" style="text-align: right">الشروط والاحكام</th>
                                        <th class=" min-w-100px" style="text-align: center">عمليات</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-gray-600 fw-semibold">
                                    @if(isset($data))
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Checkbox-->
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="{{$data->id}}"/>
                                                </div>
                                            </td>
                                            <!--end::Checkbox-->
                                            <!--begin::User=-->
                                            <td class="d-flex align-items-center">

                                                <!--begin::User details-->
                                                <div class="d-flex flex-column">
                                                    {!! $data->terms_details !!}
                                                </div>
                                                <!--begin::User details-->
                                            </td>
                                            <!--end::User=-->

                                            <!--begin::Action=-->
                                            <td class="text-end" style="text-align: center!important;">
                                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عمليات
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                                                    <!--end::Svg Icon--></a>
                                                <!--begin::Menu-->
                                                <div
                                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    @if(auth()->user()->can('terms.show') )

                                                    <div class="menu-item px-3">
                                                        <a href="{{route('terms.show', $data->id)}}"
                                                           class="menu-link px-3"> التفاصيل</a>
                                                    </div>
                                                    @endif
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    @if(auth()->user()->can('terms.edit') )

                                                    <div class="menu-item px-3">
                                                        <a href="{{route('terms.edit', $data->id)}}"
                                                           class="menu-link px-3"> تعديل</a>
                                                    </div>
                                                    @endif
                                                    <!--end::Menu item-->                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                            <!--end::Action=-->
                                        </tr>
                                        <!--end::Table row-->
                                    @endif

                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content-->
        <!--end::Content wrapper-->
        <!--begin::Footer-->
    @include('dashboard.includes.footer')
    <!--end::Footer-->
    </div>
@stop
