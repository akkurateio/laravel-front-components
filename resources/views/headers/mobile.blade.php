<akk-sidenav>
    <template v-slot:brand>
        <a href="{{ route('front.homepage') }}" class="mr-auto" title="Retour à la page d’accueil">
            <svg class="brand-logotype" enable-background="new 0 0 64 64" viewBox="0 0 64 64"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="m0 19.8v32l64-7.5v-32z"/>
            </svg>
        </a>
    </template>
    <template v-slot:navigation>
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <nav class="nav flex-column">
                    @if (Route::has('front.blog.articles.index'))
                        <a class="nav-link text-3xl py-1" href="{{ route('front.blog.articles.index') }}">Mag</a>
                    @endif
                </nav>
            </div>
            <div class="col-12 col-md-6">
                <nav class="nav flex-column">
                    @guest
                        <a class="nav-link text-xl py-1" href="{{ route('login') }}">{{ __('Mon compte') }}</a>
                    @else
                        <a class="nav-link text-xl py-1" href="{{ route('admin') }}">{{ __('Mon compte') }}</a>
                    @endguest

                </nav>
            </div>
        </div>
    </template>
</akk-sidenav>
<div class="site__header d-flex align-items-center justify-content-start" id="websiteHeader">
    <a href="{{ route('front.homepage') }}" class="brand mr-auto" title="Retour à la page d’accueil">
        <svg class="brand-logotype" enable-background="new 0 0 64 64" viewBox="0 0 64 64"
             xmlns="http://www.w3.org/2000/svg">
            <path d="m0 19.8v32l64-7.5v-32z"/>
        </svg>
    </a>

    <akk-launch-nav>
        <template v-slot:icon>
            <svg class="burger" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <path d="m32 5-32 2.05v2.95l32-2.05z"/>
                <path d="m32 13-32 2.05v2.95l32-2.05z"/>
                <path d="m32 21-32 2.05v2.95l32-2.05z"/>
            </svg>
        </template>
    </akk-launch-nav>
</div>
