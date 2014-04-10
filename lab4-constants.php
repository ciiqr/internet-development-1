<?php
	// Author:		 William Villeneuve
	// Course Code:	 INTN2201
	// Date Created: 02/15/2014

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Lab 4 - Using Constants';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 4 Using Constants page by William Villeneuve in the INTN2201 Course at Durham College. The purpose of this page is to define and use php constants.';
	// Date Created
	$date = '02/15/2014';


	// Site Header
	include('./header.php');
?>

<a href="./lab4.php">Back...</a> <br/> <br/>

<h2>Using Constants</h2>

<p>
	The purpose of this page is to define and use php constants.
</p>
<br/>

<?php
	define("MYCONSTANT", "This is a test of defining constants.");

	echo MYCONSTANT;
?>

<?php
	// Site Footer
	include('./footer.php');
?>