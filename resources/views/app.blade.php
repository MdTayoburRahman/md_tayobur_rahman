<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index, follow">

    <title>{{ $seo->title }}</title>
    <meta name="google-site-verification" content="EpT2NHy1CLHBQexIJPh6TtnH-QtZWvI7LljDrQmWs84" />
    <meta name="yandex-verification" content="e9d509753d39b36a" />
    <meta name="description" content="{{ $seo->description }}" />
    <meta name="keywords" content="{{ $seo->keywords }}" />
    <meta property="og:site_name" content="{{ $seo->ogSiteName }}" />
    <meta property="og:url" content="{{ $seo->ogUrl }}" />
    <meta property="og:title" content="{{ $seo->ogTitle }}" />
    <meta property="og:image" content="{{ asset($seo->ogImage) }}" />
    <meta property="og:description" content="{{ $seo->ogDescription }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $seo->ogTitle }}">
    <meta property="og:description" content="{{ $seo->description }}">
    <meta property="og:image" content="{{ asset($seo->ogImage) }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seo->ogTitle }}">
    <meta name="twitter:description" content="{{ $seo->description }}">
    <meta name="twitter:image" content="{{ asset($seo->ogImage) }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/profile.png') }}" />
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css') }}"
        rel="stylesheet" />
    @yield('link')
    @yield('style')
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/axios.min.js') }}"></script>

</head>

<body class="d-flex flex-column h-100">
    @include('components.navbar')
    @include('components.loader')
    <div class="" id="content-div">
        @yield('content')
    </div>
    @include('components.footer')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @yield('script')
</body>

</html>
