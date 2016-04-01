<div class="box-event">
    <h3 class="title">
        <span class="i-event"></span><a href="{{url('su-kien-nhan-hang')}}">Sự kiện nhãn hàng</a>
    </h3>
    <div class="block-list">
        @foreach ($events as $post)
            <article class="item">
                <a href="{{url($post->slug. '.html')}}" title="{{$post->title}}">
                    <img src="{{url('image-cached/400x245/' . $post->image)}}" />
                </a>
                <h3>{{str_limit($post->title, 40)}}</h3>
                <p>{{str_limit($post->desc, 70)}}</p>
                <a href="{{url($post->slug. '.html')}}" class="read-more">Chi tiết</a>
            </article>
        @endforeach
    </div>
</div>
<!-- EndBoxEvent -->