<section class="section{{!empty($size) ? ' '.$size : ''}}{{!empty($color) ? ' bg-'.$color : ''}}{{!empty($text) ? ' text-'.$text : ''}}">
    <div class="container d-flex flex-column align-items-center">
        <h2 class="{{$h2}}">{{$title}}</h2>
        <p class="{{$p}} text-center akk-py-4">{{$content}}</p>
        <a href="{{$link}}" class="btn btn-lg akk-px-10{{!empty($btn) ? ' btn-'.$btn : ''}}{{!empty($rounded) ? ' rounded-'.$rounded : ''}}">{{$cta}}</a>
    </div>
</section>
