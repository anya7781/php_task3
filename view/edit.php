<?php
	require $_SERVER['DOCUMENT_ROOT']."/autoload.php";
	
	$obj = Auth::getObj();
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
			<p><input type = "text" name = "login" value = "<?php echo $obj->getLogin(); ?>"/></p>
			<label>Имя: </label>
			<p><input type = "text" name = "name" value = "<?php echo $obj->getName(); ?>"/></p>
			<label>Фамилия: </label>
			<p><input type = "text" name = "surname" value = "<?php echo $obj->getSurname(); ?>"/></p>
			
			<p><input type = "submit" value = "Сохранить"></p>
			
		</form>
						
	
	</body>


</html>