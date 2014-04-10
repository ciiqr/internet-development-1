<?php
	// William Villeneuve

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	// TODO: Cange this so it is only the first part, automatically concat the rest based on the SITE_NAME
	$title = 'Lab 7 - Bond Movies';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 7 Bond Movies page by William Villeneuve in the INTN2201 Course at Durham College
						 - The purpose of this page is to display a table of the data in the bond movies table for lab 7.';
	// Date Created
	$date = '02/24/2014';


	// Site Header
	include('./header.php');
?>

<a href="./lab7.php">Back...</a> <br/> <br/>

<h2>Bond Movies</h2>

<p>
	The purpose of this page is to display a table of the data in the bond movies table for lab 7. <br/>
	It utilizes the postgreSQL php methods: pg_connect(), pg_query(), and pg_fetch_result().
</p>
<br/>
	<!-- setup the table -->
	<table border="1" width="75%">
		<tr>
			<th>Movie</th>
			<th>Year</th>
			<th>Actor</th>
		</tr>

		<?php
			//connect
			$pgConnection = pg_connect("host=127.0.0.1 dbname=villeneuvew_db user=villeneuvew password=INSERT_DATABASE_PASSWORD_HERE");

			//issue the query
			$query = "SELECT movies.title, movies.year, actors.name
						FROM movies, actors
						WHERE movies.actor=actors.id
						ORDER BY movies.year ASC";
			$queryResult = pg_query($pgConnection, $query);
			$recordsCount = pg_num_rows($queryResult);

			//generate the table
			for($i = 0; $i < $recordsCount; $i++)
			{
				$movieTitle = pg_fetch_result($queryResult, $i, "title");
				$movieYear  = pg_fetch_result($queryResult, $i, "year");
				$actorName  = pg_fetch_result($queryResult, $i, "name");

				echo "<tr>
					    <td>$movieTitle</td>
						<td>$movieYear</td>
						<td>$actorName</td>
					  </tr>";
			}

		?>
	</table>
<?php
	// Site Footer
	include('./footer.php');
?>