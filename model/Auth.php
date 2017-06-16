<?php
	session_start();
class Auth {

    public static function setObj($current_user){
      
		$_SESSION['object'] = $current_user;
		
    }

    public static function getObj(){
        if (isset($_SESSION['object'])){
			return $_SESSION['object'];
		}
		else{
			header('Location: /');
		}
    }
	
	public static function destroyObj(){
		session_destroy();
	}
}