<?php
	include_once 'dbconnect.php'; // stablish connection with database
	
	$semestername;
	
	//mysql_select_db('cm_db',$link); // for selecting database
	$result = mysql_query("SELECT semestername FROM semester WHERE semesterid='$semesterid_edit'");
	
	while($row = mysql_fetch_array($result))
       	 {
          	$semestername = $row['semestername'];
         } 
	
	echo "<form method='post'>";
	echo '<table id="id-form">';
	echo "<th>Semester Name:</th> ";
	echo '<tr>';
	echo "<td><input type='text' name='semester-name' value='".$semestername."' class='inp-form'/></td>";
	echo "<td><input type='submit' name='save-semester' value='Save' class='button1'/></td>";
	echo "<td><input type='hidden' name='semesterid_edit' value='".$semesterid_edit."'/></td>";
	echo '</tr>';
	echo "</form>";
	
	
	

?>