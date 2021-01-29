<div class="share {{ $wrapperClass ?? null }} mb-5 mb-sm-0">
    <div class="text-2xs mb-4">{{ __('Partager') }}</div>
    <div class="d-flex {{ $direction ?? null }} align-items-center">
        <div class="{{ empty($direction) ? 'mr-auto' : 'py-2' }}">
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" class="icon {{ $iconTheme ?? 'white' }}" target="_blank" rel="noopener">
                @include('icons.facebook')
            </a>
        </div>
        <div class="{{ empty($direction) ? 'mr-auto' : 'py-2' }}">
            <a href="https://twitter.com/intent/tweet?text={{ $title }}&amp;url={{ urlencode($url) }}&amp;via=Subvitamine" class="icon {{ $iconTheme ?? 'white' }}" target="_blank" rel="noopener">
                @include('icons.twitter')
            </a>
        </div>
        <div class="{{ empty($direction) ? 'mr-auto' : 'py-2' }}">
            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ urlencode($url) }}&amp;title={{ $title }}&amp;summary={{ $overview ?? null }}" class="icon {{ $iconTheme ?? 'white' }}" target="_blank" rel="noopener">
                @include('icons.linkedin')
            </a>
        </div>
        <div class="{{ empty($direction) ? 'mr-auto' : 'py-2' }}">
            <a href="https://www.pinterest.com/pin/create/button/?url={{ urlencode($url) }}&amp;description={{ $title }}" class="icon {{ $iconTheme ?? 'white' }}" target="_blank" rel="noopener">
                @include('icons.pinterest')
            </a>
        </div>
        <div class="{{ empty($direction) ? 'mr-auto' : 'py-2' }}">
            <a href="https://wa.me/?text={{ urlencode($url) }}" class="icon {{ $iconTheme ?? 'white' }}" target="_blank" rel="noopener">
                @include('icons.whatsapp')
            </a>
        </div>
        <div class="{{ empty($direction) ? '' : 'py-2' }}">
            <a href="mailto:?subject={{ $title }}&body={{ urlencode($url) }}" class="icon {{ $iconTheme ?? 'white' }}" target="_blank" rel="noopener">
                @include('icons.mail')
            </a>
        </div>
    </div>
</div>
