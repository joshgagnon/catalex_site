@extends('layouts.master')
@section('title')
@parent - About Us
@stop
@section('content')
@include('components.navbar')
<section class="container-fluid banner about">
	<span class="banner-text about-text-1">Because business</span>
	<span class="banner-text about-text-2">doesn't travel in 6 minute units</span>
</section>
<section class="container team">
	<div class="row">
		<div class="col-xs-12">
			<h2 class="highlight">Meet CataLex's Leadership Team.</h2>
		</div>
	</div>
	<div class="row text-left">
		<div class="col-xs-12 col-md-4 blurb-col">
			<div class="image-container">
				<img src="http://catalex.icandymedia.co.nz/wp-content/uploads/2014/09/tamina.jpg" alt="Tamina Cunningham-Adams">
			</div>
			<h3><span class="highlight">Tamina Cunningham-Adams</span><br>LLB (Hons), BA, B Ed (Tchg)</h3>
			<p>
				Tamina is a banking and finance lawyer and practising liquidator.&nbsp; She specialises in corporate and personal insolvency law, securities enforcement and litigation.&nbsp; Before commencing practice as a liquidator, Tamina was a specialist litigator for top tier law firm, Simpson Grierson, for several years.
			</p>
			<p class="blurb">
				NZ Lawyer Magazine recently featured Tamina in its 2014 Lawyer Hotlist of 38 New Zealand lawyers changing the <a href="http://www.nzlawyermagazine.co.nz/files/file/special-report/NZL6.1_Hotlist2014.pdf">legal industry</a>.&nbsp; She is a qualified educator with overseas experience and a guest lecturer in Commercial Law at the University of Auckland.
			</p>
			<p class="blurb">
				Tamina is the recipient of several academic prizes, including being the inaugural recipient of the Judge Karina Williams Prize in Law.
			</p>
		</div>
		<div class="col-xs-12 col-md-4 blurb-col">
			<div class="image-container">
				<img src="http://catalex.icandymedia.co.nz/wp-content/uploads/2014/09/thomas.jpg" alt="Thomas Bloy">
			</div>
			<h3><span class="highlight">Thomas Bloy</span><br>LLB</h3>
			<p>
				Thomas specialises in company, commercial, and contract law, but also has expertise in mergers and acquisitions, capital raising, and insolvency.&nbsp;Before going in-house at CataLex, he worked for Simpson Grierson’s corporate advisory and banking litigation teams. He has advised several NZX50 companies and has Court of Appeal litigation experience. Before becoming a lawyer, Thomas was an operations analyst for TOWER Insurance, specialising in system administration, process improvement, operational efficiency, and quality assurance.
			</p>
		</div>
		<div class="col-xs-12 col-md-4 blurb-col">
			<div class="image-container">
				<img src="http://catalex.icandymedia.co.nz/wp-content/uploads/2014/09/josh.jpg" alt="Josh Gagnon">
			</div>
			<h3><span class="highlight">Josh Gagnon</span><br>BSc (Hons), BA</h3>
			<p>
				Josh is CataLex’s Chief Technology Officer. He is a software engineer that has worked in bioinformatics for the University of Otago.&nbsp; Prior to joining CataLex, Josh developed GIS (Geographic Information System) software for an Otago-based company.
			</p>
			<p>
				Josh's passion is developing web-based applications, and he loves the opportunity to contribute to others' projects as well as work on his own.
			</p>
		</div>
	</div>
</section>
@stop