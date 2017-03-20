<?php 

//	login
if(isset($_POST['account']) && isset($_POST['password'])){
	$conn = mysql_connect('localhost:3306','root','');
	if($conn){
		//	连接成功
		mysql_select_db('test', $conn);
		$sql = "SELECT id,account FROM tbl_user WHERE account = '".$_POST['account']."' AND password = '".$_POST['password']."'";
		$result = mysql_query($sql);
		// for ($i=0; $i < mysql_num_rows($result); $i++) { 
		// 	echo json_encode(mysql_fetch_assoc($result));
		// }
		if(mysql_num_rows($result) > 0){
			//	登录成功
			$user = mysql_fetch_assoc($result);
			echo json_encode($user);
			echo $user['account'];
			session_start();
			$_SESSION["account"] = $user['account'];
			header('Location:index.php');
		}else{
			//	登录失败
			echo '用户名或密码错误，请重新输入。';
			echo '<a href="javascript:history.back(-1)">返回</a>';
		}
	}else{
		//	连接失败
		echo '数据库连接失败';
	}
}