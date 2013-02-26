@layout('layouts/main')
@section('content')

<section class="content container user-profile">

<h2>Välkommen</h2>
	<p> Inloggad som {{ Auth::user()->username }}</p>

	<button class="logout-button"> <i class="icon-signout"></i>{{ HTML::link(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.logout_route'), 'Logga ut') }}</button>
	
	<div class="row dashboard">
		
		<div class="span6">
		 	<h3>Senast betygsatta pubar</h3>
		 	<ul class="rating-list">
				@foreach (Rating::where_user_id(Auth::user()->id)->order_by('created_at', 'desc')->take(10)->get() as $rating)
				 <li> 
				 	<i class="icon-star-empty"></i> {{ $rating->created_at }} 
				 	<span>{{ $rating->pub->name }}</span>
				 </li>
				@endforeach

		 	</ul>
		</div>

		<div class="span6">
			<h3>Senast kommenterade pubar</h3>
			<ul class="comment-list">
				@foreach (Comment::where_user_id(Auth::user()->id)->order_by('created_at', 'desc')->take(10)->get() as $comment)
				 <li> 
				 	<i class="icon-comment-alt"></i> {{ $comment->comment }} 
				 	<p> Postad i  
				 		<span>{{ $comment->pub->name }}</span> 
				 		{{ $comment->created_at }} 
				 	</p>
				 </li>
				@endforeach
			</ul>
		</div>

	</div>
</section> 

@endsection
