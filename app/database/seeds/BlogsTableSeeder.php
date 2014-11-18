<?php



class BlogsTableSeeder extends Seeder {

	public function run()
	{

        DB::table('blogs')->delete();
        $blog = new Blog;
        $blog->fill(array(
            'title' => 'Professional legal fees continue to rise, despite oversupply of lawyers - LawTalk, 7 November 2014',
            'body' => '<ul>
<li>“There’s no question an oversupply of lawyers in New Zealand exists…” (Legal Best Practice Director Ashley Balls)</li>
<li>In the year to 30 June 2014, the cost of professional legal services increased 3.4%, compared with professional accounting fees at 1.5% (Statistics New Zealand).</li>
<li>“The need for legal representation is higher than it has ever been and yet the cost is as high as it has ever been.  The law isn’t simple.  That is fine for those who can afford it, but not to have access for those who can’t afford it is a huge travesty.” (Prof Mark Henaghen, Dean of Law Otago University).</li>
</ul>
<p><a href="http://issuu.com/nzlawsociety/docs/lawtalk_854_web?e=5224343/10042673">Link to Issue</a></p>'));
        $blog->save();
        $blog = new Blog;
        $blog->fill(array(
            'title' => 'The Future of Legal Services - Cornell University Blog, 30 August 2013',
            'body' => '"The legal profession has for long been notoriously averse to change, but now even the legal industry is affected by a new harsher reality with widespread changes impacting legal practice and client service. These changes come not merely from the aftermath of the economic downturn with price pressure and increased demands from clients, but also from the technological developments and regulatory changes that provide breeding ground for new kinds of competition. This post discusses the future of legal service, with a specific focus on how the current changes on the legal market demand a more strategic approach to knowledge management and efficient working processes and how technology is becoming more and more important as a way to develop new innovative ways to deliver legal services."
<a href="http://blog.law.cornell.edu/voxpop/2013/08/30/future-of-legal-services-and-the-development-of-legal-knowledge-management">Link to Article</a>'));
        $blog->save();
        $blog = new Blog;
        $blog->fill(array(
            'title' => 'Professional legal fees continue to rise, despite oversupply of lawyers - LawTalk, 7 November 2014',
            'body' => '<ul>
<li>“There’s no question an oversupply of lawyers in New Zealand exists…” (Legal Best Practice Director Ashley Balls)</li>
<li>In the year to 30 June 2014, the cost of professional legal services increased 3.4%, compared with professional accounting fees at 1.5% (Statistics New Zealand).</li>
<li>“The need for legal representation is higher than it has ever been and yet the cost is as high as it has ever been.  The law isn’t simple.  That is fine for those who can afford it, but not to have access for those who can’t afford it is a huge travesty.” (Prof Mark Henaghen, Dean of Law Otago University).</li>
</ul>
</p><a href="http://issuu.com/nzlawsociety/docs/lawtalk_854_web?e=5224343/10042673">Link to Issue</a></p>'));
        $blog->save();
	}

}