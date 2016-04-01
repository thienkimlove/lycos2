@extends('frontend')
@section('content')
    <!-- Main -->
    <div class="main">
        <div class="col-left">
            <div class="news">
                @foreach ($posts as $i => $post)
                <article class="item {{($i ==  4) ? 'last' : ''}}">
                    <h3 class="title">{{$post->title}}</h3>
                    <a href="{{url($post->slug. '.html')}}" class="thumb">
                        <img src="{{url('image-cached/200x150/' . $post->image)}}" />
                    </a>
                    <p>{{str_limit($post->desc, 100)}}</p>
                    <a href="{{url($post->slug. '.html')}}">Chi tiết</a>
                </article>
                @endforeach
            </div>

            <div class="box-paging">
                {!! with(new \App\Pagination\AcmesPresenter($posts))->render() !!}
                <div class="clear"></div>
            </div>
            <!-- Question -->
            @include('frontend.slide_question')
            <!-- endQuestion -->
            <!-- Banner -->
            <div class="banner">
                <img src="{{url('images/banner.jpg')}}" alt="Intro Lyco">
            </div>
            <!-- EndBanner -->
        </div>
        @include('frontend.right')
    </div>
    <!-- endMain -->
    <!-- BoxEvent -->
    @include('frontend.box_event')
    @include('frontend.box_office')
    @include('frontend.contact')
@endsection