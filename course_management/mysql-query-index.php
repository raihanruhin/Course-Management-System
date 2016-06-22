<?php
	//mysql_select_db("cm_db", $link); // for select database $link variable come from dbconnect.php
	
	// for querymain part
	$querymain = "SELECT course.coursecode,course.coursename,course.credit,course.hourweek,course.mark FROM course 
							INNER JOIN program 
							ON course.programid = program.programid 
							INNER JOIN sessioncourse 
							ON course.coursecode = sessioncourse.coursecode 
							INNER JOIN session 
							ON sessioncourse.sessionid = session.sessionid";
	
	// for $querywhere part
	$querywhere=" WHERE program.programid=".$programid." AND session.sessionid=".$examyear." AND course.semester=".$semesterid;
	
	$query = $querymain.$querywhere; // join two query string

	$result = mysql_query($query); // erxecute query

?>