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
	
	$result = mysql_query("SELECT sessionid,sessionname FROM session WHERE sessionname!='none'");

		
		echo '<div class="clear"></div>

 
				<!-- start main-content ..START -->
				<div id="main-content">';

					echo '<div id="content">';
					// start content -->

			        echo '<div  id="page-heading-admin"><h1>Session</h1></div>';
			
					echo '<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">'; // start table
					echo "<th class='table-header-repeat line-left'>Serial</th>";
					echo "<th class='table-header-repeat line-left'>Exam Year</th>";
					echo "<th class='table-header-repeat line-left'>Delete</th>";
					
					$serial_count = 1; // for serial number
					while($row = mysql_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>";
						echo $serial_count;
						echo "</td>";
						echo "<td>";
						echo $row['sessionname'];
						echo "</td>";
						echo "<td>";
						echo "<form method='post'>";
						echo "<input type='hidden' name='id' value='".$row['sessionid']."'/>";
						echo "<input type='submit' name='delete' value='Delete' class='button2'/>";
						echo "</form>";
						echo "</td>";
						echo "</tr>";
						
						$serial_count++; //for increment of serial
						
					}  
					echo "</table>"; // end of table
			 	
					// code for add button
					echo "<form method='post'>";
					echo "<input type='submit' name='add-new' value='Add Exam Year' class='button1'/>";
					echo "</form>";
	
				echo '</div>';
				//<!--  end content -->
				//echo '<div class="clear">&nbsp;</div>';
				

				
	// for add form
	if (isset($_POST["add-new"]))
	{ 
		echo "<form method='post'>";
		echo '<table id="id-form">';
		echo "<th>Exam Year:</th> ";
		echo '<tr>';
		echo "<td><input type='text' name='session-name' class='inp-form'/></td>";
		echo "<td><input type='submit' name='add-session' value='Add' class='button1'/></td>";
		echo '</tr>';
		echo "</form>";
	}
	
	// for add query
	if (isset($_POST["add-session"]))
	{
		$session_name = $_POST['session-name'];
		
		$query = mysql_query("INSERT INTO session(sessionid,sessionname) VALUES('$session_name','$session_name')");
		
		if($query)
		{
			echo "<meta http-equiv='refresh' content='0'>"; // for refreshing page
		}
	}

	
	if (isset($_POST["delete"]))
		{ 
			$sessionid_delete = $_POST['id'];
			include_once 'delete-session.php';
		}
		

	echo '</body>';
echo '</div>';
//  end main-content......END -->

// for closing connection
include_once 'dbclose.php';

 ?>