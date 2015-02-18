<div class="browser-hero">
	<section class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="browser-logo">
					<a href="/law-browser">{{ HTML::image('images/law-browser.png', 'Law Browser') }}</a>
				</h1>
				<h2>Find law faster</h2>
				<div class="slogan">The better way to view legislation and cases.</div>
				<a class="btn btn-primary" href="//users.catalex.nz/auth/register">Start free trial</a>
				@if($location !== '/law-browser')
					<a class="btn btn-default" href="/law-browser">Features</a>
				@endif
			</div>
		</div>
	</section>
</div>
