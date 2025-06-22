@extends('front.layouts.app')

@push('user.css')
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">
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
