@extends('front.layouts.app')

@section('content')

    <!-- breadcrumb start -->
    <section class="breadcrumb-section parallax-img pt-0">
        <img src="{{ asset('front/assets/images/inner-pages/breadcrumb1.jpg')}}"
             class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content overlay-black">
            <div>
                <h2>Our Programs in {{$country->title}}</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Programs in {{$country->title}}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="bird-animation">
            <div class="bird-container bird-container--one">
                <div class="bird bird--one"></div>
            </div>
            <div class="bird-container bird-container--two">
                <div class="bird bird--two"></div>
            </div>
            <div class="bird-container bird-container--three">
                <div class="bird bird--three"></div>
            </div>
            <div class="bird-container bird-container--four">
                <div class="bird bird--four"></div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->


    <!-- section start -->
    <section class="small-section bg-inner">
        <div class="container">
            <div class="row">

                <div class="col-xl-12 onclick-map">
                    <div class="book-table single-table bg-inner">
                        <div class="table-form classic-form">
                            <form>
                                <div class="row w-100">
                                    <div class="form-group col p-0">
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                               placeholder="Starting from">
                                        <img src="{{ asset('front')}}/assets/images/icon/table-no.png"
                                             class="img-fluid blur-up lazyload"
                                             alt="">
                                    </div>
                                    <div class="form-group col p-0">
                                        <input type="text" class="form-control" placeholder="Going to">
                                        <img src="{{ asset('front')}}/assets/images/icon/table-no.png"
                                             class="img-fluid blur-up lazyload"
                                             alt="">
                                    </div>
                                    <div class="col p-0">
                                        <input placeholder="During Date" id="datepicker"/>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-rounded color1">search</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 ratio3_2">
                    <div class="product-wrapper-grid special-section grid-box">
                        <div class="row content grid">
                            @php
                                $all_features = \App\Models\Feature::where('type_of', 'programmes')->get();

                            @endphp
                            @if(isset($programmes) && $programmes->count() > 0)
                                @foreach($programmes as $item)

                                    <div class="col-xl-4 col-sm-6 popular grid-item wow fadeInUp" data-class="popular">
                                        <div class="special-box p-0">
                                            <div class="special-img">
                                                <a href="{{ route('user.programs.show',$item->id) }}">
                                                    <img src="{{ asset('uploads/programmes/' . $item->cover)}}"
                                                         class="img-fluid blur-up lazyload bg-img" alt="">
                                                </a>
                                                <div class="top-icon">
                                                    <a href="#" class="" data-bs-toggle="tooltip" data-placement="top"
                                                       title=""
                                                       data-original-title="Add to Wishlist">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="special-content">
                                                <a href="{{ route('user.programs.show',$item->id) }}">
                                                    <h5>{{$item->name}}<span>{{$item->title}}</span></h5>

                                                </a>
                                                <h5 class=" mt-1">
                                                    <span class="ms-0">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        {{$item->city->title}}
                                                    </span>
                                                </h5>
                                                <div class="tour-detail">

                                                    <h6>
                                                        <i class="fas fa-plane-departure me-3"></i>
                                                        {{$item->plan}}
                                                        <i class="fas fa-plane-arrival ms-3"></i>
                                                    </h6>
                                                    <div class="include-sec">
                                                        <span>include at this price</span>
                                                        <ul class="include">
                                                            @php
                                                                $prog_features = $item->features->pluck('id')->toArray();;
                                                            @endphp
                                                            @foreach($all_features as $feature)
                                                                <li class="{{in_array($feature->id, $prog_features) ? '' : 'not-include'}}">
                                                                    <img
                                                                        src="{{ asset('uploads/features/' . $feature->icon)}}"
                                                                        class="img-fluid blur-up lazyload" alt=""
                                                                        data-bs-toggle="tooltip"
                                                                        data-placement="top" title="Hotel">
                                                                    {{$feature->name}}
                                                                </li>
                                                            @endforeach


                                                        </ul>
                                                    </div>
                                                    <div class="bottom-section">
                                                        <div class="price">
                                                            <h6>
                                                                @if($item->discount != null)
                                                                    <del>
                                                                        {{ General::getCurrency() . ($item->price * 100)/$item->discount }}
                                                                    </del>
                                                                @endif
                                                                {{ General::getCurrency() . $item->price}}
                                                            </h6>
                                                            <span>price per person</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="label-offer">Recommended</div> --}}
                                        </div>
                                    </div>

                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div>{{$programmes->links()}}</div>

                </div>
            </div>
        </div>
    </section>
    <!-- section End -->

@endsection
