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
	
	$result = mysql_query("SELECT semesterid,semestername FROM semester WHERE semestername!='none'");
	
		
		
		echo '<div class="clear"></div>

 
				<!--start main-content..START -->
				<div id="main-content">';

					echo '<div id="content">';
		

					echo '<div  id="page-heading-admin"><h1>Semester</h1></div>';
						
					echo '<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">'; // start table
					echo "<th class='table-header-repeat line-left'>Serial</th>";
					echo "<th class='table-header-repeat line-left'>Semester</th>";
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
						echo $row['semestername'];
						echo "</td>";
						echo "<td>";
						echo "<form method='post'>";
						echo "<input type='hidden' name='id' value='".$row['semesterid']."'/>";
						echo "<input type='submit' name='edit' value='Edit' class='button2'/>";
						echo "</form>";
						echo "</td>";
						echo "<td>";
						echo "<form method='post'>";
						echo "<input type='hidden' name='id' value='".$row['semesterid']."'/>";
						echo "<input type='submit' name='delete' value='Delete' class='button2'/>";
						echo "</form>";
						echo "</td>";
						echo "</tr>";
						
						$serial_count++; // for increment of serial
						
					} 
					
					echo " </table>"; // end table

					// code for add button
					echo "<form method='post'>";
					echo "<input type='submit' name='add-new' value='Add Semester' class='button1'/>";
					echo "</form>";
					
					
					echo '</div>';
				//<!--  end content -->
				//echo '<div class="clear">&nbsp;</div>';

	
 	// for add form
	if (isset($_POST["add-new"]))
	{ 
		echo "<form method='post'>";
		echo '<table id="id-form">';
		echo "<th>Semester Name:</th> ";
		echo '<tr>';
		echo "<td><input type='text' name='semester-name' class='inp-form'/></td>";
		echo "<td><input type='submit' name='add-semester' value='Add' class='button1'/></td>";
		echo '</tr>';
		echo "</form>";
	}
	
	// for add query
	if (isset($_POST["add-semester"]))
	{
		$semester_name = $_POST['semester-name'];
		
		$query = mysql_query("INSERT INTO semester(semestername) VALUES('$semester_name')");
		
		if($query)
		{
			echo "<meta http-equiv='refresh' content='0'>"; // for refreshing page
		}
	}
	
	if (isset($_POST["edit"]))
		{ 
			$semesterid_edit = $_POST['id'];
			include_once 'edit-semester.php';
		}
	// for update
	
	if (isset($_POST["save-semester"]))
	{
		$semesterid_edit = $_POST['semesterid_edit'];
		$semester_name = $_POST['semester-name'];
		
		$query = mysql_query("UPDATE semester SET semestername='$semester_name' WHERE semesterid='$semesterid_edit'");
		
		if($query)
		{
			echo "<meta http-equiv='refresh' content='0'>"; // for refreshing page
		}
	}
	
	if (isset($_POST["delete"]))
		{ 
			$semesterid_delete = $_POST['id'];
			include_once 'delete-semester.php';
		}


	echo '</body>';
				
echo '</div>';
//  end main-content.END -->
		
// for closing connection
include_once 'dbclose.php';

 ?>