<?php 
namespace product;

class Bred extends Product 
{
	public $type;
	//Чтобы вызвать конструктор, объявленный в родительском классе	
	function __construct($name, $type, $price, $title){
		parent::__construct($name, $price, $title);
		$this->type = $type;
	}	
}

 ?>