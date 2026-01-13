<?php
namespace App\core;

class Security
{
    public static function hash($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
    
    public static function verify($password, $hash)
    {
        return password_verify($password, $hash);
    }
    
    public static function generateToken()
    {
        return bin2hex(random_bytes(32));
    }
    
    public static function sanitize($input)
    {
        return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
    }
}