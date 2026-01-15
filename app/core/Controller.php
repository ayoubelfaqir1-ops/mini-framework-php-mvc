<?php
namespace App\core;

abstract class Controller
{
    protected $view;
    
    public function __construct() {
        $this->view = new View();
    }

    public function render($template , $data = [] ) {
        return $this->view->render($template, $data);
    }
}