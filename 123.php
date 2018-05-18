<!--*************************************************************************-->
<?php

  $data = file_get_contents('file.json');//берем данные из file.json
  $contacts = json_decode($data,true);//декодируем в php, как массив

?>
<!--*************************************************************************-->
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Задание 2.1</title>
</head>
<body>
	<style>
	  table td{
	  	border:1px solid #1b98f7;
	  }
		thead{
			font-size: 20px;
			background-color: #dcd0ff;
		}
		td{
			padding: 10px;
		}
	</style>
	<table>
		<thead>
			<tr>
				<td>Ф.И.О.</td>
				<td>Адрес</td>
				<td>Номер</td>
			</tr>
		</thead>
<!--*************************************************************************-->
		<?php foreach($contacts as $value){?>
		<tr> <!--В ячейки таблицы добавляем значение ключей массива-->
			<td><?=  $value['firstName']. ' ' .$value['lastName']?></td>
			<td><?= $value['phoneNumber']?></td>
			<td><?= 'г.' . $value['address']['city']. ', ' . 'ул.' . $value['address']['street']. ', ' . 'д.' . $value['address']['home']?></td>
		</tr>
		<?php }?>
<!--*************************************************************************-->
	</table>
	
</body>
</html>