@extends('app')

@section('content')

<div class="row">
  <div class="col-md-12">
    <h1>Contact</h1>
    <hr>
  </div>
</div>

<div class="col-md-8">
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

{{-- Sidebar --}}
<div class="col-md-4">
  <img src="/img/working.jpg" class="img-responsive" alt="Ashley Webb at Parlevel Systems">
  <h4>Ashley Webb</h4>
  <p>Developer. Perpetually Curious.</p>
</div>

@stop
