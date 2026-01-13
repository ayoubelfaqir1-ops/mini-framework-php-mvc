<?php
namespace App\models;

use App\core\Model;

class User extends Model
{
    protected $table = 'users';
    
    public function findByEmail($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }
}