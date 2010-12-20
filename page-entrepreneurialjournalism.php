<?php
/*
Template Name: Page - Entrepreneurial Journalism
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main" id="entrepreneurial-journalism-landing">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<?php if ( $lead_statement = get_post_meta( get_the_id(), 'lead_statement', true ) ): ?>
		<div class="row-section statement">
			<h2><?php echo $lead_statement; ?></h2>
		</div>
		<?php endif; ?>
		
		<div class="row-section">
			
			<div class="sidebar right standard">
				
				<div class="sidebar-item" id="why">
					<h4>Why Entrepreneurial Journalism?</h4>
					<ol>
						<li><span>Our program prepares you for leadership and innovation.</span></li>
						<li><span>We offer intensive, lively courses taught by top profs and real-world practitioners.</span></li>						
						<li><span>Fellowships and scholarships are available for top applicants.</span></li>
					</ol>												
					
				</div>
				
			</div>
			
			<h3 class="title">Invest in your career</h3>
			
			<div class="body-text">
				
				<div class="entry">
					<?php the_content(); ?>
				</div>
				
				<a class="interest-capture" href="https://cunyjschool.wufoo.com/forms/sign-up-for-entrepreneurial-journalism-updates/" title="You should sign up!">Sign up for email updates about Entrepreneurial Journalism at CUNY J-School</a>
				
			</div>
			
		</div>

  		<div class="program-courses row-section">
			<h3>Program Courses</h3>
			<ul>
				<li><h4>New Business Models for News</h4>
					<p>Get a firm grounding in the dynamics of the news industry from profs and leading media execs sharing insights into how their businesses work.</p>
				</li>
				<li><h4>Technology Immersion</h4>
					<p>Dive into the newest tech - from iPad app development to HTML5 - focusing on the media and business context and journalistic opportunities.</p>
				</li>
				<li><h4>New Media Apprenticeship</h4>
					<p>Spend up to 10 days immersed in a New York startup. The startups need not be journalistic, but in most cases students will bring journalism value to the startup.</p>
				</li>
				<li><h4>New Business Incubation</h4>
					<p>Students will develop ideas, identify business models and create business plans. Incubation includes a weekly gathering and 1-on-1 work with faculty and industry experts.</p>
				</li>				
				<li><h4>Fundamentals of Business</h4>
					<p>Master business basics through a rigorous combination of interactive workshops, live exercises, case studies, lively readings and engaging assignments.</p>
				</li>
			</ul>
			
			<div class="clear"></div>
		</div>
		
		<div class="row-section">
			
			<div id="lead-by">
				
				<div class="bio" id="jeff">
				<h3>Jeff Jarvis</h3>
				<p><img class="alignleft size-thumbnail wp-image-10248" title="Jeff Jarvis" src="http://www.journalism.cuny.edu/files/2010/10/Jarvis-e1288449606733-150x148.jpg" alt="" width="150" height="148" /><strong>Jeff Jarvis</strong> is the Director of the Tow-Knight Center for Entrepreneurial Journalism and also director of the school’s interactive program. Prof. Jarvis is an outspoken leader in the discussion of the future of journalism. He advises and invests in news startups as well as media companies in the U.S. and Europe. He has taught our entrepreneurial journalism course since the school opened five years ago. Jarvis was creator and founding editor of Entertainment Weekly and developed a dozen new news services as president of Advance.net, the online arm of Advance Publications. He wrote the best-seller What Would Google Do? and is completing his next book, Public Parts. Email Jeff at <a href="mailto:jeff.jarvis@journalism.cuny.edu">jeff.jarvis@journalism.cuny.edu</a></p>
				</div>
				
				<div class="bio" id="jeremy">				
				<h3>Jeremy Caplan</h3>
				<p><img class="alignright size-thumbnail wp-image-10249" title="20101004-caplaninteractive_db- 24 - Version 3 (1)" src="http://www.journalism.cuny.edu/files/2010/10/20101004-caplaninteractive_db-24-Version-3-1-150x150.jpg" alt="" width="150" height="150" /><strong>Jeremy Caplan</strong> is the Director of Education for the Tow-Knight Center for Entrepreneurial Journalism.  He is also a Ford Fellow in Entrepreneurial Journalism at the Poynter Institute. In addition to contributing to Time Magazine on subjects ranging from business innovation to consumer technology, Caplan writes for The Wall Street Journal’s Digits. He was previously a Wiegers Fellow at Columbia Business School, where he completed his MBA, and a Knight-Bagehot Fellow at the Columbia Journalism School, where he earned an M.S. in Journalism. Along with a degree from Princeton University’s Woodrow Wilson School of Public and International Affairs, Caplan holds a certificate in violin performance. Before joining Time, Caplan worked for The Paris Review, Yahoo! Internet Life, and Newsweek. Email Jeremy at <a href="mailto:jeremy.caplan@journalism.cuny.edu">jeremy.caplan@journalism.cuny.edu</a></p>
				</div>
				
			</div>
			
		</div>
		
		<div class="row-section" id="pitch-competition-winners">
				
			<h3>2010 Student Seed Fund Recipients</h3>
				
			<ul>
				<li><h4>Clear Health Costs</h4>
					<p>Clear Health Costs provides vital information to U.S. consumers by bringing transparency to the health-care marketplace.</p>
				</li>
				<li><h4>Meme Push</h4>
					<p>MemePush is a platform that enables the collaborative development of educational news games.</p>
				</li>
				<li><h4>Nigeria Police Watch</h4>
					<p>Nigeria Police Watch is an online platform that provides citizens of Nigeria with vital information to help them get the best out of the police in their neighborhoods while also providing the police with the information they need to better protect citizens and their communities.</p>
				</li>
				<li><h4>Overflow Publishing</h4>
					<p>Overflow Publishing is an advertising cooperative that helps strengthen Brooklyn's print and online publications by aggregating audiences for advertisers in creative new ways.</p>
				</li>
			</ul>
			
		</div>
		
		<?php if ( $application_information = get_post_meta( get_the_id(), 'application_information', true ) ): ?>
		<div class="row-section" id="application-information">	
			<h3>Ready to apply?</h3>
			<p><?php echo $application_information; ?></p>
		</div>
		<?php endif; ?>
	
	<div style="clear:both;"></div>
	
	<?php endwhile; endif; ?>	

	</div><!-- END .main -->

</div><!-- END .wrap -->


<?php get_footer(); ?>