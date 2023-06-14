@extends('front.layouts.app')


@section('content')

    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="{{asset('front/assets/images/inner-pages/bg-bread.jpg')}}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content">
            <div>
                <h2>جميع الفنادق</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item active" aria-current="page">الفنادق</li>
                    </ol>
                </nav>
            </div>
        </div>
{{--        <div class="title-breadcrumb">Rica</div>--}}
    </section>
    <!-- breadcrumb end -->


    <!-- search section start -->
    <section class="bg-white pt-0 search-panel" id="searchBar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-section">
                        <div class="search-box">
                            <div class="left-part" dir="rtl">
                                <div class="search-body title-hotel">
                                    <h6>الفندق</h6>
                                    <input type="text" name="text" placeholder="دبي" class="form-control ">
                                </div>
                                <div class="search-body">
                                    <h6>موعد الحجز</h6>
                                    <input placeholder="18 april" class="datepicker" />
                                </div>
                                <div class="search-body">
                                    <h6>موعد انتهاء الحجز</h6>
                                    <input placeholder="20 april" class="datepicker" />
                                </div>
                                <div class="search-body">
                                    <h6>الضيوف</h6>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn quantity-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                            </span>
                                            <input type="text" name="quantity" class="form-control input-number"
                                                value="1">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn quantity-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fas fa-chevron-up"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="search-body btn-search">
                                    <div class="right-part">
                                        <a href="#" class="btn btn-solid color1">بحث</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- search section end -->


    <!-- section start -->
    <section class="xs-section bg-inner">
        <div class="container">
            <div class="row">
{{--                <div class="col-12">--}}
{{--                    <div class="filter-panel">--}}
{{--                        <div class="left-filter">--}}
{{--                            <div class="respon-filter-btn">--}}
{{--                                <h6> filter <i class="fas fa-sort-down"></i></h6>--}}
{{--                                <span class="according-menu"></span>--}}
{{--                            </div>--}}
{{--                            <div class="filters respon-filter-content filter-button-group">--}}
{{--                                <ul>--}}
{{--                                    <li class="active" data-filter="*">All</li>--}}
{{--                                    <li data-filter=".popular">popular</li>--}}
{{--                                    <li data-filter=".latest">latest</li>--}}
{{--                                    <li data-filter=".trend">trend</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="right-panel">--}}

