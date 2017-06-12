
<?php
	$dir    = '../json';
	$files1 = scandir($dir);
	
	$logins = array();
	$roles = array();

	foreach ($files1 as $file){
		if (stristr($file, ".json") == TRUE){
			$path = "../json/".$file;
			$string = file_get_contents($path);
			$data = json_decode($string);

			array_push($logins, $data->login);
			array_push($roles, $data->role);
		}
	}
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
						for ($i = 0; $i < count($logins); $i++){
								echo "<a href = 'profile.php?login=$logins[$i]'>".$logins[$i]."</a><br>";
							}
					?>
				</div>
				
				<div class="grid-item grid-item2">
					<?php
						echo "<b>Роль</b><br>";
						for ($i = 0; $i < count($roles); $i++){
								echo $roles[$i]."<br>";
							}
					?>
				</div>
		</div>
		<div align = "center">
			<br><a href = "/admin/new_user.php"> Добавить пользователя </a>
		</div>
		<?php include("blocks/exit_button.php"); ?>
	</body>


</html>