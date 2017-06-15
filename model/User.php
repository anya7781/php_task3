<?php
    class User {
        private $name, $surname, $login, $role;

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