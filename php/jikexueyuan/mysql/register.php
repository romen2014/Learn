<?php 

if(isset($_POST['account']) && isset($_POST['password1']) && isset($_POST['password2'])){
	if($_POST['password1'] != $_POST['password2']){
		echo "两次输入密码不一致。";
		echo '<a href="javascript:history.back(-1)">返回</a>';
	}

	$conn = mysql_connect('localhost:3306','root','');
	if($conn){
		//	连接成功
		mysql_select_db('test', $conn);
		//	防SQL注入。String类型数据一定要用''括起来，其他类型数据一定要进行数据转换如intval()
		$sql = "INSERT INTO tbl_user(account,password) VALUES('".$_POST["account"]."','".$_POST["password1"]."')";
		$result = mysql_query($sql);
		if(mysql_errno()){
			echo '注册失败。'.mysql_error();
			echo '<a href="javascript:history.back(-1)">返回</a>';
		}else{
			session_start();
			$_SESSION["account"] = $_POST['account'];
			header('Location:index.php');
		}
	}else{
		//	连接失败
		echo '数据库连接失败';
	}
}