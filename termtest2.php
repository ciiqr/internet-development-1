<?php
	// William Villeneuve

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	// TODO: Cange this so it is only the first part, automatically concat the rest based on the SITE_NAME
	$title = 'INTN2201 Term Test 2';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'INTN2201 Term Test 1 page by William Villeneuve in the INTN2201 Course at Durham College
						 - ';
	// Date Created
	$date = '03/26/2014';
	
	define("MAX_NUMBER", 10);
	
	function squareNumber($num)
	{
		return $num * $num;
	}
	function cubeNumber($num)
	{
		return $num * $num * $num;
	}


	// Site Header
	include('./header.php');
?>

<h1 style="text-align: center">Term Test 2 Page</h1>

<h2>Data Validation</h2>
<p>
	This web page will implement several topics that have been covered in the Internet Development I course (INTN2201) course this semester. This page implements Basic PHP functionality, including the concepts of "sticky forms" and data validation. It also revisits XHTML validation (see w3 validation image below) and HTML tables
</p>

<h2>Dynamic Page Content</h2>
<p>
	If you enter information into both input fields you will get a personalized welcome message and a dynamically create HTML table. If you do not an error message (or two) will be displayed (and no welcome or math).
</p>

<br/>

<?php
	// Validate
	if ($_SERVER['REQUEST_METHOD'] === 'POST') // Triple Equals Skips Type Conversion & thus is Faster
	{
		$firstName = trim($_POST["firstName"]);
		$lastName  = trim($_POST["lastName"]);
		$errors = "";
		
		if (!isset($firstName) || $firstName == "")
		{
			// First Name Not Set
			$errors .= "First name is required.<br/>";
		}
		elseif (is_numeric($firstName))
		{
			// First name is a number
			$errors .= "Your first name cannot be a number. You entered: " . $firstName . "<br/>";
			$firstName = "";
		}
		
		if (!isset($lastName) || $lastName == "")
		{
			// Last Name Not Set
			$errors .= "Last name is required.<br/>";
		}
		elseif (is_numeric($lastName))
		{
			// Last name is a number
			$errors .= "Your last name cannot be a number. You entered: " . $lastName . "<br/>";
			$lastName = "";
		}
		
		
	}
	else // GET
	{
		$firstName = "";
		$lastName = "";
		$errors = "";
	}
?>

<!--Display Errors-->
<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		if ($errors != "")
			echo "<h2>$errors</h2>";
	
		else
			echo "<h2>Welcome $firstName $lastName!</h2>";
	}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table width="30%" class="center" border="1">
		<tr>
			<td>
				<b> First Name: </b>
			</td>
			<td align="center">
				<input type="text" name="firstName" size="10" value="<?php echo $firstName; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				<b> Last Name: </b>
			</td>
			<td align="center">
				<input type="text" name="lastName" size="10" value="<?php echo $lastName;  ?>" />
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<input type="submit" name="submit" value="Generate Table" />
			</td>
		</tr>
	</table>
</form>


<?php
	// POST
	if ($_SERVER['REQUEST_METHOD'] === 'POST') // Triple Equals Skips Type Conversion & thus is Faster
	{
		
		// If there are no errors
		if ($errors == "")
		{
			// Create & Display Table
			
			$table = '<table width="30%" class="center" border="1">
				<tr>
					<th>
						Number
					</th>
					<th>
						Square
					</th>
					<th>
						Cube
					</th>
				</tr>';

			for ($number = 1; $number <= MAX_NUMBER; $number++)
			{
				$squaredNumber = squareNumber($number);
				$cubedNumber = cubeNumber($number);

				$table .= "
				<tr>
					<td align='right'>
						$number
					</td>
					<td align='right'>
						$squaredNumber
					</td>
					<td align='right'>
						$cubedNumber
					</td>
				</tr>

				";
			}

			$table .= "</table>";

			echo $table;
		}
		
	}
?>

<?php
	// Site Footer
	include('./footer.php');
?>