@extends('front.layouts.app')

@section('style')
    <style>
        .service_details h3{font-weight: bold!important;letter-spacing: 0!important;font-size: 19px!important;}
    </style>
@stop

@section('content')


    <!-- breadcrumb start -->
    <section class="breadcrumb-section flight-sec pt-0">
        <img src="{{ asset('uploads/services/'. $service->image) }}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-right breadcrumb-content pt-0">
                        <div>
                            <h2>{{$service->title}}</h2>
                            <nav aria-label="breadcrumb" class="theme-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$service->title}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->


<!-- booking section start -->
<section class="small-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="review-section">
                    <div class="review_box">
                        <div class="title-top">
                            <h5> {{$service->title}}</h5>
                        </div>
                        <div class="flight_detail">
                            <div class="row">
                                <div class="description-section tab-section">
                                    <div class="description-details">
                                        <div class="desc-box">
                                            <div class="menu-part mt-0 about" id="highlight">
                                                <div class="about-sec service_details">
                                                    {!! $service->description !!}
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="review_box">
                        <div class="title-top">
                            <h5>Booking Form</h5>
                        </div>
                        <div class="flight_detail">
                            <div class="row form_flight">
                                <div class="col-md-12">
                                    <form method="post" action="{{route('book.service', $service->id)}}">
                                        @csrf
                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label for="first">first name</label>
                                                <input type="text" class="form-control" id="first" name="f_name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="last">last name</label>
                                                <input type="text" class="form-control" id="last" name="l_name">
                                            </div>
                                        </div>


                                        <h6 class="mt-3">contact details</h6>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" name="email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputnumber">Phone no:</label>
                                                <input type="text" class="form-control" id="inputnumber" name="phone">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Address</label>
                                                <input type="text" class="form-control" id="address" name="address">
                                            </div>

                                        </div>
                                        <div class="continue-btn">
                                            <button  class="btn btn-solid" type="submit">Apply</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
<!-- booking section end -->

<!-- book now section start -->
<div class="book-panel">
    <h6 class="mb-0 text">grand total : <span>$2500</span></h6>
    <button type="button" onclick="window.location.href='service-booking-addons.html'" class="btn bottom-btn theme-color">continue</button>
</div>
<!-- book now section end -->

@endsection
