<div class="akk-py-10{{!empty($color) ? ' bg-'.$color : ''}}{{!empty($text) ? ' text-'.$text : ''}}">
    <div class="container-fluid">
        <div class="row">
            <ul class="col-md-4 nav justify-content-center pr-0">
                @include('front::footers.partials.links')
            </ul>
            <div class="col-md-4 d-flex flex-column align-items-center">
                <a href="{{ route('front.homepage') }}" class="navbar-brand text-2xl font-semibold mr-0 mb-3{{empty($text) ? ' text-muted' : ' text-'.$text}}">{{ app_name() }}</a>
                <p class="text-center{{empty($text) ? ' text-muted' : ' text-'.$text}}">{{__('Be sure to have a look at our')}}<br> <a href="#" class="text-underline{{empty($text) ? ' text-muted' : ' text-'.$text}}">{{__('Terms of Use')}}</a> {{__('and')}} <a
                            href="#" class="text-underline{{empty($text) ? ' text-muted' : ' text-'.$text}}">{{__('Privacy Policy')}}</a></p>
            </div>
            <ul class="col-md-4 nav justify-content-center pr-0">
                @include('front::footers.partials.socials', ['icon' => !empty($text) ? $text : ''])
            </ul>
        </div>
    </div>
</div>
