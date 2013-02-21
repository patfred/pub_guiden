@layout('layouts/main')

@section('content')
	<section class="content container">
		@if (Session::has('message'))
        	<p>{{ Session::get('message') }}</p>
  		@endif
		@foreach($pubs as $pub)
			<li> {{ HTML::link_to_action("admins@edit_pub", $pub->name, array($pub->id)) }} </li>
		@endforeach <br />
			<p>{{ HTML::link_to_route("admins", 'Tillbaka') }}</p>
	</section>
@endsection




  