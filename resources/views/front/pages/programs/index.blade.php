@extends('front.layouts.app')

@section('content')

<!-- breadcrumb start -->
    <section class="breadcrumb-section parallax-img pt-0">
        <img src="{{ asset('front')}}/assets/images/inner-pages/breadcrumb1.jpg" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content overlay-black">
            <div>
                <h2>Our Programmes</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Programmes</li>
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
                                        <img src="{{ asset('front')}}/assets/images/icon/table-no.png" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </div>
                                    <div class="form-group col p-0">
                                        <input type="text" class="form-control" placeholder="Going to">
                                        <img src="{{ asset('front')}}/assets/images/icon/table-no.png" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </div>
                                    <div class="col p-0">
                                        <input placeholder="During Date" id="datepicker" />
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
                                                    <a href="#" class="" data-bs-toggle="tooltip" data-placement="top" title=""
                                                       data-original-title="Add to Wishlist">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="special-content">
                                                <a href="{{ route('user.programs.show',$item->id) }}">
                                                    <h5>Bali Dreams Land Only<span>(6N 7D)</span></h5>
                                                </a>
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
                                                                $all_features = \App\Models\Feature::get();
                                                            @endphp
                                                            @foreach($all_features as $feature)
                                                                <li class="{{in_array($feature->id, $prog_features) ? '' : 'not-include'}}">
                                                                    <img src="{{ asset('uploads/features/' . $feature->icon)}}"
                                                                         class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
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
                                                                    {{($item->price * 100)/$item->discount . General::getCurrency()}}
                                                                </del>
                                                            @endif
                                                                {{$item->price . General::getCurrency()}}
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
                    <nav aria-label="Page navigation example" class="pagination-section mt-0">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->

@endsection
