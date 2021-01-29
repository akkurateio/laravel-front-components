<div class="site__footer px-3 px-sm-0 {{ $wrapperClass ?? null }}"
    {!! !empty($wrapperDataTheme) ? 'data-theme="' . $wrapperDataTheme . '"' : null !!}>
    <div class="container {{ !empty($context) && $context == 'homepage' ? 'mt-5 mt-md-0' : null }}">
        <div class="row justify-content-center mb-3 mb-md-5">
            <div class="col-6 col-sm-12 col-md-6 text-xs-2xs text-md-xs mb-5 mb-sm-4 mb-md-0">
                <nav class="row">
                    <div class="col-12 col-sm-6 col-md-5">
                        <a href="#">FAQ</a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-5">
                        <a href="#">Contact</a>
                        <a href="#">Mentions légales</a>
                        <a href="#">Confidentialité</a>
                    </div>
                </nav>
            </div>
            <div class="col-6 col-sm-12 col-md-6 text-xs-2xs text-md-xs text-left text-sm-center text-md-right">
                @foreach(config('general.socials') as $name => $url)
                    <a href="{{ $url }}" class="d-block d-sm-inline-block social-link" target="_blank"
                       rel="noopener">{{ $name }}</a>
                @endforeach
            </div>
        </div>
        <div class="text-center text-xs-2xs text-md-xs text-white-50">
            @if(empty($context) || $context != 'homepage')
                <div class="mb-4 icon white">
                    <svg class="brand" enable-background="new 0 0 64 64" viewBox="0 0 64 64"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="m0 19.8v32l64-7.5v-32z"/>
                    </svg>
                </div>
            @endif
            @component('front::misc.address', [
                'address' => (object) config('general.address'),
                'wrapperTag' => 'address',
                'wrapperClass' => 'mb-2 text-xs-3xs text-lg-xs',
                'display' => 'inline'
            ])@endcomponent
            <div class="text-xs-3xs text-lg-2xs">
                © 2003-{{ date('Y') }} {{ config('general.owner') }}. Tous droits réservés.
            </div>
        </div>
    </div>
</div>
