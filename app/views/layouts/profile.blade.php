<!doctype html lang="en">
<html>

	<head>
		@include('includes.head')
		<!--<scripts></scripts>-->
	</head> 

	<body>
		<div class="container-fluid">

			<div class="profile-wrap">

			<div class="row">
				<div class="navigation" role="navigation">
					@include('user.navi')
				</div> <!-- end .navigation -->
			</div> <!-- end .row -->

			<div class="row">
			
				<div class="col-md-2 col-lg-2 removeGutters">

					<div id="sidebar">
						@include('includes.profile.sidebar')
					</div>

				</div> <!-- end .col-md-2 -->

				<div class="col-md-10 removeGutters">
					<div id="content">
						@yield('content')
					</div> <!-- end #content -->
				</div>
			</div> <!-- end .row -->
			
			</div> <!-- end .profile-wrap -->

		</div> <!-- end .container -->
	</body>

</html>