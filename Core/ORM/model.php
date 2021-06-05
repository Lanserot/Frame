<?php

namespace Core\ORM;

require 'interface.php';

class model implements \mustFunk
{
    static public function create(string $name)
    {
        if (file_exists('public/Models/' . $name . '.php')) {
            echo 'Модель с этим именем уже существует';
            return;
        }

        file_put_contents('public/Models/' . $name . '.php', '<?php
namespace public\odels;

use Core\Model\Model;

class '.$name.' extends Model
{
    public function index()
    {
        //Тело метода
    }
}
');
    }

    static public function delete(string $name)
    {
        unlink('public/Models/' . $name . '.php');
    }
}