@extends('layouts.dashboard_2')
@section('title', 'المصاحف')
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
                            صور المصحف</h1>
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
                                <a href="{{route('moshaf.index')}}"
                                   class="text-muted text-hover-primary">المصاحف</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">{{$moshaf->title}}</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">صور المصحف</li>
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
            <div id="kt_app_content" class="app-content flex-column-fluid" dir="rtl">
                <!--begin::Content container-->
                <div class="card">
                    <!--begin::Card body-->
                    <div class="card-body py-4" dir="rtl">
                        <!--begin::Table-->
                        <form action="{{route('moshaf.images.store', $moshaf->id)}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$moshaf->id}}" name="moshaf_id">
                            {{--                                <input type="hidden" value="{{$locale}}" name="locale_">--}}
                            <div class="row mb-7">

                                <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 col-12 mb-4">

                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-2">ملف المصحف</label>
                                    <!--end::Label-->
                                    <input class="form-control" multiple type="file" id="formFile" name="images[]">
                                </div>


                            </div>
                            <!--end::Input group-->


                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary"
                                        data-kt-users-modal-action="submit">
                                    <span class="indicator-label">حفظ</span>
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

@section('script')
    <script src="{{asset('admin/assets/js/custom/apps/user-management/users/list/add.js')}}"></script>


@stop
