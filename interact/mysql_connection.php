<?php

	$link=@mysqli_connect("localhost","root","root1");

	if ($link) {
		echo "connection success!<br />";
		$database = "mysql";
		if(mysqli_select_db($link,$database)){
			echo "connection database mysql success!<br />";
			$query = "select * from user;";
			$res = mysqli_query($link,$query);

			while ($row = mysqli_fetch_assoc($res)) {
				echo $row['Host']."<br />";
				echo $row['User']."<br />";
				echo $row['Select_priv']."<br />";
				echo $row['Insert_priv']."<br />";
			}

		}

	}else{
		echo "connection failed!<br />";
	}

	mysqli_close($link);

?>