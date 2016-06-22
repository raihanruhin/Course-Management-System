<?php
	include_once 'dbconnect.php'; // stablish connection with database
	
	$programname;
	
	//mysql_select_db('cm_db',$link); // for selecting database
	$result = mysql_query("SELECT programname FROM program WHERE programid='$programid_edit'");
	
	while($row = mysql_fetch_array($result))
       	 {
          	$programname = $row['programname'];
         } 
	
	echo "<form method='post'>";
	echo '<table id="id-form">';
	echo "<th>Program Name:</th> ";
	echo '<tr>';
	echo "<td><input type='text' name='program-name' value='".$programname."' class='inp-form'/></td>";
	echo "<td><input type='submit' name='save-program' value='Save' class='button1'/></td>";
	echo "<td><input type='hidden' name='programid_edit' value='".$programid_edit."'/></td>";
	echo '</tr>';
	echo "</form>";
	
	
	

?>