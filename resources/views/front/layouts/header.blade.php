{{-- //overlay-white --}}
<!-- header start -->
<header class="light_header">
    <div class="upper_header py-1">
        <div class="container">
            <div class="d-inline custom_header_span">
                <img class="social_img" style="" src="{{ asset('front/assets/images/whatsapp.png') }}" alt="whatsapp">
                <a href="https://wa.me/+966549416068" class="header_span" target="_blank">
                    +966549416068
                </a>
            </div>
            <div class="d-inline ms-5 social_img_div">
                <img class="social_img" src="{{ asset('front/assets/images/phone.png') }}" alt="whatsapp">
                <a href="tel:+966549416068" class="header_span" target="_blank">
                    +966549416068
                </a>
            </div>
        </div>
    </div>
    <div class="container" style="border-bottom: 2px solid #fff;">
        <div class="row">
            <div class="col">
                <div class="menu">
                    <div class="brand-logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('front/assets/img/logotop.png') }}" alt=""
                                class="img-fluid blur-up lazyload" width="40">
                        </a>
                    </div>
                    <nav>
                        <div class="main-navbar">
                            <div id="mainnav">
                                <div class="menu-overlay"></div>
                                <ul class="nav-menu">
                                    <li class="back-btn">
                                        <div class="mobile-back text-end">
                                            <span>عودة</span>
                                            <i aria-hidden="true" class="fa fa-angle-right ps-2"></i>
                                        </div>
                                    </li>
                                    <li><a href="{{ route('user.index') }}" class="">{{ __('messages.home') }}</a></li>
                                    <li><a href="{{ route('user.about') }}" class="">{{ __('messages.about_us') }}</a></li>
                                    <li class="dropdown">
                                        <a href="{{ route('user.hotels.index') }}" class="nav-link ">{{ __('messages.destinations') }}</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="nav-link menu-title">{{ __('messages.services') }}</a>
                                        <ul class="nav-submenu menu-content">
                                            @php
                                                $services = \App\Models\Service::orderBy('id', 'desc')->get();
                                            @endphp
                                            @if (isset($services) && $services->count() > 0)
                                                @foreach ($services as $service)
                                                    <li><a href="{{ route('service.show', $service->id) }}">{{ $service->title }}</a></li>
                                                @endforeach
                                            @endif
                                            <li><a target="_blank"
                                                   href="https://eflang.my.site.com/s/?info=Y2FtcGFpZ25JZD03MDE3VDAwMDAwMDFDTEVRQTImY2FtcGFpZ25OYW1lPVJBTCBUcmF2ZWwgYWdlbnQmbWFya2V0PVNBUiZldGFnPVJBTFRSQVZFTEFHRU5UJnNvdXJjZT1hMDMwWTAwMDAwVWxFWmFRQU4mbWVldGluZ1VybD0nJw%3D%3D">
                                                   تعلم اللغة الإنجليزية</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('user.programs.index') }}" class="nav-link ">{{ __('messages.our_programs') }}</a>
                                    </li>
                                    <li><a href="{{ route('user.contact') }}" class="">{{ __('messages.contact_us') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <ul class="header-right">
                        <div class="toggle-nav" style="margin-left: 10px"><i class="fa fa-bars sidebar-bar"></i></div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!--  header end -->
