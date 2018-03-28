<?php 
include 'core/autoload.php';


$Black = new \product\Bred("Black ", "Буханка ", "30  ", "Серпуховский");
$White = new \product\Bred("White ", "Батон ", "25  ", "Черниговский");

$Car1 = new \product\Spinner("Toyota ", "седан ", "350000  ", "Япония" );
$Car2 = new \product\Spinner ("BMW  ", "хэтчбек ", "340000 ", "Германия");

$order = new \order\order();

$order->addProduct($Black);
$order->addProduct($White);

$order->addProduct($spiner1);
$order->addProduct($spiner2);
 
echo '<br>';
 
$order->showAllProduct();
 
echo '<br>';
echo 'На сумму: ' . $order->sum();

