@extends('front.layouts.app')

@section('content')

  <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="{{ asset('front/assets/images/inner-bg.jpg') }}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content pt-0">
            <div>
                <h2>blog</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">blog</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="title-breadcrumb">Rica</div>
    </section>
    <!-- breadcrumb end -->


    <!-- blog section start -->
    <section class="section-b-space bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_section mt-0 blog-inner ratio_55">
                        <div class="row">
                            @if(isset($blogs) && $blogs->count() > 0)
                                @foreach($blogs as $item)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-wrap wow fadeInUp">
                                            <div class="blog-image">
                                                <a href="#">
                                                    <img src="{{ asset('uploads/blogs/' . $item->image) }}"
                                                         class="img-fluid blur-up lazyload bg-img" alt="">
                                                </a>
                                                <div class="blog-label">
                                                    <div>
                                                        <h3>{{date('d', strtotime($item->created_at))}}</h3>
                                                        <h6>{{date('M', strtotime($item->created_at))}}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blog-details">
                                                <a href="#">
                                                    <h5>{{$item->title}}</h5>

                                                </a>
                                                <p>
                                                    {{$item->sub_title}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div>{{$blogs->links()}}</div>
{{--                        <nav aria-label="Page navigation example" class="pagination-section mt-0">--}}
{{--                            <ul class="pagination">--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">--}}
{{--                                        <span aria-hidden="true">&laquo;</span>--}}
{{--                                        <span class="sr-only">Previous</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link" href="#" aria-label="Next">--}}
{{--                                        <span aria-hidden="true">&raquo;</span>--}}
{{--                                        <span class="sr-only">Next</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->

@endsection
