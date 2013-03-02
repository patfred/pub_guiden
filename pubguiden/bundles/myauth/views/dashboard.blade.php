@layout('layouts/main')
@section('content')

<section class="content container user-profile">

<h1>Välkommen</h1>
	<p class="info-block"> Inloggad som <strong>{{ Auth::user()->username }}</strong></p>
	<?php 
		$date = Auth::user()->updated_at; 
	 	$date =  DateTime::createFromFormat('Y-m-d H:i:s', $date);
	 ?>
	<p> Medlem sedan {{ $date->format('Y/m/d') }}</p>

	<button class="logout-button"> <i class="icon-signout"></i>{{ HTML::link(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.logout_route'), 'Logga ut') }}</button>
	
	<div class="row dashboard">
		
		<div class="span6">
		 	<h3>15 senast betygsatta pubar</h3>
		 	<p>För att ändra ett betyg, gå in på puben och tryck på betygsätt. Ditt gamla betyg kommer ersättas med ditt nya betyg!</p>
		 	<ul class="rating-list">
				@foreach (Rating::where_user_id(Auth::user()->id)->order_by('created_at', 'desc')->take(15)->get() as $rating)
				 <li> 
				 	<i class="icon-star"></i>
				 	<span>{{ HTML::link_to_action("pubs@index", $rating->pub->name, array($rating->pub->id)) }}</span>			 	
					<?php 
						$date = $rating->updated_at; 
					 	$date =  DateTime::createFromFormat('Y-m-d H:i:s', $date);
					 ?>
				 	<p class="date">{{ $date->format('Y/m/d') }}</p> 
				 </li>
				@endforeach

		 	</ul>
		</div>

		<div class="span6">
			<h3>15 senast kommentarer</h3>
			<ul class="comment-list">
				@foreach (Comment::where_user_id(Auth::user()->id)->order_by('created_at', 'desc')->take(15)->get() as $comment)
				 <li> 
				 	<i class="icon-comment"></i> "{{ $comment->comment }}" 
				 	<p>Postad i {{ HTML::link_to_action("pubs@index", $comment->pub->name, array($comment->pub->id)) }}
				 	<?php 
						$date = $comment->updated_at; 
					 	$date =  DateTime::createFromFormat('Y-m-d H:i:s', $date);
					 ?>
				 		<span class="date">{{ $date->format('Y/m/d') }} </span>
				 	</p>		 	
				 </li>
				@endforeach
			</ul>
		</div>

	</div>
</section> 

@endsection
