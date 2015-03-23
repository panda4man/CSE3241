<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/index.css">
    </head>
    <body>
  		<nav class="navbar navbar-default navbar-fixed-top">
        	<div class="container">
	          	<div class="navbar-header">
	            	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		              	<span class="sr-only">Toggle navigation</span>
		              	<span class="icon-bar"></span>
		              	<span class="icon-bar"></span>
		              	<span class="icon-bar"></span>
	            	</button>
	            	<a class="navbar-brand" href="/books"><?= Config::get('constants.site_name')?></a>
	          	</div>
	          	<div id="navbar" class="navbar-collapse collapse">
	            	<ul class="nav navbar-nav navbar-right">
		              	<li class="active"><a href="#">Home</a></li>
		              	<li><a href="#">About</a></li>
		              	@if(Auth::check())
		              	<li class="dropdown">
		                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{$user->name}}<span class="caret"></span></a>
		                	<ul class="dropdown-menu" role="menu">
		                		<li>{{link_to_route('profiles.show', 'View', array($user->id))}}</li>
		                		<li>{{link_to_route('profiles.edit', "Edit", array($user->id))}}</li>
		                  		<li><a href="{{ URL::to('logout') }}">Logout</a></li>
		                	</ul>
		              	</li>
		              	@endif
	            	</ul>
	        	</div><!--/.nav-collapse -->
        	</div><!--/.container-fluid -->
     	</nav>
        <div class="container">
        	@yield('content');
        </div><!-- /.container -->
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="/assets/js/bootstrap.min.js"></script>
    </body>
</html>