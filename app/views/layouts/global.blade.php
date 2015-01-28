<!doctype html lang="en">
<html>

	<head>
		<title>{{ $title }}</title>
		<meta charset="UTF-8">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/app.min.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/font-awesome.min.css') }}" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="{{ URL::asset('assets/js/javascripts/bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('assets/js/require.js') }}"></script>
		<!--<scripts></scripts>-->
	</head>

	<body>
		<div class="navigation" role="navigation">
			@include('user.navi')
		</div>

		<div id="wrap" class="row">
			@yield('content')
		</div>

		<div class="footer">
			@include('user.footer')
		</div>

	</body>

</html>