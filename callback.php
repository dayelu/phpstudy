<?php
$fun = function($param)
{
	echo $param;
};

$fun("hello,world again.\n");

/*声明callback,需要传递一个匿名函数作为参数*/
function callback($callback)
{
	$callback();
}

$var = "变量！\n";

callback(function() use (&$var){			#闭包函数可以使用use关键字引用外部变量
	echo "闭包函数传参测试！\n{$var}";
});

?>