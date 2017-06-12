<?php
			session_start();
			
			
			if (!isset($_SESSION['login'])){
				header('Location: /');
			}
			else {
				 $path = "../json/".$_SESSION['login'].".json";
				 $string = file_get_contents($path);
				 $data = json_decode($string);
				 
				if (isset($_POST['login'])){
					$_SESSION['login'] = $_POST['login'];
					$data->login = $_POST['login'];
				}
				if (isset($_POST['name'])){
					$data->name = $_POST['name'];
				}
				if (isset($_POST['surname'])){
					$data->surname = $_POST['surname'];
				}
				
				file_put_contents($path, json_encode($data));
				
				header('Location: /view/profile.php');
			}
			
 