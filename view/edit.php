<?php

	session_start();
	if (!isset($_SESSION['login']))
		 header('Location: /');

?>

<!DOCTYPE html>
<html lang="rus">
	<head>
		<title>Edit</title>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="/css/styles.css" />
	</head>

	<body>
	
		<form method = "post" class = "login_form" align = "center" action = "/controller/handler_edit.php">
			<label>Логин: </label>
			<p><input type = "text" name = "login" value = "<?php echo $_SESSION['login']; ?>"/></p>
			<label>Имя: </label>
			<p><input type = "text" name = "name" value = "<?php echo $_SESSION['name']; ?>"/></p>
			<label>Фамилия: </label>
			<p><input type = "text" name = "surname" value = "<?php echo $_SESSION['surname']; ?>"/></p>
			
			<p><input type = "submit" value = "Сохранить"></p>
			
		</form>
		
		<?php include("blocks/exit_button.php"); ?>
			
				
	
	</body>


</html>