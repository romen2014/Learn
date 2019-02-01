<?php
echo "<pre>";
echo "prepare() 	-用于执行查询SQL语句，返回PDOStatement对象<br>";
echo "bindValue() 	-将值绑定到对应的一个参数，返回布尔值<br>";
echo "bindParam() 	-将参数绑定到对应的查询占位符上，返回布尔值<br>";
echo "bindColumn() 	-用来匹配列名和一个指定的变量名<br>";
echo "execute() 	-执行一个准备好了的预处理语句，返回布尔值<br>";
echo "rowCount() 	-返回使用增删改查操作语句后受影响的行总数<br>";
echo "</pre>";
echo "<hr>";


try {
	$pdo = new PDO("mysql:host=localhost;dbname=test","root","654321");
	$sql = "DELETE FROM tbl_user WHERE id > ?";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(1,4);
	$stmt->execute();
	echo $stmt->rowCount();
	echo " | ";
	//	设置异常模式便于观察
	// $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	//	问号配置
	//	预处理SQL语句
	$sql = "INSERT INTO tbl_user(account,password,balance) VALUES(?,?,?)";
	$stmt = $pdo->prepare($sql);
	//	参数绑定
	$stmt->bindValue(1,'zhaoliu');	//	值设定
	$stmt->bindParam(2,$password);	//	参数设定
	$password = '123456';	//参数可卸载参数设定语句后，但一定要卸载执行语句execute前
	$balance = 6000;
	$stmt->bindParam(3,$balance);
	//	执行
	$stmt->execute();


	//	查看执行结果
	echo $stmt->rowCount();
	echo " | ";
	
	//	数组绑定形式
	$sql = "INSERT INTO tbl_user(account,password,balance) VALUES(?,?,?)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array('tianqi','1234567',7000));	
	echo $stmt->rowCount();
	echo " | ";
	
	//	别名配置
	$sql = "INSERT INTO tbl_user(account,password,balance) VALUES(:act,:pwd,:blc)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue('act','maba');
	$stmt->bindParam('pwd',$pwd);
	$pwd = '12345678';
	$stmt->bindValue('blc',8000);
	$stmt->execute();
	echo $stmt->rowCount();
	echo " | ";

	$sql = "INSERT INTO tbl_user(account,password,balance) VALUES(:act,:pwd,:blc)";
	$stmt->execute(array('act'=>'hejiu','pwd'=>'123456789','blc'=>9000));	
	echo $stmt->rowCount();
	echo "<hr>";

	$sql = "SELECT * FROM tbl_user";
	foreach ($pdo->query($sql) as $obj) {
		echo $obj['id']." | ".$obj['account']." | ".$obj['password']." | ".$obj['balance']."<br>";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}