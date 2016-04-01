@extends('admin')

@section('content')
    @include('admin.question.heading')
    <div class="row">
        <div class="col-lg-6">
            <h2>Thêm Hỏi Đáp</h2>
            {!! Form::model($question = new App\Question, ['route' => ['admin.questions.store']]) !!}
            @include('admin.question.form', ['submitText' => 'Thêm hỏi đáp'])
            {!! Form::close() !!}
            @include('errors.list')

        </div>
    </div>
@stop