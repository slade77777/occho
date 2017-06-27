@if($paging->lastPage() > 1)
    <ul class="pagination">
        <li><a href="{{ $paging->appends(Request::except('page'))->url(1) }}">最初</a></li>
        <li><a href="{{ $paging->appends(Request::except('page'))->previousPageUrl() }}">戻る</a></li>
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
        <li><a href="{{$paging->appends(Request::except('page'))->nextPageUrl()}}">次へ</a></li>
        <li><a href="{{$paging->url($paging->lastPage()) }}">最終</a></li>
    </ul>
@endif