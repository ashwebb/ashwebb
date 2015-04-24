@extends('App')

@section('content')

<div class="col-md-6">

</div>

<div class="paper col-md-6">
  {!! Form::open(['action' => 'EmailController@sendEmail']) !!}
    <div class="form-group">
      {!! Form::label('name', 'Name:') !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('sender', 'Email:') !!}
      {!! Form::text('sender', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('body', 'Message:') !!}
      {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>
  {!! Form::submit('Send', ['class' => 'btn btn-info pull-right']) !!}
</div>

@stop
