@layout('layouts/main')

<h1>Detta är pubs/index</h1>
<dl>
@foreach($pubs as $pub)
	    <dt>{{ HTML::link_to_action("pub@view", $pub->name, array($pub->id)) }} </dt>
	    <dd>{{ $pub->description }} </dd>
	    <dd>Adress: {{ $pub->address}}</dd>
	    <dd>Billigaste öl: {{ $pub->lowest_price }} kr</dd>
	    <dd>Quiz? @if($pub->quiz == 0)
	    			Nej
	    			@else
	    			Ja
	    		@endif</dd>
		<dd>After Work? @if($pub->after_work == 0)
	    			Nej
	    			@else
	    			Ja
	    		@endif</dd>
	@endforeach
</dl>



