<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{ asset('Assets/css/bootstrap.min.css') }}">
        <link href="{{ asset('Assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('Assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        @if(Config::get('syntara::config.direction') === 'rtl')
            <link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/bootstrap-rtl.min.css') }}" media="all">
            <link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/base-rtl.css') }}" media="all">
        @endif
        <link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/toggle-switch.css') }}">

        <link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/base.css') }}" media="all">
        <link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/styles.css') }}">
         @if(Config::get('syntara::config.direction') === 'rtl')
            <link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/base-rtl.css') }}" media="all">
        @endif

        @if (!empty($favicon))
        <link rel="icon" {{ !empty($faviconType) ? 'type="' . $faviconType . '"' : '' }} href="{{ asset('Assets/ico/favicon.ico') }}">
        @endif

        <script src="{{ asset('Assets/js/jquery-2.1.3.min.js') }}"></script>
        <script src="{{ asset('Assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('packages/mrjuliuss/syntara/assets/js/dashboard/base.js') }}"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ (!empty($siteName)) ? $siteName : "Syntara"}} - {{isset($title) ? $title : '' }}</title>
    </head>
    <body>
        @include(Config::get('syntara::views.header'))
        <!-- {{ isset($breadcrumb) ? Breadcrumbs::create($breadcrumb) : ''; }} -->
        <div id="content">
            @yield('content')
        </div>
    </body>
</html>
