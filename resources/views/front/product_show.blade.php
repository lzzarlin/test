@extends('front.layouts.inner_base')
@section('title', $product->name . ' - molecular sieve manufacturer in china')
@section('keywords', $product->keywords)
@section('description', $product->description)

@section('style')
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,600,800" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Main CSS -->
    <link href="/front/css/main.css" rel="stylesheet" />
    <!-- Animation CSS -->
    <link href="/front/css/aos.css" rel="stylesheet" />

    <link href="/front/css/product.css" rel="stylesheet">
@endsection

@section('main')
    <section class="pt-1 pb-5" data-aos="fade-down">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: aliceblue;">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/products">Products</a></li>
                    <li class="breadcrumb-item"><a href="/products/{{ $category->slug }}">{{ $category->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                </ol>
            </nav>
            <!-- Product Top -->
            <div class="row">
                <div class="col-lg-6">
                    {{-- <div class="card flex-md-row mb-4 box-shadow h-xl-300"> 修复图片超出高度问题--}}
                    
                    <div class="card flex-md-row mb-4 box-shadow">
                        <!-- 产品图片轮播图 -->
                        <div id="carousel-indicators-thumb" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators carousel-indicators-thumb">
                                <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="0"
                                    class="ratio ratio-4x3 active"
                                    style="background-image: url({{ $product->pic_one }})"></button>
                                @if ($product->pic_two)
                                    <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="1"
                                        class="ratio ratio-4x3"
                                        style="background-image: url({{ $product->pic_two }})"></button>
                                @endif
                                @if ($product->pic_three)
                                    <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="2"
                                        class="ratio ratio-4x3"
                                        style="background-image: url({{ $product->pic_three }})"></button>
                                @endif
                                @if ($product->pic_four)
                                    <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="3"
                                        class="ratio ratio-4x3"
                                        style="background-image: url({{ $product->pic_four }})"></button>
                                @endif
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" alt="" src="{{ $product->pic_one }}" />
                                </div>
                                @if ($product->pic_two)
                                    <div class="carousel-item">
                                        <img class="d-block w-100" alt="" src="{{ $product->pic_two }}" />
                                    </div>
                                @endif
                                @if ($product->pic_three)
                                    <div class="carousel-item">
                                        <img class="d-block w-100" alt="" src="{{ $product->pic_three }}" />
                                    </div>
                                @endif
                                @if ($product->pic_four)
                                    <div class="carousel-item">
                                        <img class="d-block w-100" alt="" src="{{ $product->pic_four }}" />
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- 产品图片轮播图结束 -->
                    </div>
                </div>
                <div class="col-lg-6">
                    {{-- <div class="card flex-md-row mb-4 box-shadow h-xl-300">  修复图片超出高度问题--}}
                    <div class="card flex-md-row mb-4 box-shadow">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-success">Product Information</strong>
                            <h1 class="mb-1">
                                {{ $product->name }}
                            </h1>
                            <div class="mb-1">
                                <p>Application：{{ $product->application }}</p>
                            </div>
                            <div class="mb-1">
                                <p>Package：{{ $product->package }}</p>
                            </div>
                            <div class="mb-1">
                                <p>Price：{{ $product->price }}</p>
                            </div>
                            <div class="mb-1">
                                <p>{{ $product->description }}</p>
                            </div>
                            <div class="mt-3">
                                <a class="btn btn-info shadow btn-round-md text-white " href="/contact" target="_blank">get a quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product TOP-->

            <!-- Product Cards -->
            <div class="row mt-5" data-aos="fade-up" id="detail">
                <div class="col-lg-9">
                    <div class="row">
                        <h2>Details</h2>
                    </div>
                    <article>
                        {!! $product->body !!}
                    </article>

                    <!-- pagination -->
                    <ul class="pagination ">
                        @if ($pre)
                            <li class="page-item page-prev">
                                <a class="page-link" href="/product/{{ $pre->slug }}">
                                    <div class="page-item-subtitle">previous</div>
                                    <div class="page-item-title">{{ $pre->name }}</div>
                                </a>
                            </li>
                        @else
                            <li class="page-item page-prev disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <div class="page-item-subtitle">previous</div>
                                    <div class="page-item-title">Getting started</div>
                                </a>
                            </li>
                        @endif
                        @if ($next)
                            <li class="page-item page-next">
                                <a class="page-link" href="/product/{{ $next->slug }}">
                                    <div class="page-item-subtitle">next</div>
                                    <div class="page-item-title">{{ $next->name }}</div>
                                </a>
                            </li>
                        @else
                            <li class="page-item page-next disabled">
                                <a class="page-link" href="#">
                                    <div class="page-item-subtitle">next</div>
                                    <div class="page-item-title">No More</div>
                                </a>
                            </li>
                        @endif

                    </ul>
                    <!--end pagination -->
                    <!-- related application -->
                    <div class="row gap-y" data-aos="fade-up">
                        @foreach ($anlis as $anli)
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <img class="img-card-top" src="{{ $anli->thumpic }}">
                                    <div class="card-body">
                                        <a href="/application/{{ $anli->slug }}">
                                            <h5 class="card-title text-dark">{{ $anli->title }}</h5>
                                            <span class="card-text text-muted">
                                                {{ $anli->created_at }} </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- related product -->
                </div>
                <div class="col-lg-3" data-aos="fade-up">
                    <!-- product Category-->
                    <div class="row gap-y">
                        <div class="col-md-6 col-lg-12">
                            <div class="card text-center mb-2 py-3 bg-cyan">
                                <h4>Products Categories</h4>
                            </div>
                            <div class="list-group">
                                @foreach ($categories as $catenav)
                                    @if ($catenav->id == $category->id)
                                        <a href="/products/{{ $catenav->slug }}"
                                            class="list-group-item list-group-item-action active">{{ $catenav->name }}</a>
                                    @else
                                        <a href="/products/{{ $catenav->slug }}"
                                            class="list-group-item list-group-item-action">
                                            {{ $catenav->name }}
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- end product Category-->
                    <!-- related news -->
                    <div class="row gap-y" data-aos="fade-up">
                        <div class="col-md-6 col-lg-12">
                            <div class="card text-center mb-2 py-3 bg-cyan">
                                <h4>Related News</h4>
                            </div>
                            @foreach ($news as $new)
                                <div class="card mt-3">
                                    <img class="img-card-top" src="{{ $new->thumpic }}">
                                    <div class="card-body">
                                        <a href="/news/{{ $new->slug }}">
                                            <h5 class="card-title text-dark">{{ $new->title }}
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- end related news -->
                </div>
            </div>
        </div>
    </section>
    @include('front.layouts._FAQ')
    @include('front.layouts._CTA')

@stop
