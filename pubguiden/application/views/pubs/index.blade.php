@layout('layouts/main') 
@section('content')
<div class="content container">
	
	<!-- Show message after user submits rating -->	
	@if (Session::has('rate-message'))
        <p class="rate-message"> <i class='icon-ok-circle'></i>{{ Session::get('rate-message') }}</p>
    @endif
	
	<div class="pub-head">
		<div class="big-rating"> {{ $ratings }} </div> 
		<h1> {{ $pub->name }} </h1>
	</div>
	<section class="pub-info group-holder">
		<div class="pub-text"> <i class="icon-bookmark"></i>{{ $pub->description }} </div>
	</section>

	<section class="pub-info group-holder">
		<div class="pub-text"> 
			<i class="icon-home"></i> 
			<strong>Adress:</strong> {{ $pub->address }}
		</div>		
		<div class="pub-text"> 
			<i class="icon-money"></i> 
			<strong>Billigaste öl:</strong> {{ $pub->lowest_price }} kr
		</div>
		<div class="pub-text"> 
			<i class="icon-trophy"></i> 
			<strong>Quiz?</strong> 
				@if($pub->quiz == 0)
			    	Nej
			    @else
			    	Ja
			    @endif
		</div>
		<div class="pub-text"> 
			<i class="icon-food"></i> 
			<strong> After Work? </strong>
				@if($pub->after_work == 0)
			    	Nej
			    @else
			    	Ja
			    @endif
		</div>
	</section>	
	
	<h3>Betyg</h3>
	<section class="pub-info group-holder">	
		<div class="category-rating"> 
			<div class="cat-name"> Service </div> 
			<div class="small-rating"> {{ $service }} </div> 
		</div>
		<div class="category-rating"> 
			<div class="cat-name"> Mat </div> 
			<div class="small-rating"> {{ $food }} </div> 
		</div>
		<div class="category-rating"> 
			<div class="cat-name"> Atmosfär </div> 
			<div class="small-rating"> {{ $atmosphere }} </div> 
		</div>
		<div class="category-rating"> 
			<div class="cat-name"> Lokal </div> 
			<div class="small-rating"> {{ $place }} </div> 
		</div>
		<div class="category-rating"> 
			<div class="cat-name"> Utbud </div> 
			<div class="small-rating"> {{ $assortments }} </div> 
		</div>
	
		<div class="rate-button">
		@if (isset(Auth::user()->id))
			{{ HTML::link_to_action("ratings@index", 'Sätt betyg', array($pub->id)) }}
		@else
	  		{{ HTML::link('/login', 'Logga in för att sätta betyg.') }} 
	 	@endif
	</div>
	</section>	

	<!-- Show comment form if user is logged in -->	
	@if (isset(Auth::user()->id))
		<h3>Kommentera</h3>
		<div class="comment-form">
			{{ Form::open()	}}	
		    	{{ Form::token() }}

		    	{{ Form::hidden('pub_id', $pub->id) }}
		    	{{ Form::hidden('user_id', Auth::user()->id) }}
		     	{{ Form::textarea('comment','Skriv kommentar här...', array('class'=>'comment-text')) }} 

		     	{{ Form::submit('Posta kommentar') }}

		    {{ Form::close() }}
		</div>	
	@else
		<h3>Kommentera</h3>
		<p class="info-block"> Du måste vara inloggad för att kunna kommentera </p>	
	@endif
	
	<!-- Show success message after user submits comment -->	
	@if (Session::has('message'))
        <p class="success-msg"> <i class="icon-ok-circle"></i>{{ Session::get('message') }}</p>
    @endif
	<!-- Show error message after user submits rating -->	
    @if (Session::has('error-message'))
        <p class="error-msg"> <i class="icon-exclamation-sign"></i>{{ Session::get('error-message') }}</p>
    @endif

	<section class="comments">	
	<h3>Kommentarer</h3>
	@if(!empty($comments)) 
		@foreach ($comments as $comment)
			<div class="comment">
		    	<h4> {{ $comment->user->username }} </h4> 
		    	<span class="comment-date"> <i class="icon-time"></i> {{ $comment->created_at }} </span>
		    	<p><i class="icon-comment-alt"></i>{{ e($comment->comment) }}</p>
		    </div>	
		@endforeach
	@else
	<p> Inga kommentarer</p>	
	@endif
	</section>

</div>
@endsection