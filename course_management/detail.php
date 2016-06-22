<?php
  include_once "dbconnect.php";
     
  $coursecode = $_GET['coursecode'];
  $coursename = $_GET['coursename'];
  
  //mysql_select_db('cm_db',$link);
  
  $resultdetail = mysql_query("SELECT detail FROM detail WHERE coursecode='$coursecode'");
   
// start content -->
echo '<div id="content">';

	// start page-heading -->
	echo '<div id="page-heading">';
		echo '<h1>'.$coursecode.' : '.$coursename.'</h1>';
	echo '</div>';
	// end page-heading -->

	echo '<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>';
		/// start content-table-inner ...................................................................... START -->
		echo '<div id="content-table-inner">';
		
			// start table-content  -->
			echo '<div id="table-content">';
			
					while($row = mysql_fetch_array($resultdetail))
						{
							echo "<p>".$row['detail']."</p>";
						}
  
			echo '</div>';
			// end table-content  -->
	
			echo '<div class="clear"></div>';
		 
		echo '</div>';
		// end content-table-inner ............................................END  -->
		echo '</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>';
// end content -->
echo '<div class="clear">&nbsp;</div>';

?>