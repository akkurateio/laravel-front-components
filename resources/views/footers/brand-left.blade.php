<div class="container-fluid akk-py-10{{!empty($color) ? ' bg-'.$color : ''}}{{!empty($text) ? ' text-'.$text : ''}}">

    <div class="row">
        <div class="col-lg-3 text-center mb-2 mb-lg-0">
            <a href="{{ route('front.homepage') }}" class="text-decoration-none text-2xl font-semibold mr-0{{empty($text) ? ' text-muted' : ' text-'.$text}}">{{ app_name() }}</a>
        </div>
        <ul class="col-lg-6 nav pr-0 justify-content-center">
            @include('front::footers.partials.links-large')
        </ul>
        <ul class="col-lg-3 nav pr-0 justify-content-center">
            @include('front::footers.partials.socials', ['icon' => !empty($text) ? $text : ''])
        </ul>
    </div>

</div>
