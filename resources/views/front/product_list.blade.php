@extends('front.layouts.inner_base')
@section('title', $category->name)
@section('keywords', $category->keywords)
@section('description', $category->description)
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
@endsection

@section('main')
    <section class="pt-5 pb-5" data-aos="fade-down">
        <div class="container">
            <!-- Product Cards -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="row gap-y">
                        <div class="col-md-12 col-lg-12">
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
                </div>
                <div class="col-lg-9">
                    <div class="row gap-y">

                        <div class="col-lg-12">
                            <h4>Products List</h4>
                        </div>
                    </div>
                    <div class="row gap-y">
                        @foreach ($products as $product)
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <img class="img-card-top border-bottom"
                                        src="{{ $product->thumpic ? $product->thumpic : '/front/img/blog3.jpg' }}"
                                        alt="{{ $product->name }}" title="{{ $product->name }}">
                                    <div class="card-body">
                                        <a href="/product/{{ $product->slug }}">
                                            <h5 class="card-title text-dark">{{ $product->name }}</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- pagination -->
                    <section class="pt-4 pb-0">
                        {!! $products->render() !!}
                    </section>
                    <!-- end pagination -->
                </div>

            </div>
            {{-- <!-- Post -->
            <div class="row mt-5" data-aos="fade-down">
                <div class="col-lg-6">
                    <div class="card flex-md-row mb-4 box-shadow h-xl-300">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-purple">Business</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Living the Dream on a Sunny Island</a>
                            </h3>
                            <div class="mb-1 text-muted">
                                Nov 12
                            </div>
                            <p class="card-text mb-auto">
                                This is a wider card with supporting text below as a natural lead-in to additional
                                content.
                            </p>
                            <a class="text-gray" href="#">Continue reading</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" src="/front/img/blog1.jpg">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card flex-md-row mb-4 box-shadow h-xl-300">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-success">Marketing</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Why your marketing can be improved</a>
                            </h3>
                            <div class="mb-1 text-muted">
                                Nov 12
                            </div>
                            <p class="card-text mb-auto">
                                This is a wider card with supporting text below as a natural lead-in to additional
                                content.
                            </p>
                            <a class="text-gray" href="#">Continue reading</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" src="/front/img/blog2.jpg">
                    </div>
                </div>
            </div>
            <!-- End Post --> --}}
        </div>
    </section>

    @include('front.layouts._FAQ')
    @include('front.layouts._CTA')

@stop
