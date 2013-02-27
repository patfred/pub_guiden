@layout('layouts/main')

@section('content')
<section class="content container">
	<h2>Pubar nära dig</h2>
	<p>Din position:	
	<p id="demo"></p>
	<p id="json_test"></p>
	<ul>
		@foreach($pubs as $pub)
			<li>{{ HTML::link_to_action("pubs@index", $pub->name, array($pub->id)) }}<span id="pub_<?php echo $pub->id; ?>"></span></li>
		@endforeach
	</ul>
</section>
@endsection
@section('scripts')
	<script>
		$.get('http://localhost/pub_guiden/pubguiden/public/home/json', function(result){
		if( sessionStorage.lat ){
			for(var i=0; i<result.length; i++){
				$('#pub_' + (i+1) ).append("<p>Du är X meter ifrån " + result[i].attributes.name + "</p>")
					.append('<p>Lat:' + sessionStorage.lat + '</p>')
					.append('<p>Long:' + sessionStorage.lng + '</p>');
			}
		} else { 
			$('#json_test').append("<p>No session storage found!</p>");
		}
			// for(var i=0; i<result.length; i++){
			// 		pub_lat = result[i].attributes.latitude;
			// 		pub_long = result[i].attributes.longitude;
			// 		$('#json_test').append( "<p>" + pub_long + "</p>").append( "<p>" + pub_lat + "</p>");
			// 	}
		});
	</script>
@endsection
