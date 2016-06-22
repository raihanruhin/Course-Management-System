<?php 
	class db{
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
		
		// function for connect database
		static function connect()
		{
			$server = read('config/server.cnf');
			$username = read('config/dbusername.cnf');
			$password = read('config/dbuserpass.cnf');
			$databasename = read('config/dbname.cnf');
			
			$link = mysql_connect($server, $username, $password);
			
			mysql_select_db($databasename, $link);
		}
		
		// function for close database connection
		static function close($connection)
		{
			mysql_close($connection);
		}
	}
?>