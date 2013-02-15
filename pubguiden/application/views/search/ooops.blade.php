@layout('layouts/main')
@section('content')
	<section class='content container search-result'>

	  @if (Session::has('notification'))
        <span class="notification">{{ Session::get('notification') }}</span>
    @endif
    
		<p>Din sökning gav inga träffar. Försök igen!</p>
		
		
		
	</section>
@endsection