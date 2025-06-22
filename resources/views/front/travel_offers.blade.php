@extends('front.layouts.app')

@push('user.css')
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">
@endpush

@section('content')
    <section class="breadcrumb-section pt-0">
        <img src="{{ asset('front/assets/images/inner-bg.jpg') }}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content overlay-black">
            <div>
                <h2>عروض السفر</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">{{ __('messages.home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">عروض السفر</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="title-breadcrumb">Rica</div>
    </section>
    <section class="services-section">
        <div class="container-flex">

            <a href="{{ route('user.traveloffers.show', 1) }}" class="offer-card-link">
                <div class="offer-card">
                    <div class="offer-image">
                        <img src="{{ asset('front/assets/img/10.jpg') }}" alt="عرض السفر">
                        <div class="offer-badge">عرض مميز</div>
                        <div class="offer-favorite" title="إضافة إلى المفضلة">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5
                                                 2 6 3.5 4 6 4c1.54 0 3.04.99 3.57 2.36h1.87C14.96 4.99
                                                  16.46 4 18 4c2.5 0 4 2 4 4.5 0 3.78-3.4 6.86-8.55
                                                   11.54L12 21.35z" />
                            </svg>
                        </div>
                    </div>
                    <div class="offer-content">
                        <div class="offer-title" title="استكشف الغابات الخضراء">استكشف الغابات الخضراء</div>
                        <div class="offer-location">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7
                                                 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12
                                                 11.5c-1.38 0-2.5-1.12-2.5-2.5S10.62
                                                  6.5 12 6.5s2.5 1.12 2.5 2.5-1.12
                                                  2.5-2.5 2.5z" />
                            </svg>
                            إنجلترا
                        </div>
                        <div class="offer-desc">
                            فندق فاخر في دبي، إطلالة على البحر على بعد 500 متر فقط من مركز المدينة. تصميم أنيق ومساحات
                            فسيحة.
                        </div>

                        <div class="offer-pricing">
                            <div class="offer-old-price">$350</div>
                            <div>$315.0</div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ route('user.traveloffers.show', 1) }}" class="offer-card-link">
                <div class="offer-card">
                    <div class="offer-image">
                        <img src="{{ asset('front/assets/img/10.jpg') }}" alt="عرض السفر">
                        <div class="offer-badge">عرض مميز</div>
                        <div class="offer-favorite" title="إضافة إلى المفضلة">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5
                                                 2 6 3.5 4 6 4c1.54 0 3.04.99 3.57 2.36h1.87C14.96 4.99
                                                  16.46 4 18 4c2.5 0 4 2 4 4.5 0 3.78-3.4 6.86-8.55
                                                   11.54L12 21.35z" />
                            </svg>
                        </div>
                    </div>
                    <div class="offer-content">
                        <div class="offer-title" title="استكشف الغابات الخضراء">استكشف الغابات الخضراء</div>
                        <div class="offer-location">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7
                                                 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12
                                                 11.5c-1.38 0-2.5-1.12-2.5-2.5S10.62
                                                  6.5 12 6.5s2.5 1.12 2.5 2.5-1.12
                                                  2.5-2.5 2.5z" />
                            </svg>
                            إنجلترا
                        </div>
                        <div class="offer-desc">
                            فندق فاخر في دبي، إطلالة على البحر على بعد 500 متر فقط من مركز المدينة. تصميم أنيق ومساحات
                            فسيحة.
                        </div>

                        <div class="offer-pricing">
                            <div class="offer-old-price">$350</div>
                            <div>$315.0</div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ route('user.traveloffers.show', 1) }}" class="offer-card-link">
                <div class="offer-card">
                    <div class="offer-image">
                        <img src="{{ asset('front/assets/img/10.jpg') }}" alt="عرض السفر">
                        <div class="offer-badge">عرض مميز</div>
                        <div class="offer-favorite" title="إضافة إلى المفضلة">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5
                                                 2 6 3.5 4 6 4c1.54 0 3.04.99 3.57 2.36h1.87C14.96 4.99
                                                  16.46 4 18 4c2.5 0 4 2 4 4.5 0 3.78-3.4 6.86-8.55
                                                   11.54L12 21.35z" />
                            </svg>
                        </div>
                    </div>
                    <div class="offer-content">
                        <div class="offer-title" title="استكشف الغابات الخضراء">استكشف الغابات الخضراء</div>
                        <div class="offer-location">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7
                                                 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12
                                                 11.5c-1.38 0-2.5-1.12-2.5-2.5S10.62
                                                  6.5 12 6.5s2.5 1.12 2.5 2.5-1.12
                                                  2.5-2.5 2.5z" />
                            </svg>
                            إنجلترا
                        </div>
                        <div class="offer-desc">
                            فندق فاخر في دبي، إطلالة على البحر على بعد 500 متر فقط من مركز المدينة. تصميم أنيق ومساحات
                            فسيحة.
                        </div>

                        <div class="offer-pricing">
                            <div class="offer-old-price">$350</div>
                            <div>$315.0</div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ route('user.traveloffers.show', 1) }}" class="offer-card-link">
                <div class="offer-card">
                    <div class="offer-image">
                        <img src="{{ asset('front/assets/img/10.jpg') }}" alt="عرض السفر">
                        <div class="offer-badge">عرض مميز</div>
                        <div class="offer-favorite" title="إضافة إلى المفضلة">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5
                                                 2 6 3.5 4 6 4c1.54 0 3.04.99 3.57 2.36h1.87C14.96 4.99
                                                  16.46 4 18 4c2.5 0 4 2 4 4.5 0 3.78-3.4 6.86-8.55
                                                   11.54L12 21.35z" />
                            </svg>
                        </div>
                    </div>
                    <div class="offer-content">
                        <div class="offer-title" title="استكشف الغابات الخضراء">استكشف الغابات الخضراء</div>
                        <div class="offer-location">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7
                                                 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12
                                                 11.5c-1.38 0-2.5-1.12-2.5-2.5S10.62
                                                  6.5 12 6.5s2.5 1.12 2.5 2.5-1.12
                                                  2.5-2.5 2.5z" />
                            </svg>
                            إنجلترا
                        </div>
                        <div class="offer-desc">
                            فندق فاخر في دبي، إطلالة على البحر على بعد 500 متر فقط من مركز المدينة. تصميم أنيق ومساحات
                            فسيحة.
                        </div>

                        <div class="offer-pricing">
                            <div class="offer-old-price">$350</div>
                            <div>$315.0</div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ route('user.traveloffers.show', 1) }}" class="offer-card-link">
                <div class="offer-card">
                    <div class="offer-image">
                        <img src="{{ asset('front/assets/img/10.jpg') }}" alt="عرض السفر">
                        <div class="offer-badge">عرض مميز</div>
                        <div class="offer-favorite" title="إضافة إلى المفضلة">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5
                                                 2 6 3.5 4 6 4c1.54 0 3.04.99 3.57 2.36h1.87C14.96 4.99
                                                  16.46 4 18 4c2.5 0 4 2 4 4.5 0 3.78-3.4 6.86-8.55
                                                   11.54L12 21.35z" />
                            </svg>
                        </div>
                    </div>
                    <div class="offer-content">
                        <div class="offer-title" title="استكشف الغابات الخضراء">استكشف الغابات الخضراء</div>
                        <div class="offer-location">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7
                                                 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12
                                                 11.5c-1.38 0-2.5-1.12-2.5-2.5S10.62
                                                  6.5 12 6.5s2.5 1.12 2.5 2.5-1.12
                                                  2.5-2.5 2.5z" />
                            </svg>
                            إنجلترا
                        </div>
                        <div class="offer-desc">
                            فندق فاخر في دبي، إطلالة على البحر على بعد 500 متر فقط من مركز المدينة. تصميم أنيق ومساحات
                            فسيحة.
                        </div>

                        <div class="offer-pricing">
                            <div class="offer-old-price">$350</div>
                            <div>$315.0</div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ route('user.traveloffers.show', 1) }}" class="offer-card-link">
                <div class="offer-card">
                    <div class="offer-image">
                        <img src="{{ asset('front/assets/img/10.jpg') }}" alt="عرض السفر">
                        <div class="offer-badge">عرض مميز</div>
                        <div class="offer-favorite" title="إضافة إلى المفضلة">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5
                                                 2 6 3.5 4 6 4c1.54 0 3.04.99 3.57 2.36h1.87C14.96 4.99
                                                  16.46 4 18 4c2.5 0 4 2 4 4.5 0 3.78-3.4 6.86-8.55
                                                   11.54L12 21.35z" />
                            </svg>
                        </div>
                    </div>
                    <div class="offer-content">
                        <div class="offer-title" title="استكشف الغابات الخضراء">استكشف الغابات الخضراء</div>
                        <div class="offer-location">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7
                                                 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12
                                                 11.5c-1.38 0-2.5-1.12-2.5-2.5S10.62
                                                  6.5 12 6.5s2.5 1.12 2.5 2.5-1.12
                                                  2.5-2.5 2.5z" />
                            </svg>
                            إنجلترا
                        </div>
                        <div class="offer-desc">
                            فندق فاخر في دبي، إطلالة على البحر على بعد 500 متر فقط من مركز المدينة. تصميم أنيق ومساحات
                            فسيحة.
                        </div>

                        <div class="offer-pricing">
                            <div class="offer-old-price">$350</div>
                            <div>$315.0</div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ route('user.traveloffers.show', 1) }}" class="offer-card-link">
                <div class="offer-card">
                    <div class="offer-image">
                        <img src="{{ asset('front/assets/img/10.jpg') }}" alt="عرض السفر">
                        <div class="offer-badge">عرض مميز</div>
                        <div class="offer-favorite" title="إضافة إلى المفضلة">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5
                                                 2 6 3.5 4 6 4c1.54 0 3.04.99 3.57 2.36h1.87C14.96 4.99
                                                  16.46 4 18 4c2.5 0 4 2 4 4.5 0 3.78-3.4 6.86-8.55
                                                   11.54L12 21.35z" />
                            </svg>
                        </div>
                    </div>
                    <div class="offer-content">
                        <div class="offer-title" title="استكشف الغابات الخضراء">استكشف الغابات الخضراء</div>
                        <div class="offer-location">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7
                                                 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12
                                                 11.5c-1.38 0-2.5-1.12-2.5-2.5S10.62
                                                  6.5 12 6.5s2.5 1.12 2.5 2.5-1.12
                                                  2.5-2.5 2.5z" />
                            </svg>
                            إنجلترا
                        </div>
                        <div class="offer-desc">
                            فندق فاخر في دبي، إطلالة على البحر على بعد 500 متر فقط من مركز المدينة. تصميم أنيق ومساحات
                            فسيحة.
                        </div>

                        <div class="offer-pricing">
                            <div class="offer-old-price">$350</div>
                            <div>$315.0</div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ route('user.traveloffers.show', 1) }}" class="offer-card-link">
                <div class="offer-card">
                    <div class="offer-image">
                        <img src="{{ asset('front/assets/img/10.jpg') }}" alt="عرض السفر">
                        <div class="offer-badge">عرض مميز</div>
                        <div class="offer-favorite" title="إضافة إلى المفضلة">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5
                                                 2 6 3.5 4 6 4c1.54 0 3.04.99 3.57 2.36h1.87C14.96 4.99
                                                  16.46 4 18 4c2.5 0 4 2 4 4.5 0 3.78-3.4 6.86-8.55
                                                   11.54L12 21.35z" />
                            </svg>
                        </div>
                    </div>
                    <div class="offer-content">
                        <div class="offer-title" title="استكشف الغابات الخضراء">استكشف الغابات الخضراء</div>
                        <div class="offer-location">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7
                                                 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12
                                                 11.5c-1.38 0-2.5-1.12-2.5-2.5S10.62
                                                  6.5 12 6.5s2.5 1.12 2.5 2.5-1.12
                                                  2.5-2.5 2.5z" />
                            </svg>
                            إنجلترا
                        </div>
                        <div class="offer-desc">
                            فندق فاخر في دبي، إطلالة على البحر على بعد 500 متر فقط من مركز المدينة. تصميم أنيق ومساحات
                            فسيحة.
                        </div>

                        <div class="offer-pricing">
                            <div class="offer-old-price">$350</div>
                            <div>$315.0</div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ route('user.traveloffers.show', 1) }}" class="offer-card-link">
                <div class="offer-card">
                    <div class="offer-image">
                        <img src="{{ asset('front/assets/img/10.jpg') }}" alt="عرض السفر">
                        <div class="offer-badge">عرض مميز</div>
                        <div class="offer-favorite" title="إضافة إلى المفضلة">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5
                                                 2 6 3.5 4 6 4c1.54 0 3.04.99 3.57 2.36h1.87C14.96 4.99
                                                  16.46 4 18 4c2.5 0 4 2 4 4.5 0 3.78-3.4 6.86-8.55
                                                   11.54L12 21.35z" />
                            </svg>
                        </div>
                    </div>
                    <div class="offer-content">
                        <div class="offer-title" title="استكشف الغابات الخضراء">استكشف الغابات الخضراء</div>
                        <div class="offer-location">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7
                                                 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12
                                                 11.5c-1.38 0-2.5-1.12-2.5-2.5S10.62
                                                  6.5 12 6.5s2.5 1.12 2.5 2.5-1.12
                                                  2.5-2.5 2.5z" />
                            </svg>
                            إنجلترا
                        </div>
                        <div class="offer-desc">
                            فندق فاخر في دبي، إطلالة على البحر على بعد 500 متر فقط من مركز المدينة. تصميم أنيق ومساحات
                            فسيحة.
                        </div>

                        <div class="offer-pricing">
                            <div class="offer-old-price">$350</div>
                            <div>$315.0</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
@endsection
