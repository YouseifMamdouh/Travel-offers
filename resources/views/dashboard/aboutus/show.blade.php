@extends('layouts.dashboard_2')
@section('title', 'About us Image Show')
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
                            About us Image Show</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('dashboard')}}"
                                   class="text-muted text-hover-primary">Dashboard</a> <span class="px-2"> - </span>
                                <a href="{{route('aboutus.index')}}" class="text-muted text-hover-primary">About us Images</a>
                                <span class="px-2"> - </span>
                                <span> Show </span>
                            </li>
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

            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card body-->
                    <div class="card-header border-0 pt-6">

                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin::Add user-->
                                <a type="button" class="btn btn-primary" href="{{route('aboutus.edit', $data->id)}}">
                                    Edit
                                    <i class="ki-duotone ki-pencil">
                                        <i class="path1"></i>
                                        <i class="path2"></i>
                                    </i>
                                </a>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                    </div>
                    <div class="card-body py-4" dir="{{Config::get('app.locale') == 'en' ? 'ltr' : 'rtl'}}">

                        <div class="row px-0 mt-3">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <h4>About us Details</h4>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        Title :
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6  text-left details_item bold">
                                        {{$data->title}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        Sub Title :
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6  text-left details_item bold">
                                        {{$data->description}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        Image :
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6  text-left details_item bold">
                                        <img src="{{asset('uploads/aboutus/' . $data->image)}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>


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
            ClassicEditor
                .create(document.querySelector('#editor'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });

            let delete_image = $(".delete_image");
            delete_image.on('click', function (e) {
                e.preventDefault();
                let delete_image_div = delete_image.parent();
                let id = $(this).attr('data-target');
                if (id !== "") {
                    Swal.fire({
                        text: "Are You Sure?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Delete",
                        cancelButtonText: "Cancel",
                        customClass: {confirmButton: "btn btn-danger", cancelButton: "btn btn-active-light"}
                    }).then((function (result) {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "/admin/programmes/delete-images/" + id,
                                data: {
                                    _token: "{{csrf_token()}}",
                                    _method: "DELETE",
                                    id: id,
                                },
                                type: "POST",
                                success: function (response) {
                                    if (typeof (response) != 'object') {
                                        response = $.parseJSON(response)
                                    }
                                    console.log(response.status);

                                    if (response.status === 1) {
                                        let row_ = $('#row_' + id);
                                        row_.remove();
                                        Swal.fire({
                                            text: "{{__('messages.success_delete')}}",
                                            icon: "success",
                                            confirmButtonText: "back",
                                            customClass: {confirmButton: "btn btn-success"}
                                        });
                                    }
                                }

                            });
                        } else {
                            Swal.fire({
                                text: "{{__('messages.failed_delete')}}",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "back",
                                customClass: {confirmButton: "btn btn-primary"}
                            });
                        }
                    }));
                } else {
                    Swal.fire({
                        text: "{{__('messages.error_general')}}",
                        icon: "error",
                        confirmButtonText: "back",
                        customClass: {confirmButton: "btn btn-primary"}
                    })
                }
            });

        });
    </script>
@stop
