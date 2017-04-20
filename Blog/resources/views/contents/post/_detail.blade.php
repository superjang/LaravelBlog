@extends('layouts.app')

@section('page')
<div id="app" class="page_post_detail">
    @include('common.header')

    <div id="content">
        @if (Auth::check())
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
        @endif

        <div class="section">
            <div id="wrap_post_detail">
                <div class="post_header">
                    <h1 class="post_title">{{$postItem->title}}</h1>
                    <p class="post_info">
                        <span class="date">2017년 5월 12일</span> by
                        <span class="writer">장재원</span>
                    </p>
                </div>

                <div class="post_content">
                    {{$postItem->content}}
                    <img src="{{ Storage::url($postItem->img_path)}}" alt="">
                </div>
            </div>
        </div>


        <div class="section">
            <div class="wrap_comments">
                <p class="comments_title">여행자에게 한마디</p>
                @if (Auth::check())
                <form method="post" action="{{ route('comments.store') }}" >
                    {!! csrf_field() !!}
                    <label for="comment">댓글</label>
                    <input type="hidden" name="post_id" value="{{ $postItem->id }}">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <textarea name="content" id="comment" class="field_comment" cols="30" rows="10">댓글을 남겨주세요</textarea>
                    <input type="submit" class="btn_write_comment">
                    {{--<button type="button" class="btn_write_comment">댓글 작성</button>--}}
                </form>
                @endif

                <ul class="comments_list">
                    @forelse($postItem->comments as $comment)
                    <li class="comments_item">
                        <div class="writer">
                            {{-- $comment->user->profile_image --}}
                            <img class="user_photo" src="{{ Storage::url($comment->user->profile_image) }}" alt=""/>
                            <span class="user_name">{{ $comment->user->name }}</span>
                        </div>
                        <div class="comment">{{ $comment->content }}</div>
                        <form method="post" action="{{ route('comments.destroy', $comment->id) }}" >
                            {!! csrf_field() !!}
                            {{ method_field('delete') }}
                            <button type="submit">댓글삭제</button>
                        </form>
                    </li>
                    @empty
                    <li>댓글이 없습니다.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>

    @include('common.footer')
    @include('common.btn_goto_top_page')
</div>
@endsection
