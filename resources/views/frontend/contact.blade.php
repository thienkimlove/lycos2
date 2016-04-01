<!-- BoxContact -->
<div class="box-contact">
    <div class="area-contact">
        <h3 class="title">
            <span class="i-contact"></span><a href="#">Liên hệ</a>
        </h3>
        <div class="col-left">
            {!! Form::open(['method' => 'POST', 'route' => ['saveContact'], 'name' => 'contactForm']) !!}
                <input type="text" data-ng-model="contact.name" name="name" class="txt txt-name" placeholder="Họ và tên"/>
                <input type="email" data-ng-model="contact.email" name="email" class="txt txt-email" placeholder="Email"/>
                <input type="text" data-ng-model="contact.phone" name="phone" class="txt txt-phone" placeholder="Số điện thoại"/>
                <textarea name="content" data-ng-model="contact.content" class="txt txt-content" placeholder="Nội dung"></textarea>
            <input type="submit" value="gửi đi" data-ng-click="formSubmit($event)" class="btn btn-submit">
            <input type="reset" value="xóa hết" data-ng-click="formReset($event)" class="btn btn-reset">
            {!!Form::close()!!}
        </div>
    </div>
    <div class="area-social">
        <h3 class="title">
            <span class="i-facebook"></span>
            <a href="https://www.facebook.com/lycoeye">Kết nối</a>
        </h3>
        <div class="area-fb">
            <div class="fb-page" data-href="https://www.facebook.com/lycoeye" data-width="450" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/lycoeye"><a href="https://www.facebook.com/lycoeye">Lycoeye - Sáng mắt, sáng tương lai</a></blockquote></div></div>
        </div>
    </div>
</div>
<!-- EndBoxContact -->