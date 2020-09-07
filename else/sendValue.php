<?php
	
	function test(&$arg){
		$arg = 200;			//在函数中改变参数$a的值为200
	}

	// $var = 100;
	// test($var);
	// var_dump($var);

	function more_args()
	{
		for ($i=0; $i < func_num_args() ; $i++) { 
			echo "第".$i."个参数是".func_get_arg($i)."\n";
		}
	}

	// more_args(1,"eq","wo","zhencahao","hhehh");

	function filter($fun){
		for ($i=0; $i < 100; $i++) { 
			//将参数变量$fun加上一个圆括号$fun(),则为调用和变量$fun值同名的函数
			if($fun($i)){
			echo $i.",";
				// continue;
			}

		}
	}

	/*声明一个函数one,如果参数是3的倍数就返回true,否则返回false
		@param int $num
	*/
	function one($num){
		return $num % 3 == 0;
	}

	/*声明一个函数two,如果参数是一个回文数(翻转后还等于自己的数)就返回true,否则返回false
		@param int $num
	*/
	function two($num){
		return $num == strrev($num);
	}

	filter("one");
	echo "\n-------------------------\n";
	filter("two");

