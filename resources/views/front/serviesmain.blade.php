@extends('front.layouts.app')

@push('user.css')
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">
    <style>
        .services-section {
            padding: 60px 20px;
        }

        .service-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 30px 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
            text-align: center;
            transition: all 0.4s ease-in-out;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%;
            margin: 0 auto;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            opacity: 0;
            transition: 0.5s;
            transform: rotate(25deg);
        }

        .service-card:hover::before {
            opacity: 0.07;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
        }

        .service-card img {
            margin: 0 auto;
            height: 130px;
            width: 50%;
            margin-bottom: 10px;
        }

        .service-icon {
            width: 70px;
            height: 70px;
            margin-bottom: 20px;
        }

        .service-title {
            font-size: 20px;
            font-weight: 700;
            color: #23395d;
            margin-bottom: 10px;
        }

        .service-desc {
            font-size: 14px;
            color: #666;
            line-height: 1.7;
            margin-top: auto;
        }
    </style>
@endpush

@section('content')
    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="{{ asset('front/assets/images/inner-bg.jpg') }}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content overlay-black">
            <div>
                <h2>الخدمات</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">{{ __('messages.home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">الخدمات</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="title-breadcrumb">Rica</div>
    </section>

    <!-- services section -->
    <section class="services-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="fw-bold">خدمات السفر لدينا</h2>
                    <p class="text-muted">نُقدم مجموعة متنوعة من الخدمات لتلبية جميع احتياجاتك أثناء رحلتك.</p>
                </div>
            </div>
            <div class="row g-4">

                <div class="col-md-6 col-lg-4 d-flex">
                    <a href="{{ route('user.serviesmain.show', 1) }}" class="service-card text-decoration-none text-dark w-100">
                        <img src="{{ asset('front/assets/img/luxury-travel.png') }}" alt="السياحة الداخلية">
                        <div class="service-title">حجوزات الطيران</div>
                        <div class="service-desc">نوفر لك وسائل نقل مريحة وآمنة طوال فترة رحلتك.</div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 d-flex">
                    <a href="{{ route('user.serviesmain.show', 2) }}" class="service-card text-decoration-none text-dark w-100">
                        <img src="{{ asset('front/assets/img/vehicle.png') }}" alt="تأجير السيارات" class="logo_img">
                        <div class="service-title">خدمات التنقل</div>
                        <div class="service-desc">نوفر لك إقامة مريحة في فنادق فاخرة أو اقتصادية حسب اختيارك.</div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 d-flex">
                    <a href="{{ route('user.serviesmain.show', 3) }}" class="service-card text-decoration-none text-dark w-100">
                        <img src="{{ asset('front/assets/img/transaction.png') }}" alt="التنقلات" class="logo_img">
                        <div class="service-title">خدمات التنقل</div>
                        <div class="service-desc">نوفر لك وسائل نقل مريحة وآمنة طوال فترة رحلتك.</div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 d-flex">
                    <a href="{{ route('user.serviesmain.show', 4) }}" class="service-card text-decoration-none text-dark w-100">
                        <img src="{{ asset('front/assets/img/cruise.png') }}" alt="الرحلات البحرية" class="logo_img">
                        <h6>باقات الرحلات البحرية</h6>
                        <div class="service-desc">نوفر لك وسائل نقل مريحة وآمنة طوال فترة رحلتك.</div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 d-flex">
                    <a href="{{ route('user.serviesmain.show', 5) }}" class="service-card text-decoration-none text-dark w-100">
                        <img src="{{ asset('front/assets/img/adventurous.png') }}" alt="باقات عامة" class="logo_img">
                        <h6>باقات</h6>
                        <div class="service-desc">نوفر لك وسائل نقل مريحة وآمنة طوال فترة رحلتك.</div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 d-flex">
                    <a href="{{ route('user.serviesmain.show', 6) }}" class="service-card text-decoration-none text-dark w-100">
                        <img src="{{ asset('front/assets/img/cruise.png') }}" alt="الرحلات البحرية" class="logo_img">
                        <h6>باقات الرحلات البحرية</h6>
                        <div class="service-desc">نوفر لك وسائل نقل مريحة وآمنة طوال فترة رحلتك.</div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    
@endsection
