@extends('front.layouts.app')
@push('user.css')
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">
@endpush

@section('content')
    <section style="margin: 0 !important" class="banners_section flight-section p-0">
        <div class="banner_container large_owl_banners"
            style="height: 100vh;overflow: hidden;position:relative;
            background-image: linear-gradient(rgba(0, 0, 0, 0.24), rgba(0, 0, 0, 0.5)), url({{ asset('front/assets/images/banners_container.webp') }});
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;">
            <div class="banner_details" style="height: 94vh;">
                <h2>اكتشف العالم مع عروض السفر</h2>


                <a href="{{ route('user.contact') }}"
                    class="btn custom_btn_banner">{{ \App\Helpers\TranslationHelper::translate('More', 'site') }}</a>
            </div>
            <div class="owl-carousel owl-theme banners " dir="ltr">
                @foreach ($banners as $k => $banner)
                    <div class="item"
                        style="height: 40vh;overflow: hidden;position:relative;
                        background-image: url({{ asset('uploads/banners/' . $banner->image) }});
                        background-size: cover;
                        background-position: center center;
                        background-repeat: no-repeat; border-radius: 20px;overflow: hidden">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="owl-carousel owl-theme banners small_owl_banners" dir="ltr">
            @foreach ($banners as $k => $banner)
                <div class="item"
                    style="height: 94vh;overflow: hidden;position:relative;
                    background-image: linear-gradient(rgba(0, 0, 0, 0.24), rgba(0, 0, 0, 0.5)), url({{ asset('uploads/banners/' . $banner->image) }});
                    background-size: cover;
                    background-position: center center;
                    background-repeat: no-repeat;">
                    <div style="margin: 0 auto" class="banner_details tex-center">
                        <h2 class="text-center">اكتشف العالم مع عروض السفر</h2>
                        <a href="#"
                            class="btn custom_btn_banner">{{ \App\Helpers\TranslationHelper::translate('More', 'site') }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <section class="services-section py-4" dir="rtl" style="position: relative; margin: 0 !important;">
        <!-- الزر الثابت -->
        <div class="fixed-button"
            style="position: absolute; left: 0; top: 45%; transform: translateY(-50%); z-index: 10; text-align: center;">
            <div class="service-box text-center">
                <div class="service-icon">
                    <img style="width: 50px; height: 50px;" src="{{ asset('front/assets/img/menu.png') }}" alt="المزيد"
                        class="logo_img">
                </div>
                <h6>المزيد من الخدمات</h6>
            </div>
        </div>

        <!-- سلايدر الخدمات -->
        <div class="container-fluid mb-2 slider-container" style="padding-left: 180px">
            <div class="service-slider">
                <div class="service-box text-center">
                    <div class="service-icon">
                        <img src="{{ asset('front/assets/img/transaction.png') }}" alt="التنقلات" class="logo_img">
                    </div>
                    <h6>التنقلات</h6>
                </div>

                <div class="service-box text-center">
                    <div class="service-icon">
                        <img src="{{ asset('front/assets/img/vehicle.png') }}" alt="تأجير السيارات" class="logo_img">
                    </div>
                    <h6>خدمة تأجير السيارات</h6>
                </div>

                <div class="service-box text-center">
                    <div class="service-icon">
                        <img src="{{ asset('front/assets/img/luxury-travel.png') }}" alt="السياحة الداخلية"
                            class="logo_img">
                    </div>
                    <h6>باقات السياحة الداخلية</h6>
                </div>

                <div class="service-box text-center">
                    <div class="service-icon">
                        <img src="{{ asset('front/assets/img/cruise.png') }}" alt="الرحلات البحرية" class="logo_img">
                    </div>
                    <h6>باقات الرحلات البحرية</h6>
                </div>

                <div class="service-box text-center">
                    <div class="service-icon">
                        <img src="{{ asset('front/assets/img/adventurous.png') }}" alt="باقات عامة" class="logo_img">
                    </div>
                    <h6>باقات</h6>
                </div>

                <div class="service-box text-center">
                    <div class="service-icon">
                        <img src="{{ asset('front/assets/img/adventurous.png') }}" alt="باقات رياضية" class="logo_img">
                    </div>
                    <h6>الباقات الرياضية</h6>
                </div>

                <div class="service-box text-center">
                    <div class="service-icon">
                        <img src="{{ asset('front/assets/img/cruise.png') }}" alt="الرحلات البحرية" class="logo_img">
                    </div>
                    <h6>باقات الرحلات البحرية</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Slick init -->
    <script>
        $(document).ready(function() {
            $('.service-slider').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                arrows: false,
                dots: false,
                autoplay: true,
                rtl: true,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>

    <!-- Responsive fix -->
    <style>
        @media (max-width: 768px) {
            .fixed-button {
                position: static;
                margin-bottom: 15px;
            }

            .slider-container {
                padding: 0 15px !important;
            }
        }
    </style>






    <section class="blog_section destination-section section-b-space ratio_55">
        <div class="container mini_container">
            <div class="title-2">
                <h2 class="custom_title">سافر الى اى مكان</h2>
            </div>

            <div class="slider_333">
                <div>
                    <div class="blog-wrap position-relative">
                        <div class="blog-image destination_custom_img_">
                            <a href="javascript:void(0);">
                                <div class="bg_img">
                                    <img src="{{ asset('front/assets/img/four-.webp') }}"
                                        class="img-fluid blur-up lazyload bg-img-other" alt="">
                                    <div class="overlay"></div>
                                    <div class="destination_details_custom_">
                                        <h2 class="mb-3">جورجيا</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-wrap position-relative">
                        <div class="blog-image destination_custom_img_">
                            <a href="javascript:void(0);">
                                <div class="bg_img">
                                    <img src="{{ asset('front/assets/img/sls-dubai-.webp') }}"
                                        class="img-fluid blur-up lazyload bg-img-other" alt="">
                                    <div class="overlay"></div>
                                    <div class="destination_details_custom_">
                                        <h2 class="mb-3">تايلاند</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-wrap position-relative">
                        <div class="blog-image destination_custom_img_">
                            <a href="javascript:void(0);">
                                <div class="bg_img">
                                    <img src="{{ asset('front/assets/img/la-clef-.webp') }}"
                                        class="img-fluid blur-up lazyload bg-img-other" alt="">
                                    <div class="overlay"></div>
                                    <div class="destination_details_custom_">
                                        <h2 class="mb-3">تايلاند</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-wrap position-relative">
                        <div class="blog-image destination_custom_img_">
                            <a href="javascript:void(0);">
                                <div class="bg_img">
                                    <img src="{{ asset('front/assets/img/hotel_.webp') }}"
                                        class="img-fluid blur-up lazyload bg-img-other" alt="">
                                    <div class="overlay"></div>
                                    <div class="destination_details_custom_">
                                        <h2 class="mb-3">تايلاند</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-wrap position-relative">
                        <div class="blog-image destination_custom_img_">
                            <a href="javascript:void(0);">
                                <div class="bg_img">
                                    <img src="{{ asset('front/assets/img/sls-dubai-.webp') }}"
                                        class="img-fluid blur-up lazyload bg-img-other" alt="">
                                    <div class="overlay"></div>
                                    <div class="destination_details_custom_">
                                        <h2 class="mb-3">تايلاند</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-wrap position-relative">
                        <div class="blog-image destination_custom_img_">
                            <a href="javascript:void(0);">
                                <div class="bg_img">
                                    <img src="{{ asset('front/assets/img/sls-dubai-.webp') }}"
                                        class="img-fluid blur-up lazyload bg-img-other" alt="">
                                    <div class="overlay"></div>
                                    <div class="destination_details_custom_">
                                        <h2 class="mb-3">تايلاند</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Local section start -->
    <section class="services-section py-4 mb-3" style="position: relative;">
        <div class="container mb-2">
            <div class="title-2 mb-4 text-center">
                <h2 class="custom_title">خطوط الطيران</h2>
                <p class="section_subtitle">أفضل خطوط الطيران بأسعار استثنائية بين يديك في شركة أركان للسياحة</p>
            </div>

            <div class="airlines-slider" dir="rtl">
                <div class="service-box text-center">
                    <div class="service-icon">
                        <img src="{{ asset('front/assets/img/logo-9.webp') }}" class="img-fluid w-100" alt="">
                    </div>
                    <h6>الخطوط الجوية القطرية</h6>
                </div>

                <div class="service-box text-center">
                    <div class="service-icon">
                        <img src="{{ asset('front/assets/img/logo-9.webp') }}" class="img-fluid w-100" alt="">
                    </div>
                    <h6>الخطوط الجوية القطرية</h6>
                </div>

                <div class="service-box text-center">
                    <div class="service-icon">
                        <img src="{{ asset('front/assets/img/logo-9.webp') }}" class="img-fluid w-100" alt="">
                    </div>
                    <h6>الخطوط الجوية القطرية</h6>
                </div>

                <div class="service-box text-center">
                    <div class="service-icon">
                        <img src="{{ asset('front/assets/img/logo-9.webp') }}" class="img-fluid w-100" alt="">
                    </div>
                    <h6>الخطوط الجوية القطرية</h6>
                </div>

                <div class="service-box text-center">
                    <div class="service-icon">
                        <img src="{{ asset('front/assets/img/logo-9.webp') }}" class="img-fluid w-100" alt="">
                    </div>
                    <h6>الخطوط الجوية القطرية</h6>
                </div>

                <div class="service-box text-center">
                    <div class="service-icon">
                        <img src="{{ asset('front/assets/img/logo-9.webp') }}" class="img-fluid w-100" alt="">
                    </div>
                    <h6>الخطوط الجوية القطرية</h6>
                </div>

                <div class="service-box text-center">
                    <div class="service-icon">
                        <img src="{{ asset('front/assets/img/logo-9.webp') }}" class="img-fluid w-100" alt="">
                    </div>
                    <h6>الخطوط الجوية القطرية</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery + Slick -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.airlines-slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                arrows: false,
                dots: false,
                rtl: true,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });
        });
    </script>

    <section class="banner_section mb-5">
        <div class="container mini_container">
            <div class="banner_div">
                <img src="{{ asset('front/assets/img/Whats.jpg') }}" alt="" class="w-100">
            </div>
        </div>
    </section>

    <section class="blog_section destination-section section-b-space ratio_55">
        <div class="container mini_container">
            <div class="title-2 mb-4">
                <h2 class="custom_title">أحدث العروض</h2>
            </div>
            <div class="slide-3 no-arrow">
                @if (isset($countries) && $countries->count() > 0)
                    @foreach ($countries as $country)
                        <div>
                            <div class="blog-wrap">
                                <div class="blog-image">
                                    <div>
                                        <img src="{{ asset('uploads/countries/' . $country->image) }}"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                </div>
                                <div class="destination-details text-end">
                                    <a href="#">
                                        <h2>استكشف جمال البحرين</h2>
                                        <p>أرض التاريخ والثقافة والحضارة</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- subscribe section start -->
    <section class="subscribe-footer zig-zag-effect">
        <img src="{{ asset('front/assets/images/flights/footer-bg.jpg') }}" class="bg-img img-fluid blur-up lazyload"
            alt="">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="service-left">
                        <ul>
                            <li>
                                <div class="service-box" dir="rtl">
                                    <div class="icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 476 476" style="enable-background:new 0 0 476 476;"
                                            xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M400.85,181v-18.3c0-43.8-15.5-84.5-43.6-114.7c-28.8-31-68.4-48-111.6-48h-15.1c-43.2,0-82.8,17-111.6,48
                                                                                                                                                  c-28.1,30.2-43.6,70.9-43.6,114.7V181c-34.1,2.3-61.2,30.7-61.2,65.4V275c0,36.1,29.4,65.5,65.5,65.5h36.9c6.6,0,12-5.4,12-12
                                                                                                                                                  V192.8c0-6.6-5.4-12-12-12h-17.2v-18.1c0-79.1,56.4-138.7,131.1-138.7h15.1c74.8,0,131.1,59.6,131.1,138.7v18.1h-17.2
                                                                                                                                                  c-6.6,0-12,5.4-12,12v135.6c0,6.6,5.4,12,12,12h16.8c-4.9,62.6-48,77.1-68,80.4c-5.5-16.9-21.4-29.1-40.1-29.1h-30
                                                                                                                                                  c-23.2,0-42.1,18.9-42.1,42.1s18.9,42.2,42.1,42.2h30.1c19.4,0,35.7-13.2,40.6-31c9.8-1.4,25.3-4.9,40.7-13.9
                                                                                                                                                  c21.7-12.7,47.4-38.6,50.8-90.8c34.3-2.1,61.5-30.6,61.5-65.4v-28.6C461.95,211.7,434.95,183.2,400.85,181z M104.75,316.4h-24.9
                                                                                                                                                  c-22.9,0-41.5-18.6-41.5-41.5v-28.6c0-22.9,18.6-41.5,41.5-41.5h24.9V316.4z M268.25,452h-30.1c-10,0-18.1-8.1-18.1-18.1
                                                                                                                                                  s8.1-18.1,18.1-18.1h30.1c10,0,18.1,8.1,18.1,18.1S278.25,452,268.25,452z M437.95,274.9c0,22.9-18.6,41.5-41.5,41.5h-24.9V204.8
                                                                                                                                                  h24.9c22.9,0,41.5,18.6,41.5,41.5V274.9z" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="detail">
                                        <div>
                                            <h5>{{ __('messages.call_us') }}</h5>
                                            <p dir="ltr">+966549416068</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="service-box" dir="rtl">
                                    <div class="icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 486.025 486.025"
                                            style="enable-background:new 0 0 486.025 486.025;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M420.725,85.413c-42.1-42.1-98.1-65.3-157.6-65.3c-60.6,0-117.3,23.9-159.6,67.3c-4.6,4.7-4.5,12.3,0.2,17
                                                                                                                                                   c4.7,4.6,12.3,4.5,17-0.2c37.8-38.7,88.3-60,142.4-60c109.7-0.1,198.9,89.1,198.9,198.8s-89.2,198.9-198.9,198.9
                                                                                                                                                   s-198.9-89.2-198.9-198.9v-2.5l19.8,19.8c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5c4.7-4.7,4.7-12.3,0-17l-40.2-40.3
                                                                                                                                                   c-4.7-4.7-12.3-4.7-17,0l-40.3,40.3c-4.7,4.7-4.7,12.3,0,17s12.3,4.7,17,0l19.8-19.8v2.5c0,59.5,23.2,115.5,65.3,157.6
                                                                                                                                                   s98.1,65.3,157.6,65.3s115.5-23.2,157.6-65.3s65.2-98.1,65.2-157.6S462.825,127.513,420.725,85.413z" />
                                                    <path
                                                        d="M326.925,161.913l-147.4,147.3c-4.7,4.7-4.7,12.3,0,17c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5l147.4-147.4
                                                                                                                                                   c4.7-4.7,4.7-12.3,0-17C339.225,157.213,331.625,157.213,326.925,161.913z" />
                                                    <path
                                                        d="M288.325,261.113c-16.7,16.7-16.7,44,0,60.7c8.1,8.1,18.9,12.6,30.4,12.6s22.3-4.5,30.4-12.6c16.7-16.7,16.7-44,0-60.7
                                                                                                                                                   c-8.1-8.1-18.9-12.6-30.4-12.6C307.225,248.513,296.525,253.013,288.325,261.113z M332.125,304.913c-3.6,3.6-8.3,5.5-13.4,5.5
                                                                                                                                                   s-9.8-2-13.4-5.5c-7.4-7.4-7.4-19.4,0-26.8c3.6-3.6,8.3-5.5,13.4-5.5s9.8,2,13.4,5.5
                                                                                                                                                   C339.525,285.513,339.525,297.513,332.125,304.913z" />
                                                    <path
                                                        d="M207.925,151.213c-11.5,0-22.3,4.5-30.4,12.6s-12.6,18.9-12.6,30.4s4.5,22.3,12.6,30.4s18.9,12.6,30.4,12.6
                                                                                                                                                   s22.3-4.5,30.4-12.6c8.1-8.1,12.6-18.9,12.6-30.4s-4.5-22.3-12.6-30.4C230.125,155.713,219.425,151.213,207.925,151.213z
                                                                                                                                                   M221.325,207.613c-3.6,3.6-8.3,5.5-13.4,5.5s-9.8-2-13.4-5.5c-3.6-3.6-5.5-8.3-5.5-13.4c0-5.1,2-9.8,5.5-13.4
                                                                                                                                                   c3.6-3.6,8.3-5.5,13.4-5.5s9.8,2,13.4,5.5c3.6,3.6,5.5,8.3,5.5,13.4C226.825,199.213,224.925,204.013,221.325,207.613z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="detail">
                                        <div>
                                            <h5>{{ __('messages.spec_offer') }}</h5>
                                            {{--                                            <p>{{__("messages.spec_offer_desc")}}</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="service-box" dir="rtl">
                                    <div class="icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 483.3 483.3" style="enable-background:new 0 0 483.3 483.3;"
                                            xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M424.3,57.75H59.1c-32.6,0-59.1,26.5-59.1,59.1v249.6c0,32.6,26.5,59.1,59.1,59.1h365.1c32.6,0,59.1-26.5,59.1-59.1
                                                                                                                                                                v-249.5C483.4,84.35,456.9,57.75,424.3,57.75z M456.4,366.45c0,17.7-14.4,32.1-32.1,32.1H59.1c-17.7,0-32.1-14.4-32.1-32.1v-249.5
                                                                                                                                                                c0-17.7,14.4-32.1,32.1-32.1h365.1c17.7,0,32.1,14.4,32.1,32.1v249.5H456.4z" />
                                                    <path
                                                        d="M304.8,238.55l118.2-106c5.5-5,6-13.5,1-19.1c-5-5.5-13.5-6-19.1-1l-163,146.3l-31.8-28.4c-0.1-0.1-0.2-0.2-0.2-0.3
                                                                                                                                                                c-0.7-0.7-1.4-1.3-2.2-1.9L78.3,112.35c-5.6-5-14.1-4.5-19.1,1.1c-5,5.6-4.5,14.1,1.1,19.1l119.6,106.9L60.8,350.95
                                                                                                                                                                c-5.4,5.1-5.7,13.6-0.6,19.1c2.7,2.8,6.3,4.3,9.9,4.3c3.3,0,6.6-1.2,9.2-3.6l120.9-113.1l32.8,29.3c2.6,2.3,5.8,3.4,9,3.4
                                                                                                                                                                c3.2,0,6.5-1.2,9-3.5l33.7-30.2l120.2,114.2c2.6,2.5,6,3.7,9.3,3.7c3.6,0,7.1-1.4,9.8-4.2c5.1-5.4,4.9-14-0.5-19.1L304.8,238.55z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="detail">
                                        <div>
                                            <h5>{{ __('messages.news_letter') }}</h5>
                                            <p>{{ __('messages.scrambled_make') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="service-right">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="{{ __('messages.enter_email') }}"
                                aria-label="Recipient's username">
                            <div class="input-group-append">
                                <button class="btn btn-subscribe" type="button"
                                    id="button-addon">{{ __('messages.subscribe') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe section end -->

@endsection


@section('script')
    <script>
        $(document).ready(function() {
            $('.banners').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                navText: ["<span class='fas fa-chevron-left'></span>",
                    "<span class='fas fa-chevron-right'></span>"
                ],
                dots: false,
                center: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    760: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        });
    </script>
@stop
