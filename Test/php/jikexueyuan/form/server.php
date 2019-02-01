<?php 

session_start();
if(isset($_SESSION['account'])){
	echo $_SESSION['account'];
	echo " | ";
	echo session_id();
	echo " | ";
	echo '<a href="logout.php">登出</a>';
}else{
	echo 'No Account Found';
	echo " | ";
	echo '<a href="myForm.html">登录</a>';
}