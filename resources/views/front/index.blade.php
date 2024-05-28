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
    <!-- Demo CSS -->
    <link href="/front/css/index.css" rel="stylesheet" />
    <!-- <link href="css/demo.css" rel="stylesheet" /> -->
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
                <div class="row cols-xs-space cols-sm-space cols-md-space"  data-aos="fade-up">
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
                                Shanghai Guangji Industrial Co., Ltd. is located in Mingguang City, Anhui Province, known as the "hometown of Attapulgite". It is a professional manufacturer with a 13 year history, covering an area of over 25000 square meters and high production capacity. It is a technology export-oriented enterprise that integrates molecular sieve production, new technology product development, and marketing. We have a strong factory area, multiple processing plants, complete laboratories, and 4 production lines.
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
                                    <div class="px-3"><a href="#">
                                            <img class="card-img z-depth-2" src="/front/img/screen-homepage.jpg"
                                                style="margin-top: -30px;" alt="Homapage"></a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-2"><a href="">Homepage</a></h5>
                                        <p class="card-text ">More than you need to create a beautiful landing page.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-lighter mb-lg mb-lg-0">
                                    <div class="px-3">
                                        <img class="card-img z-depth-2" src="/front/img/screen-about.jpg"
                                            style="margin-top: -30px;" alt="Homapage">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-2">About us</h5>
                                        <p class="card-text">All the features for a complete company description.</p>
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
                                <img class="card-img z-depth-2" src="/front/img/screen-cover.jpg"
                                    style="margin-top: -30px;" alt="Homapage">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-2">Cover</h5>
                                <p class="card-text">A one-page template for building simple and beautiful home pages.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-lighter mb-lg mb-lg-0">
                            <div class="px-3">
                                <img class="card-img z-depth-2" src="/front/img/screen-contact.jpg"
                                    style="margin-top: -30px;" alt="Homapage">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-2">Contact</h5>
                                <p class="card-text">List your company information next to a nice contact form.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-lighter mb-lg mb-lg-0">
                            <div class="px-3">
                                <img class="card-img z-depth-2" src="/front/img/screen-login.jpg"
                                    style="margin-top: -30px;" alt="Homapage">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-2">Sign in</h5>
                                <p class="card-text">Custom form layout and design for a simple sign in form.</p>
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
        <div class="row cols-md-space cols-sm-space cols-xs-space"  data-aos="fade-up">
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="/front/img/img-1-800x600.jpg" class="img-fluid img-center rounded z-depth-2">
                    <div class="pt-4">
                        <span class="text-muted">Oct 15, 2018</span>
                        <a href="#" class="heading h4 d-block mt-1">Listen to the nature</a>
                        <p class="mt-3">
                            When we strive to become better than we are, everything around us becomes better, too.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="/front/img/img-2-800x600.jpg" class="img-fluid img-center rounded z-depth-2">
                    <div class="pt-4">
                        <span class="text-muted">Oct 15, 2018</span>
                        <a href="#" class="heading h4 d-block mt-1">Listen to the nature</a>
                        <p class="mt-3">
                            When we strive to become better than we are, everything around us becomes better, too.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="/front/img/img-3-800x600.jpg" class="img-fluid img-center rounded z-depth-2">
                    <div class="pt-4">
                        <span class="text-muted">Oct 15, 2018</span>
                        <a href="#" class="heading h4 d-block mt-1">Listen to the nature</a>
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
    <!-------------------------------------FAQ-------------------------------------->
    <div class="container pt-5 pb-5" data-aos="fade-up">
        <div class="text-center pt-3 pb-4">
            <h2>Frequently Asked Questions</h2>
            <p class="text-muted">
                Transparent answers, licensing and lore ipsum super funny.
            </p>
        </div>
        <div class="row gap-y justify-content-center">
            <div class="col-md-5">
                <h5>What is Anchor Bootstrap UI Kit?</h5>
                <p class="text-muted">
                    Anchor Bootstrap UI Kit is a set of polished components that you can use for building your own
                    template. This page is built with it.
                </p>
            </div>
            <div class="col-md-5">
                <h5>Is it updated to Bootstrap?</h5>
                <p class="text-muted">
                    Yes, Anchor Bootstrap UI Kit is built with the latest Bootstrap version and will be updated
                    whenever
                    a new version is released.
                </p>
            </div>
            <div class="col-md-5">
                <h5>Can I use it for commercial projects?</h5>
                <p class="text-muted">
                    Absolutely! Use Anchor Bootstrap UI Kit for any personal and commercial projects.
                </p>
            </div>
            <div class="col-md-5">
                <h5>Is there a way to thank you?</h5>
                <p class="text-muted">
                    That is very nice of you. Sure, I would gladly accept a cup of coffee <a
                        href="https://www.wowthemes.net/donate/">here</a>.
                </p>
            </div>
        </div>
    </div>
    <!-- End FAQ -->
    <!--------------------------------------CTA--------------------------------------->
    <div class="container pt-4 pb-5 mb-5" data-aos="fade-up">
        <div class="pb-4 text-center">
            <h2>Ready? <strong><span class="text-secondary">Get</span> a free quote!</strong></h2>
            <p class="text-muted">
                Please feel free to inquire about various issues related to our products.
            </p>
        </div>
        <form class="row justify-content-center">
            <div class="col-md-3">
                <input type="text" class="form-control input-round-md w-100 form-control-lg"
                    placeholder="First name*">
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control input-round-md w-100 form-control-lg"
                    placeholder="E-mail address*">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-info btn-round-md btn-lg w-100">Submit</button>
            </div>
        </form>
    </div>
    <!-- End CTA -->

@stop
