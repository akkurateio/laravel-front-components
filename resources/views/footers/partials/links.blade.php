@if(View::exists('faq::front.index'))
    <li class="nav-item">
        <a href="{{ route('front.faq.questions.index') }}" class="nav-link{{empty($text) ? ' text-muted' : ' text-'.$text}}">{{ __('FAQ') }}</a>
    </li>
@endif
<li class="nav-item">
    <a href="#" class="nav-link{{empty($text) ? ' text-muted' : ' text-'.$text}}">{{ __('Policy') }}</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link{{empty($text) ? ' text-muted' : ' text-'.$text}}">{{ __('Terms') }}</a>
</li>
