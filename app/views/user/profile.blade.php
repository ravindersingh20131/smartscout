@extends( 'layouts.profile' )

@section( 'content' )

	<ul class="nav nav-tabs nav-justified">
		<li class="active">Profile</li>
		<li><a href="#">Photobooks</a></li>
		<li><a href="#">Analytics</a></li>
	</ul>

	<div class="content_container">

		<div class="col-md-2">
			<div class="profile_info_container">

			<ul class="profile_stats">
				<li>
					<span>4,517</span>
					<span>profile views</span>
				</li>
				<li>
					<span>2,417</span>
					<span>profile likes</span>
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
			</div> <!-- end .profile_info_container -->
		</div> <!-- end .row -->

		<div class="col-md-7 col-md-offset-1">

			<div class="row">

				<div class="main_content">

					<div class="col-md-9 photobooks_heading">
						<p><span>Photobooks</span> <button type="submit" class="btn btn-secondary">View All</button></p>
					</div>
					
					<div class="col-md-7 removeGutters">
						<p><img src="http://placehold.it/400x400" /></p>
					</div> <!-- end .col-md-10 -->

					<div class="col-md-2 removeGutters">

						<div class="sub_pics_container">
							<p><img src="http://placehold.it/100x99" /></p>
							<p><img src="http://placehold.it/100x99" /></p>
							<p><img src="http://placehold.it/100x99" /></p>
							<p><img src="http://placehold.it/100x99" /></p>
						</div> <!-- end .sub_pics_container -->

					</div> <!-- end .col-md-2 -->

				</div> <!-- end .main_content -->

			</div> <!-- end .row -->

			<div class="row stats_graphs">

				<div class="col-md-4">

					<div class="pb_views_container">
						<h4>Photobook Views</h4>
						<div class="pb_graph">
							<canvas id="pb_chart" width="200" height="150"></canvas>
						</div>

						<div class="pb_breakdown">

							<ul>
								<li><span>33%</span> Arie Photography</li>
								<li><span>25%</span> Debeers Campaign</li>
								<li><span>6%</span> Hair Styles</li>
							</ul>

						</div> <!-- end .pb_breakdown -->

					</div> <!-- end pb_views_container -->

				</div> <!-- end .col-md-4 -->

				<div class="col-md-4">

					<div class="pv_container">

						<h4>Profile Views</h4>

						<div class="pv_graph">
							<canvas id="pv_chart" width="200" height="150"></canvas>
						</div> <!-- end .pv_graph -->

						<div class="pv_breakdown">
							<ul>
								<li><span>63%</span> Agents / Agencies</li>
								<li><span>24%</span> Creatives</li>
								<li><span>13%</span> Other</li>
							</ul>
						</div> <!-- end .pv_breakdown -->

					</div> <!-- end .pv_container -->

				</div> <!-- end .col-md-4 -->

			</div> <!-- end .row -->

		</div> <!-- end .col-md-7 -->

	</div> <!-- end .content_container -->
@stop