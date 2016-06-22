<?php 
	include_once 'dbconnect.php';
	include_once 'function.php';
?>
<head>


<?php load_title(); ?>

<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css">';

<?php include_once 'script.php'; ?>

</head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">   

	<!-- Start: page-top -->
	<div id="page-top">

		<!-- start logo -->
		<div id="logo">
			<a href="http://www.juniv.edu" target="#"</h3>"><img src="images/shared/logo.png" width="100" height="90" alt="" /></a>
		</div>';
		
		<div id="header-text">	
			<?php load_header(); ?>
		</div>
	 	<!--<div class="clear"></div>-->

	</div>
	<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
		<nav class="nav">
			<ul>
				<li><a href=""><b>Home</b></a></li>
			</ul>
		</nav>

<</div> <!-- end nav-outer-repeat -->

	<div id="main-content">
		<div id="content">
			
			<div  id="page-heading">
				<h1>Exam</h1> 
			</div>

			<div id="div-selector">
				<?php include_once 'selector.php'; //include selector ?>
			</div>
			<div  id="page-heading">
				<h1>Courses</h1> 
			</div>


			<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
					<tr>
						<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
						<th class="topleft"></th>
						<td id="tbl-border-top">&nbsp;</td>
						<th class="topright"></th>
						<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
					</tr>
					<tr>
						<td id="tbl-border-left"></td>
						<td>
							<!-- start content-table-inner.... START -->
							<div id="content-table-inner">
							
								<!-- start table-content  -->
								<div id="table-content">
								
										
									<!-- start product-table -->
									<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
											
									<?php if (isset($_POST["submit"])) // check if submit button is press
										{ 
										$programid = $_POST['program']; // get selected value from program selector in selector.php
										$semesterid = $_POST['semester']; // get selected value from semester selector in selector.php
										$examyear = $_POST['examyear'];  // get selected value from session selector in selector.php
												
										include_once "mysql-query-index.php"; // execute mysql query and return result to database-index.php											
										include_once "datatable-index.php"; // get query result from mysql-query-index.php and create data table based on it
												
										} ?>
											
									</table>
									<!-- end product-table -->
										
								</div>
								<!-- end content-table -->
							</div>
							<!-- end content-table-inner ............................................END  -->
						</td>
						<td id="tbl-border-right"></td>
					</tr>
					<tr>
					<th class="sized bottomleft"></th>
					<td id="tbl-border-bottom">&nbsp;</td>
					<th class="sized bottomright"></th>
					</tr>
			</table>
			

		<!-- for detail div -->
		<div id='detail'></div>
		<!-- echo '<div class="clear">&nbsp;</div>';-->
		</div>
	<!--  end content -->
	<!-- //echo '<div class="clear">&nbsp;</div>';-->

	<!--echo '<div class="clear">&nbsp;</div>';-->
	    

	<!-- start footer -->         
	<?php include_once 'footer.php'; ?>
	<!-- end footer -->
	</div>
</html>

<!-- for closing connection -->

<?php include_once 'dbclose.php'; ?>
