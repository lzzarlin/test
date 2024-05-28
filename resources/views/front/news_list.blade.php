@extends('front.layouts.inner_base')
@section('keywords','hello')
@section('description','待填入')

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
                <div class="col-lg-12">
                    <div class="row gap-y">
                        <div class="col-lg-12">
                            <h4>Our Latest News</h4>
                        </div>
                    </div>
                    <div class="row gap-y">
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <img class="img-card-top" src="front/img/blog3.jpg">
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title text-dark">10 Steps for a Successful Business without
                                            Investing
                                            Money</h5>
                                        <span class="card-text text-muted">
                                            Posted on May 24, 2019 by Dalida </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <img class="img-card-top" src="front/img/blog4.jpg">
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title text-dark">Happy wife is happy life says life experts
                                        </h5>
                                        <span class="card-text text-muted">
                                            Posted on May 24, 2019 by Sandra </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <img class="img-card-top" src="front/img/blog5.jpg">
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title text-dark">Pack your bags and see the world today</h5>
                                        <span class="card-text text-muted">
                                            Posted on May 24, 2019 by Mike </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <img class="img-card-top" src="front/img/blog6.jpg">
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title text-dark">Whatever works is what's best,but not always
                                        </h5>
                                        <span class="card-text text-muted">
                                            Posted on May 24, 2019 by Mary </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <img class="img-card-top" src="front/img/blog7.jpg">
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title text-dark">Social media and its impact on your business
                                        </h5>
                                        <span class="card-text text-muted">
                                            Posted on May 24, 2019 by John </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <img class="img-card-top" src="front/img/blog8.jpg">
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title text-dark">Summer holidays are the best way to relax</h5>
                                        <span class="card-text text-muted">
                                            Posted on May 24, 2019 by Sal </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pagination -->
                    <section class="pt-4 pb-0" data-aos="fade-up">
                        {{-- <h3 class="h5 mb-4 font-weight-bold">Pagination</h3> --}}
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-angle-left"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </section>
                    <!-- end pagination -->
                </div>

            </div>
            <!-- Post -->
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
                        <img class="card-img-right flex-auto d-none d-md-block" src="front/img/blog1.jpg">
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
                        <img class="card-img-right flex-auto d-none d-md-block" src="front/img/blog2.jpg">
                    </div>
                </div>
            </div>
            <!-- End Post -->
        </div>
    </section>

    @include('front.layouts._FAQ')
    @include('front.layouts._CTA')

@stop
