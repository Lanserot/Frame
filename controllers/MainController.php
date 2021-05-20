<?php

require 'Controller.php';

class MainController extends Controller
{
    public function index()
    {
        $this->render('index');
    }
}