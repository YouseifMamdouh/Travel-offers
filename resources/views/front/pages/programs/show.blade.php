@extends('front.layouts.app')

@section('style')
    <style>
        .breadcrumb-section {height:270px}
    </style>
@endsection

@section('content')

    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0" >
        <img src="{{ asset('uploads/programmes/' . $program->cover) }}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content overlay-black">
            <div>
            </div>
        </div>
        <div class="title-breadcrumb">Rica</div>
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
                                aria-current="page">البرامج السياحية</li>
                            <li class="breadcrumb-item active"
                                aria-current="page">{{$program->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- section start -->
    <section class="single-section small-section bg-inner">
        <div class="container">
            <div class="row">
                <div class="col-12" dir="rtl">
                    <div class="hotel_title_section">
                        <div class="hotel-name">
                            <div class="left-part">
                                <div class="top">
                                    <h2>{{$program->name}}</h2>
                                    <div class="share-buttons">
                                        <a href="#" class="btn btn-solid"><i class="far fa-share-square"></i> مشاركة</a>
                                        <a href="#" class="btn btn-solid"><i class="far fa-heart"></i> حفظ</a>
                                    </div>
                                </div>
                                <p class="mt-1 mb-2"><i
                                        class="fas fa-map-marker-alt ms-2"></i>{{$program->country->title . ', ' . $program->city->title}}
                                </p>
                                <p style="max-width: 75%">{{$program->plan}}</p>
                                {{--                                <div class="facility-detail">--}}
                                {{--                                    <span>free wifi</span>--}}
                                {{--                                    <span>free breakfast</span>--}}
                                {{--                                </div>--}}
                            </div>
                            <div class="right-part" dir="rtl">
                                <h4 style="color: #ef3f3e">
                                    @if($program->discount != null)
                                        <del>
                                            {{ ($program->price * 100)/$program->discount .  General::getCurrency() }}
                                        </del>
                                    @endif
                                </h4>
                                @if($program->price > 0)
                                <h2 class="price">

                                    {{  $program->price . General::getCurrency() }}
                                    <span>/للفرد</span>
                                </h2>
                                @endif
                                {{--                                    <a href="{{ route('user.hotels.form',1) }}" class="btn btn-rounded btn-sm color1">book--}}
                                {{--                                        this now</a>--}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row"  dir="rtl">

                <div class="col-xl-9 col-lg-8">
                    <div class="description-section tab-section">

                        <div class="description-details">
                            <div class="desc-box">
                                <div class="menu-part mt-0 about" id="highlight">
                                    {!! $program->description !!}
                                </div>
                            </div>
                            @if(isset($program->progImages) && $program->progImages->count() > 0)

                            <div class="desc-box">
                                <h4 class="content-title">gallery</h4>
                                <div class="menu-part" id="gallery">
                                    <div class="container-fluid p-0 ratio3_2">
                                        <div class="row  zoom-gallery">
                                                @foreach($program->progImages as $image)
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="overlay">
                                                            <a href="{{ asset('uploads/programmes/' . $image->image) }}" target="_blank">
                                                                <div class="overlay-background">
                                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                                </div>
                                                                <img src="{{ asset('uploads/programmes/' . $image->image) }}" alt="{{$image->image}}"
                                                                     class="img-fluid blur-up lazyload bg-img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

{{--                            <div class="desc-box">--}}
{{--                                <h4 class="content-title">review</h4>--}}
{{--                                <div class="menu-part review" id="review">--}}
{{--                                    <div class="review-box">--}}
{{--                                        <div class="rating">--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <span>Wonderful Experience...!!</span>--}}
{{--                                        </div>--}}
{{--                                        <h6>by xyz, jun 18, 2019</h6>--}}
{{--                                        <p>Our family holiday to Spain was awesome .pocket friendly rates that make--}}
{{--                                            planning a holiday a delight. I got a good hotels, flight discount for my--}}
{{--                                            round trip flight for the same trip while booking from sites.Thank you--}}
{{--                                            moment for giving us a wonderful experience.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="review-box">--}}
{{--                                        <div class="rating">--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="far fa-star"></i>--}}
{{--                                            <span>Excellent Arrangements</span>--}}
{{--                                        </div>--}}
{{--                                        <h6>by xyz, jun 18, 2019</h6>--}}
{{--                                        <p>Rica holidays planned our family trip to Spain, it was so perfect. Everything--}}
{{--                                            was flawless, in-case if any confusions there was always someone to assist--}}
{{--                                            us at any point. Had a wonderful experience and thanks to these guys for--}}
{{--                                            making it happen. I would really recommend them for further vacation--}}
{{--                                            planning.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="review-box">--}}
{{--                                        <div class="rating">--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="far fa-star"></i>--}}
{{--                                            <span>Best getaway destination with family</span>--}}
{{--                                        </div>--}}
{{--                                        <h6>by xyz, jun 18, 2019</h6>--}}
{{--                                        <p>Extremely happy with my trip to Spain. All the arrangements were spot on and--}}
{{--                                            cabs were punctual. Never had any hiccups and we enjoyed the trip immensely.--}}
{{--                                            Thanks you for organizing such a wonderful trip and taking care of all my--}}
{{--                                            special request with patience and skill.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                        </div>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-4 ">
                    <div class="sticky-cls">
                        <div class="single-sidebar">
                            <div class="selection-section">
                                <h4 class="title">احجز البرنامج</h4>
                                <div class="book-btn-section border-top-0">
                                    <div class="detail-top">
                                        <input type="text" id="firstName" class="form-control" placeholder="{{__("messages.f_name")}}">
                                        <input type="text" id="firstName" class="form-control" placeholder="{{__("messages.l_name")}}">
                                        <input type="email" id="email" class="form-control"
                                            placeholder="{{__("messages.email")}}">
                                        <input type="number" id="phone" class="form-control" placeholder="{{__("messages.phone")}}">
                                    </div>
                                    <div class="rooms-section">
                                        <input type="text" class="form-control open-select"
                                            placeholder="عدد الغرف والأفراد">
                                        <div class="selector-box">
                                            <div class="room-cls">
                                                <label class="title_room">الغرفة 1</label>
                                                <div class="qty-box">
                                                    <label>البالغين</label>
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field=""> - </button>
                                                        <input type="text" name="quantity"
                                                            class="form-control qty-input input-number" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">+</button>
                                                    </div>
                                                </div>
                                                <div class="qty-box">
                                                    <label>الأطفال</label>
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field=""> - </button>
                                                        <input type="text" name="quantity"
                                                            class="form-control qty-input input-number" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field=""> + </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bottom-part">
                                                <a href="#" class="add-room">إضافة غرفة +</a>
                                                <a href="javascript:void(0)" class="btn">تأكيد</a>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="#" class="btn btn-rounded btn-sm color1">إرسال الطلب</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->


    <!-- book now section start -->
    <div class="book-panel">
        <button data-bs-toggle="modal" data-bs-target="#booknowModal" type="button" class="btn bottom-btn theme-color">book
            now</button>
        <button data-bs-toggle="modal" data-bs-target="#enquiryModal" type="button" class="btn bottom-btn">enquiry</button>
    </div>
    <!-- book now section end -->

@endsection
