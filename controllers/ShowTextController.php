<?php

require 'Controller.php';

class ShowTextController extends Controller
{
    public function index()
    {
        $this->render('show/index', [
            'testParam' => $this->db->get('test')->where('id > 2')->all(),
            'testParam2' => $this->db->get('test')->where('id > 10')->first()
        ]);
    }
}