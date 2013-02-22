@layout('layouts/main')
@section('content')
	<section class='content container search-result'>
   	<h2>Sökresultat</h2>
   	@if($search_string != '' && $results)
		<p>Du sökte på "{{ $search_string }}"</p>
		<ul>		
		@foreach($results as $result) 
			<li>{{ HTML::link_to_action("pubs@index", $result->name, array($result->id)) }} </li>
		@endforeach
	</ul>	
	@else
	<p>Din sökning gav inga resultat. Försök igen!</p>
	@endif
	</section>
@endsection