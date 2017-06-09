<?php
	session_start();
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
				<p>Вы успешно авторизовались!</p>
				<a href = "/view/profile.php">Просмотреть профиль</a>
				<?php include("blocks/exit_button.php"); ?>
			</div>
		<?php
			}
		else {
			echo "Вы ввели неверный логин или пароль";
		}
		
		?>
	
	</body>


</html>