<?php
namespace App\core;

class Validator
{
    private $errors = [];
    
    public function required($field, $value)
    {
        if (empty($value)) {
            $this->errors[$field] = "{$field} is required";
        }
        return $this;
    }
    
    public function email($field, $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = "{$field} must be a valid email";
        }
        return $this;
    }
    
    public function min($field, $value, $min)
    {
        if (strlen($value) < $min) {
            $this->errors[$field] = "{$field} must be at least {$min} characters";
        }
        return $this;
    }
    
    public function hasErrors()
    {
        return !empty($this->errors);
    }
    
    public function getErrors()
    {
        return $this->errors;
    }
}