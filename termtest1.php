<?php
	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	// TODO: Cange this so it is only the first part, automatically concat the rest based on the SITE_NAME
	$title = 'INTN2201 Term Test 1';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'INTN2201 Term Test 1 page by William Villeneuve in the INTN2201 Course at Durham College
						 - Displays a table of course links';
	// Date Created
	$date = '02/12/2014';


	// Site Header
	include('./header.php');
?>

<!-- Content -->
<cite>
	This web page will implement several topics that have been covered in the Internet Development I (INTN2201) course this semester. This page implements the XHTML 1.0 standard (see validation below), is laid out using HTML tables, and is styled using a Cascading Style Sheet.
</cite>

<table border="1">
	<tr>
		<td colspan="4" align="center">
			<span>Course Links</span>
		</td>
	</tr>
	<tr>
		<th>
			Site
		</th>
		<th>
			Logo
		</th>
		<th>
			Link
		</th>
		<th>
			Description
		</th>
	</tr>
	<tr>
		<td>
			w3schools
		</td>
		<td align="center">
			<img width="100px" src="./images/logos/w3schools.png" alt="W3 Schools Logo"/>
		</td>
		<td align="center" valign="bottom">
			<a href="http://www.w3schools.com">w3schools.com</a>
		</td>
		<td>
			An excellent web resource that has references for: XHTML, CSS, and HTML colours.
		</td>
	</tr>
	<tr>
		<td>
			W3C
		</td>
		<td align="center">
			<img width="100px" src="./images/logos/w3c.jpg" alt="W3C Logo"/>
		</td>
		<td align="center" valign="bottom">
			<a href="http://validator.w3.org">W3C Validator</a>
		</td>
		<td>
			The World Wide Web Consortium (w3c) is the organization that creates the accepted standards for use on the web. This site specifically is the validator for XHTML compliant pages.
		</td>
	</tr>
	<tr>
		<td>
			Internet Development I
		</td>
		<td align="center">
			<img width="100px" src="./images/logos/intn2201.png" alt="INTN2201 Course Logo"/>
		</td>
		<td align="center" valign="bottom">
			<a href="../../../~pufferd/intn2201">INTN2201</a>
		</td>
		<td rowspan="2">
			INTN2201 is a course offered at Durham College as part of the technology stream programs in the School of Bus. IT &amp; Mgmt.
		</td>
	</tr>
	<tr>
		<td>
			Durham College
		</td>
		<td align="center">
			<img width="100px" src="./images/logos/old_dc.png" alt="Old Durham College Logo"/>
		</td>
		<td align="center" valign="bottom">
			<a href="http://www.durhamcollege.ca">DC Website</a>
		</td>
	</tr>
</table>


<!-- Content End -->

<?php
	// Site Footer
	include('./footer.php');
?>