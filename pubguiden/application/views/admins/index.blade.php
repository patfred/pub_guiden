@layout('layouts/main')

@section('content')
	<section class="content container">
		<p>{{ HTML::link_to_route("create_pub", 'Lägg in ny pub') }}</p>
		<p>{{ HTML::link_to_route("edit_pub", 'Editera pub') }}</p>	
	</section>
@endsection