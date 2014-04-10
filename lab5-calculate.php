<?php
	// William Villeneuve

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	// TODO: Cange this so it is only the first part, automatically concat the rest based on the SITE_NAME
	$title = 'Lab 5 - Calculation Form Result';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 5 page by William Villeneuve in the INTN2201 Course at Durham College
						 - Displays the result of the calculation done on the previous calcukate form';
	// Date Created
	$date = '02/23/2014';


	// All of these have to be set for this form page to work
	if (($_POST["val1"] == "") || ($_POST["val2"] == "") || ($_POST["calc"] == ""))
	{
		header("Location: lab5-calculate-form.php");
		// header("Location: " . $_SERVER['HTTP_REFERER']);
		exit;
	}


	if ($_POST["calc"] == "add")
		$result = $_POST["val1"] + $_POST["val2"];

	else if ($_POST["calc"] == "sub")
		$result = $_POST["val1"] - $_POST["val2"];

	else if ($_POST["calc"] == "mul")
		$result = $_POST["val1"] * $_POST["val2"];

	else if ($_POST["calc"] == "div")
		$result = $_POST["val1"] / $_POST["val2"];


	// Site Header
	include('./header.php');
?>


<a href="./lab5-calculate-form.php">Back...</a> <br/> <br/>

<h2>Calculation Result</h2>

<p>
	The purpose of this page is to display the result of the calculation done on the previous form.
</p>
<br/>

<p>The result of the calculation is: <?php echo $result; ?> </p>

<?php
	// Site Footer
	include('./footer.php');
?>