<!doctype html lang="en">
<html>

	<head>
		@include('includes.head')
		<!--<scripts></scripts>-->
	</head>

	<body>

		<div id="wrap" class="container-fluid">

			<div class="row">
				<div class="navigation" role="navigation">
					@include('user.navi')
				</div>

				<div class="col-md-11">

					<div class="row">

						<div id="sidebar" class="col-md-3 removeGutters">
							@include('includes.sidebar')
						</div>

						<div id="content" class="col-md-9">
							@yield('content')
						</div>

					</div>

				</div> <!-- end .col-md-11 -->

			</div> <!-- end .row -->

		</div> <!-- end #wrap -->

		<div class="footer">
			@include('user.footer')
		</div>

	</body>

</html>