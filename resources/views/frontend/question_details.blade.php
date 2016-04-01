@extends('frontend')

@section('content')
    <div class="banner">
        <img src="{{url('images/banner.jpg')}}" alt="Intro Lyco">
    </div>
    <!-- EndBanner -->
    <div class="box-question">
        <div class="question">
            <h3>
                {{$question->ask_person}}
            </h3>
            <div class="thumb">
                <img src="{{url('images/question.jpg')}}" alt="Question">
            </div>
            <div class="text">{{$question->question}}</div>
        </div>
        <div class="answer">
            <h3>
                {{$question->answer_person}}
            </h3>
            <div class="thumb">
                <img src="{{url('images/answer.jpg')}}" alt="Answer">
            </div>
            <div class="text">{{$question->answer}}</div>
        </div>
        <div class="slide-question">
            <div class="owl-carousel" id="slide-question">
                @foreach ($related as $question)
                <div class="item clearFix">
                    <h3>
                        <span>{{str_limit($question->ask_person, 40)}}</span>
                    </h3>
                    <p>{{str_limit($question->answer, 200)}}</p>
                    <a href="{{url('chi-tiet', $question->slug)}}">Xem trả lời</a>
                </div>
                @endforeach

            </div>
        </div>
        @include('frontend.slide_question')
    </div>
@endsection