{{-- //overlay-white --}}
<!-- header start -->
<header class="light_header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="menu">
                    <div class="brand-logo">
                        <a href="#">
                            {{-- <img src="{{ asset('front/assets/images/icon/footer-logo.png') }}" alt=""
                            class="img-fluid blur-up lazyload"> --}}
                            <img src="{{ asset('front/assets/images/logo-ral.png') }}" alt=""
                                 class="img-fluid blur-up lazyload" width="70">
                        </a>
                    </div>
                    <nav>
                        <div class="main-navbar">
                            <div id="mainnav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <div class="menu-overlay"></div>
                                <ul class="nav-menu">
                                    <li class="back-btn">
                                        <div class="mobile-back text-end">
                                            <span>Back</span>
                                            <i aria-hidden="true" class="fa fa-angle-right ps-2"></i>
                                        </div>
                                    </li>
                                    <li><a href="{{ route('user.index') }}" class="menu-title">{{__('messages.home')}}</a></li>
                                    <li><a href="{{ route('user.about') }}" class="menu-title">{{__('messages.about_us')}}</a></li>
                                    <li class="dropdown">
                                        <a href="{{ route('user.hotels.index') }}"
                                           class="nav-link menu-title">{{__('messages.hotels')}}</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="nav-link menu-title">{{__("messages.services")}}</a>
                                        <ul class="nav-submenu menu-content">
                                            @php
                                                $services = \App\Models\Service::orderBy('id', 'asc')->get();
                                            @endphp
                                            @if(isset($services) && $services->count() > 0)
                                                @foreach($services as $service)
                                                    <li><a href="{{ route('service.show', $service->id) }}" class="">
                                                            {{$service->title}} </a></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('user.programs.index') }}" class="nav-link menu-title">{{__("messages.our_programs")}}</a>
                                    </li>
                                    @php($blogs = \App\Models\Blog::count())
                                    @if(isset($blogs) && $blogs > 0)
                                    <li><a href="{{ route('user.blogs.index') }}" class="menu-title">{{__("messages.blogs")}}</a></li>
                                   @endif
                                    <li><a href="{{ route('user.contact') }}" class="menu-title">{{__("messages.contact_us")}}</a></li>
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
                        <li class="setting">
                            <a href="#">
                                <i class="fas fa-cog"></i>
                            </a>
                            <ul class="setting-open">
                                <li class="front-setting">
                                    <select>
                                        <option value="volvo">EN</option>
                                        <option value="opel">Ar</option>
                                    </select>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--  header end -->
