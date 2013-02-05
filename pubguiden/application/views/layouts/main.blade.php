<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pubguiden</title>
        <?php echo HTML::style('css/bootstrap.min.css'); ?>
        <?php echo HTML::style('css/bootstrap-responsive.css'); ?>
        <?php echo HTML::style('css/style.css'); ?>
        <!-- {{ Asset::styles() }}
        {{ Asset::scripts() }} -->
    </head>
    <body>

        <header class="menu-top navbar navbar-fixed-top">
        @section('navigation')
                <a href="#" class="logo">
                    <i class="icon-beer icon-large"></i> Pubguiden Gbg
                </a>
                <a href="#" class="menu-icons"> <i class="icon-search icon-2x"></i></a>
                <a href="#" class="menu-icons"> <i class="icon-user icon-2x"></i></a>
         @yield_section
        </header> 

        @yield('content') 
        
        <footer>
            <p> &copy; Pubguiden 2013</p>
        </footer>

    <?php echo HTML::script('http://code.jquery.com/jquery-latest.js');?>
    <?php echo HTML::script('js/bootstrap.min.js');?>   
    </body>
</html>