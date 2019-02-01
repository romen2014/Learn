<?php 
try {
	$pdo = new PDO("mysql:host=localhost;dbname=test","root","654321");
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e->getMessage();
}

try {
	$sqlSelectAll = "SELECT * FROM tbl_user";
	foreach ($pdo->query($sqlSelectAll) as $obj) {
		echo $obj['id']." | ".$obj['account']." | ".$obj['password']." | ".$obj['balance']."<br>";
	}
	echo '<hr>';

	//	开启事务
	$pdo->beginTransaction();

	$sql1 = "UPDATE tbl_user SET balance = ? WHERE id = 3";
	$stmt = $pdo->prepare($sql1);
	$stmt->bindValue(1,3000);
	$stmt->execute();
	$sql2 = "UPDATE tbl_user SET balance = ? WHERE id = 4";
	$stmt = $pdo->prepare($sql2);
	$stmt->bindValue(1,4000);
	$stmt->execute();

	//	事务提交
	$pdo->commit();
	echo '<hr>';
	foreach ($pdo->query($sqlSelectAll) as $obj) {
		echo $obj['id']." | ".$obj['account']." | ".$obj['password']." | ".$obj['balance']."<br>";
	}

} catch (PTOException $e) {
	echo $e->getMessage();
	//	事务回滚	如放在catch里则必须保证异常时的Exception可以被正常捕捉
	$pdo->rollBack();
}