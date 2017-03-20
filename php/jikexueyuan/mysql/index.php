<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
<?php 
	session_start();
	if(isset($_SESSION['account'])){
		echo 'Welcome!'.$_SESSION["account"];
		echo '<a href="logout.php">登出</a>';
	}else{
		header('Location:ral.html');
	}
?>
</body>
</html>