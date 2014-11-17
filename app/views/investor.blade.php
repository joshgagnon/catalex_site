@extends('layouts.master')
@section('title')
@parent
Investor
@stop
@section('content')
<div class="investor-page">
<div class="investor-bg"></div>
	<section id="intro" class="investor-intro container">
		<div class="col-md-8">
			<h1>
			<div>Because business</div>
			<div>doesn’t travel in</div>
			<div>6 minute units</div>
			</h1>
		</div>
	</section>
	<section id="info" class="investor-info">
		
		<div class="container">
			
			<div class="section-head text-center">
				<h2>About the Software</h2>
				<p>
				CataLex is a SaaS (software as a service) product that will provide online and cost effective legal services to non-legal professionals and businesspeople in the SME Market, focusing initially on company, commercial, and insolvency law. Coverage will later expand to include securities (excluding listed companies and takeovers), conveyancing, financial services (including banking and insurance), intellectual property, and other specialist areas of law relevant to companies.
				</p><hr class="head-separator">
			</div>
			
			<div class=" section-head text-center">
				<h2>Jurisdiction</h2>
				<p>
				Content is presently limited to New Zealand law and practice, although comparisons will be made with other jurisdictions where relevant, particularly Australia, the UK, and Canada. Once proven for New Zealand, the software will be readily scalable for other jurisdictions. Australia is the obvious first choice for expansion, given its close economic and legal ties with New Zealand.
				</p><hr class="head-separator">
			</div>
			
			<div class="section-head ">
				<h2>Services</h2>
				<p>The services to be provided are divided into the following four categories, which will be seamlessly integrated into a single, intuitive web-application:</p>
				<div class="row service">
					<div class="col-md-3 col-img">
						{{ HTML::image('images/service1.png', 'Projects')}}
					</div>
					<div class="col-md-9">
						<h4>Projects</h4>
						<p>Self-Executing Legal Services – Registers (live registers that businesses are required to keep – e.g. share register, interests register),
						Transaction Guides (step-by-step and interactive guides to business transactions e.g. share transactions under the Companies Act 1993), Transaction Log (central record of important business transactions, even where recording is not required under legislation), Health Check (assesses compliance with legislation including Companies Act 1993 based on tagged information from ‘Safe’), Priority Calculator (determines relative creditor priorities), Bankruptcy and Liquidation Process (tracks the progress and indicates requirements of bankruptcy and liquidation, including deadlines).
						These are the projects currently in contemplation.</p>
					</div>
				</div>
				<div class="row service">
					<div class="col-md-3 col-img">
						{{ HTML::image('images/service2.png', 'Lawbook')}}
					</div>
					<div class="col-md-9">
						<h4>Lawbook</h4>
						<p>Legal Knowledge Base – Definitions of legal terms, explanations of legal concepts, processes, and documents (including use of images, diagrams, videos, cartoons for further explanation), best practice guides, references to legal sources (legislation, cases, and commentary, including from major law firms), links to helpful resources e.g. Government websites, content displayed using many integrated articles similar to Wikipedia. LawBook will provide content for ‘Projects’.</p>
					</div>
				</div>
				<div class="row service">
					<div class="col-md-3 col-img">
						{{ HTML::image('images/service3.png', 'Papers')}}
					</div>
					<div class="col-md-9">
						<h4>Papers</h4>
						<p>Document Generator – Creation of contracts, notices, constitutions, resolutions, disclosure documents, certificates, and other documents clauseby- clause or based on CataLex precedents and with data pulled from Safe, anything printed or downloaded from Safe, LawBook, and Projects, reports on usage of CataLex Software. The Document Generator provides the ‘Papers’ created by Safe, LawBook, and Projects.</p>
					</div>
				</div>
				<div class="row service">
					<div class="col-md-3 col-img">
						{{ HTML::image('images/service4.png', 'Safe')}}
					</div>
					<div class="col-md-9">
						<h4>Safe</h4>
						<p>Business Records Storage – Secure electronic (cloud) storage of important business documents (upload/download), customised user access to stored documents (internal and external), redaction of parts of documents, naming and categorisation of documents according to our folder hierarchy, tagging of key information from documents for use in ‘Projects’.</p>
					</div>
				</div>
				</p>
			</div>
		</div>
	</section>

	<section class="investor-info investor-reliable">
		<div class="container">
			<div class="section-head text-center">
				<h2>Reliable Services (but not from a lawyer)</h2>
				<p>
				The software will provide the above services but will not, and it is very important that it does not: (1) hold itself out as being a lawyer, or being able to replace the services of a lawyer; and (2) provide any services within the meaning of the phrase “reserved areas of work”, as defined in section 6 of the Lawyers and Conveyancers Act 2006. Only qualified lawyers can do those things, and there will be no lawyer/ client relationship between CataLex and users of the software. Our terms and conditions for use of the software will contain a customer acknowledgement to this effect. Despite there being no lawyer-client relationship, customers will be able to rely on the software (unlike Wikipedia and many other online legal resources) for three main reasons:
				</p>
				<ul>
					<li><span class="bullet-heading">
						In-House Legal</span> -
						
						
						The legal content for the software will be prepared by CataLex’s in-house legal team to the same standard as would be expected in a top tier commercial law firm. Those in-house lawyers will have a duty to CataLex to ensure the content is correct.
						
					</li><li>
					<span class="bullet-heading">
					
					External Law Firm</span> -
					
					
					CataLex Limited will have an on-going retainer with a registered law firm (to be decided). That law firm will provide input for the software when specialist expertise is required.
				</li>
				<li>
					<span class="bullet-heading">
					Source References
					</span> -
					
					The software will provide references (and links, where available) for all relevant source law and commentary, including statutes, cases, articles, and publications by top tier law firms, allowing the user to check the accuracy of legal content.
				</li></ul>
				<h3>When a lawyer is required</h3>
				<p>
				CataLex software will not be comprehensive; customers will still require the services of a lawyer from time to time. The software will indicate when consulting a lawyer is advisable or would be considered best practice, and direct the user to our preferred providers. The triggers for such notifications will be automatic and set at conservative levels.
				</p>
				<h3>Monthly Subscription</h3>
				<p>
				The software will be subject to a monthly subscription fee. It is currently envisaged that customers will be able to subscribe for categories separately. However, we will ensure there are strong economic incentives to subscribe for the whole package, as the components are intended to work together.
				</p>
			</div>
			<div class="container text-center">
				{{ HTML::image('images/Team-1.jpg', 'Calatex')}}
			</div>
			<div class="section-head text-center">
				<h2>The Opportunity
				</h2>
				<p>
				Here we explain the market opportunity for CataLex software, by service category.
				</p>
				<h3>Projects
				</h3>
				<p>
				<p>We believe that the practice of law is ripe for computer automation, particularly in the business context. This is because a significant component of a business lawyer’s practice is repetitive (drafting the same document with only minor variations, drawing on the same piece of legislation, and repeating the same logical (A+B=C) calculations, as dictated by prescribed processes (such as those in the Companies Act 1993), making these tasks easily translatable into software code.</p>
				<p>The threshold for when a non-lawyer cannot provide legal services is actually (although not perceived to be) very high, provided they do not hold themselves out to be a lawyer. Aside from the ability to certify documents and take affidavits and declarations, generally only court work, relationship property, and a few other areas of law legally require a registered lawyer.</p>
				<p>Many non-lawyer professionals provide legal services and advice as ‘bush lawyers’, often because it is more cost effective for their clients than seeing a lawyer. The standard of such lawyering can be inconsistent or of doubtful quality, and the potential liability from providing legal guidance without quality tools, information and support, is significant.</p>
				<p>Regulators such as the Registrar of Companies and the Financial Markets Authority are becoming better funded and increasingly focused on enforcement. Inland Revenue is similarly beefing up its approach to collection and enforcement. Compliance is often seen as a burden, both in terms of time and cost, for small to medium sized businesses. A vehicle for virtually automated compliance would be hugely attractive. Business owners, particularly those involved with start-ups of where their own money is on the line, like to do things themselves when able. Perhaps this is simply the typical Kiwi ‘No. 8 wire’ attitude.</p>
				</p>
				</div>
				</div>
				</section>

	<section id="quote" class="quote quote-remember container-fluid">
		
		<div class="row">
			
			<div class="section-head  text-center">
				<h2>Lawyers forget. Computers remember.</h2>
				
			</div>
			
		</div>
	</section>				
				<section class="investor-info">
				<div class="container">
				<div class="section-head text-center">
				<h3>LawBook
				</h3>
				<p>
				<p>Although there are free legislation and case law resources online, they require someone with a good understanding of the law to interpret them (being primary sources of law).</p>
				<p>Access to free legal commentary, particularly commentary in plain English and without legalese, is very hard to find, including online. Where available, the commentary is usually generic and often inadequate or irrelevant.</p>
				<p>The public is not allowed access to the law libraries available to registered lawyers.</p>
				<p>Professional legal databases such as LexisNexis, Westlaw, and CCH are very expensive, and usually pitched at practising lawyers. In the directors’ experience, none of those databases are easy to use or intuitive.</p>
				<p>Although there is a lot of useful legal information online, particularly on the websites of various law firms and Government departments (e.g. business.govt.nz), nowhere is this information usefully aggregated in a single source.</p>
				<p>Non-lawyers often find legal texts to be, among other things, dense, dull, incomprehensible, or academic. The move to online legal resources has not changed this perception.</p>
				</p>
				<h3>Papers
				</h3>
				<p>
				<p>Although there are many providers of legal precedents in the New Zealand market, including law firms, the ADLS, CCH, LexisNexis, and Westlaw, there is little to distinguish the products in terms of both legal substance and usability. The provider will have a ‘one size fits all’ precedent document for a particular transaction, which is downloaded by the user and edited (i.e. fill the blanks) using their own software, usually Microsoft Word. The precedent is standalone, with no references to relevant law.</p>
				<p>There are US and UK resources that allow creation of legal documents via a single interface, but no New Zealand-specific resources.</p>
				<p>Precedent providers are targeted at lawyers, and as such assume the user has a significant amount of background knowledge. This includes that they understand what the document is, what it is used for, why it is needed in context, what the document should include and exclude, how it is executed (if necessary), and how the words will be interpreted by a court. Many of the end-users of precedents do not understand or fully appreciate these matters.</p>
				<p>The form of what one would think as fairly standard documents such as share registers and interest registers varies widely from provider to provider. There is no need for such variation. There would be an appetite for a universally accepted form of such standard documents, especially if the form had the approval of relevant regulators.</p>
				<p>None of the major precedent providers allow the creation of documents clause-by-clause, with the user having the benefit of multiple wordings and phrasings of particular clauses. Generally, the document is simply the document, provided on a ‘take it or leave it’ basis.</p>
				</p>
				<h3>Safe
				</h3>
				<p>
				<p>Physical file storage is usually legally and practically unnecessary, and is now increasingly seen as out-dated.</p>
				<p>Although cloud storage of business records is not yet the norm (most businesses still have local servers or network-attached storage devices), it is likely to be so in 5-10 years. Cloud storage is an effective way of recovering business records when they are unavailable locally, for example due to a disaster or power outage.</p>
				<p>External administration of business records (for example by company secretaries, accountants, and lawyers) is extremely variable in terms of quality, cost, and access.</p>
				<p>Electronic due diligence providers such as Ansarada and Intralinks are seen as expensive, and only commercially justified for large projects.</p>
				</p>
				<hr class="head-separator">
			</div>
			<div class="section-head text-center">
				<h2>The Target Market
				</h2>
				<p>
				CataLex software will be initially targeted at chartered accountant firms whose customers are mostly small-to-medium sized companies. We are targeting chartered accountants for three main reasons:</p>
				<ul>
					<li><span class="bullet-heading">Interaction with law</span> – chartered accountants constantly interact with the law as part of their job, whether they are acting as accountants, company secretaries, business advisers, insolvency practitioners, or in some other capacity. Accountants also commonly provide legal information and precedent documents (e.g. resolutions, certificates, and constitutions) to their clients. They also attend to certain compliance obligations on their clients’ behalf, such as keeping statutory records. As a result, chartered accountants have a particular need for a cost-effective, non-legalistic, and fairly comprehensive legal resource.
					</li>
					<li><span class="bullet-heading">Xero</span> – Many if not most chartered accountant firms are now using, have used, or are at least familiar with, Xero – cloud-based accounting software, charged to the business through a subscription held by the accountant.
						<p>CataLex will have many of the same features as, and will be designed specifically to work with, Xero. We believe this will significantly assist market penetration. In addition, Xero has taken away many traditional ‘bread-andbutter’ accounting services from chartered accountants. They are in need a new source of revenue, and CataLex software therefore presents an opportunity.</p>
					</li>
					<li><span class="bullet-heading">Changing the legal profession from the outside</span> – We believe lawyers and law firms would not have enough incentive to adopt a product like CataLex, as the profession currently stands. This is largely because time-based billing, the standard charging method for most practitioners, acts as a barrier to efficiency (the more time I spend on something, the more I charge). We believe this kind of thinking needs to and will change, but not until the profession experiences enough competitive pressure from the outside to compel it to innovate. CataLex software can provide that competitive pressure, and the accounting profession is the perfect vehicle because it is so closely aligned with the legal profession.
					</li>
				</ul>
			</div>
			<div class="container text-center">
				{{ HTML::image('images/grow.jpg', 'Calatex')}}
			</div>
			<div class="section-head text-center documents">
				<h2>The Investment
				</h2>
				<p>An investment in CataLex is a long-term investment targeting capital gain and, ultimately, liquidity via listing on the New Zealand Stock Exchange (market to be determined) in 4-5 years. It is highly unlikely dividends will be forthcoming until that liquidity event. Any revenue before then will be put into further developing the software.
				</p><p>
				In order to achieve listing, the business will require further and fairly consistent capital investment. We will have a better understanding of CataLex’s capital requirements, and the potential avenues by which we might obtain the necessary capital, in mid to late 2015. One of those avenues may be a further issue of shares to existing investors.
				</p>
				<h3>Use of Funds
				</h3>
				<p>Invested funds will go towards covering the costs of developing the software. The majority of those costs lie in employing two full time staff: Thomas Bloy as In-house Legal Counsel, who will provide the necessary legal expertise, and Josh Gagnon as Chief Technology Officer, who will be the primary developer of the software.
				</p>
				<h3>Prototype – May 2015
				</h3>
				<p>We aim to have a working (but not tested) prototype of CataLex software in June 2015. The content, including all related LawBook articles and documents for Papers, will be limited to share transactions (e.g. issue, transfer, and cancel) and other transactions related to shares (e.g. dividends, financial assistance, and calls and credits) under the Companies Act 1993. We will then test the prototype via a limited release to 5-10 friendly chartered accountant firms.</p>
				<h3>Documents</h3>
				<p>We recommend investors review the following documents before considering an investment in CataLex:</p>
				<p><a href="/files/constitution">Constitution</a> – the founding document of CataLex Limited, which contains important provisions relating to, among other things,  the issue and transfer of shares.</p>
				<p><a href="/files/share_subscription">Share Subscription Form</a> – the form for investors to complete should they wish to invest in CataLex (independent legal advice is recommended). Completed forms may be scanned and emailed to Catalex
				Please indicate your preferred ‘Deposit Date’ and ‘Issue Date’, and insert the amount you are prepared to invest in the definition of ‘Purchase Price’.
				Download Share Subscription Form
				</p>
			</div>
		</section>
		<div class="push-large"></div>
	</div>
	@stop