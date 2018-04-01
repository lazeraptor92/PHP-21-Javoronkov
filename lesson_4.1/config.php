<?php
$server = "localhost";
$login = "javoronkov";
$password = "neto1675";
$db = "global" OR DIE("Не могу подключиться");

//конект к серверу c bd
$connect = mysqli_connect($server, $login, $password, $db);
/*
mysql_query("SET NAMES utf8");
*/
?>