<div class="site__prevnext">
    <div class="container">
        <div class="row no-gutters justify-content-around">
            <div class="col-12 col-sm-4">
                @if(!empty($previous))
                    <div class="text-xs text-neutral">{{ $previous['pre'] }}</div>
                    <a href="{{ route($previous['route']) }}" class="d-block text-xl font-bold">{{ $previous['label'] }}</a>
                @endif
            </div>
            <div class="col-12 col-sm-4 akk-mt-8">
                @if(!empty($next))
                    <div class="text-xs text-neutral">{{ $next['pre'] }}</div>
                    <a href="{{ route($next['route']) }}" class="d-block text-xl font-bold">{{ $next['label'] }}</a>
                @endif
            </div>
        </div>
    </div>
</div>
