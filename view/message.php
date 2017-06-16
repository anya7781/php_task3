<?php	
	require $_SERVER['DOCUMENT_ROOT']."/autoload.php";
	
	$obj = Auth::getObj();

?>

<!DOCTYPE html>
<html lang="rus">
	<head>
		<title>Task2</title>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="/css/styles.css" />
	</head>

	<body>
	
			<div align = "center">
				<p>Здравствуйте, <?php echo $obj->getRole()." "; echo $obj->getLogin(); ?>!</p>
				<p>Вы успешно авторизовались!</p>
				<a href = "/view/profile.php">Просмотреть профиль</a>
				
				<?php if ($obj->getRole() == "admin") { ?>
					<br><br><a href = "/admin/index.php"> Зайти в админ панель </a>	
				<?php } include($_SERVER['DOCUMENT_ROOT']."/view/blocks/exit_button.php"); ?>
			</div>
						
	</body>

</html>