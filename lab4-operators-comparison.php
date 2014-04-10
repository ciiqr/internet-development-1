<?php
	// Author:		 William Villeneuve
	// Course Code:	 INTN2201
	// Date Created: 02/15/2014

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Lab 4 - Comparison Operators';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 4 Comparison Operators page by William Villeneuve in the INTN2201 Course at Durham College. The purpose of this page is to use the comparison operators in php.';
	// Date Created
	$date = '02/15/2014';


	// Site Header
	include('./header.php');
?>

<a href="./lab4.php">Back...</a> <br/> <br/>

<h2>Comparison Operators</h2>

<p>
	The purpose of this page is to use the comparison operators in php.
</p>
<br/>

<?php
	$a = 21;
	$b = 15;

	echo "<p>Original value of \$a is $a and \$b is $b</p>";

	// Is Equal
	if ($a == $b)
		echo "<p>TEST 1: \$a equals \$b</p>";
	else
		echo "<p>TEST 1: \$a is not equal to \$b</p>";

	// Is Not Equal
	if ($a != $b)
		echo "<p>TEST 2: \$a is not equal to \$b</p>";
	else
		echo "<p>TEST 2: \$a is equal to \$b</p>";

	// Is Greater Than
	if ($a > $b)
		echo "<p>TEST 3: \$a is greater than \$b</p>";
	else
		echo "<p>TEST 3: \$a is not greater than \$b</p>";

	// Is Less Than
	if ($a < $b)
		echo "<p>TEST 4: \$a is less than \$b</p>";
	else
		echo "<p>TEST 4: \$a is not less than \$b</p>";


	// Is Greater Than OR Equal To 
	if ($a >= $b)
		echo "<p>TEST 5: \$a is greater than or equal to \$b</p>";
	else
		echo "<p>TEST 5: \$a is not greater than or equal to \$b</p>";
	

	// Is Less Than OR Equal To
	if ($a <= $b)
		echo "<p>TEST 6: \$a is less than or equal to \$b</p>";
	else
		echo "<p>TEST 6: \$a is not less than or equal to \$b</p>";
	
	
?>


<?php
	// Site Footer
	include('./footer.php');
?>