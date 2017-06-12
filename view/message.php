<?php
	session_start();
	 $path = "../json/".$_SESSION['login'].".json";
	 $string = file_get_contents($path);
     $data = json_decode($string);
?>

<!DOCTYPE html>
<html lang="rus">
	<head>
		<title>Task2</title>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="/css/styles.css" />
	</head>

	<body>
	
		<?php
		
			if (isset($_SESSION['login'])){
		?>
			<div align = "center">
				<p>Здравствуйте, <?php echo $data->role." "; echo $data->login; ?>!</p>
				<p>Вы успешно авторизовались!</p>
				<a href = "/view/profile.php">Просмотреть профиль</a>
				
				<?php if ($data->role == "admin") { ?>
					<br><br><a href = "/admin/index.php"> Зайти в админ панель </a>	
				<?php } include("blocks/exit_button.php"); ?>
			</div>
		<?php
			}
		else {
			echo "Вы ввели неверный логин или пароль";
		}
		
		?>
	
	</body>


</html>