@extends('front.layouts.base')

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
    <link href="/front/css/index.css" rel="stylesheet" />
@stop

@section('header')
    @include('front.layouts._index_header')
@stop

@section('main')
    <main class="container">
        <section class="slice slice-lg" data-delimiter="1">
            <div class="container">
                <div class="mb-md text-center">
                    <h3 class="heading h3">Our main product at present
                    </h3>
                    <div class="fluid-paragraph text-center mt-4">
                        <p class="lead lh-180">At present, Our company's main products include four series: molecular
                            sieves, desiccant raw materials, adsorbents, and attapulgite products...</p>
                    </div>
                </div>
                <div class="row cols-xs-space cols-sm-space cols-md-space" data-aos="fade-up">
                    @foreach ($products as $product)
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <a href="/product/{{ $product->slug }}"><img src="{{ $product->thumpic }}"
                                        class="card-img-top">
                                    <div class="card-body text-center">
                                        <h3 class="heading h5 mb-1">
                                            <span class="d-block"><a
                                                    href="/product/{{ $product->slug }}">{{ $product->name }}</a></span>
                                        </h3>
                                        <p class="mt-2">{{ $product->application }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="slice slice-xl" data-delimiter="1">
            <div class="container">
                <div class="row cols-xs-space cols-sm-space align-items-center">
                    <div class="col-md-6 order-md-2 ml-lg-auto">
                        <img src="/front/img/img-2-1000x900.jpg" class="img-center img-fluid rounded z-depth-3">
                    </div>
                    <div class="col-md-6 col-lg-5 order-md-1">
                        <div class="pr-md-4 text-center">
                            <h3 class="heading h3">
                                About Guangji Industrial
                            </h3>
                            <p class="lead mt-4">
                                Shanghai Guangji Industrial Co., Ltd. is located in Mingguang City, Anhui Province, known as
                                the "hometown of Attapulgite". We are professional manufacturer with a 16 year history,
                                covering an area of over 25000 square meters and high production capacity. It is a
                                technology export-oriented enterprise that integrates molecular sieve production, new
                                technology product development, and marketing. We have a strong factory area, multiple
                                processing plants, complete laboratories, and 4 production lines.
                            </p>
                            <a href="/about" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="slice slice-xl pb-5">
            <div class="container">
                <div class="row align-items-center mb-lg-lg">
                    <div class="col-lg-4">
                        <div class="mb-lg mb-lg-0 text-center text-lg-left">
                            <h3 class="heading h3">Applications</h3>
                            <p class="mt-3">Our products are widely used in various industries, here are some examples.
                            </p>
                            <a href="#" class="btn btn-primary">More</a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card bg-lighter mb-lg mb-lg-0">
                                    <div class="px-3">
                                        <img class="card-img z-depth-2"
                                            src="/uploads/images/anli/_1717487719_iNVm5k2p2D.jpg" style="margin-top: -30px;"
                                            alt="Application of Molecular Sieves in Air Conditioning Refrigeration">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-2"><a href="/application/refrigerant-drying">Air Conditioning Refrigeration Systems</a></h5>
                                        <p class="card-text ">In Air conditioning refrigeration systems, molecular sieves,
                                            as an efficient adsorbent, play a crucial role.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-lighter mb-lg mb-lg-0">
                                    <div class="px-3">
                                        <img class="card-img z-depth-2"
                                            src="/uploads/images/anli/_1717461109_EZfuPtNs9W.jpg" style="margin-top: -30px;"
                                            alt="Polyurethane Dehydration">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-2"><a
                                                href="/application/polyurethane-dehydration">Polyurethane Dehydration</a>
                                        </h5>
                                        <p class="card-text">In polyurethane production, molecular sieve powder used to
                                            remove residual moisture from the reactants and the reaction environment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($anlis as $anli)
                        <div class="col-md-4">
                            <div class="card bg-lighter mb-lg mb-lg-0">
                                <a href="/application/{{ $anli->slug }}" target="_blank">
                                    <div class="px-3">
                                        <img class="card-img z-depth-2" src="{{ $anli->thumpic }}"
                                            style="margin-top: -30px;" alt="{{ $anli->title }}">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-2 text-center">{{ $anli->title }}</h5>
                                        <p class="card-text">{{ $anli->description }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    <section class="slice bg-primary-blue mt-5">
        <div class="container">
            <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space text-center text-lg-left">
                <div class="col-lg-7">
                    <h1 class="heading h2 text-white strong-500">
                        Need more information about our products ?
                    </h1>
                    <p class="lead text-white mb-0">Guangji Industrial has a very complete product line, with various
                        spherical molecular sieves, activated molecular sieve powders, activated alumina and other
                        products.</p>
                </div>
                <div class="col-lg-3 ml-lg-auto">
                    <div class="text-center text-md-right">
                        <a href="#" class="btn bg-secondary-white">
                            Contact us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Post Start -->
    <div class="container mt-5 ">
        <div class="mb-5 text-center">
            <h3 class="heading h2">Stay tuned with our company news</h3>
            <div class="fluid-paragraph text-center">
                <p class="lead mb-0">Daily insights from our company</p>
            </div>
        </div>
        <div class="row cols-md-space cols-sm-space cols-xs-space" data-aos="fade-up">
            @foreach ($news as $new)
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ $new->thumpic }}" class="img-fluid img-center rounded z-depth-2">
                        <div class="pt-4">
                            <span class="text-muted">{{ $new->created_at }}</span>
                            <a href="/news/{{ $new->slug }}" class="heading h4 d-block mt-1">{{ $new->title }}</a>
                            <p class="mt-3">
                                {{ $new->description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-5">
            <a href="/news" class="text-uppercase">
                All posts
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
    <!-- End Post -->
    @include('front.layouts._FAQ')
    <section class="slice">
        <div class="container">
            <div class="mb-md text-center">
                <h3 class="heading h2">Trusted by over <span class="text-primary">1000</span> clients</h3>
                <div class="fluid-paragraph mt-3">
                    <p class="lead">Endeavor to secure quality control from source.</p>
                </div>
            </div>
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-md-2 col-6">
                    <div class="px-4 py-4 border rounded">
                        <img src="/front/img/corps/shihua.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="px-4 py-4 border rounded">
                        <img src="/front/img/corps/shiyou.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="px-4 py-4 border rounded">
                        <img src="/front/img/corps/haiyou.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="px-4 py-4 border rounded">
                        <img src="/front/img/corps/hesheng.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="px-4 py-4 border rounded">
                        <img src="/front/img/corps/kao.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="px-4 py-4 border rounded">
                        <img src="/front/img/corps/airproducts.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
