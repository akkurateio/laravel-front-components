<div class="site__overview {{ $align ?? null }}">
    <div class="container">
        @if(!empty($currentPage))
            <div class="row no-gutters">
                <div class="col-12 col-lg-7 d-flex flex-column {{ $justify ?? 'justify-content-center' }}">
                    @include('front::overviews.includes.breadcrumb')
                </div>
            </div>
        @endif

        <div class="row no-gutters">
            <div class="col-12 col-lg-7 d-flex flex-column {{ $justify ?? 'justify-content-center' }}">

                <div>
                    @if(!empty($preTitle))
                        <div class="pre-title animate__animated animate__fadeInDown">{{ $preTitle }}</div>
                    @endif

                    <h1 class="text-xs-3xl text-md-5xl text-lg-9xl font-bold mb-3 mb-md-4 mb-xl-5 animate__animated animate__fadeIn">{!! $title !!}</h1>

                    @if(!empty($postTitle))
                        <p class="text-xs-xs text-md-md text-lg-2xl animate__animated animate__fadeIn">{!! $postTitle !!}</p>
                    @endif
                </div>

                <div class="d-md-flex align-items-center {{ !empty($nav) || !empty($cta) ? 'mt-3 mt-md-5' : '' }}">
                    @if(!empty($nav))
                        <ul class="nav flex-column">
                            @foreach($nav as $route => $page)
                                <li class="nav-item">
                                    <a href="{{ route($route) }}" class="nav-link">
                                        @if($currentNav == $route)
                                            <span class="pointer">🡒</span>
                                        @else
                                            <span class="pointer"></span>
                                        @endif
                                        <span class="{{ $currentNav == $route ? 'font-bold' : '' }}">{{ $page }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    {!! $cta ?? '' !!}
                </div>

                {{ $slot }}
            </div>
        </div>
    </div>
</div>
