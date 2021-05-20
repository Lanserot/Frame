<?php

require 'Controller.php';

class ShowTextController extends Controller
{
    public function index()
    {
        $this->render('show/index', [
            'testParam' => $this->db->query("SELECT * FROM test")
        ]);
    }
}