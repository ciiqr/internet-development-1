<?php
	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	// TODO: Cange this so it is only the first part, automatically concat the rest based on the SITE_NAME
	$title = 'Lab 1';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 1 page by William Villeneuve in the INTN2201 Course at Durham College
						 - Header with Image, Site Name & Location on site (Lab 1)
						 - Paragraphs';
	// Date Created
	$date = '01/13/2014';


	// Site Header
	include('./header.php');
?>

<!-- Content -->
		<hr/>
		<h3>Einstein's Relativity</h3>
		<p>
			For the Einstein's Relativity formula you have to use the superscript and italic tags. It is wrapped in &lt;h2&gt;...&lt;h2/&gt; tags to make it larger and bolder than this paragraph.
		</p>
		<!-- Superscripts -->
		<h2><i>E = mc<sup>2</sup></i></h2>
		<hr/>


		<h3>Currency Conversion (use of special characters)</h3>
		<p>
			There are currency symbols for yen (&amp;yen;), euro's (&amp;euro;) and pounds (&amp;pound;).
		</p>
		<h2>$1.00CDN = $0.966US = &pound;0.603 = &euro;0.674 = &yen;89.99</h2>
		<hr/>


		<h3>Code Snippet</h3>
		<p>
			To display a code snippet you have to be able to indent lines (&amp;nbsp;) and display &lt; (&amp;lt;) and &gt; (&amp;gt;) symbols. Also the &lt;code&gt; tag auto formats code to look good.
		</p>
		<!-- Code & Spaces -->
		<p>
			<code>
			#include &lt;iostream.h&gt; <br/>
			<br/>
			int main(void); <br/>
			{ <br/>
			&nbsp;&nbsp;&nbsp;&nbsp; cout &lt;&lt; "Hello World!" &lt;&lt; endl; <br/>
			&nbsp;&nbsp;&nbsp;&nbsp; return 0; <br/>
			}
			</code>
		</p>
		<hr/>


		<h3>Chemstry Equation</h3>
		<p>
			Chemistry equations often requiure subscripts, &lt;sub&gt; can be used to achieve this.
		</p>
		<!-- Subscripts -->
		<h2>
			2H<sub>2</sub>
			 + O<sub>2</sub>
			 => 2H<sub>2</sub>O + heat
		</h2>
		<hr/>


		<h3>List Example (order important)</h3>
		<p>
			Ordered lists in html (&lt;ol&gt;) display items (&lt;li&gt;) with numbers beside them.
		</p>
		<h3>IIHF 2009 World Junior Champion Medal Winners</h3>
		<!-- Orderd Lists -->
		<ol>
			<li>USA</li>
			<li>Canada</li>
			<li>Sweden</li>
		</ol>
		<hr/>


		<h3>List Example (order NOT important)</h3>
		<p>
			Unordered lists in html (&lt;ul&gt;) display items (&lt;li&gt;) with bullets beside them.
		</p>
		<h3>Things to Pick Up</h3>
		<!-- Unorderd Lists -->
		<ul>
			<li>milk</li>
			<li>eggs</li>
			<li>bread</li>
			<li>cheese</li>
		</ul>
		<hr/>

<?php
	// Site Footer
	include('./footer.php');
?>