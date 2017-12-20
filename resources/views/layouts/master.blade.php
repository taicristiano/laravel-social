<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>@yield('title')</title>

        @include('layouts.component.meta')
        @yield('meta')

        @include('layouts.component.head')
        @yield('head')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @yield('content')
            @include('layouts.component.modal-warning')
        </div>
        <!-- Scripts -->
        @include('layouts.component.script')
        @yield('script')
    </body>
</html>
