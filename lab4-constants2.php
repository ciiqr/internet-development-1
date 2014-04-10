<?php
	// Author:		 William Villeneuve
	// Course Code:	 INTN2201
	// Date Created: 02/15/2014

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Lab 4 - Using Constants 2';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 4 Using Constants 2 page by William Villeneuve in the INTN2201 Course at Durham College. The purpose of this page is to use pre-defined php constants.';
	// Date Created
	$date = '02/15/2014';


	// Site Header
	include('./header.php');
?>

<a href="./lab4.php">Back...</a> <br/> <br/>

<h2>Using Constants 2</h2>

<p>
	The purpose of this page is to use pre-defined php constants.
</p>
<br/>

<?php
	echo "<br/>This file is ".__FILE__;
	echo "<br/>This is line number ", __LINE__;
	echo "<br/>I am using ".PHP_VERSION;
	echo "<br/>This test is being run on ".PHP_OS;
?>

<?php
	// Site Footer
	include('./footer.php');
?>