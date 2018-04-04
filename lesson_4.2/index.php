<?php 
    include ("config.php");
	  $errors = "";

	  if (isset($_POST['submit'])) {
		    if (empty($_POST['task'])) {
			      $errors = "Займись чем-нибудь!";
		    }else{
			      $task = $_POST['task'];
			      $sql = "INSERT INTO tasks (task) VALUES ('$task')";
			      mysqli_query($db, $sql);
			      header('location: index.php');
		    }
	  }	

	  if (isset($_GET['del_task'])) {
	  $id = $_GET['del_task'];
	  mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);
	  header('location: index.php');
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>TODO-приложение</title>
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
</head>
<body>
	<div class="heading">
		<h2>
			TODO-приложение
		</h2>
	</div>
	<form method="post" action="index.php" class="input_form">

		<?php if (isset($errors)) { ?>
			<p>
				<?php echo $errors; ?>	
			</p>
		<?php } ?>

		<input type="text" name="task" class="task_input" placeholder="ваше дело"  required="">
		<button type="submit" name="submit" id="add_btn" class="add_btn">Добавить дело</button>
	</form>

<table>
	<thead>
		<tr>
			<th>Номер</th>
			<th>Задание</th>
			<th style="width: 60px;">Статус</th>
		</tr>
	</thead>

	<tbody>
		<?php 
		
		$tasks = mysqli_query($db, "SELECT * FROM tasks");

		$i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
			<tr>
				<td> <?php echo $i; ?> </td>
				<td class="task"> <?php echo $row['task']; ?> </td>
				<td class="delete"> 
					<a href="index.php?del_task=<?php echo $row['id'] ?>">x</a> 
				</td>
			</tr>
		<?php $i++; } ?>	
	</tbody>
</table>

</body>
</html>


