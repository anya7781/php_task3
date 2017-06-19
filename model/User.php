<?php
	require $_SERVER['DOCUMENT_ROOT']."/autoload.php";

    class User {
        private $name, $surname, $login, $role;
		
		public function __toString(){
			return $this->name;
		}
		
		public static function createUser($data){
			$current_user = new User;
			if ($data->name != null){
				$current_user->setName($data->name);
				$current_user->setSurname($data->surname);
				$current_user->setRole($data->role);
				$current_user->setLogin($data->login);
			}
			else {
				$current_user->setName($data['name']);
				$current_user->setSurname($data['surname']);
				$current_user->setRole($data['role']);
				$current_user->setLogin($data['login']);
			}
						
			Auth::setObj($current_user);
						
			header('Location: /view/message.php');
		}

        public function setName($name){
            $this->name = $name;
    }
        public function setSurname($surname){
            $this->surname = $surname;
    }
        public function setLogin($login){
            $this->login = $login;
        }
        public function setRole($role){
            $this->role = $role;
        }
        public function getName(){
            return $this->name;
        }
        public function getSurname(){
           return $this->surname;
        }
        public function getLogin(){
           return $this->login;
        }
        public function getRole(){
            return $this->role;
        }

}