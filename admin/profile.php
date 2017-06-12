<?php
	
	if (isset($_GET['login'])){
		 $path = "../json/".mb_strtolower($_GET['login']).".json";
		 $string = file_get_contents($path);
	     $data = json_decode($string);
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
			<?php include("blocks/exit_button.php"); ?>
		</div>
	</body>


</html>