<?php
/*
Template Name: Stylebook
*/
?>
<?php get_header(); ?>

<style>
code{ padding:5px 10px; background:#eeeeee; margin:10px 0; display:block;}
p.footnote { border-top: 1px solid #DDDDDD; font-size: 0.9em; margin-top: 10px; padding-top: 5px; }
.entry ol { padding-left: 40px; margin: 12px 0; }
.entry ol li { margin:10px 0; padding:0; }
.entry ul { margin: 12px 0; }
.entry ul li {  list-style-image: url("images/icons/arrow_000_small.png"); border-bottom: 1px solid #EEEEEE; padding-left:40px;}
.entry ul li:first-child { border-top: 1px solid #EEEEEE; }
.entry img.img-full { width:595px; border:10px solid #EEEEEE; margin-bottom:20px; border-radius:6px; -moz-border-radius:6px; -webkit-border-radius:6px; }
.entry img.img-right { width:300px; float:right; margin:0 0 20px 20px; border:10px solid #EEEEEE; border-radius:6px; -moz-border-radius:6px; -webkit-border-radius:6px; }
table { width:100%; }
td { padding:5px 10px; }
td.color { width:14%; }
td:first-child { width:15%; padding:0; }
.white { color:#ffffff;}
</style>

<div class="wrap">

	<div class="main">
		
		<h2><?php the_title(); ?><?php edit_post_link( 'Edit', '<span class="edit">', '</span>' ); ?></h2>

		<div class="sidebar left">
			<ul id="sidebar-nav">
				<li><h4><a>Page Elements</a></h4></li>
				<li><a href="#headers">Headers</a></li>
				<li><a href="#subheaders">Subheaders</a></li>
				<li><a href="#body-text">Body Text</a></li>
				<li><a href="#ordered-lists">Ordered Lists</a></li>
				<li><a href="#unordered-lists">Unordered Lists</a></li>
				<li><a href="#images">Images</a></li>
				<li><a href="#footnotes">Footnotes</a></li>
				<li><h4><a>Colors</a></h4></li>
				<li><a href="#color-palette">Color Palette</a></li>
			</ul>
		</div>
      
  			<div class="content left-sidebar">
    
				<div class="page" id="page-<?php the_ID(); ?>">
    
      				<div class="entry">
      
						<h3 id="headers">Headers</h3>
						<p>The header of any page (usually the page title) should be an h2 and appear as the very first element in the content div. On this page, the title "Stylebook" above is the Page Header. Usually there should be only one of these on a page so if you need several, use h3 headings instead.</p>

						<code>h2 { font-size: 30px; margin: 5px 0 15px 0; line-height: 30px; color: #000000; }</code>
						<p><a href="#">Top of page</a></p>

						<h3 id="page-headers">Subheaders (This is subheader text!)</h3>
						<p>Subheads are used as section titles on pages with multiple sections. You can have as many of these as necessary on a page but should not use subheads if there is only one section. In that case, the main page header becomes your section title.</p>

						<code>h3 { font-size: 18px; margin: 10px; line-height: 24px; color: #000000; }</code>
						<p><a href="#">Top of page</a></p>

						<h3 id="body-text">Body Text</h3>
						<p>An example of body text is this very text you are reading right now! Body text is the primary content of any post or page and should be placed within paragraph tags. In almost every case Wordpress does this automatically but pages custom built in HTML require you to do this manually.</p>

						<code>p { font-size: 12px; padding: 0.5em 0; line-height: 170%; color: #333333; }</code>
						<p><a href="#">Top of page</a></p>

						<h3 id="ordered-lists">Ordered Lists</h3>
						<p>Below is an example of an ordered (numbered) list:</p>
						<ol>
							<li>Each list item has a number instead of a bullet.</li>
							<li><strong>This is a List Subheader.</strong> List subheaders should be bold and capitalized followed by a period, as shown at the beginning of this list item.</li>
						</ol>
						<code>ol { padding-left: 40px; margin: 12px 0; }<br />ol li { margin:10px 0; }</code>
						<p><a href="#">Top of page</a></p>
						
						<h3 id="unordered-lists">Unordered Lists</h3>
						<p>Below is an example of an unordered (non-numbered) list:</p>
						<ul>
							<li>All list items should all have the same icon, like these little blue arrows to the left of each list item.</li>
							<li><strong>Another Subheader.</strong> Unordered list item subheaders should be the same as in ordered lists.</li>
							<li>Note the 1px grey border at the bottom of each list item.</li>
						</ul>
						<code>ul { margin: 12px 0; }<br />ul li {  list-style-image: url("images/icons/arrow_000_small.png"); border-bottom: 1px solid #EEEEEE; padding-left:40px;}<br />ul li:first-child { border-top: 1px solid #EEEEEE; }</code>
						<p><a href="#">Top of page</a></p>

						<h3 id="images">Images</h3>
						<img class="img-full" src="http://www.journalism.cuny.edu/files/2008/10/classroom2.jpg" />
						<img class="img-right" src="http://www.journalism.cuny.edu/files/2008/09/samplecoursesofstudy.jpg" />
						<p>Images that appear inside the main content of a post or page should be at least 72dpi and color optimized for the Web.</p>
						<p>Full-width images should be 595px wide to span the full page width (as shown above). </p>
						<p style="text-align:center;font-weight:bold;">OR</p>
						<p>Any other images should be 300px wide and float right so that text can wrap around neatly (as shown to the right). These images also have 20px margins on the top, bottom, and left to push the text off the image border.</p>
						
						<div style="clear:both;"></div>
						<code>img.img-full { width:595px; border:10px solid #EEEEEE; border-radius:6px; -moz-border-radius:6px; -webkit-border-radius:6px; }<br />img.img-right { width:300px; float:right; margin:0 0 20px 20px; border:10px solid #EEEEEE; border-radius:6px; -moz-border-radius:6px; -webkit-border-radius:6px; }</code>
						<p><a href="#">Top of page</a></p>
						<h3 id="footnotes">Footnotes</h3>
						<p class="footnote" >This is an example of a footnote. Footnotes are rare but should always be the very last item in the main content of any page or post. The text should be within a paragraph tag with the class “footnote” which will make the text smaller and apply a grey border to the top.</p>
						<code>p.footnote { border-top: 1px solid #DDDDDD; font-size: 0.9em; margin-top: 10px; padding-top: 5px; }</code>
						<p><a href="#">Top of page</a></p>
						
						<h3 id="color-palette">Color Palette</h3>
						<table>
							<tbody>
								<tr>
									<td><strong>Backgrounds</strong></td>
									<td class="color" style="background:#EEEEEE;">#EEEEEE</td>
									<td>Body background, image borders</td>
								</tr>
								<tr>
									<td></td>
									<td class="color" style="background:#FF9900;">#FF9900</td>
									<td>Homepage video player, sidebar link hover state</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background:#333333;" >#333333</td>
									<td>Stuff</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background:#222222;" >#222222</td>
									<td>Stuff</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background:#1B1B1B;" >#1B1B1B</td>
									<td>Foo</td>
								</tr>
								
								<tr>
									<td><strong>Text</strong></td>
									<td class="color" style="background:#cccccc;">#CCCCCC</td>
									<td>Stuff</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background:#999999;">#999999</td>
									<td>Meow</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background:#555555;" >#555555</td>
									<td>Stuff</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background:#222222;" >#333333</td>
									<td>Stuff</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background:#1B1B1B;" >#000000</td>
									<td>Foo</td>
								</tr>
							</tbody>
						</table>
						<table>
							<tbody>
								<tr>
									<td><strong>Links</strong></td>
									<td class="color white" style="background:#0066ee;">#0066EE</td>
									<td class="color" ><strong>with hover</strong></td>
									<td class="color white" style="background:#0066ee;">#0066EE</td>
									<td>Meow</td>
								</tr>
								<tr>
									<td></td>
									<td style="background:#eeeeee;">#EEEEEE</td>
									<td class="color" ></td>
									<td style="background:#ffffff;">#FFFFFF</td>
									<td>Meow</td>
								</tr>
								<tr>
									<td></td>
									<td style="background:#cccccc;">#CCCCCC</td>
									<td class="color" ></td>
									<td style="background:#ffffff;">#FFFFFF</td>
									<td>Meow</td>
								</tr>
								<tr>
									<td></td>
									<td style="background:#ff9900;">#FF9900</td>
									<td class="color" ></td>
									<td style="background:#ff9900;">#FF9900</td>
									<td>Meow</td>
								</tr>
							</tbody>
						</table>	
							
						<p><a href="#">Top of page</a></p>
				
 
					</div><!-- END div.entry -->
				
				</div><!-- END div.page -->
				
			</div><!-- END div.content -->

		<div style="clear:both;"></div>

	</div>

</div>

<?php get_footer(); ?>