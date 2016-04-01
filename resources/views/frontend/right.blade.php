<div class="col-right">
    <div class="news">
        <h3 class="title">
            <span class="i-news"></span>
            Tin nổi bật
        </h3>
        @foreach ($hotPosts as $post)
            <article class="item">
                <a href="{{url($post->slug. '.html')}}" class="thumb">
                    <img src="{{url('image-cached/120x120/' . $post->image)}}" />
                </a>
                <h3>{{str_limit($post->title, 40)}}</h3>
                <footer>
                    <span class="date fl">{{$post->updated_at}}</span>
                    <a href="{{url($post->slug. '.html')}}" class="fr">Chi tiết</a>
                </footer>
            </article>

        @endforeach

    </div>
    <div class="news">
        <h3 class="title">
            <span class="i-eye"></span>
            Tin liên quan
        </h3>
        @foreach ($reasonPosts as $post)
            <article class="item">
                <a href="{{url($post->slug. '.html')}}" class="thumb">
                    <img src="{{url('image-cached/120x120/' . $post->image)}}" />
                </a>
                <h3>{{str_limit($post->title, 40)}}</h3>
                <footer>
                    <span class="date fl">{{$post->updated_at}}</span>
                    <a href="{{url($post->slug. '.html')}}" class="fr">Chi tiết</a>
                </footer>
            </article>
        @endforeach
    </div>
    @if (!empty($settings['video']))
    <div class="news">
        <h3 class="title">
            <span class="i-video"></span>
            Video
        </h3>
        <div class="box-video">
            <div class="videoBoxIn">
                <div class="videoBoxInObject">
                   {!! $settings['video'] !!}
                </div>
            </div>
        </div>
    </div>
    @endif
</div>