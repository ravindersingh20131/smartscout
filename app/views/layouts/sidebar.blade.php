<!doctype html lang="en">
<html>

	<head>
		@include('includes.head')
		<!--<scripts></scripts>-->
	</head>

	<body>
		<div class="navigation" role="navigation">
			@include('user.navi')
		</div>

		<div id="wrap" class="row">
			<div id="sidebar" class="col-md-3">
				@include('includes.sidebar')
			</div>

			<div id="content" class="col-md-9">
				@yield('content')
			</div>
		</div>

		<div class="footer">
			@include('user.footer')
		</div>

	</body>

</html>