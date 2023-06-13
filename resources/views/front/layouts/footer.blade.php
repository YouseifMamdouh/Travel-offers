   <!-- footer section start -->

    @php
        $contact = \App\Models\Contact::first();
        $about = \App\Models\AboutUsDetail::first();
        $countries = \App\Models\Country::get();
        $blogs = \App\Models\Blog::limit(3)->get();
    @endphp
   <footer>
       <div class="footer section-b-space section-t-space">
           <div class="container">
               <div class="row order-row">
                   <div class="col-xl-3 col-md-7 order-cls">
                       <div class="footer-title mobile-title">
                           <h5>{{__('messages.contact_us')}}</h5>
                       </div>
                       <div class="footer-content">
                           <div class="contact-detail">
                               <div class="footer-logo">
                                   <img src="{{ asset('front/assets/images/logo-ral.png') }}" alt=""
                                        class="img-fluid blur-up lazyload" width="150px">
                               </div>
                               <p>{!! $about->description !!}</p>
                               <ul class="contact-list">
                                   {{-- <li><i class="fas fa-map-marker-alt"></i>Cairo , maadi</li> --}}
                                   <li><i class="fas fa-phone-alt"></i>{{$contact->phone}}</li>
                                   <li><i class="fas fa-envelope"></i>{{$contact->email}}</li>
                                   <li><i class="fas fa-map-marker-alt"></i>{{$contact->address}}</li>
                               </ul>
                           </div>
                       </div>
                   </div>

                   <div class="col-xl-3 col-md-7">
                       <div class="footer-title">
                           <h5>{{__("messages.top_places")}}</h5>
                       </div>
                       <div class="footer-content">
                           <div class="footer-place">
                               <div class="row">

                                   @if(isset($countries) && $countries->count() > 0)
                                       @foreach($countries as $item)
                                           <div class="col-4">
                                               <div class="place rounded5">
                                                   <a href="{{route('user.show.programs', $item->id)}}">
                                                       <img src="{{ asset('uploads/countries/' . $item->image) }}"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                       <div class="overlay">
                                                           <h6>{{$item->title}}</h6>
                                                       </div>
                                                   </a>
                                               </div>
                                           </div>
                                           <div class="col-4">
                                               <div class="place rounded5">
                                                   <a href="{{route('user.show.programs', $item->id)}}">
                                                       <img src="{{ asset('uploads/cities/' . $item->image) }}"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                       <div class="overlay">
                                                           <h6>{{$item->title}}</h6>
                                                       </div>
                                                   </a>
                                               </div>
                                           </div>
                                       @endforeach
                                   @endif


                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-md-4">
                       <div class="footer-space">
                           <div class="footer-title">
                               <h5>{{__("messages.about_us")}}</h5>
                           </div>
                           <div class="footer-content">
                               <div class="footer-links">
                                   <ul>
                                       <li><a href="{{route('user.index')}}">{{__("messages.home")}}</a></li>
                                       <li><a href="{{route('user.about')}}">{{__("messages.about_us")}}</a></li>
                                       <li><a href="{{route('user.hotels.index')}}">{{__("messages.hotels")}}</a></li>
                                       <li><a href="{{route('user.programs.index')}}">{{__("messages.our_programs")}}</a></li>
                                       <li><a href="{{route('user.blogs.index')}}">{{__("messages.blogs")}}</a></li>
                                       <li><a href="{{route('user.contact')}}">{{__("messages.contact_us")}}</a></li>

                                       {{--                                        <li><a href="#">terms & co.</a></li>--}}
                                       {{--                                        <li><a href="#">privacy</a></li>--}}
                                       {{--                                        <li><a href="#">support</a></li>--}}
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-md-6">
                       <div class="footer-title">
                           <h5>{{__("messages.new_topics")}}</h5>
                       </div>
                       <div class="footer-content">
                           <div class="footer-blog">
                               @if(isset($blogs) && $blogs->count() > 0)
                                   @foreach($blogs as $blog)
                                       <div class="media">
                                           <div class="img-part rounded5">
                                               <a href="#"><img src="{{ asset('uploads/blogs/' . $blog->image) }}" style="width: 100px"
                                                                class="img-fluid blur-up lazyload" alt=""></a>
                                           </div>
                                           <div class="media-body">
                                               <h5>{{$blog->title}}</h5>
                                               <p>
                                                   {{$blog->sub_title}}
                                               </p>
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
                                <li><a href="https://www.facebook.com/RALTRAVELTABUK"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://instagram.com/ral.travel?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/RAL_KSA"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://web.whatsapp.com/send?phone=966546982604"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12 text-left">
                        <div class="copy-right">
                            <p>{{__("messages.copy_right")}} <i class="fas fa-heart"></i><a href="https://matrixclouds.com/ar">Matrix Clouds</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->
