		<title>{{ $title }}</title>
		<meta charset="UTF-8">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/app.min.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/font-awesome.min.css') }}" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="{{ URL::asset('assets/js/javascripts/bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('assets/js/require.js') }}"></script>

		@if( Route::currentRouteName() == 'user_profile' )
			<script src="{{ URL::asset( 'assets/js/chartjs/chart.js' ) }}"></script>

			<script type="text/javascript">

				//self invoking function just to test chartjs functionality
				$(document).ready(function() {

					var pv_chart = document.getElementById("pv_chart").getContext("2d"),
					pb_chart = document.getElementById("pb_chart").getContext("2d");
					//var myNewChart = new Chart(ctx[0]);

					var data_pv_chart = [
					    {
					        value: 63,
					        color:"#F7464A",
					        highlight: "#FF5A5E",
					        label: "Agents / Agencies"
					    },
					    {
					        value: 24,
					        color: "#46BFBD",
					        highlight: "#5AD3D1",
					        label: "Creatives"
					    },
					    {
					        value: 13,
					        color: "#FDB45C",
					        highlight: "#FFC870",
					        label: "Other"
					    }
					];

					new Chart( pv_chart ).Pie( data_pv_chart, {
						 animateScale: true,
						//Number - The percentage of the chart that we cut out of the middle
    					percentageInnerCutout : 78, // This is 0 for Pie charts
					});

					var data_pb_chart = [
					    {
					        value: 33,
					        color:"#F7464A",
					        highlight: "#FF5A5E",
					        label: "Arie Photography"
					    },
					    {
					        value: 25,
					        color: "#46BFBD",
					        highlight: "#5AD3D1",
					        label: "Debeers Campaign"
					    },
					    {
					        value: 6,
					        color: "#FDB45C",
					        highlight: "#FFC870",
					        label: "Hair Styles"
					    }
					];

					new Chart( pb_chart ).Pie( data_pb_chart, {
						 animateScale: true,
						//Number - The percentage of the chart that we cut out of the middle
    					percentageInnerCutout : 78, // This is 0 for Pie charts
					});

				});

			</script>
		@endif