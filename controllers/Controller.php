<?php

require 'core/DB_func.php';


class Controller
{
    protected $db = NULL;

    /**
     *
     */
    public function __construct()
    {
        $this->db = new DB_func();
        require $_SERVER['DOCUMENT_ROOT'] . '/view/header.php';
    }

    /**
     *
     */
    public function __destruct()
    {
        require $_SERVER['DOCUMENT_ROOT'] . '/view/footer.php';
        unset($this->db);
    }

    /**
     *
     */
    public function render($page, $param = [])
    {
        foreach ($param as $k => $v) {
            global $$k;
            $$k = $v;
        }
        
        require $_SERVER['DOCUMENT_ROOT'] . '/view/' . $page . '.php';
    }
}