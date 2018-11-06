<?php
/*
	
*/

function request($url)
{
	try {

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

		$output = curl_exec($ch);

		curl_close($ch);

		return $output;
		
	} catch (Exception $e) {
		printf($e);
	}

}

echo request("http://www.baidu.com");

?>