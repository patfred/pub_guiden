@layout('layouts/main')

@section('content')
<section class="content">
	<h2>Top 20</h2>	
	@foreach($pubs as $pub)
			<dt> <i class="icon-map-marker"></i>{{ HTML::link_to_action("pubs@index", $pub->name, array($pub->id)) }} </dt>
	@endforeach
</section>	
@endsection