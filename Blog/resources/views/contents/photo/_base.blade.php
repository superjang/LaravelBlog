@extends('layouts.app')

@section('page')
<div id="app" class="page_photo_list">
    @include('common.header')

    <div class="container">

        <div class="section">
            <div class="section_inner">
                <div class="page_info">
                    <h1 class="page_info_title">PHOTO LIST</h1>
                    <select name="" id="" class="list_sort">
                        <option value="as">최신 포스트</option>
                        <option value="as">인기있는 포스트</option>
                    </select>
                    <select name="" id="" class="list_filter">
                        <option value="as">홍콩</option>
                        <option value="as">미국</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section_inner">
                @include('contents.photo.list')
            </div>
        </div>
    </div>

    @include('common.footer')
</div>
@endsection
