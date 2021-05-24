<?php

require $_SERVER['DOCUMENT_ROOT'] . '/core/Controller/Controller.php';

class MainController extends Controller
{
    public function index()
    {
        $this->render('index');
    }
}