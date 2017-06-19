<?php
	
	interface Search {
		public static function getUser($login);
		public static function getUserFromArray($login);
	}
	
	
	class Files implements Search{
		
		public static function getUser ($login){
			$login = mb_strtolower($login);
			$path = $_SERVER['DOCUMENT_ROOT']."/json/".$login.".json";
			if (file_exists($path)){
				$string = file_get_contents($path);
				$data = json_decode($string);
				return $data;
			}
			else return null;
			
		}
		
		public static function setUser ($data, $login){
			$login = mb_strtolower($login);
			$path = $_SERVER['DOCUMENT_ROOT']."/json/".$login.".json";
			file_put_contents($path, json_encode($data));
			
			if ($login != mb_strtolower($data['login'])){
				rename ($path,$_SERVER['DOCUMENT_ROOT']."/json/".$data['login'].".json");
			}
		}
		
		public static function userList(){
			$dir    = $_SERVER['DOCUMENT_ROOT'].'/json/';
			$files1 = scandir($dir);
			
			$all_data = array();

			foreach ($files1 as $file){
				if (stristr($file, ".json") == TRUE){
					$path = $dir.$file;
					$string = file_get_contents($path);
					$data = json_decode($string);

					array_push($all_data, $data);
				}
			}
			
			return $all_data;
		}
		
		public static function getUserFromArray($login){
			include_once $_SERVER['DOCUMENT_ROOT']."/json/users.php"; 
			
			$login = mb_strtolower($login);
			return $users[$login];	
		}
		
	}