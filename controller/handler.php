<?php

			require $_SERVER['DOCUMENT_ROOT']."/autoload.php";
			
			if (isset($_POST['exit'])){
				 Auth::destroyObj();
				 header('Location: /');
			}
			
			 if (isset($_POST['login']) && isset($_POST['password'])){
				 $login = $_POST['login'];
				 $password = $_POST['password'];
									
				$login = mb_strtolower($login);

				$path = $_SERVER['DOCUMENT_ROOT']."/json/".$login.".json";
				if (file_exists($path)){
					$string = file_get_contents($path);
					$data = json_decode($string);
					if ($password == $data->password){
						$current_user = new User;
						$current_user->setName($data->name);
						$current_user->setSurname($data->surname);
						$current_user->setRole($data->role);
						$current_user->setLogin($data->login);
						
						Auth::setObj($current_user);
						
						header('Location: /view/message.php');
					}
					else echo "Incorrect password";
				}
				else  echo "Incorrect login";
			} 
				else  header('Location: /');
			
 
 