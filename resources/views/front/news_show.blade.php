@extends('front.layouts.inner_base')
@section('title', $news->title)
@section('keywords', $news->kewords)
@section('description', $news->description)

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
    <!-- Main -->
    <div class="container pt-1 pb-5" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: aliceblue;">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">News</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$news->title}}</li>
            </ol>
        </nav>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <article>
                    <h1 class="mb-5">{{$news->title}}</h1>
                    <p class="lead">
                        {{$news->description}}
                    </p>
                    {!! $news->body !!}
                </article>

                <!-- pagination -->
                <ul class="pagination">
                    <li class="page-item page-prev disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <div class="page-item-subtitle">previous</div>
                            <div class="page-item-title">Getting started</div>
                        </a>
                    </li>
                    <li class="page-item page-next">
                        <a class="page-link" href="#">
                            <div class="page-item-subtitle">next</div>
                            <div class="page-item-title">Breadcrumbs</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="row cols-md-space cols-sm-space cols-xs-space">
                    <div class="col-lg-12">
                        <div class="card border-0">
                            <img src="/front/img/img-1-800x600.jpg" class="img-fluid img-center rounded z-depth-2">
                            <div class="pt-4">
                                <span class="text-muted">Oct 15, 2018</span>
                                <a href="#" class="heading h4 d-block mt-1">Listen to the nature</a>
                                <p class="mt-3">
                                    When we strive to become better than we are, everything around us becomes better,
                                    too.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card border-0">
                            <img src="/front/img/img-2-800x600.jpg" class="img-fluid img-center rounded z-depth-2">
                            <div class="pt-4">
                                <span class="text-muted">Oct 15, 2018</span>
                                <a href="#" class="heading h4 d-block mt-1">Listen to the nature</a>
                                <p class="mt-3">
                                    When we strive to become better than we are, everything around us becomes better,
                                    too.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card border-0">
                            <img src="/front/img/img-3-800x600.jpg" class="img-fluid img-center rounded z-depth-2">
                            <div class="pt-4">
                                <span class="text-muted">Oct 15, 2018</span>
                                <a href="#" class="heading h4 d-block mt-1">Listen to the nature</a>
                                <p class="mt-3">
                                    When we strive to become better than we are, everything around us becomes better,
                                    too.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main -->
    @include('front.layouts._FAQ')
    @include('front.layouts._CTA')

@stop
