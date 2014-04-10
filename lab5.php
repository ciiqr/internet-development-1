<?php
	// William Villeneuve

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	// TODO: Cange this so it is only the first part, automatically concat the rest based on the SITE_NAME
	$title = 'Lab 5';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 5 page by William Villeneuve in the INTN2201 Course at Durham College
						 - Displays links to all of the lab 5 exercise sub-pages.';
	// Date Created
	$date = '02/23/2014';


	// Site Header
	include('./header.php');
?>

<h2>Lab 5 - Pages</h2>

<p>
	The purpose of this page is to display links to all of the lab 5 exercise sub-pages. <br/>
	Exercises from chapter 6 of the book: <i>PHP 5 Fast &amp; Easy Web Development by Julie C. Meloni</i><br/>
	It also includes 2 temperature conversion pages as instructed for Lab 5.
</p>
<br/>


<?php
	
	// Initialize list of pages
	// null for title and location means the root list
	$labPages = new PageList(null, null,
		new PageList("Creating a Calculation Form",					"./lab5-calculate-form.php"),
		new PageList("Retrieving and Using REMOTE_ADDR",			"./lab5-remoteaddress.php"),
		new PageList("Retrieving and Using HTTP_USER_AGENT",		"./lab5-useragent.php"),
		new PageList("Temperature Conversion Looping - Simple",		"./lab5-simple-temp-convert.php"),
		new PageList("Temperature Conversion Looping - Function",	"./lab5-function-temp-convert.php")
	);

	// Print the Labs
	$labPages->printList();

?>



<?php
	// Site Footer
	include('./footer.php');
?>