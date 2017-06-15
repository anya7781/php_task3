<?php

			session_start();

			require "/model/User.php";
            require "/model/Auth.php";
			
			if (isset($_POST['exit'])){
				session_destroy();
				 header('Location: /');
			}
			
			
			 if (isset($_POST['login']) && isset($_POST['password'])){
				 $login = $_POST['login'];
				 $password = $_POST['password'];
									
				$login = mb_strtolower($login);

				$path = "../json/".$login.".json";
				if (file_exists($path)){
					$string = file_get_contents($path);
					$data = json_decode($string);
					if ($password == $data->password){
                        $current_user = new User;
						Auth::setObj($current_user);
						header('Location: /view/message.php');
					}
					else echo "Incorrect password";
				}
				else  echo "Incorrect login";
			} 
				else  header('Location: /');
			
 
 