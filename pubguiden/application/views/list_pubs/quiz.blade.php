@layout('layouts/main')
@section('content')
	<section class="content container">	
		<h1>Pubar med Quiz</h1>
		<ul class="pub-list">
		@foreach($pubs as $pub)
			<li>{{ HTML::link_to_action("pubs@index", $pub->name, array($pub->id)) }}</li>
		@endforeach
		</ul>
	</section>	
@endsection