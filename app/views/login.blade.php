<!doctype html lang="en">
<html>
	<head>
		<title>{{ $title }}</title>
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/app.min.css') }}">
	</head>

	<body class="login">
		<div class="login container" role="main">

			<!--<h1>Login page!</h1>-->
			
			<!--<form class="form-horizontal" role="form">-->
			{{ Form::open( [ 'class' => 'form-horizontal col-md-offset-2', 'role' => 'form', 'route' => 'login', 'method' => 'post' ] ) }}

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-4">
			      <input type="email" class="form-control" name="loginEmail" placeholder="Email" />
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-4">
			      <input type="password" class="form-control" name="loginPass" placeholder="Password" />
			    </div>
			  </div>

			  <!--<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label>
			          <input type="checkbox" name="remember_user"> Remember me
			        </label>
			      </div>
			    </div>
			  </div>-->

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10 login-submit">
			      <button type="submit" class="btn btn-primary">Sign in</button>
			      <button type="submit" class="btn btn-primary">Sign Up!</button>
			    </div>
			  </div>

			  <!--<div class="form-group">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-default">Sign Up!</button>
			    </div>
			  </div>-->
			
			{{ Form::close() }}
			<!--</form>-->

		</div>
	</body>
</html>