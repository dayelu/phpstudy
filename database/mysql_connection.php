<?php

	$link=@mysqli_connect("localhost","root","root1");

	if ($link) {
		echo "connection success!<br />";
		
		if(mysqli_select_db($link,"mysql")){
			echo "connection database mysql success!<br />";
		}

	}else{
		echo "connection failed!<br />";
	}

	mysqli_close($link);

?>