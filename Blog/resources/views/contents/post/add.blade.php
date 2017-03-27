@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <p><input type="text" name="title" placeholder="제목을 써주세용"/></p>
        <textarea name="content" id="" cols="30" rows="10">{{ old('description') }}</textarea>
        <p>
            <input type="file" name="img" accept="image/*" capture="gallery">
        </p>


        <div><button type="submit">글쓰기</button></div>
    </form>
</div>

@include('common.footer')
@endsection
