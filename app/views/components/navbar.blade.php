<nav class="navbar">
	<section class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-links">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">
				{{ HTML::image('images/logo-colourx2.png', 'Calatex')}}
			</a>
		</div>
		<div class="navbar-collapse collapse" id="navbar-links">
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
