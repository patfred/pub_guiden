@layout('layouts/main') 
@section('content')
<section class="content container">
	<h2> {{ $pub->name }} </h2>
	<div class="pub-text"><strong>Adress:</strong> {{ $pub->address }}</div>
	<div class="big-rating"> {{ $ratings }} </div>	
	<section class="pub-info">
		<div class="pub-text"> {{ $pub->description }} </div>
		<div class="pub-text"><strong>Adress:</strong> {{ $pub->address }}</div>		
		<div class="pub-text"><strong>Billigaste öl:</strong> {{ $pub->lowest_price }} kr</div>
		<div class="pub-text"><strong>Quiz?</strong> 
			@if($pub->quiz == 0)
		    	Nej
		    @else
		    	Ja
		    @endif
		</div>
		<div class="pub-text"> <strong> After Work? </strong>
			@if($pub->after_work == 0)
		    	Nej
		    @else
		    	Ja
		    @endif
		</div>
		<div class="category-rating"> <div class="cat-name"> Service </div> <div class="small-rating"> {{ $service }} </div> </div>
		<div class="category-rating"> <div class="cat-name"> Mat </div> <div class="small-rating"> {{ $food }} </div> </div>
		<div class="category-rating"> <div class="cat-name"> Atmosfär </div> <div class="small-rating"> {{ $atmosphere }} </div> </div>
		<div class="category-rating"> <div class="cat-name"> Lokal </div> <div class="small-rating"> {{ $place }} </div> </div>
		<div class="category-rating"> <div class="cat-name"> Utbud </div> <div class="small-rating"> {{ $assortments }} </div> </div>
	</section>	

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
	    	<h4> {{ $comment->user->username }} </h4> 
	    	<span class="comment-date"> <i class="icon-time"></i> {{ $comment->created_at }} </span>
	    	<p><i class="icon-comment-alt"></i>{{ e($comment->comment) }}</p>
	    </div>	
	@endforeach
	</div>

</section>
@endsection