{{--<screen-insection>--}}
@if(agent()->isDesktop())
    <div class="row align-items-center">
        <div class="col-12 col-md-6 mb-3 mb-md-0">
            {!! getMediaResource($image['filename'], 'originalRatio', 'img-fluid', $title ?? null) !!}
        </div>
        <div class="col-12 col-md-6">
            <h3 class=" text-xs-lg text-md-2xl font-bold mb-3">{{ $title ?? null }}</h3>
            @if(!empty($overview))
                <p class="text-xs-sm text-md-md font-bold">{!! $overview !!}</p>
            @endif
            {{ $slot }}
        </div>
    </div>
@else
    <div class="row align-items-center">
        <h3 class="d-block d-md-none col-12 text-xs-lg text-md-xl font-bold mb-3">{{ $title ?? null }}</h3>
        <div class="col-12 col-md-6">
            {!! getMediaResource($image['filename'], 'originalRatio', 'img-fluid mb-3 mb-md-0', $title ?? null) !!}
        </div>
        <div class="col-12 col-md-6">
            <div class="d-none d-md-block text-xs-lg text-md-2xl font-bold mt-0 mb-3">{{ $title ?? null }}</div>
            @if(!empty($overview))
                <p class="text-xs-sm text-md-md font-bold">{!! $overview !!}</p>
            @endif
            {{ $slot }}
        </div>
    </div>
@endif
{{--</screen-insection>--}}
