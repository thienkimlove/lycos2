@extends('frontend')
@section('content')
    <!-- Banner -->
    <div class="banner">
        <img src="{{url('images/banner.jpg')}}" alt="Intro Lyco">
    </div>
    <!-- EndBanner -->
    <!-- BoxEvent -->
    <div class="box-event">
        <h3 class="title">
            <span class="i-event"></span><a href="{{url('su-kien-nhan-hang')}}">Sự kiện nhãn hàng</a>
        </h3>
        <div class="block-list">
            <div class="row">
                @foreach ($posts->slice(0, 3) as $post)
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
            <div class="row">
                @foreach ($posts->slice(3, 3) as $post)
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
            <div class="row">
                @foreach ($posts->slice(6, 3) as $post)
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
            <div class="box-paging">
                {!! with(new \App\Pagination\AcmesPresenter($posts))->render() !!}
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- EndBoxEvent -->
   @include('frontend.box_office')

   @include('frontend.contact')
@endsection