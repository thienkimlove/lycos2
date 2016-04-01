<!-- BoxOffice -->
<div class="box-office">
    <div class="group-title">
        <div class="thumb">
            <div class="i-office"></div>
        </div>
        <div class="office-room">
            <p>Phòng mạch</p>
            <h3>Dr.Mắt Tỏ</h3>
        </div>
    </div>
    <div class="data half">
        <div class="owl-carousel" id="slide-office01">
            @foreach ($questions->slice(0, 5)  as $question)
                <div class="item clearFix">
                    <h3>
                        <span>{{$question->ask_person}}</span>
                    </h3>
                    <p>{{str_limit($question->question, 100)}}</p>
                </div>
            @endforeach
        </div>
        <div class="btn-ask">
            <h3>
                <a href="{{url('hoi-dap-chuyen-gia')}}" title="Question">Đặt câu hỏi</a>
            </h3>
        </div>
    </div>
    <div class="question">
        <h3>Những câu hỏi mới nhất</h3>
        <div class="block-list">
        <div class="owl-carousel" id="slide-new-question">
        @foreach ($questions->chunk(5) as $groupQuestion)
        <div class="row">
            <ul class="list-question">
                @foreach ($groupQuestion as $question)
                    <li>{{str_limit($question->question, 60)}}</li>
                @endforeach
            </ul>
        </div>
        @endforeach
        </div>
        </div>

    </div>
    <div class="avatar">
        <img src="{{url('images/avatar.png')}}" alt="iconBaby">
    </div>
</div>
<!--endBoxOffice-->