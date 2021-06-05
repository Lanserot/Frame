<?php

namespace public\Controllers;

use Core\Controller\Controller;

class MainController extends Controller
{
    public function index()
    {
        $this->render('index');
    }
}