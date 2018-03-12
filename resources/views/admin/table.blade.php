@extends('admin.default')

@section('content')
    @yield('top-link')
    <table>
        <thead>
            @yield('thead')
        </thead>
        <tbody>
            @yield('tbody')
        </tbody>
    </table>
    @yield('pagination')
@endsection