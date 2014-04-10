<?php
	// William Villeneuve

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	// TODO: Cange this so it is only the first part, automatically concat the rest based on the SITE_NAME
	$title = 'Lab 6 - Self-Refering Forms w/Validation';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 6 page by William Villeneuve in the INTN2201 Course at Durham College
						 - Displays a form that when submitted simply reloads itself with some post variables set.';
	// Date Created
	$date = '02/27/2014';


	// Site Header
	include('./header.php');
?>

<h2>Lab 6 - Self-Refering Forms (With Data Validation)</h2>

<p>
	The purpose of this page is to create a self refering form so that we do not need multiple files for a form.
</p>
<br/>

<?php
	define("MAX_ITERATIONS", 100);

	// Validate
	if ($_SERVER['REQUEST_METHOD'] === 'POST') // Triple Equals Skips Type Conversion & thus is Faster
	{
		$start = trim($_POST["start"]);
		$stop  = trim($_POST["stop"]);
		$incr  = trim($_POST["incr"]);

		$error = "";

		// Validate

		// Check Start
		if ($start == "")
			$error .= "You MUST set the starting temperature.<br/>";
		else if (!is_numeric($start))
		{
			$error .= "The starting temperature MUST be a number, you entered \"$start\".<br/>";
			$start = null;
		}

		// Check Stop
		if ($stop == "")
			$error .= "You MUST set the ending temperature.<br/>";
		else if (!is_numeric($stop))
		{
			$error .= "The ending temperature MUST be a number, you entered \"$stop\".<br/>";
			$stop = null;
		}

		if ($error == "") // If The Above Arnt Set Properly, Theres No Point Displaying This Error
			// Compare Start & Stop
			if ($start > $stop)
				$error .= "The starting temperature MUST be less than the ending temperature.<br/>";

		// Check Increment
		if ($incr == "")
			$error .= "You MUST set the temperature increment.<br/>";
		else if (!is_numeric($incr))
		{
			$error .= "The temperature increment MUST be a number, you entered \"$incr\".<br/>";
			$incr = null;
		}
		else if ($incr <= 0)
		{
			$error .= "The temperature increment MUST be greater than 0.<br/>";
			$incr = null;
		}

		// This Check is only done when there are no other errors
		if ($error == "")
		{
			$numberOfItterations = ceil(($stop - $start) / $incr); // You can't have 10.1 itterations so I round up
			if ($numberOfItterations > MAX_ITERATIONS)
				$error .= "Would cause $numberOfItterations iterations the limit is set to ". MAX_ITERATIONS. "<br/>";
		}
		// Display Errors
		echo "<strong>$error</strong>";
	}
	else // GET
	{
		$start = "";
		$stop  = "";
		$incr  = "";
	}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table border="0">
		<tr>
			<td>
				Starting Temperature: 
			</td>
			<td>
				<input type="text" name="start" size="10" value="<?php echo $start; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				Ending Temperature: 
			</td>
			<td>
				<input type="text" name="stop" size="10" value="<?php echo $stop;  ?>" />
			</td>
		</tr>
		<tr>
			<td>
				Increment: 
			</td>
			<td>
				<input type="text" name="incr" size="10" value="<?php echo $incr;  ?>" />
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<input type="submit" name="submit" value="Create Temperature Conversion Table" />
			</td>
		</tr>
	</table>
</form>
<br/>

<?php
	function celsiusToFahrenheit($celsius) 
	{
		return $celsius * 1.8 + 32;
	}

	// POST
	if ($_SERVER['REQUEST_METHOD'] === 'POST') // Triple Equals Skips Type Conversion & thus is Faster
	{
		// If there are no errors
		// Create & Display Table
		if ($error == "")
		{
			$table = '<table border="1">
				<tr>
					<th>
						Celsius
					</th>
					<th>
						Fahrenheit
					</th>
				</tr>';

			for ($celsiusTemperature = $start; $celsiusTemperature <= $stop; $celsiusTemperature += $incr)
			{
				$fahrenheitTemperature = celsiusToFahrenheit($celsiusTemperature);

				$table .= "
				<tr>
					<td>
						$celsiusTemperature&deg;
					</td>
					<td>
						$fahrenheitTemperature&deg;
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