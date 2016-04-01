@extends('frontend')

@section('content')

<!-- Main -->
<div class="main">
    <div class="col-left">
        <div class="banner">
            <img src="{{url('images/banner_lycoeye.jpg')}}" alt="Lycoeye">
        </div>
        <div class="box-tabs">
            <ul id="tabs" class="clearFix">
                <li><a href="#tab1">Lycoeye</a></li>
                <li><a href="#tab2">Dầu gấc nếp nguyên chất</a></li>
                <li><a href="#tab3">Nghiên cứu khoa học</a></li>
            </ul>
            <div id="content">
                <div id="tab1">
                    @if(!empty($settings['lyco_page_tab1']))
                       {!! $settings['lyco_page_tab1'] !!}
                    @else
                        <img src="{{url('images/lycoeye.jpg')}}" alt="Lycoeye">
                    @endif
                </div>
                <div id="tab2">
                    @if(!empty($settings['lyco_page_tab2']))
                        {!! $settings['lyco_page_tab2'] !!}
                    @endif
                </div>
                <div id="tab3">
                    @if(!empty($settings['lyco_page_tab3']))
                        {!! $settings['lyco_page_tab3'] !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('frontend.right')
</div>
<!-- endMain -->
<!-- BoxEvent -->
@include('frontend.box_event')
<!-- EndBoxEvent -->
@include('frontend.box_office')
<!-- BoxContact -->
@include('frontend.contact')

@endsection