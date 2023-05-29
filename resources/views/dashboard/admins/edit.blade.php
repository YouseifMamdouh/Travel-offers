@extends('layouts.dashboard_2')
@section('title', 'الشروط والأحكام')
@section('content')



    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        @if(isset($user))

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
                                <a href="{{route('admins.index')}}"
                                   class="text-muted text-hover-primary">الموظفين</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                {{$user->name}}
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
                        <form action="{{route('admins.update', $user->id)}}" method="post">
                            @csrf
                            @method("POST")
                            <input type="hidden" value="{{$user->id}}" name="id">
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 col-12 my-3">
                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-2">اسم الموظف</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="name" value="{{$user->name}}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="اسم الموظف" />
                                    <!--end::Input-->
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 col-12 my-3">
                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-2">البريد الإلكتروني</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="email" name="email" value="{{$user->email}}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="البريد الإلكتروني" />
                                    <!--end::Input-->
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 col-12 my-3">
                                    <!--begin::Label-->
                                    <label class="fw-semibold fs-6 mb-2">كلمة المرور</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="password" name="password" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="كلمة المرور" />
                                    <!--end::Input-->
                                </div>

                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <div class="col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>المسمي الوظيفي</h4>
                                </div>
                                @if(isset($roles) && $roles->count() > 0)
                                    @foreach($roles as $role)
                                        <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 col-12 mb-4 px-5">
                                            <div class="form-check">
                                                <input class="form-check-input" value="{{$role->id}}" type="radio" name="role" id="role_{{$role->id}}" {{$user->roles->count() ? $role->id == $user->roles->first()->id ? 'checked' : '' : ''}}>
                                                <label class="form-check-label" for="role_{{$role->id}}" style="color: #000">
                                                    {{$role->name}}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
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
