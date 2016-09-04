<?php
	ob_start();
	session_start();
	define('ROOT_DIR',"http://localhost/weaves4mitsubishi/");
	define('ABSPATH',dirname(__FILE__));	
	define('HOST','localhost');
	define('USERNAME','root');
	define('PASSWORD','');
	define('DB','pis');
	define('MAIL_ID',"jobin@webeteer.com");
	define('TIMEZONE', 'Asia/Calcutta');
	date_default_timezone_set(TIMEZONE);
	function open_connection()
	{
		$con=mysqli_connect(HOST,USERNAME,PASSWORD,DB);
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else{
		return $con;
		}
	}
	function close_connection($con)
	{
		mysqli_close($con);
	}
?>