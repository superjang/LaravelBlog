<ul id="gnb">
    <li><a href="{{ route('mains.index') }}">메인</a></li>
    <li><a href="{{ route('posts.index') }}">목록으로 가기</a></li>
    <li><a href="{{ route('users') }}">사용자목록 가기</a></li>
    @if (Auth::check())
    <li><a href="{{ route('users.show', ['id'=>Auth::user()->id]) }}">{{ Auth::user()->name }}님 마이페이지</a></li>
    @endif
</ul>
