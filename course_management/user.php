<?php
include_once 'dbconnect.php';
include_once "admin-header.php";

echo '<head>
<title>Course Management System</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->';

include 'script.php';
echo '</head>
<body>';

	//mysql_select_db('cm_db',$link); // for selecting database
	
	$result = mysql_query("SELECT userloginid,username,password,email FROM userlogin");
	
	echo '<div class="clear"></div>

 
				<!-- start main-content..START -->
				<div id="main-content">';

					echo '<div id="content">';
		
					// start content -->

					echo '<div  id="page-heading-admin"><h1>User</h1></div>';
		
		
					echo '<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">'; // start table
					echo "<th class='table-header-repeat line-left'>Serial</th>";
					echo "<th class='table-header-repeat line-left'>User Name</th>";
					echo "<th class='table-header-repeat line-left'>Password</th>";
					echo "<th class='table-header-repeat line-left'>Email</th>";
					echo "<th class='table-header-repeat line-left'>Edit</th>";
					echo "<th class='table-header-repeat line-left'>Delete</th>";
					
					$serial_count = 1; // for serial number
					
					while($row = mysql_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>";
						echo $serial_count;
						echo "</td>";
						echo "<td>";
						echo $row['username'];
						echo "</td>";
						echo "<td>";
						echo $row['password'];
						echo "</td>";
						echo "<td>";
						echo $row['email'];
						echo "</td>";
						echo "<td>";
						echo "<form method='post'>";
						echo "<input type='hidden' name='id' value='".$row['userloginid']."'/>";
						echo "<input type='submit' name='edit' value='Edit' class='button2'/>";
						echo "</form>";
						echo "</td>";
						echo "<td>";
						echo "<form method='post'>";
						echo "<input type='hidden' name='id' value='".$row['userloginid']."'/>";
						echo "<input type='submit' name='delete' value='Delete' class='button2'/>";
						echo "</form>";
						echo "</td>";
						echo "</tr>";
						
						$serial_count++; // for inrement of serial
						
					}  
			
					echo "</table>"; // end table
		
					// code for add button
					echo "<form method='post'>";
					echo "<input type='submit' name='add-new' value='Add User' class='button1'/>";
					echo "</form>";
					
					echo '</div>';
				//<!--  end content -->

	
 
 	// for add form
	if (isset($_POST["add-new"]))
	{ 
		echo "<form method='post'>";
		echo '<table id="id-form">';
		echo '<tr>';
		echo "<th valign='top'>User Name:</th> ";
		echo "<td><input type='text' name='user-name' class='inp-form'/></td>";
		echo '</tr>';
		echo '<tr>';
		echo "<th valign='top'>Password:</th> ";
		echo "<td><input type='text' name='password' class='inp-form'/></td>";
		echo '</tr>';
		echo '<tr>';
		echo "<th valign='top'>Email:</th> ";
		echo "<td><input type='text' name='email' class='inp-form'/></td>";
		echo '</tr>';
		echo '<tr>';
		echo "<td><input type='submit' name='add-user' value='Add' class='button1'/></td>";
		echo '</tr>';
		echo "</form>";
	}
	
	// for add query
	if (isset($_POST["add-user"]))
	{
		$user_name = $_POST['user-name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		
		$query = mysql_query("INSERT INTO userlogin(username,password,email) VALUES('$user_name','$password','$email')");
		
		if($query)
		{
			echo "<meta http-equiv='refresh' content='0'>"; // for refreshing page
		}
	}
	
	if (isset($_POST["edit"]))
		{ 
			$userloginid_edit = $_POST['id'];
			include_once 'edit-user.php';
		}
	// for update
	
	if (isset($_POST["save-user"]))
	{
		$userloginid_edit = $_POST['userloginid_edit'];
		$user_name = $_POST['user-name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		
		$query = mysql_query("UPDATE userlogin SET username='$user_name', password='$password', email='$email' WHERE userloginid='$userloginid_edit'");
		
		if($query)
		{
			echo "<meta http-equiv='refresh' content='0'>"; // for refreshing page
		}
	}
	
	if (isset($_POST["delete"]))
		{ 
			$userloginid_delete = $_POST['id'];
			include_once 'delete-user.php';
		}


echo '</body>';
				
echo '</div>';
//  end main-content....END -->	

	// for closing connection
include_once 'dbclose.php';
 ?>