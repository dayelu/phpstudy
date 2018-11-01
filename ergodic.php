<?php
$personInfo = [
	"name" => "wang",
	"sex"=>"male",
	"age"=>25
];

$name = each($personInfo);
var_dump($name);

$sex = each($personInfo);
var_dump($sex);

$age = each($personInfo);
var_dump($age);

$end = each($personInfo);
var_dump($end);

$info = ["jiu","female",19];

list($name,$sex,$age) = $info;

var_dump($name);
var_dump($sex);
var_dump($age);

$reset = reset($personInfo);
print_r($reset);

while (list($key,$value) = each($personInfo)) {
	print($key."-".$value."\n");
}

$end = end($personInfo);
print_r($personInfo);
print($end."\n");

?>