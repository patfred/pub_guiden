@layout('layouts/main')

@section('content')
<section class="content container">
	<h2>Top 20</h2>	
	<ul>
		@foreach($pubs as $pub)
			<li> <i class="icon-map-marker"></i>{{ HTML::link_to_action("pubs@index", $pub->name, array($pub->id)) }} </li>
		@endforeach
	</ul>
</section>	
@endsection