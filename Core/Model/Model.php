<?php
namespace core\Model;

use Core\DB\DB_func;

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