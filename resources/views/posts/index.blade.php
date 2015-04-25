@extends('app')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <h1>Blog</h1>
      <hr>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      @foreach ($posts as $post)
        {{{ $post->created_at }}}
        <a href="{{ action('PostsController@show', [$post->id]) }}"><h3 class="text-primary">{{{ $post->title }}}</h3></a>
        <br>
      @endforeach
    </div>
    {{-- Sidebar --}}
    <div class="col-md-4">
      <img src="/img/working.jpg" class="img-responsive" alt="Ashley Webb at Parlevel Systems">
      <h4>Ashley Webb</h4>
      <p>Developer. Perpetually Curious.</p>
    </div>
  </div>
  <br>

@stop
