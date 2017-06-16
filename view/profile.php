<?php
	require $_SERVER['DOCUMENT_ROOT']."/autoload.php";
	
	$obj = Auth::getObj();
	
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
			<p>Логин: <?php  echo $obj->getLogin(); ?></p>
			<p>Роль: <?php echo $obj->getRole(); ?></p>
			<p>Имя: <?php echo $obj->getName(); ?></p>
			<p>Фамилия: <?php echo $obj->getSurname(); ?></p>
			<a href = "edit.php">Редактировать профиль</a>
			<?php if ($obj->getRole() == "admin") { ?>
					<br><br><a href = "/admin/index.php"> Зайти в админ панель </a>
			<?php } include($_SERVER['DOCUMENT_ROOT']."/view/blocks/exit_button.php"); ?>
		</div>
	</body>


</html>