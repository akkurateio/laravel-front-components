<section
        class="section section-{{ $style ?? null }} {{ $wrapperClass ?? null }}"
        {!! !empty($wrapperId) ? 'id="' . $wrapperId . '"' : null !!}
        {!! !empty($wrapperDataTheme) ? 'data-theme="' . $wrapperDataTheme . '"' : null !!}>
    @if(!empty($title))
        <div class="container mb-5">
            <{{ $titleTag ?? 'div' }} class
            ="section-title text-xs-3xl text-md-8xl text-underscore {{ $titleClass ?? null }} font-bold
            mb-5">{!! $title !!}</{{ $titleTag ?? 'div' }}>
        </div>
    @endif

    @if(!empty($overview))
        <div class="container {{ !isset($noSlot) ? 'mb-5' : '' }}">
            <div class="row justify-content-end {{ !isset($noSlot) ? 'mb-5' : '' }}">
                <div class="col-12 col-xl-9">
                    {!! $overview !!}
                </div>
            </div>
        </div>
    @endif

    {{ $slot }}
</section>
