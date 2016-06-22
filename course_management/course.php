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
	

echo '<div class="clear"></div>

 
<!-- start content-outer ........................................................................................................................START -->
<div id="main-content">';

	echo '<div id="content">';
		
		// start selector page
		echo '<div id="div-selector">';
			include_once 'selector.php';
		echo '</div>';
	// start content -->
		echo '<div  id="page-heading-admin"><h1>Course</h1> </div>';
		


		//start product-table ..................................................................................... -->
		echo '<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">';
										
				if (isset($_POST["submit"]))
					{ 
						$programid = $_POST['program']; // get selected value from program selector in selector.php
						$semesterid = $_POST['semester']; // get selected value from semester selector in selector.php
						$examyear = $_POST['examyear'];  // get selected value from session selector in selector.php
										
						include_once "mysql-query-index.php";												
						include_once "course-datatable-admin.php";
					}
									
		echo '</table>';
		//end product-table................................... -->
		
		echo '<form method="post">';
		echo '<input type="submit" name = "add" value="Add New" class = "button1" >';
		echo '</form>';	
		
		//for detail div
	echo '<div id="control"></div>';

	echo '</div>';
//<!--  end content -->


    if(isset($_POST["add"]))
	{
		include 'add-course.php';
	}


	if(isset($_POST["save"]))
	{

		$programid = $_POST['program'];
		$semester = $_POST['semester'];
		$sessionstart = $_POST['sessionstart'];
		$sessionend = $_POST['sessionend'];
		$coursecode = $_POST['coursecode'];
		$coursename = $_POST['coursename'];
		$credit = $_POST['credit'];
		$hourweek = $_POST['hourweek'];
		$mark = $_POST['mark'];
		$detail = $_POST['detail'];
			

		//mysql_select_db('cm_db', $link);
			
		mysql_query("INSERT INTO course(coursecode,coursename,credit,hourweek,mark,programid,semesterid,coursetypeid) 
					VALUES('$coursecode','$coursename','$credit','$hourweek','$mark','$programid','$semesterid','$coursetypeid')");
	
		foreach($sessionid as $session)
		{
			mysql_query("INSERT INTO sessioncourse(coursecode,sessionid) VALUES('$coursecode','$session')");
	
		}
			
			mysql_query("INSERT INTO detail(detail,coursecode) VALUES('".$detail."','".$coursecode."')");
			echo $coursename."  ".$credit."  ".$hourweek."  ".$mark."  ".$semesterid."  ".$coursetypeid;
				
	
	}
	// for edit button
	 if(isset($_POST["edit"]))
		{
			$code = $_POST['coursecode'];
			include 'edit-course.php';
		}
		
		// for update
		if(isset($_POST["update"]))
		{

			$courseid = $_POST['courseid'];
			$coursecodeprevious = $_POST['coursecodeprevious'];
			$coursename = $_POST['coursename'];
			$credit = $_POST['credit'];
			$hourweek = $_POST['hourweek'];
			$mark = $_POST['mark'];
			$programid = $_POST['program'];
			$semester = $_POST['semester'];
			$detail = $_POST['detail'];
		
			//mysql_select_db('cm_db', $link);
					
			mysql_query("UPDATE course SET coursename='".$coursename."',credit='".$credit."',hourweek='".$hourweek."',
							mark='".$mark."',programid='".$programid."',semester='".$semester."' WHERE courseid='".$courseid."'");
					
							
			mysql_query("UPDATE detail SET detail='".$detail."',coursecode='".$coursecode."' WHERE coursecode='".$coursecodeprevious."'");
						
			
	}
	
	
	// for delete
	if(isset($_POST["delete"]))
		{
		
			$coursecode = $_POST['coursecode'];
		
			//mysql_select_db('cm_db', $link);
					
			// for delete course content
			mysql_query("DELETE FROM course WHERE coursecode='$coursecode'");
			// for deleting detail
			mysql_query("DELETE FROM detail WHERE coursecode='$coursecode'");
			// for deleting previous lookup
			mysql_query("DELETE FROM sessioncourse WHERE coursecode='$coursecode'");
							
							
	}


	echo '</body>';

	echo '</div>';
//  end main-content....END -->
echo '</html>';

// for closing connection
include_once 'dbclose.php';
?>


