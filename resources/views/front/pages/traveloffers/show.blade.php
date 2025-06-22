@extends('front.layouts.app')

@push('user.css')
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
@endpush

@push('user.js')
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.hotel-slider').slick({
                dots: false,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 2000,
                infinite: true
            });
        });
    </script>
@endpush

@section('content')
    <section class="breadcrumb-section pt-0">
        <img src="{{ asset('front/assets/images/inner-bg.jpg') }}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content overlay-black">
            <div>
                <h2>{{ $title }}</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">الرئيسية</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="title-breadcrumb">Rica</div>
    </section>

    <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-12" dir="rtl">
                    <div class="hotel_title_section">
                        <div class="hotel-name">
                            <div class="left-part">
                                <div class="top">
                                    <h2>{{ $hotel->title }}</h2>
                                    <div class="share-buttons">
                                        <a href="#" class="btn btn-solid"><i class="far fa-share-square"></i>
                                            مشاركة</a>
                                    </div>
                                </div>
                                <p class="mt-1 mb-2">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    {{ $hotel->country->title . ', ' . $hotel->city->title }}
                                </p>
                                <p>{{ $hotel->address }}</p>
                            </div>
                            @php($min_price = $hotel->rooms->min('price'))
                            @if ($min_price != null && $min_price > 0)
                                <div class="right-part" dir="rtl">
                                    <h2 class="price">{{ $min_price }} {{ __('messages.currency') }}
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
                    <div class="special-section related-box ratio3_2 grid-box">
                        <div class="slider-3 no-arrow">
                            <div class="mb-5">

                                <div class="special-box p-0" dir="ltr">
                                    <div class="special-img">
                                        <div class="hotel-slider">
                                            <div><img src="{{ asset('front/assets/img/10.jpg') }}" alt="hotel"></div>
                                            <div><img src="{{ asset('front/assets/img/10.jpg') }}" alt="hotel"></div>
                                            <div><img src="{{ asset('front/assets/img/10.jpg') }}" alt="hotel"></div>
                                            <div><img src="{{ asset('front/assets/img/10.jpg') }}" alt="hotel"></div>
                                            <div><img src="{{ asset('front/assets/img/10.jpg') }}" alt="hotel"></div>
                                        </div>

                                        <div class="top-icon">
                                            <a href="#" data-bs-toggle="tooltip" title="Add to Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="main-card">
                            <div class="container-fluid ">
                                <div class="description-card">
                                    <h1 class="card-title">الوصف</h1>

                                    <p class="main-description">
                                        فندق فاخر في دبي، يطل على البحر ويقع على بعد 500 متر فقط من وسط المدينة. يتميز
                                        الفندق بمساحات واسعة، وهندسة معمارية عصرية، وتصميم داخلي أنيق، مما يجعله خيارًا
                                        مثاليًا للاسترخاء الهادئ أو للرحلات العملية.
                                    </p>

                                    <div class="content-section">
                                        <h2 class="section-title">مرافق الفندق</h2>
                                        <p class="section-content">
                                            يحتوي الفندق الراقي على مسبح، سبا، ومركز لياقة بدنية. كما يضم قاعة مؤتمرات مجهزة
                                            وقاعة مناسبات واسعة تطل على الميناء لتلبية احتياجات الاجتماعات والفعاليات. تتوفر
                                            خدمة الواي فاي المجانية في جميع أنحاء الفندق. تشمل الخدمات الأخرى مكتب سفر،
                                            مواقف سيارات، وقبول بطاقات الائتمان.
                                        </p>
                                    </div>

                                    <div class="content-section">
                                        <h2 class="section-title">المطاعم</h2>
                                        <p class="section-content">
                                            يضم الفندق الفاخر مطعمًا داخليًا وبارًا. يعمل مطعم "فليم إن جريل" من الساعة 7:30
                                            صباحًا وحتى منتصف الليل، ويقدم قائمة متنوعة تشمل الأطباق القارية، الصينية،
                                            الهندية، وأطباق من المطبخ الغوياني. أما بار "بول ديك" فهو جنة لعشاق المشروبات،
                                            حيث يوفر مجموعة متنوعة من المشروبات، ويتميز بوجود نافورة مائية وأجواء رائعة
                                            للاستمتاع بأوقاتك.
                                        </p>
                                    </div>

                                    <div class="content-section">
                                        <h2 class="section-title">مرافق الغرف</h2>
                                        <p class="section-content">
                                            يحتوي الفندق على 150 غرفة مكيفة، منها 50 غرفة سوبيريور، 30 غرفة ديلوكس، 10 غرف
                                            سوبر ديلوكس، غرفتان كلاسيك، و5 غرف دوبلكس. تتمتع معظم الغرف بشرفات تطل على مناظر
                                            خلابة، وبعضها يطل على المسبح. تتميز الغرف بأثاث عصري وديكور أنيق لضمان راحة
                                            الضيوف. تشمل المرافق داخل الغرف تلفزيون LCD مع قنوات فضائية، ميني بار، وخزنة
                                            إلكترونية.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-card">
                            <div class="container">
                                <div class="itinerary-card">
                                    <h1 class="card-title">البرنامج اليومي</h1>

                                    <div class="day-section">
                                        <div class="day-header" onclick="toggleDay(this)">
                                            <div class="day-info">
                                                <span class="day-number">اليوم الأول</span>
                                                <span class="day-title">برنامج اليوم الأول</span>
                                            </div>
                                            <svg class="expand-icon" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                        <div class="day-content expanded">
                                            <div class="activity-item">
                                                <div class="activity-icon"></div>
                                                <p class="activity-text">
                                                    إفطار بوفيه حسب الجدول، زيارة ثماني قرى تعرض الثقافة البولينيزية.
                                                    جولة مجانية على الجِمال، جلسة نار المخيم، وعروض رقص ثقافية في المعسكر.
                                                    يشمل السعر جميع رسوم المرور، مواقف السيارات، الوقود، وبدلات السائق.
                                                    سيارة مريحة ونظيفة (دفع رباعي أو سيدان) للرحلات طوال مدة البرنامج.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <script>
                            function toggleDay(header) {
                                const content = header.nextElementSibling;
                                const icon = header.querySelector('.expand-icon');

                                if (content.classList.contains('expanded')) {
                                    content.classList.remove('expanded');
                                    icon.classList.remove('rotated');
                                    header.classList.remove('active');
                                } else {
                                    content.classList.add('expanded');
                                    icon.classList.add('rotated');
                                    header.classList.add('active');
                                }
                            }
                        </script>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4" id="booking">
                    <div class="sticky-cls-top">
                        <div class="single-sidebar">
                            <div class="selection-section">
                                <div class="overlay-map">
                                    <img src="{{ asset('front/assets/images/map-image.svg') }}"
                                        class="img-fluid blur-up lazyload w-100" alt="">
                                    <h6 class="map-text">عرض على الخريطة</h6>
                                    @if (isset($hotel->location))
                                        <div class="d-none">
                                            {!! $hotel->location !!}
                                        </div>
                                    @endif
                                </div>

                                <div class="book-btn-section mt-3">
                                    <input type="text" class="form-control mb-2" placeholder="ادخل الإسم بالكامل">
                                    <input type="text" class="form-control mb-2" placeholder="ادخل رقم الهاتف">
                                    <input type="email" class="form-control mb-2" placeholder="البريد الإلكتروني">
                                    <input type="text" id="travel_date" name="travel_date"
                                        placeholder="اختر موعد السفر" class="form-control datepicker" />

                                    <a href="{{ route('user.hotels.form', 1) }}"
                                        class="btn btn-rounded btn-sm color1 mt-2">إرسال الطلب</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card">
                        <div class="container">
                            <div class="contact-card">
                                <h2 class="card-title">معلومات التواصل</h2>

                                <div class="contact-item">
                                    <svg class="contact-icon" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                    </svg>
                                    <span class="contact-text">غابات الأمازون، لامبث، لندن، إنجلترا</span>
                                </div>

                                <div class="contact-item">
                                    <svg class="contact-icon" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                    </svg>
                                    <span class="contact-text">+1 (365) 944-4035</span>
                                </div>

                                <div class="contact-item">
                                    <svg class="contact-icon" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                    </svg>
                                    <span class="contact-text">info@example.com</span>
                                </div>

                                <div class="social-media">
                                    <a href="#" class="social-icon" aria-label="فيسبوك">
                                        <!-- SVG للفيسبوك -->
                                    </a>
                                    <a href="#" class="social-icon" aria-label="إنستغرام">
                                        <!-- SVG للإنستغرام -->
                                    </a>
                                    <a href="#" class="social-icon" aria-label="تويتر">
                                        <!-- SVG لتويتر -->
                                    </a>
                                    <a href="#" class="social-icon" aria-label="جوجل">
                                        <!-- SVG لجوجل -->
                                    </a>
                                </div>

                                <div class="check-times">
                                    <div class="check-time">
                                        <span class="check-label">تسجيل الوصول :</span>
                                        <span class="check-value">07:34 مساءً</span>
                                    </div>
                                    <div class="check-time">
                                        <span class="check-label">تسجيل المغادرة :</span>
                                        <span class="check-value">03:36 مساءً</span>
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
