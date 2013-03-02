@layout('layouts/main')
@section('content')
<section class="content container login-signup">

<h1>Logga in på pubguiden</h1>

{{ Form::open(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.login_route')) }}
    
    <!-- user email field -->
    <span>{{ Form::label('email', 'E-mail') }}</span>
    <p>{{ Form::text('email') }}</p>
    
    <!-- password field -->
    <span>{{ Form::label('password', 'Lösenord') }}</span>
    <p>{{ Form::password('password') }}</p>
    
    <!-- check for login errors flash var -->
    @if (Session::has('notification'))
        <p class="notification"> <i class='icon-warning-sign'></i>{{ Session::get('notification') }}</p>
    @endif
    
    <!-- check for signup ok flash var -->
    @if (Session::has('notification-signup'))
        <p class="notification-signup"> <i class='icon-ok-circle'></i>{{ Session::get('notification-signup') }}</p>
    @endif

    <!-- submit button -->
    <p>{{ Form::submit('Logga in') }}</p>

{{ Form::close() }}

</section> 
@endsection