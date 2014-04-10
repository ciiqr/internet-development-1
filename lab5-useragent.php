<?php
	// William Villeneuve

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Lab 5 - Using HTTP_USER_AGENT';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 5 page by William Villeneuve in the INTN2201 Course at Durham College
						 - Access and display the php variable HTTP_USER_AGENT';
	// Date Created
	$date = '02/23/2014';


	// Site Header
	include('./header.php');
?>


<a href="./lab5.php">Back...</a> <br/> <br/>

<h2>  </h2>

<p>
	The purpose of this page is to display the php variable HTTP_USER_AGENT.
</p>
<br/>


<?php
	$agent = getenv("HTTP_USER_AGENT");
	echo "You're using $agent.";
?>


<?php
	// Site Footer
	include('./footer.php');
?>