<?php 
namespace order;

final class order extends \cart\cart
{

	
    public function showCart()
    {
        $resCountProduct = 0;
            
            foreach($this->countProduct as $key => $value){
            echo $value->name . $value->type . $value->title .', количество: ' . $value->numberProduct . '<br>';
                
        $resCountProduct = $resCountProduct + $value->numberProduct; 
          
           
        }
         
        echo 'Общее количество товаров: ' . $resCountProduct;

    }

}




 ?>