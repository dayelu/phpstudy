<?php

	/**
	 * 自定义的一个异常处理类，但必须是扩展内置异常处理的子类
	 */
	class MyException extends Exception
	{
		//重新定义构造器，使第一个参数message变为必须被指定的属性
		public function __construct($message,$code=0)
		{
			parent::__construct($message,$code);
		}

		//将异常对象转换成字符串
		public function __toString()
		{
			return __CLASS__.":[".$this->code."]:".$this->message."\n";
		}

		//为这个异常自定义一个处理方法
		public function customFunction()
		{
			echo "按自定义的方法处理出现的这个类型的异常\n";
		}

	}


	try {
		
		$error = "允许抛出这个错误";
		throw new MyException($error);
		echo "Never executed";

	} catch (Exception $e) {

		echo "捕获异常".$e;
		$e->customFunction();
	}

	echo "你好哇\n";
?>