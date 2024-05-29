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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <a href=""><img src="/front/img/11.jpg" class="card-img-top">
                                <div class="card-body text-center">
                                    <h3 class="heading h5 mb-1">
                                        <span class="d-block"><a href="">Molecular Cieve</a></span>
                                    </h3>
                                    <p class="mt-2">Creator of Boomerang, developer at Webpixels.</p>
                                    {{-- <a href="https://instagram.com/extrabright" target="_blank"
                                        class="btn btn-sm btn-primary">See More</a> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <a href=""><img src="/front/img/22.jpg" class="card-img-top"></a>
                            <div class="card-body text-center">
                                <h3 class="heading h5 mb-1">
                                    <span class="d-block"><a href="">Desiccant</a></span>
                                </h3>
                                <p class="mt-2">Design at Webpixels, creator of Boomerang.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <a href=""><img src="/front/img/33.jpg" class="card-img-top"></a>
                            <div class="card-body text-center">
                                <h3 class="heading h5 mb-1">
                                    <span class="d-block"><a href="">Decoloration</a></span>
                                </h3>
                                <p class="mt-2">Clean code developer, creator of Boomerang</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <a href=""><img src="/front/img/44.jpg" class="card-img-top"></a>
                            <div class="card-body text-center">
                                <h3 class="heading h5 mb-1">
                                    <span class="d-block"><a href="">Molecular Sieve Powder</a></span>
                                </h3>
                                <p class="mt-2">Clean code developer, creator of Boomerang</p>
                            </div>
                        </div>
                    </div>
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
                                the "hometown of Attapulgite". We are professional manufacturer with a 13 year history,
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
                                            <img class="card-img z-depth-2" src="/front/img/anli1.jpg"
                                                style="margin-top: -30px;" alt="Homapage">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-2"><a href="">13X molecular sieve</a></h5>
                                        <p class="card-text ">13X Application in the field of petrochemicals</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-lighter mb-lg mb-lg-0">
                                    <div class="px-3">
                                        <img class="card-img z-depth-2" src="/front/img/anli2.jpg"
                                            style="margin-top: -30px;" alt="Homapage">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-2">4A molecular sieve</h5>
                                        <p class="card-text">4A brake specific molecular sieve</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-lighter mb-lg mb-lg-0">
                            <div class="px-3">
                                <img class="card-img z-depth-2" src="/front/img/anli3.jpg"
                                    style="margin-top: -30px;" alt="Homapage">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-2">XH-7 XH-9 Refrigerated molecular sieve</h5>
                                <p class="card-text">Used for refrigeration systems such as air conditioning and refrigerators
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-lighter mb-lg mb-lg-0">
                            <div class="px-3">
                                <img class="card-img z-depth-2" src="/front/img/anli4.jpg"
                                    style="margin-top: -30px;" alt="Homapage">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-2">3A molecular sieve</h5>
                                <p class="card-text">Used for insulating glass</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-lighter mb-lg mb-lg-0">
                            <div class="px-3">
                                <img class="card-img z-depth-2" src="/front/img/anli1.jpg"
                                    style="margin-top: -30px;" alt="Homapage">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-2">molecular sieve powder</h5>
                                <p class="card-text">details</p>
                            </div>
                        </div>
                    </div>
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
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="/front/img/transport.png" class="img-fluid img-center rounded z-depth-2">
                    <div class="pt-4">
                        <span class="text-muted">May 15, 2024</span>
                        <a href="#" class="heading h4 d-block mt-1">shipment</a>
                        <p class="mt-3">
                            When we strive to become better than we are, everything around us becomes better, too.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="/front/img/transport.png" class="img-fluid img-center rounded z-depth-2">
                    <div class="pt-4">
                        <span class="text-muted">May 15, 2024</span>
                        <a href="#" class="heading h4 d-block mt-1">shipment</a>
                        <p class="mt-3">
                            When we strive to become better than we are, everything around us becomes better, too.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="/front/img/transport.png" class="img-fluid img-center rounded z-depth-2">
                    <div class="pt-4">
                        <span class="text-muted">May 15, 2024</span>
                        <a href="#" class="heading h4 d-block mt-1">shipment</a>
                        <p class="mt-3">
                            When we strive to become better than we are, everything around us becomes better, too.
                        </p>
                    </div>
                </div>
            </div>
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
