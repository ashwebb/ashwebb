@extends('app')

@section('content')

<h1>Create a New Post</h1>

  {!! Form::open(['action' => 'PostsController@store', 'class' => 'form-horizontal']) !!}

  <div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('body', 'Body:', ['class' => 'control-label']) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('publish', 'Publish?', ['class' => 'control-label']) !!}
    {!! Form::checkbox('publish', true, ['class' => 'form-control']) !!}
  </div>

  {!! Form::submit('Create', ['class' => 'btn btn-primary pull-right']) !!}

  {!! Form::close() !!}

@stop
