<!DOCTYPE html>
<html>
  <head>
    <title>Prismoquent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/custom.css">

    <!--[if lt IE 9]>
      <script src="/assets/js/html5shiv.js"></script>
      <script src="/assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div id="leader">
      <h1>Prismoquent</h1>
    </div>

    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/install">Installation</a></li>
            <li><a href="/usage">Usage</a></li>
            <li><a href="/examples">Examples</a></li>
            <li><a href="/api">API</a></li>
            <li><a href="/contribute">Contributing</a></li>
          </ul>
          <ul class="nav navbar-nav pull-right">
            <li class="logo prismic"><a href="http://prismic.io" target="_blank"></a></li>
            <li class="logo laravel"><a href="http://laravel.com" target="_blank"></a></li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  </body>
</html>