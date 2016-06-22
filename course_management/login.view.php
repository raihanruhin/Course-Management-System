<head>
<?php
	include_once 'dbconnect.php';
	include_once 'script.php';
	include_once 'function.php';
?>
<title>Course Management System</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" title="default" />

</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo-->
	<div id="logo-login">
		<a href="index.html"><img src="images/shared/logo.png" width="100" height="90" alt="Jahangirnagar University" /></a>
	</div>
	 <!--end logo -->
     <div>
     <?php 
		echo '<div id="header-text-login">';	
		load_header();
		echo '</div>';
	?>
    </div>
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
    	<form method="post">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Username</th>
			<td><input type="text"  name = "username" class="login-inp" /></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name = "password" value="************"  onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th></th>
			<!--<td valign="top"><input type="checkbox" class="checkbox-size" id="login-check" /><label for="login-check">Remember me</label></td>-->
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name ="login" class="submit-login"  /></td>
		</tr>
        <tr>
			<th></th>
			<td><div id="warning"></div></td>
		</tr>
		</table>
        </form>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	<!--<a href="" class="forgot-pwd">Forgot Password?</a>-->
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... 
	<div id="forgotbox">
		<div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
		<!--  start forgot-inner 
		<div id="forgot-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Email address:</th>
			<td><input type="text" value=""   class="login-inp" /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input type="button" class="submit-login"  /></td>
		</tr>
		</table>
		</div>
		<!--  end forgot-inner
		<div class="clear"></div>
		<a href="" class="back-login">Back to login</a>
	</div>
	 end forgotbox -->

</div>
<!-- End: login-holder -->

<?php
	if (isset($_POST["login"])) // check if submit button is press
		{ 
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			//mysql_select_db('cm_db', $link);
			
			$result = mysql_query("SELECT password FROM userlogin WHERE username='$username'");
			
			while($row = mysql_fetch_array($result))
				{
									
					if($row['password'] == $password)
					{
						 //code for loading admin page
						echo '<script type="text/javascript">
						location.replace("admin.php?login=user");
						</script>';	
					}else {
						echo '<script type="text/javascript">
						document.getElementById("warning").innerHTML="wrong username or password";
						</script>';
					}
													
				} 
										
		}

// for closing connection
include_once 'dbclose.php';

?>
</body>
</html>