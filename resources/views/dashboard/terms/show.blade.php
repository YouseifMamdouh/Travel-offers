@extends('layouts.dashboard_2')
@section('title', 'الشروط والأحكام')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
    @if(isset($data))
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
                                الوظائف</h1>
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
                                <li class="breadcrumb-item text-muted">
                                    <a href="{{route('terms.index')}}"
                                       class="text-muted text-hover-primary">الشروط والأحكام</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">عرض التفاصيل</li>
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
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Card-->
                    <div class="card container">
                        <!--begin::Card body-->
                        <div class="card-body py-4" dir="rtl">
                            <!--begin::Table-->
                            <div class="row my-3">
                                <div class="col-xxl-9 col-xl-9 col-md-9 col-sm-6 col-12 mb-3">
                                    @if(auth()->user()->can('terms.edit') )

                                        <a href="{{route('terms.edit', $data->id)}}" class="btn btn-primary mx-3">تعديل
                                            <i
                                                class="fa fa-cog"></i></a>
                                    @endif
                                    @if(auth()->user()->can('terms.list') )

                                        <a href="{{route('terms.index')}}" class="btn btn-warning  mx-3">عودة <i
                                                class="fa fa-arrow-left"></i></a>
                                    @endif
                                </div>
                                @foreach($locales as $locale)
                                    <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 col-12 my-1 p-4" style=" ">
                                        <div class="row">
                                            <div class="col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12  p-4">
                                                <div class="  px-3">
                                                    <h4>الشروط والأحكام ({{$locale->title}})</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12 my-3 p-4"
                                                 style=" background: #e2f0f9;border-radius: 5px">
                                                <div class="mb-3  px-3">
                                                    <p>{!! isset($data->getTranslations()['terms_details'][$locale->shorthand]) ? $data->getTranslations()['terms_details'][$locale->shorthand] : $data->terms_details !!}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                @endforeach


                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>

                <!--end::Content-->
            </div>
            <!--end::Content-->
    @endif
    <!--end::Content wrapper-->
        <!--begin::Footer-->
    @include('dashboard.includes.footer')
    <!--end::Footer-->
    </div>
@stop

@section('script')
    <script src="{{asset('admin/assets/js/custom/apps/user-management/users/list/add.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
            integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@stop
