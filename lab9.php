<?php
	// William Villeneuve

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Lab 9';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 9 page by William Villeneuve in the INTN2201 Course at Durham College
						 - Link to sql files used to load the database.
						 - Display a login screen & use the entered data to get and display the users stored data.';
	// Date Created
	$date = '04/02/2014';


	// Site Header
	include('./header.php');
?>

<hr/>
<h2>Lab 9 - Login Page</h2>

<p>
	The purpose of this page is to display a login screen &amp; use the entered data to get and display the users stored data. <br/>
</p>
<br/>

<?php
	echo "<h3> SQL Files </h3>
		<p> Used to load data into the postgresql database </p>";

	// Init List of SQL Files
	$sqlFiles = new PageList(null, null,
		new PageList("Users",	"./sql/lab9_users.sql")
	);

	// Print the List
	$sqlFiles->printList();
	
	echo "<hr/>";

	// When in POST mode
	if ($_SERVER['REQUEST_METHOD'] === 'POST') // Triple Equals Skips Type Conversion & thus is Faster
	{
		//connect
		$pgConnection = db_connect();
		
		$username = trim($_POST["login"]);
		$password = trim($_POST["pass"]);
		
		$firstName = "";
		$lastName = "";
		$email = "";
		$lastAccessDate = "";
		
		$message = "";
		$errors = "";
		
		
		// No Errors So Far
		// Query Database for username & password
		
		// Create the query for the proper username & password
		$query = "SELECT first_name, last_name, email_address, last_access
				  FROM users
				  WHERE id = '".$username."' AND password='".$password."'";
		// Issue User & Password Query
		$queryResult = pg_query($pgConnection, $query);
		
		// if there is a record then the User & Password
		if (pg_num_rows($queryResult) == 1)
		{
			// Get Record Info
			$firstName		= pg_fetch_result($queryResult, 0, "first_name");
			$lastName		= pg_fetch_result($queryResult, 0, "last_name");
			$email			= pg_fetch_result($queryResult, 0, "email_address");
			$lastAccessDate	= pg_fetch_result($queryResult, 0, "last_access");
			
			// Display Info
			$message .= "Welcome back ".$firstName." ".$lastName." <br/>".
						"Our records show that your <br/>".
						"email address is: ".$email." <br/>and ".
						"you last accessed our system: ".$lastAccessDate;
				  
				  
			// Issue UPDATE last_access to now
			pg_query($pgConnection, "UPDATE users SET last_access = '" .date("Y-m-d",time())."' WHERE id='".$username."'");
		}
		else
		{
			// Validate User & Password from post
			if ($username == "")
				$errors .= "You must enter a username.<br/>";
			if ($password == "")
				$errors .= "You must enter a password.<br/>";
			
			if ($errors == "")
				$errors .= "Login/password not found in the database.<br/>";
			
			// Determine if Username is in the database
			$queryResult = pg_query($pgConnection, "SELECT first_name, last_name, email_address, last_access
											  	  	FROM users
											  	  	WHERE id = '".$username."'");
		
			// if there is a record then the User & Password
			if (pg_num_rows($queryResult) == 0)
			{
				// if not clear username so that it is no longer sticky
				$username = "";
			}
		}
	}
	else // GET Mode
	{
		$username = "";
		$password = "";
		
		$message = "";
		$errors = "";
	}
	
	echo "<strong>$errors</strong>";
	
	echo "<strong>$message</strong>";
?>
<br/>
<br/>

<h2>Please log in</h2>
<p>
	Enter your login ID and password to connect to this system<br/>
</p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table border="0" cellpadding="10" class="center">
		<tr>
			<td>
				<strong>Login ID</strong>
			</td>
			<td>
				<input type="text" name="login" value="<?php echo $username; ?>" size="20" />
			</td>
		</tr>
		<tr>
			<td>
				<strong>Password</strong>
			</td>
			<td>
				<input type="password" name="pass" value="" size="20" />
			</td>
		</tr>
	</table>
	<table border="0" cellspacing="15" class="center">
		<tr>
			<td>
				<input type="submit" value = "Log In" />
			</td>
			
			<td>
				<input type="reset" value = "Clear" />
			</td>
		</tr>
	</table>
</form>
<p>
	Please wait after pressing <strong>Log in</strong> while we retrieve your records from our database.<br/>
	<em>
		(This may take a few moments)
	</em>
</p>
<hr/>

<?php
	// Site Footer
	include('./footer.php');
?>