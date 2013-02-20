@layout('layouts/main')

@section('content')
	<section class="content container">

		@foreach($pubs as $pub)
			<li> {{ HTML::link_to_action("admins@edit_pub", $pub->name, array($pub->id)) }} </li>
		@endforeach

	</section>
@endsection
