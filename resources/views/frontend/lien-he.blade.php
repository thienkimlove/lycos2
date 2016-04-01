@extends('frontend')
@section('content')
    <div class="banner">
        <img src="{{url('images/banner.jpg')}}" alt="Intro Lyco">
    </div>
    <!-- EndBanner -->
    <!-- BoxContact -->
    @include('frontend.contact')
@endsection