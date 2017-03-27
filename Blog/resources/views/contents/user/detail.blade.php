@extends('layouts.app')

@section('content')
<div class="container">
    <strong>{{$data->name}}</strong> 사용자 페이지
    <p>Eamil : {{$data->email}}</p>

    <strong>{{$data->name}}</strong> 사용자의 작성글
    <ul>
    @foreach($data->posts as $post)
    <li>
        <a href="{{ route('posts.show', $post->id)}}">
            <p>{{$post->title}}</p>
            <p>{{$post->content}}</p>
        </a>
    </li>
    @endforeach
    </ul>

    <strong>{{$data->name}}</strong> 사용자 작성 댓글
    <ul>
        @foreach($data->comments as $comments)
        <li>
            <a href="{{ route('posts.show', $comments->post_id)}}">
                <p>{{$comments->content}}</p>
            </a>
        </li>
        @endforeach
    </ul>
</div>
@endsection
