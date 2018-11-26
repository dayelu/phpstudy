<?php
	/*
		文件下载器
	*/
	function donwload($url,$filname)
	{
		//读写追加模式的文件句柄
		$fp = fopen($url, "r");
		//新建下载文件句柄
		$newfile = fopen($filname,"a");

		//feof()检测文件是否到达结尾
		while (!feof($fp)) {
			//每次向文件读取10m字节的数据
			$line = fread($fp,100000);
			//每次向新文件写入10m数据
			fwrite($newfile,$line);
		}
		//关闭句柄
		fclose($fp);
		fclose($newfile);
		return 0;
	}





	/*
		过滤、筛选
	*/
	function find_result($url)
	{

	}

	/*
		获取网页hml内容，来自PHP官网分享
	*/
	function getURLContent($url)
	{
	    $doc = new DOMDocument;
	    $doc->preserveWhiteSpace = TRUE;
	    @$doc->loadHTMLFile($url);

	    $doc->saveHTML();
	    // return $doc->saveHTML();

	    $collections = $doc->getElementsByTagName("p");

	    foreach ($collections as $collection) {
		    echo $collection->nodeValue, PHP_EOL;
		}

	}


	// $url = "http://tupian.qqjay.com/u/2017/1118/1_162252_8.jpg";
	// $filname = "pic.jpg";
	// donwload($url,$filname);
	
	// $url = "http://www.w3school.com.cn/php/func_filesystem_fread.asp";
	// $url = "https://www.baidu.com";		//很显然loadHTML()方法解析不了https协议的文档

	$donwload_url = "https://201606mp4.11bubu.com/20160731/club-256/1/xml/91_7fe50466651e4995fb85dd2476a6d2d0.mp4";

	donwload($donwload_url,"修身.mp4");

	// $res = getURLContent($url);

	// print_r($res);

?>