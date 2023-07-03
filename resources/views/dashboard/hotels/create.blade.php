@extends('layouts.dashboard_2')
@section('title', 'Add Hotel')
@section('content')



    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->

            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6" dir="{{Config::get('app.locale') == 'en' ? 'ltr' : 'rtl'}}">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Hotels</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('dashboard')}}"
                                   class="text-muted text-hover-primary">Dashboard</a> <span class="px-2"> - </span>
                                <a href="{{route('hotels.index')}}" class="text-muted text-hover-primary">Hotels</a> <span class="px-2"> - </span>
                                <span> Add Hotel </span>
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
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card body-->
                    <div class="card-body py-4" dir="{{Config::get('app.locale') == 'en' ? 'ltr' : 'rtl'}}">

                        <!--begin::Table-->
                        <form action="{{route('hotels.store')}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="title">Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="title" value="{{old('title')}}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Hotel Title" />
                                <!--end::Input-->
                            </div>

                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="title">Description</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea name="description" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Hotel Description" id="editor"></textarea>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="country_id">Country</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="country_id" id="country_id" style="width: 100%">
                                    @if(isset($countries) && $countries->count() > 0)
                                        <option value="">Choose City</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}" {{old("country_id") == $country->id ? 'selected' : ''}}>{{$country->title}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="city_id">City</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="city_id" id="city_id" style="width: 100%" disabled>
                                    <option value="">Choose City</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="location">Location</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="location" class="form-control form-control-solid mb-3 mb-lg-0" value="{{old('location')}}" placeholder="Location" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="address">Address</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="address" class="form-control form-control-solid mb-3 mb-lg-0" value="{{old('address')}}" placeholder="Address" />
                                <!--end::Input-->
                            </div>

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="address">Rooms Number</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" name="rooms_num" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Rooms Number" value="{{old('rooms_num')}}" />
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="formFile">Banner</label>
                                <!-- end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" type="file" id="formFile" name="banner">
                                <!-- end::Input-->
                            </div>

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

            let lang = $('#lang').val();

            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );


            let city_id = $("#city_id");
            city_id.select2();

            let country_id = $("#country_id");

            country_id.select2();
            country_id.on('change', function () {
                let id = $(this).val();
                city_id.find('option').remove();
                if(id !== '') {
                    $.ajax({
                        url: "{{url('admin/get-cities-from-country')}}/" + id,
                        data: {
                            _token: "{{csrf_token()}}",
                            _method: "POST",
                            id: id,
                        },
                        type: "POST",
                        success: function (response) {
                            if (typeof (response) != 'object') {
                                response = $.parseJSON(response)
                            }
                            // console.log(response);
                            let data = response.data;
                            if (response.status === 1) {

                                let html_opts = '';
                                $.each(data, function (index, item) {
                                    console.log(item.title[lang]);
                                    html_opts += "<option value='" + item.id + "'>" + item.title[lang] + "</option>";
                                });
                                city_id.append(html_opts);
                                city_id.removeAttr('disabled');
                                city_id.select2();
                            } else {
                                city_id.attr('disabled', true);
                            }
                        }

                    });
                } else {

                }
            });
        });
    </script>
@stop
