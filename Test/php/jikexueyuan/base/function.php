<?php

//	定义函数
function traceHelloPHP(){
	echo 'Hello PHP'.'<br>';
	echo 'Hello World'.'<br>';
}
//	调用
traceHelloPHP();
//	回调函数
$func = 'traceHelloPHP';
$func();
echo '<hr>';

//	参数与字符串连接
function sayHello($name){
	echo 'Hello '.$name.'<br>';
}
sayHello('张三');
sayHello('李四');
echo '<hr>';

//	多参数
function traceNum($a,$b){
	//	连接形式
	echo 'a = '.$a.' ,b = '.$b.'<br>';
	// 直接调用参数
	echo "a = $a ,b = $b<br>";
}
traceNum(12,5);
echo '<hr>';

//	返回值
function add($a,$b){
	echo "$a + $b = ";
	return $a+$b;
}
echo add(12,5).'<hr>';