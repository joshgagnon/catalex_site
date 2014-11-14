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

<section id="footer" class="footer container-fluid text-center">
    <div class="row">
        <div class="padding-b5">
            <div class="col-sm-12">
                <ul class="social-icons text-center">
                </ul>
            </div>
        </div>
        <div class="">
            <div class="col-sm-12">
                <a href="/">Home</a>
                <a href="/investor">Investor Enter</a>
             </div>
        </div>
        <div class="">
            <div class="col-sm-12">
                
                <div class="copyright">©Copyright 2014 - Catalex Limited. All rights reserved.</div>
            </div>
        </div>
    </div>
</section>

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-1.11.1.min.js') }}
        {{ HTML::script('js/main.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/smoothscroll.js') }}
    </body>
</html>