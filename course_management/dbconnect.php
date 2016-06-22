<?php 

	// for read file
	function read($file)
	{
	//$my_file = 'config/server.cnf';
	$handle = fopen($file, 'r');
	$data='';
	if(filesize($file)!=0)
	$data = fread($handle,filesize($file));
	return $data;
	}
	
	$server = read('config/server.cnf');
	$username = read('config/dbusername.cnf');
	$password = read('config/dbuserpass.cnf');
	$databasename = read('config/dbname.cnf');
	
	$link = mysql_connect($server, $username, $password);
	
	mysql_select_db($databasename, $link);
	//if (!$link)
	//{
	//$error = 'Unable to connect to the database server.';
	//include 'error.html.php';
	//echo "Error to connect database";
	//mysql_error();
	//exit();
	//}
	//if (!mysqli_set_charset($link, 'utf8'))
	//{
	//$output = 'Unable to set database connection encoding.';
	//include 'output.html.php';
	//echo "Error to connect database";
	//exit();
	//}
	//if (!mysqli_select_db($link, 'ijdb'))
	//{
	//$error = 'Unable to locate the joke database.';
	//include 'error.html.php';
	//echo "Error to connect database";
	//exit();
	//}
	
?>