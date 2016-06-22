<?php
if ($_GET['login']=='user') // check if submit button is press
	{ 
include_once 'dbconnect.php';
include_once 'function.php';
echo '<head>';
load_title();
echo '<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />';

include_once 'script.php';
echo '</head>
<body>'; 
// for page topper
include_once 'admin-header.php';


echo '<!-- start content-outer ........START -->
		<div id="main-content">';
	echo '<div id="content">';
		
	
		echo '<div  id="page-heading-admin">
		<h1>Welcome to Courses Management System Admin Panel</h1> 
		</div>';


		echo '<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
				<tr>
					<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
					<th class="topleft"></th>
					<td id="tbl-border-top">&nbsp;</td>
					<th class="topright"></th>
					<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
				</tr>
				<tr>
					<td id="tbl-border-left"></td>';
					echo '<td>';
						// start content-table-inner ...................................................................... START -->
						echo '<div id="content-table-inner">';
						
							// start table-content  -->
							echo '<div id="table-content">';
							
									
								//start product-table ..................................................................................... -->
								echo '<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">';
										
									
								echo '</table>';
								//end product-table................................... -->
									
							echo '</div>';
							// end content-table
						echo '</div>';
						// end content-table-inner ............................................END  -->
					echo '</td>';
					echo '<td id="tbl-border-right"></td>';
				echo '</tr>';
				echo '<tr>';
				echo '<th class="sized bottomleft"></th>';
				echo '<td id="tbl-border-bottom">&nbsp;</td>';
				echo '<th class="sized bottomright"></th>';
				echo '</tr>';
		echo '</table>';
		

		//for detail div
		echo "<div id='detail'></div>";
		//echo '<div class="clear">&nbsp;</div>';
		echo '</div>';
	//<!--  end content -->
	//echo '<div class="clear">&nbsp;</div>';



	//echo '<div class="clear">&nbsp;</div>';
    

		// start footer -->         
		include_once 'footer.php';
		// end footer -->
 
		echo '</body>';
	echo '</div>';
	//  end main-outer..END -->
echo '</html>';

}else echo 'Access denied';
		
		
// for closing connection
include_once 'dbclose.php';
?>