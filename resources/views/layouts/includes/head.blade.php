        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @if(config('seotools.meta'))
            {!! SEO::generate() !!}
            @includeIf('front::misc.seo-meta')
        @else
            @component('front::misc.meta', ['meta' => $meta ?? null])
                @stack('meta')
            @endcomponent
        @endif

        <title>@if(!empty($meta->title)){{$meta->title}}@else{{ app_name() }}@endif</title>

        <!-- Favicons -->
        <link href="{{ asset('favicons/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180" >
        <link href="{{ asset('favicons/favicon-32x32.png') }}" rel="icon" type="image/png" sizes="32x32" >
        <link href="{{ asset('favicons/favicon-16x16.png') }}" rel="icon" type="image/png" sizes="16x16" >
        <link href="{{ asset('favicons/manifest.json') }}" rel="manifest" >
        <link href="{{ asset('favicons/safari-pinned-tab.svg') }}" rel="mask-icon" >

        <!-- Styles -->
        @stack('before-styles')
        @if (config('app.env') == 'local')
            <link rel="stylesheet" href="{{ asset('css/front/' . config('akk-style.theme') . '.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset(mix('css/front/' . config('akk-style.theme') . '.css')) }}">
        @endif
        @stack('after-styles')
