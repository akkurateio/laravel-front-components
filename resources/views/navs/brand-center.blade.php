<nav class="navbar navbar-expand-lg akk-py-4{{!empty($color) ? ' navbar-dark bg-'.$color : ' navbar-light'}}{{!empty($shadow) ? ' shadow-'.$shadow : ''}}">
    <div class="container-fluid">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target=".collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="@lang('Toggle navigation')">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-25" id="navbarSupportedContent">
            <!-- Links -->
            @include('front::navs.partials.links')
            <!-- End Links -->
        </div>
        <!-- Brand -->
        @include('front::navs.partials.brand')
        <!-- End Brand -->
        <div class="collapse navbar-collapse w-25 mt-2 mt-md-0">
            <ul class="navbar-nav ml-auto d-flex align-items-center">
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
