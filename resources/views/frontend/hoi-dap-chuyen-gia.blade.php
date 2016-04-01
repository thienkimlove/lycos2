@extends('frontend')


@section('content')

<!-- Banner -->
<div class="banner">
    <img src="{{url('images/banner.jpg')}}" alt="Intro Lyco">
</div>
<!-- EndBanner -->
<div class="box-question">
    <div class="fixW">
        <div class="block-list">
            <div class="row">
                @foreach ($questions->slice(0, 3) as $i => $question)
                <article class="item {{($i == 2)? 'last' : ''}}">
                    <h3>{{str_limit($question->question, 40)}}</h3>
                    <p>{{str_limit($question->answer, 100)}}</p>
                    <a href="{{url('chi-tiet/'. $question->slug)}}">Chi tiết</a>
                </article>
                @endforeach
            </div>
            <div class="row">
                @foreach ($questions->slice(3, 3) as $i => $question)
                    <article class="item {{($i == 2)? 'last' : ''}}">
                        <h3>{{str_limit($question->question, 40)}}</h3>
                        <p>{{str_limit($question->answer, 100)}}</p>
                        <a href="{{url('chi-tiet/'. $question->slug)}}">Chi tiết</a>
                    </article>
                @endforeach

            </div>
            <div class="box-paging">
                {!! with(new \App\Pagination\AcmesPresenter($questions))->render() !!}
                <div class="clear"></div>
            </div>
        </div>
    </div>
    @include('frontend.slide_question')
</div>

@endsection