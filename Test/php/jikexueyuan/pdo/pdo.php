<?php 
//	step1、连接数据库
try {
	//	方式1	配置DSN
	$pdo = new PDO("mysql:host=localhost;dbname=test","root","654321");
	//	方式2	自定义配置文件
	// $pdo = new PDO("uri:mysqlpdo.ini","root","");
	//	方式3	修改php.ini配置文件
	//	在任意位置添加pdo.dsn.mysqlpdo = "mysql:host=localhost;dbname=test"
	//	需重启服务器
	// $pdo = new PDO("mysqlpdo","root","");
	print_r($pdo);
	echo "<br>";
} catch (PDOException $e) {
	die("数据库连接失败".$e->getMessage());
}

//	查看一些PDO参数设置
echo $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION);
echo "<br>";
echo $pdo->getAttribute(PDO::ATTR_SERVER_INFO);
echo "<br>";
echo $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT);
// echo "<br>";
// $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,0);
// echo $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT);
echo "<hr>";

echo '<pre>';
echo 'PDO对象成员方法<br>';
echo 'query($sql)	-用于执行查询SQL语句。返回PDOStatement对象<br>';
echo 'exec($sql)	-用于执行增删改操作。返回影响行数<br>';
echo 'setAttribute()	-设置一个"数据库连接对象"属性<br>';
echo 'fetchAll()	-解析数据<br>';
echo '</pre>';
echo "<hr>";

//	query查询
//	step2、连接数据库
$sql = "SELECT * FROM tbl_user";
$stmt = $pdo->query($sql);
//PDO::FETCH_ASSOC参数用于指定返回结果均为kv关联数据，不包含数据下标数据。
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
// print_r($list);
// echo "<br>";

//	step3、解析数据
foreach ($list as $obj) {
	echo $obj['id']." | ".$obj['account']." | ".$obj['password']." | ".$obj['balance']."<br>";
}
echo "<hr>";
// 2+3、快捷查询
foreach ($pdo->query($sql) as $obj) {
	echo $obj['id']." | ".$obj['account']." | ".$obj['password']." | ".$obj['balance']."<br>";
}
echo "<hr>";

//	增删改
$sql = "INSERT INTO tbl_user(account,password) VALUES('wangwu','12345')";
$res = $pdo->exec($sql);
if($res){
	echo 'INSERT SUCCESS';
}else{
	echo 'INSERT FAIL';
}
echo "<hr>";

$sql = "UPDATE tbl_user SET account = 'WANGWU' WHERE account = 'wangwu'";
$res = $pdo->exec($sql);
if($res){
	echo 'UPDATE SUCCESS';
}else{
	echo 'UPDATE FAIL';
}
echo "<hr>";

$sql = "DELETE FROM tbl_user WHERE account = 'WANGWU'";
$res = $pdo->exec($sql);
if($res){
	echo 'DELETE SUCCESS';
}else{
	echo 'DELETE FAIL';
}
echo "<hr>";
//	step4、释放资源
$stmt = null;
$pdo = null;
echo $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION);