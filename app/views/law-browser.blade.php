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
						<h3>New Zealand Law</h3>
						<p>Search or browse New Zealand legislation, reproduced from the Parliamentary Counsel’s <a href="www.legislation.govt.nz">online legislation database</a>, updated nightly.</p>
						<p>New Zealand High Court, Court of Appeal, and Supreme Court case law from the Ministry of Justice’s <a href="https://forms.justice.govt.nz/jdo/Introduction.jsp">Judicial Decisions Online database</a> will be added by the end of 2015 at no additional charge.
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
						<p>
							Law Browser recognises the use of defined terms in legislation, even if a defined term only applies to a specific section or is inherited from the principal Act.
						</p>
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
							<i class="fa fa-arrows-alt"></i>
						</div>
					</div>
					<div class="icon-pad">
						<h3>References</h3>
						<p>Find every piece of legislation that refers to what you are currently viewing, from our database of over half a million analysed links.</p>
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
							<i class="fa fa-crosshairs"></i>
						</div>
					</div>
					<div class="icon-pad">
						<h3>Focus</h3>
						<p>Focus allows you see a custom extract from a piece of legislation, be it a single item such as a part, schedule, section, or sub-section of legislation, or ranges of these items.  Get extracts such as 'The Companies Act 1993 sections 2(3)(a), 35, 100-108' in one neatly formatted document.</p>
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
							<i class="fa fa-columns"></i>
						</div>
					</div>
					<div class="icon-pad">
						<h3>Columns</h3>
						<p>Columns allows you to view and compare multiple documents at the same time.</p>
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
							<i class="fa fa-floppy-o"></i>
						</div>
					</div>
					<div class="icon-pad">
						<h3>Save & Load</h3>
						<p>Save your entire Law Browser session to open later.  Very useful if you need to do the same analysis over and over as part of your job.  Saved sessions can be organised into folders, for example for different practice areas or transactions.</p>
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
							<i class="fa fa-print"></i>
						</div>
					</div>
					<div class="icon-pad">
<h3>Your Print Document</h3>
<p>Add items, including definitions, references lists, focus extracts, or whole sections to your custom print document.  Use your browser's print functionality to create clean, concise document, containing only the things relevant to you.</p>
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
							<i class="fa fa-share-alt"></i>
						</div>
					</div>
					<div class="icon-pad">
						<h3>Share</h3>
						<p>Share your compiled print documents with others: they don't even have to be Law Browser subscribers to view and print!</p>
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
							<i class="fa fa-file-pdf-o"></i>
						</div>
					</div>
					<div class="icon-pad">
<h3>Offical PDF</h3>
<p>Law Browser is not a official source of law, but each document links to its official version at <a href="www.legislation.govt.nz">www.legislation.govt.nz</a></p>
					</div>
				</div>
				<div class="hidden-xs col-md-5">
				</div>
			</div>
		</div>
	</section>
</div>

@stop
