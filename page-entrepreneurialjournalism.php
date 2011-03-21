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
				<li><h4><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/new-business-models-for-news/">New Business Models for News</a></h4>
					<p>Get a firm grounding in the dynamics of the news industry from profs and leading media execs sharing insights into how their businesses work.</p>
					<p><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/new-business-models-for-news/">Learn more &rarr;</a></p>
				</li>
				<li><h4><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/technology-immersion/">Technology Immersion</a></h4>
					<p>Dive into the newest tech - from iPad app development to HTML5 - focusing on the media and business context and journalistic opportunities.</p>
					<p><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/technology-immersion/">Learn more &rarr;</a></p>
				</li>
				<li><h4><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/media-apprenticeship/">New Media Apprenticeship</a></h4>
					<p>Spend up to 10 days immersed in a New York startup. The startups need not be journalistic, but in most cases students will bring journalism value to the startup.</p>
					<p><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/media-apprenticeship/">Learn more &rarr;</a></p>
				</li>
				<li><h4><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/business-incubation/">New Business Incubation</a></h4>
					<p>Students will develop ideas, identify business models and create business plans. Incubation includes a weekly gathering and 1-on-1 work with faculty and industry experts.</p>
					<p><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/business-incubation/">Learn more &rarr;</a></p>
				</li>				
				<li><h4><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/fundamentals-of-business/">Fundamentals of Business</a></h4>
					<p>Master business basics through a rigorous combination of interactive workshops, live exercises, case studies, lively readings and engaging assignments.</p>
					<p><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/fundamentals-of-business/">Learn more &rarr;</a></p>
				</li>
			</ul>
			
			<div class="clear"></div>
		</div>
		
		<div class="row-section">
			
			<div id="lead-by">
				
				<div class="bio" id="jeff">
				<h3>Jeff Jarvis</h3>
				<p><img class="alignleft size-thumbnail wp-image-10248" src="<?php bloginfo('template_directory'); ?>/images/people/jeffjarvis_s150.jpg" alt="" width="150" height="148" /><strong>Jeff Jarvis</strong> is the Director of the Tow-Knight Center for Entrepreneurial Journalism and also director of the school’s interactive program. Prof. Jarvis is an outspoken leader in the discussion of the future of journalism. He advises and invests in news startups as well as media companies in the U.S. and Europe. He has taught our entrepreneurial journalism course since the school opened five years ago. Jarvis was creator and founding editor of Entertainment Weekly and developed a dozen new news services as president of Advance.net, the online arm of Advance Publications. He wrote the best-seller What Would Google Do? and is completing his next book, Public Parts. Email Jeff at <a href="mailto:jeff.jarvis@journalism.cuny.edu">jeff.jarvis@journalism.cuny.edu</a></p>
				</div>
				
				<div class="bio" id="jeremy">				
				<h3>Jeremy Caplan</h3>
				<p><img class="alignright size-thumbnail wp-image-10249" src="<?php bloginfo('template_directory'); ?>/images/people/jeremycaplan_s150.jpg" alt="" width="150" height="150" /><strong>Jeremy Caplan</strong> is the Director of Education for the Tow-Knight Center for Entrepreneurial Journalism.  He is also a Ford Fellow in Entrepreneurial Journalism at the Poynter Institute. In addition to contributing to Time Magazine on subjects ranging from business innovation to consumer technology, Caplan writes for The Wall Street Journal’s Digits. He was previously a Wiegers Fellow at Columbia Business School, where he completed his MBA, and a Knight-Bagehot Fellow at the Columbia Journalism School, where he earned an M.S. in Journalism. Along with a degree from Princeton University’s Woodrow Wilson School of Public and International Affairs, Caplan holds a certificate in violin performance. Before joining Time, Caplan worked for The Paris Review, Yahoo! Internet Life, and Newsweek. Email Jeremy at <a href="mailto:jeremy.caplan@journalism.cuny.edu">jeremy.caplan@journalism.cuny.edu</a></p>
				</div>
				
			</div>
			
		</div>
		
		<div class="row-section" id="pitch-competition-winners">
				
			<h3><a href="http://www.journalism.cuny.edu/2010/12/14/judges-hand-out-40000-in-seed-money-to-launch-journalistic-ventures/">2010 Student Seed Fund Recipients</a></h3>
				
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
			
			<p id="learn-more-awards"><a href="http://www.journalism.cuny.edu/2010/12/14/judges-hand-out-40000-in-seed-money-to-launch-journalistic-ventures/">Learn more about the awards &rarr;</a></p>
			
		</div>
		
		<div class="row-section" id="entrepreneurial-journalism-participants">
			
			<h3>Entrepreneurial Journalism Class of 2011</h3>
			
			<div class="entrepreneurial-journalism-participant left">
				<img src="<?php bloginfo('template_directory'); ?>/images/people/ernestchico_s100.jpg" height="100px" width="100px" class="avatar alignleft" /><strong><a href="http://ernest.entrepreneurial.2011.journalism.cuny.edu/">Ernest Chi Cho</a></strong> is a Cameroonian broadcast journalist living in New York. Before moving to New York in 2009, Chi Cho worked as news anchor and Deputy Editor-in-Chief for Equinoxe Television, a private TV station in Douala – Cameroon. He holds a BS degree in Political Science.
			</div>
			
			<div class="entrepreneurial-journalism-participant right">
				<img src="<?php bloginfo('template_directory'); ?>/images/people/indranidatta_s100.jpg" height="100px" width="100px" class="avatar alignleft" /><strong><a href="http://indrani.entrepreneurial.2011.journalism.cuny.edu/">Indrani Datta</a></strong> is completing a Master's degree in Journalism while building a web startup. She started working in the software industry during the first dotcom era. Since then, she's worked in academia and in industry, for newspapers and for the government &mdash; as a researcher, a writer, a programmer, a trainer, and a project manager. 
			</div>
			
			<div class="hr" style="clear:both;"></div>
			
			<div class="entrepreneurial-journalism-participant left">
				<img src="<?php bloginfo('template_directory'); ?>/images/people/shanedixon_s100.jpg" height="100px" width="100px" class="avatar alignleft" /><strong><a href="http://shane.entrepreneurial.2011.journalism.cuny.edu/">Shane Dixon Kavanaugh</a></strong> is a reporter in New York City. His work has appeared in the New York Times, Daily News, Crain’s, New York Press, City Limits, the Oregonian, and other publications. He is also the founder and managing editor of <a href="http://www.overflowmagazine.com">OVERFLOW Magazine</a>, an arts and culture quarterly in Brooklyn. Shane completed received an M.A. from the CUNY Graduate School of Journalism in December, 2010. 
			</div>
			
			<div class="entrepreneurial-journalism-participant right">
				<img src="<?php bloginfo('template_directory'); ?>/images/people/marianakeller_s100.jpg" height="100px" width="100px" class="avatar alignleft" /><strong><a href="http://mariana.entrepreneurial.2011.journalism.cuny.edu/">Mariana (Vasconcellos) Keller</a></strong> is a Brazilian-born, internationally-grown multimedia journalist. She is fluent in English, Portuguese, French and Hebrew and has worked as a journalist in four continents – from the safety of The New York Times building, to being embedded in a special police force in the Amazon, to dodging bullets in Jerusalem. Her work has been distributed through Agence France-Presse, and featured in publications such as NYTimes, WSJ and TIME.com.
			</div>
			
			<div class="hr" style="clear:both;"></div>
			
			<div class="entrepreneurial-journalism-participant left">
				<img src="<?php bloginfo('template_directory'); ?>/images/people/mattkiser_s100.jpg" height="100px" width="100px" class="avatar alignleft" /><strong><a href="http://matt.entrepreneurial.2011.journalism.cuny.edu/">Matt Kiser</a></strong> is the Online Production Manager for SPIN Magazine, where he works closely with online editors, producers, and web developers to manage the execution of all digital SPIN content from initial conception and product development, to delivery and deployment. Previously, he managed the radio and retail charts at the College Music Journal, was entertainment editor at the award-winning student newspaper, The Orion, and was the general manager the nationally recognized student radio station, KCSC. Matt completed the NYU Digital Media Marketing graduate certificate in 2009. 
			</div>
			
			<div class="entrepreneurial-journalism-participant right">
				<img src="<?php bloginfo('template_directory'); ?>/images/people/youyounglee_s100.jpg" height="100px" width="100px" class="avatar alignleft" /><strong><a href="http://youyoung.entrepreneurial.2011.journalism.cuny.edu/">Youyoung Lee</a></strong> is a lifestyle journalist based in New York. She has been on staff at Allure.com and Entertainment Weekly, and has written for Elle.com, Nylon, the New York Times’ Style blog and MTV/Frommer's Guide to England. She is formerly the managing editor of the start-up company Unlike.net, an international city guide based in Berlin, Germany.
			</div>
			
			<div class="hr" style="clear:both;"></div>
	
		</div>
	
	<div style="clear:both;"></div>
	
	<?php endwhile; endif; ?>	

	</div><!-- END .main -->

</div><!-- END .wrap -->


<?php get_footer(); ?>
