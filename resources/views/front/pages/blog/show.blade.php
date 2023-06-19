@extends('front.layouts.app')

@section('content')

    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0" >
        <img src="{{ asset('uploads/blogs/' . $blog->image) }}" class="bg-img img-fluid blur-up lazyload" alt="">
    </section>
    <section class="pt-0 mt-1" style="background: #e0e0e0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 text-right">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('user.index')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active"
                                aria-current="page">الأخبار</li>
                            <li class="breadcrumb-item active"
                                aria-current="page">{{$blog->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>



@endsection
