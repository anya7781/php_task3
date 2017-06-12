<?php

	session_start();
	

?>

<!DOCTYPE html>
<html lang="rus">
	<head>
		<title>Edit</title>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="/css/styles.css" />
	</head>

	<body>
	
		<form method = "post" class = "login_form" align = "center" action = "handler.php">
			<label>Логин: </label>
			<p><input type = "text" name = "login" /></p>
			<label>Пароль: </label>
			<p><input type = "password" name = "password" /></p>
			<label>Имя: </label>
			<p><input type = "text" name = "name" /></p>
			<label>Фамилия: </label>
			<p><input type = "text" name = "surname" /></p>
			<label>Роль: </label>
			
			<select name="role"> <!--Supplement an id here instead of using 'name'-->
			  <option value="admin">Admin</option> 
			  <option value="user" selected>User</option>
			</select>
			
			<p><input type = "submit" value = "Сохранить"></p>
			
		</form>
		
				
	
	</body>


</html>