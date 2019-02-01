<?php 
const END = 10;
//	for
for($i = 0;$i < END; $i++){
	if($i == 3){
		echo "CONTINUE<br>";
		continue;
	}
	if($i == 8){
		echo "BREAK<br>";
		break;
	}
	echo "in for i = $i<br>";
}
echo '<hr>';

//	while
$i = 0;
while($i < END){
	echo "in while i = $i<br>";
	$i++;
}
echo '<hr>';

//	do..while
$i = 0;
do{
	echo "in while i = $i<br>";
	$i++;
}while($i < END);