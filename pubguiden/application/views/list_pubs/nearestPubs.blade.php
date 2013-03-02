@layout('layouts/main')

@section('content')
<section class="content container">
	<h1>Pubar nära dig</h1>
	<p class="info-block">Din position:

	<!-- geo-info shows current position for user -->
		<span id="geo-info"></span>
	</p>
	<ol class="top-list">
		@foreach($pubs as $pub)
			<li>{{ HTML::link_to_action("pubs@index", $pub->name, array($pub->id)) }}<span id="pub_{{ $pub->id}}"><i class="icon-double-angle-right"></i></span></li>
		@endforeach
	</ol>
</section>
@endsection
@section('scripts')
	<script>
		$.get('http://localhost:8888/pub_guiden/pubguiden/public/home/json', function(result){
			if( sessionStorage.lat ){
				var myLat = sessionStorage.lat;
				var myLong = sessionStorage.lng;
				for(var i=0; i<result.length; i++){
					$('#pub_' + (i+1) ).append("Du är " + calc_dist(myLat, myLong, result[i].attributes.latitude, result[i].attributes.longitude ) + " meter ifrån " + result[i].attributes.name)
						
				}
			} else { 
				$('#json_test').append("<p>No session storage found!</p>");
			}
		});
		function toRad(degrees){
 	    	return degrees * Math.PI / 180;
		}

		function calc_dist( lat1, long1, lat2, long2){
			var R = 6371000; // m
			var dLat = toRad(lat2-lat1);
			var dLong = toRad(long2-long1);
			var lat1 = toRad(lat1);
			var lat2 = toRad(lat2);
			var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
			        Math.sin(dLong/2) * Math.sin(dLong/2) * Math.cos(lat1) * Math.cos(lat2); 
			var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
			return Math.floor(distance = R * c);
		}
	</script>
@endsection
