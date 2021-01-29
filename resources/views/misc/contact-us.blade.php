<div class="site__contactus text-center text-sm-left {{ $wrapperClass ?? null }}"
        {!! !empty($wrapperDataTheme) ? 'data-theme="' . $wrapperDataTheme . '"' : null !!}>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-sm-6 col-lg-6 mb-3 mb-sm-0">
                <div class="text-xs-4xl text-md-8xl text-lg-10xl leading-tighter font-bold">
                    Nous <br class="d-none d-sm-block"/>contacter
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6 text-center">
                <div class="text-xs-xs text-lg-md mb-1 mb-sm-2">Appelez-nous</div>
                <div
                        class="text-xs-4xl text-md-6xl text-lg-8xl mb-2 mb-md-4">{{ config('general.contact.phone') }}</div>
                <div class="text-xs-2xs text-lg-md mb-3">Ou envoyez-nous un message</div>
                <div>
                    @component('front::misc.cta-contact', [
                        'wrapperTheme' => $wrapperTheme ?? 'primary',
                    ])@endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
