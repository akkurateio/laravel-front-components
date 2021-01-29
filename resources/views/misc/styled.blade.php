<style type="text/css">

    .theme {
        background-color: {{ $backgroundColor }}  !important;
    }

    .section-white a, .section-gray a {
        color: {{ $backgroundColor }};
        text-decoration: none;
        background-color: transparent;
    }

    .section-white a:hover, .section-gray a:hover {
        color: {{ adjustBrightness($backgroundColor, -.2) }};
        text-decoration: underline;
    }

    .section-white a:not([href]), .section-gray a:not([href]) {
        color: inherit;
        text-decoration: none;
    }

    .section-white a:not([href]):hover, .section-gray a:not([href]):hover {
        color: inherit;
        text-decoration: none;
    }

    .page-item:last-child .page-link {
        background-color: {{ $backgroundColor }};
    }

    .page-item:last-child .page-link:hover {
        background-color: {{ adjustBrightness($backgroundColor, -.2) }};
    }

    .page-item.active .page-link {
        background-color: {{ $backgroundColor }};
    }

    .pagination .pagination-item.active {
        background-color: {{ $backgroundColor }} !important;
    }

    .mobile-nav {
        background-color: {{ $backgroundColor }}  !important;
        color: {{ $textColor }}  !important;
    }

    .section-styled {
        background-color: {{ $backgroundColor }};
        color: {{ $textColor }};
    }

    .text-underscore::after {
        background-color: {{ $backgroundColor }};
    }

    p a {
      text-decoration: underline !important;
    }

    .text-primary {
        color: {{ $backgroundColor }}  !important;
    }

    a.text-primary:hover, a.text-primary:focus {
        color: {{ adjustBrightness($backgroundColor, -.2) }} !important;
    }

    a.bg-primary:hover, a.bg-primary:focus, button.bg-primary:hover, button.bg-primary:focus {
        background-color: {{ adjustBrightness($backgroundColor, -.2) }} !important;
    }

    .btn-primary {
        background-color: {{ $backgroundColor }}  !important;
        border-color: {{ $backgroundColor }}  !important;
        text-decoration: none !important;
    }

    .btn-outline-primary {
        background-color: transparent !important;
        border-color: {{ $backgroundColor }}  !important;
        color: {{ $backgroundColor }}  !important;
        text-decoration: none !important;
    }

    .bg-primary {
        background-color: {{ $backgroundColor }}  !important;
    }

    .dropdown-item:active {
        background-color: {{ $backgroundColor }}  !important;
        color: {{ $textColor }};
    }

    .site__back-to-top {
        background-color: {{ $backgroundColor }}  !important;
    }

    .site__back-to-top:hover {
        background-color: {{ adjustBrightness($backgroundColor, -.2) }} !important;
    }

    {{ $slot }}
</style>
