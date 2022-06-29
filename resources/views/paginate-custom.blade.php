@if ($paginator->hasPages())
    <nav class="blog-pagination justify-content-center d-flex mt-4">
        <ul class="pagination">
            @if($paginator->onFirstPage())
                <li class="page-item">
                    <a href="#" class="page-link" aria-label="@lang('pagination.previous')">
                        <i class="fa fa-next"> << </i>
                    </a>
                </li>

            @else
                <li class="page-item">
                    <a href="{{ $paginator->previousPageUrl() }}" class="page-link"
                       aria-label="@lang('pagination.previous')">
                        <i class="ti-angle-left"> << </i>
                    </a>
                </li>
            @endif

            @foreach($elements as $element)
                @if(is_string($element))
                    <li class="page-item disabled">
                        <a href="#" class="page-link ">{{ $element }}</a>
                    </li>
                @endif
                @if(is_array($element))
                    @foreach($element as $page => $url)
                        @if($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a href="#" class="page-link">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a href="{{ $url  }}" class="page-link">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a href="{{ $paginator->nextPageUrl() }}" class="page-link" aria-label="@lang('pagination.next')">
                        <i class="ti-angle-right"> >> </i>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a href="#" aria-disabled="true" class="page-link" aria-label="@lang('pagination.next')">
                        <i class="ti-angle-right"> >> </i>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif
