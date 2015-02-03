@extends('layouts.master')
@section('title')
@parent - Law Browser
@stop
@section('content')
@include('components.navbar')
@include('components.browser-hero')
<div class="lb-section lb-even">
	<section class="container">
		<div class="row">
			<div class="grid-sml-12">
				<h2>Why use Law Browser?</h2>
			</div>
		</div>
		<div class="fade-container">
			<div class="row">
				<div class="col-xs-12 col-md-7">
					<div class="icon-outer">
						<div class="icon-inner">
							<i class="fa fa-search"></i>
						</div>
					</div>
					<div class="icon-pad">
						<h3>Search</h3>
						<p>Search legislation or cases, or both at the same time, as sourced from the Parliamentary Counsel’s <a href="#">legislation website</a> and the Ministry of Justice’s Judicial Decisions <a href="#">Online database</a>.</p>
					</div>
				</div>
				<div class="hidden-xs col-md-5">
				</div>
			</div>
		</div>
	</section>
</div>
<div class="lb-section lb-odd">
	<section class="container">
		<div class="fade-container">
			<div class="row">
				<div class="hidden-xs col-md-5">
				</div>
				<div class="col-xs-12 col-md-7">
					<div class="icon-outer">
						<div class="icon-inner">
							<i class="fa fa-book"></i>
						</div>
					</div>
					<div class="icon-pad">
						<h3>Definitions</h3>
						<p>Automatic recognition of definitions when viewing legislation: simply click the term and its definition pops up, along with the definition’s source. Search across the legislation database to see if a term or phrase has a statutory definition.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="lb-section lb-even">
	<section class="container">
		<div class="fade-container">
			<div class="row">
				<div class="col-xs-12 col-md-7">
					<div class="icon-outer">
						<div class="icon-inner">
							<i class="fa fa-bookmark"></i>
						</div>
					</div>
					<div class="icon-pad">
						<h3>Go to</h3>
						<p>Go to a specific part, schedule, or section of legislation, or a specific paragraph or range of paragraphs from a case. View a single sub-section or sub-sub section of legislation, displayed with the relevant context including section number, name, and any opening sentences.</p>
					</div>
				</div>
				<div class="hidden-xs col-md-5">
			</div>
			</div>
		</div>
	</section>
</div>
<div class="lb-section lb-odd">
	<section class="container">
		<div class="fade-container">
			<div class="row">
				<div class="hidden-xs col-md-5">
				</div>
				<div class="col-xs-12 col-md-7">
					<div class="icon-outer">
						<div class="icon-inner">
							<i class="fa fa-arrows-alt"></i>
						</div>
					</div>
					<div class="icon-pad">
						<h3>Cross-references</h3>
						<p>Find cross-references between legislation, between cases, and between legislation and cases. Display cross-references via an interactive and navigable map.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="lb-section lb-even">
	<section class="container">
		<div class="fade-container">
			<div class="row">
				<div class="col-xs-12 col-md-7">
					<div class="icon-outer">
						<div class="icon-inner">
							<i class="fa fa-list-ol"></i>
						</div>
					</div>
					<div class="icon-pad">
						<h3>Different Versions</h3>
						<p>Easily view and compare different versions of legislation based on the date the hard copy version was re-printed.</p>
					</div>
				</div>
				<div class="hidden-xs col-md-5">
				</div>
			</div>
		</div>
	</section>
</div>
<div class="lb-section lb-odd">
	<section class="container">
		<div class="fade-container">
			<div class="row">
				<div class="hidden-xs col-md-5">
				</div>
				<div class="col-xs-12 col-md-7">
					<div class="icon-outer">
						<div class="icon-inner">
							<i class="fa fa-cloud"></i>
						</div>
					</div>
					<div class="icon-pad">
						<h3>Save</h3>
						<p>Save legislation and case law, as well as your personal search results, current views, and open windows, to your documents folder for later access. Create and edit folders for managing your documents.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@stop
