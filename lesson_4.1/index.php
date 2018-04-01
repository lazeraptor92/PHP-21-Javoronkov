<?php
include ("config.php");

if (!mysqli_connect($server, $login, $password, $db))
	{
   		exit(mysqli_error()); 
   		echo "<h3>Вы не подключились к БД</h3>";
   }
   else
   {
      echo "<h3>Вы успешно подключились к БД</h3>";   
   }
   
$sql = "SELECT * FROM books";
//запускаем запрос sql на сервере
$res = mysqli_query($connect,$sql);

//все данные теперь в $res
    
?> 	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Books</title>
</head>
	<body>
		<style>
			body{
				text-align: center;
			}
			table{
				display: inline-block;
			}
			td{
				border:1px solid black;
				padding:5px;
			}
		</style>
	<h1>
		Топ 10 книг , которые должен прочитать каждый успешный человек.
	</h1>
	<h2>
		Стоимость каждой книги: 1 000 000 евро.
	</h2>
	<h3>
		При покупки двух, третья в подарок.
	</h3>
	  <table>
	  	<th>
	  		<tr>
	  			<td>№</td>
	  			<td>Название</td>
	  			<td>Автор</td>
	  			<td>Год</td>
	  			<td>isbn</td>
	  			<td>Жанр</td>
	  		</tr>
	  	</th>

		<?php 

		while($row = mysqli_fetch_array($res))
		{ ?>
			<tr>
				<td><?= $row['id'] ?></td>
				<td><?= $row['name'] ?></td>
				<td><?= $row['author'] ?></td>
				<td><?= $row['year'] ?></td>
				<td><?= $row['isbn'] ?></td>
				<td><?= $row['genre'] ?></td>
			</tr>
	  <?php } ?> 

		</table>

</body>

</html>