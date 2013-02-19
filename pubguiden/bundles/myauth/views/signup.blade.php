@layout('layouts/main')
@section('content')
<section class="content container login-signup">

    <h2>Registrera dig!</h2>
    <p>För att kunna betygsätta och kommentera pubar behöver du registrera dig! </p> 
    <p>Observera att lösenordet måste innehålla minst 5 tecken.</p>

    {{ Form::open(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.signup_route')) }}

        <!-- email field -->
        <span>{{ Form::label('email', 'E-mail') }}</span>
        <p>{{ Form::text('email', Input::old('email'), array('class' => 'well')) }}</p>
            <?php if($errors) echo '<p class="error">'.$errors->first('email').'</p>'; ?>
        
        <!-- password field -->
        <span>{{ Form::label('password', 'Lösenord') }}</span>
        <p>{{ Form::password('password', array('class' => 'well')) }}</p>
            <?php if($errors) echo '<p class="error">'.$errors->first('password').'</p>'; ?>

        <!-- confirm password field -->
        <span>{{ Form::label('password_confirmation', 'Bekräfta lösenord') }}</span>
        <p>{{ Form::password('password_confirmation', array('class' => 'well')) }}</p>
            <?php if($errors) echo '<p class="error">'.$errors->first('password_confirmation').'</p>'; ?>

        <!-- submit button -->
        <p>{{ Form::submit('Registrera dig', array('class' => 'signup', 'onclick' => 'return validate()')) }}</p>
    
    {{ Form::close() }}

</section>
@endsection