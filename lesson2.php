<!DOCTYPE html>
<html lang="ru">
    <head>
    	<meta charset="UTF-8">
    	<title>Lesson 2</title>
    </head>
    <style>
        body{
            text-align: center;
            font-size: 20px;
        }
        body form{
            margin-top: 10%;
        }
        form input{
            text-align: center;
            display:inline-block;
            margin:10px auto;
            padding: 5px 0px;
        }
        .btn{
            color:black;
            padding:5px;
            background-color: lighgray;
            transition:.5s;
        }
        .btn:hover{
            background-color: gray;
        }
    </style>
        <body>
            <div>
                <form name="mainform" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
                    Введите число: <br/>
                    <input type="text" name="x"></br>
                    <input type="submit" class="btn">
                </form>
            </div>
        </body>
</html>
<?php 
    $x = $_GET['x'];
/*if(empty($Name)){
   echo "Заполните поле ввода";
}
else{
*/
    $y = 1;//первая переменная
    $z = 1;//вторая переменная
    while ($x >= $y) { //пока первая переменная "y" меньше "x" выполняем цикл
        if ($x == $y) { //если переменная пользователя равна первой переменной, то выводим сообщение и конец
            echo "Задуманное число ВХОДИТ в числовой ряд";
            break;
        }
        if ($x > $y) { //если переменная пользователя больше переменной 1 и не равна ей, то
            $b = $y;//переменная 3 = переменная 1
            $y=$y+$z;//прибавляем к переменной 1 значение переменной 2
            $z = $b;//присваиваем переменной 2 значение переменной 3
        }    
    }
    if ($x < $y) { //если переменная пользователя меньше переменной один
    echo "Задуманное число НЕ входит в числовой ряд";
    } 
?>