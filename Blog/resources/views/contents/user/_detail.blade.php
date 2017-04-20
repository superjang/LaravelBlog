@extends('layouts.app')

@section('page')
<div id="app" class="page_user_list">
    @include('common.header')

    <div id="content">
        <div class="section">
            @include('contents.user.detail')
        </div>
    </div>

    @include('common.footer')
    @include('common.btn_goto_top_page')
</div>
@endsection
