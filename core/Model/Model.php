<?php

require $_SERVER['DOCUMENT_ROOT'] . '/core/DB/DB_func.php';

/**
 * Основной класс моделей, от которого будут наследоваться все модели
 */
class Model extends DB_func
{


    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function __destruct()
    {
    }
}