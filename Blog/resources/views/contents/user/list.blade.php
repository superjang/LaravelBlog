@extends('layouts.app')

@section('content')
<div class="container">
    사용자 리스트 페이지
    <ul>
        @foreach( $data as $user )
        <li>
            <a href="{{ route('users.show', ['id'=>$user->id]) }}">
                <img src="{{ Storage::url($user->profile_image) }}" alt="" style="width:50px; height:50px; border-radius:50%;">
                <p>{{ $user->email }}</p>
                <p>{{ $user->name }}</p>
            </a>
        </li>
        @endforeach
    </ul>
    {{ $data->links() }}
</div>
@endsection
