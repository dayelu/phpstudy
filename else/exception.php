<?php

class emailException extends exception{

}

class pwdException extends exception{
	function toString()
	{
		return "<div class \"error\">Exception{$this->getCode()}:
		{$this->getMessage()}
		in File:{$this->getFile()}online :{$this->getLine()}</div>";
	}
}


function reg($reginfo = null){

	if(empty($reginfo) || !isset($reginfo)){
		throw new Exception("参数非法");
	}
	if(empty($reginfo['email'])){
		throw new emailException("邮件为空");
	}

	if($reginfo['pwd'] != $reginfo['repwd']){
		throw new pwdException("两次密码不一致");
	}
	echo '注册成功';
}

try{
	reg(array(
				'email' => '1223@qq.com',
				'pwd' => '12123',
				'repwd' => 'i122212'
		 ));
}catch(emailException $ee){
	echo $ee->getMessage();
}catch(pwdException $ep){
	echo $ep;
	echo PHP_EOL,'特殊处理';
}catch(Exception $e){
	echo $e->getTraceAsString();
	echo PHP_EOL,'其他情况，统一处理';
}
?>
