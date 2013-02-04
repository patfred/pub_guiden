@layout('layouts/main')

<<<<<<< HEAD
<p>
	Här är pubs vyn
</p>
=======
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



>>>>>>> de1b1932ed4a70a5c6a7bd256322ab89056275e1
