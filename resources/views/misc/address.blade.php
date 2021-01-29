<{{$wrapperTag ?? 'div'}} class="{{$wrapperClass ?? ''}}">
    @if(!empty($display) && $display == 'inline')
        @if(!empty($address->street1))
            {{$address->street1}},
        @endif
        @if(!empty($address->street2))
            {{$address->street2}},
        @endif
        @if(!empty($address->street3))
            {{$address->street3}},
        @endif
        @if(!empty($address->zip))
            {{$address->zip}}
        @endif
        @if(!empty($address->city))
            {{$address->city}}
        @endif
        @if(!empty($address->country))
            , {{$address->country}}
        @endif
    @else
        @if(!empty($address->street1))
            {{$address->street1}}<br/>
        @endif
        @if(!empty($address->street2))
            {{$address->street2}}<br/>
        @endif
        @if(!empty($address->street3))
            {{$address->street3}}<br/>
        @endif
        @if(!empty($address->zip))
            {{$address->zip}}
        @endif
        @if(!empty($address->city))
            {{$address->city}}
        @endif
    @endif
</{{$wrapperTag ?? 'div'}}>
