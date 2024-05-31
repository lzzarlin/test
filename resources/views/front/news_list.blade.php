@extends('front.layouts.inner_base')
@section('title', $category->name)
@section('keywords', $category->keywords)
@section('description', $category->description)

@section('style')
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,600,800" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
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
                <div class="col-lg-12">
                    <div class="row gap-y text-center">
                        <div class="col-lg-3">
                            <a href="/newss/industry-news" class="list-group-item list-group-item-action">Industry News</a>
                        </div>
                        <div class="col-lg-3">
                            <a href="/newss/company-news" class="list-group-item list-group-item-action">Company News</a>
                        </div>
                    </div>
                    <div class="row gap-y">
                        @foreach ($news as $new)
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <img class="img-card-top" src="{{ $new->thumpic }}">
                                    <div class="card-body">
                                        <a href="/news/{{ $new->slug }}">
                                            <h5 class="card-title text-dark">{{ $new->title }}</h5>
                                            <span class="card-text text-muted"> {{ $new->created_at->diffForHumans() }}
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- pagination -->
                    <section class="pt-4 pb-0" data-aos="fade-up">
                        {!! $news->render() !!}
                    </section>
                    <!-- end pagination -->
                </div>
            </div>
        </div>
    </section>

    @include('front.layouts._FAQ')
    @include('front.layouts._CTA')

@stop
