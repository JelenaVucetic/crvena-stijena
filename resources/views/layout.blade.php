<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crvena Stijena</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link href="{{ asset('plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body class="antialiased">
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
@include('includes.navbar')
<!--End Main Header -->
    @if(Route::currentRouteName() == 'index')
        @include('includes.header-home')
    @elseif((Route::currentRouteName() == 'visit') || (Route::currentRouteName() == 'how-to-get-there'))
        @include('includes.header-visit')
        @elseif((Route::currentRouteName() == 'importance') || (Route::currentRouteName() == 'landscape')
                                                || (Route::currentRouteName() == 'geology') || (Route::currentRouteName() == 'age-of-the-site')
                                                || (Route::currentRouteName() == 'who-lived') || (Route::currentRouteName() == 'archaeological-excavations')
                                                || (Route::currentRouteName() == 'finds'))
        @include('includes.header-informations')
        @elseif((Route::currentRouteName() == 'goals') || (Route::currentRouteName() == 'documentation')
                                                || (Route::currentRouteName() == 'neanderthal-fire-use') || (Route::currentRouteName() == 'neanderthal-lithic-technology')
                                                || (Route::currentRouteName() == 'hunting-and-meat-consumption') || (Route::currentRouteName() == 'paleoenvironmental-reconstruction')
                                                || (Route::currentRouteName() == 'geoarchaeology'))
        @include('includes.header-current-research')
        @elseif((Route::currentRouteName() == 'books') || (Route::currentRouteName() == 'journal-articles'))
        @include('includes.header-publication')
        @elseif((Route::currentRouteName() == 'village') || (Route::currentRouteName() == 'monastery'))
        @include('includes.header-petrovici')
        @elseif((Route::currentRouteName() == 'scientific-team') || (Route::currentRouteName() == 'national-museum') || (Route::currentRouteName() == 'finding-sources'))
        @include('includes.header-about-us')
    @else
        @include('includes.header-contact')
    @endif

    @yield('content')

    @include('includes.footer')
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/isotope.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
