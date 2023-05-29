@extends('layouts.dashboard_2')
@section('title', 'الشروط والأحكام')
@section('content')



    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        @if(isset($role))

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
                            <li class="breadcrumb-item text-muted">

                                <a href="{{route('roles.show', $role->id)}}"
                                   class="text-muted text-hover-primary">{{$role->name}}</a>
                                </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">تعديل</li>
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
            <div id="kt_app_content_container" class="app-container container-xxl">

                @if(Session::has('errors'))
                    <div class="row">
                        <div class="w-100 card badge-danger py-2">
                            <ul>
                                @foreach(Session::get('errors')->toArray() as $key => $item_err)
                                    <li>
                                        <span style="font-size: 16px" class="py-1">{{$item_err[0]}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

            </div>
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card body-->
                    <div class="card-body py-4" dir="rtl">
                        <!--begin::Table-->
                        <form action="{{route('roles.update', $role->id)}}" method="post">
                            @csrf
                            @method("put")
                            <input type="hidden" value="{{$role->id}}" name="id">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">اسم الوظيفة</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" value="{{$role->name}}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="اسم اللغة" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <div class="col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>الصلاحيات</h4>
                                </div>
                                <!--end::Label-->

                                @php
                                    $role_perms = $role->permissions->pluck('id')->toArray();
                                @endphp
                                <!--begin::Input-->
                                @if(isset($perms) && $perms->count() > 0)
                                    @foreach($perms as $perm)
                                        <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-12 mb-4 px-5">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="perm_{{$perm->id}}" name="perms[{{$perm->id}}]" {{in_array($perm->id,$role_perms) ? 'checked' : ''}}>
                                                <label class="form-check-label" for="perm_{{$perm->id}}" style="color: #000">
                                                    @php
                                                        $perm_arr = explode('.', $perm->name);
                                                    @endphp
                                                    {{__('messages.' . $perm_arr[1])}} {{__('messages.' . $perm_arr[0])}}

                                                </label>
                                            </div>
                                        </div>

                                @endforeach
                            @endif
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary"
                                        data-kt-users-modal-action="submit">
                                    <span class="indicator-label">تحديث</span>
                                    <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>

                        </form>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content-->
        </div>
        @endif
        <!--end::Content wrapper-->
        <!--begin::Footer-->
    @include('dashboard.includes.footer')
    <!--end::Footer-->
    </div>
@stop
@section('script')
    <script>
        $(document).ready(function () {
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
        });
    </script>
@stop
