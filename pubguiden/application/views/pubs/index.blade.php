@layout('layouts/main') 
@section('content')
<section class="content container">
	<h2> {{ $pub->name }} </h2>

	<ul>
		<li> {{ $pub->description }} </li>
		<li>Adress: {{ $pub->address}}</li>
		<li>Billigaste öl: {{ $pub->lowest_price }} kr</li>
		<li>Quiz? @if($pub->quiz == 0)
		    			Nej
		    			@else
		    			Ja
		    		@endif</li>
		<li>After Work? @if($pub->after_work == 0)
		    			Nej
		    			@else
		    			Ja
		    		@endif</li>
	</ul>

	<a href="<?php echo URL::to_action('ratings@index') ?>">
		<button class="rate-button">Sätt betyg</button>
	</a>
</section>
@endsection