{{--                            <div class="collection-grid-view">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <a href="javascript:void(0)" class="product-2-layout-view">--}}
{{--                                            <ul class="filter-select">--}}
{{--                                                <li></li>--}}
{{--                                                <li></li>--}}
{{--                                            </ul>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="javascript:void(0)" class="product-3-layout-view">--}}
{{--                                            <ul class="filter-select">--}}
{{--                                                <li></li>--}}
{{--                                                <li></li>--}}
{{--                                                <li></li>--}}
{{--                                            </ul>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3">--}}
{{--                    <div class="left-sidebar">--}}
{{--                        <div class="back-btn">--}}
{{--                            back--}}
{{--                        </div>--}}
{{--                        <div class="search-bar">--}}
{{--                            <input type="text" placeholder="Search here..">--}}
{{--                            <i class="fas fa-search"></i>--}}
{{--                        </div>--}}
{{--                        <div class="middle-part collection-collapse-block open">--}}
{{--                            <a href="javascript:void(0)" class="section-title collapse-block-title">--}}
{{--                                <h5>latest filter</h5>--}}
{{--                                <img src="{{asset('front/assets/images/icon/adjust.png')}}" class="img-fluid blur-up lazyload" alt="">--}}
{{--                            </a>--}}
{{--                            <div class="collection-collapse-block-content ">--}}
{{--                                <div class="filter-block">--}}
{{--                                    <div class="collection-collapse-block open">--}}
{{--                                        <h6 class="collapse-block-title">district</h6>--}}
{{--                                        <div class="collection-collapse-block-content">--}}
{{--                                            <div class="collection-brand-filter">--}}
{{--                                                <div class="form-check collection-filter-checkbox">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="zara">--}}
{{--                                                    <label class="form-check-label" for="zara">all</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check collection-filter-checkbox">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="vera-moda">--}}
{{--                                                    <label class="form-check-label" for="vera-moda">la--}}
{{--                                                        defance</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check collection-filter-checkbox">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="forever-21">--}}
{{--                                                    <label class="form-check-label" for="forever-21">paris--}}
{{--                                                        center</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check collection-filter-checkbox">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="roadster">--}}
{{--                                                    <label class="form-check-label" for="roadster">latin</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="filter-block">--}}
{{--                                    <div class="collection-collapse-block open">--}}
{{--                                        <h6 class="collapse-block-title">facility</h6>--}}
{{--                                        <div class="collection-collapse-block-content">--}}
{{--                                            <div class="collection-brand-filter">--}}
{{--                                                <div class="form-check collection-filter-checkbox">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="restaurant">--}}
{{--                                                    <label class="form-check-label"--}}
{{--                                                        for="restaurant">restaurant</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check collection-filter-checkbox">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="wifi">--}}
{{--                                                    <label class="form-check-label" for="wifi">wifi</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check collection-filter-checkbox">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="spa">--}}
{{--                                                    <label class="form-check-label" for="spa">spa & salon</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check collection-filter-checkbox">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="pet">--}}
{{--                                                    <label class="form-check-label" for="pet">pet allowed</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check collection-filter-checkbox">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="parking">--}}
{{--                                                    <label class="form-check-label" for="parking">parking</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check collection-filter-checkbox">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="swimming">--}}
{{--                                                    <label class="form-check-label" for="swimming">swimming--}}
{{--                                                        pool</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check collection-filter-checkbox">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="fitness">--}}
{{--                                                    <label class="form-check-label" for="fitness">fitness--}}
{{--                                                        center</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="filter-block">--}}
{{--                                    <div class="collection-collapse-block open">--}}
{{--                                        <h6 class="collapse-block-title">star category</h6>--}}
{{--                                        <div class="collection-collapse-block-content">--}}
{{--                                            <div class="collection-brand-filter">--}}
{{--                                                <div class="form-check collection-filter-checkbox">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="five">--}}
{{--                                                    <label class="form-check-label rating" for="five">--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <span class="ms-1">(4025)</span>--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check collection-filter-checkbox">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="four">--}}
{{--                                                    <label class="form-check-label rating" for="four">--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="far fa-star"></i>--}}
{{--                                                        <span class="ms-1">(2012)</span>--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check collection-filter-checkbox">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="three">--}}
{{--                                                    <label class="form-check-label rating" for="three">--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="far fa-star"></i>--}}
{{--                                                        <i class="far fa-star"></i>--}}
{{--                                                        <span class="ms-1">(25)</span>--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check collection-filter-checkbox">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="two">--}}
{{--                                                    <label class="form-check-label rating" for="two">--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="far fa-star"></i>--}}
{{--                                                        <i class="far fa-star"></i>--}}
{{--                                                        <i class="far fa-star"></i>--}}
{{--                                                        <span class="ms-1">(1)</span>--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="filter-block">--}}
{{--                                    <div class="collection-collapse-block open">--}}
{{--                                        <h6 class="collapse-block-title">price range</h6>--}}
{{--                                        <div class="collection-collapse-block-content">--}}
{{--                                            <div class="wrapper">--}}
{{--                                                <div class="range-slider">--}}
{{--                                                    <input type="text" class="js-range-slider" value="" />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        --}}{{-- <div class="bottom-info">--}}
{{--                            <h5><span>i</span> need help</h5>--}}
{{--                            <h4>856 - 215 - 211</h4>--}}
{{--                            <h6>Monday to Friday 9.00am - 7.30pm</h6>--}}
{{--                        </div> --}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-lg-11 m-auto ratio3_2">
{{--                    <a href="javascript:void(0)" class="mobile-filter border-top-0">--}}
{{--                        <h5>latest filter</h5>--}}
{{--                        <img src="{{asset('front/assets/images/icon/adjust.png')}}" class="img-fluid blur-up lazyload" alt="">--}}
{{--                    </a>--}}
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
