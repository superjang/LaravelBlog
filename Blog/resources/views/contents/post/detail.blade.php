@extends('layouts.app')

@section('content')
<div id="app" class="page_post_detail">
    <div class="container">
        <ul>
            <li><a href="{{ route('posts.index')}}">목록으로 가기</a></li>
            <li><a href="{{ route('posts.create') }}">새글쓰기</a></li>
            <li>
                <a href="{{ route('posts.edit', $postItem->id) }}">글 수정</a>
            </li>

            <li>
                <form method="post" action="{{ route('posts.destroy', $postItem->id) }}" >
                    {!! csrf_field() !!}
                    {{ method_field('delete') }}
                    <button type="submit">글삭제</button>
                </form>
            </li>
        </ul>

        포스트 상세 페이지 입니다.
        <h1>타이틀 : {{$postItem->title}}</h1>
        <p>{{$postItem->content}}</p>
        <img src="{{ Storage::url($postItem->img_path)}}" alt="">

        @if (Auth::check())
        <h3>댓글 작성</h3>

        <form method="post" action="{{ route('comments.store') }}" >
            {!! csrf_field() !!}
            <input type="hidden" name="post_id" value="{{ $postItem->id }}">
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <input type="text" name="content" class="form-control" style="margin-bottom:10px;">
            <input type="submit" class="form-control">
        </form>
        @endif

        @forelse($postItem->comments as $comment)
        <div>

            @if (session('errorMsg'))
            <div class="alert alert-success">
                {{ session('errorMsg') }}
            </div>
            @endif

            <strong>작성자 : {{ $comment->user->name }}</strong>
            <p>ㄴ {{ $comment->content }}</p>
            <form method="post" action="{{ route('comments.destroy', $comment->id) }}" >
                {!! csrf_field() !!}
                {{ method_field('delete') }}
                <button type="submit">댓글삭제</button>
            </form>
        </div>
        @empty
        <p>댓글이 없습니다 </p>
        @endforelse
    </div>
</div>
@endsection
