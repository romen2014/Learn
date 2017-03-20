<?php 

//	AND
for ($i=0; $i < 20; $i++) { 
	if($i % 2 == 0 && $i % 3 == 0){
		echo "$i<br>";
	}
}
echo "<hr>";

//	OR
for ($i=0; $i < 20; $i++) { 
	if($i % 2 == 0 || $i % 3 == 0){
		echo "$i<br>";
	}
}
echo "<hr>";

//	NOT
for ($i=0; $i < 20; $i++) { 
	if(!($i % 2 == 0)){
		echo "$i<br>";
	}
}