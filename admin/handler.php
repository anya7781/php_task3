<?php

if (isset($_POST['login'])){
	
	$data = array(
	  "name" => $_POST['name'],
	  "surname" => $_POST['surname'],
	  "login" => $_POST['login'],
	  "role" => $_POST['role'],
	  "password" => $_POST['password']
	);

	$path = "../json/".mb_strtolower($_POST['login']).".json";
	file_put_contents($path, json_encode($data));
	
	$login = $_POST['login'];
	header("Location: /admin/profile.php?login=$login");
		
}
else header('Location: /admin/new_user.php');