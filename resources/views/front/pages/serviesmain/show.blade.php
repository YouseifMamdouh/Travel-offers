@extends('front.layouts.app')

@push('user.css')
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">
    <style>
        .card-serch {
            padding: 30px;
        }

        .main-title {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
            text-align: right;
        }

        .description {
            color: #555;
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 40px;
            text-align: right;
        }

        .form-title {
            font-size: 20px;
            font-weight: 600;
            color: #333;
            margin-bottom: 30px;
            text-align: right;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            color: #666;
            font-size: 14px;
            margin-bottom: 8px;
            text-align: right;
            font-weight: 500;
        }

        .form-input {
            padding: 12px 16px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
            background-color: #fff;
            text-align: right;
            direction: rtl;
        }

        .form-input:focus {
            outline: none;
            border-color: #078ED0;
        }

        .form-input::placeholder {
            color: #9ca3af;
            text-align: right;
        }

        .submit-button {
            background-color: #078ED0;
            color: white;
            padding: 14px 32px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.1s ease;
            margin-top: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .submit-button:hover {
            background-color:#068CB2;
            transform: translateY(-1px);
        }

        .submit-button:active {
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .booking-card {
                padding: 20px;
                margin: 10px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .main-title {
                font-size: 20px;
            }

            .form-title {
                font-size: 18px;
            }

            body {
                padding: 10px;
            }
        }

        /* Additional RTL support */
        input[type="email"] {
            direction: ltr;
            text-align: left;
        }

        input[type="tel"] {
            direction: ltr;
            text-align: left;
        }
    </style>
@endpush


@section('content')
    <section class="breadcrumb-section pt-0">
        <img src="{{ asset('front/assets/images/inner-bg.jpg') }}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content overlay-black">
            <div>
                <h2>حجوزات الطيران</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">الرئيسية</a></li>
                        <li class="breadcrumb-item active" aria-current="page">حجوزات الطيران</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="title-breadcrumb">Rica</div>
    </section>


    <section class="card-serch">
        <div class="container">
            <div class="booking-card">
                <h1 class="main-title">حجز طيران داخلي وخارجي</h1>

                <p class="description">
                    نحيط لحضراتكم علماً بأن طيران وجر الكريم في حجزك مع الآن للسفر والسياحة، نتيح لك الحصول على كامل
                    المساعدة في حجز أو إلغاء أو تغيير إجراءات مواعيد السفر أونلاين على مدار 24 ساعة وأنت بمكانك عبر أكثر من
                    450 شركة طيران وأختيار الجهة والمقعد المفضل، الدفع آمن وموثوق ومعتمد.
                </p>

                <h2 class="form-title">طلب الحجز</h2>

                <form>
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label" for="lastName">الاسم الأخير</label>
                            <input type="text" id="lastName" name="lastName" class="form-input" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="firstName">الاسم الأول</label>
                            <input type="text" id="firstName" name="firstName" class="form-input" required>
                        </div>
                    </div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label" for="phone">رقم الهاتف</label>
                            <input type="tel" id="phone" name="phone" class="form-input" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="email">البريد الإلكتروني</label>
                            <input type="email" id="email" name="email" class="form-input" required>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="address">العنوان</label>
                        <input type="text" id="address" name="address" class="form-input" required>
                    </div>

                    <button type="submit" class="submit-button">تأكيد الحجز</button>
                </form>
            </div>
        </div>
    </section>
@endsection
