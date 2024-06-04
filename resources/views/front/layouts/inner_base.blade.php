<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/front/img/favicon.ico">
    <link rel="icon" type="image/png" href="/front/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title', 'molecular cieve manufacturer in China - GuangJi')</title>
    <meta name="keywords" content="@yield('keywords', 'molecular cieve manufacturer in China')" />
    <meta name="description" content="@yield('description', 'molecular cieve manufacturer in China')" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    @yield('style')
</head>

<body>
    @include('front.layouts._inner_header')

    @yield('main')

    @include('front.layouts._footer')

    <!--------------------------------------JAVASCRIPTS--------------------------------------->
    <script src="/front/js/jquery.min.js" type="text/javascript"></script>
    <script src="/front/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/front/js/tabler.js" type="text/javascript"></script>
    <!-- Animation -->
    <script src="/front/js/aos.js" type="text/javascript"></script>
    <noscript>
        <style>
            *[data-aos] {
                display: block !important;
                opacity: 1 !important;
                visibility: visible !important;
            }
        </style>
    </noscript>
    <script>
        AOS.init({
            duration: 700
        });
    </script>

    <!-- Disable animation on less than 1200px, change value if you like -->
    <script>
        AOS.init({
            disable: function() {
                var maxWidth = 1200;
                return window.innerWidth < maxWidth;
            }
        });
    </script>

</body>

</html>
