<?php
	// Author:		 William Villeneuve
	// Course Code:	 INTN2201
	// Date Created: 02/15/2014

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Lab 4 - PHP Start and End Tags';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 4 tags page by William Villeneuve in the INTN2201 Course at Durham College. The purpose of this page is to display different types of tags for php.';
	// Date Created
	$date = '02/15/2014';


	// Site Header
	include('./header.php');
?>

<a href="./lab4.php">Back...</a> <br/> <br/>

<h2>PHP Start and End Tags</h2>

<p>
	The purpose of this page is to display different types of tags for php.
</p>
<br/>

<!-- Table of Tags-->
<table border="1">
	<tr>
		<th>
			Opening Tag
		</th>
		<th>
			Closing Tag
		</th>
	</tr>
	<tr>
		<td>
		&lt;?php	
		</td>
		<td>
			?&gt;
		</td>
	</tr>
	<tr>
		<td>
			&lt;?
		</td>
		<td>
			?&gt;
		</td>
	</tr>
	<tr>
		<td>
			&lt;script language="php"&gt;
		</td>
		<td>
			&lt;/script&gt;
		</td>
	</tr>
</table>

<!-- Usage of Tags -->
<!-- Most Common Way -->
<?php
	echo "<p>This is a test using the first tag type.</p>";
?>

<!-- Short but Bad Way -->
<?
	echo "<p>This is a test using the second tag type.</p>";
?>

<!-- Less Common Way -->
<script language="php">
	echo "<p>This is a test using the third tag type.</p>";
</script>


<?php
	// Site Footer
	include('./footer.php');
?>