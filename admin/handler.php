<?php
require $_SERVER['DOCUMENT_ROOT']."/autoload.php";

if (isset($_POST['login'])){
	
	$data = array(
	  "name" => $_POST['name'],
	  "surname" => $_POST['surname'],
	  "login" => $_POST['login'],
	  "role" => $_POST['role'],
	  "password" => $_POST['password']
	);
	
	Files::setUser($data, $data['login']);
	$login = $data['login'];

	header("Location: /admin/profile.php?login=$login");
		
}
else header('Location: /admin/new_user.php');