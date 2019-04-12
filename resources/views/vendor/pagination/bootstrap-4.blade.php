@if ($paginator->hasPages())
  <div class="pagination text-center">
    <ul class="page-pagination" role="navigation">
      {{-- Previous Page Link --}}
      @if ($paginator->onFirstPage())
        <li>
          <span class="page-numbers">&lsaquo;</span>
        </li>
      @else
        <li>
          <a class="page-numbers" href="{{ $paginator->previousPageUrl() }}">&lsaquo;</a>
        </li>
      @endif

      {{-- Pagination Elements --}}
      @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
          <li><span class="page-numbers">{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
          @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
              <li><span class="page-numbers current">{{ $page }}</span></li>
            @else
              <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
            @endif
          @endforeach
        @endif
      @endforeach

      {{-- Next Page Link --}}
      @if ($paginator->hasMorePages())
        <li>
          <a class="page-numbers" href="{{ $paginator->nextPageUrl() }}">&rsaquo;</a>
        </li>
      @else
        <li>
          <span class="page-numbers">&rsaquo;</span>
        </li>
      @endif
    </ul>
  </div>
@endif
