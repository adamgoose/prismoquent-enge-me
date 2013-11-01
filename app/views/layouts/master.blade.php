<!DOCTYPE html>
<html>
  <head>
    <title>Prismoquent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/custom.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/prettifier.css">

    <!--[if lt IE 9]>
      <script src="/assets/js/html5shiv.js"></script>
      <script src="/assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="prettyPrint()">

    <div id="leader">
      <div class="container">
        <h1>Prismoquent</h1>
      </div>
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
            <li class="{{Request::is('/') ? "active" : ""}}"><a href="/">Home</a></li>
            <li class="{{Request::is('installation') ? "active" : ""}}"><a href="/installation">Installation</a></li>
            <li class="{{Request::is('usage') ? "active" : ""}}"><a href="/usage">Usage</a></li>
            <li class="{{Request::is('caching') ? "active" : ""}}"><a href="/caching">Caching</a></li>
            <li class="{{Request::is('contribute') ? "active" : ""}}"><a href="/contribute">Contribute</a></li>
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
    <script src="/assets/js/prettify.js"></script>

    @yield('scripts')

  </body>
</html>
