@extends('front.layouts.inner_base')
@section('title', $news->title)
@section('keywords', $news->kewords)
@section('description', $news->description)

@section('style')
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,600,800" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!-- Main CSS -->
    <link href="/front/css/main.css" rel="stylesheet" />
    <!-- Animation CSS -->
    <link href="/front/css/aos.css" rel="stylesheet" />

    <link href="/front/css/product.css" rel="stylesheet">
@endsection

@section('main')
    <!-- Main -->
    <div class="container pt-1 pb-5" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: aliceblue;">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/news">News</a></li>
                <li class="breadcrumb-item"><a href="/newss/{{ $news->category->slug }}">{{ $news->category->name }}</a>
                </li>
            </ol>
        </nav>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <article>
                    <h1 class="mb-3 text-center">{{ $news->title }}</h1>
                    <p class="text-center"><span class="text-muted">{{ $news->created_at }} Post
                            By{{ $news->user->name }}</span></p>
                    <p class="lead mt-3">
                        {{ $news->description }}
                    </p>
                    {!! $news->body !!}
                </article>

                <!-- pagination -->
                <ul class="pagination ">
                    @if ($pre)
                        <li class="page-item page-prev">
                            <a class="page-link" href="/news/{{ $pre->slug }}">
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
                            <a class="page-link" href="/news/{{ $next->slug }}">
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
                <!-- pagination -->
            </div>
            <div class="col-md-4">
                <div class="row cols-md-space cols-sm-space cols-xs-space">
                    @foreach ($relnews as $relnew)
                        <div class="col-lg-12">
                            <div class="card border-0">
                                <img src="{{ $relnew->thumpic }}" class="img-fluid img-center rounded z-depth-2">
                                <div class="pt-4">
                                    <span class="text-muted">{{ $relnew->created_at }}</span>
                                    <a href="#" class="heading h4 d-block mt-1">{{ $relnew->title }}</a>
                                    <p class="mt-3">
                                        {{ $relnew->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Main -->
    @include('front.layouts._FAQ')
    @include('front.layouts._CTA')

@stop
