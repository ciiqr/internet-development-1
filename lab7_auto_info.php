<?php
	// William Villeneuve

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	// TODO: Cange this so it is only the first part, automatically concat the rest based on the SITE_NAME
	$title = 'Lab 7 - Automobiles';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 7 Automobiles page by William Villeneuve in the INTN2201 Course at Durham College
						 - The purpose of this page is to display a table of the data in the automobiles table for lab 7.';
	// Date Created
	$date = '02/24/2014';


	// Site Header
	include('./header.php');
?>

<a href="./lab7.php">Back...</a> <br/> <br/>

<h2>Automobiles</h2>

<p>
	The purpose of this page is to display a table of the data in the automobiles table for lab 7. <br/>
	It utilizes the postgreSQL php methods: pg_connect(), pg_query(), and pg_fetch_result().
</p>
<br/>
	<!-- setup the table -->
	<table border="1" width="75%">
		<tr>
			<th>Make</th>
			<th>Model</th>
			<th>Year</th>
			<th>MSRP</th>
		</tr>

		<?php
			//connect
			$pgConnection = pg_connect("host=127.0.0.1 dbname=villeneuvew_db user=villeneuvew password=INSERT_DATABASE_PASSWORD_HERE");

			//issue the query
			$query = "SELECT make, model, year, msrp
						FROM auto_info
						ORDER BY year ASC";
			$queryResult = pg_query($pgConnection, $query);
			$recordsCount = pg_num_rows($queryResult);

			//generate the table
			for($i = 0; $i < $recordsCount; $i++)
			{
				$make	= pg_fetch_result($queryResult, $i, "make");
				$model	= pg_fetch_result($queryResult, $i, "model");
				$year	= pg_fetch_result($queryResult, $i, "year");
				$msrp	= pg_fetch_result($queryResult, $i, "msrp");

				echo "<tr>
					    <td>$make</td>
						<td>$model</td>
						<td>$year</td>
						<td>$msrp</td>
					  </tr>";
			}

		?>
	</table>
	<!-- end the table -->

<?php
	// Site Footer
	include('./footer.php');
?>