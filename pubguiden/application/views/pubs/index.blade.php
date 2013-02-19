@layout('layouts/main') 
@section('content')
<section class="content container">
	<h2> {{ $pub->name }} </h2>

	<ul>
		<li> {{ $pub->description }} </li>
		<li>Adress: {{ $pub->address }}</li>
		<li>Billigaste öl: {{ $pub->lowest_price }} kr</li>
		<li>Quiz? 
			@if($pub->quiz == 0)
		    	Nej
		    @else
		    	Ja
		    @endif
		</li>
		<li>After Work? 
			@if($pub->after_work == 0)
		    	Nej
		    @else
		    	Ja
		    @endif
		</li>
	</ul>
	
	<div class="rate-button">
		@if (isset(Auth::user()->id))
			{{ HTML::link_to_action("ratings@index", 'Sätt betyg', array($pub->id)) }}
		@else
	  		{{ HTML::link('/login', 'Logga in för att sätta betyg.') }} 
	 	@endif
	</div>

	@if (isset(Auth::user()->id))
	
	<div class="comments">
		{{ Form::open()	}}	
	    	
	    	{{ Form::hidden('pub_id', $pub->id) }}
	    	{{ Form::hidden('user_id', Auth::user()->id) }}
	     	{{ Form::textarea('comment') }} 

	     	{{ Form::submit('Posta kommentar') }}
	    
	    {{ Form::close() }}
	</div>	
	@endif

	<div>
		@foreach()
		@endforeach
	</div>

</section>
@endsection