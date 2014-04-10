<?php
	// DECLARATIONS //

	// Displayed in tab/title bar (Header.php)
	// TODO: Cange this so it is only the first part, automatically concat the rest based on the SITE_NAME
	$title = 'Lab 2';
	// File Name
	$filename = basename(__FILE__);
	// Description in comments at the top of the html (Not visible on the page)
	$description = 'Lab 2 page by William Villeneuve in the INTN2201 Course at Durham College. The purpose of this lab is to use tables to layout the content.';
	// Date Created
	$date = '01/22/2014';


	// Site Header
	include('./header.php');
?>

<hr/>
<!-- HTML Table Tags -->
<table class="center" border="1" width="60%">
	<caption >HTML Table Tags</caption>
	<tr>
		<th>
			Tag
		</th>
		<th>
			Description
		</th>
	</tr>
	<tr>
		<td>
			&lt;table&gt;
		</td>
		<td>
			Denotes the start of an HTML table in a web page.
		</td>
	</tr>
	<tr>
		<td>
			&lt;tr&gt;
		</td>
		<td>
			Denotes the start of a row in an HTML table (NOTE: these tags must exist inside &lt;table&gt;...&lt;/table&gt; tags in order to be valid, and work correctly).
		</td>
	</tr>
	<tr>
		<td>
			&lt;td&gt;
		</td>
		<td>
			Denotes a cell (or Table Data) in an HTML table (NOTE: these tags must exist inside &lt;tr&gt;...&lt;/tr&gt; tags in order to be valid, and work correctly).
		</td>
	</tr>
	<tr>
		<td>
			&lt;th&gt;
		</td>
		<td>
			Very similar to the &lt;td&gt; tags described above but the text is bold and centered.
		</td>
	</tr>
	<tr>
		<td>
			&lt;caption&gt;
		</td>
		<td>
			Will place a caption on an HTML table (NOTE: this tag must be implemented right after the opening &lt;table&gt; tag in order to be valid and work correctly).
		</td>
	</tr>
</table>

<hr/>
<!-- Favourite Books -->
<table class="center" border="1">
	<tr>
		<th>
			Title
		</th>
		<th>
			Author
		</th>
		<th>
			Year of Publication
		</th>
		<th>
			Description
		</th>
	</tr>
	<tr>
		<td>
			One Flew Over the Cuckoo's Nest
		</td>
		<td>
			Ken Kesey
		</td>
		<td align="center">
			1962
		</td>
		<td>
			Great novel about an half Native American man who has been in an mental health hospital for a large part of his life and in this time he has not spoken to anyone, everyone assumes he is deaf. A man comes to the hospital and changes him and all the other patients in the ward. (NOTE: The novel is much better than the film.)
		</td>
	</tr>
	<tr>
		<td>
			Lord of the Flies
		</td>
		<td>
			William Golding
		</td>
		<td align="center">
			1954
		</td>
		<td>
			A great story about a bunch of young boys who become stranded on an island. It delves into the question of whether human nature is naturally to be good or evil.
		</td>
	</tr>
	<tr>
		<td>
			The Children of Men
		</td>
		<td>
			P. D. James
		</td>
		<td align="center">
			1992
		</td>
		<td>
			Story about a dystopian future in which men are infertile and thus no children have been born in many years. Mass suicide is seen as acceptable, the last few people to have been born have certain privileges and are almost worshiped by the rest of humanity. A child is finally conceived and a small group of people do their best to ensure the baby is born.
		</td>
	</tr>
</table>
<hr/>
<!-- Time-Table -->
<table border="1" width="100%">
	<tr>
		<td></td>
		<th>
			Monday
		</th>
		<th>
			Tuesday
		</th>
		<th>
			Wednesday
		</th>
		<th>
			Thursday
		</th>
		<th>
			Friday
		</th>
	</tr>
	<tr>
		<td>
			8:10AM-<br/>9:00AM
		</td>
		<td rowspan="2" class="course" valign="top">
			CSYS 1122<br/>
			CRN: 18109<br/>
			H226
		</td>
		<td rowspan="2" class="course" valign="top">
			CPRG 3202<br/>
			CRN: 21153<br/>
			SW110
		</td>
		<td rowspan="2" class="course" valign="top">
			INTN 2201<br/>
			CRN: 18747<br/>
			SW213
		</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>
			9:10AM-<br/>10:00AM
		</td>
		<td></td>
		<td rowspan="2" class="course" valign="top">
			CPRG 3202<br/>
			CRN: 21152<br/>
			SW109
		</td>
	</tr>
	<tr>
		<td>
			10:10AM-<br/>11:00AM
		</td>
		<td rowspan="2" class="course" valign="top">
			INTN 2201<br/>
			CRN: 18170<br/>
			C113
		</td>
		<td rowspan="2" class="course" valign="top">
			COPS 1104<br/>
			CRN: 24358<br/>
			SW109
		</td>
		<td rowspan="2" class="course" valign="top">
			CSYS 1122<br/>
			CRN: 26529<br/>
			SW109
		</td>
		<td></td>
	</tr>
	<tr>
		<td>
			11:10AM-<br/>12:00PM
		</td>
		<td></td>
		<td class="lunch" rowspan="2" align="center" >
			Lunch
		</td>
	</tr>
	<tr>
		<td>
			12:10PM-<br/>1:00PM
		</td>
		<td></td>
		<td colspan="2" align="center" class="lunch">
			Lunch
		</td>
		<td class="course" valign="top">
			SAAD 3203<br/>
			CRN: 18258<br/>
			SW109
		</td>
	</tr>
	<tr>
		<td>
			1:10PM-<br/>2:00PM
		</td>
		<td></td>
		<td class="course" valign="top">
			SAAD 3203<br/>
			CRN: 18258<br/>
			SW109
		</td>
		<td class="course" valign="top">
			VISB 3202<br/>
			CRN: 21192<br/>
			SW201
		</td>
		<td align="center" class="lunch">
			Lunch
		</td>
		<td class="course" valign="top">
			SAAD 3203<br/>
			CRN: 18675<br/>
			SW201
		</td>
	</tr>
	<tr>
		<td>
			2:10PM-<br/>3:00PM
		</td>
		<td></td>
		<td rowspan="2" class="course" valign="top">
			COPS 1104<br/>
			CRN: 23900<br/>
			SW214
		</td>
		<td></td>
		<td rowspan="2" class="course" valign="top">
			VISB 3202<br/>
			CRN: 18749<br/>
			H134
		</td>
		<td></td>
	</tr>
	<tr>
		<td>
			3:10PM-<br/>4:00PM
		</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>
			4:10PM-<br/>5:00PM
		</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>
			5:10PM-<br/>6:00PM
		</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
<hr/>



<!-- Content -->


<?php
	// Site Footer
	include('./footer.php');
?>