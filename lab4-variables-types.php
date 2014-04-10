<?php
	// Author:		 William Villeneuve
	// Course Code:	 INTN2201
	// Date Created: 02/15/2014

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Lab 4 - Variable and Value Types';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 4 Variable and Value Types page by William Villeneuve in the INTN2201 Course at Durham College. The purpose of this page is to use php variables and value types.';
	// Date Created
	$date = '02/15/2014';


	// Site Header
	include('./header.php');
?>

<a href="./lab4.php">Back...</a> <br/> <br/>

<h2>Variable and Value Types</h2>

<p>
	The purpose of this page is to use php variables and value types.
</p>
<br/>


<?php

	$intVar = 9554215464;

	$floatVar = 1542.2232235;

	$stringVar = "This is a string.";


	echo "<p>integer: $intVar</p>";
	echo "<p>float: $floatVar</p>";
	echo "<p>string: $stringVar</p>";
?>


<?php
	// Site Footer
	include('./footer.php');
?>