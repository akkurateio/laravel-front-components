<a href="{{ $link ?? null }}" target="{{ $target ?? '_blank' }}"
   @if(!empty($rel)) rel="{{ $rel ?? null }}" @else rel="noopener" @endif
   class="btn btn-lg btn-outline-{{ $wrapperTheme ?? 'white' }} rounded-full text-xs-2xs text-lg-md font-bold px-3 py-2 px-md-4 py-md-3 mb-2 mb-sm-0 {{ $wrapperClass ?? 'mr-3' }}">
    {{ $label ?? null }}
</a>
