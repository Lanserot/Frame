<?php

namespace Core\Controller;

/**
 * Главный контроллер, от него наследуются все контроллеры
 */
class Controller
{

    /**
     *
     */
    public function __construct()
    {
        require $_SERVER['DOCUMENT_ROOT'] . '/public/view/header.php';
    }

    /**
     *
     */
    public function __destruct()
    {
        require $_SERVER['DOCUMENT_ROOT'] . '/public/view/footer.php';
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

        require $_SERVER['DOCUMENT_ROOT'] . '/public/view/' . $page . '.php';
    }
}