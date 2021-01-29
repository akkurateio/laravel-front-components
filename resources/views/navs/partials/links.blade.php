<ul class="navbar-nav text-center">
    <li class="nav-item">
        <a href="{{ route('front.homepage') }}" class="nav-link px-4 {{ \Illuminate\Support\Facades\Route::is('homepage') ? 'active' : '' }}">{{ __('Home') }}</a>
    </li>
    @if(View::exists('demo::pages.components'))
        <li class="nav-item">
            <a href="{{ route('components') }}" class="nav-link px-4 {{ \Illuminate\Support\Facades\Route::is('components') ? 'active' : '' }}">{{ __('Components') }}</a>
        </li>
    @endif
    @if(View::exists('demo::pages.contact'))
        <li class="nav-item">
            <a href="{{ route('contact') }}" class="nav-link px-4 {{ \Illuminate\Support\Facades\Route::is('contact') ? 'active' : '' }}">{{ __('Contact') }}</a>
        </li>
    @endif
    @if(View::exists('blog::front.articles.index'))
        <li class="nav-item">
            <a href="{{ route('front.blog.articles.index') }}" class="nav-link px-4 {{ \Illuminate\Support\Facades\Route::is('articles.index') ? 'active' : '' }}">{{ __('Blog') }}</a>
        </li>
    @endif
    @if(View::exists('faq::front.index'))
        <li class="nav-item">
            <a href="{{ route('front.faq.questions.index') }}" class="nav-link px-4 {{ \Illuminate\Support\Facades\Route::is('questions') ? 'active' : '' }}">{{ __('FAQ') }}</a>
        </li>
    @endif
</ul>
