@extends('layouts.app')

@section('content')
<div id="app" class="page_main">

    <div id="main_visual" style="background: url('{{$mainItems->img_path}}') no-repeat 50% 50%; background-size:cover;">
        <p class="main_visual_text">
            <span class="text_main">{{$mainItems->title}}</span>
            <span class="text_sub">{{$mainItems->sub_title}}</span>
        </p>
    </div>

    <div class="container">
        <div class="section">
            <div class="section_inner">
                <div class="wrap_item_list">
                    <div class="wrap_item_list_inner">
                        <p class="wrap_item_list_title">LATEST BLOG POST</p>
                        <ul class="item_list column4">
                            @foreach( $postItems as $item )
                            <li class="item">
                                <a href="{{ route('posts.show', $item->id) }}" class="item_link">
                                    {{--<img src="{{ Storage::url($recentPost->img_path)}}" alt="">--}}
                                    <span class="item_photo" style="background:url('{{$item->img_path}}') no-repeat 50% 50%; background-size:cover;"></span>
                                    <div class="item_content">
                                        <p class="item_content_title">{{$item->title}}</p>
                                        <p class="item_content_description">{{$item->content}}</p>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        {{--<div>
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
        </div>--}}

    </div>
</div>
@endsection
