@extends('layouts.master')
@section('title')
@parent
@stop
@section('content')
<section class="container-fluid home">
	<div class="row">
		<div class="">
			<div class="col-sm-7 text-center content-right">
				<!-- start main logo -->
				<h1 class="logo">
				<a href="/">
					{{ HTML::image('images/logo-colourx2.png', 'Calatex')}}
				</a>
				</h1>
				<!-- end main logo -->
				<div class="big-text">
					
					
					<span>Sometimes change is good</span>
					
				</div>
				
				
				<div class="home-buttons">
					<a href="/investor" class="btn btn-primary btn-lg">Investor Login</a>
					<a href="#people" class="btn btn-people btn-lg">About Us</a>
				</div>
				<ul class="os">
					
					
					
				</ul>
			</div>
			<div class="col-sm-5">
			</div>
		</div>
	</div>
</section>
<section id="about" class="about container">
	
	<div class="">
		
		<div class="section-head text-center">
			<h2>CataLex | The Legal Catalyst</h2>
			<p>At CataLex, we aim to re-invent law or, more correctly, how the public interacts with it. We believe that by combining technology and innovative thinking, legal services can be more accessible, cost-effective, understandable, and, most importantly, useful to business. CataLex is developing software and technology to deliver those services to professionals and businesspeople, absent the traditional lawyer-client relationship.</p>
			<hr class="head-separator">
		</div>
		
		
		<div class="">
			<div class="col-md-12">
			</div>
		</div>
	</div>
</section>
<section id="quote" class="quote container-fluid">
	
	<div class="row">
		
		<div class="section-head  text-center">
			<h2>"This is the way we've always done it"...is not a reason to keep doing it that way.</h2>
			<hr class="head-separator">
		</div>
		
		
		<div class="">
			<div class="col-md-12">
				<h2 style="text-align: center;"></h2>
			</div>
		</div>
	</div>
</section>
<section class="people">
	<div class="container">
	<div class="row">
		
		<div class="section-head offsetBottomL text-center" id="people" >
			<h2>About Us</h2>
			<p>Meet CataLex's Management Team.</p>
			<hr class="head-separator">
		</div>
		
		
		<div class="">
			<div class="col-md-12">
				<p><a name="people"></a><br>
				</p><div class="">
					<div class="col-sm-4 col-md-4  blurb-col">
						<p><img class="img-circle" src="http://catalex.icandymedia.co.nz/wp-content/uploads/2014/09/tamina.jpg" alt="tamina" width="201" height="135"></p>
						<div class="feature-item"><i class="fa fa-gavel"></i>
							<h3>Tamina Cunningham-Adams<br>
							LLB (Hons), BA, B Ed (Tchg)</h3>
							<p class="blurb">
							Tamina is a banking and finance lawyer and practising liquidator.&nbsp; She specialises in corporate and personal insolvency law, securities enforcement and litigation.&nbsp; Before commencing practice as a liquidator, Tamina was a specialist litigator for top tier law firm, Simpson Grierson, for several years.</p>
							<p class="blurb">NZ Lawyer Magazine recently featured Tamina in its 2014 Lawyer Hotlist of 38 New Zealand lawyers changing the <a href="http://www.nzlawyermagazine.co.nz/files/file/special-report/NZL6.1_Hotlist2014.pdf">legal industry</a>.&nbsp; She is a qualified educator with overseas experience and a guest lecturer in Commercial Law at the University of Auckland.</p>
							<p class="blurb">Tamina is the recipient of several academic prizes, including being the inaugural recipient of the Judge Karina Williams Prize in Law.</p>
						<p></p></div>
					</div>
					<div class="col-sm-4 col-md-4 blurb-col">
						<p><img class="img-circle" src="http://catalex.icandymedia.co.nz/wp-content/uploads/2014/09/thomas.jpg" alt="thomas" width="201" height="135"></p>
						<div class="feature-item"><i class="fa  fa-gavel"></i>
							<h3>Thomas Bloy<br>
							LLB</h3>
						<p></p></div>
						<p class="blurb">Thomas specialises in company, commercial, and contract law, but also has expertise in mergers and acquisitions, capital raising, and insolvency.&nbsp;Before going in-house at CataLex, he worked for Simpson Grierson’s corporate advisory and banking litigation teams. He has advised several NZX50 companies and has Court of Appeal litigation experience. Before becoming a lawyer, Thomas was an operations analyst for TOWER Insurance, specialising in system administration, process improvement, operational efficiency, and quality assurance.</p>
					</div>
					<div class="col-sm-4 col-md-4 blurb-col">
						<p><img class="img-circle" src="http://catalex.icandymedia.co.nz/wp-content/uploads/2014/09/josh.jpg" alt="josh" width="201" height="135"></p>
						<div class="feature-item"><i class="fa fa-code"></i>
							<h3>Josh Gagnon<br>
							BSc (Hons), BA</h3>
							<p class="blurb">
							Josh is CataLex’s Chief Technology Officer. He is a software engineer that has worked in bioinformatics for the University of Otago.&nbsp; Prior to joining CataLex, Josh developed GIS (Geographic Information System) software for an Otago-based company.
							</p>
							<p class="blurb">Josh's passion is developing web-based applications, and he loves the opportunity to contribute to others' projects as well as work on his own.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</section>

@stop