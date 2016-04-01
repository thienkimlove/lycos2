@extends('frontend')
@section('content')
    <div class="main">
        <div class="col-left">
            <div class="news">
                <article class="item last">
                    <h3 class="title">
                        {{$post->title}}
                    </h3>

                    {!! $post->content !!}

                </article>
            </div>
            <div class="box-comment">
                <div class="fb-comments" data-href="{{url($post->slug. '.html')}}" data-version="v2.3"></div>
            </div><!--//box-form-->
            <!-- Banner -->
            <div class="banner">
                <img src="{{url('images/banner.jpg')}}" alt="Intro Lyco">
            </div>
            <!-- EndBanner -->
        </div>
        @include('frontend.right')
    </div>
    @include('frontend.box_event')
    @include('frontend.box_office')
    @include('frontend.contact')
@endsection