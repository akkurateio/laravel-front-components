<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    <head>
        @include('front::layouts.includes.head')
    </head>
    <body class="min-vh-100 d-flex flex-column justify-content-center {{ agent()->isMobile() ? 'website-mobile' : 'website-desktop' }}">
        @includeIf('googletagmanager::body')
        @yield('pre')
        <div id="website" class="min-vh-100">

            @yield('header')
            @yield('content')

            @component('front::footers.desktop', [
                'wrapperClass' => null,
            ])@endcomponent

            <div class="site__bottom-actions">
                <cta-contact-us prop-class="bg-primary chatbot rounded-full border-0 animate__animated animate__fadeInRight" prop-aria="Contactez-nous">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m22 0h-20c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h14l6 4v-4c1.1 0 2-.9 2-2v-16c0-1.1-.9-2-2-2zm.5 18c0 .3-.2.5-.5.5h-1.5v1.5 1.2l-3.7-2.4-.4-.3h-.4-14c-.3 0-.5-.2-.5-.5v-16c0-.3.2-.5.5-.5h20c.3 0 .5.2.5.5z"/><circle cx="7" cy="7" r="1"/><circle cx="17" cy="7" r="1"/><path d="m12 13.1c-1.9 0-3.6-.7-5-2.1l-1 1.1c1.6 1.6 3.8 2.5 6 2.5 2.3 0 4.4-.9 6-2.5l-1-1.1c-1.3 1.3-3.1 2.1-5 2.1z"/></svg>
                </cta-contact-us>
                <button type="button" v-if="backToTop.show" class="bg-primary back-to-top rounded-full border-0 animate__animated animate__fadeInRight" aria-label="Retour en haut de page" @click="scrollTop">
                    <span>↑</span>
                </button>
            </div>

            <akk-track domain="{{ getDomain() }}"></akk-track>
            <akk-device-control></akk-device-control>
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
