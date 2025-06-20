@extends('front.layouts.app')

@push('user.css')
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">
    <style>
        .airlines-section {
            padding: 60px 20px;
            text-align: center;
        }

        .airlines-section h2 {
            font-weight: bold;
            margin-bottom: 40px;
            color: #23395d;
        }

        .airlines-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .airline-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
            width: 180px;
            padding: 20px 10px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .airline-card:hover {
            transform: translateY(-5px);
        }

        .airline-card img {
            max-height: 50px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .airline-card p {
            font-weight: bold;
            color: #333;
            font-size: 14px;
        }
    </style>
@endpush

@section('content')
    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="{{ asset('front/assets/images/inner-bg.jpg') }}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content overlay-black">
            <div>
                <h2>خطوط الطيران</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">{{ __('messages.home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">خطوط</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="title-breadcrumb">Rica</div>
    </section>

    <!-- airlines section -->
    <section class="airlines-section">
        <h2>أفضل شركات الطيران</h2>
        <div class="airlines-grid">
            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-9.webp') }}" alt="خطوط طيران القطرية">
                <p>خطوط طيران القطرية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-6.webp') }}" alt="طيران الكويتية">
                <p>طيران الكويتية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-9.webp') }}" alt="خطوط طيران القطرية">
                <p>خطوط طيران القطرية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-6.webp') }}" alt="طيران الكويتية">
                <p>طيران الكويتية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-9.webp') }}" alt="خطوط طيران القطرية">
                <p>خطوط طيران القطرية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-6.webp') }}" alt="طيران الكويتية">
                <p>طيران الكويتية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-9.webp') }}" alt="خطوط طيران القطرية">
                <p>خطوط طيران القطرية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-6.webp') }}" alt="طيران الكويتية">
                <p>طيران الكويتية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-9.webp') }}" alt="خطوط طيران القطرية">
                <p>خطوط طيران القطرية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-6.webp') }}" alt="طيران الكويتية">
                <p>طيران الكويتية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-9.webp') }}" alt="خطوط طيران القطرية">
                <p>خطوط طيران القطرية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-6.webp') }}" alt="طيران الكويتية">
                <p>طيران الكويتية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-9.webp') }}" alt="خطوط طيران القطرية">
                <p>خطوط طيران القطرية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-6.webp') }}" alt="طيران الكويتية">
                <p>طيران الكويتية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-9.webp') }}" alt="خطوط طيران القطرية">
                <p>خطوط طيران القطرية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-6.webp') }}" alt="طيران الكويتية">
                <p>طيران الكويتية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-9.webp') }}" alt="خطوط طيران القطرية">
                <p>خطوط طيران القطرية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-6.webp') }}" alt="طيران الكويتية">
                <p>طيران الكويتية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-9.webp') }}" alt="خطوط طيران القطرية">
                <p>خطوط طيران القطرية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-6.webp') }}" alt="طيران الكويتية">
                <p>طيران الكويتية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-9.webp') }}" alt="خطوط طيران القطرية">
                <p>خطوط طيران القطرية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-6.webp') }}" alt="طيران الكويتية">
                <p>طيران الكويتية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-9.webp') }}" alt="خطوط طيران القطرية">
                <p>خطوط طيران القطرية</p>
            </a>

            <a href="#" class="airline-card">
                <img src="{{ asset('front/assets/img/logo-6.webp') }}" alt="طيران الكويتية">
                <p>طيران الكويتية</p>
            </a>
        </div>
    </section>
@endsection
