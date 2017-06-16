<?php
		require $_SERVER['DOCUMENT_ROOT']."/autoload.php";
		
		$obj = Auth::getObj();
			
		$login = $obj->getLogin();
		$data = Files::getUser($login);
				 
		if (isset($_POST['login'])){
			$data->login = $_POST['login'];
			$obj->setLogin($data->login);
		}
		if (isset($_POST['name'])){
			$data->name = $_POST['name'];
			$obj->setName($data->name);
		}
		if (isset($_POST['surname'])){
			$data->surname = $_POST['surname'];
			$obj->setSurname($data->surname);
		}
		
		Files::setUser($data, $login);
				
		header('Location: /view/profile.php');
			
			
 