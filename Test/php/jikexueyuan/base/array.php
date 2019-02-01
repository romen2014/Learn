<?php 

//	定义
$arr = array(0 => 'Hello',1 => 'Array','w' => 'World');
//	赋值
// $arr[0] = 'Hello';
// $arr[1] = 'Array';
$arr[2] = 100;
$arr[3] = 3.14159;
$arr[4] = false;
$arr[5] = true;
$arr['key'] = 'value';
// array_push(array, var)	-插入值
array_push($arr, 'PUSH');
//	输出
print_r($arr);
echo '<br>';
echo '<hr>';

//	访问
echo $arr[0].' '.$arr['w'].' '.$arr['key'];
echo '<br>';
//	循环访问