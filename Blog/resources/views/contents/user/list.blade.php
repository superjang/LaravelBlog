@extends('layouts.app')

@section('content')
<div class="container">
    사용자 리스트 페이지
    <ul>
        @foreach( $data as $user )
        <li>
            <a href="{{ route('users.show', ['id'=>$user->id]) }}">
                <p>{{ $user->email }}</p>
                <p>{{ $user->name }}</p>
            </a>
        </li>
        @endforeach
    </ul>
    {{ $data->links() }}
</div>
@endsection
