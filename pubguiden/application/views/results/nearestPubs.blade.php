@layout('layouts/main')

@section('content')
<section class="content container">
	<h2>Pubar nära dig</h2>	
	<ul>
		@foreach($pubs as $pub)
			<li>{{ HTML::link_to_action("pubs@index", $pub->name, array($pub->id)) }} </li>
		@endforeach
	</ul>
</section>	
@endsection