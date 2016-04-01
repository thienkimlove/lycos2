<div class="form-group">
    {!! Form::label('ask_person', 'Nguoi dat cau hoi') !!}
    {!! Form::text('ask_person', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
     {!! Form::label('question', 'Câu hỏi') !!}
     {!! Form::textarea('question', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('answer_person', 'Nguoi tra loi') !!}
    {!! Form::text('answer_person', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
     {!! Form::label('answer', 'Câu trả lời') !!}
     {!! Form::textarea('answer', null, ['class' => 'form-control']) !!}
</div>

  <div class="form-group">
        {!! Form::submit($submitText, ['class' => 'btn btn-primary form-control']) !!}
  </div>