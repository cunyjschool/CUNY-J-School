<?php
/*
Template Name: Page - Entrepreneurial Journalism landing
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main" id="entrepreneurial-journalism-landing">
		
		<div class="row-section statement">
			<h2>"What Stanford and MIT do for technology, we hope we can do for journalism" - Jeff Jarvis</h2>
		</div>
		
		<div class="row-section">
			
			<div class="sidebar right standard">
				
				<div class="sidebar-item" id="why">
					<h4>Why Entrepreneurial Journalism?</h4>
					<ol>
						<li><span>This is the first reason you should consider our program.</span></li>
						<li><span>Our second sentence has the second reason you should consider. It's a little bit longer.</span></li>
						<li><span>We kill it with our final reason.</span></li>
					</ol>												
					
				</div>
				
				<div class="sidebar-item widget">
					<a class="interest-capture" href="https://cunyjschool.wufoo.com/forms/s7p4p3/" onclick="window.open(this.href,  null, 'height=400, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false" title="You should sign up!">Sign up for email updates</a>
				</div>
				
				<div class="sidebar-item" id="recent-ej-posts">
					<?php ?>
					
					
				</div>
				
			</div>
			
			<h3 class="title">Reinvest in your career</h3>
			
			<div class="body-text">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="entry">
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>
			</div>
			
		</div>

  		<div class="program-courses row-section">
			<h3>Program Courses</h3>
			<ul>
				<li><h4><a href="#">New Business Models for News</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet tempus vehicula. In nisi tortor, lobortis et posuere nec, mollis id libero.</p>
					<p><a href="#">Learn more</a></p>
				</li>
				<li><h4><a href="#">Technology Immersion</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet tempus vehicula. In nisi tortor, lobortis et posuere nec, mollis id libero.</p>
					<p><a href="#">Learn more</a></p>
				</li>
				<li><h4><a href="#">Apprenticeship</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet tempus vehicula. In nisi tortor, lobortis et posuere nec, mollis id libero.</p>
					<p><a href="#">Learn more</a></p>
				</li>
				<li><h4><a href="#">Incubation</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet tempus vehicula. In nisi tortor, lobortis et posuere nec, mollis id libero.</p>
					<p><a href="#">Learn more</a></p>
				</li>				
				<li><h4><a href="#">Fundamentals of Business</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet tempus vehicula. In nisi tortor, lobortis et posuere nec, mollis id libero.</p>
					<p><a href="#">Learn more</a></p>
				</li>
			</ul>
		</div>
		
		<div class="row-section">
			
			<div id="lead-by">
				
				<div class="bio" id="jeff">
				<h3>Jeff Jarvis</h3>
				<p><img class="alignleft size-thumbnail wp-image-10248" title="Jeff Jarvis" src="http://www.journalism.cuny.edu/files/2010/10/Jarvis-e1288449606733-150x148.jpg" alt="" width="150" height="148" />Jeff Jarvis, director of the Tow-Knight Center for Entrepreneurial Journalism and also director of the school’s interactive program. Prof. Jarvis is an outspoken leader in the discussion of the future of journalism. He advises and invests in news startups as well as media companies in the U.S. and Europe. He has taught our entrepreneurial journalism course since the school opened five years ago. Jarvis was creator and founding editor of Entertainment Weekly and developed a dozen new news services as president of Advance.net, the online arm of Advance Publications. He wrote the best-seller What Would Google Do? and is completing his next book, Public Parts.</p>
				</div>
				
				<div class="bio" id="jeremy">				
				<h3>Jeremy Caplan</h3>
				<p><img class="alignright size-thumbnail wp-image-10249" title="20101004-caplaninteractive_db- 24 - Version 3 (1)" src="http://www.journalism.cuny.edu/files/2010/10/20101004-caplaninteractive_db-24-Version-3-1-150x150.jpg" alt="" width="150" height="150" />Jeremy Caplan, Visiting Professor of Interactive and Entrepreneurial Journalism at the CUNY J-School.  He is also a Ford Fellow in Entrepreneurial Journalism at the Poynter Institute. In addition to contributing to Time Magazine on subjects ranging from business innovation to consumer technology, Caplan writes for The Wall Street Journal’s Digits. He was previously a Wiegers Fellow at Columbia Business School, where he completed his MBA, and a Knight-Bagehot Fellow at the Columbia Journalism School, where he earned an M.S. in Journalism. Along with a degree from Princeton University’s Woodrow Wilson School of Public and International Affairs, Caplan holds a certificate in violin performance. Before joining Time, Caplan worked for The Paris Review, Yahoo! Internet Life, and Newsweek.</p>
				</div>
				
			</div>
			
		</div>
	
	<div style="clear:both;"></div>

	</div><!-- END .main -->

</div><!-- END .wrap -->


<?php get_footer(); ?>