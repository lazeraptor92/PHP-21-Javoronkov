<?php 
namespace product;

 abstract class Product implements \InterfaceForGood 
 {
	
	public $sale = 5;
	public $name;
    public $type;
	public $price;
	public $title;


    public function __construct ($name, $type, $price, $title)
    {
        
        $this->name = $name;
        $this->type = $type;
        $this->$price = $price;
        $this->title = $title;
       
    }
     //если переменной name присвоено значение седан, то из цены вычитается (5/100) %
    public function getSale()
    {
        if($this->name) {
            if($this->name = 'седан') {
                return round($this->price - ($this->price * $this->$sale /100) );
            }else {
                return $this->price;
            }
        }
    }
    function getFullDescription()
    {
        echo 
        "{$this->name} {$this->type} <br/> цена  {$this->getSale()} руб.  <br/> {$this->title}}";
    }  

}


 ?>