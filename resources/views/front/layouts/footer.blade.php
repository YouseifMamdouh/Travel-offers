   <!-- footer section start -->

   @php
       $contact = \App\Models\Contact::first();
       $about = \App\Models\AboutUsDetail::first();
       $countries = \App\Models\Country::whereHas('programs')->get();
       $blogs = \App\Models\Blog::limit(3)->get();
   @endphp
   <footer dir="rtl">
       <div class="footer section-b-space section-t-space" style="padding-top: 40px!important;">
           <div class="container">
               <div class="row order-row text-right">
                   <div class="col-xl-3 col-lg-3 col-md-7 order-cls">
                       <div class="footer-title mobile-title">
                           <h5>{{ __('messages.contact_us') }}</h5>
                       </div>
                       <div class="footer-content">
                           <div class="contact-detail">
                               <div class="footer-logo">
                                   <img src="{{ asset('front/assets/img/logotop.png') }}" alt=""
                                       class="img-fluid blur-up lazyload" width="140">
                               </div>
                               {{--                               <p>{!! $about->description !!}</p> --}}
                               <ul class="contact-list">
                                   {{-- <li><i class="fas fa-map-marker-alt"></i>Cairo , maadi</li> --}}
                                   <li><i class="fas fa-phone-alt"></i>{{ $contact->phone }}</li>
                                   <li><i class="fas fa-envelope"></i>{{ $contact->email }}</li>
                                   <li><i class="fas fa-map-marker-alt"></i>{{ $contact->address }}</li>
                               </ul>
                           </div>
                       </div>
                   </div>

                   <div class="col-xl-3 col-lg-3 col-md-7">
                       <div class="footer-title">
                           <h5>افضل العروض السياحية
</h5>
                       </div>
                       <div class="footer-content">
                           <div class="footer-place">
                               <div class="row px-3" dir="rtl">

                                   @if (isset($countries) && $countries->count() > 0)
                                       @foreach ($countries as $item)
                                           <div class="col-lg-6 col-md-6 col-6 mt-0 mb-2">
                                               <div class="place rounded5">
                                                   <a href="{{ route('user.show.programs', $item->id) }}"
                                                       dir="rtl">

                                                       <h6>{{ $item->title }}</h6>

                                                   </a>
                                               </div>
                                           </div>
                                       @endforeach
                                   @endif


                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4">
                       <div class="footer-space">
                           <div class="footer-title">
                               <h5>روابط مهمة</h5>
                           </div>
                           <div class="footer-content">
                               <div class="footer-links">
                                   <ul>
                                       <li><a href="{{ route('user.index') }}">{{ __('messages.home') }}</a></li>
                                       <li><a href="{{ route('user.about') }}">{{ __('messages.about_us') }}</a></li>
                                       <li><a href="{{ route('user.hotels.index') }}">{{ __('messages.hotels') }}</a>
                                       </li>
                                       <li><a
                                               href="{{ route('user.programs.index') }}">{{ __('messages.our_programs') }}</a>
                                       </li>
                                       {{--                                       <li><a href="{{route('user.blogs.index')}}">{{__("messages.blogs")}}</a></li> --}}
                                       <li><a href="{{ route('user.contact') }}">{{ __('messages.contact_us') }}</a>
                                       </li>

                                       {{--                                        <li><a href="#">terms & co.</a></li> --}}
                                       {{--                                        <li><a href="#">privacy</a></li> --}}
                                       {{--                                        <li><a href="#">support</a></li> --}}
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-md-6">
                       <div class="footer-title">
                           <h5>{{ \App\Helpers\TranslationHelper::translate('Top Hotels ', 'site') }}</h5>
                       </div>
                       <div class="footer-content">
                           <div class="footer-blog">
                               @if (isset($footer_hotels) && $footer_hotels->count() > 0)
                                   @foreach ($footer_hotels as $footer_hotel)
                                       <div class="media" dir="rtl">
                                           <div class="media-body">
                                               <h5 style="color: #fff">- {{ $footer_hotel->title }}</h5>
                                           </div>
                                       </div>
                                   @endforeach
                               @endif

                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="sub-footer">
           <div class="container">
               <div class="row " dir="rtl">
                   <div class="col-xl-6 col-md-6 col-sm-12 text-right">
                       <div class="footer-social">
                           <ul>
                               <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                               <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                               <li>
                                   <a href="#" target="_blank">
                                       <img src="{{ asset('front/assets/images/tik-tok.png') }}"
                                           style="width: 17px;vertical-align: top" alt="tik-tok">
                                   </a>
                               </li>
                               <li><a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-xl-6 col-md-6 col-sm-12 text-left">
                       <div class="copy-right">
                           {{-- <p>{{__("messages.copy_right")}} <i class="fas fa-heart"></i><a href="https://matrixclouds.com/ar">Matrix Clouds</a></p> --}}
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </footer>
   <!-- footer section end -->
