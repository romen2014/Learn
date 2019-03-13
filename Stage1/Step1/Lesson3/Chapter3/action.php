<?php
  // 定义变量接收前台提交的 username 值
  $username = $_POST['username'];
	echo '您好,'.$username.'! <br/>感谢您提交的信息:<hr/>';

  // 定义变量接收前台提交的 mail 值
  $mail = $_POST['mail'];
  echo '<br/>邮箱:'.$mail;

  // 定义变量接收前台提交的 paw 值
  $password = $_POST['paw'];
  echo '<br/>密码:'.$password;

  // 定义变量接收前台提交的 touxiang 值,并进行上传处理。
  // PS：需要注意服务器上传目录的访问权限
  echo "<br/>头像:";
	$file = $_FILES['touxiang'];
	$filePath = 'upload/';
	$fileName = $file['name'];
	move_uploaded_file($file['tmp_name'], $filePath.$fileName);
	echo "<br/><img src='".$filePath.$fileName."' width='640px'/>";

  // 定义变量接收前台提交的 sex 值，并进行if判断
  echo "<br/>性别:";
  $sex = $_POST['sex'];
  if($sex == 'man'){
    echo '男';
  }elseif ($sex == 'woman') {
    echo '女';
  }else{
    echo '保密';
  }

  // 定义变量接收前台提交的 aihao[] 数组，并通过foreach进行值遍历
  echo '<br/>爱好:';
  $aihao = $_POST['aihao'];
  foreach ($aihao as $value) {
    if($value == 1){
      echo "抽烟\t";
    }elseif ($value == 2) {
      echo "喝酒\t";
    }elseif ($value == 3) {
      echo "烫头\t";
    }
  }

  // 定义变量接收前台提交的 city1 值，并通过switch进行判断
  echo '<br/>城市:';
  $city = $_POST['city1'];
  switch ($city) {
    case '1':
      echo "北京";
      break;
    case '2':
      echo "上海";
      break;
    case '3':
      echo "广州";
      break;
    case '4':
      echo "深圳";
      break;
    case '5':
      echo "杭州";
      break;
    case '6':
      echo "天津";
      break;
    case '7':
      echo "重庆";
      break;
    case '8':
      echo "成都";
      break;
    default:
      echo "无";
      break;
  }

  // 定义变量接收前台提交的 jianjie 值，并通过nl2br方法进行换行处理
  $jianjie = $_POST['jianjie'];
  echo '<br/>简介:<br/>'.nl2br($jianjie);
