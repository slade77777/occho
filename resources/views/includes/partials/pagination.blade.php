@if($paging->lastPage() > 1)
    <ul class="pagination">
        <li><a href="{{ $paging->appends(Request::except('page'))->url(1) }}">Trang Đầu</a></li>
        <li><a href="{{ $paging->appends(Request::except('page'))->previousPageUrl() }}">Lùi</a></li>
        <?php
        $current = $paging->currentPage();
        $lastPage = $paging->lastPage();
        $start = $current - 3 <= 1 ? 1 : $current - 3;
        $end = $current + 3 > $lastPage ? $lastPage : $current + 3;
        ?>
        @for($i = $start; $i <= $end; $i++)
            <li class="{{$paging->currentPage() == $i ? 'active' : ''}}">
                <a href="{{$paging->appends(Request::except('page'))->url($i)}}">{{$i}}</a>
            </li>
        @endfor
        <li><a href="{{$paging->appends(Request::except('page'))->nextPageUrl()}}">Tiến</a></li>
        <li><a href="{{$paging->url($paging->lastPage()) }}">Trang Cuối</a></li>
    </ul>
@endif