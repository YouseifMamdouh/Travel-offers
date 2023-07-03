@extends('layouts.dashboard_2')
@section('title', 'Add Blog')
@section('content')



    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->

            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6"
                 dir="{{Config::get('app.locale') == 'en' ? 'ltr' : 'rtl'}}">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Add Blog</h1>
                        <!-- end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('dashboard')}}"
                                   class="text-muted text-hover-primary">Dashboard</a> <span class="px-2"> - </span>
                                <a href="{{route('blogs.index')}}" class="text-muted text-hover-primary">Blogs</a> <span
                                    class="px-2"> - </span>
                                <span> Add Blog </span>
                            </li>
                            <!-- end::Item-->

                        </ul>
                        <!-- end::Breadcrumb-->
                    </div>
                    <!-- end::Page title-->
                    <!--begin::Actions-->

                    <!-- end::Actions-->
                </div>
                <!-- end::Toolbar container-->
            </div>

            <!-- end::Toolbar-->
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
                    <div class="card-body py-4" dir="{{Config::get('app.locale') == 'en' ? 'ltr' : 'rtl'}}">

                        <!--begin::Table-->
                        <form action="{{route('blogs.store')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Title</label>
                                <!-- end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="title" value="{{old('title')}}"
                                       class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Blog Title"/>
                                <!-- end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Sub Title</label>
                                <!-- end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="sub_title" value="{{old('sub_title')}}"
                                       class="form-control form-control-solid mb-3 mb-lg-0" placeholder="sub title"/>
                                <!-- end::Input-->
                            </div>

                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="ck_description">Description</label>
                                <!-- end::Label-->
                                <!--begin::Input-->
                                <textarea class="form-control editor "
                                          rows="10" id="ck_description"
                                          name="description">{{old('description')}}</textarea>
                                <!-- end::Input-->
                            </div>
                            <!-- end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="image">Image</label>
                                <!-- end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" type="file" id="formFile" name="image">
                                <!-- end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="formFile">Banner</label>
                                <!-- end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" type="file" id="formFile" name="banner">
                                <!-- end::Input-->
                            </div>

                            <!-- end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!-- begin::Label -->
                                <label class="required fw-semibold fs-6 mb-2" for="created_at">Date</label>
                                <span>{{ old('created_at') ? '(' . date('d-m-Y', strtotime(old('created_at'))) . ')' : ''}}</span>
                                <!-- end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" type="date" id="created_at"
                                       name="created_at">
                                <!-- end::Input-->
                            </div>
                            <!-- end::Input group-->

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary"
                                        data-kt-users-modal-action="submit">
                                    <span class="indicator-label">Save</span>
                                    <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>

                        </form>
                        <!-- end::Table-->
                    </div>
                    <!-- end::Card body-->
                </div>
                <!-- end::Card-->
            </div>
            <!-- end::Content-->
        </div>
        <!-- end::Content wrapper-->
        <!--begin::Footer-->
    @include('dashboard.includes.footer')
    <!-- end::Footer-->
    </div>
@stop
@section('script')
    <script>
        $(document).ready(function () {
            ClassicEditor
                .create(document.querySelector('.editor'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });

        });
    </script>
@stop
