@extends('front.layouts.inner_base')
@section('title', $anli->title)
@section('keywords', $anli->keywords)
@section('description', $anli->description)

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
                    <li class="breadcrumb-item"><a href="/applications">applications</a></li>
                    <li class="breadcrumb-item"><a href="/applications/{{ $category->slug }}">{{ $category->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $anli->title }}</li>
                </ol>
            </nav>

            <!-- Product Cards -->
            <div class="row mt-5" data-aos="fade-up" id="detail">
                <div class="col-lg-9">
                    <article>
                        <h1 class="text-center">{{ $anli->title }}</h1>
                        <p class="lead">
                            {{ $anli->description }}
                        </p>
                        {!! $anli->body !!}
                    </article>

                    <!-- pagination -->
                    <ul class="pagination ">
                        @if ($pre)
                            <li class="page-item page-prev">
                                <a class="page-link" href="/application/{{ $pre->slug }}">
                                    <div class="page-item-subtitle">previous</div>
                                    <div class="page-item-title">{{ $pre->title }}</div>
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
                                <a class="page-link" href="/application/{{ $next->slug }}">
                                    <div class="page-item-subtitle">next</div>
                                    <div class="page-item-title">{{ $next->title }}</div>
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
                        @foreach ($news as $new)
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <img class="img-card-top" src="{{ $new->thumpic }}">
                                    <div class="card-body">
                                        <a href="/news/{{ $new->slug }}">
                                            <h5 class="card-title text-dark">{{ $new->title }}</h5>
                                            <span class="card-text text-muted">
                                                {{ $new->created_at }} </span>
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
                                <h4>Application Categories</h4>
                            </div>
                            <div class="list-group">
                                @foreach ($categories as $catenav)
                                    @if ($catenav->id == $category->id)
                                        <a href="/applications/{{ $catenav->slug }}"
                                            class="list-group-item list-group-item-action active">{{ $catenav->name }}</a>
                                    @else
                                        <a href="/applications/{{ $catenav->slug }}"
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
                                <h4>Related Products</h4>
                            </div>
                            @foreach ($products as $product)
                                <div class="card mt-3">
                                    <img class="img-card-top" src="{{ $product->thumpic }}">
                                    <div class="card-body">
                                        <a href="/product/{{ $product->slug }}">
                                            <h5 class="card-title text-dark">{{ $product->name }}
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
