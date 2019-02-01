<?php 

function br(){
	echo "<br>";
}
//	时间戳
echo time();
br();
//	时区
echo date_default_timezone_get();
br();
//	日期
echo date('Y-m-d H:i:s');
br();
date_default_timezone_set('Asia/shanghai');
echo date_default_timezone_get();
br();
echo date('Y-m-d H:i:s');
br();
//	时间戳转换成日期
echo date('Y-m-d H:i:s', time());
br();
echo date('Y-m-d H:i:s', 2000);