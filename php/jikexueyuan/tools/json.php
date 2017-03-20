<?php 

//	定义数组
$arr = array('h'=>'Hello','w'=>'World',array(6,5,4),array(5,3,2));
//	将数组转化成Json
$jsonStr = json_encode($arr);
echo $jsonStr;
echo '<hr>';
//	定义Json
$jsonStr = '{"h":"Hello","w":"World","0":[6,5,4],"1":[5,3,2]}';
$arr = json_decode($jsonStr);
print_r($arr);
echo "<br>";

// json操作有问题
// echo $arr->h." ".$jsonStr['w'];