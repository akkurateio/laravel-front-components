@if ($paginator->hasPages())
    <nav class="w-100">
        <ul class="pagination d-flex w-100">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="d-none" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link rounded text-xs-2xs text-lg-md font-bold px-3 py-2 px-md-4 py-md-3"
                          aria-hidden="true">⟵</span>
                </li>
            @else
                <li class="page-item mr-1 mr-sm-2">
                    <a class="page-link rounded text-xs-2xs text-lg-md font-bold px-3 py-2 px-md-4 py-md-3"
                       href="{{ $paginator->previousPageUrl() }}" rel="prev"
                       aria-label="@lang('pagination.previous')">⟵</a>
                </li>
            @endif

            @if(agent()->isDesktop())
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item mr-1 disabled" aria-disabled="true">
                            <span
                                    class="page-link rounded text-xs-2xs text-lg-md font-bold px-3 py-2 px-md-4 py-md-3">{{ $element }}</span>
                        </li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item mr-1 active" aria-current="page">
                                    <span
                                            class="page-link rounded text-xs-2xs text-lg-md font-bold px-3 py-2 px-md-4 py-md-3">{{ $page }}</span>
                                </li>
                            @else
                                <li class="page-item mr-1">
                                    <a class="page-link rounded text-xs-2xs text-lg-md font-bold px-3 py-2 px-md-4 py-md-3"
                                       href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item ml-auto">
                    <a class="page-link rounded text-xs-2xs text-lg-md font-bold px-3 py-2 px-md-4 py-md-3"
                       href="{{ $paginator->nextPageUrl() }}" rel="next"
                       aria-label="{{ __('Voir la suite') }}">
                        {{ __('Voir la suite') }}
                    </a>
                </li>
            @else
                {{--                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">--}}
                {{--                    <span class="page-link" aria-hidden="true">⟶</span>--}}
                {{--                </li>--}}
            @endif
        </ul>
    </nav>
@endif
