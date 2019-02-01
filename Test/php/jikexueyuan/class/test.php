<?php 

require_once 'package/sub1/Hello.php';
require_once 'package/sub1/People.php';
require_once 'package/sub1/Man.php';
require_once 'package/sub2/Hello.php';

$hello = new \package\sub1\Hello();
$hello->sayHello();
$hello = new \package\sub2\Hello();
$hello->sayHello();

$desktop = new \package\sub1\Desktop();
$desktop->work();
echo "<hr>";
// $people = new \package\sub1\People();
\package\sub1\People::sayHello();
for ($i=0; $i < \package\sub1\People::MAX_People_NUM-1; $i++) { 
	$people = new \package\sub1\People('Romen','man',30+$i);
	echo $people->getId();
	echo " | name is:";
	echo $people->getName();
	echo " | sex is:";
	echo $people->getSex();
	echo " | age is:";
	echo $people->getAge();
	echo "<br>";
}
// //	检测制造异常
// $people = new \package\sub1\People('Romen','man',30);
// echo $people->getId();
// echo " | name is:";
// echo $people->getName();
// echo " | sex is:";
// echo $people->getSex();
// echo " | age is:";
// echo $people->getAge();
echo "<hr>";

//	定义子类
$man = new \package\sub1\Man('柳采鸿',22);
echo $man->getId();
echo " | name is:";
echo $man->getName();
echo " | sex is:";
echo $man->getSex();
echo " | age is:";
echo $man->getAge();
echo " | say:";
echo $man->sayHi();	//调用父类方法
echo "<hr>";