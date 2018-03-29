<?php 
include 'core/autoload.php';


$Black = new \product\Bred("Буханка ", "Черная ", "30  ", "Серпуховская");
$White = new \product\Bred("Батон ", "Белый ", "25  ", "Черниговский");

$Car1 = new \product\Car("Toyota ", "седан ", "350000  ", "Япония" );
$Car2 = new \product\Car ("BMW  ", "хэтчбек ", "340000 ", "Германия");

$order = new \order\order();

$order->addProduct($Black);
$order->addProduct($White);
$order->deleteProduct($White);

$order->addProduct($Car1);
$order->addProduct($Car2);

 
echo '<br>';
echo '<h3>Ваша корзина</h3>' . '<br/>';
$order->showCart();
 
echo '<br>';
echo 'На сумму: ' . $order->sum();

