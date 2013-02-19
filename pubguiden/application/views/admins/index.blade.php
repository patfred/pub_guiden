@layout('layouts/main')

@section('content')
	<section class="content container">
		<p>{{ HTML::link_to_route("crud_admins", 'Lägg in ny pub') }}</p>
	</section>
@endsection