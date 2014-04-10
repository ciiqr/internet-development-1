<?php
	// Author:		 William Villeneuve
	// Course Code:	 INTN2201
	// Date Created: 02/15/2014

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Lab 4 - Commenting Your Code';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 4 Commenting Your Code page by William Villeneuve in the INTN2201 Course at Durham College. The purpose of this page is to comment php code so that the comments are not visible in the pages html on the end users browser.';
	// Date Created
	$date = '02/15/2014';


	// Site Header
	include('./header.php');
?>

<a href="./lab4.php">Back...</a> <br/> <br/>

<h2>Commenting Your Code</h2>

<p>
	The purpose of this page is to comment php code so that the comments are not visible in the pages html on the end users browser.
</p>
<br/>


<!-- HTML Comment -->

<?php
	// This is a simple PHP comment

	/*
		This is a C-Style, multiline comment.
		You can make this as long as you would like.
	*/

	# Used to shells? Feel free to use this kind of comment

?>


<?php
	// Site Footer
	include('./footer.php');
?>