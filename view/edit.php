<?php

	session_start();
	if (!isset($_SESSION['login']))
		 header('Location: /');
	 
	 $path = "../json/".$_SESSION['login'].".json";
	 $string = file_get_contents($path);
	 $data = json_decode($string);

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
			<p><input type = "text" name = "name" value = "<?php echo $data->name; ?>"/></p>
			<label>Фамилия: </label>
			<p><input type = "text" name = "surname" value = "<?php echo $data->surname; ?>"/></p>
			
			<p><input type = "submit" value = "Сохранить"></p>
			
		</form>
						
	
	</body>


</html>