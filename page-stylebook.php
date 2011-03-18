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
.entry img.img-full { width:605px; border:5px solid #EEEEEE; margin-bottom:20px; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; }
.entry img.img-right { width:300px; float:right; margin:0 0 20px 20px; border:5px solid #EEEEEE; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; }
table { width:100%; }
td { padding:5px 10px; }
td.color { width:14%; }
td:first-child { width:15%; padding:0; }
.white { color:#ffffff;}
li.split { margin-top:10px; }
ul#sidebar-nav li h4 { color:#0066CC; background:#F9F9F9; border-bottom:1px solid #EEEEEE; border-top:1px solid #FFFFFF; display:block; padding:7px; }
</style>

<div class="wrap">

	<div class="main">
		
		<h2>Stylebook</h2>

		<div class="sidebar left">
			<ul id="sidebar-nav">
				<li><h4>Page Elements</h4></li>
				<li><a href="#main">Main Page Content</a></li>
				<li><a href="#headers">Headers</a></li>
				<li><a href="#subheaders">Subheaders</a></li>
				<li><a href="#paragraphs">Paragraphs</a></li>
				<li><a href="#ordered-lists">Ordered Lists</a></li>
				<li><a href="#unordered-lists">Unordered Lists</a></li>
				<li><a href="#footnotes">Footnotes</a></li>
				<li><a href="#sidebar">Sidebar Navigation</a></li>
				<li class="split"><h4>Media</h4></li>
				<li><a href="#images">Images</a></li>
				<li><a href="#video">Video</a></li>
				<li><a href="#audio">Audio</a></li>
				<li class="split"><h4>Colors</h4></li>
				<li><a href="#color-palette">Color Palette</a></li>
			</ul>
		</div>
      
  			<div class="content left-sidebar">
    
				<div class="page" id="page-">
    
      				<div class="entry">
	
						<h3>Page Elements</h3>
      
						<h3 id="main">Main Page Content</h3>
						<p>The main content area of all pages on the J-School site should have a white background with 20px padding on the left, top and right and 40px padding on the bottom.</p>

						<code>.main { background: #FFFFFF; padding: 20px 20px 40px 20px; }</code>
						<p><a href="#">Top of page</a></p>

						<h3 id="headers">Headers</h3>
						<p>The header of any page (usually the page title) should be an h2 and appear as the very first element in the content div. On this page, the title "Stylebook" above is the Page Header. Usually there should be only one of these on a page so if you need several, use h3 headings instead.</p>

						<code>h2 { font-size: 30px; margin: 5px 0 15px 0; line-height: 30px; color: #000000; }</code>
						<p><a href="#">Top of page</a></p>

						<h3 id="page-headers">Subheaders (This is subheader text!)</h3>
						<p>Subheads are used as section titles on pages with multiple sections. You can have as many of these as necessary on a page but should not use subheads if there is only one section. In that case, the main page header becomes your section title.</p>

						<code>h3 { font-size: 18px; margin: 10px; line-height: 24px; color: #000000; }</code>
						<p><a href="#">Top of page</a></p>

						<h3 id="paragraphs">Paragraphs</h3>
						<p>An example of a paragraph is this very text you are reading right now! Paragraphs comprise the primary text content of any post or page. In almost every case Wordpress places text within paragraphs automatically but pages custom built in HTML require you to do this manually.</p>

						<code>p { font-size: 12px; padding: 0.5em 0; line-height: 170%; color: #333333; }</code>
						<p><a href="#">Top of page</a></p>

						<h3 id="ordered-lists">Ordered Lists</h3>
						<p>Below is an example of an ordered (numbered) list:</p>
						<ol>
							<li>Each list item has a number instead of a bullet.</li>
							<li><strong>This is a List Subheader.</strong> List subheaders should be bold and capitalized followed by a period, as shown at the beginning of this list item.</li>
						</ol>
						<code>ol { padding-left: 40px; margin: 12px 0; }<br>ol li { margin:10px 0; }</code>
						<p><a href="#">Top of page</a></p>
						
						<h3 id="unordered-lists">Unordered Lists</h3>
						<p>Below is an example of an unordered (non-numbered) list:</p>
						<ul>
							<li>All list items should all have the same icon, like these little blue arrows to the left of each list item.</li>
							<li><strong>Another Subheader.</strong> Unordered list item subheaders should be the same as in ordered lists.</li>
							<li>Note the 1px grey border at the bottom of each list item.</li>
						</ul>
						<code>ul { margin: 12px 0; }<br>ul li {  list-style-image: url("images/icons/arrow_000_small.png"); border-bottom: 1px solid #EFEFEF; padding-left:40px;}<br>ul li:first-child { border-top: 1px solid #EFEFEF; }</code>
						<p><a href="#">Top of page</a></p>
						
						<h3 id="footnotes">Footnotes</h3>
						<p class="footnote">This is an example of a footnote. Footnotes are rare but should always be the very last item in the main content of any page or post. The text should be within a paragraph tag with the class “footnote” which will make the text smaller and apply a grey border to the top.</p>
						<code>p.footnote { border-top: 1px solid #DDDDDD; font-size: 0.9em; margin-top: 10px; padding-top: 5px; }</code>
						<p><a href="#">Top of page</a></p>
						
						<h3 id="images">Images</h3>
						<img class="img-full" src="http://www.journalism.cuny.edu/files/2008/10/classroom2.jpg">
						<img class="img-right" src="http://www.journalism.cuny.edu/files/2008/09/samplecoursesofstudy.jpg">
						<p>Images that appear inside the main content of a post or page should be at least 72dpi and color optimized for the Web.</p>
						<p>Full-width images should be 605px wide to span the full page width (as shown above). </p>
						<p style="text-align: center; font-weight: bold;">OR</p>
						<p>Any other images should be 300px wide and float right so that text can wrap around neatly (as shown to the right). These images also have 20px margins on the top, bottom, and left to push the text off the image border.</p>
						<div style="clear: both;"></div>
						<code>img.img-full { width:605px; border:5px solid #EFEFEF; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; }<br>img.img-right { width:300px; float:right; margin:0 0 20px 20px; border:5px solid #EFEFEF; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; }</code>
						<p><a href="#">Top of page</a></p>
						
						<h3 id="sidebar">Sidebar Navigation</h3>
						<p>The sidebar navigation of any page is placed in a div on the top left of the page. The links are then unordered list items with a grey background and the usual blue link color. On hover, the link color changes to white and the background changes to orange. The sidebar at the top of this page is an example.</p>
						<code>.sidebar { width:225px; margin-right:20px; float:left; }<br>ul#sidebar-nav li { list-style:none outside none; }<br>ul#sidebar-nav li a { background:#F9F9F9; border-bottom:1px solid #EEEEEE; border-top:1px solid #FFFFFF; display:block; padding:7px; }<br>ul#sidebar-nav li a:hover { background:#FF9900; border-top:1px solid #EF8F00; color:#FFFFFF; }</code>
						<p><a href="#">Top of page</a></p>
						
						<h3 id="color-palette">Color Palette</h3>
						<table>
							<tbody>
								<tr>
									<td><strong>Backgrounds</strong></td>
									<td class="color" style="background: none repeat scroll 0% 0% rgb(238, 238, 238);">#EEEEEE</td>
									<td>Body background, image borders</td>
								</tr>
								<tr>
									<td></td>
									<td class="color" style="background: none repeat scroll 0% 0% rgb(255, 153, 0);">#FF9900</td>
									<td>Homepage video player, sidebar link hover state</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background: none repeat scroll 0% 0% rgb(51, 51, 51);">#333333</td>
									<td>Footer background</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background: none repeat scroll 0% 0% rgb(34, 34, 34);">#222222</td>
									<td>Header background, footer margin background</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background: none repeat scroll 0% 0% rgb(27, 27, 27);">#1B1B1B</td>
									<td>Header navigation background</td>
								</tr>
								
								<tr>
									<td><strong>Text</strong></td>
									<td class="color" style="background: none repeat scroll 0% 0% rgb(204, 204, 204);">#CCCCCC</td>
									<td>Stuff</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background: none repeat scroll 0% 0% rgb(153, 153, 153);">#999999</td>
									<td>Footer text</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background: none repeat scroll 0% 0% rgb(85, 85, 85);">#555555</td>
									<td>Stuff</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background: none repeat scroll 0% 0% rgb(34, 34, 34);">#333333</td>
									<td>Body text</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background: none repeat scroll 0% 0% rgb(27, 27, 27);">#000000</td>
									<td>Header text &lt;h2&gt;, subheader text &lt;h3&gt;</td>
								</tr>
							</tbody>
						</table>
						<table>
							<tbody>
								<tr>
									<td><strong>Links</strong></td>
									<td class="color white" style="background: none repeat scroll 0% 0% rgb(0, 102, 238);">#0066CC</td>
									<td class="color"><strong>with hover</strong></td>
									<td class="color white" style="background: none repeat scroll 0% 0% rgb(0, 102, 238);">#0066CC</td>
									<td>Body links</td>
								</tr>
								<tr>
									<td></td>
									<td style="background: none repeat scroll 0% 0% rgb(238, 238, 238);">#EEEEEE</td>
									<td class="color"><strong>with hover</strong></td>
									<td style="background: none repeat scroll 0% 0% rgb(255, 255, 255);">#FFFFFF</td>
									<td>Footer links</td>
								</tr>
								<tr>
									<td></td>
									<td style="background: none repeat scroll 0% 0% rgb(204, 204, 204);">#CCCCCC</td>
									<td class="color"><strong>with hover</strong></td>
									<td style="background: none repeat scroll 0% 0% rgb(255, 255, 255);">#FFFFFF</td>
									<td>Header links</td>
								</tr>
								<tr>
									<td></td>
									<td style="background: none repeat scroll 0% 0% rgb(255, 153, 0);">#FF9900</td>
									<td class="color"><strong>with hover</strong></td>
									<td style="background: none repeat scroll 0% 0% rgb(255, 153, 0);">#FF9900</td>
									<td>Special links</td>
								</tr>
							</tbody>
						</table>	
							
						<p><a href="#">Top of page</a></p>
				
 
					</div><!-- END div.entry -->
				
				</div><!-- END div.page -->
				
			</div><!-- END div.content -->

		<div style="clear: both;"></div>

	</div>

</div>

<?php get_footer(); ?>