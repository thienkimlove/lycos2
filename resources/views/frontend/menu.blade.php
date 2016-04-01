<li>
    <a href="{{url('/')}}" class="{{ (!empty($active) && $active == true && $page == 'index') ?  'active' : '' }}">Trang chủ</a>
</li>

<li>
    <a class="{{(!empty($active) && $active == true && $page == 'sang-mat-sang-tuong-lai')? 'active' : ''}}" href="{{url('sang-mat-sang-tuong-lai')}}" title="Sáng mắt sáng tương lai">Sáng mắt sáng tương lai</a>
</li>
<li>
    <a class="{{(!empty($active) && $active == true && $page == 'lycoeye')? 'active' : ''}}" href="{{url('lycoeye')}}"  title="Lycoeye">Lycoeye</a>
</li>
<li>
    <a class="{{(!empty($active) && $active == true && $page == 'hoi-dap-chuyen-gia')? 'active' : ''}}" href="{{url('hoi-dap-chuyen-gia')}}" title="Hỏi đáp chuyên gia">Hỏi đáp chuyên gia</a>
<li>
    <a class="{{(!empty($active) && $active == true && $page == 'su-kien-nhan-hang')? 'active' : ''}}"  href="{{url('su-kien-nhan-hang')}}" title="Sự kiện nhãn hàng">Sự kiện nhãn hàng</a>
</li>
<li>
    <a class="{{(!empty($active) && $active == true && $page == 'chia-se')? 'active' : ''}}"  href="{{url('chia-se')}}" title="Chia sẻ">Chia sẻ</a>
</li>

<li>
    <a class="{{ (!empty($active) && $active == true && $page == 'lien-he') ? 'active' : '' }}" href="{{url('lien-he')}}" title="Liên hệ">Liên hệ</a>
</li>