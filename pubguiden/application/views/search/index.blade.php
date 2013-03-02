@layout('layouts/main')
@section('content')
	<section class='content container search-result'>
	   	<h1>Sökresultat</h1>
	   	@if($search_string != '' && $results)
			<p class="info-block">Du sökte på "{{ $search_string }}", följande pubar hittades:</p>
			<ul class="pub-list">		
			@foreach($results as $result) 
				<li>{{ HTML::link_to_action("pubs@index", $result->name, array($result->id)) }} </li>
			@endforeach
			</ul>	
		@else
			<p>Din sökning gav inga resultat. Försök igen!</p>
		@endif
	</section>
@endsection