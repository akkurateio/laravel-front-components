{{--<screen-insection>--}}
    <div class="">
        <h2 class="text-xs-lg text-md-xl font-bold mb-3">{{ $title ?? null }}</h2>
        @if(!empty($overview))
            <p class="font-bold">{!! $overview !!}</p>
        @endif
        {{ $slot }}
    </div>
{{--<screen-insection>--}}
