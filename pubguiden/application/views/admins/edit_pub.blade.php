@layout('layouts/main')

@section('content')
	<section class="content container">
			<h1>Editing {{ $pub->name }}</h1>

		{{ Form::open('admins/update', 'PUT') }}

			{{ Form::label('name', 'Namn:') }}
			{{ Form::text('name', $pub->name) }}
			{{ $errors->first('name', '<p>:message</p>' ) }}

			{{ Form::label('description', 'Beskrivning:') }}
			{{ Form::text('description', $pub->description) }}
			{{ $errors->first('description', '<p>:message</p>' ) }}

			{{ Form::label('quiz', 'Quiz:') }}
			{{ Form::select('quiz', array(0=>'Nej', 1=>'ja'),0) }}

			{{ Form::label('after_work', 'After work:') }}
			{{ Form::select('after_work', array(0=>'Nej', 1=>'ja'),0) }}

			{{ Form::label('lowest_price', 'Billigaste ölen:') }}
			{{ Form::text('lowest_price', $pub->lowest_price) }}
			{{ $errors->first('lowest_price', '<p>:message</p>' ) }}

			{{ Form::label('address', 'Adress:') }}
			{{ Form::text('address', $pub->address) }}
			{{ $errors->first('address', '<p>:message</p>' ) }}

			{{ Form::hidden('id', $pub->id) }}

			<p>{{ Form::submit('Uppdatera pub') }}</p>

		{{ Form::close() }} 
		
	</section>
@endsection
