<?php 

function br(){
	echo "<br>";
}
function hr(){
	echo "<hr>";
}

$str = 'Hello PHP Java C# Swift';
echo $str;
hr();

//	strpos(haystack, needle)	-查找下标
echo strpos($str, 'lo');
hr();

//	substr(string, start, length)	-截取
echo substr($str, 3, 5);
br();
echo substr($str, 3);
hr();

//	str_split(string, lenght)	-字符串分割
$result = str_split($str);
print_r($result);
br();
$result = str_split($str, 2);
print_r($result);
hr();

//	explode(delimiter, string)	-指定字符分割
$result = explode(" ", $str);
print_r($result);
hr();

//	-字符串连接
$num = 100;
$str2 = $str." Objective-C";
echo "$str2 $num";
