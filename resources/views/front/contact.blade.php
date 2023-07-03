@extends('front.layouts.app')


@section('content')

 <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="{{ asset('uploads/contacts/'. $contact->image) }}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content">
            <div>
                <h2>{{__('messages.contact_us')}}</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">{{__("messages.home")}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__("messages.contact_us")}}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="title-breadcrumb">RAl</div>
    </section>
    <!-- breadcrumb end -->


    <!-- contact detail section start -->
    <section class="rtl contact_section small-section pb-0 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="contact_wrap">
                        <div class="title_bar">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4>{{__("messages.address")}}</h4>
                        </div>
                        <div class="contact_content">
                            <p>{{$contact->address}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="contact_wrap">
                        <div class="title_bar">
                            <i class="fas fa-envelope"></i>
                            <h4>{{__("messages.email")}}</h4>
                        </div>
                        <div class="contact_content">
                            <ul>
                                <li>{{$contact->email}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="contact_wrap">
                        <div class="title_bar">
                            <i class="fas fa-phone-alt"></i>
                            <h4>{{__("messages.phone")}}</h4>
                        </div>
                        <div class="contact_content">
                            <ul>
                                <li>{{$contact->phone}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact detail section end -->


    <!-- get in touch section start -->
    <section class="small-section rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="get-in-touch">
                        <h3>{{__("messages.get_touch")}}</h3>
                        <form action="{{route('post.contact')}}" method="post" dir="rtl">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="f_name" name="f_name" placeholder="{{__('messages.f_name')}}"
                                        required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="l_name" name="l_name" placeholder="{{__('messages.l_name')}}"
                                        required="">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="{{__('messages.phone')}}"
                                        required="">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="{{__('messages.email')}}"
                                        required="">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" name="message" placeholder="{{__('messages.write_message')}}"
                                        id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                                <div class="col-md-12 submit-btn">
                                    <button class="btn btn-solid" type="submit">{{__('messages.send_message')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-map">
                        {!! \App\Models\AboutUsDetail::first()->map !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- get in touch section end -->

@endsection
