@if ($paginator->hasPages())
    <div class="pagination-wrapper">
        {{-- Previous Page Link --}}
        <div class="pagination-previous">
            @if ($paginator->onFirstPage())
                <span class="page-link disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">← Anterior</span>
            @else
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">← Anterior</a>
            @endif
        </div>

        {{-- Pagination Elements --}}
        <div class="pagination-numbers">
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="page-link disabled">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="page-link active">{{ $page }}</span>
                        @else
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Next Page Link --}}
        <div class="pagination-next">
            @if ($paginator->hasMorePages())
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Siguiente →</a>
            @else
                <span class="page-link disabled" aria-disabled="true" aria-label="@lang('pagination.next')">Siguiente →</span>
            @endif
        </div>
    </div>
@endif
