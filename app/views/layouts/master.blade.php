<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            CataLex
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSS are placed here -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        {{ Minify::stylesheet(array('/css/bootstrap.min.css', '/css/style.css')) }}
    </head>

    <body>
        <!-- Navbar -->


        <!-- Container -->


            <!-- Content -->
            @yield('content')

<footer id="footer" class="footer">
    <div class="container">
        <div class="padding-b5">
            <div class="col-sm-12">
                <ul class="social-icons text-center">
                </ul>
            </div>
        </div>
        <div class="nav-links">
            <div class="col-sm-12">
                <a href="/">Home</a>
                <a href="/investor">Investor Portal</a>
                @if(Auth::user() && Auth::user()->role=='admin')
                    {{ HTML::link('blogs', 'Law Blog') }}
                    {{ HTML::link('users', 'Users') }}
                 @endif                
                @if(!Auth::check())
                    {{ HTML::link('sessions/login', 'Login') }}
                @else
                    {{ HTML::link('sessions/logout', 'Logout') }}
                @endif

               
             </div>
        </div>
        <div class="">
            <div class="col-sm-12">
                
                <div class="copyright">©Copyright 2014 - CataLex Limited. All rights reserved. &nbsp;&nbsp;Contact: <a href="mailto:mail@catalex.nz">mail@catalex.nz</a></div>
            </div>
        </div>
    </div>
</footer>

        <!-- Scripts are placed here -->
        {{ Minify::javascript(array('/js/jquery-1.11.1.min.js', '/js/bootstrap.min.js', '/js/main.js', '/js/smoothscroll.js')) }}
    </body>
</html>