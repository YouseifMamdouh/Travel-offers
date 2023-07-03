@extends('layouts.dashboard_2')
@section('title', 'Features')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6" dir="{{Config::get('app.locale') == 'en' ? 'ltr' : 'rtl'}}">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                features</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="{{route('dashboard')}}"
                                       class="text-muted text-hover-primary">Dashboard</a> <span class="px-2"> - </span> <span> features </span>
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
                <div id="kt_app_content" class="app-content flex-column-fluid" dir="{{Config::get('app.locale') == 'en' ? 'ltr' : 'rtl'}}">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-xxl">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card header-->
                            <div class="card-header border-0 pt-6">

                                <!--begin::Card toolbar-->

                                <div class="card-toolbar">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                        <!--begin::Add user-->
                                        <a type="button" class="btn btn-primary" href="{{route('features.create')}}">
                                            Add features<i class="ki-duotone ki-plus fs-2"></i></a>
                                        <!--end::Add user-->
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::Modal - Add task-->
                                    <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true" >
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Modal header-->
                                                <div class="modal-header" id="kt_modal_add_user_header">
                                                    <!--begin::Modal title-->
                                                    <h2 class="fw-bold">Add features</h2>
                                                    <!--end::Modal title-->
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                                        <i class="ki-duotone ki-cross fs-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--end::Modal header-->
                                                <!--begin::Modal body-->
                                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                    <!--begin::Form-->
                                                    <form id="kt_modal_add_user_form" class="form" method="post" action="{{route('features.store')}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <!--begin::Scroll-->
                                                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fw-semibold fs-6 mb-2" for="title">Name</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="features Name" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fw-semibold fs-6 mb-2" for="icon">Icon</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control form-control-solid" type="file" id="icon" name="icon">
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fw-semibold fs-6 mb-2" for="image">Type</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <select name="type_of" id="type_of" style="width: 100%">
                                                                    <option value="hotels">Hotels</option>
                                                                    <option value="programmes">Programmes</option>
                                                                </select>
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::Scroll-->
                                                        <!--begin::Actions-->
                                                        <div class="text-center pt-15">
                                                            <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Cancel</button>
                                                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                                <span class="indicator-label">Save</span>
                                                                <span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                            </button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Modal body-->
                                            </div>
                                            <!--end::Modal content-->
                                        </div>
                                        <!--end::Modal dialog-->
                                    </div>
                                    <!--end::Modal - Add task-->
                                </div>

                                <!--end::Card toolbar-->
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-duotone ki-magnifier fs-3 position-absolute me-5" style="left: 10px">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body py-4">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                                    <thead>
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2" style="text-align: right">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                            </div>
                                        </th>
                                        <th class="min-w-50px" style="text-align: center">Name</th>
                                        <th class="min-w-50px" style="text-align: center">Type</th>
                                        <th class="min-w-50px" style="text-align: center">Icon</th>
                                        <th class=" min-w-100px" style="text-align: center">Operation</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-gray-600 fw-semibold">
                                    @if(isset($data))
                                        @foreach($data as $key => $item)
                                        <!--begin::Table row-->
                                        <tr id="row_{{$item->id}}">
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="{{$key+1}}" />
                                                </div>
                                            </td>
                                            <td class="min-w-50px" style="text-align: center">
                                                <span>{{$item->name}}</span>
                                            </td>
                                            <td class="min-w-50px" style="text-align: center">
                                                <span>{{$item->type_of}}</span>
                                            </td>
                                            <td class="min-w-50px" style="text-align: center"><a href="{{asset('uploads/features/' . $item->icon)}}" target="_blank"><img src="{{asset('uploads/features/'.$item->icon)}}" alt="Banner" style="width: 20px"></a></td>

                                            <td class="text-end" style="text-align: center!important;">
                                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">operations
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                                                    <!--end::Svg Icon--></a>
                                                <!--begin::Menu-->
                                                <div
                                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->

                                                    <div class="menu-item px-3">
                                                        <a href="{{route('features.edit', $item->id)}}"
                                                           class="menu-link px-3"> Edit</a>
                                                    </div>

                                                        <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item  px-3">
                                                        <form method="post" action="{{route('features.destroy', $item->id)}}"
                                                           class="delete_locale">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" value="{{$item->id}}" name="locale_id">
                                                            <button class="menu-link delete_btn_li px-3 w-100" type="submit">Delete</button>
                                                        </form>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
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
{{--    <script src="{{asset('admin/assets/js/custom/apps/user-management/users/list/add.js')}}"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
<script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>

<script>
        $(document).ready(function () {


            let delete_li = $('.delete_btn_li');
            delete_li.on('click', function (e) {
                e.preventDefault();
                let form_locale = delete_li.parent();
                let id = $(this).parent().find('input[name="locale_id"]').val();
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
                                url: "{{url('admin/features/delete')}}/" + id,

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
