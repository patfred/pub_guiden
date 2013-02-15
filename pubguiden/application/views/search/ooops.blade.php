@layout('layouts/main')
@section('content')
	<section class='content container search-result'>

	  @if (Session::has('notification'))
        <span class="notification">{{ Session::get('notification') }}</span>
    @endif
    
		<p>Försök igen!</p>
		
		
		
	</section>
@endsection