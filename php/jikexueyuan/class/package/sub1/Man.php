<?php 

namespace package\sub1;

require_once 'People.php';

class Man extends People{
	public function __construct($name, $age){
		parent::__construct($name, '男', $age);
	}

	//	重写父类方法
	public function sayHi(){
		echo "Hey,I'm ".$this->getName()."The Man<br>";
	}
}