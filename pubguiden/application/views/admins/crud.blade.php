@layout('layouts/main')

@section('content')
	<section class="content container">

		{{ Form::open('admins/create', 'POST') }}

		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name') }}

		{{ Form::submit('Lägg in ny pub') }}

		{{ Form::close() }}

	</section>
@endsection