@extends('layouts.app')

@section('content')
<div id="app" class="page_post_list">
    <div id="top_visual" style="background: url(../../images/image/page/main/main_visual/item_2.jpg) no-repeat 50% 50%;">
        <p class="visual_text">
            <span class="text_main">메인 타이틀을 여기다가 똮!!</span>
            <span class="text_sub">그럼 서브 타이틀은 여기에 똮~~ 기가 막히네!! ㅋㅋ</span>
        </p>
    </div>
    
    <div class="container">
        <ul>
            <li><a href="{{ route('posts.create') }}">새글쓰기</a></li>
        </ul>
        포스트 리스트 페이지 입니다.
        <h3>최신 등록된 글</h3>
        <ul>
            @foreach( $postItems as $recentPost )
            <a href="{{ route('posts.show', ['id'=>$recentPost->id]) }}">
                <p>{{$recentPost->title}}</p>
                <p>{{$recentPost->content}}</p>
                <img src="{{ Storage::url($recentPost->img_path)}}" alt="">
            </a>
            @endforeach
        </ul>
        {{ $postItems->links() }}
    </div>
</div>
@endsection
