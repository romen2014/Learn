<?php 

//	if/else
function getLevelByIfElse($score){
	if($score > 89){
		return '优秀';
	}else if($score > 79){
		return '良好';
	}else if($score > 59){
		return '及格';
	}else{
		return '不及格';
	}
}

echo '91分'.getLevelByIfElse(91).'<br>';
echo '85分'.getLevelByIfElse(85).'<br>';
echo '60分'.getLevelByIfElse(60).'<br>';
echo '59分'.getLevelByIfElse(59).'<hr>';

//	switch
function getLevelBySwitch($score){
	//	intval()函数强制将小数转换为整数
	switch (intval($score/10)) {
		case 10:
		case 9:
		//	break跳出switch判断,return跳出function
			return '优秀';
		case 8:
		case 7:
			return '良好';
		case 6:
			return '及格';		
		default:
			return '不及格';
			// break;
	}
}

echo '100'.getLevelBySwitch(100).'<br>';
echo '99'.getLevelBySwitch(99).'<br>';
echo '88'.getLevelBySwitch(88).'<br>';
echo '77'.getLevelBySwitch(77).'<br>';
echo '66'.getLevelBySwitch(66).'<br>';
echo '55'.getLevelBySwitch(55).'<br>';
