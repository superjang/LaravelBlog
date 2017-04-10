<div class="wrap_post_list">
    <ul class="post_list">
        @foreach( $postItems as $recentPost )
        <li class="post_item">
            <a href="{{ route('posts.show', ['id'=>$recentPost->id]) }}" class="post_link">
                <span class="item_photo" style="background:url({{$recentPost->img_path}}) no-repeat 50% 50%; background-size:cover;">
                {{--<span class="item_photo" style="background:url({{ Storage::url($recentPost->img_path)}}) no-repeat 50% 50%; background-size:cover;">--}}
                    <span class="item_title">{{$recentPost->title}}</span>
                </span>
                <p class="item_description">{{$recentPost->content}}</p>
            </a>
        </li>
        @endforeach
    </ul>
</div>
