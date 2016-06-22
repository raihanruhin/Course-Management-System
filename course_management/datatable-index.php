<?php 
	// this page create data table and presnt in the main page
	
	$serial_count = 1; // for serial number	
	
	// code for table header
 	//echo "<table border='1'>";
	echo '<div>';
	
	
	echo "<th class='table-header-repeat line-left'>SL.</th>";
 	echo "<th class='table-header-repeat line-left'>Course No.</th>";
 	echo "<th class='table-header-repeat line-left'>Course Title</th>";
	echo "<th class='table-header-repeat line-left'>Hrs/Week</th>";
 	echo "<th class='table-header-repeat line-left'>Credit Hrs</th>";
	echo "<th class='table-header-repeat line-left'>Marks</th>";
	echo "<th class='table-header-repeat line-left'>Detail</th>";

    
	// code for table
	while($row = mysql_fetch_array($result))
  		{
			echo "<tr>";
			echo "<td>";
			echo $serial_count;
			echo "</td>";
			echo "<td>";
			echo $row['coursecode'];
			echo "</td>";
			echo "<td>";
			echo $row['coursename'];
			echo "</td>";
			echo "<td>";
			echo $row['hourweek'];
			echo "</td>";
			echo "<td>";
			echo $row['credit'];
			echo "</td>";
			echo "<td>";
			echo $row['mark'];
			echo "</td>";
			echo "<td>";
			echo "<input type='submit' name='detail' value='Detail' class='button2'
					onClick = 'load(\"detail\",\"detail.php?coursecode=".$row['coursecode']."&coursename=".$row['coursename']."\");'/>";
			echo "</td>";
			
			$serial_count++; // for increment of serial
			
  		}
  	//echo "</table>"; // end of table
	echo '</div>';
	
					
?>
