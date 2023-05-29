@extends('layouts.dashboard_2')
@section('title', 'الوظائف')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        @if(isset($role))
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
                                    <a href="{{route('roles.index')}}"
                                       class="text-muted text-hover-primary">الوظائف</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">{{$role->name}}</li>
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
                                <div class="col-xxl-3 col-xl-3 col-md-3 col-sm-6 col-12">
                                    <h4 class="py-3">اسم الوظيفة : {{$role->name}}</h4>
                                </div>
                                <div class="col-xxl-9 col-xl-9 col-md-9 col-sm-6 col-12">
                                    <a href="{{route('roles.edit', $role->id)}}" class="btn btn-primary mx-3">تعديل <i class="fa fa-cog"></i></a>
                                    <a href="{{route('roles.index')}}" class="btn btn-warning  mx-3">عودة <i class="fa fa-arrow-left"></i></a>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4 class="py-3">الصلاحيات : </h4>
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12">
                                    <ul>
                                        @foreach($role->permissions as $perm)
                                            @php
                                                $perm_arr = explode('.', $perm->name);
                                            @endphp

                                        <li><h4>{{__('messages.' . $perm_arr[1])}} {{__('messages.' . $perm_arr[0])}}</h4></li>
                                        @endforeach
                                    </ul>
                                </div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@stop
