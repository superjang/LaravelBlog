@extends('layouts.app')

@section('page')
<div id="app" class="page_post_write">
    @include('common.header')
    <div class="container">

        <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <p><input type="text" name="title" placeholder="제목을 써주세용"/></p>
            <textarea name="content" id="content" rows="10" cols="80">
                {{ old('description') }}
            </textarea>
            <p>
                <label for="pick">사진찍기</label>
                <input type="file" name="img" id="pick" accept="image/*" capture="gallery">
            </p>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                window.onload = function(){
                    CKEDITOR.replace( 'content' ,{
                        filebrowserUploadUrl: '{{ route("util.image.upload") }}'
                    });
                    $('#_btnWritePost').on('click', function(){
                        CKEDITOR.instances.editor1.getData();
                    });
                };
            </script>
            <button type="submit" id="_btnWritePost">글쓰기</button>
        </form>
    </div>
    @include('common.footer')
</div>
@endsection
