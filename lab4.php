<?php
	// Author:		 William Villeneuve
	// Course Code:	 INTN2201
	// Date Created: 02/15/2014

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Lab 4';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 4 page by William Villeneuve in the INTN2201 Course at Durham College. The purpose of this lab is to use php to make our sites smarter and reduce the amount of duplication.';
	// Date Created
	$date = '02/03/2014';


	// Site Header
	include('./header.php');
?>

<h2>Lab 4 - Pages</h2>

<p>
	The purpose of this page is to display links to all of the lab 4 exercise sub-pages. <br/>
	Exercises from the book: <i>PHP 5 Fast &amp; Easy Web Development by Julie C. Meloni</i>
</p>
<br/>

<?php
	// Initialize list of pages
	// null for title and location means the root list
	$labPages = new PageList(null, null,
		new PageList("PHP Start and End Tags",		 "./lab4-tags.php"),
		new PageList("Code Cohabitation",			 "./lab4-cohabitation.php"),
		new PageList("Escaping Your Code",			 "./lab4-escaping.php"),
		new PageList("Commenting Your Code",		 "./lab4-commenting.php"),
		new PageList("PHP Variable and Value Types", "./lab4-variables-types.php"),
		new PageList("Using Constants",				 "./lab4-constants.php"),
		new PageList("Using Constants 2",			 "./lab4-constants2.php"),
		new PageList("Assignment Operators",		 "./lab4-operators-assignment.php"),
		new PageList("Comparison Operators",		 "./lab4-operators-comparison.php"),
		new PageList("Logical Operators",			 "./lab4-operators-logical.php")
	);

	// Print the Labs
	$labPages->printList();
?>

<?php
	// Site Footer
	include('./footer.php');
?>