<?php

namespace Controllers;

use Core\Controller\Controller;
use Models\ShowTextModel;

class ShowTextController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->showText = new ShowTextModel();
    }

    public function index()
    {
        $this->render('show/index', [
            'testParam' => $this->showText->get('test')->where('id > 2')->all(),
            'testParam2' => $this->showText->get('test')->where('id > 10')->first()
        ]);
    }
}