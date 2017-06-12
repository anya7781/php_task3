<?php
	session_start();
	if (!isset($_SESSION['login']))
		 header('Location: /');
	 
	 $path = "../json/".$_SESSION['login'].".json";
	 $string = file_get_contents($path);
	 $data = json_decode($string);
?>

<!DOCTYPE html>
<html lang="rus">
	<head>
		<title>Profile</title>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="/css/styles.css" />
	</head>

	<body>
		<div align = "center">
			<p>Логин: <?php  echo $data->login; ?></p>
			<p>Роль: <?php echo $data->role; ?></p>
			<p>Имя: <?php echo $data->name; ?></p>
			<p>Фамилия: <?php echo $data->surname; ?></p>
			<a href = "edit.php">Редактировать профиль</a>
			<?php if ($data->role == "admin") { ?>
					<br><br><a href = "/admin/index.php"> Зайти в админ панель </a>
			<?php } include("blocks/exit_button.php"); ?>
		</div>
	</body>


</html>