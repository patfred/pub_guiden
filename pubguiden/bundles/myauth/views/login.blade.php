@layout('layouts/main')
@section('content')
<section class="content container login-signup">

<h2>Logga in på pubguiden</h2>

{{ Form::open(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.login_route')) }}
    <!-- check for login errors flash var -->
  
    @if (Session::has('notification'))
        <span class="notification">{{ Session::get('notification') }}</span>
    @endif
    
    <!-- username field -->
    <span>{{ Form::label('email', 'E-mail') }}</span>
    <p>{{ Form::text('email') }}</p>
    
    <!-- password field -->
    <span>{{ Form::label('password', 'Lösenord') }}</span>
    <p>{{ Form::password('password') }}</p>
    
    <!-- submit button -->
    <p>{{ Form::submit('Logga in') }}</p>
{{ Form::close() }}

@endsection
</section> 