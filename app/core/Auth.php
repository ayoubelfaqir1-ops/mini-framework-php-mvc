<?php
namespace App\core;

class Auth
{
    public static function login($email, $password)
    {
        // Login logic here
        Session::set('user_id', $userId);
        return true;
    }
    
    public static function logout()
    {
        Session::destroy();
    }
    
    public static function check()
    {
        return Session::has('user_id');
    }
    
    public static function user()
    {
        if (self::check()) {
            return Session::get('user_id');
        }
        return null;
    }
}