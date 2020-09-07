<?php
// $file = "filetype.php";
// $file = "D:\\node";
// $res = filetype($file);
// print($res);

$url = "http://xy.xiangyun360.com";
// curl_setopt($url);
$handle = fopen($url,"r");

print(fread($handle,100000));

fclose($handle);
?>