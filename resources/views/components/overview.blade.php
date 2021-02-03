<div class="section__overview bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8 mb-4 mb-sm-0">
                @isset($preTitle)
                    <div class="pre-title text-2xs text-uppercase font-bold pl-2 mb-3">{{ $preTitle }}</div>
                @endisset
                <h1 class="text-xs-5xl text-md-10xl font-bold">{{ $title }}</h1>
                @isset($postTitle)
                    <div class="mb-5">{!! $postTitle !!}</div>
                @endisset
            </div>
            {{ $slot }}
        </div>
    </div>
</div>
