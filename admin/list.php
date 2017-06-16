<?php
	require $_SERVER['DOCUMENT_ROOT']."/autoload.php";
	$users = Files::userList();
	
?>

<!DOCTYPE html>
<html lang="rus">
	<head>
		<title>User list</title>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="/css/styles.css" />
	</head>

	<body>
	
		<div class="grid" align = "center">
				<div class="grid-item grid-item1">
					<?php
						echo "<b>Логин</b><br>";
						foreach ($users as $user){
								echo "<a href = 'profile.php?login=$user->login'>".$user->login."</a><br>";
							}
					?>
				</div>
				
				<div class="grid-item grid-item2">
					<?php
						echo "<b>Роль</b><br>";
						foreach ($users as $user){
								echo $user->role."<br>";
							}
					?>
				</div>
		</div>
		<div align = "center">
			<br><a href = "/admin/new_user.php"> Добавить пользователя </a>
		</div>
		<?php include($_SERVER['DOCUMENT_ROOT']."/view/blocks/exit_button.php"); ?>
	</body>


</html>