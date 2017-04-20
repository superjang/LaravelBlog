@extends('layouts.app')

@section('page')
<div id="app" class="page_main">
    @include('common.header')
    @include('contents.main.visual')

    <div id="content">
        @include('contents.main.item_list')

        {{--
            @foreach( $userItems as $user )
                <a href="{{ route('users.show', ['id'=>$user->id]) }}">
                    <p>{{$user->age}}</p>
                    <p>{{$user->name}}</p>
                    <p>{{$user->sex}}</p>
                </a>
            @endforeach
        --}}
    </div>

    @include('common.footer')
    @include('common.btn_goto_top_page')
</div>
@endsection
