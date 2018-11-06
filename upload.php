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
			case 3: die("文件只被部分上载");
			case 4: die("没有上传任何文件");
			
			default: die("未知错误！");
		}
	}

	$hz = array_pop(explode(".",$__FILES['myfile']['name']));
	//通过文件的扩展名判断上传的文件是否为允许的类型
	if (!in_array($hz, $allowtype)) {
		die("这个后缀是<b>($hz)</b>,不是允许的文件类型！");
	}


	
	

?>