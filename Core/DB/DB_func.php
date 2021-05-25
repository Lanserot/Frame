<?php
namespace Core\DB;

use Core\DB\DB;

/**
 * Класс с функциями для бд
 */
class DB_func extends DB
{
    public $sql = '';

    public function get($par)
    {
        $par = addslashes($par);
        $this->sql = 'SELECT * FROM ' . $par . ' ';
        return $this;
    }

    public function where($par)
    {
        $par = addslashes($par);
        $this->sql .= 'WHERE ' . $par . ' ';
        return $this;
    }

    public function first() // Конечная
    {
        return $this->query($this->sql . 'LIMIT 1');
    }

    public function all() // Конечная
    {
        return $this->query($this->sql);
    }

}