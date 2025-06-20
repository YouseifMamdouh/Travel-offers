@extends('front.layouts.app')
@push('user.css')
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">
@endpush

@section('content')

    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="{{asset('front/assets/images/inner-pages/bg-bread.jpg')}}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content">
            <div>
                <h2>جميع الوجهات السياحيه </h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item active" aria-current="page">الوجهات السياحة</li>
                    </ol>
                </nav>
            </div>
        </div>
{{--        <div class="title-breadcrumb">Rica</div>--}}
    </section>
    <!-- breadcrumb end -->


    <!-- search section start -->
{{--    <section class="bg-white pt-0 search-panel" id="searchBar">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="search-section">--}}
{{--                        <div class="search-box">--}}
{{--                            <div class="left-part" dir="rtl">--}}
{{--                                <div class="search-body title-hotel">--}}
{{--                                    <h6>الفندق</h6>--}}
{{--                                    <input type="text" name="text" placeholder="دبي" class="form-control ">--}}
{{--                                </div>--}}
{{--                                <div class="search-body">--}}
{{--                                    <h6>موعد الحجز</h6>--}}
{{--                                    <input placeholder="18 april" class="datepicker" />--}}
{{--                                </div>--}}
{{--                                <div class="search-body">--}}
{{--                                    <h6>موعد انتهاء الحجز</h6>--}}
{{--                                    <input placeholder="20 april" class="datepicker" />--}}
{{--                                </div>--}}
{{--                                <div class="search-body">--}}
{{--                                    <h6>الضيوف</h6>--}}
{{--                                    <div class="qty-box">--}}
{{--                                        <div class="input-group">--}}
{{--                                            <span class="input-group-prepend">--}}
{{--                                                <button type="button" class="btn quantity-left-minus" data-type="minus"--}}
{{--                                                    data-field="">--}}
{{--                                                    <i class="fas fa-chevron-down"></i>--}}
{{--                                                </button>--}}
{{--                                            </span>--}}
{{--                                            <input type="text" name="quantity" class="form-control input-number"--}}
{{--                                                value="1">--}}
{{--                                            <span class="input-group-prepend">--}}
{{--                                                <button type="button" class="btn quantity-right-plus" data-type="plus"--}}
{{--                                                    data-field="">--}}
{{--                                                    <i class="fas fa-chevron-up"></i>--}}
{{--                                                </button>--}}
{{--                                            </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="search-body btn-search">--}}
{{--                                    <div class="right-part">--}}
{{--                                        <a href="#" class="btn btn-solid color1">بحث</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- search section end -->


    <!-- section start -->
    <section class="xs-section bg-inner">
        <div class="container">
            <div class="row">

                <div class="col-lg-11 m-auto ratio3_2">

                    <div class="product-wrapper-grid special-section grid-box">
                        <div class="row  content grid" dir="rtl">
                            @if(isset($hotels) && $hotels->count() > 0)
                                @foreach($hotels as $item)
                                    <div class="col-xl-4 col-sm-6 popular grid-item wow fadeInUp" data-class="popular">
                                        <div class="special-box">
                                            <div class="special-img">
                                                <a href="{{ route('user.hotels.show',$item->id) }}">
                                                    @if(count($item->hotelImages) > 0)
                                                        <img src="{{asset('uploads/hotels/'. $item->hotelImages->first()->image)}} "
                                                             class="img-fluid blur-up lazyload bg-img" alt="">
                                                    @endif
                                                </a>
                                                <div class="top-icon">
                                                    <a href="#" class="" data-bs-toggle="tooltip" data-placement="top" title=""
                                                       data-original-title="Add to Wishlist">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="special-content">
                                                <a href="{{ route('user.hotels.show', $item->id) }}">
                                                    <h5>{{$item->title}}
                                                    </h5>
                                                </a>
                                                <h5 class="mt-1">
                                                    <span class="ms-0"><i class="fas fa-map-marker-alt"></i> {{$item->country->title}}, {{$item->city->title}}</span>
                                                </h5>
                                                <p>
                                                    {{$item->address}}
                                                </p>

                                            </div>
{{--                                            <div class="label-offer">hot deal</div>--}}
                                        </div>
                                    </div>
                                @endforeach
                            @endif
{{--                                <div class="col-xl-4 col-sm-6 latest grid-item wow fadeInUp" data-class="latest">--}}
{{--                                    <div class="special-box">--}}
{{--                                        <div class="special-img">--}}
{{--                                            <a href="{{ route('user.hotels.show',1) }}">--}}
{{--                                                <img src="{{asset('front/assets/images/hotel/gallery/4.jpg')}}"--}}
{{--                                                     class="img-fluid blur-up lazyload bg-img" alt="">--}}
{{--                                            </a>--}}
{{--                                            <div class="top-icon">--}}
{{--                                                <a href="#" class="" data-bs-toggle="tooltip" data-placement="top" title=""--}}
{{--                                                   data-original-title="Add to Wishlist">--}}
{{--                                                    <i class="far fa-heart"></i>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="special-content">--}}
{{--                                            <a href="{{ route('user.hotels.show',1) }}">--}}
{{--                                                <h5>the venetian <span><i class="fas fa-map-marker-alt"></i> Newyork</span>--}}
{{--                                                </h5>--}}
{{--                                            </a>--}}
{{--                                            <p>--}}
{{--                                                Lorem Ipsum is simply dummy text the printing Ipsum is simply Lorem Ipsum is--}}
{{--                                                simply dummy text of the ..............--}}
{{--                                            </p>--}}
{{--                                            <div class="bottom-section">--}}

{{--                                                <div class="price">--}}
{{--                                                    <del>{{__('messages.currency')}}1300</del>--}}
{{--                                                    <span>{{__('messages.currency')}}1245</span>--}}

{{--                                                </div>--}}
{{--                                                <div class="price">--}}
{{--                                                    <div class="facility-detail">--}}
{{--                                                        <span>swimming</span>--}}
{{--                                                        <span>parking</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="label-offer">Recommended</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-sm-6 trend grid-item wow fadeInUp" data-class="trend">--}}
{{--                                    <div class="special-box">--}}
{{--                                        <div class="special-img">--}}
{{--                                            <a href="{{ route('user.hotels.show',1) }}">--}}
{{--                                                <img src="{{asset('front/assets/images/hotel/room/2.jpg')}}"--}}
{{--                                                     class="img-fluid blur-up lazyload bg-img" alt="">--}}
{{--                                            </a>--}}
{{--                                            <div class="top-icon">--}}
{{--                                                <a href="#" class="" data-bs-toggle="tooltip" data-placement="top" title=""--}}
{{--                                                   data-original-title="Add to Wishlist">--}}
{{--                                                    <i class="far fa-heart"></i>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="special-content">--}}
{{--                                            <a href="{{ route('user.hotels.show',1) }}">--}}
{{--                                                <h5>the venetian <span><i class="fas fa-map-marker-alt"></i> Newyork</span>--}}
{{--                                                </h5>--}}
{{--                                            </a>--}}
{{--                                            <p>--}}
{{--                                                Lorem Ipsum is simply dummy text the printing Ipsum is simply Lorem Ipsum is--}}
{{--                                                simply dummy text of the ..............--}}
{{--                                            </p>--}}
{{--                                            <div class="bottom-section">--}}

{{--                                                <div class="price">--}}
{{--                                                    <del>{{__('messages.currency')}}1300</del>--}}
{{--                                                    <span>{{__('messages.currency')}}1245</span>--}}

{{--                                                </div>--}}
{{--                                                <div class="price">--}}
{{--                                                    <div class="facility-detail">--}}
{{--                                                        <span>swimming</span>--}}
{{--                                                        <span>parking</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-sm-6 popular grid-item wow fadeInUp" data-class="popular">--}}
{{--                                    <div class="special-box">--}}
{{--                                        <div class="special-img">--}}
{{--                                            <a href="{{ route('user.hotels.show',1) }}">--}}
{{--                                                <img src="{{asset('front/assets/images/hotel/gallery/2.jpg')}}"--}}
{{--                                                     class="img-fluid blur-up lazyload bg-img" alt="">--}}
{{--                                            </a>--}}
{{--                                            <div class="top-icon">--}}
{{--                                                <a href="#" class="" data-bs-toggle="tooltip" data-placement="top" title=""--}}
{{--                                                   data-original-title="Add to Wishlist">--}}
{{--                                                    <i class="far fa-heart"></i>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="special-content">--}}
{{--                                            <a href="{{ route('user.hotels.show',1) }}">--}}
{{--                                                <h5>the venetian <span><i class="fas fa-map-marker-alt"></i> Newyork</span>--}}
{{--                                                </h5>--}}
{{--                                            </a>--}}
{{--                                            <p>--}}
{{--                                                Lorem Ipsum is simply dummy text the printing Ipsum is simply Lorem Ipsum is--}}
{{--                                                simply dummy text of the ..............--}}
{{--                                            </p>--}}
{{--                                            <div class="bottom-section">--}}

{{--                                                <div class="price">--}}
{{--                                                    <del>{{__('messages.currency')}}1300</del>--}}
{{--                                                    <span>{{__('messages.currency')}}1245</span>--}}

{{--                                                </div>--}}
{{--                                                <div class="price">--}}
{{--                                                    <div class="facility-detail">--}}
{{--                                                        <span>swimming</span>--}}
{{--                                                        <span>parking</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                        </div>
                        <div>{{$hotels->links()}}</div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- section End -->

@endsection
