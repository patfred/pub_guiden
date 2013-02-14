@layout('layouts/main')
@section('content')

<h2>Välkommen</h2>
<section class="content container user-profile">
	<p>Du är inloggad som: {{ Auth::user()->email }}</p>

<button class="logout-button"> <i class="icon-signout></i>{{ HTML::link(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.logout_route'), 'Logga ut') }}</button>
</section> 

@endsection
