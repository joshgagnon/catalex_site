@extends('layouts.master')
@section('title')
@parent
@stop
@section('content')
@include('components.browser-hero')
@include('components.navbar')
<section class="container-fluid banner home">
	<span class="banner-text">Sometimes change is good</span>
</section>
<section id="about" class="about container">
	<div class="">
		<div class="section-head text-center">
			<h2>CataLex | The Legal Catalyst</h2>
			<p>At CataLex, we aim to re-invent law or, more accurately, how the public interacts with it. We believe that by combining technology and innovative thinking, legal services can be more accessible, cost-effective, understandable, and, most importantly, useful to business. CataLex is developing software to deliver those services to professionals and businesses, absent the traditional lawyer-client relationship.</p>
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
			<h2>"This is the way we've always done it"...is no reason to keep doing it that way.</h2>
			<hr class="head-separator">
		</div>
	</div>
</section>
<section class="container team">
	<div class="row">
		<div class="col-xs-12">
			<h2 class="highlight">Meet CataLex's Leadership Team.</h2>
		</div>
	</div>
	<div class="row text-left">
		<div class="col-xs-12 col-sm-4 blurb-col">
			<div class="image-container">
				<img src="/images/thomas.jpg" alt="Thomas Bloy">
			</div>
			<h3><span class="highlight">Thomas Bloy</span></h3>
			<p class="blurb">
Thomas co-founded and is managing director of CataLex.  He came up with the idea for CataLex while working as a commercial lawyer for a top-tier law firm.  He loves the law and helping clients, but believes high-quality legal services should be accessible to everyone, not just those with money, connections, or specialised knowledge.  He thinks that technology and automation are the keys to making that vision a reality, which is what CataLex is all about.  When not working on CataLex projects, Thomas works as a lawyer for Evolution Lawyers Limited – a law firm he recently co-founded with Tamina.
			</p>
		</div>
		<div class="col-xs-12 col-sm-4 blurb-col">
			<div class="image-container">
				<img src="/images/tamina.jpg" alt="Tamina Cunningham-Adams">
			</div>
			<h3><span class="highlight">Tamina Cunningham-Adams</span></h3>
			<p class="blurb">
Tamina is a co-founder and director of CataLex.  She is also principal of Evolution Lawyers Limited, a practising liquidator of complex corporate assignments, and CEO of insolvency firm Fisher White &amp; Associates.  Before starting CataLex, Tamina worked as a banking &amp; finance litigator for a top-tier law firm.  She is a qualified teacher, a guest lecturer in commercial law for the University of Auckland, and was featured NZ Lawyer's 2014 Hotlist of 38 New Zealand lawyers changing the <a href="http://www.nzlawyermagazine.co.nz/files/file/special-report/NZL6.1_Hotlist2014.pdf" target="_blank">legal industry</a>.
			</p>
		</div>
		<div class="col-xs-12 col-sm-4 blurb-col">
			<div class="image-container">
				<img src="/images/josh.jpg" alt="Josh Gagnon">
			</div>
			<h3><span class="highlight">Josh Gagnon</span></h3>
			<p class="blurb">
				Josh is CataLex’s Chief Technology Officer. He is a software engineer that has worked in bioinformatics for the University of Otago.&nbsp; Prior to joining CataLex, Josh developed GIS (Geographic Information System) software for an Otago-based company.
			</p>
			<p class="blurb">
				Josh's passion is developing web-based applications, and he loves the opportunity to contribute to others' projects as well as work on his own.
			</p>
		</div>
	</div>
</section>
<section class="container-fluid banner about">
	<span class="banner-text about-text-1">Because business</span>
	<span class="banner-text about-text-2">doesn't travel in 6 minute units</span>
</section>
@if ($blogs->count())
<section class="blog ">
	<h2><a href="/news" >News</a></h2>
	<hr class="head-separator">
	<div class="container">
		@foreach ($blogs as $blog)
			<div class="blog-entry">
				<a href="/news#news-{{ $blog->id }}"><h4>{{ $blog->title}}</h4></a>
			</div>
		@endforeach
	</div>
</section>
@endif
@stop
