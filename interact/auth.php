<?php

if (!isset($_SERVER['PHP_AUTH_USER'])) 
{

	header('WWW-Authenticate: Basic realm="Please input usename and  password"');
	header("HTTP/1.0 401 Unauthorized");
	echo "you have canceled logining";
	exit;

}else{
	if ( ($_SERVER['PHP_AUTH_USER'] == "admin") && ($_SERVER["PHP_AUTH_PW"] == "admin")) 
	{
		
		echo "welcome!";

	}else{

		header('WWW-Authenticate: Basic realm= "Please input usename and password" ');
		header("HTTP/1.0 401 Unauthorized");
		echo "usename or password is wrong";
		exit;

	}
}

?>