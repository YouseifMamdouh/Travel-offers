@extends('layouts.dashboard_2')
@section('title', 'Room Edit')
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
                            Room Edit</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('dashboard')}}"
                                   class="text-muted text-hover-primary">Dashboard</a> <span class="px-2"> - </span>
                                <a href="{{route('rooms.index')}}" class="text-muted text-hover-primary">Rooms</a> <span class="px-2"> - </span>
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

                        <!--begin::Table-->
                        <form action="{{route('rooms.update', $data->id)}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <input type="hidden" value="{{$data->id}}" name="id">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="title" value="{{$data->title}}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Title" />
                                <!--end::Input-->
                            </div>

                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="title">Description</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea name="description" class="form-control form-control-solid mb-3 mb-lg-0" id="editor" placeholder="Description">{{$data->description}}</textarea>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2"
                                       for="hotel_id">Hotel</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="hotel_id" id="hotel_id" style="width: 100%">
                                    @if(isset($hotels) && $hotels->count() > 0)
                                        @foreach($hotels as $hotel)
                                            <option
                                                value="{{$hotel->id}}" {{$data->hotel_id == $hotel->id ? 'selected' : ''}}>{{$hotel->title}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <!--end::Input-->
                            </div>

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="type_of">Type</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="type_of" id="type_of" style="width: 100%">
                                    <option value="single" {{$data->type_of == 'single' ? 'selected' : ''}}>Single</option>
                                    <option value="double" {{$data->type_of == 'double' ? 'selected' : ''}}>Double</option>
                                    <option value="family" {{$data->type_of == 'family' ? 'selected' : ''}}>Family (4 Persons)</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="features">Features</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select id="features" placeholder="Choose Features"
                                        multiple name="features[]"
                                        class=" selectize-event">

                                    <optgroup label="">

                                        @if(isset($features) && $features->count() > 0)
                                            @foreach($features as $feature)
                                                <option
                                                    value="{{$feature->id}}" {{in_array($feature->id, $data->features->pluck('id')->toArray()) ? 'selected' : ''}}>
                                                    {{$feature->name}}
                                                </option>
                                            @endforeach
                                        @endif

                                    </optgroup>
                                </select>
                                <!--end::Input-->
                            </div>

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" for="price">Price</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" name="price" value="{{$data->price}}"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="Price"/>
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
@section('style')
    <style>
    </style>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css"
        integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
@endsection

@section('script')

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
        integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>

    <script>
        $(document).ready(function () {

            $('#hotel_id').select2();
            $('#type_of').select2();
            $('#features').selectize();

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
