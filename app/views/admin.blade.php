<!doctype html>
<html lang="en">
    <head>
        <meta name="description" content="Grace Faubion's Resume, Portfolio and Blog">
        <meta name="keywords" content="HTML,CSS,JavaScript,PHP,jQuery,Laravel">
        <meta name="author" content="Grace Faubion">
        <meta charset="UTF-8">
        <title>Grace's Blog</title>
        <script src="/js/jquery.js"></script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/flatly-bootstrap.css">
        <link rel="stylesheet" href="/css/resume.css">
    </head>
    <body>
        <!-- Nav Bar for all pages -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{{ action('PostsController@index') }}}"> Admin</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                    	<li><a class="nav-text" href="{{{ action('HomeController@showHome') }}}">View Website</a></li>
                        <li class="dropdown">
                    @if (Auth::check())
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{{action('HomeController@logout')}}}">Logout ({{{ Auth::user()->first_name }}})</a></li>
                        <li><a href="#">Create New User</a></li>
                        <li><a href="#">Edit My Account</a></li>
                        <li><a href="{{{ action('PostsController@create')}}}">Create New Post</a></li>
                    </ul>
                    @endif
                        </li>
                    </ul>
                </div>
        </nav>
        <!-- Success and Error messages when submiting forms -->
        @if (Session::has('successMessage'))
        <div class="alert alert-success" style="text-align:center">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
        <div class="alert alert-danger" style="text-align:center">{{{ Session::get('errorMessage') }}}</div>
        @endif

        <div class="container">
        @if(Auth::check())
        	<h1>Welcome Admin!</h1>
        @else
        	<div class="col-md-4"></div>
       		<div class="container col-md-4">
		       	{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}

		            <h2 class="form-signin-heading">Please sign in</h2>
		            {{ Form::label('email', 'Email Address') }}
		            {{ Form::text('email', null, array('class' => 'form-control')) }}

		            {{ Form::label('password', 'Password') }}
		            {{ Form::password('password', array('class' => 'form-control')) }}

		            {{ Form::label('remember', 'Remember Me') }}
		            {{ Form::checkbox('remember', 'remember-me', true); }}

			        {{ Form::submit('Sign in', array('class' => 'btn btn-lg btn-primary btn-block'))}}


			    {{ Form::close() }}
    		</div>
    		<div class="col-md-4"></div>
    	@endif
        </div>
    <!-- Fade out error or success messages after forms are submitted -->
    <script type="text/javascript">
        $('.alert-success').fadeOut(3000);
        $('.alert-danger').fadeOut(3000);
    </script>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</html>