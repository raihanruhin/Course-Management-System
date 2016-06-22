<?php
	include_once 'dbconnect.php'; // stablish connection with database
	
	$username;
	$password;
	$email;
	
	//mysql_select_db('cm_db',$link); // for selecting database
	$result = mysql_query("SELECT username, password, email FROM userlogin WHERE userloginid='$userloginid_edit'");
	
	while($row = mysql_fetch_array($result))
       	 {
          	$username = $row['username'];
			$password = $row['password'];
			$email = $row['email'];
         } 
	
	echo "<form method='post'>";
	echo '<table id="id-form">';
	echo '<tr>';
	echo "<th valign='top'>User Name:</th> ";
	echo "<td><input type='text' name='user-name' value='".$username."' class='inp-form'/></td>";
	echo '</tr>';
	echo '<tr>';
	echo "<th valign='top'>Password:</th> ";
	echo "<td><input type='text' name='password' value='".$password."' class='inp-form'/></td>";
	echo '</tr>';
	echo '<tr>';
	echo "<th valign='top'>Email:</th> ";
	echo "<td><input type='text' name='email' value='".$email."' class='inp-form'/></td>";
	echo '</tr>';
	echo '<tr>';
	echo "<td><input type='hidden' name='userloginid_edit' value='".$userloginid_edit."'/></td>";
	echo '</tr>';
	echo '<tr>';
	echo "<td><input type='submit' name='save-user' value='Save' class='button1'/></td>";
	echo '</tr>';
	echo "</form>";
	

?>