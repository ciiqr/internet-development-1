<?php
	// William Villeneuve

	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	// TODO: Cange this so it is only the first part, automatically concat the rest based on the SITE_NAME
	$title = 'Example - Javascript';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Example javascript page for personal interest only';
	// Date Created
	$date = '02/27/2014';


	// Site Header
	include('./header.php');
?>

<h2>Example - Javascript</h2>

<p>
	The purpose of this page is to test and show examples of javascript.
</p>
<br/>

<script type="text/javascript">
	<!-- Hide Javascript
	document.write("<h3>Strings</h3>");

	document.write("Max Num:\t",Number.MAX_VALUE,"<br/>Min Num:\t",Number.MIN_VALUE,"<br/>");

	var sample_str = "this is the string \" \' \\ \t \n .<br/>";
	document.write("<br/>" + sample_str + "<br/>");
	document.write("sample_str is ", sample_str.length, " characters long<br/>");
	document.write("sample_str sub-string ", sample_str.substring(5, 18));

	document.write(sample_str.charAt(sample_str.length - 1), "<br/>")

	document.write(sample_str.indexOf("g"), "<br/>")
	
	document.write("<h3>Casting</h3>");

	
	document.write("34" * 3, "<br/>");
	document.write("34" + 3, "<br/>");
	document.write(Number("34") + 3);

	document.write(String(3));

	document.write("<h3>Fixed Length FLoating</h3>");

	var sample_flt = 3.14159;
	document.write(sample_flt.toFixed(2));


	document.write("<h3>DataTypes</h3>");

	document.write(typeof(2),   "<br/>");
	document.write(typeof(2.0), "<br/>");
	document.write(typeof("2"), "<br/>");
	document.write(typeof(true),"<br/>");

	document.write("<h3>Booleans</h3>");

	var smpl_bool = Boolean(23);
	document.write("Boolean of 23 is ", smpl_bool, "<br/>")
	document.write("Boolean of 0 is ", Boolean(0), "<br/>")
	document.write("Boolean of -2 is ", Boolean(-2), "<br/>")

	document.write("<h3>Logic</h3>");
	document.write("C Style Logic ", (10 > 2) && (10 != 2));

	document.write("<h3>Arrays</h3>");

	var nums = new Array("One", 2, 3.0);
	document.write("The numbers are: ", nums, "<br/>");
	document.write("The second number is: ", nums[1], "<br/>");

	for(index in nums)
		document.write("Value is: ", nums[index], "<br/>");

	document.write("<h3>Conditions</h3>");

	var ternary_assigned = ((5 < 10) ? "Five is less than 10" : "Five is greater than 10") + "<br/>";

	if (5 < 10)
		document.write("Five is less than 10 <br/>");
	else if (5 > 10)
		document.write("Five is greater than 10 <br/>");
	else 
		document.write("Five is equal to 5 <br/>");


	var state = "Oops!";
	switch (state)
	{
		case "loldf":
			document.write("Wrong!!");
			break;

		case "Oops!":
			document.write("Right!!");
			break;

		default:
			document.write("WTF!!");
			break;
	}


	document.write("<h3>Loops</h3>");

	for (var i = 0; i < 20; i++)
		document.write((!(i % 2) ? i : "Odd"), "<br/>");

	do {
		document.write("Do While!<br/>");
	} while(!true); // Never do infinite loops

	// To embed a js file you
	// <script language="javascript" src="someJavascript.js"></script>


	-->
</script>
<noscript>
	<h3>This page requires Javascript.</h3>
</noscript>

<?php
	// Site Footer
	include('./footer.php');
?>