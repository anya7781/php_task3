<?php
			session_start();
			
			if (isset($_POST['exit'])){
				session_destroy();
				 header('Location: /');
			}
			
			 if (isset($_POST['login']) && isset($_POST['password'])){
				 $login = $_POST['login'];
				 $password = $_POST['password'];
				 if ($login == "Ann" && $password == "123"){
					 $_SESSION['login'] = $login;
					 $_SESSION['name'] = "Name";
					 $_SESSION['surname'] = "Surname";
					}
				 header('Location: /view/message.php');
			} 
			else  header('Location: /');
 
 