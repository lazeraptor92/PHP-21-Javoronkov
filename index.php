<?php 
include 'core/autoload.php';


$Black = new \product\Bred("Черная ", "Буханка ", "30  ", "Серпуховский");
$White = new \product\Bred("Белый ", "Батон ", "25  ", "Черниговский");

$Car1 = new \product\Car("Toyota ", "седан ", "350000  ", "Япония" );
$Car2 = new \product\Car ("BMW  ", "хэтчбек ", "340000 ", "Германия");

$order = new \order\order();

$order->addProduct($Black);
$order->addProduct($White);

$order->addProduct($Car1);
$order->addProduct($Car2);
 
echo '<br>';
 
$order->showAllProduct();
 
echo '<br>';
echo 'На сумму: ' . $order->sum();

