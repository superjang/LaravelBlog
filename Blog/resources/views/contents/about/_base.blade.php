@extends('layouts.app')

@section('page')
<div id="app" class="page_main">
    @include('common.header')
    @include('contents.post.visual')

    <div id="content">
        <div class="section">
            @include('contents.about.content')
        </div>
    </div>

    @include('common.footer')
    @include('common.btn_goto_top_page')
</div>
@endsection
