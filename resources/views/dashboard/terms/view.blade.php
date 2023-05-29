@extends('layouts.dashboard_2')
@section('title', 'الشروط والأحكام')
@section('content')



    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
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
                            <li class="breadcrumb-item text-muted"><a href="{{route('terms.index')}}"
                                                                      class="text-muted text-hover-primary">الشروط
                                    والأحكام</a></li>
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
                        <form action="{{route('terms.update', $data->id)}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$data->id}}" name="id">
                            @foreach($locales as $locale)
                                <div class="mb-3 ck_cont" id="ck_{{$locale->shorthand}}">
                                    <label for="exampleFormControlTextarea1" class="form-label">الشروط
                                        والاحكام({{$locale->title}})</label>
                                    <textarea class="form-control editor ck_{{$locale->shorthand}}"
                                              rows="10" id="text_{{$locale->shorthand}}"
                                              name="terms_details[{{$locale->shorthand}}]">{!! isset($data->getTranslations()['terms_details'][$locale->shorthand]) ? $data->getTranslations()['terms_details'][$locale->shorthand] : $data->terms_details !!}</textarea>

                                    @error("terms_details")
                                    <span class="badge badge-danger px-4 py-3 error_msg mt-3">{{$message}}</span>
                                    @enderror
                                    <span class="alert-danger"></span>
                                </div>
                            @endforeach
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
        <!--end::Content wrapper-->
        <!--begin::Footer-->
    @include('dashboard.includes.footer')
    <!--end::Footer-->
    </div>

@stop
@section('script')
    <script>
        $(document).ready(function () {
            let ck_cont = $('.ck_cont');

            ck_cont.each(function () {
                let ck = $(this);
                let ck_area = ck.find('.editor').attr('id');
                // alert(ck_area);
                ClassicEditor
                    .create(document.querySelector('#'+ck_area))
                    .then(editor => {
                        console.log(editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });

        });
    </script>
@stop
