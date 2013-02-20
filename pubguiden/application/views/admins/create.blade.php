@layout('layouts/main')

@section('content')
	<section class="content container">

		{{ Form::open('admins/create', 'POST') }}

			{{ Form::label('name', 'Namn:') }}
			{{ Form::text('name', Input::old('name')) }}

			{{ Form::label('description', 'Beskrivning:') }}
			{{ Form::text('description') }}

			{{ Form::label('quiz', 'Quiz:') }}
			{{ Form::select('quiz', array(0=>'Nej', 1=>'ja'),0) }}

			{{ Form::label('after_work', 'After work:') }}
			{{ Form::select('after_work', array(0=>'Nej', 1=>'ja'),0) }}

			{{ Form::label('lowest_price', 'Billigaste ölen:') }}
			{{ Form::text('lowest_price') }}

			{{ Form::label('address', 'Adress:') }}
			{{ Form::text('address') }}

			<p>{{ Form::submit('Lägg in ny pub') }}</p>

		{{ Form::close() }}

	</section>
@endsection
