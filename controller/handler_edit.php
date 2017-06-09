<?php
			session_start();
			if (!isset($_SESSION['login'])){
				header('Location: /');
			}
			if (isset($_POST['login'])){
				$_SESSION['login'] = $_POST['login'];
			}
			if (isset($_POST['name'])){
				$_SESSION['name'] = $_POST['name'];
			}
			if (isset($_POST['surname'])){
				$_SESSION['surname'] = $_POST['surname'];
			}
			header('Location: /view/profile.php');
			
 