<?php
namespace App\core;

class View
{
    private $viewPath;
    
    public function __construct()
    {
        $this->viewPath = __DIR__ . '/../../app/views/';
    }
    
    public function render($template, $data = [])
    {
        extract($data);
        
        $templateFile = $this->viewPath . $template . '.php';
        
        if (file_exists($templateFile)) {
            ob_start();
            include $templateFile;
            return ob_get_clean();
        }
        
        throw new \Exception("Template {$template} not found at: {$templateFile}");
    }
}