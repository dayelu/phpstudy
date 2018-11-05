<?php
	
	$allowtype = array("gif","png","jpg");
	$size = 1000000;
	$path = "./uploads";

	//判断文件是否可以成功上传到服务器,$__FILES['myfile']
	if ($__FILES['myfile']['error'] > 0) {
		echo "上传错误：";
		switch ($__FILES['myfile']['error']) {
			
			case 1: die("上传文件大小超出了PHP配置文件中的约定值：upload_max_filesize");
			case 2: die("上传文件大小超出了表单中的约定值：MAX_FILE_SIZE");
				
			
			default:
				# code...
				break;
		}
	}
?>