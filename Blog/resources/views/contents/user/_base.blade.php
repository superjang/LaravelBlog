@extends('layouts.app')

@section('page')
<div id="app" class="page_user_list">
    @include('common.header')

    <div class="container">
        <div class="section">
            <div class="section_inner">
                @include('contents.user.list')
            </div>
        </div>

        <div class="section">
            <div class="section_inner">
                {{ $data->links() }}
            </div>
        </div>
    </div>

    @include('common.footer')
</div>
@endsection
