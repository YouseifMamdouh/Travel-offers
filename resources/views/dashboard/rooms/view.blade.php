@extends('layouts.dashboard_2')
@section('title', 'Room View')
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
                            Room</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('dashboard')}}"
                                   class="text-muted text-hover-primary">Dashboard</a> <span class="px-2"> - </span>
                                <a href="{{route('rooms.index')}}" class="text-muted text-hover-primary">Rooms</a>
                                <span class="px-2"> - </span>
                                <span> View </span>
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

                        <div class="row px-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <h4>Room Images</h4>
                            </div>
                            @if(isset($data->roomImages) && $data->roomImages->count() > 0)
                                @foreach($data->roomImages as $image)

                                    <div
                                        class="col-lg-3 col-md-3 col-sm-4 col-6 m-auto text-center position-relative mb-3"
                                        id="row_{{$image->id}}">
                                        <div class="delete_image text-danger" data-target="{{$image->id}}"
                                             style="cursor:pointer;position: absolute; width: 26px; height: 25px; border-radius: 5px; background: #fff;top: 12px; right: 20px">
                                            <i class="ki-duotone ki-trash-square" style="font-size: 25px; color: red">
                                                <i class="path1"></i>
                                                <i class="path2"></i>
                                                <i class="path3"></i>
                                                <i class="path4"></i>
                                            </i>
                                        </div>
                                        <a href="{{asset('uploads/rooms/'. $image->image)}}" target="_blank">
                                            <img src="{{asset('uploads/rooms/'. $image->image)}}" alt="image"
                                                 class="w-100">
                                        </a>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-center">
                                    <h4>There is No Images Yet</h4>
                                </div>
                            @endif

                        </div>
                        <div class="row px-0 mt-3">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <h4>Room Details</h4>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        Name :
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        {{$data->title}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        Description :
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        {!! $data->description !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        Hotel :
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        {{$data->hotel->title}}
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        Type :
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        {{$data->type_of}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        Features :
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        @if(isset($data->features) && $data->features->count() > 0)
                                            @foreach($data->features as $feature)
                                                <span class="btn" style="background: #1b9dec; background-image: linear-gradient(to bottom,#1da7ee,#178ee9);box-shadow:0 1px 0 rgba(0,0,0,.2), inset 0 1px rgba(255,255,255,.03);text-shadow:0 1px 0 rgba(0,51,83,.3);border-radius: 3px;cursor:pointer;margin: 0 3px 3px 0;padding: 2px 6px;background: #1da7ee;color: #fff;border: 1px solid #0073bb; ">
                                                    {{$feature->name}}
                                                </span>
                                            @endforeach
                                        @else
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-center">
                                                <h4>There is No Images Yet</h4>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        Price :
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6  text-left details_item bold">
                                        {{$data->price}}
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
            // ClassicEditor
            //     .create(document.querySelector('#editor'))
            //     .then(editor => {
            //         console.log(editor);
            //     })
            //     .catch(error => {
            //         console.error(error);
            //     });

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
                                url: "/admin/rooms/delete-images/" + id,
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
