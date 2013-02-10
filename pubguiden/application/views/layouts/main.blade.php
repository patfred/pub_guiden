<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pubguiden</title>
        <?php echo HTML::style('css/bootstrap.min.css'); ?>
        <?php echo HTML::style('css/bootstrap-responsive.css'); ?>
        <?php echo HTML::style('css/style.css'); ?>
        <?php echo HTML::style('css/jQuery.Rating.css'); ?>
        <!-- {{ Asset::styles() }}
        {{ Asset::scripts() }} -->
    </head>
    <body>

        <header class="menu-top navbar navbar-fixed-top">
        @section('navigation')
            <span class="logo">
                <i class="icon-beer icon-large"></i> {{ HTML::link_to_action("home", "Pubguiden Gbg") }}  
            </span>
            
            <a href="#" id="search-drop" class="menu-icons"> <i class="icon-search icon-2x"></i></a>
            <a href="#" id="login-drop" class="menu-icons"> <i class="icon-user icon-2x"></i></a>
            <div class="menu-box">
                <div id="show-search" class="show-hide"> 
                    <input type="text" class="home-search search-query" placeholder="Sök" > 
                    <a href="#"><i class="icon-search icon-large"></i> </a> 
                </div>
                <div id="show-login" class="show-hide"> 
                    <input type="text" class="facebook-login" placeholder="Användarnamn" > 
                    <input type="password" class="facebook-passw" placeholder="Lösenord" > 
                </div>
            </div>
    
         @yield_section
        </header> 

        @yield('content') 
        
        <footer>
            <p> &copy; Pubguiden 2013</p>
        </footer>

    <?php echo HTML::script('http://code.jquery.com/jquery-latest.js');?>
    <?php echo HTML::script('js/bootstrap.min.js');?>   
    <?php echo HTML::script('js/app.js');?> 
    <?php echo HTML::script('js/jquery.js');?>
    <?php echo HTML::script('js/jquery.rating.pack.js');?>  
    </body>
</html>