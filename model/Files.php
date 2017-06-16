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
		
	}