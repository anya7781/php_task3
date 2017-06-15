<?php

class Auth {
    private static $obj = 0;

    public static function setObj($obj){
       self::$obj = $obj;
    }

    public static function getObj(){
        return self::$obj;
    }
}