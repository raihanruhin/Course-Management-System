<?php 

	$serial_count = 1; // for serial number	
	
	// code for table header
 		echo '<div>';
	
			echo "<th class='table-header-repeat line-left'>SL.</th>";
			echo "<th class='table-header-repeat line-left'>Course No.</th>";
			echo "<th class='table-header-repeat line-left'>Course Title</th>";
			echo "<th class='table-header-repeat line-left'>Hrs/Week</th>";
			echo "<th class='table-header-repeat line-left'>Credit Hrs</th>";
			echo "<th class='table-header-repeat line-left'>Marks</th>";
			echo "<th class='table-header-repeat line-left'>Edit</th>";
			echo "<th class='table-header-repeat line-left'>Delete</th>";
    
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
			echo "<form method='post'>";
			echo "<input type='hidden' name='coursecode' value='".$row['coursecode']."'/>";
			echo "<input type='submit' name='edit' value='Edit' class='button2'/>";
			echo "</form>";
			echo "</td>";
			echo "<td>";
			echo "<form method='post'>";
			echo "<input type='hidden' name='coursecode' value='".$row['coursecode']."'/>";
			echo "<input type='submit' name='delete' value='Delete' class='button2'/>";
			echo "</form>";
			echo "</td>";
			
			$serial_count++; // for increment of serial
			
  		}
  		echo '</div>';
				
?>
