<?php
	require $_SERVER['DOCUMENT_ROOT']."/autoload.php";
	
	if (isset($_GET['login'])){
		 $data = Files::getUser($_GET['login']);
	}
	else header('Location: /');
	
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
			<p>Имя: <?php echo $data->name; ?></p>
			<p>Фамилия: <?php echo $data->surname; ?></p>
			<a href = "list.php">Список пользователей</a>
			<?php include($_SERVER['DOCUMENT_ROOT']."/view/blocks/exit_button.php"); ?>
		</div>
	</body>


</html>