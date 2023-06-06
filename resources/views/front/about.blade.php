@extends('front.layouts.app')


@section('content')

    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0" >
        <img src="{{ asset('front/assets/images/inner-bg.jpg') }}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content overlay-black">
            <div>
                <h2>about us</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">about us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="title-breadcrumb">Rica</div>
    </section>
    <!-- breadcrumb end -->


    <!-- about section start -->
    <section class="about-section three-image about_page animated-section section-b-space">
        <div class="animation-section">
            <div class="cross po-1"></div>
            <div class="cross po-2"></div>
            <div class="cross po-3"></div>
            <div class="round po-4"></div>
            <div class="round po-5"></div>
            <div class="round r-2 po-6"></div>
            <div class="round r-2 po-7"></div>
            <div class="round r-y po-8"></div>
            <div class="round r-y po-9"></div>
            <div class="square po-10"></div>
            <div class="square po-11"></div>
            <div class="square s-2 po-12"></div>
        </div>
        <div class="container">
            <div class="title-1">
                <span class="title-label">Ral</span>
                <h2>about us</h2>
            </div>
            <div class="row">
                <div class="col-xl-7  order-xl-1">
                    <div class="image-section">
                        @if(isset($images) && $images->count() > 0)
                            @foreach($images as $item)
                                <div class="img-box">
                                    <img src="{{ asset('uploads/aboutus/' . $item->image) }}" data-tilt data-tilt-perspective="110"
                                         data-tilt-speed="400" data-tilt-max="1.2" class="img-fluid blur-up lazyload radius-cls"
                                         alt="">
                                    <div class="title-box radius-cls">
                                        <h3>{{$item->title}}</h3>
                                        <h6>{{$item->description}}</h6>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="about-text ps-0">
                        <div>
                            <div class="title-3">
                                <span class="title-label">introduction</span>
                            </div>
                            <h2>{{$details->title}}</h2>
                            <p>{!! $details->description !!}</p>
                            <img src="{{ asset('front') }}/assets/images/mix/signature.png" class="img-fluid blur-up lazyload" alt="">
                            <div class="buttons-about">
                                <a href="{{ route('user.programs.index') }}" class="btn btn-lower btn-curve">view more</a>
                                <a href="{{ route('user.contact') }}" class="btn btn-lower black-btn btn-curve">contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->




@endsection
