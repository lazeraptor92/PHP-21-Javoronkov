<?php
namespace cart;
 
class cart{
    public $countProduct = [];
   
    public function addProduct($product)
    {         
        
        $product->numberProduct = 1;
       
        if(array_key_exists($product->name, $this->countProduct)){
            $this->countProduct[$product->numberProduct++] = $product;
            echo 'Товар добавлен в корзину';
        }
        else{
            $this->countProduct[$product->name] = $product;
            echo 'Товар ' . $product->name .  'добавлен в корзину' . '<br/>';
        }
    
      echo '<hr/>';

    }
     
    public function deleteProduct($product)
    {
       
        foreach($this->countProduct as $key => $value){
            if($product->name == $key){
                unset($this->countProduct[$product->name]);
                echo 'Товар ' . $product->name . 'удалён из корзины' . '<br/';
            }
        }
    }
 
    public function sum()
    {
       $sum = 0;

       foreach($this->countProduct as $key => $value){
            $sum = $sum + ($value->price * $value->numberProduct);
       }
         
        return $sum;
        
    }
}
 
