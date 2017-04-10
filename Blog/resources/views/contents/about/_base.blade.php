@extends('layouts.app')

@section('page')
<div id="app" class="page_main">
    @include('common.header')
    @include('contents.post.visual')

    <div class="container">
        <div class="section">
            <div class="section_inner">
                @include('contents.about.content')
            </div>
        </div>
    </div>

    @include('common.footer')
</div>
@endsection
