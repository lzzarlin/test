@extends('front.layouts.inner_base')
@section('title', $category->title)
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

        </div>
    </section>

    @include('front.layouts._FAQ')
    @include('front.layouts._CTA')

@stop
