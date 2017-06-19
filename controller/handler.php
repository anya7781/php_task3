<?php

			require $_SERVER['DOCUMENT_ROOT']."/autoload.php";
			
			if (isset($_POST['exit'])){
				 Auth::destroyObj();
				 header('Location: /');
			}
			
			 if (isset($_POST['login']) && isset($_POST['password'])){
				 $login = $_POST['login'];
				 $password = $_POST['password'];
									
				$data = Files::getUser($login);

				if ($data != null){
					if ($password == $data->password){
						User::createUser($data);
					}
					else echo "Incorrect password";
				}
				else {
					$data = Files::getUserFromArray($login);
					if ($data != null){
						if ($password == $data['password']){
							User::createUser($data);
						}
						else echo "Incorrect password";
					}
					else echo "Incorrect login";
				}	
			} 
			else  header('Location: /');
			
 
 