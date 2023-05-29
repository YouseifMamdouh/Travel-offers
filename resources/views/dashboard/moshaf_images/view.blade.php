@extends('layouts.dashboard_2')
@section('title', 'المصاحف - عرض وتعديل')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            @if(isset($data))
                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6" dir="rtl">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                عرض وتعديل </h1>
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
                                <li class="breadcrumb-item text-muted"><a href="{{route('moshaf.index')}}"
                                                                          class="text-muted text-hover-primary">المصاحف</a>
                                </li>
                                <!--end::Item-->
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">عرض وتعديل</li>
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
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body py-4" dir="rtl">
                            <!--begin::Table-->
                            <form action="{{route('moshaf.update', $data->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{$data->id}}" name="id">
{{--                                <input type="hidden" value="{{$locale}}" name="locale_">--}}
                                <div class="row mb-7">
                                    @foreach($locales as $locale)
                                        <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 col-12 mb-4">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2">عنوان
                                                المصحف
                                            ({{$locale->title}})</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="title[{{$locale->shorthand}}]" value="{{ isset($data->getTranslations()['title'][$locale->shorthand]) ? $data->getTranslations()['title'][$locale->shorthand] : $data->title }}"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="عنوان المصحف"/>
                                            <!--end::Input-->
                                        </div>
                                    @endforeach

                                    <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 col-12 mb-4">

                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">ملف المصحف</label>
                                        <!--end::Label-->
                                        <input class="form-control" type="file" id="formFile" name="sqlite_file">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 col-12 mb-4">

                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">الأيقونة</label>
                                        <!--end::Label-->
                                        <input class="form-control" type="file" id="formFile" name="icon">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 col-12 mb-4">

                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">الحالة</label>
                                        <!--end::Label-->
                                        <select class="form-select form-select-solid"
                                                aria-label="Select example" name="status"
                                                id="status">
                                            <option value="active" {{$data->status == 'active' ? 'selected' : ''}}>
                                                مفعل
                                            </option>
                                            <option
                                                value="not_active" {{$data->status == 'not_active' ? 'selected' : ''}}>
                                                غير مفعل
                                            </option>
                                        </select>
                                    </div>
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
        @endif

        <!--end::Content-->
        </div>
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
                .create(document.querySelector('#editor'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@stop
