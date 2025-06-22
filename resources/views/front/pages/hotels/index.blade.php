@extends('front.layouts.app')

@push('user.css')
<style>
    .xs-section .blog-wrap {
        margin-bottom: 80px;
    }

    .destination_details_custom_ {
        padding: 10px;
        text-align: right;
        position: absolute;
        bottom: 10px;
        right: 10px;
        left: 10px;
=        border-radius: 10px;
    }

    .destination_details_custom_ h5 {
        font-size: 16px;
        font-weight: bold;
        margin: 0;
        color: #fff;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
<link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">
@endpush

@section('content')
<!-- breadcrumb start -->
<section class="breadcrumb-section pt-0">
    <img src="{{ asset('front/assets/images/inner-pages/bg-bread.jpg') }}" class="bg-img img-fluid blur-up lazyload" alt="">
    <div class="breadcrumb-content">
        <div>
            <h2>جميع الوجهات السياحيه</h2>
            <nav aria-label="breadcrumb" class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">الوجهات السياحة</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<!-- section start -->
<section class="xs-section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 m-auto ratio3_2">
                <div class="product-wrapper-grid special-section grid-box">
                    <div class="row content grid mb-3" dir="rtl">

                        @if(isset($hotels) && $hotels->count() > 0)
                            @foreach ($hotels as $item)
                                <div class="col-xl-4 col-sm-6 mb-5">
                                    <div>
                                        <div class="blog-wrap position-relative">
                                            <div class="blog-image destination_custom_img_">
                                                <a href="{{ route('user.hotels.show', $item->id) }}">
                                                    <div class="bg_img">
                                                        @if ($item->hotelImages && count($item->hotelImages) > 0)
                                                            <img src="{{ asset('uploads/hotels/' . $item->hotelImages->first()->image) }}"
                                                                 class="img-fluid blur-up lazyload bg-img-other" alt="">
                                                        @else
                                                            <img src="{{ asset('front/assets/img/default-hotel.jpg') }}"
                                                                 class="img-fluid blur-up lazyload bg-img-other" alt="">
                                                        @endif
                                                        <div class="overlay"></div>
                                                        <div class="destination_details_custom_">
                                                            <h5 class="mb-3">{{ $item->title }}</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12 text-center">
                                <p>لا توجد فنادق حالياً.</p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section End -->
@endsection
