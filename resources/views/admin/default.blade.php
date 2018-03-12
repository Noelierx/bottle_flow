<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('admin.partials.head')
    </head>
    <body>
        @include('admin.partials.nav')
        @yield('content')
        @include('admin.partials.footer')
    </body>
</html>