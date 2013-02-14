<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pubguiden</title>
        <?php echo HTML::script('js/modernizr.js');?>  
        <?php echo HTML::style('css/bootstrap.min.css'); ?>
        <?php echo HTML::style('css/bootstrap-responsive.css'); ?>
        <?php echo HTML::style('css/style.css'); ?>
        <?php echo HTML::style('css/jquery.rating.css'); ?>
        <!-- {{ Asset::styles() }}
        {{ Asset::scripts() }} -->
    </head>
    <body>

        <header class="menu-top navbar navbar-fixed-top">
        @section('navigation')
            
            <span class="logo">
                <i class="icon-beer icon-large"></i> {{ HTML::link_to_action("home", "Pubguiden Gbg") }}  
            </span>
            
            @if(Auth::check())
                <span class="current-user"> Inloggad: {{ Auth::user()->email }} </span>
            @endif
            
            <a href="#" id="search-drop" class="menu-icons"> <i class="icon-search icon-2x"></i></a>
            <a href="#" id="login-drop" class="menu-icons"> <i class="icon-user icon-2x"></i></a>
            
            <div class="menu-box">
                <div id="show-search" class="show-hide"> 
                    {{ Form::open('search', 'POST', array('id' => 'search', 'class'=>'search_form')) }}
                    {{ Form::token() }}
                    {{ Form::text('search_string','', array('id'=> 'search_string', 'class' => 'search_string', 'placeholder'=>'Sök...')) }}
                    {{ Form::submit('sök') }}
                    {{ Form::close() }}
                    <!-- <a href="#"><i class="icon-search icon-large"></i> </a> -->
                </div>
                
                <div id="show-login" class="show-hide"> 
                    @if ( Auth::check())
                        <div class="user-buttons"> <i class="icon-signout"></i>{{ HTML::link(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.logout_route'), 'Logga ut') }} </div>
                    @else
                        <div class="user-buttons"> <i class="icon-signin"></i>{{ HTML::link(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.login_route'), 'Logga in') }} </div>
                        <div class="user-buttons"> <i class="icon-edit"></i>{{ HTML::link(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.signup_route'), 'Registrera dig') }} </div>
                    @endif
                </div>
            </div>
    
         @yield_section
        </header> 

        @yield('content') 
        
        <footer class="container">
            <p> &copy; Pubguiden 2013</p>
        </footer>

    <?php echo HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');?> 
    <?php echo HTML::script('js/bootstrap.min.js');?>   
    <?php echo HTML::script('js/app.js');?> 
    <?php echo HTML::script('js/jquery.rating.js');?>  
    <?php echo HTML::script('js/geolocation.js');?>  

    </body>
</html>