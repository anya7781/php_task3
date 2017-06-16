<?php
	require_once "Auth.php"; 
	
	class Files {
		
		public static function getUser ($login){
			$path = $_SERVER['DOCUMENT_ROOT']."/json/".$login.".json";
			$string = file_get_contents($path);
			$data = json_decode($string);
			return $data;
		}
		public static function setUser ($data, $login){
			
			$path = $_SERVER['DOCUMENT_ROOT']."/json/".$login.".json";
			file_put_contents($path, json_encode($data));
			
			if ($login != $data->login){
				rename ($path,$_SERVER['DOCUMENT_ROOT']."/json/".$data->login.".json");
			}
		}
		
	}