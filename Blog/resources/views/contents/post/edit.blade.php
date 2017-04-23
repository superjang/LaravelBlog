@extends('layouts.app')

@section('page')
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
            <textarea name="content" id="" class="ckeditor" cols="30" rows="10">
                {{$postItem->content}}
            </textarea>
            <img src="{{ Storage::url($postItem->img_path)}}" alt="">
            <button type="submit" class="form-control">저장</button>
        </form>
    </div>
</div>
@endsection
