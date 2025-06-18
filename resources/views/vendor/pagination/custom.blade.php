@if ($paginator->hasPages())
    <div class="row">
        <div class="col-12">
            <div class="pagination-wrapper" data-aos="fade-up" data-aos-duration="1000">
                <ul class="pagination main-pagination">

                    {{-- Previous Page --}}
                    @if ($paginator->onFirstPage())
                        <li>
                            <button disabled>
                                <i class="fa-solid fa-angles-left"></i>
                            </button>
                        </li>
                    @else
                        <li>
                            <a href="{{ $paginator->previousPageUrl() }}">
                                <i class="fa-solid fa-angles-left"></i>
                            </a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "..." --}}
                        @if (is_string($element))
                            <li><span class="disabled">{{ $element }}</span></li>
                        @endif

                        {{-- Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li><a href="#" class="active">{{ $page }}</a></li>
                                @else
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page --}}
                    @if ($paginator->hasMorePages())
                        <li>
                            <a href="{{ $paginator->nextPageUrl() }}">
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </li>
                    @else
                        <li>
                            <button disabled>
                                <i class="fa-solid fa-angles-right"></i>
                            </button>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
@endif
