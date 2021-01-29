@if(config('laravel-i18n.active'))
    @guest()
    @if(config('locale.status') && count(\Akkurate\LaravelAdmin\Models\Language::where('active', 1)->get()) > 1)
        <li class="nav-item dropdown d-none d-md-block">
            <a href="#" class="nav-link dropdown-toggle text-muted d-flex align-items-center mr-lg-2" id="navbarDropdownLanguageLink" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset("images/flags/".app()->getLocale().".png") }}" alt="" width="25">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownLanguageLink">
                @foreach(array_keys(config('locale.languages')) as $lang)
                    @if($lang != app()->getLocale() && \Akkurate\LaravelAdmin\Models\Language::where(['locale' => $lang, 'active' => true])->first())
                        <small>
                            <a href="{{ '/lang/'.$lang }}" class="dropdown-item d-flex align-items-center">
                                <img src="{{ asset("images/flags/{$lang}.png") }}" alt="" width="25" class="mr-2">
                                @lang($lang)
                            </a>
                        </small>
                    @endif
                @endforeach
            </div>
        </li>
    @endif
@endguest
@endif
