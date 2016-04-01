@extends('admin')

@section('content')
  @include('admin.question.heading')
  <div class="row">
      <div class="col-lg-6">
          <h2>Sửa câu hỏi "{{ $question->question }}"</h2>
          {!! Form::model($question, ['method' => 'PATCH', 'route' => ['admin.questions.update', $question->id], 'files' => true]) !!}
              @include('admin.question.form', ['submitText' => 'Sửa'])
          {!! Form::close() !!}
          @include('errors.list')

      </div>
  </div>
@stop