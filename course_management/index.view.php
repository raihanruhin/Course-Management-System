<<!DOCTYPE html>
<html>
	<head>
		<title>Course Management System</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
	</head>

	<body>
		<!-- Start: page-top-outer -->
		<div id="page-top-outer">   

			<!-- Start: page-top -->
			<div id="page-top">

				<!-- start logo -->
				<div id="logo">
					<a href="http://www.juniv.edu" target="#"><img src="images/shared/logo.png" width="100" height="90" alt="" /></a>
				</div>';
				
				<!-- main header section -->
				<div id="header-text">	
					<h1>Course Management System</h1>
				</div>

			</div>
			<!-- End: page-top -->

		</div>
		<!-- End: page-top-outer --> 
	 
		<!--  start nav-outer-repeat -->
		<div class="nav-outer-repeat"> 
				<nav class="nav">
					<ul>
						<li><a href=""><b>Home</b></a></li>
						<li><a href=""><b>Project Members</b></a></li>
					</ul>
				</nav>

		<</div> 
		<!-- end nav-outer-repeat -->

		<!-- start main content -->
		<div id="main-content">

			<!-- start content -->
			<div id="content">
				
				<!-- start selector -->
				<div id="div-selector">
					<?php include_once 'selector.shared.php'; //include selector ?>
				</div>
				<!-- end selector -->

				<!-- start course heading -->
				<div  id="page-heading">
					<h1>Courses</h1> 
				</div>
				<!-- end course heading -->

				<!-- start main table -->
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
				<!-- end main table -->

				<!-- detail section -->
				<div id='detail'></div>

			</div>
			<!--  end content -->

			<!-- start footer -->         
			<?php include_once 'footer.shared.php'; ?>
			<!-- end footer -->
		</div>
		<!-- end main content -->

	</body>
	<!-- end body -->
</html>

