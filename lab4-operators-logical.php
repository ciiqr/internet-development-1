<?php
	// Author:		 William Villeneuve
	// Course Code:	 INTN2201
	// Date Created: 02/15/2014

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Lab 4 - Logical Operators';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 4 Logical Operators page by William Villeneuve in the INTN2201 Course at Durham College. The purpose of this page is to use the logical operators in php.';
	// Date Created
	$date = '02/15/2014';


	// Site Header
	include('./header.php');
?>

<a href="./lab4.php">Back...</a> <br/> <br/>

<h2>Logical Operators</h2>

<p>
	The purpose of this page is to use the logical operators in php.
</p>
<br/>

<?php
	$degrees = 95;
	$hot = "yes";

	if (($degrees > 100) || ($hot == "yes"))
		echo "<p>TEST 1: It's <strong>really</strong> hot!</p>";
	else
		echo "<p>TEST 1: It's bearable.</p>";


	if (($degrees > 100) && ($hot == "yes"))
		echo "<p>TEST 2: It's <strong>really</strong> hot!</p>";
	else
		echo "<p> TEST 2: It's bearable.</p>";
?>

<?php
	// Site Footer
	include('./footer.php');
?>