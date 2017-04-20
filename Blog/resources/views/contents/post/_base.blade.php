@extends('layouts.app')

@section('page')
<div id="app" class="page_post_list">
    @include('common.header')
    @include('contents.post.visual')

    <div id="content">
        @include('contents.post.list_header')
        @if (Auth::check())
        <ul>
            <li><a href="{{ route('posts.create') }}">새글쓰기</a></li>
        </ul>
        @endif
        @include('contents.post.list')
        @include('common.pagination')
    </div>

    @include('common.footer')
    @include('common.btn_goto_top_page')
</div>
@endsection
