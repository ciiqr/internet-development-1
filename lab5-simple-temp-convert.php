<?php
	// William Villeneuve

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Lab 5 - Temperature Convert Loop - Simple';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 5 page by William Villeneuve in the INTN2201 Course at Durham College
						 - For loop in php to generate a table of temperature conversions';
	// Date Created
	$date = '02/23/2014';


	// Site Header
	include('./header.php');
?>


<a href="./lab5.php">Back...</a> <br/> <br/>

<h2>  </h2>

<p>
	The purpose of this page is to use a for loop in php to generate the content of a page, in this case a table of temperature conversions.
</p>
<br/>

<?php

define("MINIMUM_TEMPERATURE", -40);
define("MAXIMUM_TEMPERATURE", 100);
define("TEMPERATURE_INCREMENT", 10);

echo <<<EOL
<table border="1">
	<tr>
		<th>
			Celsius
		</th>
		<th>
			Fahrenheit
		</th>
	</tr>

EOL;


for ($celsiusTemperature = MINIMUM_TEMPERATURE; $celsiusTemperature <= MAXIMUM_TEMPERATURE; $celsiusTemperature += TEMPERATURE_INCREMENT)
{
	$fahrenheitTemperature = $celsiusTemperature * 1.8 + 32;

	echo <<<EOL
	<tr>
		<td>
			$celsiusTemperature&deg;
		</td>
		<td>
			$fahrenheitTemperature&deg;
		</td>
	</tr>

EOL;
}

echo <<<EOL
</table>
EOL;
?>


<?php
	// Site Footer
	include('./footer.php');
?>