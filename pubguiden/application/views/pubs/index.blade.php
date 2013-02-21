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
	
	<!-- Show comment form if user is logged in -->	
	@if (isset(Auth::user()->id))
	
	<div class="comment-form">
	<h3>Kommentera</h3>
		{{ Form::open()	}}	
	    	{{ Form::token() }}

	    	{{ Form::hidden('pub_id', $pub->id) }}
	    	{{ Form::hidden('user_id', Auth::user()->id) }}
	     	{{ Form::textarea('comment','', array('class'=>'comment-text')) }} 

	     	{{ Form::submit('Posta kommentar') }}
	    
	    {{ Form::close() }}
	</div>	
	@else
		<h3>Kommentera</h3>
		<p> Du måste vara inloggad för att kunna kommentera </p>	
	@endif
	@if (Session::has('message'))
        <p class=""> <i class='icon-ok-circle'></i>{{ Session::get('message') }}</p>
    @endif

	<div class="comments">	
	<h3>Kommentarer</h3>
		@foreach ($comments as $comment)
		<div class="comment">
	    	<h4> {{ $comment->user->username }}</h4> 
	    	<span class="comment-date"> <i class="icon-time"></i> {{ $comment->created_at }} </span>
	    	<p><i class="icon-comment-alt"></i>{{ e($comment->comment) }}</p>
	    </div>	
	    @endforeach
	</div>

</section>
@endsection