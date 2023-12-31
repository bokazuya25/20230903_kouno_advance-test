<link rel="stylesheet" href="/css/custom.css">

@if ($paginator->hasPages())
<div class="pagination__wrap">
    <div class="pagination__guide">
        <p class="pagination__text">
            全{{ $paginator->total() }}件中
            @if ($paginator->firstItem())
                {{ $paginator->firstItem() }}~{{ $paginator->lastItem() }}件
            @else
                {{-- {{ $paginator->count() }} --}}
            @endif
        </p>
    </div>

    <div class="pagination">
        <ul class="pagination__nav" role="navigation">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li  aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li aria-disabled="true">{{ $element }}</li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li aria-current="page"><a class="active" href="#">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">></a>
                </li>
            @else
                <li aria-disabled="true" aria-label="@lang('pagination.next')">
                >
                </li>
            @endif
        </ul>
    </div>
</div>
@endif