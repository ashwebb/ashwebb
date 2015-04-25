<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>AshWebb</title>
    <meta name="viewport" content="width=device-width">
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified jQuery -->
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- SnapWidget -->
    <script src="http://snapwidget.com/js/snapwidget.js"></script>
    <!--[if lt IE 9]>
    <script src="http://beemuse.com/scripts/html5shiv.js"></script>
    <script src="http://beemuse.com/scripts/respond.js"></script>
    <![endif]-->
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">AshWebb <i class="fa fa-code-fork"></i></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/about">About Me</a></li>
          <li><a href="/posts">Blog</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="container">

  @if (Session::has('success'))
    <div class="alert alert-dismissible alert-success">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <p>{{{Session::get('success')}}}</p>
    </div>
  @endif

    @yield('content')

    <div class="row">
      <div class="col-xs-12">
        <hr>
        <p style="text-align:center;">made with <i class="fa fa-heart coral"></i> in texas</p>
      </div>
    </div>
  </main>

  <!-- Scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
