@layout('layouts/main')
@section('content')
	<section class='content container search-result'>

	  @if (Session::has('notification'))
        <span class="notification">{{ Session::get('notification') }}</span>
    @endif
    
		Det här är search
	</section>
@endsection