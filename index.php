<?php
	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	// TODO: Cange this so it is only the first part, automatically concat the rest based on the SITE_NAME
	$title = 'Home';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Home page by William Villeneuve in the INTN2201 Course at Durham College
						 - Header with Image, Site Name & Location on site (Home)
						 - Provides links to labs';
	// Date Created
	$date = '01/13/2014';


	// Site Header
	include('./header.php');
?>

<!-- Content -->
<p>
	This site was created by William Villeneuve for the
	<a href="http://opentech.durhamcollege.ca/~pufferd/intn2201/">INTN2201</a>
	course at
	<a href="http://www.durhamcollege.ca/">Durham College</a>.
	<a href="http://www.durhamcollege.ca/"><img src="images/dc_logo.jpg" alt="Durham College Logo" /></a>
	<br/>
	It is intended as a hub where you can access all of my lab assignments throughout the semester.
	The colour scheme I have decided upon is from the 
	<a href="https://kuler.adobe.com/Seattle-Sunset-color-theme-3319935/">Adobe Kuler</a>
	website which has a bunch of great colour schemes (for those of us who lack design skills).
</p>

<?php
	// Site Footer
	include('./footer.php');
?>