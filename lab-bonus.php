<?php
	// William Villeneuve

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Bonus Lab';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Bonus Lab page by William Villeneuve in the INTN2201 Course at Durham College
						 - The purpose of this page is to display a math quiz that uses hidden form inputs to store data & random numbers to generate the questions.
						 - Generates addition, subtraction, multiplication and division questions.';
	// Date Created
	$date = '04/10/2014';
	
	// Constants
	// Number of Questions in a game
	define("NUMBER_OF_ATTEMPTS", 10);
	// Maximum & minimum digit
	define("MINIMUM_DIGIT", 0);
	define("MAXIMUM_DIGIT", 9);
	
	// Generates a random Math Problem
	// NOTE: Operator is optionally passed in because on recursion for invalid division question I want another division question so that division q's don't become rare
	function randomMathProblem($operation = "")
	{
		// Ger Random Numbers & Operation
		$firstDigit  = randDigit(MINIMUM_DIGIT, MAXIMUM_DIGIT);
		$secondDigit = randDigit(MINIMUM_DIGIT, MAXIMUM_DIGIT);
		
		// If the operator is passed then use it, otherwise get random
		$operation = ($operation == "") ? randOperation() : $operation;
		
		// If the denominator is 0 OR the result wouldn't be a whole number
		if ($operation == '/' && ($secondDigit == 0 || (($firstDigit % $secondDigit) != 0) ))
			// Get a new Question
			return randomMathProblem($operation);
		
		return array($firstDigit, $secondDigit, $operation);
	}


	// Site Header
	include('./header.php');
?>

<hr/>
<h2>Bonus Lab - Math Quiz</h2>

<p>
	The purpose of this page is to display a math quiz that uses hidden form inputs to store data &amp; random numbers to generate the questions. <br/>
	It generates addition, subtraction, multiplication and division questions
</p>
<br/>

<?php

	$output = "";

	// Whether Final Results form is to be displayed
	$displayPlayAgainForm = false;
	

	if ($_SERVER['REQUEST_METHOD'] === 'POST') // Triple Equals Skips Type Conversion & thus is Faster
	{
		// Number of Attempts
		$attempts = $_POST["attempts"] + 1;
		// Number of Correct Attempts
		$correctAttempts = $_POST["correctAttempts"];
		// Users Answer
		$answer = $_POST["answer"];
		
		// Previous Question
		$firstDigit  = $_POST['firstDigit'];
		$secondDigit = $_POST['secondDigit'];
		$operation   = $_POST['operation'];
		
		
		// Get Correct Answer
		$correctAnswer = evaluateEquation($firstDigit, $secondDigit, $operation);

		// Message in h2
		$output .= "<h2>";
		// Determine Message
		if ($answer == $correctAnswer) // They got it right
		{
			// Say Congrats
			$output .= "Congratulations";
			
			$correctAttempts++; // Increate Correct Attempts
		}
		else // They got it wrong
			// Say Sorry
			$output .= "Sorry";
			
		$output .= "</h2><br/>";
		
		
		// Display Correct Answer No Matter What
		$output .= $firstDigit . " " . $operation . " " . $secondDigit . " = " . $correctAnswer . "<br/><br/>";
		
		// Display Number of Correct Attempts
		$output .= $correctAttempts . " out of " . $attempts . "<br/>";
			
		// Display Output
		echo "<strong>$output</strong>";
	}
	else // GET
	{
		// Start Attempts at 0
		$attempts = 0;
		// Start Correct Attempts 0
		$correctAttempts = 0;
	}
	
	// Get Question
	// If Submitted Last Question then
	if ($attempts == NUMBER_OF_ATTEMPTS)
		$displayPlayAgainForm = true; // GET Form for playing again
	
	else // Next question
	{
		// Randomly Generated Question
		list($firstDigit, $secondDigit, $operation) = randomMathProblem();
		$question = $firstDigit . " " . $operation . " " . $secondDigit . " = ";
	}
?>


<hr/>
<?php

	$selfLink = $_SERVER['PHP_SELF'];

	if ($displayPlayAgainForm)
		echo "<form method='get' action='$selfLink' >
			<table border='0'>
				<tr>
					<td><strong>Do you want another 10 questions?</strong></td>
					<td><input type='submit' value = 'Yes' /></td>
				</tr>
			</table>
		</form>";
	else
		echo "<form method='post' action='$selfLink' >
			<table border='0' cellpadding='10' >
				<tr>
					<td><strong>$question</strong></td>
					<td><input type='text' name='answer' value='' size='4' /></td> <!-- HTML5 Only attributes that would make a big difference: placeholder='Answer' autofocus='autofocus'-->
					<td>
						<input type='submit' value = 'Try it!' />
						
						<input type='hidden' name='attempts' value='$attempts' />
						<input type='hidden' name='correctAttempts' value='$correctAttempts' />
						
						<input type='hidden' name='firstDigit' value='$firstDigit' />
						<input type='hidden' name='secondDigit' value='$secondDigit' />
						<input type='hidden' name='operation' value='$operation' />
						
					</td>
				</tr>
			</table>
		</form>";

?>
<hr/>

<?php
	// Site Footer
	include('./footer.php');
?>