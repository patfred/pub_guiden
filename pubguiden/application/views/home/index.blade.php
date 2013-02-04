@layout('layouts/main')

<dl>
	@foreach($pubs as $pub)
		    <dt>{{ HTML::link_to_action("pub@view", $pub->name, array($pub->id)) }} </dt>
	@endforeach
</dl>