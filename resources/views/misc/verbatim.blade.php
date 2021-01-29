@component('front::misc.section', ['style' => $style ?? 'black', 'wrapperClass' => $wrapperClass ?? null])
    <div class="container">
        <blockquote class="blockquote">
            {{ $slot }}
        </blockquote>
    </div>
@endcomponent
