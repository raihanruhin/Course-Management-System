<?php
include_once 'function.php';
// Start: page-top-outer -->
echo '<div id="page-top-outer">';    

// Start: page-top -->
echo '<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	<a href="http://www.juniv.edu" target="#"><img src="images/shared/logo.png" width="100" height="90" alt="" /></a>
	</div>';
	
	echo '<div id="header-text">';	
	load_header();
	echo '</div>';

 	echo '</div>
	<!-- End: page-top -->

	</div>
	<!-- End: page-top-outer -->
	 
	<!--  start nav-outer-repeat....START -->
	<div class="nav-outer-repeat">'; 


		//  start main navigation
echo '<nav class="nav">
	<ul>
		<li><a href="course.php"><b>Course</b></a></li>
		<li><a href="program.php"><b>Program</b></a></li>
		<li><a href="session.php"><b>Exam Year</b></a></li>
		<li><a href="user.php"><b>User</b></a></li>
	</ul>


</nav>
<nav class="nav-right">
	<ul>
		<li><a href="login.php"><b>Log Out</b></a></li>
	</ul>
// end main navigation
</div>';

?>
