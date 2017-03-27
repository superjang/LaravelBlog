@extends('layouts.app')

@section('content')
<div class="container">
    @foreach( $mainItems as $main )
        <p>{{$main->title}}</p>
        <p>{{$main->sub_title}}</p>
        <img src="{{ Storage::url($main->img_paht)}}" alt="">
    @endforeach
    <div>
        <h3>최신 등록된 글</h3>
        <ul>
            @foreach( $postItems as $recentPost )
            <li>
                <a href="{{ route('posts.show', $recentPost->id) }}">
                    <p>{{$recentPost->title}}</p>
                    <p>{{$recentPost->content}}</p>
                    <img src="{{ Storage::url($recentPost->img_path)}}" alt="">
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <div>
        <h3>최근 가입한 회원</h3>
        <ul>
            @foreach( $userItems as $user )
            <li>
                <a href="{{ route('users.show', ['id'=>$user->id]) }}">
                    <p>{{$user->age}}</p>
                    <p>{{$user->name}}</p>
                    <p>{{$user->sex}}</p>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>

@include('common.footer')

@endsection
