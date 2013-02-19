@layout('layouts/main')

@section('content')
	<section class="content container">

	@foreach($pubs as $pub)
			<li> {{ HTML::link_to_action("pubs@index", $pub->name, array($pub->id)) }} </li>
	@endforeach

	<!--Editing {{ $pub->name }}

		{{ Form::open('admins/edit', 'PUT') }}

			{{ Form::label('name', 'Namn:') }}
			{{ Form::text('name', $pub->name) }}

			{{ Form::label('description', 'Beskrivning:') }}
			{{ Form::text('description', $pub->description) }}

			{{ Form::label('quiz', 'Quiz:') }}
			{{ Form::select('quiz', array(0=>'Nej', 1=>'ja'),0, $pub->quiz) }}

			{{ Form::label('after_work', 'After work:') }}
			{{ Form::select('after_work', array(0=>'Nej', 1=>'ja'),0, $pub->after_work) }}

			{{ Form::label('lowest_price', 'Billigaste ölen:') }}
			{{ Form::text('lowest_price', $pub->lowest_price) }}

			{{ Form::label('address', 'Adress:') }}
			{{ Form::text('address', $pub->address) }}

			{{ Form::hidden('id', $pub->id) }}

			<p>{{ Form::submit('Uppdatera pub') }}</p>

		{{ Form::close() }}-->

	</section>
@endsection
