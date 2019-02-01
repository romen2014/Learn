<?php 

if(isset($_GET['account']) && isset($_GET['password'])){
	echo 'your account is : '.$_GET['account'];
	echo ' | ';
	echo 'your password is : '.$_GET['password'];
	session_start();
	$_SESSION['account'] = $_GET['account'];
	header('Location:server.php');
}

if(isset($_POST['number1']) && isset($_POST['number2'])){
	echo $_POST['number1']."+".$_POST['number2']."=";
	echo intval($_POST['number1']) + intval($_POST['number2']);
}

if(isset($_FILES['file'])){
	// print_r($_FILES);
	$file = $_FILES['file'];
	$filePath = 'upload/';
	$fileName = $file['name'];
	move_uploaded_file($file['tmp_name'], $filePath.$fileName);

	echo "<img src='".$filePath.$fileName."' />";
}