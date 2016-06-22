<?php

	// include database file
	include_once 'databse.shared.php';

	function __construct()
	{
		// connecting with dtatabase
		db::connect();
	}

	class IndexModel {

		// function for getting programid
		function get_programid($programname)
		{
			$programid;

			$query = "SELECT programid FROM program"; // sql query

			$result = mysql_query($query); // erxecute query
			while($row = mysql_fetch_array($result))
				{
					$programid = $row['programid'];
				}

			return $programid; // return programid
		}


		// function for getting course data for display
		function get_course_data($program, $semester, $examyear)
		{
			// for querymain part
			$querymain = "SELECT course.coursecode,course.coursename,course.credit,course.hourweek,course.mark FROM course INNER JOIN program 
									ON course.programid = program.programid 
									INNER JOIN sessioncourse 
									ON course.coursecode = sessioncourse.coursecode
									INNER JOIN session
									ON sessioncourse.sessionid = session.sessionid";
			
			// for $querywhere part
			$querywhere = "WHERE program.programid=".$program." AND session.sessionid=".$examyear." AND course.semester=".$semester;
			
			$query = $querymain.$querywhere; // join two query string

			$result = mysql_query($query); // erxecute query

			return $result; // return the query value

		}
	}
?>