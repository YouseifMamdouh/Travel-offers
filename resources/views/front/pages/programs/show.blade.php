@extends('front.layouts.app')

@section('content')

    <!-- breadcrumb start -->
    <section class="home_section p-0">
        <div>
            <div class="home home-60">
                <img src="{{ asset('end-user') }}/assets/images/tour/spain4.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="home-content pt-0 mix-layout mrg-cls">
                                <div>
                                    <h1>Ral Travel</h1>
                                    <ul class="package-detail">
                                        <li><i class="far fa-calendar-alt"></i>7 days</li>
                                        <li><i class="fas fa-plane"></i>11 dec, 2019</li>
                                        <li><i class="fas fa-download"></i><a href="#">download pdf</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- section start -->
    <section class="single-section small-section bg-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="description-section tab-section">

                        <div class="description-details">
                            <div class="desc-box">
                                <div class="menu-part mt-0 about" id="highlight">
                                    <div class="about-sec">
                                        <p>Hola Espana! The vibrant country of Spain beckons for an adventure that lets
                                            us explore the sights 'n' sounds of this remarkable destination. Visit
                                            architechturally brilliant and culture-rich cities of Madrid, Seville,
                                            Barcelona, Cordoba, Valencia on this tour and have the experience of a
                                            lifetime!</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about-sec">
                                                <h4>inclusion</h4>
                                                <ul>
                                                    <li>Return economy class airfare with taxes</li>
                                                    <li>Barcelona to Prague Internal flight ticket</li>
                                                    <li>2 Nights Stay With Breakfast At Prague</li>
                                                    <li>2 Nights Stay With Breakfast At Budapest</li>
                                                    <li>1 Night Stay With Breakfast At Vienna</li>
                                                    <li>Normal Visa Charges of Schengen</li>
                                                    <li>5% GST</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 margin-up">
                                            <div class="about-sec">
                                                <h4>exclusion</h4>
                                                <ul>
                                                    <li>Any Extra Sightseeing Which Is Not Mentioned In The Itinerary
                                                    </li>
                                                    <li>Overseas Travel Insurance & Personal Expense Such As Mineral
                                                        Water, Laundry Etc</li>
                                                    <li>Personal expenses</li>
                                                    <li>Excess baggage charge</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="about-sec">
                                        <h6>a road rip along spain's mediterranean coast</h6>
                                        <p>A road trip along Spain’s Mediterranean coast is a guarantee of sunshine,
                                            lovely beaches, and plenty of destinations with things to see and do. We
                                            suggest following the coastline at your own pace, without a fixed timetable
                                            and with room to improvise.We choose Barcelona as a starting point because
                                            it’s a huge transport hub. You might fancy heading north for a couple of
                                            days to see the Costa Brava (Girona): beautiful bays like Roses, coves where
                                            the pine trees grow right to the shoreline, large seaside resorts and the
                                            fishing villages that once inspired Dalí.</p>
                                        <h6>the history of spain's great civilisations</h6>
                                        <p>In Spain, you can get a history lesson while you enjoy your holiday. Let us
                                            show you places to visit where you can discover milestones of human
                                            development, like the earliest humans, the birth of art, and the power of
                                            the great civilisations.</p>
                                        <h6>foodies, prepare to be enthused</h6>
                                        <p>From tasty tapas to superb seafood and traditional roasts, food in Spain is
                                            all about making the most of the best local produce.Whether you're on a city
                                            break in Barcelona or Madrid, or you've plumped for a countryside or coastal
                                            retreat, Spanish food is full of flavour and character.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="desc-box">
                                <h4 class="content-title">gallery</h4>
                                <div class="menu-part" id="gallery">
                                    <div class="container-fluid p-0 ratio3_2">
                                        <div class="row  zoom-gallery">
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="overlay">
                                                    <a href="{{ asset('end-user') }}/assets/images/tour/tour/7.jpg">
                                                        <div class="overlay-background">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </div>
                                                        <img src="{{ asset('end-user') }}/assets/images/tour/tour/7.jpg" alt=""
                                                            class="img-fluid blur-up lazyload bg-img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="overlay">
                                                    <a href="{{ asset('end-user') }}/assets/images/tour/tour/8.jpg">
                                                        <div class="overlay-background">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </div>
                                                        <img src="{{ asset('end-user') }}/assets/images/tour/tour/8.jpg" alt=""
                                                            class="img-fluid blur-up lazyload bg-img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="overlay">
                                                    <a href="{{ asset('end-user') }}/assets/images/tour/tour/9.jpg">
                                                        <div class="overlay-background">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </div>
                                                        <img src="{{ asset('end-user') }}/assets/images/tour/tour/9.jpg" alt=""
                                                            class="img-fluid blur-up lazyload bg-img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="overlay">
                                                    <a href="{{ asset('end-user') }}/assets/images/tour/tour/10.jpg">
                                                        <div class="overlay-background">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </div>
                                                        <img src="{{ asset('end-user') }}/assets/images/tour/tour/10.jpg" alt=""
                                                            class="img-fluid blur-up lazyload bg-img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="overlay">
                                                    <a href="{{ asset('end-user') }}/assets/images/tour/tour/11.jpg">
                                                        <div class="overlay-background">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </div>
                                                        <img src="{{ asset('end-user') }}/assets/images/tour/tour/11.jpg" alt=""
                                                            class="img-fluid blur-up lazyload bg-img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="overlay">
                                                    <a href="{{ asset('end-user') }}/assets/images/tour/tour/12.jpg">
                                                        <div class="overlay-background">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </div>
                                                        <img src="{{ asset('end-user') }}/assets/images/tour/tour/12.jpg" alt=""
                                                            class="img-fluid blur-up lazyload bg-img">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="desc-box">
                                <h4 class="content-title">review</h4>
                                <div class="menu-part review" id="review">
                                    <div class="review-box">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>Wonderful Experience...!!</span>
                                        </div>
                                        <h6>by xyz, jun 18, 2019</h6>
                                        <p>Our family holiday to Spain was awesome .pocket friendly rates that make
                                            planning a holiday a delight. I got a good hotels, flight discount for my
                                            round trip flight for the same trip while booking from sites.Thank you
                                            moment for giving us a wonderful experience.</p>
                                    </div>
                                    <div class="review-box">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span>Excellent Arrangements</span>
                                        </div>
                                        <h6>by xyz, jun 18, 2019</h6>
                                        <p>Rica holidays planned our family trip to Spain, it was so perfect. Everything
                                            was flawless, in-case if any confusions there was always someone to assist
                                            us at any point. Had a wonderful experience and thanks to these guys for
                                            making it happen. I would really recommend them for further vacation
                                            planning.</p>
                                    </div>
                                    <div class="review-box">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span>Best getaway destination with family</span>
                                        </div>
                                        <h6>by xyz, jun 18, 2019</h6>
                                        <p>Extremely happy with my trip to Spain. All the arrangements were spot on and
                                            cabs were punctual. Never had any hiccups and we enjoyed the trip immensely.
                                            Thanks you for organizing such a wonderful trip and taking care of all my
                                            special request with patience and skill.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-4 ">
                    <div class="sticky-cls">
                        <div class="single-sidebar">
                            <div class="selection-section">
                                <h4 class="title">book this journey</h4>
                                <div class="book-btn-section border-top-0">
                                    <div class="detail-top">
                                        <input type="text" id="firstName" class="form-control" placeholder="First name">
                                        <input type="email" id="email" class="form-control"
                                            placeholder="Enter your email">
                                        <input type="number" id="phone" class="form-control" placeholder="Phone Number">
                                    </div>
                                    <div class="rooms-section">
                                        <input type="text" class="form-control open-select"
                                            placeholder="rooms & guests">
                                        <div class="selector-box">
                                            <div class="room-cls">
                                                <label class="title_room">room 1</label>
                                                <div class="qty-box">
                                                    <label>adult</label>
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field=""> - </button>
                                                        <input type="text" name="quantity"
                                                            class="form-control qty-input input-number" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">+</button>
                                                    </div>
                                                </div>
                                                <div class="qty-box">
                                                    <label>children</label>
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field=""> - </button>
                                                        <input type="text" name="quantity"
                                                            class="form-control qty-input input-number" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field=""> + </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bottom-part">
                                                <a href="#" class="add-room">add room +</a>
                                                <a href="javascript:void(0)" class="btn">apply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selector">
                                        <select>
                                            <option value="" disabled selected>Select your date</option>
                                            <option value="saab">15 march, 2019</option>
                                            <option value="saab">27 August, 2019</option>
                                            <option value="audi">20 December, 2019</option>
                                        </select>
                                    </div>
                                    <a href="#" class="btn btn-rounded btn-sm color1">start my
                                        journey</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->


    <!-- book now section start -->
    <div class="book-panel">
        <button data-bs-toggle="modal" data-bs-target="#booknowModal" type="button" class="btn bottom-btn theme-color">book
            now</button>
        <button data-bs-toggle="modal" data-bs-target="#enquiryModal" type="button" class="btn bottom-btn">enquiry</button>
    </div>
    <!-- book now section end -->

@endsection
