<?php
	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	// TODO: Cange this so it is only the first part, automatically concat the rest based on the SITE_NAME
	$title = 'Style';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = '__BLANK__ page by William Villeneuve in the INTN2201 Course at Durham College
						 - __ONE_SIMPLE_THING_THAT_IT_DOES__';
	// Date Created
	$date = '02/03/2014';


	// Site Header
	include('./header.php');
?>

<!-- Content -->
<hr/>
<strong><font color="#DEA677" >Hey There</font></strong>
<strong><font color="#C1836A" >Hey There</font></strong>
<strong><font color="#796466" >Hey There</font></strong>
<strong><font color="#47535E" >Hey There</font></strong>

<table width="100%" border="0">
	<tr>
		<td>
			<font color="#DEA677" >First</font>
		</td>
		<td>
			<font color="#C1836A" >First</font>
		</td>
		<td>
			<font color="#796466" >First</font>
		</td>
		<td>
			<font color="#324152" >First</font>
		</td>
	</tr>
	
	<tr>
		<td>
			<font color="#C1836A" >Second</font>
		</td>
		<td>
			<font color="#796466" >Second</font>
		</td>
		<td>
			<font color="#324152" >Second</font>
		</td>
		<td>
			<font color="#DEA677" >Second</font>
		</td>
	</tr>

	<tr>
		<td>
			<font color="#796466" >Second</font>
		</td>
		<td>
			<font color="#324152" >Second</font>
		</td>
		<td>
			<font color="#DEA677" >Second</font>
		</td>
		<td>
			<font color="#C1836A" >Second</font>
		</td>
	</tr>

	<tr>
		<td>
			<font color="#324152" >Second</font>
		</td>
		<td>
			<font color="#DEA677" >Second</font>
		</td>
		<td>
			<font color="#C1836A" >Second</font>
		</td>
		<td>
			<font color="#796466" >Second</font>
		</td>
	</tr>
</table>

<!-- Content End -->

<?php
	// Site Footer
	include('./footer.php');
?>