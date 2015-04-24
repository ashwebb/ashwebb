@extends('App')

@section('content')

<div class="row">
  <div class="col-md-12">
    <h1>Blog</h1>
    <hr>
  </div>
</div>

<div class="col-md-8">
  <article>
    <h3 class="text-primary">{{{ $post->title }}}</h3>
    <p>
      Posted on {{{ $post->created_at }}} | by {{{ $user->name }}}
    </p>
    <hr>
    <p>{{ $post->body }}</p>
  </article>
  <a href="/blog"><i class="fa fa-long-arrow-left"></i> back to blog</a>
</div>

{{-- Sidebar --}}
<div class="col-md-4">
  <img src="/img/working.jpg" class="img-responsive" alt="Ashley Webb at Parlevel Systems">
  <h4>Ashley Webb</h4>
  <p>Developer. Perpetually Curious.</p>
</div>

@stop
