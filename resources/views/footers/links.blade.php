<div class="container-fluid d-flex flex-column justify-content-center align-items-center akk-py-10{{!empty($color) ? ' bg-'.$color : ''}}{{!empty($text) ? ' text-'.$text : ''}}">
    <ul class="nav mb-2 font-semibold">
        @include('front::footers.partials.links')
    </ul>
    <p class="font-light text-center mb-0{{empty($text) ? ' text-muted' : ' text-'.$text}}">Be sure to have a look at our <a href="#" class="text-underline{{empty($text) ? ' text-muted' : ' text-'.$text}}">Terms of Use</a> and <a href="#" class="text-underline{{empty($text) ? ' text-muted' : ' text-'.$text}}">Privacy Policy</a></p>
</div>
