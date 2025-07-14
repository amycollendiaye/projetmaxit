<?php
 namespace App\Core;

class Session
{
    private static ?Session $session = null; 

    private function __construct()
    {
        if(session_status()===PHP_SESSION_NONE){
            session_start();
        }
    }

    public static function getInstance():Session
    {
        if(self::$session===null)
        {
            self::$session = new Session();
        }
        return self::$session;

    }

    public static function set($key, $data){
        $_SESSION[$key] = $data;

    }

    public static function get($key){
        return $_SESSION[$key]?? null;

    }

    public static function unset($key){
        unset($_SESSION[$key]);
    } 

    public static function isset($key){
        return isset($_SESSION[$key]);

    }

    public static function destroy(){
        session_unset();
        session_destroy();
        self::$instance = null;

    }



}