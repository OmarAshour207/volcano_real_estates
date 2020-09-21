<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @php
        session('lang') ?? session()->put('lang', app()->getLocale());
    @endphp


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="{{ setting('meta_keywords') }}" />
    <meta name="author" content="{{ setting('meta_author') }}" />
    <meta name="description" content="{{ setting('meta_description') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('site/images/icons/favicon.png') }}" />

    <!-- PAGE TITLE HERE -->
    <title> {{ setting('website_title') }} </title>

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="{{ asset('site/lib/css/nivo-slider.css') }}" />
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('site/css/core.css') }}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('site/css/shortcode/shortcodes.css') }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('site/css/responsive.css') }}">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset('site/css/custom.css') }}">

    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="{{ asset('site/css/style-customizer.css') }}">
    <link href="#" data-style="styles" rel="stylesheet">

    <!-- Modernizr JS -->
    <script src="{{ asset('site/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    @if(session('lang') == 'ar')
    @else
    @endif

    @stack('styles')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('google_analytics') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '{{ setting('google_analytics') }}');
    </script>

</head>
<body>
<div class="wraper">

    @include('site.first.layouts.header')

    @yield('content')

    @include('site.first.layouts.footer')

</div>

<!-- jquery latest version -->
<script src="{{ asset('site/js/vendor/jquery-3.1.1.min.js') }}"></script>
<!-- Bootstrap framework js -->
<script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
<!-- Nivo slider js -->
<script src="{{ asset('site/lib/js/jquery.nivo.slider.js') }}"></script>
<!-- ajax-mail js -->
<script src="{{ asset('site/js/ajax-mail.js') }}"></script>
<!-- All js plugins included in this file. -->
<script src="{{ asset('site/js/plugins.js') }}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{ asset('site/js/main.js') }}"></script>

@stack('scripts')

</body>
</html>
