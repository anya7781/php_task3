<?php
	session_start();
	if (!isset($_SESSION['login']))
		 header('Location: /');
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
			<p>Логин: <?php  echo $_SESSION['login'];?></p>
			<p>Имя: <?php echo $_SESSION['name']; ?></p>
			<p>Фамилия: <?php echo $_SESSION['surname']; ?></p>
			<a href = "edit.php">Редактировать профиль</a>
			<?php include("blocks/exit_button.php"); ?>
		</div>
	</body>


</html>