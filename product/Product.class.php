<?php 
namespace product;

 abstract class Product implements \InterfaceForGood 
 {
	
	
	public $name;
	public $price;
	public $title;


    public function __construct ($name, $price, $title)
    {
        
        $this->name = $name;
        $this->$price = $price;
        $this->title = $title;
       
    }

    

}


 ?>