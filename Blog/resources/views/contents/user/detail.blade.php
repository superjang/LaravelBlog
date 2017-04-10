<img src="{{ Storage::url($data->profile_image) }}" alt="" style="width:50px; height:50px; border-radius:50%;">
<strong>{{$data->name}}</strong> 사용자 페이지
<p>Eamil : {{$data->email}}</p>
<p>성별 : {{$data->sex}}</p>
<p>나이 : {{$data->age}}</p>

<strong>{{$data->name}}</strong> 사용자의 작성글
<ul>
    @foreach($data->posts as $post)
    <li>
        <a href="{{ route('posts.show', $post->id)}}">
            <p>{{$post->title}}</p>
            <p>{{$post->content}}</p>
        </a>
    </li>
    @endforeach
</ul>

<strong>{{$data->name}}</strong> 사용자 작성 댓글
<ul>
    @foreach($data->comments as $comments)
    <li>
        <a href="{{ route('posts.show', $comments->post_id)}}">
            <p>{{$comments->content}}</p>
        </a>
    </li>
    @endforeach
</ul>
