<?php
namespace App\core;

class Database
{
    private static $instance = null;
    private $connection;
    
    private function __construct()
    {
        $config = require_once 'config/config.php';
        $dsn = "mysql:host={$config['db_host']};dbname={$config['db_name']};charset=utf8";
        
        $this->connection = new \PDO($dsn, $config['db_user'], $config['db_pass'], [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ]);
    }
    
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance->connection;
    }
}