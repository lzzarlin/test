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

    <!-- Animation CSS -->
    <link href="/front/css/aos.css" rel="stylesheet" />
    <link href="/front/css/index.css" rel="stylesheet">
    <link href="/front/css/main.css" rel="stylesheet" />
@endsection

@section('main')
    <!-- Main -->
    <div class="container pt-1 pb-5" data-aos="fade-up">
        <section class="slice py-5" data-delimiter="1">
            <div class="container">
                <div class="row cols-xs-space cols-sm-space align-items-center">
                    {{-- <div class="col-md-6 col-lg-3">
                        <img src="/front/img/img-2-1000x900.jpg" class="img-center img-fluid rounded z-depth-3">
                    </div>
                    <div class="col-md-6 col-lg-9"> --}}
                    <div class="col-lg-12">
                        <div class="pr-md-4 text-center">
                            {{-- <h3 class="heading h3">About Guangji Industrial</h3> --}}
                            <p class="lead mt-4" style="text-align: start; text-indent:2rem;">
                                Shanghai Guangji Industrial Co., Ltd. is located in Mingguang City, Anhui Province, known as
                                the "hometown of Attapulgite". We are professional manufacturer with a 18 year history,
                                covering an area of over 30000 square meters and high production capacity. It is a
                                technology export-oriented enterprise that integrates molecular sieve production, new
                                technology product development, and marketing. We have a strong factory area, multiple
                                processing plants, complete laboratories, and 4 production lines.</p>
                            <p class="lead mt-4" style="text-align: start; text-indent:2rem;">
                                Main products include various molecular sieves,activated molecular sieve powder, activated
                                alumina,desiccant clay，all products passed the ISO9001: 2008 quality management system
                                certification .Guangji is based on the production of high-tech content,high value-added
                                attapulgite products,high quality molecular sieve products,the company’s products sell well
                                in domestic and foreign markets .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="slice slice-lg" data-delimiter="1">
            <div class="container">
                <div class="mb-5 text-center">
                    <h3 class="heading h3">Our Factory</h3>
                </div>
                <div class="row cols-xs-space cols-sm-space cols-md-space" data-aos="fade-up">
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <img src="/front/img/factory1.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-dark text-center">Far view of the factory area</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <img src="/front/img/factory2.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-dark text-center">Close view of the factory area</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-5">
                        <div class="card">
                            <img src="/front/img/factory3.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-dark text-center">Appearance of the factory building</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-5">
                        <div class="card">
                            <img src="/front/img/factory4.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-dark text-center">Production workshop</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="slice slice-lg" data-delimiter="1">
            <div class="container">
                <div class="mb-5 text-center">
                    <h3 class="heading h3">Our Laboratory</h3>
                </div>
                <div class="row cols-xs-space cols-sm-space cols-md-space" data-aos="fade-up">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="/front/img/laboratory1.jpg" class="card-img-top">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="/front/img/laboratory2.jpg" class="card-img-top">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="/front/img/laboratory3.jpg" class="card-img-top">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="/front/img/laboratory4.jpg" class="card-img-top">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="slice slice-lg" data-delimiter="1">
            <div class="container">
                <div class="mb-5 text-center">
                    <h3 class="heading h3">Our Certificate</h3>
                </div>
                <div class="row cols-xs-space cols-sm-space cols-md-space" data-aos="fade-up">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div class="card">
                            <img src="/front/img/zizhi/9001.jpg" class="card-img-top">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div class="card">
                            <img src="/front/img/zizhi/9001-1.jpg" class="card-img-top">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div class="card">
                            <img src="/front/img/zizhi/cjyyzz.jpg" class="card-img-top">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div class="card">
                            <img src="/front/img/zizhi/jzjybg1.jpg" class="card-img-top">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div class="card">
                            <img src="/front/img/zizhi/sgs2.jpg" class="card-img-top">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div class="card">
                            <img src="/front/img/zizhi/jybg.jpg" class="card-img-top">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Main -->
    @include('front.layouts._FAQ')
    @include('front.layouts._CTA')

@stop
