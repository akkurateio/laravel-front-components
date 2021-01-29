<div class="container-fluid akk-py-10{{!empty($color) ? ' bg-'.$color : ''}}{{!empty($text) ? ' text-'.$text : ''}}">

    <div class="row align-items-center">
        <div class="col-lg-4 text-center text-lg-left mb-2 mb-lg-0">
            <a href="{{ route('front.homepage') }}" class="text-decoration-none text-2xl font-semibold mr-0{{empty($text) ? ' text-muted' : ' text-'.$text}}">{{ app_name() }}</a>
        </div>
        <div class="col-lg-4 text-center mb-2 mb-lg-0 d-flex justify-content-center align-items-center">
            <div class="text-center{{!empty($color) ? ' bg-'.$color : ''}}{{!empty($text) ? ' text-'.$text : ' text-muted'}}">
                @include('front::footers.partials.copyright')
            </div>
        </div>
        <ul class="col-lg-4 nav pr-0 justify-content-center">
            @include('front::footers.partials.links-large')
        </ul>
    </div>
    <hr class="{{!empty($text) ? 'opacity-25 border-top-'.$text : ''}}">
    <div class="row align-items-center">
        <div class="col-lg-9 akk-mb-4 mb-lg-0 text-center text-lg-left">
            <p class="mb-0{{empty($text) ? ' text-muted' : ' text-'.$text}}">Laravel Boilerplate is a nice handcrafted configuration of Laravel framework to help you quickstart your projects.</p>
        </div>
        <ul class="col-lg-3 nav justify-content-center justify-content-lg-end">
            @include('front::footers.partials.socials', ['icon' => !empty($text) ? $text : ''])
        </ul>
    </div>

</div>
