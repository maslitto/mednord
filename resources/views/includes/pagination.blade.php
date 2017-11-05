@if ($paginator->lastPage() > 1)
    <div class="pagination">
        <div class="pagination-arrow pagination-prev {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url(1) }}"><i class="icon-pagination prev"></i>Предыдущая</a>
        </div>
        <ul class="pagination-list">
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
        </ul>
        <div class="pagination-arrow {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url($paginator->currentPage()+1) }}">Следующая <i class="icon-pagination next"></i></a></div>
    </div>
@endif
