@extends('layouts.app')

@section('content')
<div class="container">
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
@endsection
