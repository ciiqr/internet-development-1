<?php
	// Author:		 William Villeneuve
	// Course Code:	 INTN2201
	// Date Created: 02/15/2014

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Lab 4 - Assignment Operators';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 4 Assignment Operators page by William Villeneuve in the INTN2201 Course at Durham College. The purpose of this page is to use the assignment operators in php.';
	// Date Created
	$date = '02/15/2014';


	// Site Header
	include('./header.php');
?>

<a href="./lab4.php">Back...</a> <br/> <br/>

<h2>Assignment Operators</h2>

<p>
	The purpose of this page is to use the assignment operators in php.
</p>
<br/>

<?php
	$origVar = 100;
	echo "<p>Original value is $origVar</p>";

	$origVar += 25;
	echo "<p>Added a value, now it's $origVar</p>";

	$origVar -= 12;
	echo "<p>Subtracted a value, now it's $origVar</p>";

	$origVar .= " chickens";
	echo "<p>Final answer: $origVar</p>";
?>


<?php
	// Site Footer
	include('./footer.php');
?>