@extends('layouts.app')

@section('page')
<div id="app" class="page_main">
    @include('common.header')
    @include('contents.main.visual')

    <div class="container">
        <div class="section">
            <div class="section_inner">
                @include('contents.main.item_list')
            </div>
        </div>

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
</div>
@endsection
