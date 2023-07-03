@extends('front.layouts.app')

@section('content')

    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0" >
        <img src="{{ asset('uploads/blogs/' . $blog->banner) }}" class="bg-img img-fluid blur-up lazyload" alt="">
    </section>
    <section class="pt-0 mt-1" style="background: #e0e0e0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 text-right">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('user.index')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active"
                                aria-current="page">الأخبار</li>
                            <li class="breadcrumb-item active"
                                aria-current="page">{{$blog->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="small-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="review-section text-right">
                        <div class="review_box">
                            <div class="title-top">
                                <h5> {{$blog->title}}</h5>
                            </div>
                            <div class="flight_detail">
                                <div class="row">
                                    <div class="description-section tab-section">
                                        <div class="description-details">
                                            <div class="desc-box">
                                                <div class="menu-part mt-0 about" id="highlight">
                                                    <div class="about-sec service_details">
                                                        {!! $blog->description !!}
                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>

        </div>
    </section>



@endsection
