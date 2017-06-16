<!DOCTYPE html>
<html lang="rus">
	<head>
		<title>Admin panel</title>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="/css/styles.css" />
	</head>

	<body>
	
		<div align = "center">
		
			<a href = "/admin/list.php"> Список пользователей </a>
			<br><br><a href = "/admin/new_user.php"> Добавить пользователя </a>
			<?php include($_SERVER['DOCUMENT_ROOT']."/view/blocks/exit_button.php"); ?>
		
		</div>
	
	</body>


</html>