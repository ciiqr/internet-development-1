<?php

// Database
define("DB_HOST", "127.0.0.1");
define('DB_NAME', 'villeneuvew_db');
define('DB_USERNAME', 'villeneuvew');
define('DB_PASSWORD', "INSERT_DATABASE_PASSWORD_HERE");

// User Validation
define("MINIMUM_ID_LENGTH", 5);
define("MAXIMUM_ID_LENGTH", 15);
define("MINIMUM_PASSWORD_LENGTH", 6);
define("MAXIMUM_PASSWORD_LENGTH", 8);
define("MAX_FIRST_NAME_LENGTH", 20);
define("MAX_LAST_NAME_LENGTH", 30);
define("MAXIMUM_EMAIL_LENGTH", 50);

// The isValid family of functions validate user input.
//  - They return true on success and false on failure.
//  - If it is not valid then the reason is assigned to the errors reference parameter

// if alreadyExists parameter is true then will check the database for the username
//  - Then assigns back to alreadyExists indicating if it did infact exist, if it did exist also returns false
function isValidUsername($username, &$errors = NULL, &$alreadyExists = false, &$connection = NULL)
{
	$isValid = true;
	$usernameLength = strlen($username);
	
	if ($usernameLength == 0)
	{
		$errors = "You MUST enter a username.";
		$isValid = false;
	}
	elseif ($usernameLength < MINIMUM_ID_LENGTH)
	{
		$errors = "The entered login id \"".$username."\" is too short, the minimum length is ".MINIMUM_ID_LENGTH.".";
		$isValid = false;
	}
	elseif ($usernameLength > MAXIMUM_ID_LENGTH)
	{
		$errors = "The entered login id \"".$username."\" is too long, the maximum length is ".MAXIMUM_ID_LENGTH.".";
		$isValid = false;
	}
	elseif ($alreadyExists) // Check if in the database already
	{
		// If A database connection was not passed in, create it
		$connection = ($connection != NULL) ? $connection : db_connect();
		
		$queryResult = pg_query($connection, "SELECT * FROM users
											  	WHERE id='".$username."'");
		
		// Check if the username is in the database
		if (pg_num_rows($queryResult) == 0) # Not in the database
			$alreadyExists = false;

		else  # Already in the database
		{
			$errors = "The entered login id \"".$username."\" is already taken.";
			$isValid = false;
		}
	}
	
	return $isValid;
}

function isValidPassword($password, &$errors = NULL)
{
	$isValid = true;
	$passwordLength = strlen($password);
	
	if ($passwordLength == 0)
	{
		$errors = "You MUST enter a password.";
		$isValid = false;
	}
	elseif ($passwordLength < MINIMUM_PASSWORD_LENGTH)
	{
		$errors = "The entered password is too short, the minimum length is ".MINIMUM_PASSWORD_LENGTH.".";
		$isValid = false;
	}
	elseif ($passwordLength > MAXIMUM_PASSWORD_LENGTH)
	{
		$errors = "The entered password is too long, the maximum length is ".MAXIMUM_PASSWORD_LENGTH.".";
		$isValid = false;
	}
	
	return $isValid;
}

//
function isValidFirstName($firstName, &$errors = NULL)
{
	$isValid = true;
	$firstNameLength = strlen($firstName);
	
	if ($firstNameLength == 0)
	{
		$errors = "You MUST enter a first name.";
		$isValid = false;
	}
	elseif ($firstNameLength > MAX_FIRST_NAME_LENGTH)
	{
		$errors = "The entered first name \"".$firstName."\" is too long, the maximum length is ".MAX_FIRST_NAME_LENGTH.".";
		$isValid = false;
	}
	elseif (is_numeric($firstName))
	{
		$errors = "The entered first name \"".$firstName."\" is a number, names cannot be numeric.";
		$isValid = false;
	}
	
	return $isValid;
}

function isValidLastName($lastName, &$errors = NULL)
{
	$isValid = true;
	$lastNameLength = strlen($lastName);
	
	if ($lastNameLength == 0)
	{
		$errors = "You MUST enter a last name.";
		$isValid = false;
	}
	elseif ($lastNameLength > MAX_LAST_NAME_LENGTH)
	{
		$errors = "The entered last name \"".$lastName."\" is too long, the maximum length is ".MAX_LAST_NAME_LENGTH.".";
		$isValid = false;
	}
	elseif (is_numeric($lastName))
	{
		$errors = "The entered last name \"".$lastName."\" is a number, names cannot be numeric.";
		$isValid = false;
	}
	
	return $isValid;
}

function isValidEmail($email, &$errors = NULL)
{
	$isValid = true;
	$emailLength = strlen($email);
	
	if ($emailLength == 0)
	{
		$errors = "You MUST enter an email.";
		$isValid = false;
	}
	elseif ($emailLength > MAXIMUM_EMAIL_LENGTH)
	{
		$errors = "The entered email \"".$email."\" is too long, the maximum length is ".MAXIMUM_EMAIL_LENGTH.".";
		$isValid = false;
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$errors = "The entered email \"".$email."\" was not in a valid format, ie. user@example.com";
		$isValid = false;
	}
	
	return $isValid;
}


// Database 
function db_connect()
{
	return pg_connect("host=".DB_HOST." dbname=".DB_NAME." user=".DB_USERNAME." password=".DB_PASSWORD); // Should Change Password... Meh
}

// Helpers
function displayCopyrightInfo()
{
	echo "&copy; ", SITE_AUTHOR, ", ", date('Y');
}



// Bonus Lab

// Random Int for Seeding
//  - Uses the microseconds portion of the built-in microtime() function.
function seed()
{
	list($micro,$seconds) = explode( ' ', microtime(), 2);
	// casting is unnecessary in PHP, but it explains what's going on
	return (int)(1.0e6 * (float)$micro);
} // end function seed()
// Now Actually Seed rand()
srand(seed()); // Not Required since PHP 4.2.0: www.php.net/manual/en/function.srand.php

function evaluateEquation($firstDigit, $secondDigit, $operation)
{
	// Return Value, Start at 0 incase of invalid operation
	$result = 0;
	
	switch($operation)
	{
		case '+' : // addition
			$result = $firstDigit + $secondDigit;
			break;
		case '-' : // subtraction
			$result = $firstDigit - $secondDigit;
			break;
		case '*' : // multiplication
			$result = $firstDigit * $secondDigit;
			break;
		case '/' : // multiplication
			// Check for division by 0
			if ($secondDigit != 0)
				$result = $firstDigit / $secondDigit;
			break;
			
		// default :  // Invalid 
		// 	;
	}
	return $result;
}


/* Return a number in the range 0-9 inclusive
 */
function randDigit($maxDigit = 0, $minDigit = 9)
{
	return rand($maxDigit, $minDigit);
}

function randOperation()
{
	// Only Initialize Operators Once
	static $operations = array('+', '-', '*', '/');
	// pick a random index between zero and highest index in array.
	$randnum = rand(0,sizeof($operations)-1);
	// Use the index to pick the operator
	return $operations[$randnum];
}

?>