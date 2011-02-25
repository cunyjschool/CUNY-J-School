<?php
/*
Template Name: Page - Urban Reporting
*/
?>

<style>
h4 {
	font-size:15px;
}

ul.three-wide li {
	width:30%;
	float:left;
	padding-right:5%;
}
ul.three-wide li:last-child {
	padding-right:0;
}
img{
	border:5px solid #eeeeee;
	margin-top:10px;
}
.orange_bg {
	background: url("http://www.journalism.cuny.edu/wp-content/themes/CUNY-J-School/images/backgrounds/orange-back.jpg") repeat scroll 0 0 #FF9900;
	padding:10px 20px 20px 20px;
}
blockquote.pullquote{
	font-size:18px;
	line-height:24px;
	color:#ff9900;
	font-style:italic;
	margin:10px auto 20px auto;
}
.alignleft{
	margin-right:20px;
}
.alignright{
	margin-left:20px;
}
.img-and-caption{
	width:315px;
}
.img-and-caption .caption{
	text-align:center;
}
</style>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main" id="entrepreneurial-journalism-landing">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
		<h2><?php the_title(); ?></h2>
		
		<div class="row-section">
			
			<div class="sidebar right standard">
				<blockquote class="pullquote">"This is a great program and it has made me more awesome than ever. Via con dios, CUNY J-School."</blockquote>
				
				<h3>Who Leads our Program</h3>
				<img class="size-thumbnail wp-image-10248" src="http://www.journalism.cuny.edu/files/2008/10/bartlett-sarah.jpg" alt="" width="150" height="148" />
				<p><strong><a href="http://www.journalism.cuny.edu/faculty/sarah-bartlett/" target="_blank">Sarah Bartlett</a></strong>, formerly of Fortune, BusinessWeek and The New York Times, heads up our urban program. She draws on an array of terrific adjuncts and working journalists with experience in print, multimedia, and broadcast to round out the roster of instructors.</p>
				
			</div>
						
			<div class="body-text">
				
				<div class="entry">
					<div class="img-and-caption alignleft">
						<img class="size-medium wp-image-11242" title="urbanreporting-quinn" src="<?php bloginfo('url'); ?>/files/2011/02/urbanreporting-quinn-300x200.jpg" alt="" width="300" height="200" />
						<div class="caption">Urban students on field trip to City Hall catch a few minutes with City Council Speaker Christine Quinn. <i>Photograph by Thomas Chan</i></div>
					</div>
					<p>It is hard to imagine any subject more central to the mission of the CUNY Graduate School of Journalism than the coverage of New York City. The University has an unparalleled network of professors whose research focuses on every conceivable public policy issue, neighborhood, and ethnic group. The J-School is fortunate to benefit from these connections; they inform our curriculum, provide guest speaking (link to list of guest speakers, Exhibit A) and adjunct opportunities, and generate eye-opening field trips (link to photo of students interviewing City Council speaker Christine Quinn (Exhibit B) and speaking to metalworker in his factory in Greenpoint (Exhibit C)) .</p>

					<p>Students who choose the urban reporting concentration are especially well positioned to take advantage of the School’s many distribution outlets: the <a href="http://nycitynewsservice.com/" target="_blank">NYCity News Service</a>, which promotes student work in print, multimedia, and broadcast formats about New York City; <a href="http://219tvmagazine.journalism.cuny.edu/" target="_blank">219 West</a>, the monthly TV show which airs on CUNY-TV; and and <a href="http://fort-greene.thelocal.nytimes.com/" target="_blank">The Local</a>, the hyperlocal website we run in conjunction with the New York Times.</p>
					
				</div>
				
			</div>
			
		</div>

		<div class="row-section orange_bg">
	
			<h3>Our Program</h3>
			<div class="img-and-caption alignright">
				<img class="size-medium wp-image-11242" title="urbanreporting-quinn" src="<?php bloginfo('url'); ?>/files/2011/02/urbanreporting-metalworker-300x200.jpg" alt="" width="300" height="200" />
				<div class="caption">Urban students get a close-up look at New York manufacturing at a metalworker’s workshop in Greenpoint. <i>Photograph by Valerie Lapinski</i></div>
			</div>
			<p>Students who choose to specialize in urban reporting take four courses. The first, Covering City Government and Politics, is taken in their second semester.</p>
			<p>The second is a required summer internship (link to list, Exhibit D) that follows the second semester. Among the media outlets where the School’s urban concentration students have spent their summers are:  NY Daily News, Newsday, Newark Star-Ledger, The New York Times, City Limits, Crain’s New York Business, and WNYC. (Some choose, however, to do their internships in other cities or countries.)</p>
			<p>In the third semester, students take Covering New York City’s Economy and Business and Covering New York City’s Social Issues. While the focus of the four courses is New York City, the reporting and analytical skills students develop are of universal relevance and can be applied to other urban areas as well. Graduates have gone on to work (link to list of workplaces (Exhibit E) in places like Philadelphia, Washington, D.C. and Orange County, CA.</p>
		</div>
		
		
		<div class="row-section">
			<h3>Program Courses</h3>
			<ul class="three-wide">
				<li><h4><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/new-business-models-for-news/">Covering City Government and Politics</a></h4>
					<p>This course gives students a thorough understanding of how the city is governed – how power is wielded and policy decisions are reached. Using a variety of different media formats, students learn how to produce news and feature reports on the vast New York City government bureaucracy, City Council, and unofficial but key players such as lobbyists, labor unions, business, advocacy groups, and community organizations. 
					To see examples of student work produced as a result of this course, click here (link to Exhibit F):
					</p>
					<p><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/new-business-models-for-news/">Learn more &rarr;</a></p>
				</li>
				<li><h4><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/technology-immersion/">Covering NYC’s Economy and Business</a></h4>
					<p>The goal of this course is to help students understand and report effectively on the key economic and business forces shaping life in New York City. With the aid of selected readings and guest speakers, students learn about the city’s most important industries and employers, the role of small businesses and immigrant entrepreneurs, and the impact of real estate and economic development. After getting an overview of the strengths and weaknesses of New York City’s economy, students focus on some of the cutting-edge economic issues the city faces.
					To see examples of student work produced as a result of this course, click here (link to Exhibit G):
					</p>
					<p><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/technology-immersion/">Learn more &rarr;</a></p>
				</li>
				<li><h4><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/media-apprenticeship/">Covering New York’s Social Issues</a></h4>
					<p>This course teaches students how to produce fresh, compelling stories about critical social issues in New York City, such as education, housing, health, poverty, criminal justice, and race relations. Students learn about the public policies that attempt to address those social issues, different ways to measure the effectiveness of those policies, and how journalists can improve the public’s understanding of these issues.
					To see examples of student work produced as a result of this course, click here (link to Exhibit H):
					</p>
					<p><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/media-apprenticeship/">Learn more &rarr;</a></p>
				</li>
			</ul>
			
			<div class="clear"></div>
		</div>
		
		<!-- <div class="row-section">
				
			<h3><a href="http://www.journalism.cuny.edu/2010/12/14/judges-hand-out-40000-in-seed-money-to-launch-journalistic-ventures/">2010 Student Seed Fund Recipients</a></h3>
				
			<ul>
				<li><iframe src="http://player.vimeo.com/video/20382448" width="400" height="300" frameborder="0" scrolling="no" ></iframe></li>
				<li><iframe src="http://player.vimeo.com/video/20382434" width="400" height="300" frameborder="0" scrolling="no" ></iframe></li>
				<li><iframe src="http://player.vimeo.com/video/20382083" width="400" height="300" frameborder="0" scrolling="no" ></iframe></li>
				</li>
			</ul>
			
		</div> -->
	
	<div style="clear:both;"></div>
	
	<?php endwhile; endif; ?>	

	</div><!-- END .main -->

</div><!-- END .wrap -->


<?php get_footer(); ?>
