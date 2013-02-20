@layout('layouts/main')

@section('content')
	<section class="content container">
		{{ Form::open('admins/create', 'POST') }}

			{{ Form::label('name', 'Namn:') }}
			{{ Form::text('name', Input::old('name')) }}
			{{ $errors->first('name', '<p>:message</p>' ) }}

			{{ Form::label('description', 'Beskrivning:') }}
			{{ Form::text('description', Input::old('description')) }}
			{{ $errors->first('description', '<p>:message</p>' ) }}

			{{ Form::label('quiz', 'Quiz:') }}
			{{ Form::select('quiz', array(0=>'Nej', 1=>'ja'),0) }}

			{{ Form::label('after_work', 'After work:') }}
			{{ Form::select('after_work', array(0=>'Nej', 1=>'ja'),0) }}

			{{ Form::label('lowest_price', 'Billigaste ölen:') }}
			{{ Form::text('lowest_price', Input::old('lowest_price')) }}
			{{ $errors->first('lowest_price', '<p>:message</p>' ) }}

			{{ Form::label('address', 'Adress:') }}
			{{ Form::text('address'), Input::old('address') }}
			{{ $errors->first('address', '<p>:message</p>' ) }}

			<p>{{ Form::submit('Lägg in ny pub') }}</p>

		{{ Form::token() . Form::close() }}

	</section>
@endsection
