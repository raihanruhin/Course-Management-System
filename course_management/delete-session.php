<?php
	include_once 'dbconnect.php'; // stablish connection with database
	
	//mysql_select_db('cm_db',$link); // for selecting database
	$result = mysql_query("DELETE FROM session WHERE sessionid='$sessionid_delete'");
	
	if($result)
	{
		echo "<meta http-equiv='refresh' content='0'>"; // for refreshing page
	}
?>