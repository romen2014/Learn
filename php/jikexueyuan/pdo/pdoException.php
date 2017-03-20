<?php
try {
	$pdo = new PDO("mysql:host=localhost;dbname=test","root","654321");
	//	报警模式
	// $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	//	异常模式
	// $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//	沉默模式(默认)
	// $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);
	//	制造主键异常
	$sql = "INSERT INTO tbl_user VALUES(5,'wangwu','12345',5000)";
	$res = $pdo->exec($sql);
	if($res){
		echo "INSERT SUCCESS";
	}else{
		//	Exception默认不提示，需要用crrorCode()和errorInfo()
		echo "INSERT FAIL"."<br>";
	}
	echo "<hr>";

	$sql = "SELECT * FROM tbl_user";
	foreach ($pdo->query($sql) as $obj) {
		echo $obj['id']." | ".$obj['account']." | ".$obj['password']." | ".$obj['balance']."<br>";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}