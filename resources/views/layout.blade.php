
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">

    <!-- Custom styles for comments -->
    <link href="/css/comments.css" rel="stylesheet">

  </head>

  <body>

  	@include('partials.nav')
  

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Lara Blog</h1>
        <p class="lead blog-description">A blog built with Laravel and Bootstrap.</p>
      </div>
    </div>

    <div class="container">

 	  <div class="row">


      <div class="col-sm-8 blog-main">

 	        @yield('content')

      </div>

      <div class="col-sm-3 offset-sm-1 blog-sidebar">

          @include('partials.sidebar')

      </div>

      </div><!-- /.row -->

    </div><!-- /.container -->


    @include('partials.footer')
    
    <script src="https://use.fontawesome.com/ff8c386d80.js"></script>

  </body>
</html>
