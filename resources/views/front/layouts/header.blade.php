{{-- //overlay-white --}}
<!-- header start -->
<header class="light_header">
    <div class="upper_header py-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 " style="text-align: left">

                    <div class="d-inline  custom_header_span">
                        <img class="social_img" style=" margin: 8px 6px 11px 3px" src="{{asset('front/assets/images/whatsapp.png')}}" alt="whatsapp">
                        <a href="https://wa.me/+966549416068" class="header_span" target="_blank">
                            راسلنا علي الواتساب
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-12" style="text-align: center">
                    <div class="d-inline ms-5 social_img_div">
                        <img class="social_img" src="{{asset('front/assets/images/phone.png')}}" alt="whatsapp">
                        <a href="tel:+966549416068" class="header_span" target="_blank">
                            +966549416068
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-12" style="text-align: right">
                    <div class="d-inline ms-5 social_img_div">
                        <img class="social_img" src="{{asset('front/assets/images/chat-box.png')}}" alt="whatsapp">
                        <a href="mailto:info@raltravel.com" class="header_span" target="_blank">
                            info@raltravel.com
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container" style="border-bottom: 2px solid #fff;">
        <div class="row">
            <div class="col">
                <div class="menu">
                    <div class="brand-logo">
                        <a href="{{url('/')}}">
                            {{-- <img src="{{ asset('front/assets/images/icon/footer-logo.png') }}" alt=""
                            class="img-fluid blur-up lazyload"> --}}
                            <img src="{{ asset('front/assets/images/logo-ral_.png') }}" alt=""
                                 class="img-fluid blur-up lazyload" width="70">
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
                                    <li><a href="{{ route('user.index') }}" class="">{{__('messages.home')}}</a></li>
                                    <li><a href="{{ route('user.about') }}" class="">{{__('messages.about_us')}}</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('user.hotels.index') }}"
                                           class="nav-link ">{{__('messages.hotels')}}</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="nav-link menu-title">{{__("messages.services")}}</a>
                                        <ul class="nav-submenu menu-content">
                                            @php
                                                $services = \App\Models\Service::orderBy('id', 'desc')->get();
                                            @endphp
                                            @if(isset($services) && $services->count() > 0)
                                                @foreach($services as $service)
                                                    <li><a href="{{ route('service.show', $service->id) }}" class="">
                                                            {{$service->title}} </a></li>
                                                @endforeach
                                            @endif
                                            <li><a target="_blank"
                                                   href="https://eflang.my.site.com/s/?info=Y2FtcGFpZ25JZD03MDE3VDAwMDAwMDFDTEVRQTImY2FtcGFpZ25OYW1lPVJBTCBUcmF2ZWwgYWdlbnQmbWFya2V0PVNBUiZldGFnPVJBTFRSQVZFTEFHRU5UJnNvdXJjZT1hMDMwWTAwMDAwVWxFWmFRQU4mbWVldGluZ1VybD0nJw%3D%3D"
                                                   class="">
                                                    تعلم اللغة الإنجليزية </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('user.programs.index') }}"
                                           class="nav-link ">{{__("messages.our_programs")}}</a>
                                    </li>
                                    {{--                                    @p
                                    --}}
                                    <li><a href="{{ route('user.contact') }}" class="">{{__("messages.contact_us")}}</a>
                                    </li>
                                    {{--                                    <li><a href="javascript:void(0);" class="">English</a>--}}
                                    {{--                                    </li>--}}
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <ul class="header-right">

                        {{--                        <li class="front-setting rounded5">--}}
                        {{--                            <select>--}}
                        {{--                                <option value="en">EN</option>--}}
                        {{--                                <option value="ar">Ar</option>--}}
                        {{--                            </select>--}}
                        {{--                        </li>--}}
                        {{--                        <li class="user rounded5">--}}
                        {{--                            <a href="#">--}}
                        {{--                                <i class="fas fa-user"></i>--}}
                        {{--                            </a>--}}
                        {{--                        </li>--}}
                        <div class="toggle-nav" style="margin-left: 10px"><i class="fa fa-bars sidebar-bar"></i></div>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--  header end -->
