<?php
	// Author:		 William Villeneuve
	// Course Code:	 INTN2201
	// Date Created: 02/15/2014

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Lab 4 - Escaping Your Code';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 4 Escaping Your Code page by William Villeneuve in the INTN2201 Course at Durham College. The purpose of this page is to use the backslash escape character to put characters like quotes within a php string.';
	// Date Created
	$date = '02/15/2014';


	// Site Header
	include('./header.php');
?>

<a href="./lab4.php">Back...</a> <br/> <br/>

<h2>Escaping Your Code</h2>

<p>
	The purpose of this page is to use the backslash escape character to put characters like quotes within a php string.
</p>
<br/>


<?php
	echo "<p>I think this is really \"cool\"!</p>";
?>


<?php
	// Site Footer
	include('./footer.php');
?>