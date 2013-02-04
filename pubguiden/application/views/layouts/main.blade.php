<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pubguiden</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.css"></link>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
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

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>