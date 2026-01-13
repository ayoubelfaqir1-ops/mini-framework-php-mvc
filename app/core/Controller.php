<?php
namespace App\core;

class Controller
{
    protected $view;
    
    public function __construct()
    {
        $this->view = new View();
    }
    
    protected function render($template, $data = [])
    {
        return $this->view->render($template, $data);
    }
}