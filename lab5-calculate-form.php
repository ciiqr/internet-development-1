<?php
	// William Villeneuve

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	// TODO: Cange this so it is only the first part, automatically concat the rest based on the SITE_NAME
	$title = 'Lab 5 - Creating a Calculation Form';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 5 page by William Villeneuve in the INTN2201 Course at Durham College
						 - Creates a form to calculate some values with php';
	// Date Created
	$date = '02/23/2014';


	// Site Header
	include('./header.php');
?>


<a href="./lab5.php">Back...</a> <br/> <br/>

<h2>Creating a Calculation Form</h2>

<p>
	The purpose of this page is to create a form to calculate some values with php.
</p>
<br/>


<form method="post" action="lab5-calculate.php">
	<p>Value 1: <input type="text" name="val1" size="10"/></p>
	<p>Value 2: <input type="text" name="val2" size="10"/></p>

	<p>
		Calculation:<br/>
		<input type="radio" name="calc" value="add"/> Add <br/>
		<input type="radio" name="calc" value="sub"/> Subtract <br/>
		<input type="radio" name="calc" value="mul"/> Multiply <br/>
		<input type="radio" name="calc" value="div"/> Divide <br/>
	</p>

	<p><input type="submit" name="submit" value="Calculate" /></p>
</form>



<?php
	// Site Footer
	include('./footer.php');
?>