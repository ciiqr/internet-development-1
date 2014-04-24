<?php
	/*
		Created: 05 February 2014
	*/

	// Includes
	// My custom class for diaplaying my navigation bar
	include_once('./PageList.php');
	
	require "./includes/functions.php";
	// Start Buffering
	ob_start();

	define("SITE_AUTHOR", 'William Villeneuve');
	// Concatinated with pageTitle for the title
	$SITE_NAME = SITE_AUTHOR;
	$TITLE_SEPERATOR = ' - ';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- CSS -->
	<link rel="stylesheet" href="css/intn2201.css" type="text/css" />
	<!--
	Author: 	William Villeneuve
	Filename:	<?php echo $filename,	 PHP_EOL ?>
	Date:		<?php echo $date,		 PHP_EOL ?>
	Description:<?php echo $description, PHP_EOL ?>
	-->
	<title><?php echo $title.$TITLE_SEPERATOR.$SITE_NAME?></title>
	<?php
		if (isset($pageCSS))
			echo "<style type=\"text/css\"> $pageCSS </style>";
	?>
	
	<link rel="shortcut icon" href="./images/favicon.ico" />
</head>
<body>
<div id="container">
	<div id="header">
		<img src="./images/geek.png" alt="The evolution of man geek" />
		<h1>
			<?php
				// Banner if set, otherwise Site Name and Page Title
				if (isset($banner))
					echo $banner;
				else
					echo $SITE_NAME.$TITLE_SEPERATOR.$title
			?>
		</h1>
	</div>
	<div id="sites">
		<ul>
			<li><a href="./">Home</a></li>
			<li><a href="http://opentech.durhamcollege.ca/~pufferd/intn2201/">INTN2201</a></li>
			<li><a href="http://www.w3schools.com">W3Schools</a></li>
			<li><a href="http://validator.w3.org">XHTML Validator</a></li>
			<li><a href="http://opentech.durhamcollege.ca/~validation/">Awesome XHTML Validator</a></li>
			<li><a href="http://jigsaw.w3.org/css-validator/">CSS Validator</a></li>			
			<li><a href="http://php.net/manual/en/index.php">PHP Manual</a></li>
			<li><a href="http://www.durhamcollege.ca">Durham College</a></li>
			
		</ul>
	</div>
	<div id="content-container">
		<div id="navigation">
			<h3>
				Labs
			</h3>
			<?php
				// Initialize list of pages
				// null for title and location means the root list
				$labPages = new PageList(null, null,
					new PageList("Lab 1: Basic XHTML pages",				"./lab1.php"),
					new PageList("Lab 2: Working with HTML Tables",			"./lab2.php"),
					new PageList("Lab 3: Formatting and Layout with Styles","./lab3.php"),
					new PageList("Lab 4: PHP Chapter Files from textbook",	"./lab4.php"),
					new PageList("Lab 5: Basic PHP Scripting",				"./lab5.php"),
					new PageList("Lab 6: Self-referring Forms w/ Data Validation", "./lab6.php"),
					new PageList("Lab 7: Database Intro", "./lab7.php"),
					new PageList("Lab 9: Database/PHP Lab - User Login", "./lab9.php"),
					new PageList("Lab 10: Database/PHP Lab - User Registration", "./lab10.php"),
					new PageList("Bonus Lab: Math Quiz", "./lab-bonus.php")
				);

				// Print the Lab Navication Bar
				$labPages->printList();
			?>

			<h3>
				Tests
			</h3>
			<?php
				// Initialize list of pages
				// null for title and location means the root list
				$testPages = new PageList(null, null,
					new PageList("Term Test 1",	"./termtest1.php"),
					new PageList("Term Test 2",	"./termtest2.php"),
					new PageList("Exam",		"./exam.php")
				);

				// Print the Test Navication Bar
				$testPages->printList();
			?>

		</div>
		<div id="content">
		<!-- start of main page content. -->