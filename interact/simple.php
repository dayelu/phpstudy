<?php
	$file = "../callback.php";
	$url = "http://goss.vcg.com/223a9bb0-a1bc-11e8-a6fe-4d6f889a23c9.jpg";
	//获取文件名
	echo "文件名是： ".basename($file)."<br />";
	//获取目录名
	echo "目录名是： ".dirname($file)."<br />";
	//绝对路径
	echo "绝对路径是： ".realpath($file)."<br />";
	//获取文件基本信息
	echo "文件基本信息：<br />";
	print_r(pathinfo($file));
	echo "<br/ >";
	//访问文件属性
	echo "文件属性： ".filetype($file)."<br/ >";
	//获取文件大小
	echo "文件大小： ".filesize($file)."<br/ >";
	//获取文件inode编号
	echo "文件inode编号： ".fileinode($file)."<br />";
	//获取文件最后一次访问时间
	echo "最后一次访问时间： ".date("m-d-y g:i:s a",fileatime($file))."<br />";
	//获取文件最后一次修改时间
	echo "最后一次修改时间： ".date("m-d-y g:i:s a",filectime($file))."<br />";
	//。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。
?>