<nav class="navbar">
	<section class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="/">
        {{ HTML::image('images/logo-colourx2.png', 'Calatex')}}
      </a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-links">
			<ul class="nav navbar-nav navbar-right">
				@foreach([
					'/' => 'Home',
					'/news' => 'News',
					'/law-browser' => 'Law Browser',
					'/investor' => 'Investor Portal',
					'/signup' => 'Sign Up / Login',
				] as $href => $title)
					<li class="{{ $location === $href ? 'active' : '' }}"><a href="{{ $href }}">{{ $title }}</a></li>
				@endforeach
			</ul>
		</div>
	</section>
</nav>
