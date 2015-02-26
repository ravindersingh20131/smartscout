@extends( 'layouts.profile' )

@section( 'content' )
	<ul class="nav nav-tabs nav-justified">
		<li class="active">Profile</li>
		<li><a href="#">Photobooks</a></li>
		<li><a href="#">Analytics</a></li>
	</ul>

	<div class="content_container">

		<div class="col-md-2 profile_info_container">

			<ul class="profile_stats">
				<li>
					<span>4,517</span>
					<span>profile <br> views</span>
				</li>
				<li>
					<span>2,417</span>
					<span>profile <br> likes</span>
				</li>
			</ul> <!-- end profile_stats -->

			<div class="measurements_container">
				<h4>Measurements</h4>
				<ul>
					<li>Height: <i>5'10"</i></li>
					<li>Hair: <i>Brown</i></li>
					<li>Eyes: <i>Brown</i></li>
					<li>Bust: <i>34</i></li>
					<li>Waist: <i>24</i></li>
					<li>Hips: <i>34</i></li>
					<li>Shoe: <i>9</i></li>
				</ul>
			</div> <!-- end .measurements_container -->

			<div class="nationality_container">
				<h4>Nationality</h4>
				<p>American [icon]</p>
			</div> <!-- end nationality_container -->

			<div class="rep_container">
				<h4>Representation</h4>
				<ul>
					<li>
						<strong>New York</strong>
						<p>RED</p>
					</li>

					<li>
						<strong>Paris</strong>
						<p>Elite</p>
					</li>

					<li>
						<strong>Milan</strong>
						<p>Women Milan</p>
					</li>

					<li>
						<strong>London</strong>
						<p>Union Models</p>
					</li>

					<li>
						<strong>Hamburg</strong>
						<p>m4 models</p>
					</li>
				</ul>
			</div> <!-- end .rep_container -->

		</div> <!-- end profile_info_container -->

		<div class="row">
			<div class="col-md-7 main_content">
				<p><span>Photobooks</span> <button type="submit" class="btn btn-secondary">View All</button></p>
				<div class="col-md-10 removeGutters">
					<p>test</p>
				</div> <!-- end .col-md-10 -->

				<div class="col-md-2 removeGutters">
					<p>test 2 1 col</p>
					<p>test 2 2 col</p>
					<p>test 2 3 col</p>
					<p>test 2 4 col</p>
				</div> <!-- end .col-md-2 -->
			</div> <!-- end .main_content -->
		</div> <!-- end .row -->

	</div> <!-- end .content_container -->
@stop