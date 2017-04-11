<div class="wrap_photo_list">
    <ul class="photo_list">
        @foreach( $photo as $item )
        <li class="post_item">
            <a href="{{ route('posts.show', ['id'=>$item->id]) }}" class="post_link">
                <span class="item_photo" style="background:url({{$item->img_path}}) no-repeat 50% 50%; background-size:cover;">
                    <span class="item_title">{{$item->title}}</span>
                </span>
            </a>
        </li>
        @endforeach
    </ul>
</div>
