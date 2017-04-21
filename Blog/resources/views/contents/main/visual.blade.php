@if($mainItems)
<div id="main_visual" style="background: url('{{$mainItems->img_path}}') no-repeat 50% 50%; background-size:cover;">
    <p class="main_visual_text">
        <span class="text_main">{{$mainItems->title}}</span>
        <span class="text_sub">{{$mainItems->sub_title}}</span>
    </p>
</div>
@else
<div id="main_visual">
    <p class="main_visual_text">
        <span class="text_main">메인 컨텐츠를 생성해 주세요.</span>
        <span class="text_sub"></span>
    </p>
</div>
@endif
