<nav class="navbar navbar-expand-md akk-py-4{{!empty($color) ? ' navbar-dark bg-'.$color : ' navbar-light'}}{{!empty($shadow) ? ' shadow-'.$shadow : ''}}">
    <div class="container-fluid">
        <!-- Brand -->
        <div class="d-md-none">
            @include('front::navs.partials.brand')
        </div>
        <!-- End Brand -->
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="@lang('Toggle navigation')">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- End Toggler -->
        <!-- Links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            @include('front::navs.partials.links')
        </div>
        <!-- End Links -->
    </div>
</nav>

