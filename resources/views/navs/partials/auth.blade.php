<ul class="navbar-nav">
    @guest
        <li class="nav-item">
            <a class="btn{{!empty($btn) ? ' btn-'.$btn : ''}}{{!empty($rounded) ? ' rounded-'.$rounded : ''}} akk-px-8" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @else
        <li class="nav-item dropdown">
            <a id="loginDropdown" class="nav-link dropdown-toggle text-muted d-flex align-items-center" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if(auth()->user()->getThumb())
                    <img src="{{ auth()->user()->getThumb() }}" width="32">
                @else
                    @if (config('app.gravatar'))
                        <img class="rounded-full mr-1" src="{{ Gravatar::src(auth()->user()->email, 64) }}" width="32">
                    @else
                        <i class="icon {{ !empty($icon) ? $icon : '' }}">
                            <Icon name="User avatar filled" />
                        </i>
                    @endif
                @endif
                <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="loginDropdown">

                @can('admin')
                    <a class="dropdown-item text-muted" href="{{ route('brain', ['uuid' => auth()->user()->account->slug]) }}">
                        {{ __('Dashboard') }}
                    </a>
{{--                    @can('profile')--}}
{{--                        <a class="dropdown-item text-muted" href="#">--}}
{{--                            {{ __('Profile') }}--}}
{{--                        </a>--}}
{{--                    @endcan--}}
                @endcan

                <a class="dropdown-item text-muted" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>
