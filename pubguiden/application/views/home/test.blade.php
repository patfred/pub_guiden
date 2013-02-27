@layout('layouts/main')
@section('content')
	<section class="content container">	
		<div id="json_test">

		</div>
	</section>	
@endsection
@section('scripts')
	<script>
		$.get('json', function(result){
			for(var i=0;  i < result.length ;i++){
					$('#json_test').append( "<p>" + result[i].attributes.longitude + "</p>");
					$('#json_test').append( "<p>" + result[i].attributes.latitude + "</p>");
				}
		});
	</script>
@endsection
	

