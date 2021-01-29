        <title>@if(!empty($meta->title)){{$meta->title}}@else{{ app_name() }}@endif</title>

        <meta name="description" content="@if(!empty($meta->description)){{$meta->description}}@else{{config('general.description')}}@endif"> <!-- Keep under 500 characters -->

        <!-- Geo Positioning Meta Tags. -->
        <meta name="geo.region" content="{{config('general.address.countryCode')}}" />
        <meta name="geo.placename" content="{{config('general.address.city')}}" />
        <meta name="geo.position" content="{{config('general.address.latitude')}};{{config('general.address.longitude')}}" />
        <meta name="ICBM" content="{{config('general.address.latitude')}}, {{config('general.address.longitude')}}" />

        <!-- Open Graph Meta Tags (ogp.me) -->
        <meta property="og:title" content="@if(!empty($meta->og_title)){{$meta->og_title}}@else{{config('general.name')}} | {{config('general.baseline')}}@endif"> <!-- Web page title -->
        <meta property="og:description" content="@if(!empty($meta->og_description)){{$meta->og_description}}@else{{config('general.description')}}@endif">  <!-- Web page description -->
        <meta property="og:image" content="{{ asset('images/logo.png') }}">  <!-- Web page thumbnail -->
        <meta property="og:site_name" content="{{config('general.name')}}"> <!-- Web site title -->
        <meta property="og:type" content="{{config('general.type')}}"> <!-- Content type ["product", "blog", "website", "book", "movie", ... ] -->
        <meta property="og:url" content="{{url()->current()}}"> <!-- Url to this web page -->
        <meta property="og:locale" content="{{config('general.locale')}}"> <!-- Main Language -->
        <meta property="place:location:latitude" content="{{config('general.address.latitude')}}"> <!-- Geographical coordenate -->
        <meta property="place:location:longitude" content="{{config('general.address.longitude')}}"> <!-- Geographical coordenate -->
        <meta property="og:street-address" content="{{config('general.address.street')}}"> <!-- Postal Address -->
        <meta property="og:locality" content="{{config('general.address.city')}}"> <!-- Locality -->
        <meta property="og:region" content="{{config('general.address.area')}}"> <!-- Region -->
        <meta property="og:postal-code" content="{{config('general.address.zip')}}"> <!-- Post code -->
        <meta property="og:country-name" content="{{config('general.address.countryCode')}}"> <!-- Country code -->
        <meta property="og:email" content="{{config('general.contact.email.general')}}"> <!-- Contact email -->
        <meta property="og:phone_number" content="{{config('general.contact.phone')}}"> <!-- Contact phone number -->

        <!-- Twitter Meta Tags. -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="{{config('general.meta.twitter.site')}}">
        <meta name="twitter:creator" content="{{config('general.meta.twitter.creator')}}">
        <meta name="twitter:url" content="{{url()->current()}}">
        <meta name="twitter:title" content="@if(!empty($meta->title)){{$meta->title}}@else{{config('general.name')}} | {{config('general.baseline')}}@endif">
        <meta name="twitter:description" content="@if(!empty($meta->description)){{$meta->description}}@else{{config('general.description')}}@endif">
        <meta name="twitter:image" content="{{ asset('images/logotype-microdata.png') }}">

        <!-- Web App Settings. -->
        <meta name="application-name" content="{{config('general.name')}}">
        <meta name="mobile-web-app-capable" content="yes">

        <!-- Apple iOS Settings. -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="{{config('general.name')}}">

        <!-- Windows Internet Explorer. -->
        <meta http-equiv="cleartype" content="on">
        <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="application-name" content="{{config('general.name')}}">
        <meta name="msapplication-tooltip" content="{{config('general.name')}}">
        <meta name="msapplication-starturl" content="{{url('/')}}">
        <meta name="msapplication-allowDomainApiCalls" content="true">
        <meta name="msapplication-allowDomainMetaTags" content="true">
        <meta name="msapplication-badge" content="frequency=30; polling-uri=http://example.com/id45453245/polling.xml">
        <meta name="msapplication-navbutton-color" content="#FF3300">
        <meta name="msapplication-notification" content="frequency=60;polling-uri=http://example.com/livetile">
        <meta name="msapplication-task" content="name=Check Order Status;action-uri=./orderStatus.aspx?src=IE9;icon-uri=./favicon.ico">
        <meta name="msapplication-task-separator" content="1">
        <meta name="msapplication-TileImage" content="{{ asset('images/logo.png') }}">
        <meta name="msapplication-window" content="width=1024;height=768">

        {{ $slot }}
