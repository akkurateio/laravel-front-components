<nav aria-label="breadcrumb" class="akk-mb-2 d-none d-sm-block">
    <ol class="breadcrumb">
        <li class="breadcrumb-item d-none d-inline-block"><a href="{{ route('front.homepage') }}">Accueil</a></li>
        @if(!empty($breadcrumb))
            @foreach($breadcrumb as $route => $page)
                <li class="breadcrumb-item">
                    <a href="{{ route($route) }}">{{ $page }}</a>
                </li>
            @endforeach
        @endif
        <li class="breadcrumb-item active" aria-current="page">{{ $currentPage }}</li>
    </ol>
</nav>
