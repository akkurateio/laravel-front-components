<div class="site__newsletter bg-primary text-{{ $wrapperTheme ?? 'white' }} {{ $wrapperClass ?? null }}"
        {!! !empty($wrapperDataTheme) ? 'data-theme="' . $wrapperDataTheme . '"' : null !!}>
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-12 col-md-6 text-center text-sm-left">
                <div class="text-xs-5xl text-md-8xl text-lg-10xl font-bold mb-2 mb-md-3">
                    Newsletter
                </div>
                <div class="text-xs-2xs text-lg-lg mb-3 mb-md-4">
                    Restez connecté pour être informé
                    de nos prochaines publications et annonces.
                </div>
            </div>
            <div class="col-12 col-md-6 text-center">
                @component('front::misc.cta-newsletter', [
                    'wrapperTheme' => $wrapperTheme ?? 'white',
                ])@endcomponent
            </div>
        </div>
    </div>
</div>
