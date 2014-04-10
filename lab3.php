<?php
	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	// TODO: Cange this so it is only the first part, automatically concat the rest based on the SITE_NAME
	$title = 'Lab 3';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 3 page by William Villeneuve in the INTN2201 Course at Durham College. The purpose of this lab is to use css to format and layout the content.';
	// Date Created
	$date = '01/29/2014';


	// Site Header
	include('./header.php');
?>

<!-- Content -->
<hr/>
<table border="1">
	<tr>
		<th>
			body
		</th>
		<td>
			For the body tag (as you can see generally of this page) I have a background colour (dark blue), text colour (skin colour) and a font family (Arial).
		</td>
	</tr>
	<tr>
		<th>
			p:before
		</th>
		<td>
			<p>
				p tag with before Pseudo Element.
				Add a openning quote to the beginning of the paragraph
			</p>
		</td>
	</tr>
	<tr>
		<th>
			p:after
		</th>
		<td>
			<p>
				p tag with after Pseudo Element.
				Add a closing quote to the end of the paragraph
			</p>
		</td>
	</tr>
	<tr>
		<th>
			p.footer:after
		</th>
		<td>
			<p class="footer">
				p tag on footer class with after Pseudo Element. <br/>
				Prevent quotes on footer paragraphs.
			</p>
		</td>
	</tr>
	<tr>
		<th>
			p.footer:before
		</th>
		<td>
			<p class="footer">
				p tag on footer class with after Pseudo Element. <br/>
				Prevent quotes on footer paragraphs.
			</p>
		</td>
	</tr>
	<tr>
		<th>
			a:link
		</th>
		<td>
			Styles links to not have underlines &amp; and be coloured
		</td>
	</tr>
	<tr>
		<th>
			a:visited
		</th>
		<td>
			<a href="http://google.com">Visited Link</a>
		</td>
	</tr>
	<tr>
		<th>
			a:active
		</th>
		<td>
			<a href="http://example.com/ihopeyouhaventvisitedthis">Unvisited Link</a>
		</td>
	</tr>
	<tr>
		<th>
			a:hover
		</th>
		<td>
			<a>HOVER OVER ME!</a> <br/>
			Underline links 
		</td>
	</tr>
	<tr>
		<th>
			h1, h2, h3, h4, h5, h6
		</th>
		<td>
			<h1>Headers are set to Helvetica</h1> <br/>
			<h2>Headers are set to Helvetica</h2> <br/>
			<h3>Headers are set to Helvetica</h3> <br/>
			<h4>Headers are set to Helvetica</h4> <br/>
			<h5>Headers are set to Helvetica</h5> <br/>
			<h6>Headers are set to Helvetica</h6>
		</td>
	</tr>
	<tr>
		<th>
			h1
		</th>
		<td>
			<h1>h1 Headers are underlined</h1>
		</td>
	</tr>
	<tr>
		<th>
			hr
		</th>
		<td>
			Horizontal Rules are changed to a darker colour
			<hr/>
		</td>
	</tr>
	<tr>
		<th>
			table
		</th>
		<td style="background-color: #324152">
			<i>Due to the fact that this page is paid out with tables, the page's main background colour is the table background colour set in the table selector of the css file.</i> <br/>

			<table border="1">
				<tr>
					<td>
						Example Table
					</td>
				</tr>
			</table>
			<br/>
		</td>
	</tr>
	<tr>
		<th>
			td.lunch
		</th>
		<td class="lunch">
			The background colour (green) and font weight (bold) of lunch cells in my time table for lab 2
		</td>
	</tr>
	<tr>
		<th>
			td.course
		</th>
		<td class="course">
			The background colour of course cells in my time table for lab 2
		</td>
	</tr>
	<tr>
		<th>
			caption
		</th>
		<td>
			<table width="100%">
				<caption>This is a Caption which is italicized and slightly smaller</caption>
				<tr>
					<td>
						
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<th>
			th
		</th>
		<td>
			<table>
				<tr>
					<th>
						Table Headers are Inverted from the body background &amp; colours.
					</th>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<th>
			ul
		</th>
		<td>
			CSS can change the bullets on unordered lists; Here I used squares.
			<ul>
				<li>Example Item</li>
				<li>Example Item</li>
				<li>Example Item</li>
			</ul>
		</td>
	</tr>
	<tr>
		<th>
			ol
		</th>
		<td>
			CSS can change the bullets on ordered lists; Here I used roman numerals.
			<ol>
				<li>Example Item</li>
				<li>Example Item</li>
				<li>Example Item</li>
			</ol>
		</td>
	</tr>
</table>


<?php
	// Site Footer
	include('./footer.php');
?>