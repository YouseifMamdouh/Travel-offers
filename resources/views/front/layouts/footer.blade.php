   <!-- footer section start -->

    @php
        $contact = \App\Models\Contact::first();
        $about = \App\Models\AboutUsDetail::first();
        $cities = \App\Models\City::limit(6)->get();
    @endphp
   <footer>
       <div class="footer section-b-space section-t-space">
           <div class="container">
               <div class="row order-row">
                   <div class="col-xl-3 col-md-7 order-cls">
                       <div class="footer-title mobile-title">
                           <h5>contact us</h5>
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
                           <h5>top places</h5>
                       </div>
                       <div class="footer-content">
                           <div class="footer-place">
                               <div class="row">

                                   @if(isset($cities) && $cities->count() > 0)
                                       @foreach($cities as $item)
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
                               <h5>about</h5>
                           </div>
                           <div class="footer-content">
                               <div class="footer-links">
                                   <ul>
                                       <li><a href="{{route('user.index')}}">Home</a></li>
                                       <li><a href="{{route('user.about')}}">About us</a></li>
                                       <li><a href="{{route('user.hotels.index')}}">Hotels</a></li>
                                       <li><a href="{{route('user.programs.index')}}">Our Programs</a></li>
                                       <li><a href="{{route('user.blogs.index')}}">Blogs</a></li>
                                       <li><a href="{{route('user.contact')}}">Contact us</a></li>

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
                           <h5>new topics</h5>
                       </div>
                       <div class="footer-content">
                           <div class="footer-blog">
                               <div class="media">
                                   <div class="img-part rounded5">
                                       <a href="#"><img src="{{ asset('front/assets/images/cab/blog-footer/1.jpg') }}"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                   </div>
                                   <div class="media-body">
                                       <h5>recent news</h5>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                           Lorem Ipsum has been the industry's standard dummy text ever since the
                                           1500s, when an unknown printer took a galley of type and scrambled
                                           it to make a type specimen book. It has survived not only five centuries</p>
                                   </div>
                               </div>
                               <div class="media">
                                   <div class="img-part rounded5">
                                       <a href=""><img src="{{ asset('front/assets/images/cab/blog-footer/2.jpg') }}"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                        <h5>recent news</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book. It has survived not only five centuries</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-social">
                            <ul>
                                <li><a href="https://www.facebook.com/RALTRAVELTABUK"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://instagram.com/ral.travel?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/RAL_KSA"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://web.whatsapp.com/send?phone=966546982604"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="copy-right">
                            <p>copyright 2022 RalTravel by <i class="fas fa-heart"></i><a href="https://matrixclouds.com/ar">Matrix Clouds</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->
