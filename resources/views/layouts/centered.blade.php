<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    <head>
        @include('front::layouts.includes.head')
    </head>
    <body class="min-vh-100 d-flex flex-column justify-content-center">
        <div id="website" class="min-vh-100 d-flex flex-column justify-content-between">
            @yield('navbar')
            @yield('content')
            @yield('footer')
        </div>
        <!-- Scripts -->
        @stack('before-scripts')
        @if (config('app.env') == 'local')
            <script src="{{ asset('js/front.js') }}"></script>
        @else
            <script src="{{ asset(mix('js/front.js')) }}"></script>
        @endif
        @stack('after-scripts')
    </body>
</html>

