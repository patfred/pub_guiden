@layout('layouts/main')

@section('content')
	<section class="content container">

		{{ Form::open('admins/create', 'POST') }}

		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name') }}

		{{ Form::label('description', 'Beskrivning:') }}
		{{ Form::text('description') }}



		{{ Form::label('quiz', 'Quiz:') }}
		{{ Form::radio('quiz', 'true') }}

		{{ Form::label('after_work', 'After work:') }}
		{{ Form::radio('after_work', 'true') }}



		{{ Form::label('lowest_price', 'Billigaste ölen:') }}
		{{ Form::text('lowest_price') }}

		{{ Form::label('address', 'Adress:') }}
		{{ Form::text('address') }}

		{{ Form::submit('Lägg in ny pub') }}

		{{ Form::close() }}

	</section>
@endsection
