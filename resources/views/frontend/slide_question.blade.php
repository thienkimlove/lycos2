<div class="slide-question">
    <h3 class="title">
        <span class="i-question"></span><a href="#">Đặt câu hỏi</a>
    </h3>
    <div class="area-contact">
        <div class="col-left">
            {!! Form::open(['method' => 'POST', 'route' => ['createQuestion'], 'name' => 'questionForm']) !!}
                <input type="text" name="ask_person" data-ng-model="question.ask_person" class="txt txt-name" placeholder="Họ và tên"/>
                <input type="email" name="ask_email" data-ng-model="question.ask_email" class="txt txt-email" placeholder="Email"/>
                <input type="text" name="ask_phone" data-ng-model="question.ask_phone" class="txt txt-phone" placeholder="Số điện thoại"/>
                <input type="text" name="ask_address" data-ng-model="question.ask_address" class="txt txt-add" placeholder="Địa chỉ"/>
                <textarea name="question" data-ng-model="question.question" class="txt txt-content" placeholder="Nội dung"></textarea>
            <input type="submit" value="gửi đi" data-ng-click="questionSubmit($event)" class="btn btn-submit">
            <input type="reset" value="xóa hết" data-ng-click="questionReset($event)" class="btn btn-reset">
            {!!Form::close()!!}
        </div>
    </div>
</div>