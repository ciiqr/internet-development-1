<?php
	// William Villeneuve

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Lab 10';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 10 page by William Villeneuve in the INTN2201 Course at Durham College
						 - Self referring user registration form.
						 - Applies Databases, User Input Validation and Self Referring Forms all in one assignment.
						 - Uses the functions: strcmp(s1, s2), strlen(s) and filter_var(s, filter)';
	// Date Created
	$date = '04/08/2014';


	// Site Header
	include('./header.php');
?>

<hr/>
<h2>Lab 10 - Login Page</h2>

<p>
	The purpose of this page is to display a register screen &amp; use the entered data to create a new user on my website. <br/>
</p>
<br/>

<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') // Triple Equals Skips Type Conversion & thus is Faster
	{
		//connect
		$pgConnection = db_connect();
		
		$username = trim($_POST["login"]);
		$password = trim($_POST["passwd"]);
		$passwordConf = trim($_POST["conf_passwd"]);
		$firstname = trim($_POST["first_name"]);
		$lastname = trim($_POST["last_name"]);
		$email = trim($_POST["email_address"]);

		$errors = "";

		$tempError;
		$alreadyExists = true;

		// Validate (isValid* functions from functions.php)
		if (!isValidUsername($username, $tempError, $alreadyExists, $pgConnection))
		{
			// Check if the username exists (Thus was the cause of invalid)
			// If it does then clear the username
			if ($alreadyExists)
				$username = "";
			
			$errors .= $tempError . "<br/>";
		}
		
		if (!isValidPassword($password, $tempError))
		{
			$password = "";
			$passwordConf = "";
			$errors .= $tempError . "<br/>";
		}
		
		elseif (strcmp($password, $passwordConf) != 0)
		{
			$password = "";
			$passwordConf = "";
			$errors .= "The passwords do not match.<br/>";
		}
		
		
		if (!isValidFirstName($firstname, $tempError))
		{
			$firstname = "";
			$errors .= $tempError . "<br/>";
		}
		
		if (!isValidLastName($lastname, $tempError))
		{
			$lastname = "";
			$errors .= $tempError . "<br/>";
		}
		
		if (!isValidEmail($email, $tempError))
		{
			$email = "";
			$errors .= $tempError . "<br/>";
		}
		
		// If Everything is valid, register a user & redirect to lab9 login page
		// TODO: Auto Login User...
		if ($errors == "")
		{
			$today = date("Y-m-d",time());
			$createUser = "INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
				'$username',
				'$password',
				'$firstname',
				'$lastname',
				'$email',
				'$today',
				'$today'  )";
			
			if (pg_query($pgConnection, $createUser)) // If it was successful
			{
				// Redirect to Lab 9
				header("location:lab9.php");
				
				// Flush Buffer
				ob_flush();
			}
		}
		
		echo "<strong>$errors</strong>";
	}
	else
	{
		$username = "";
		$password = "";
		$passwordConf = "";
		$firstname = "";
		$lastname = "";
		$email = "";
	}
?>


<hr/>
<h2>Please register in our system</h2>
<p>Please enter your personal information<br/></p>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	<table class="center" border="0" cellpadding="10" >
		<tr>
			<td><strong>Login ID</strong></td>
			<td><input type="text" name="login" value="<?php echo $username; ?>" size="20" /></td>
		</tr>
		<tr>
			<td><strong>Password</strong></td>
			<td><input type="password" name="passwd" value= "<?php echo $password; ?>" size="20" /></td>
		</tr>
		<tr>
			<td><strong>Confirm Password</strong></td>
			<td><input type="password" name="conf_passwd" value="<?php echo $passwordConf; ?>" size="20" /></td>
		</tr>
		<tr>
			<td><strong>First Name</strong></td>
			<td><input type="text" name="first_name" value="<?php echo $firstname; ?>" size="20" /></td>
		</tr>
		<tr>
			<td><strong>Last Name</strong></td>
			<td><input type="text" name="last_name"  value="<?php echo $lastname; ?>" size="20" /></td>
		</tr>
		<tr>
			<td><strong>Email Address</strong></td>
			<td><input type="text" name="email_address" value="<?php echo $email; ?>" size="20" /></td>
		</tr>
	</table>
	<table class="center" border="0" cellspacing="15" >
		<tr>
			<td><input type="submit" value = "Register" /></td>
			<td><input type="reset"  value = "Clear"    /></td>
		</tr>
	</table>
</form>
<hr/>

<?php
	// Site Footer
	include('./footer.php');
?>