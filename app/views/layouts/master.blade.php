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
        {{ HTML::style('css/bootstrap.min.css') }}

        {{ HTML::style('css/style.css') }}
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
                @if(!Auth::check())
                    {{ HTML::link('users/login', 'Login') }}
                @else
                    {{ HTML::link('users/logout', 'Logout') }}
                @endif
                @if(Auth::user() && Auth::user()->role=='admin')
                    {{ HTML::link('blog', 'Law Blog') }}
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
        {{ HTML::script('js/jquery-1.11.1.min.js') }}
        {{ HTML::script('js/main.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/smoothscroll.js') }}
    </body>
</html>