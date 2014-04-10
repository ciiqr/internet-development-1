<?php
	// William Villeneuve

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	// TODO: Cange this so it is only the first part, automatically concat the rest based on the SITE_NAME
	$title = 'Lab 7';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 7 page by William Villeneuve in the INTN2201 Course at Durham College
						 - Displays links to all of the lab 7 exercise sub-pages as well as  the sql files used to generate the data.';
	// Date Created
	$date = '02/23/2014';


	// Site Header
	include('./header.php');
?>

<h2>Lab 7 - Pages</h2>

<p>
	The purpose of this page is to display links to all of the lab 7 exercise sub-pages as well as the sql files used to generate the data. <br/>
</p>
<br/>

<?php

	echo "<h3> Lab Pages </h3>";
	
	// Initialize list of pages
	$labPages = new PageList(null, null,
		new PageList("Automobiles",	"./lab7_auto_info.php"),
		new PageList("Bond Movies",		"./lab7_bond_info.php")
	);

	// Print the Labs
	$labPages->printList();



	echo "<h3> SQL Files </h3>
		<p> Used to load data into the postgresql database </p>";

	// Init List of SQL Files
	$sqlFiles = new PageList(null, null,
		new PageList("Automobiles",	"./sql/lab7_autos.sql"),
		new PageList("Bond Movies",		"./sql/lab7_bond_movies.sql")
	);

	// Print the List
	$sqlFiles->printList();

?>

<?php
	// Site Footer
	include('./footer.php');
?>