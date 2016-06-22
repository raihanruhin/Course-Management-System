<?php
	include_once 'dbconnect.php'; // stablish connection with database
	
	$sessionname;
	
	//mysql_select_db('cm_db',$link); // for selecting database
	$result = mysql_query("SELECT sessionname FROM session WHERE sessionid='$sessionid_edit'");
	
	while($row = mysql_fetch_array($result))
       	 {
          	$sessionname = $row['sessionname'];
         } 
	
	echo "<form method='post'>";
	echo '<table id="id-form">';
	echo "<th>Session Name:</th> ";
	echo '<tr>';
	echo "<td><input type='text' name='session-name' value='".$sessionname."' class='inp-form'/></td>";
	echo "<td><input type='submit' name='save-session' value='Save' class='button1'/></td>";
	echo "<td><input type='hidden' name='sessionid_edit' value='".$sessionid_edit."'/></td>";
	echo '</tr>';
	echo "</form>";
	
	
	

?>