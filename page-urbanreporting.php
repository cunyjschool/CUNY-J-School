<?php
/*
Template Name: Page - Urban Reporting
*/
?>

<style>
h4 {
	font-size:15px;
}
.main-text p{
	font-size:14px;
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
	-moz-border-radius:3px;
	-border-radius:3px;
	-webkit-border-radius:3px;
}
.orange_bg {
	background: url("http://www.journalism.cuny.edu/wp-content/themes/CUNY-J-School/images/backgrounds/orange-back.jpg") repeat scroll 0 0 #FF9900;
	padding:10px 20px 20px 20px;
	-moz-box-shadow:5px 5px 0 #EEEEEE;
	box-shadow:5px 5px 0 #EEEEEE;
	-webkit-box-shadow:5px 5px 0 #EEEEEE;
	-moz-border-radius:3px;
	border-radius:3px;
	-webkit-border-radius:3px;
}
.orange_bg .caption{
	border-color:#555555;
}
.grey_bg {
	background: #f8f8f8;
	padding:10px 20px 20px 20px;
	-moz-box-shadow:5px 5px 0 #EEEEEE;
	box-shadow:5px 5px 0 #EEEEEE;
	-webkit-box-shadow:5px 5px 0 #EEEEEE;
	-moz-border-radius:3px;
	border-radius:3px;
	-webkit-border-radius:3px;
	width:60%;
	margin-bottom:20px;
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
	margin:10px 0 0 20px;
}
.img-and-caption{
	width:315px;
	padding-top:10px;
}
.img-and-caption .caption{
	text-align:center;
}
ul.two-col li{
	width:30%;
	margin-right:3%;
	float:left;
}
ul.clips li{
	border-bottom:1px solid #eeeeee;
	padding:5px 0;
}
li.video{
	list-style-image:url(http://www.journalism.cuny.edu/files/2011/03/television.png);
	margin-left:25px;
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
				<p><strong><a href="http://www.journalism.cuny.edu/faculty/sarah-bartlett/" target="_blank">Sarah Bartlett</a></strong>, formerly of Fortune, BusinessWeek and The New York Times, heads up our urban program. She draws on an array of terrific adjuncts and working journalists with experience in print, multimedia, and broadcast to round out the <a href="/academics/subject-concentrations/urban/urban-faculty/" target="_blank">roster of instructors</a>.</p><br />
			</div>
						
			<div class="body-text">
				
				<div class="main-text">
					<div class="img-and-caption alignleft">
						<img class="size-medium wp-image-11242" src="http://journalism.cuny.edu/files/2011/02/urbanreporting-quinn-300x200.jpg" alt="" width="300" height="200" />
						<div class="caption">Urban students on field trip to City Hall catch a few minutes with City Council Speaker Christine Quinn. <i>Photograph by Thomas Chan</i></div>
					</div>
					<p>It is hard to imagine any subject more central to the mission of the CUNY Graduate School of Journalism than the coverage of New York City. The University has an unparalleled network of professors whose research focuses on every conceivable public policy issue, neighborhood, and ethnic group. The J-School is fortunate to benefit from these connections; they inform our curriculum, provide guest speaking and adjunct opportunities, and generate eye-opening field trips.</p>

					<p>Students who choose the urban reporting concentration are especially well positioned to take advantage of the School’s many distribution outlets: the <a href="http://nycitynewsservice.com/" target="_blank">NYCity News Service</a>, which promotes student work in print, multimedia, and broadcast formats about New York City; <a href="http://219tvmagazine.journalism.cuny.edu/" target="_blank">219 West</a>, the monthly TV show which airs on CUNY-TV; and and <a href="http://fort-greene.thelocal.nytimes.com/" target="_blank">The Local</a>, the hyperlocal website we run in conjunction with the New York Times.</p>
					
				</div>
				
			</div>
			
		</div>

		<div class="row-section orange_bg">
	
			<div class="img-and-caption alignright">
				<img class="size-medium wp-image-11242" src="http://journalism.cuny.edu/files/2011/02/urbanreporting-metalworker-300x200.jpg" alt="" width="300" height="200" />
				<div class="caption">Urban students get a close-up look at New York manufacturing at a metalworker’s workshop in Greenpoint. <i>Photograph by Valerie Lapinski</i></div>
			</div>
			<h3>Our Curriculum</h3>
			<p>Students who choose to specialize in urban reporting take four courses. The first, Covering City Government and Politics, is taken in their second semester.</p>
			<p>The second is a required summer internship that follows the second semester. Among the media outlets where the School’s urban concentration students have spent their summers are:  NY Daily News, Newsday, Newark Star-Ledger, The New York Times, City Limits, Crain’s New York Business, and WNYC. (Some choose, however, to do their internships in other cities or countries.)</p>
			<p>In the third semester, students take Covering New York City’s Economy and Business and Covering New York City’s Social Issues. While the focus of the four courses is New York City, the reporting and analytical skills students develop are of universal relevance and can be applied to other urban areas as well.</p>
		</div>
		
		
		<div class="row-section">
			<h3>Courses</h3>
			<ul class="three-wide">
				<li>
					<h4>Covering City Government and Politics</h4>
					<p>This course gives students a thorough understanding of how the city is governed – how power is wielded and policy decisions are reached. Using a variety of different media formats, students learn how to produce news and feature reports on the vast New York City government bureaucracy, City Council, and unofficial but key players such as lobbyists, labor unions, business, advocacy groups, and community organizations.</p>
					<h4>Instructors:</h4>
					<p><a>Foobar</a>, <a>Name2</a>, <a>Name3</a></p></li>
				</li>
				<li>
					<h4>Covering NYC’s Economy and Business</h4>
					<p>The goal of this course is to help students understand and report effectively on the key economic and business forces shaping life in New York City. With the aid of selected readings and guest speakers, students learn about the city’s most important industries and employers, the role of small businesses and immigrant entrepreneurs, and the impact of real estate and economic development. After getting an overview of the strengths and weaknesses of New York City’s economy, students focus on some of the cutting-edge economic issues the city faces.</p>
					<h4>Instructors:</h4>
					<p><a>Foobar</a>, <a>Name2</a>, <a>Name3</a></p></li>
				</li>
				<li>
					<h4>Covering New York’s Social Issues</h4>
					<p>This course teaches students how to produce fresh, compelling stories about critical social issues in New York City, such as education, housing, health, poverty, criminal justice, and race relations. Students learn about the public policies that attempt to address those social issues, different ways to measure the effectiveness of those policies, and how journalists can improve the public’s understanding of these issues.</p>
					<h4>Instructors:</h4>
					<p><a>Foobar</a>, <a>Name2</a>, <a>Name3</a></p></li>
				</li>
			</ul>
			<div class="clear"></div>
		</div>
		
		<div class="row-section">

			<div class="sidebar right orange_bg" style="width:26%">
				<h3>Guest Speakers</h3>
				<iframe src="http://player.vimeo.com/video/20382083" width="224" height="168" frameborder="0" scrolling="no" ></iframe>
				<div class="caption">Bill de Blasio - Mar. 2010</div>
				<iframe src="http://player.vimeo.com/video/20382448" width="224" height="168" frameborder="0" scrolling="no" ></iframe>
				<div class="caption">Jane Eisner - Feb. 2011</div>
				<p><a href="">Full list of guest speakers &rarr;</a></p>
			</div>
		    <div class="grey_bg">
				<h3>Student work</h3>
				<ul class="clips">
					<li class="video"><a href="http://www.youtube.com/watch?v=FyF0zhbkCNI" target="_blank">"Swaranjit Singh, first time candidate for New York City Council"</a>, by Jacqueline Linge</li>
					<li class="video"><a href="http://www.youtube.com/watch?v=FtuVR1qLedY" target="_blank">"Urban Birds"</a>, by Sherry Mazzocchi</li>
					<li class="print"><a href="http://cityroom.blogs.nytimes.com/2010/05/03/push-to-insulate-deaf-students-from-dissimilar-school/?scp=1&sq=kerri%20macdonald%20deaf%20and%20school&st=cse" target="_blank">"Push to Insulate Deaf Students from Dissimilar School"</a>, by Kerri MacDonald — New York Times — May 3, 2010</li>
					<li class="print"><a href="http://www.citylimits.org/news/articles/4166/nyc-curtails-art-vending-in-public-parks" target="_blank">"NYC Continues Efforts to Curtail Art Vending in Public Parks"</a>, by Shane Dixon Kavanagh — City Limits — Aug. 27, 2010</li>
					<li class="print"><a href="http://www.citylimits.org/news/articles/4112/pols-aim-to-bridge-racial-ethnic-divisions" target="_blank">"Pols Aim to Bridge Racial, Ethnic Divisions"</a>, by Amy Berryhill — City Limits — July 19, 2010</li>
					<li class="print"><a href="http://www.crainsnewyork.com/keywords/2014/Economic+Outlook" target="_blank">Crain's New York special report: Economic Outlook</a>, by Annie Byrnes, Mike Reicher, Kerri Macdonald, Anastasia Economides, Daniel Macht, Joe Walker</li>
					<li class="video"><a href="http://vimeo.com/16971775" target="_blank">Jacqueline Linge describing her work "Divided Love"</a> on CUNY-TV’s Brian Lehrer Live show</li>
					<li class="video"><a href="http://219tvmagazine.journalism.cuny.edu/2010/11/19/trafficking/" target="_blank">"Trafficking America's Children"</a>, by Teresa Tomassoni</li>
					<li class="print"><a href="http://nycitynewsservice.com/2010/10/27/hope-and-hunger-at-food-pantry/" target="_blank">"Hope and Hunger at Food Pantry"</a>, by Uche Abanobi — NYC News Service — Oct. 27, 2010</li>
				</ul>
			</div>
			
			<div class="grey_bg">
				<h3>Places Students Have Interned</h3>
				<ul class="two-col">
					<li>Daily News and NYDN.com              </li>
					<li>WNYC                                 </li>
					<li>News 12                              </li>
					<li>Washington Post Newsweek Interactive </li> 
					<li>Reuters TV                           </li>
					<li>WNBC                                 </li>
					<li>Star-Ledger                          </li>
					<li>ABC News                             </li>
					<li>MSNBC                                </li>
					<li>Newsday                              </li>
					<li>NY1                                  </li>
					<li>Time.com                             </li>
					<li>CBSNews.com                          </li>
					<li>Crains New York Business             </li>
					<li>WKBW-TV (Buffalo)                    </li>
					<li>CUNY-TV, Brian Lehrer Live           </li>
					<li>Bronx News Network                   </li>
					<li>amNY                                 </li>
					<li>New York Times                       </li>
					<li>Salon.com                            </li>
					<li>Christian Science Monitor            </li>
					<li>San Francisco Magazine               </li>
					<li>City Hall                            </li>
					<li>WUOT (Knoxville, TN)                 </li>
					<li>The Oregonian                        </li>
					<li>WBRE/WYOU   (Scranton, PA)           </li>
					<li>The Crime Report                     </li>
					<li>UN Radio                             </li>
					<li>New York Post                        </li>
					<li>Norwood News                         </li>
					<li>Times-Ledger                         </li>
					<li>City Limits                          </li>
					<li>Scholastic                           </li>
					<li>New Haven Independent                </li>
					<li>Talking Points Memo                  </li>
					<li>Queens Courier                       </li>
					<li>The Brooklyn Paper                   </li>
					<li>Brooklyn Independent TV              </li>
					<li>Haitian Times (Port au Prince bureau)</li>
				</ul>
				<div class="clear"></div>
			</div>
			<div class="grey_bg">

				<h3>Places Students Have Worked After Graduating</h3>
				<ul class="two-col">
					<li>WNYC					  </li>
					<li>WHYY (Philadelphia)       </li>
					<li>NBC Local Integrated Media</li>
					<li>NY1                       </li>
					<li>The Daily Beast           </li>
					<li>New York Daily News       </li>
					<li>New York Times            </li>
					<li>Mott Haven Herald		  </li>
					<li>Hunts Point Express		  </li>
					<li>Politico.com              </li>
					<li>CUNY-TV, Brian Lehrer Live</li>
					<li>NBCNews.com               </li>
					<li>City Hall                 </li>
					<li>Citizens Budget Commission</li>
					<li>Bloomberg News            </li>
					<li>WENY-TV (Elmira, NY)      </li>
					<li>Crains New York Business  </li>
					<li>CBSNews.com               </li>
					<li>Riverdale Press           </li>
					<li>amNY                      </li>
					<li>Glamour                   </li>
					<li>Newsday                   </li>
					<li>AOL Patch                 </li>
					<li>WSJ.com                   </li>
					<li>NJ.com                    </li>
					<li>Times Ledger              </li>
					<li>Brooklyn Independent TV   </li>
					<li>The Daily Pilot (LA       </li>
					<li>New Yorl Post             </li>
					<li>Variety                   </li>
					<li>Jersey Journal            </li>
				</ul>
				<div class="clear"></div>
			</div>
		
		</div>

	<div class="clear"></div>
	
	<?php endwhile; endif; ?>	

	</div><!-- END .main -->

</div><!-- END .wrap -->


<?php get_footer(); ?>
