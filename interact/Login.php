<?php
	//设置PHP的字符集
	header('Content-Type:text/html;charset=utf-8');
	//令程序先等一秒
	sleep(1);
	//获取输入的用户名
	$tmp=$_GET["UserID"];
	//如果客户端输入“王二小”，显示已注册
	if ($tmp=="王二小") 
	{
		echo "已注册";	
	}else{
		echo "可以注册";
	}
?>