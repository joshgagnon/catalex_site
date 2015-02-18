<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            CataLex
            @show
        </title>
        <meta name="description" content="At CataLex, we aim to re-invent law or, more accurately, how the public interacts with it. We believe that by combining technology and innovative thinking, legal services can be more accessible, cost-effective, understandable, and, most importantly, useful to business. CataLex is developing software to deliver those services to professionals and businesses, absent the traditional lawyer-client relationship">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon"   type="image/png" href="/favicon.png" />
        <!-- CSS are placed here -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link href='//brick.a.ssl.fastly.net/Ubuntu:300,400,400i,700' rel='stylesheet' type='text/css'>
        {{ Minify::stylesheet(array('/css/bootstrap.css', '/css/font-awesome.css', '/css/style.css')) }}
    </head>

    <body>
        <!-- Navbar -->


        <!-- Container -->


            <!-- Content -->
            @yield('content')

<footer id="footer" class="footer">
    <div class="container">
        <!--div>
            <div class="col-sm-12">
                <ul class="social-icons text-center">
                </ul>
            </div>
        </div-->
        <p class="copyright">© Copyright {{ date('Y') }} - CataLex Limited. All rights reserved.</p>
        <p class="nav-links">
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
                <a href="//users.catalex.nz/customeragreement">Customer Agreement</a>
                <a href="//users.catalex.nz/privacypolicy">Privacy Policy</a>
                <a href="//users.catalex.nz/termsofuse">Terms of Use</a>
        </div>
        <p>P: C/- Kanu Jeram Chartered Accountant Limited, 112 Kitchener Road, Milford, Auckland, 0620, New Zealand</p>
        <p>E: <a href="mailto:mail@catalex.nz">mail@catalex.nz</a> &nbsp; M: +64 274 538 552 &nbsp; Fax: +64 09 929 3332 </p>
    </div>
</footer>

        <!-- Scripts are placed here -->
        {{ Minify::javascript(array('/js/jquery-1.11.1.min.js', '/js/jquery.inview.min.js', '/js/bootstrap.min.js', '/js/main.js', '/js/smoothscroll.js')) }}
    </body>
</html>
