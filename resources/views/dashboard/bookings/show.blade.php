@extends('layouts.dashboard_2')
@section('title', 'Show Booking Details')
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
                            Show Booking Details</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('dashboard')}}"
                                   class="text-muted text-hover-primary">Dashboard</a> <span class="px-2"> - </span>
                                <a href="{{route('bookings.index')}}" class="text-muted text-hover-primary">Bookings</a>
                                <span class="px-2"> - </span>
                                <span> Show  </span>
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

                    <div class="card-body py-4" dir="{{Config::get('app.locale') == 'en' ? 'ltr' : 'rtl'}}">

                        <div class="row px-0 mt-3">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <h4>Booking Details</h4>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        First Name :
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6  text-left details_item bold">
                                        {{$data->f_name}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        Last Name :
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6  text-left details_item bold">
                                        {{$data->l_name}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        Service :
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6  text-left details_item bold">
                                        {{$data->service?->title}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        Email :
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6  text-left details_item bold">
                                        {{$data->email}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        Phone :
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6  text-left details_item bold">
                                        {{$data->phone}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        Address :
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6  text-left details_item bold">
                                        {{$data->address}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        Date :
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6  text-left details_item bold">
                                        {{date('d-m-Y', strtotime($data->created_at))}}
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
