<?php 
$city = "Serpukhov";
$url = "http://api.openweathermap.org/data/2.5/find?q=$city,RU&type=like&units=metric&APPID=06d83453142d5d5efb0a72c39213d45e";
$data = @file_get_contents($url);
//Создали аккаунт, задали переменной city название города из cityname ресурса openweather, добавили свой appid ^
// если получили данные

if($data){
//получаем данные из json в php
    $dataJson = json_decode($data);
    $arrayWeather = $dataJson->list;
// выводим данные
    foreach($arrayWeather as $day){
        echo "Погода в городе". " " . $city . " " . "на" . ": " . (date("d - m - Y ")) . "<br/>";//день месяц год
        echo "Температура: " . $day->main->temp .  " C" . "<br/>";
        echo "Скорость ветра: " . $day->wind->speed . " m/s" . "<br/>";
        echo "Широта: " . $day->coord->lat . "<br/>"; 
        echo "Долгота: " .  $day->coord->lon . "<br/>";
        echo "Давление: " . $day->main->pressure . "<br/>";
        echo "Погода: " . $day->weather[0]->description  ;
        if ($day->weather[0]->description=="Sky is Clear") {
            echo "<img src='https://openweathermap.org/img/w/01d.png' width=100 height=100>" . "<br/>";echo "<br/>";
        } 
        else {
            echo "<img src='https://openweathermap.org/img/w/13n.png' width=100 height=100>" . "<br/>";echo "<br/>";
        }
    }
}

