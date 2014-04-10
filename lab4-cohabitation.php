<?php
	// Author:		 William Villeneuve
	// Course Code:	 INTN2201
	// Date Created: 02/15/2014

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Lab 4 - Code Cohabitation';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 4 Code Cohabitation page by William Villeneuve in the INTN2201 Course at Durham College. The purpose of this page is to use php inline with html.';
	// Date Created
	$date = '02/15/2014';


	// Site Header
	include('./header.php');
?>

<a href="./lab4.php">Back...</a> <br/> <br/>

<h2>Code Cohabitation</h2>

<p>
	The purpose of this page is to use php inline with html.
</p>
<br/>

<?php
	echo "<p><em>Hello World! I'm using PHP!</em></p>";
?>


<?php
	// Site Footer
	include('./footer.php');
?>