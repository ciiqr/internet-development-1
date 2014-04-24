<?php
	/*	William Villeneuve
		April 24, 2014
		exam.php
		INTN2201
	*/

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	$title = 'Exam';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Exam page by William Villeneuve in the INTN2201 Course at Durham College
						 - The purpose of this page is to show what I have learned throughout the course
						 - ';
	// Date Created
	$date = '04/24/2014';
	
	// Site Header
	include('./header.php');
	
	
	// Constants
	define('COURSE_CODE_LENGTH', 8);
	define('MAX_COURSE_TITLE_LENGTH', 64);
	define('MAX_GPA_WEIGHTING', 5);
	define('MIN_GPA_WEIGHTING', 0);
	
	// Variables
	$coursesTable = "";
	$dbConnection = db_connect();
	$messages = "";
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') // Triple Equals Skips Type Conversion & thus is Faster
	{
		$courseCode = trim($_POST["course_code"]);
		$courseTitle = trim($_POST["course_title"]);
		$courseGPAWeighting = trim($_POST["gpa_weighting"]);
		
		$courseCodeLength = strlen($courseCode);
		$courseTitleLength = strlen($courseTitle);
		$courseGPAWeightingLength = strlen($courseGPAWeighting);
		

		if ($courseCodeLength == 0)
		{
			$messages .= "You MUST enter a Course Code.<br/>";
			$courseCode = "";
		}
		elseif ($courseCodeLength != COURSE_CODE_LENGTH)
		{
			$messages .= "The entered Course Code \"".$courseCode."\" is not the right length, the Course Code Must Be Exactly ".COURSE_CODE_LENGTH.".<br/>";
			$courseCode = "";
		}
		else
		{
			$queryResult = pg_query($dbConnection, "SELECT course_code FROM courses
											  	WHERE course_code='".$courseCode."'");
		
			// Check if the course code is in the database
			if (pg_num_rows($queryResult) > 0) # In the database
				$messages == "The entered Course Code \"".$courseCode."\" is already in the database.<br/>";
		}
		
		if ($courseTitleLength == 0)
		{
			$messages .= "You MUST enter a Course Title.<br/>";
			$courseTitle = "";
		}
		elseif ($courseTitleLength > MAX_COURSE_TITLE_LENGTH)
		{
			$messages .= "The entered Course Title \"".$courseTitle."\" is too long, the Course Title Must Be less than ".MAX_COURSE_TITLE_LENGTH.".<br/>";
			$courseTitle = "";
		}
		
		if ($courseGPAWeightingLength == 0)
		{
			$messages .= "You MUST enter a GPA weighting.<br/>";
			$courseGPAWeighting = "";
		}
		elseif ($courseGPAWeighting < MIN_GPA_WEIGHTING)
		{
			$courseGPAWeighting = MIN_GPA_WEIGHTING;
		}
		elseif ($courseGPAWeighting > MAX_GPA_WEIGHTING)
		{
			$courseGPAWeighting = MAX_GPA_WEIGHTING;
		}
		
		// Input Is Valid
		if ($messages == "")
		{
			$today = date("Y-m-d",time());
			$createCourse = "INSERT INTO courses(course_code, title, weighting) VALUES(
					'$courseCode',
					'$courseTitle',
					$courseGPAWeighting
				)";
			
			if (pg_query($dbConnection, $createCourse)) // If it was successful
			{
				$messages .= "The course \"$courseTitle ($courseCode)\" has been added to the system.<br/>";
				
				$courseCode = "";
				$courseTitle = "";
				$courseGPAWeighting = "";

				$currentTime = date("g:i A j F Y");
				
				$logFile = fopen("exam/activity.log", "a+");
				fwrite($logFile, "The course \"$courseTitle\" ($courseCode)\" has been added to the system on $currentTime\n");
				fclose($logFile);
			}
		}
	}
	else // GET
	{
		$courseCode = "";
		$courseTitle = "";
		$courseGPAWeighting = "";
	}
	
	
	
	$coursesQuery = "SELECT course_code, title, weighting
						FROM courses
						ORDER BY course_code DESC";
	// Get Courses
	$queryResult = pg_query($dbConnection, $coursesQuery);
	$recordsCount = pg_num_rows($queryResult);
	
	// if there are any courses
	if ($recordsCount > 0)
	{
		// Start Table
		$coursesTable .= "<table border='1' class='center' width='75%'>
			<tr>
				<th>Course Code</th>
				<th>Course Title</th>
				<th>GPA Weighting</th>
			</tr>";

		for ($index = 0; $index < $recordsCount; $index++)
		{
			$cCode = pg_fetch_result($queryResult, $index, "course_code");
			// Title With Special HTML Characters Converted
			$cTitle = htmlspecialchars(pg_fetch_result($queryResult, $index, "title"));
			$cGPA = number_format(pg_fetch_result($queryResult, $index, "weighting"), 1);
			
			
			$coursesTable .= "<tr>
				<td>$cCode</td>
				<td>$cTitle</td>
				<td>$cGPA</td>
			</tr>";
		}
		
		// End Table
		$coursesTable .= "</table>";
		
	}
	// else
	// {
		
	// }
	// $coursesTable

?>

<hr/>
<h2><?php echo $title; ?></h2>

<p>
	This is the page created as part of the final exam for INTN2201.
</p>
<br/>
<hr/>

<?php
	echo "<strong>$messages</strong>";
?>

<h2>Please enter a Course Code, Course Title and a GPA Weighting.</h2>

<form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	<table border="0" class="center" cellpadding="10" >
		<tr>
			<td rowspan="3" align="left">
				<h3>New Course Record</h3>
			</td>
			<td>
				<strong>Course Code*: </strong>
			</td>
			<td>
				<input type="text" name="course_code" value="<?php echo $courseCode; ?>" size="30" />
			</td>
		</tr>
		<tr>
			<td>
				<strong>Course Title*: </strong>
			</td>
			<td>
				<input type="text" name="course_title" value="<?php echo $courseTitle; ?>" size="30" />
			</td>
		</tr>
		<tr>
			<td>
				<strong>GPA Weighting: </strong>
			</td>
			<td>
				<input type="text" name="gpa_weighting" value="<?php echo $courseGPAWeighting; ?>" size="30" />
			</td>
		</tr>
	</table>
	<table border="0" class="center" cellspacing="15" >
		<tr>
			<td>
				<input type="submit" value = "Add Course" />
			</td>
			<td>
				<input type="reset" value = "Clear" />
			</td>
		</tr>
	</table>
</form>
<hr/>
<?php
	echo $coursesTable;
?>

<?php
	// Site Footer
	include('./footer.php');
?>