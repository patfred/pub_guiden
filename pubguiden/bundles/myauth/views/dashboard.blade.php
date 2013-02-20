@layout('layouts/main')
@section('content')

<section class="content container user-profile">

<h2>Välkommen</h2>
	<p> Inloggad som {{ Auth::user()->username }}</p>

<button class="logout-button"> <i class="icon-signout"></i>{{ HTML::link(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.logout_route'), 'Logga ut') }}</button>
	<div class="row dashboard">
		
		<div class="span6">
		 	<h3>Betyg</h3>
		 	<ul>
		 		<li> <i class="icon-star-empty"></i> Sejdeln 4</li>
		 		<li> <i class="icon-star-empty"></i> Kellys 3</li>
		 	</ul>
		</div>

		<div class="span6">
			<h3>Kommentarer</h3>
			<ul>
				<li> <i class="icon-comment"></i> Jag gillar öl</li>
			</ul>
		</div>

	</div>
</section> 

@endsection
