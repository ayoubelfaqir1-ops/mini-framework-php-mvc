<?php
namespace App\controllers\front;

use App\core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->render('home/index', [
            'title' => 'Welcome to Framework Minimaliste'
        ]);
    }
    
    public function about()
    {
        return $this->render('home/about', [
            'title' => 'About Us'
        ]);
    }
}