<?php 
namespace product;

class Bred extends Product 
{
	
	//Чтобы вызвать конструктор, объявленный в родительском классе	
	function __construct($name, $type, $price, $title){
		parent::__construct($name, $type, $price, $title);

	}	
}

 ?>