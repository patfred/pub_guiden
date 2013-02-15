@layout('layouts/main')
@section('content')
	<section class='content container search-result'>

	  @if (Session::has('notification'))
        <span class="notification">{{ Session::get('notification') }}</span>
    @endif
    
		<p>Du sökte på "{{ $search_string }}"</p>
		<p>Resultat:</p>
		
		@foreach($results as $result) 
			{{ $result->name }}
			@endforeach
	</section>
@endsection