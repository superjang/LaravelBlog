<div class="wrap_item_list">
    <div class="wrap_item_list_inner">
        <p class="wrap_item_list_title">LATEST BLOG POST</p>
        <ul class="item_list column4">
            @foreach( $postItems as $item )
            <li class="item">
                <a href="{{ route('posts.show', $item->id) }}" class="item_link">
                    {{--<img src="{{ Storage::url($recentPost->img_path)}}" alt="">--}}
                    <span class="item_photo" style="background:url('{{$item->img_path}}') no-repeat 50% 50%; background-size:cover;"></span>
                    <div class="item_content">
                        <p class="item_content_title">{{$item->title}}</p>
                        <p class="item_content_description">{{$item->content}}</p>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
