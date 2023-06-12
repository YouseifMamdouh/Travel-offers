@extends('layouts.dashboard_2')
@section('title', 'City Edit')
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
                            Cities</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('dashboard')}}"
                                   class="text-muted text-hover-primary">Dashboard</a> <span class="px-2"> - </span>
                                <a href="{{route('cities.index')}}" class="text-muted text-hover-primary">Cities</a> <span class="px-2"> - </span>
                                <span> Edit </span>
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

                        <div class="row px-0">
                            <div class="col-lg-4 col-md-4 col-sm-7 col-12 m-auto">
                                <img src="{{asset('uploads/cities/'. $data->image)}}" alt="city" class="w-100">
                            </div>
                        </div>
                        <!--begin::Table-->
                        <form action="{{route('cities.update', $data->id)}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <input type="hidden" value="{{$data->id}}" name="id">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="title" value="{{$data->title}}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="City Name" />
                                <!--end::Input-->
                            </div>
                            @php($countries = App\Models\Country::get())
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="country_id">Country</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="country_id" id="country_id" style="width: 100%">
                                    @if(isset($countries) && $countries->count() > 0)
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}" {{$data->country_id == $country->id ? 'selected' : ''}}>{{$country->title}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <!-- begin::Input group-->
                            <div class="fv-row mb-7">
                                <!-- begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Summary</label>
                                <!-- end::Label-->
                                <!-- begin::Input-->
                                <textarea name="summary" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Summary">{{$data->summary}}</textarea>
                                <!-- end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fw-semibold fs-6 mb-2">Image</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" type="file" id="formFile" name="image">
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary"
                                        data-kt-users-modal-action="submit">
                                    <span class="indicator-label">Update</span>
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
            let country_id = $("#country_id");
            country_id.select2();

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
