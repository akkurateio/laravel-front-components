<nav class="navbar navbar-expand-md akk-py-4{{!empty($color) ? ' navbar-dark bg-'.$color : ' navbar-light'}}{{!empty($shadow) ? ' shadow-'.$shadow : ''}}">
    <div class="container-fluid">
        <!-- Brand -->
        <div class="akk-mr-8">
            @include('front::navs.partials.brand')
        </div>
        <!-- End Brand -->
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="@lang('Toggle navigation')">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- End Toggler -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Links -->
            <div class="mr-auto">
                @include('front::navs.partials.links')
            </div>
            <!-- End Links -->
            <ul class="navbar-nav d-flex align-items-center">
                <!-- Languages Menu -->
                @include('front::navs.partials.languages')
                <!-- End Languages Menu -->
                <!-- Authentication Links -->
                @include('front::navs.partials.auth')
                <!-- End Authentication Links -->
            </ul>
        </div>
    </div>
</nav>

