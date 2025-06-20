@extends('front.layouts.app')
@push('user.css')
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">
@endpush

@section('content')

    @if(isset($hotel) && $hotel != null)
{{--        @if(count($hotel->hotelImages) > 0)--}}
{{--            <section class="pt-0 ratio2_3 zoom-gallery overlay-hover">--}}
{{--                <div class="container-fluid p-0">--}}
{{--                    <div class="row m-0">--}}
{{--                        <div class="col-md-6 p-0">--}}
{{--                            <a href="{{ asset('uploads/hotels/' . $hotel->hotelImages->first()->image) }}"--}}
{{--                               target="_blank">--}}
{{--                                <img src="{{ asset('uploads/hotels/' . $hotel->hotelImages->first()->image) }}"--}}
{{--                                     class="img-fluid blur-up lazyload bg-img" alt="image">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        @php($rest_of_images = $hotel->hotelImages->slice(1,count($hotel->hotelImages))->chunk(2))--}}
{{--                        @foreach($rest_of_images as $imgs_arr)--}}
{{--                            <div class="col-md-3 col-6 p-0">--}}
{{--                                @foreach($imgs_arr as $image)--}}
{{--                                    <a href="{{ asset('uploads/hotels/' . $image->image) }}" target="_blank">--}}
{{--                                        <img src="{{ asset('uploads/hotels/' . $image->image) }}"--}}
{{--                                             class="img-fluid blur-up lazyload bg-img"--}}
{{--                                             alt="">--}}
{{--                                    </a>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        @endforeach--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--        @endif--}}
        @if(count($hotel->hotelImages) > 0)
            <section class="pt-0 ratio2_3 zoom-gallery overlay-hover">
                <div class="container-fluid p-0">

                    <div class="owl-carousel owl-theme hotel_images" dir="ltr">
                        @foreach($hotel->hotelImages as $k => $single_image)

                            <div class="item" style="height: 66vh;width: 100%">
                                <img src="{{asset('uploads/hotels/' . $single_image->image)}}" alt="image" style="width: 100%;height: 100%">
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

    @endif
    <!-- image section start -->
    <!-- image section end -->


    <!-- section start -->
    @if(isset($hotel) && $hotel != null)

        <section class="single-section small-section bg-inner">
            <div class="container">
                <div class="row">
                    <div class="col-12" dir="rtl">
                        <div class="hotel_title_section">
                            <div class="hotel-name">
                                <div class="left-part">
                                    <div class="top">
                                        <h2>{{$hotel->title}}</h2>
                                        <div class="share-buttons">
                                            <a href="#" class="btn btn-solid"><i class="far fa-share-square"></i> مشاركة</a>
{{--                                            <a href="#" class="btn btn-solid"><i class="far fa-heart"></i> حفظ</a>--}}
                                        </div>
                                    </div>
                                    <p class="mt-1 mb-2"><i
                                            class="fas fa-map-marker-alt me-2"></i>{{$hotel->country->title . ', ' . $hotel->city->title}}
                                    </p>
                                    <p>{{$hotel->address}}</p>
                                </div>
                                @php($min_price = $hotel->rooms->min('price'))
                                @if($min_price != null && $min_price > 0)
                                    <div class="right-part" dir="rtl">
                                        <h2 class="price">{{$min_price}} {{__('messages.currency')}}
                                            <span>/ لكل ليلة</span>
                                        </h2>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" dir="rtl">
                    <div class="col-xl-9 col-lg-8">
                        <div class="description-section tab-section">
                            <div class="menu-top menu-up">
                                <ul class="nav nav-tabs" id="top-tab" role="tablist">

                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active"
                                                            href="#policy">المعرض</a>
                                    </li>
                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#about">عن
                                            الفندق</a>
                                    </li>
                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                                            href="#facility">المزايا</a>
                                    </li>
                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                                            href="#location">الموقع</a>
                                    </li>
                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link "
                                                            href="#rooms">الغرف</a></li>


                                </ul>
                                <div class="description-details tab-content" id="top-tabContent">
                                    <div class="menu-part tab-pane fade " id="rooms">
                                        <table class="rooms-box">
                                            @if($hotel->rooms != null)
                                                @foreach($hotel->rooms as $room)
                                                    <tr>
                                                        <td>
                                                            <h6 class="room-title">{{$room->title}}</h6>
                                                            @if(count($room->roomImages) > 0)

                                                                <a href="#">
                                                                    <img
                                                                        src="{{asset('uploads/rooms/' . $room->roomImages->first()->image )}}"
                                                                        class="img-fluid blur-up lazyload" alt="">
                                                                </a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="room-detail">
                                                                <div class="row">
                                                                    <div class="col-6 p-0">
{{--                                                                        <h6>المزايا</h6>--}}
                                                                        <div class="facility-detail">
                                                                            <ul>
                                                                                @if(count($room->features) > 0)
                                                                                    @foreach($room->features as $feature)
                                                                                        <li><img
                                                                                                src="{{ asset('uploads/features/' . $feature->icon) }}"
                                                                                                class="img-fluid blur-up lazyload"
                                                                                                alt="">
                                                                                            {{$feature->name}}
                                                                                        </li>
                                                                                    @endforeach
                                                                                @endif


                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="price-details" style="margin-left: {{$room->price < 1 ? '50px' : '0'}}">
                                                                <div>
                                                                    @if($room->price > 0)
                                                                    @if($room->discount != null)
                                                                        <h6>
                                                                            {{($room->price * 100)/$room->discount .  General::getCurrency() }}
                                                                        </h6>
                                                                    @endif

                                                                    <h5>{{ $room->price . General::getCurrency() }}
                                                                        <span
                                                                            class="text-muted d-inline-block"
                                                                            style="font-size: 15px;font-weight: normal">/لكل ليلة</span>
                                                                    </h5>
                                                                    @endif

                                                                    <!-- success -->
                                                                    <div class="pretty p-default mt-4" dir="rtl">
                                                                        <input type="checkbox"/>
                                                                        <div class="state p-success">
                                                                            <label>احجز الان</label>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif

                                        </table>
                                    </div>
                                    <div class="about menu-part tab-pane fade" id="about">
                                        {!! $hotel->description !!}
                                    </div>
                                    <div class="menu-part tab-pane fade facility" id="facility">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-12">
                                                <h6><img
                                                        src="{{ asset('front/assets/images/icon/hotel/verified.png') }}"
                                                        class="img-fluid blur-up lazyload" alt="Basic">المزايا الأساسية
                                                </h6>
                                                <ul class="d-inline-block">
                                                    @foreach($all_features_in_hotel as $single_feature)
                                                        <li class="d-inline">
                                                            <div class="mb-2 d-inline-block">
                                                                <img class="me-2"
                                                                     src="{{asset('uploads/features/' . $single_feature->icon)}}"
                                                                     alt="icon" style="width: 25px">
                                                                {{$single_feature->name}}
                                                            </div>
                                                        </li>

                                                    @endforeach
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="menu-part tab-pane fade map" id="location">
                                        {!! $hotel->location !!}
                                    </div>

                                    <div class="menu-part tab-pane fade policy show active" id="policy">
                                        <div class="row">
                                            @if(isset($images) && $images->count() > 0)
                                                @foreach($images as $image_item)
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2"
                                                         style="overflow: hidden">
                                                        <a href="{{asset('uploads/rooms/' . $image_item->image)}}"
                                                           target="_blank">
                                                            <img src="{{asset('uploads/rooms/' . $image_item->image)}}"
                                                                 alt="{{$image_item->image}}" class="w-100">
                                                        </a>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="special-section related-box ratio3_2 grid-box">
                            <div class="slider-3 no-arrow">
                                @if(isset($related_hotels) && $related_hotels->count() > 0)
                                    @foreach($related_hotels as $single_hotel)
                                        <div>
                                            <div class="special-box p-0">
                                                <div class="special-img">
                                                    <a href="{{ route('user.hotels.show', $single_hotel->id) }}">

                                                        @if(count($single_hotel->hotelImages) > 0)
                                                            <img
                                                                src="{{asset('uploads/hotels/'. $single_hotel->hotelImages->first()->image)}} "
                                                                class="img-fluid blur-up lazyload bg-img" alt="">
                                                        @endif
                                                    </a>
                                                    <div class="top-icon">
                                                        <a href="#" class="" data-bs-toggle="tooltip"
                                                           data-placement="top"
                                                           title=""
                                                           data-original-title="Add to Wishlist">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="special-content">
                                                    <a href="{{ route('user.hotels.show', $single_hotel->id) }}">
                                                        <h5>{{$single_hotel->title}}
                                                        </h5>
                                                    </a>
                                                    <h5 class="mt-1">
                                                        <span class="ms-0"><i class="fas fa-map-marker-alt"></i> {{$single_hotel->country->title}}, {{$single_hotel->city->title}}</span>
                                                    </h5>

                                                    <p>
                                                        {{$single_hotel->address}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4" id="booking">
                        <div class="sticky-cls-top">
                            <div class="single-sidebar">
                                <div class="selection-section">
                                    <div class="overlay-map">
                                        <img src="{{ asset('front/assets/images/map-image.svg') }}"
                                             class="img-fluid blur-up lazyload" alt="">
                                        {!! $hotel->location !!}
                                        <h6>عرض علي الخريطة</h6>
                                    </div>

                                    <div class="book-btn-section">
                                        <input type="text" class="form-control mb-2" placeholder="ادخل الإسم بالكامل">
                                        <input type="text" class="form-control mb-2" placeholder="ادخل رقم الهاتف">
                                        <input type="email" class="form-control mb-2" placeholder="البريد الإلكتروني">
                                        <input placeholder="تسجيل الدخول" class="datepicker"/>
                                        <input placeholder="تسجيل الخروج" class="datepicker"/>
                                        <div class="rooms-section">
                                            <input type="text" class="form-control open-select"
                                                   placeholder="عدد الغرف والضيوف">
                                            <div class="selector-box">
                                                <div class="room-cls">
                                                    <label class="title_room">الغرفة 1</label>
                                                    <div class="qty-box">
                                                        <label>البالغين</label>
                                                        <div class="input-group">
                                                            <button type="button" class="btn quantity-left-minus"
                                                                    data-type="minus" data-field=""> -
                                                            </button>
                                                            <input type="text" name="quantity"
                                                                   class="form-control qty-input input-number"
                                                                   value="1">
                                                            <button type="button" class="btn quantity-right-plus"
                                                                    data-type="plus" data-field="">+
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="qty-box">
                                                        <label>الأطفال</label>
                                                        <div class="input-group">
                                                            <button type="button" class="btn quantity-left-minus"
                                                                    data-type="minus" data-field=""> -
                                                            </button>
                                                            <input type="text" name="quantity"
                                                                   class="form-control qty-input input-number"
                                                                   value="1">
                                                            <button type="button" class="btn quantity-right-plus"
                                                                    data-type="plus" data-field=""> +
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bottom-part">
                                                    <a href="#" class="add-room">إضافة غرفة +</a>
                                                    <a href="javascript:void(0)" class="btn">تأكيد</a>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="{{ route('user.hotels.form',1) }}"
                                           class="btn btn-rounded btn-sm color1">إرسال
                                            الطلب</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->
    @endif
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('.hotel_images').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                autoplay:true,
                autoplayTimeout:2000,
                autoplayHoverPause:true,
                // animateOut: 'fadeOut',
                // animateIn: 'fadeIn',
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        });

    </script>
@stop
