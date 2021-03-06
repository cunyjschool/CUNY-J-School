<?php
/*
Template Name: Stylebook
*/
?>
<?php get_header(); ?>

<div class="wrap">

	<div class="main">
		
		<h2>Stylebook</h2>

		<div class="sidebar left">
			<ul id="sidebar-nav">
				<li><h4>Page Elements</h4></li>
				<li><a href="#main">Main Page Content</a></li>
				<li><a href="#headers">Headers</a></li>
				<li><a href="#subheaders">Subheaders</a></li>
				<li><a href="#section-titles">Section Titles</a></li>
				<li><a href="#paragraphs">Paragraphs</a></li>
				<li><a href="#ordered-lists">Ordered Lists</a></li>
				<li><a href="#unordered-lists">Unordered Lists</a></li>
				<li><a href="#tables">Tables</a></li>
				<li><a href="#footnotes">Footnotes</a></li>
				<li><a href="#sidebar">Sidebar Navigation</a></li>
				<li><h4>Media</h4></li>
				<li><a href="#images">Images</a></li>
				<li><a href="#video">Video</a></li>
				<li><a href="#audio">Audio</a></li>
				<li><a href="soundslides">Soundslides</a></li>
				<li><a href="#captions">Captions</a></li>
				<li><h4>Colors</h4></li>
				<li><a href="#color-palette">Color Palette</a></li>
			</ul>
		</div>
      
  			<div class="content left-sidebar">
    
				<div class="page" id="page-">
    
      				<div class="entry">
	
						<h3>Page Elements</h3>
      
						<h4 id="main">Main Page Content</h4>
						<p>The main content area of all pages on the J-School site should have a white background with 20px padding on the left, top and right and 40px padding on the bottom.</p>
						<code>.main { background: #FFFFFF; padding: 20px 20px 40px 20px; }</code>
						<p><a href="#">Top of page</a></p>

						<h4 id="headers">Headers</h4>
						<p>The header of any page (usually the page title) should be an h2 and appear as the very first element in the content div. On this page, the title "Stylebook" above is the Page Header. Usually there should be only one of these on a page so if you need several, use h2 subheaders instead.</p>
						<code>h2 { font-size: 30px; margin: 5px 0 15px 0; line-height: 30px; color: #000000; }</code>
						<p><a href="#">Top of page</a></p>

						<h4 id="page-headers">Subheaders</h4>

						<p>Subheads are used as section titles on pages with multiple sections. "Page Elements" and "Media" on this page are examples of subheaders. You can have as many of these as necessary on a page but should not use subheads if there is only one section. In that case, the main page header becomes your section title.</p>
						
						<code>h3 { font-size: 18px; margin: 10px; line-height: 24px; color: #000000; }</code>
						<p><a href="#">Top of page</a></p>
						
						<h4 id="section-titles">Section Titles (This is a section title!)</h4>

						<p>Section titles are used to further break up text into more manageable pieces. They are placed within h4 tags beneath a subheader. You can have as many of these as necessary on a page but should not use section titles if there is only one. In that case, the subheader becomes your section title. "Main Page Content," "Headers," and "Subheaders" are all section titles within the subheader "Page Elements."</p>

						<code>h4 { font-size: 14px; margin: 10px; line-height: 24px; color: #000000; }</code>
						<p><a href="#">Top of page</a></p>

						<h4 id="paragraphs">Paragraphs</h4>
						<p>An example of a paragraph is this very text you are reading right now! Paragraphs comprise the primary text content of any post or page. In almost every case Wordpress places text within paragraphs automatically but pages custom built in HTML require you to do this manually.</p>
						<code>p { font-size: 12px; padding: 0.5em 0; line-height: 170%; color: #333333; }</code>
						<p><a href="#">Top of page</a></p>

						<h4 id="ordered-lists">Ordered Lists</h4>
						<p>Below is an example of an ordered (numbered) list:</p>
						<ol>
							<li>Each list item has a number instead of a bullet.</li>
							<li><strong>This is a List Subheader.</strong> List subheaders should be bold and capitalized followed by a period, as shown at the beginning of this list item.</li>
						</ol>
						<code>ol { padding-left: 40px; margin: 12px 0; }<br>ol li { margin:10px 0; }</code>
						<p><a href="#">Top of page</a></p>
						
						<h4 id="unordered-lists">Unordered Lists</h4>
						<p>Below is an example of an unordered (non-numbered) list:</p>
						<ul>
							<li>All list items should all have the same icon, like these little blue arrows to the left of each list item.</li>
							<li><strong>Another Subheader.</strong> Unordered list item subheaders should be the same as in ordered lists.</li>
							<li>Note the 1px grey border at the bottom of each list item.</li>
						</ul>

						<code>ul { margin: 12px 0; }<br />ul li {  list-style-image: url("images/icons/arrow_000_small.png"); border-bottom: 1px solid #EFEFEF; padding-left:40px;}<br />ul li:first-child { border-top: 1px solid #EFEFEF; }</code>
						<p><a href="#">Top of page</a></p>
						
						
						<h4 id="tables">Tables</h4>
						<p>Tables should have ample cell padding, a medium grey border and alternately colored rows to increase readability. Also, the table headers should be bold and the captions (if any) should follow the same style as the captions for embedded media. Here's an example of a table:</p>
						<table>
							<thead>
								<tr>
									<th>This is a table header</th>
									<th>Here's a second</th>
									<th>And a third</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Sam I Am</td>
									<td>Green Eggs</td>
									<td>Ham</td>
								</tr>
								<tr class="even">
									<td>Cat in the Hat</td>
									<td>Thing 1</td>
									<td>Thing 2</td>
								</tr>
								<tr>
									<td>One Fish, Two Fish</td>
									<td>Red Fish</td>
									<td>Blue Fish</td>
								</tr>
							</tbody>
							<caption>This is the great caption!</caption>
						</table>
								

						<code>table { font-size:13px; border-collapse:collapse; margin:15px 0; width:100%; }<br />table thead { background-color:#efefef; }<br />tr td, tr th { padding:5px 10px; border:1px solid #dfdfdf; text-align:left; }<br />tr.even td { background-color:#fafafa; }<br />caption { caption-side:bottom; padding:10px; border-bottom:1px solid #eeeeee; font-style:italic;}</code>
						<p><a href="#">Top of page</a></p>
						
						
						
						<h4 id="footnotes">Footnotes</h4>
						<p class="footnote" >This is an example of a footnote. Footnotes are rare but should always be the very last item in the main content of any page or post. The text should be within a paragraph tag with the class “footnote” which will make the text smaller and apply a grey border to the top.</p>
						<code>p.footnote { border-top: 1px solid #DDDDDD; font-size: 0.9em; margin-top: 10px; padding-top: 5px; }</code>
						<p><a href="#">Top of page</a></p>
						
						<h4 id="sidebar">Sidebar Navigation</h4>
						<p>The sidebar navigation of any page is placed in a div on the top left of the page. The links are then unordered list items with a grey background and the usual blue link color. On hover, the link color changes to white and the background changes to orange. The sidebar at the top of this page is an example.</p>
						<code>.sidebar { width:225px; margin-right:20px; float:left; }<br />ul#sidebar-nav li { list-style:none outside none; }<br />ul#sidebar-nav li a { background:#F9F9F9; border-bottom:1px solid #EEEEEE; border-top:1px solid #FFFFFF; display:block; padding:7px; }<br />ul#sidebar-nav li a:hover { background:#FF9900; border-top:1px solid #EF8F00; color:#FFFFFF; }</code>
						<p><a href="#">Top of page</a></p>
						
						<h3>Media</h3>
						
						<h4 id="images">Images</h4>
						<img class="img-full" src="http://www.journalism.cuny.edu/files/2008/10/classroom2.jpg" />
						<img class="img-right" src="http://www.journalism.cuny.edu/files/2008/09/samplecoursesofstudy.jpg" />
						<p>Images that appear inside the main content of a post or page should be at least 72dpi and color optimized for the Web.</p>
						<p>Full-width images should be 605px wide to span the full page width (as shown above). </p>
						<p style="text-align:center;font-weight:bold;">OR</p>
						<p>Any other images should be 300px wide and float right so that text can wrap around neatly (as shown to the right). These images also have 20px margins on the top, bottom, and left to push the text off the image border.</p>
						<div style="clear:both;"></div>
						<code>img.img-full { width:605px; border:5px solid #EFEFEF; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; }<br />img.img-right { width:300px; float:right; margin:0 0 20px 20px; border:5px solid #EFEFEF; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; }</code>
						<p><a href="#">Top of page</a></p>

						<h4 id="video">Video</h4>
						<div class="video alignright">
							<object class="video" width="320" height="240" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000">
								<param value="true" name="allowfullscreen">
								<param value="always" name="allowscriptaccess">
								<param value="http://vimeo.com/moogaloop.swf?clip_id=11658164&server=vimeo.com&show_title=1&show_byline=0&show_portrait=0&color=ff9933&fullscreen=1" name="src">
								<embed width="320" height="240" allowfullscreen="true" allowscriptaccess="always" src="http://vimeo.com/moogaloop.swf?clip_id=11658164&server=vimeo.com&show_title=1&show_byline=0&show_portrait=0&color=ff9933&fullscreen=1" type="application/x-shockwave-flash">
							</object>
						</div>
						<p>Though video may be embedded via &lt;embed&gt; or &lt;iframe&gt; tags, they should both be 320px wide and float right if on a post or page or in a sidebar. To do this, place the properly sized object or iframe inside a div with the class "video" and add the class "alignright". If the column the video is in is narrower than 400px, then the video width should be expanded to 100% of the column width.</p>
						<p>As usual, if a caption is needed place the caption in a paragraph with the class "caption" directly below the media.</p>
						<div style="clear:both;"></div>
						<code>.video { padding:10px 0 20px 20px; }</code>
						<p><a href="#">Top of page</a></p>
						
						<h4 id="audio">Audio</h4>
						<p>The little audio player is inserted into WordPress via the [audio] shortcode, not HTML. The actual player is an &lt;object&gt; tag with a default width of 50px that expands to 240px. Since the size changes, the audio player should be on it's own line and never have text wrapped around it.</p>
						<p>As usual, if a caption is needed place the caption in a paragraph with the class "caption" directly below the media.</p>
						<code>object#audioplayer { display:block; clear:both; margin:20px 0; }</code>
						<p><a href="#">Top of page</a></p>
						
						<h4 id="soundslides">Soundslides</h4>
						<p>Soundslides on a post or page are typically large and should stand on their own rather than have text wrap around them. Thus, the object should be placed inside a div with the class "soundslides" and set to the full-width with a 20px margin on top and bottom.</p>
						<p>As usual, if a caption is needed place the caption in a paragraph with the class "caption" directly below the media.</p>
						<code>.soundslides { width:100%; display:block; clear:both; margin:20px 0; }</code>
						<p><a href="#">Top of page</a></p>
						
						<h4 id="captions">Captions</h4>
						<div class="alignright">
							<img class="img-right" src="http://www.journalism.cuny.edu/files/2008/09/samplecoursesofstudy.jpg" />
							<p class="caption">What do you do with a drunken sailor?</p>
						</div>
						<p>The caption should be centered text with a 5px padding between the media above and the light grey line below as shown at right.</p>
						<p>To display images, audio, video soundslides or any other embedded media with captions, place the caption text in a paragraph tag with the class "caption" below the media.</p>
						<p>If the media is float right, simply place the media <strong>and</strong> caption inside a div with the class "alignright".</p>
						<div style="clear:both;"></div>
						<code>p.caption { border-bottom:1px solid #DDDDDD; margin-left:20px; text-align:center;}</code>
						<p><a href="#">Top of page</a></p>
						
						<h3>Colors</h3>
						
						<h4 id="color-palette">Color Palette</h4>
						<table class="palette">
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

									<td class="color white" style="background:#333333;" >#333333</td>

									<td>Footer background</td>
								</tr>
								<tr>
									<td></td>

									<td class="color white" style="background:#222222;" >#222222</td>
									
									<td>Header background, footer margin background</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background:#1B1B1B;" >#1B1B1B</td>
									<td>Header navigation background</td>
								</tr>
								
								<tr>
									<td><strong>Text</strong></td>
									<td class="color" style="background: none repeat scroll 0% 0% rgb(204, 204, 204);">#CCCCCC</td>
									<td>Stuff</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background:#999999;">#999999</td>
									<td>Footer text</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background: none repeat scroll 0% 0% rgb(85, 85, 85);">#555555</td>
									<td>Stuff</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background:#222222;" >#333333</td>
									<td>Body text</td>
								</tr>
								<tr>
									<td></td>
									<td class="color white" style="background:#1B1B1B;" >#000000</td>
									<td>Header text &lt;h2&gt;, subheader text &lt;h4&gt;</td>
								</tr>
							</tbody>
						</table>
						<table>
							<tbody>
								<tr>
									<td><strong>Links</strong></td>
									<td class="color white" style="background:#0066ee;">#0066CC</td>
									<td class="color" ><strong>with hover</strong></td>
									<td class="color white" style="background:#0066ee;">#0066CC</td>
									<td>Body links</td>
								</tr>
								<tr>
									<td></td>
									<td style="background:#eeeeee;">#EEEEEE</td>
									<td class="color" ><strong>with hover</strong></td>
									<td style="background:#ffffff;">#FFFFFF</td>
									<td>Footer links</td>
								</tr>
								<tr>
									<td></td>
									<td style="background:#cccccc;">#CCCCCC</td>
									<td class="color" ><strong>with hover</strong></td>
									<td style="background:#ffffff;">#FFFFFF</td>

									<td>Header links</td>
								</tr>
								<tr>
									<td></td>
									<td style="background:#ff9900;">#FF9900</td>
									<td class="color" ><strong>with hover</strong></td>
									<td style="background:#ff9900;">#FF9900</td>
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