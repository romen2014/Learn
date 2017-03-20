<?php 

namespace package\sub1;

class People{
	// public function __construct(){
	// 	echo 'Construct of People without property<br>';
	// }

	/**
	 * 构造方法
	 *@param string $name 	-姓名
	 *@param string $sex 	-性别
	 *@param int 	$age 	-年龄
	 */
	public function __construct($name, $sex, $age){
		// echo 'Construct of People with properties<br>';
		People::$NUM++;
		$this->_id = People::$NUM;
		$this->_name = $name;
		$this->_sex = $sex;
		$this->_age = $age;

		if(People::$NUM > People::MAX_People_NUM){
			throw new Exception("不能创建更多的人");
		}
	}

	//	类方法
	public static function sayHello(){
		echo "Hello People<br>";
	}

	//	类变量
	private static $NUM = 0;
	const MAX_People_NUM = 20;

	//	对象属性及getter
	private $_id;
	public function getId(){
		return $this->_id;
	}

	private $_name;
	public function getName(){
		return $this->_name;
	}

	private $_sex;
	public function getSex(){
		return $this->_sex;
	}

	private $_age;
	public function getAge(){
		return $this->_age;
	}

	//	对象方法
	public function sayHi(){
		echo "Hi,I'm $this->_name<br>";
	}

}