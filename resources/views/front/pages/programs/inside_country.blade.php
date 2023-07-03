@extends('front.layouts.app')

@section('content')

    <!-- breadcrumb start -->
    <section class="breadcrumb-section parallax-img pt-0">
        <img src="{{ asset('front/assets/images/inner-pages/breadcrumb1.jpg')}}"
             class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content overlay-black">
            <div>
                <h2>البرامج المتاحة في {{$country->title}}</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item active" aria-current="page">البرامج المتاحة في {{$country->title}}</li>
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
            <div class="row" dir="rtl">

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

                                            </div>
                                            <div class="special-content">
                                                <a href="{{ route('user.programs.show',$item->id) }}">
                                                    <h5>{{$item->name}} &nbsp;<span>{{$item->title}}</span></h5>
                                                </a>
                                                <div class="tour-detail">

                                                    {{--                                                    <h6>--}}
                                                    {{--                                                        <i class="fas fa-plane-departure ms-1"></i>--}}
                                                    {{--                                                            {{$item->plan}}--}}
                                                    {{--                                                        <i class="fas fa-plane-arrival ms-3"></i>--}}
                                                    {{--                                                    </h6>--}}
                                                    <div class="include-sec">
                                                        <span>شامل المزايا الآتية</span>
                                                        <ul class="include pe-0">
                                                            @php
                                                                $prog_features = $item->features->pluck('id')->toArray();;
                                                            @endphp
                                                            @foreach($all_features as $feature)
                                                                <li class="{{in_array($feature->id, $prog_features) ? '' : 'd-none'}}" style="width: 45%; vertical-align: top">
                                                                    <img src="{{ asset('uploads/features/' . $feature->icon)}}"
                                                                         class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                                         data-placement="top" title="Hotel">
                                                                    {{$feature->name}}
                                                                </li>
                                                            @endforeach


                                                        </ul>
                                                    </div>
                                                    @if($item->price > 0)
                                                        <div class="bottom-section">
                                                            <div class="price">
                                                                <h6 dir="rtl">
                                                                    @if($item->discount != null)
                                                                        <del>
                                                                            {{  ($item->price * 100)/$item->discount .General::getCurrency()  }}
                                                                        </del>
                                                                    @endif
                                                                    {{ $item->price .General::getCurrency() }}
                                                                </h6>
                                                            </div>
                                                            <div class="price" style="clear: both">
                                                                <span>التكلفة للفرد الواحد</span>
                                                            </div>
                                                        </div>
                                                    @endif
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
