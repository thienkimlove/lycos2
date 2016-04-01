<footer class="footer">
    <div class="fixW">
        <div class="box-footer">
            <div class="item item-1">
                <div class="head">Mạng xã hội</div>
                <div class="area-social">
                    <ul class="social">
                        <li>
                            <a href="#"><span class="i-facebookf"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="i-tw"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="i-youtube"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="i-google"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item item-2">
                <div class="head">Danh mục</div>
                <ul class="nav-footer">
                    @include('frontend.menu')
                </ul>
            </div>
            <div class="item item-3">
                <div class="head">LIÊN HỆ</div>
                <ul class="nav-footer">
                    <li> Điện thoại: 0912571190</li>
                </ul>
            </div>
            <div class="item item-4">
                <div class="head">Đăng ký nhận tin</div>
                {!! Form::open(['method' => 'POST', 'route' => ['registerEmail'], 'name' => 'registerEmail']) !!}
                    <input type="email" name="email" data-ng-model="email" class="txt txt-email" placeholder="Email">
                    <input type="submit" value="Gửi" data-ng-click="registerEmailSubmit($event)" class="btn btn-submit">
                {!! Form::close()  !!}
            </div>
            <div class="clear"></div>
        </div>
    </div>
</footer>
<!-- EndFooter -->

<div class="overlay" id="overlay"></div>
@include('frontend.mobile')