<cta-subscribe prop-class="btn btn-lg btn-{{ $wrapperTheme ?? 'white' }} rounded-full text-xs-2xs text-lg-md font-bold px-3 py-2 px-md-4 py-md-3 {{ $wrapperClass ?? null }}"
               prop-label="M’inscrire"
               prop-aria="M’inscrire à la newsletter"
               prop-context="{{ json_encode(['href' => url()->full()]) }}"></cta-subscribe>
