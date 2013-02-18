@layout('layouts/main')
@section('content')
	<section class='content container search-result'>

	  @if (Session::has('notification'))
        <span class="notification">{{ Session::get('notification') }}</span>
    @endif
    	<h2>Sökresultat</h2>
		<p>Du sökte på "{{ $search_string }}"</p>
		<ul>
		
		@foreach($results as $result) 
			<li>{{ HTML::link_to_action("pubs@index", $result->name, array($result->id)) }} </li>
		@endforeach
	</ul>
	</section>
@endsection