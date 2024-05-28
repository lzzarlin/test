<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>广计集团有限公司</title>
    <!-- CSS files -->
    <link href="/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
    @yield('style')
</head>

<body>
    <script src="/dist/js/demo-theme.min.js"></script>
    <div class="page">
        @auth
            <!-- Sidebar -->
            @include('layouts.sidebar')
            <!-- Navbar -->
            @include('layouts.header')
        @endauth

        <div class="page-wrapper">
            <!-- Page body -->
            <div class="page-body">

                @include('shared._messages')
                
                @yield('content')
            </div>
            <!-- Page footer -->
            @include('layouts.admin_footer')
        </div>
    </div>
    <!-- Tabler Core -->
    <script src="/dist/js/tabler.min.js" defer></script>
    <script src="/dist/js/demo.min.js" defer></script>
    @yield('javascript')
</body>

</html>
