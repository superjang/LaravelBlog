@extends('layouts.app')

@section('content')
<div id="app" class="page_post_list">
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

        <form method="post" action="{{ route('posts.update', $postItem->id) }}">
            {!! csrf_field() !!}
            {{ method_field('PUT') }}
            <h1>타이틀 : <input type="text" name='title' value="{{$postItem->title}}"></h1>
            <textarea name="content" id="" cols="30" rows="10">
                {{$postItem->content}}
            </textarea>
            <img src="{{ Storage::url($postItem->img_path)}}" alt="">
            <button type="submit" class="form-control">저장</button>
        </form>

        <h3>댓글 작성</h3>
        <form method="post" action="{{ route('comments.store') }}" >
            {!! csrf_field() !!}
            <input type="hidden" name="post_id" value="{{ $postItem->id }}">
            <input type="hidden" name="user_id" value="{{ $postItem->user_id }}">
            <input type="text" name="content" class="form-control" style="margin-bottom:10px;">
            <input type="submit" class="form-control">
        </form>
        @forelse($postItem->comments as $comment)
        <div>

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
