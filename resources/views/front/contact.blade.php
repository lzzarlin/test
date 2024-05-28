@extends('front.layouts.inner_base')
@section('keywords', 'hello')
@section('description', '待填入')

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
    <main class="main py-5 my-5">
        <section class="slice slice-xl">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center pt-lg-md">
                            <h2 class="heading h1 mb-4">
                                Wanna Contact Us?
                            </h2>
                            <p class="lead lh-180">
                                We are a professional manufacturer of desiccants, adsorbents, and catalysts. Please feel
                                free to contact us for cooperation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="slice slice-lg py-5 mt-5">
            <div class="container">
                <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space">
                    <div class="col-lg-6">
                        <h3 class="heading heading-3 strong-300">
                            国际贸易部门
                        </h3>
                        <p class="lead mt-4 mb-4">
                            Email: <a href="#">support@webpixels.io</a>
                            <br>
                            Tel: 0755.222.333
                        </p>
                        <p class="">
                            Probably the most complete UI kit out there. Multiple functionalities and controls added,
                        </p>
                    </div>
                    <div class="col-lg-6 ml-lg-auto">
                        <h3 class="heading heading-3 strong-300">
                            国内贸易部门
                        </h3>
                        <p class="lead mt-4 mb-4">
                            Email: <a href="#">support@webpixels.io</a>
                            <br>
                            Tel: 0755.222.333
                        </p>
                        <p class="">
                            安徽省 滁州市 明光市 石坝镇
                        </p>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space">
                    <div class="col-lg-12">
                        <h3 class="heading h3 mb-4">Send us a message</h3>
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Name" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email address" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="Your message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary px-4">
                                    Send message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop
