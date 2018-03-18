<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials.head')
    </head>
    <body>
        @include('partials.header')
        <div class="site-hero_2 parallax bg-dark">
            <div class="page-title">
                <div class="big-title white-text">@yield('hero-title')</div>
                <div class="small-title white-text">@yield('hero-subtitle')</div>
            </div>
        </div>
        @include('partials.error')
        @yield('content')
        @include('partials.footer')
    </body>
</html>