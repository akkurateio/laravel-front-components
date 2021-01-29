@extends('front::layouts.abstract')

@section('header')
    <div class="d-flex flex-column theme {{ !empty($theme) ? 'theme-' . $theme : 'theme-white' }} {{ !empty($themeClass) ? $themeClass : '' }}">
        @if(!empty($cover))
            <akk-cover class="site__overview__cover">
                <template v-slot:portrait>
                    {!! getMediaResource($cover['mobile'] ?? null, 'originalRatio', $cover['class'] ?? 'img-cover') !!}
                </template>
                <template v-slot:landscape>
                    {!! getMediaResource($cover['desktop'] ?? null, 'originalRatio', $cover['class'] ?? 'img-cover') !!}
                </template>
            </akk-cover>
        @endif

        @if(!agent()->isDesktop())
            @component('front::headers.mobile', ['theme' => $theme ?? null])@endcomponent
        @else
            @component('front::headers.desktop', ['theme' => $theme ?? null])@endcomponent
        @endif

        @yield('overview')

    </div>
@stop