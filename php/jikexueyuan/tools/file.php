<?php 

//	file write
$f = fopen('data.txt','w');

if($f){
	for ($i=1; $i < 11; $i++) { 
		//	双引号支持\r\n换行，单引号不支持
		fwrite($f, "Test wirte dateFile line $i\r\n");
	}
	fclose($f);
}else{
	//	非win系统可能由于权限原因导致$f为空
	echo "Fail!";
}
echo "Done.";
echo "<hr>";

// file read
$f = fopen('data.txt','r');
while(!feof($f)){
	$content = fgets($f);	//	只读取一行
	echo $content.'<br>';
}
fclose($f);